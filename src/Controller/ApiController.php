<?php

namespace App\Controller;

use App\Repository\Plesk\DnsRecsRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * @Route("/api", name="dyndns_api_")
 */
class ApiController extends AbstractController
{
    const REGEX_IPV4 = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
    const REGEX_IPV6 = '/(?:^|(?<=\s))(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))(?=\s|$)/';

    /**
     * @var DnsRecsRepository
     */
    private $dnsRecsRepository;

    /**
     * @var Security
     */
    private $security;

    /**
     * @var string
     */
    private $currentUsername;

    public function __construct(DnsRecsRepository $dnsRecsRepository, Security $security)
    {
        $this->dnsRecsRepository = $dnsRecsRepository;
        $this->security = $security;
        $this->currentUsername = $this->security->getUser()->getUsername();
    }

    /**
     * @Route("/update/{name}", name="update")
     *
     * @param $name
     * @param Request $request
     *
     * @return Response
     */
    public function updateAction($name, Request $request): Response
    {
        $value = $request->query->get('value');
        $type = $request->query->get('type', 'A');
        $opt = $request->query->get('opt', false);

        if ($type == 'SRV' && !$opt) {
            throw $this->createNotFoundException(
                'No option set for the specified dns type ' . $type
            );
        } elseif (($type == 'A' && ! preg_match_all(self::REGEX_IPV4, $value))
            || ($type == 'AAAA' && ! preg_match_all(self::REGEX_IPV6, $value))
        ) {
            throw $this->createNotFoundException(
                'Wrong IP address syntax for ' . $value
            );
        }

        try {
            $record = $this->dnsRecsRepository->getDnsRecordByCurrentUser($name . '.');
        } catch (NoResultException $e) {
            throw $this->createNotFoundException(
                'No record found for user ' . $this->currentUsername
            );
        } catch (NonUniqueResultException $e) {
            throw $this->createNotFoundException(
                'Non unique result for entry ' . $name
            );
        }

        if ($type != $record->getType() || $opt != $record->getOpt()) {
            throw $this->createNotFoundException(
                'Wrong type or option provided for given dns record ' . $name
            );
        } else {
            $record->setVal($value);
            $record->setDisplayval($value);
            $this->dnsRecsRepository->save($record);
            $this->updateDomain($name);
        }

        return new Response('good ' . $record->getVal());
    }

    /**
     * @Route("/token/show/{id}", name="token")
     *
     * @param $id
     * @return Response
     */
    public function tokenAction($id): Response
    {
        $token = $this->getDoctrine()
            ->getRepository(Token::class)
            ->find($id);

        if (!$token) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return new Response(
            '<html><body>Token: '. $token->getValue().'</body></html>'
        );
    }

    /**
     * @Route("/show/{name}", name="show", defaults={"name": null})
     *
     * @param $name
     * @return Response
     */
    public function showAction($name): Response
    {
        if (!$name) {
            $records = $this->dnsRecsRepository->getAllDnsRecordsByCurrentUser();
        } else {
            try {
                $records[] = $this->dnsRecsRepository->getDnsRecordByCurrentUser($name . '.');
            } catch (NoResultException $e) {
                throw $this->createNotFoundException(
                    'No record found for user ' . $this->currentUsername
                );
            } catch (NonUniqueResultException $e) {
                throw $this->createNotFoundException(
                    'Non unique result for entry ' . $name
                );
            }
        }

        $contents = $this->renderView('table.html.twig', [
            'records' => $records
        ]);

        return new Response($contents);
    }

    /**
     * This function creates a file with domains to be updated by a cron job
     *
     * @param $name
     */
    protected function updateDomain($name) {
        $updateFile = $_SERVER['DOCUMENT_ROOT'] . '/../dns_update';
        file_put_contents($updateFile, $name . ';', FILE_APPEND);
    }
}
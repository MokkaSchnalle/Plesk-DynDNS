<?php

namespace App\Controller;

use App\Entity\Internal\Token;
use App\Entity\Plesk\DnsRecs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="dyndns_admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/token/show/{id}", name="token")
     *
     * @param $id
     * @return Response
     */
    public function getTokenById($id): Response
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
     * @Route("/show/{username}", name="dns_rec")
     *
     * @param $username
     * @return Response
     */
    public function showDnsRec($username): Response
    {
        $records = $this->getDoctrine()->getRepository(DnsRecs::class, 'plesk')
            ->getDnsRecordsByUser($username);

        if (!$records) {
            throw $this->createNotFoundException(
                'No records found for user '.$username
            );
        }

        $contents = $this->renderView('table.html.twig', [
            'records' => $records
        ]);

        return new Response($contents);
    }
}
<?php

namespace App\DataFixtures;

use App\Entity\Internal\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * UserFixtures constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUsername('TestUser');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'test123'
        ));
        $user->setEmail('testmail@test.localhost');
        $user->setIsActive(true);

        $manager->persist($user);
        $manager->flush();
    }
}

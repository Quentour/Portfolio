<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    

    public function load(ObjectManager $manager)
    {
    
        $user = new User();
        $user->setUsername("nalodd")
            ->setRoles(["ROLE_ADMIN"])
            ->setPassword($this->passwordEncoder->encodePassword($user, 'pswd'))
            ->setDescription("description")
            ->setPhone("0928408409")
            ->setMail("jean@nemar.com")
            ->setAddress("shfmkhdsùf");
        $manager->persist($user);

        $manager->flush();
    }
}

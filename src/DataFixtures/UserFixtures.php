<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Projects;
use App\Entity\Skills;



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
            ->setDescription("Passionné d’informatique depuis le plus jeune âge, je me suis très vite intéressé à la programmation ce qui m’a poussé a faire une formation dans le développement web. Je suis actuellement en recherche de stage pour confirmer mes compétence.")
            ->setPicture('/upload/logo.png')
            ->setPhone("0928408409")
            ->setMail("jean@nemar.com")
            ->setAddress("shfmkhdsùf");
        $manager->persist($user);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project1")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project2")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project3")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project4")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project5")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project6")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project7")
               ->setDescription("description dslkjfdsmm kmkm")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $manager->flush();
    }
}

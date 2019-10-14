<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Projects;
use App\Entity\Skill;



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
            ->setDescription("Passionné d’informatique depuis le plus jeune âge, je me suis très vite intéressé à la programmation. Suite a une formation au métier de développeur web et
              mobile a la Wild Code School je souhaite désormais trouver un emploi dans ce domaine.")
            ->setPicture('/upload/cv.jpg')
            ->setPhone("0928408409")
            ->setMail("quentin.latour.pro@gmail.com")
            ->setAddress("155 Avenue Roger Salengro");
        $manager->persist($user);

        $project = new Projects();
        $project->setUser($user)
               ->setName("Pawn Shop")
               ->setDescription(" Creation d'un site de e-comerce statique, projet d'une duree de 2 semaine realiser par groupe de 5 au tout debut de la formation en utilisant seulement du html et du css pour nous familiariser a ces technologie")
               ->setStartDate(null)
               ->setEndDate(null)
               ->setPicture('/upload/PawnShop.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("airBnB")
               ->setDescription(" Projet qui nous a inicier au modele MVC, nous avons travailler par groupe de 5 personnes sur une duree de 1 mois. Le but etait de programmer un site de chambre d'hote. Nous avons beaucoup travailler sur la partie d'administration qui presente les profits fait sur les chambres sous forme de graphique ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/airBnB.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project client")
               ->setDescription(" Developpement d'un site Web pour le Festival International de Theatre Sens Interdits. La plus grosse demande du client etait une partie administrative simple a utiliser c'est donc la que nous avons focaliser nos efforts. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/sensInterdit.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);



       $skill = new Skill();
       $skill->setName("PHP");
       $skill->setDescription("pas null");
       $skill->setUser($user);
       $manager->persist($skill);

       $skill = new Skill();
       $skill->setName("Javascript");
       $skill->setDescription("pas null");
       $skill->setUser($user);
       $manager->persist($skill);
       
       $skill = new Skill();
       $skill->setName("HTML");
       $skill->setDescription("pas null");
       $skill->setUser($user);
       $manager->persist($skill);

        $manager->flush();
    }
}

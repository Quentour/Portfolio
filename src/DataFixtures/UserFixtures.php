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
            ->setDescription("Passionné d’informatique depuis le plus jeune âge, je me suis très vite intéressé à la programmation ce qui m’a poussé a faire une formation dans le développement web. Je suis actuellement en recherche de stage pour confirmer mes compétence.")
            ->setPicture('/upload/logo.png')
            ->setPhone("0928408409")
            ->setMail("jean@nemar.com")
            ->setAddress("shfmkhdsùf");
        $manager->persist($user);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project1")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project2")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project3")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project4")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project5")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project6")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
               ->setLink('/upload/logo.png');
        $manager->persist($project);

        $project = new Projects();
        $project->setUser($user)
               ->setName("project7")
               ->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis magna vel purus lacinia ultricies. In et tristique sem. Cras eu leo pellentesque, faucibus purus et, vehicula quam. Suspendisse lacinia dictum tristique. Vestibulum volutpat ex mi, at aliquet ante mollis non. In lacinia urna arcu, non vulputate neque hendrerit eget. Praesent aliquam urna eget arcu egestas molestie. Nullam dictum quis ligula consequat facilisis. Nullam imperdiet hendrerit turpis, id molestie augue sagittis ut. Duis pharetra quam et diam fringilla sodales. Duis efficitur tristique tellus vitae aliquet. Vestibulum imperdiet est quis enim congue, vel congue arcu lacinia. Sed tellus sapien, cursus nec porta sit amet, imperdiet at sapien. Fusce mi turpis, mollis vel lacus id, porta pretium velit.

               Cras facilisis lacus a nunc dignissim suscipit. Donec nec porttitor leo. Phasellus ut semper sapien, at sagittis lectus. Nam semper quam non augue lacinia facilisis. Donec condimentum ipsum et neque hendrerit, in sodales lacus laoreet. Suspendisse potenti. Morbi consectetur eros ipsum, et mattis sem commodo vitae. Suspendisse nec odio maximus, porttitor mauris non, hendrerit tortor. Donec ultricies ligula malesuada vulputate vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In tincidunt mauris vitae porttitor ornare. Vestibulum laoreet nulla nisl, ac aliquet purus commodo ut. Sed ipsum sapien, commodo et velit egestas, mollis hendrerit urna. ")
               ->setStartDate(new \DateTime('06/04/2014'))
               ->setEndDate(new \DateTime('06/04/2019'))
               ->setPicture('/upload/logo.png')
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

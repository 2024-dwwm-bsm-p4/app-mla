<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {

        for ($i = 1; $i <= 5; $i++) {
            $user = new User();
            $user->setEmail("user{$i}@example.com");
            $user->setRoles(['ROLE_PRODUCTOR']);
            $user->setStructureName("user{$i}");
            $user->setPhoneNumber("000000000{$i}");

            // Hash and set the password
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'password');
            $user->setPassword($hashedPassword);
            
            
            $manager->persist($user);
        }

        for ($i = 6; $i <= 10; $i++) {
            $user = new User();
            $user->setEmail("user{$i}@example.com");
            $user->setRoles(['ROLE_COLLECTIVITY']);
            $user->setStructureName("user{$i}");
            $user->setPhoneNumber("000000000{$i}");

            // Hash and set the password
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'password');
            $user->setPassword($hashedPassword);
            
            
            $manager->persist($user);
        }

        
        // Create an admin user
        $admin = new User();
        $admin->setEmail('admin@admin.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setStructureName("ADMIN");
        $admin->setPhoneNumber("0000000008");


        // Hash and set the admin password
        $hashedPassword = $this->passwordHasher->hashPassword($admin, 'admin@');
        $admin->setPassword($hashedPassword);

        $manager->persist($admin);

        // Flush to save all users
        $manager->flush();

    }}
<?php

namespace App\EventSubscriber;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSuccessListenerSubscriber implements EventSubscriberInterface
{
    public function onLoginSuccessEvent(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();

        // Vérifiez si l'utilisateur est bien une instance de votre entité User
        if (!$user instanceof \App\Entity\User) {
            return;
    }

    // Vérifiez l'email et ajoutez le rôle si nécessaire
    if ($user->getEmail() === 'marine.lamour@gmx.fr') {
        $roles = $user->getRoles();
        if (!in_array('ROLE_ADMIN', $roles)) {
            $roles[] = 'ROLE_ADMIN';
            $user->setRoles($roles); // Assurez-vous que cette méthode existe dans l'entité User
        }
    }
}

public static function getSubscribedEvents(): array
{
    return [
        LoginSuccessEvent::class => 'onLoginSuccessEvent',
    ];
}
}


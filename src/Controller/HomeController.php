<?php

// src/Controller/HomeController.php

namespace App\Controller;

use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les messages depuis la base de données
        $messages = $entityManager->getRepository(Message::class)->findAll();

        // Si aucun message n'est trouvé, afficher un message par défaut
        if (!$messages) {
            $message = 'No messages found';
        } else {
            // Sinon, afficher le message du premier élément
            $message = $messages[0]->getMessage(); // S'assurer que getMessage() est bien une méthode de ton entité Message
        }

        return $this->render('home/index.html.twig', [
            'message' => $message,
            'controller_name' => 'Welcome',
        ]);
    }
}

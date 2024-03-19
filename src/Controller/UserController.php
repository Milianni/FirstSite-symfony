<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotNull;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;

class UserController extends AbstractController
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]

    public $id;
    #[ORM\Column(type: 'string', length: 255)]
    public $name;
    #[ORM\Column(type: 'string', length: 55)]
    public $email;
    #[ORM\Column(type: 'string', length: 255)]
    private $password;
    #[ORM\Column(type: 'string', length: 255)]
    public $role;
    #[ORM\Column(type: 'datetime_immutable')]
    public $createdAt;

    #[Route('/', name: 'user.index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/', name: 'Connection', methods: ['GET'])]
    public function connection(): Response
    {
        return $this->render('Connection.html.twig');
    }
    #[Route('/', name: 'user.create', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/{id}', name: 'user.show', methods: ['GET'])]
    public function show(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/{id}/edit', name: 'user.edit', methods: ['GET', 'POST'])]
    public function edit(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/{id}', name: 'user.delete', methods: ['POST'])]
    public function delete(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/', name: 'user.login', methods: ['GET', 'POST'])]
    public function login(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/logout', name: 'user.logout', methods: ['POST'])]
    public function logout(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/profile', name: 'user.profile', methods: ['GET'])]
    public function profile(): Response
    {
        return $this->render('user.html.twig');
    }
    #[Route('/profile/edit', name: 'user.profile.edit', methods: ['GET', 'POST'])]

    public function profileEdit(): Response
    {
        return $this->render('user.html.twig');
    }
}

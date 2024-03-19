<?php

namespace App\Entity;

use App\Repository\ConnectionRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotNull;
use symfony\Persitance\ObjectManager;



#[ORM\Entity(repositoryClass: ConnectionRepository::class)]
class Connection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $userName =Null;

    #[ORM\Column(length: 50)]
    private ?string $UserProfil = null;

    #[ORM\Column(length: 150)]
    private ?string $Password = null;

    #[ORM\Column(length: 55)]
    #[Assert\Email]
    private ?string $email = null;
   
    public function __construct(int $id, string $userName , string $email, string $UserProfil, string $Password )
    {
        $this->id=$id;
        $this->userName=$userName; 
        $this->email=$email;
        $this->UserProfil=$UserProfil;
        $this->Password=$Password;  

   }
     public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): static
    {
        $this->userName = $userName;

        return $this;
    }

    public function getUserProfil(): ?string
    {
        return $this->UserProfil;
    }

    public function setUserProfil(string $UserProfil): static
    {
        $this->UserProfil = $UserProfil;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): static
    {
        $this->Password = $Password;

        return $this;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
    public function getConnection(): ?Connection
    {
        if (isset($_POST['id'] ,  $_POST['UserName'] , $_POST['password'] , $_POST['UserProfil'] ,$_POST['email'] ))
        {
            $id = $_POST['id'];
            $UserName = $_POST['UserName'];
            $password = $_POST['password'];
            $UserProfil = $_POST['UserProfil'];
            $email = $_POST['email'];
            $userProfil = new Connection($id, $UserName, $password, $UserProfil, $email);
            return  $userProfil->getConnection();
        }
    }
}
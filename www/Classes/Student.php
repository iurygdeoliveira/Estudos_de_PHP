<?php

declare(strict_types=1);

namespace classes;

use interfaces\StudentInterface;
use traits\StudentTrait;

class Student implements StudentInterface {
 
    use StudentTrait;
    public $firstName;
    private $lastName;
    private $email;
    private $dados_nao_mapeados;
    protected $age;


    /**
     * Class constructor.
     */
    public function __construct(string $firstName, string $lastName, string $email, string $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->age = $age;
        echo "<p class='trigger accept'> Método __construct executado ! </p>";
    }
    

    /**
     * Get the value of firstName
     */ 
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName): string 
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);

        return $this->firstName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName(string $lastName): string
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);

        return $this->lastName;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): ?string 
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  bool
     */ 
    public function setEmail(string $email): bool
    {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}
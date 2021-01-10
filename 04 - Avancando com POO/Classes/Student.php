<?php

declare(strict_types=1);

namespace classes;

class Student {

    
    private $firstName;
    private $lastName;
    private $email;
    protected $age;

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
}
<?php
declare(strict_types=1);

namespace classes;

use DateTime;

class EventLive extends Event{


    private $address;

    public function __construct($event, DateTime $date, $price, $vacancies, string $address)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }

    
    public function getAddress(): string
    {
        return $this->address;
    }

    public function register( string $fullName, string $email): void
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        
    }
    
}
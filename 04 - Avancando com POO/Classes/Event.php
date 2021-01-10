<?php
declare(strict_types=1);

namespace classes;

use DateTime;

class Event{
    
    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

    
    public function __construct(string $event, DateTime $date, float $price, int $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register( string $fullName, string $email): void
    {
        if ($this->vacancies >= 1) {
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!</p>";
        }
    }

    protected function setRegister(string $fullName, string $email): void
    {
        $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getDate(): string
    {
        return $this->date->format("d/m/Y H:i");
    }

    
    public function getPrice(): string
    {
        return number_format($this->price, "2", ",", ".");
    }

    
    public function getRegister(): array
    {
        return $this->register;
    }

    
    public function getVacancies(): int 
    {
        return $this->vacancies;
    }
}
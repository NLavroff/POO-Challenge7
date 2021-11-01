<?php

class Person
{

    private string $lastName;
    private string $firstName;
    private string $adress;
    private string $dateOfBirth;

    public function __construct(string $lastName, string $firstName, string $adress, string $dateOfBirth)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adress = $adress;
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getPersonInfo(): string
    {
        return $this->lastName . " " . $this->firstName . " " . $this->adress . " " . $this->dateOfBirth . "<br>";
    }

    public function setAdress(string $adress)
    {
        $this->adress = $adress;
    }

    public function getAge(): string
    {
        $currentDate = date("Y-m-d");
        $diff = date_diff(date_create($this->dateOfBirth), date_create($currentDate));
        
        if ($diff != false) {
            return $diff->format('%y');
        }
    }
}
<?php

require_once 'Personne.php';

$person = new Person( 'Lavroff', 'Nathalie', 'Paris', "25-06-1987");

var_dump($person);

echo $person->getPersonInfo();
$person->setAdress('Koh Samui');
echo $person->getPersonInfo();
echo $person->getAge();
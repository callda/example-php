<?php

// Bootstrap
$vendorDir = __DIR__ . '/../vendor';

$loader = require_once $vendorDir . '/autoload.php';
$loader->register();

// Main
use Callda\Example\Person\Person;
use Callda\Example\Company\Company;
use Callda\Example\Company\ExampleCompany;
use Callda\Example\User\User;

$person = new Person(new ExampleCompany);

$r['name'] = $person->setName('Petr')->setSurname('Novak')->setPhone('828776523')->getName();
$r['test'] = Person::test();

try{
    $person->save();
} catch (Exception $e) {
    $r['e1'] = $e->getMessage();
}

// Throws catchable fatal error
// $person = new Person(new User);

print_r($r);

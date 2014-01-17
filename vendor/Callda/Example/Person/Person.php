<?php

/*
 * This file is part of the example package.
 *
 * (c) Karel Novotny <k4reln@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Callda\Example\Person;

use Callda\Example\Company\Company;
use Callda\Example\User\User;

/**
 * Person example class
 *
 * @author Karel Novotny <k4reln@gmail.com>
 */
class Person extends User implements IPerson
{
    /**
     * @var Company A Company instance
     */
    private $company;

    /**
     * @var string Person's
     */
    private $name;

    /**
     * @var string Person's surname
     */
    private $surname;

    /**
     * @var string Person's phone
     */
    private $phone;

    /**
     * Constructor.
     *
     * @param Callda\Example\Company\Company $company A Company instance
     *
     * @throws Exception
     */
    public function __construct(\Callda\Example\Company\ICompany $company)
    {
        $this->company = $company;
    }

    /**
     * Person's name getter
     *
     * @return string Name property
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Person's surname getter
     *
     * @return string Surname property
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Person's phone getter
     *
     * @return string Phone property
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Person's name setter
     *
     * @param string $name Person's name
     *
     * @return Person Return itself
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Person's snurname setter
     *
     * @param string $surname Person's surname
     *
     * @return Person Return itself
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Person's phone setter
     *
     * @param string $phone Person's phone
     *
     * @return Person Return itself
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Save person's properties
     *
     * @return Boolean True if success
     *
     * @throws Exception
     */
    public function save()
    {
        /*

        if(!$this->model->person->updateOrInsert($this->name, $this->surname, $this->phone)){
            throw new \Exception('Error during saving person\'s properties.');
        }

        */

        return true;
    }

    /**
     * Example of static method
     *
     * @return Boolean True if the test passed
     */
    public static function test()
    {
        return true;
    }
}

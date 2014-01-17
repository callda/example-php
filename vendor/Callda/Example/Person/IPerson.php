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

/**
 * Person example interface
 *
 * @author Karel Novotny <k4reln@gmail.com>
 */
interface IPerson
{
    /**
     * Person's name getter
     *
     * @return string Name property
     */
    public function getName();

    /**
     * Person's surname getter
     *
     * @return string Surname property
     */
    public function getSurname();

    /**
     * Person's phone getter
     *
     * @return string Phone property
     */
    public function getPhone();

    /**
     * Save person to database
     *
     * @return Person Return itself
     */
    public function save();
}

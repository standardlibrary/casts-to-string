<?php
declare(strict_types=1);
/**
 * This file is part of the Standard Library Casts to String package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Contracts;

/**
* Interface for casting objects to a string
*
* Use this interface to describe that an object can be cast to a string
* literal. The string should be a representation of the object.
*
* @see http://php.net/manual/en/language.oop5.magic.php#object.tostring
* @author Simon Deeley <simondeeley@users.noreply.github.com>
*/
interface CastsToString
{
    /**
     * Cast to string
     *
     * Should return a string literal which is a representation of the object.
     * Throwing an exception from this method is unpredicatable and should be
     * avoided.
     *
     * @return string - A string representing or describing the object
     */
    public function __toString(): string;
}

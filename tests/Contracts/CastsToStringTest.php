<?php
declare(strict_types=1);
/**
 * This file is part of the Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

use PHPUnit\Framework\TestCase;
use StandardLibrary\Contracts\CastsToString;

/**
 * Unit tests for CastsToString
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class CastsToStringTest extends TestCase
{
    /**
     * @static
     * @var ReflectionClass
     */
    protected static $interface;

    /**
     * Set up ReflectionClass instance
     *
     * @static
     * @return void
     */
    final public static function setUpBeforeClass(): void
    {
        self::$interface = new ReflectionClass(CastsToString::class);
    }

    /**
     * CastsToString should be an interface
     *
     * @test
     * @final
     * @return void
     */
    final public function shouldBeInterface(): void
    {
        $this->assertTrue(self::$interface->isInterface());
    }

    /**
     * Interface should have one method named '__toString'
     *
     * @test
     * @final
     * @return void
     */
    final public function interfaceShouldHaveOneMethod(): void
    {
        $this->assertTrue(self::$interface->hasMethod('__toString'));
        $this->assertCount(1, self::$interface->getMethods());
    }

    /**
     * Describe method signatue of '__toString'
     *
     * @test
     * @final
     * @return void
     */
    final public function describeMethodSignatureOfToString(): void
    {
        $method = self::$interface->getMethod('__toString');

        $this->assertEquals(0, $method->getNumberOfParameters());
        $this->assertTrue((string) $method->getReturnType() === 'string');
    }
}

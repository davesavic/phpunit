<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\TestCase;

/**
 * @since      File available since Release 3.7.20
 */
class Framework_TestFailureTest extends TestCase
{
    /**
     * @covers PHPUnit_Framework_TestFailure::toString
     */
    public function testToString()
    {
        $test      = new self(__FUNCTION__);
        $exception = new Exception('message');
        $failure   = new PHPUnit_Framework_TestFailure($test, $exception);

        $this->assertEquals(__METHOD__ . ': message', $failure->toString());
    }
}

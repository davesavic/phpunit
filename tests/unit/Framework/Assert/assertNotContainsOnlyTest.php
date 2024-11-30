<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\TestDox;

#[CoversMethod(Assert::class, 'assertNotContainsOnly')]
#[TestDox('assertNotContainsOnly()')]
#[Small]
final class assertNotContainsOnlyTest extends TestCase
{
    #[DataProviderExternal(assertContainsOnlyTest::class, 'failureProvider')]
    public function testSucceedsWhenConstraintEvaluatesToTrue(NativeType $type, iterable $haystack): void
    {
        $this->assertNotContainsOnly($type, $haystack);
    }

    #[DataProviderExternal(assertContainsOnlyTest::class, 'successProvider')]
    public function testFailsWhenConstraintEvaluatesToFalse(NativeType $type, iterable $haystack): void
    {
        $this->expectException(AssertionFailedError::class);

        $this->assertNotContainsOnly($type, $haystack);
    }
}

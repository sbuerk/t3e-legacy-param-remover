<?php

declare(strict_types=1);

namespace SBUERK\LegacyParamRemover\Tests\Functional;

use SBUERK\LegacyParamRemover\SimpleService;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class SimpleServiceTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'sbuerk/t3e-legacy-param-remover',
    ];

    /**
     * @test
     */
    public function methodTextReturnsExpectedValue(): void
    {
        self::assertSame('simpleservice::text(1)', $this->get(SimpleService::class)->text(1));
    }
}

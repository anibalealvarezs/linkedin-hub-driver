<?php

declare(strict_types=1);

namespace Tests\Unit;

use Anibalealvarezs\LinkedInHubDriver\Drivers\LinkedInDriver;
use PHPUnit\Framework\TestCase;

final class LinkedInDriverCanonicalMetricDictionaryTest extends TestCase
{
    public function testReturnsCorrectMetricMappings(): void
    {
        $dictionary = LinkedInDriver::getCanonicalMetricDictionary();

        $this->assertIsArray($dictionary);
        $this->assertArrayHasKey('spend', $dictionary);
        $this->assertContains('cost_in_local_currency', $dictionary['spend']);
        $this->assertArrayHasKey('conversions', $dictionary);
        $this->assertContains('external_website_conversions', $dictionary['conversions']);
    }
}

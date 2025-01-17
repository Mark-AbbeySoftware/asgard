<?php

namespace AbbeySoftwareDevelopment\Sidebar\Tests\Domain;

use AbbeySoftwareDevelopment\Sidebar\Badge;
use AbbeySoftwareDevelopment\Sidebar\Domain\DefaultBadge;
use Mockery as m;
use PHPUnit\Framework\TestCase as TestCase;

class DefaultBadgeTest extends TestCase
{
    /**
     * @var Illuminate\Contracts\Container\Container
     */
    protected $container;

    /**
     * @var DefaultBadge
     */
    protected $badge;

    protected function setUp(): void
    {
        $this->container = m::mock('Illuminate\Contracts\Container\Container');
        $this->badge = new DefaultBadge($this->container);
    }

    public function test_can_instantiate_new_badge()
    {
        $badge = new DefaultBadge($this->container);

        $this->assertInstanceOf('AbbeySoftwareDevelopment\Sidebar\Badge', $badge);
    }

    public function test_can_have_custom_badges()
    {
        $badge = new StubBadge($this->container);

        $this->assertInstanceOf('AbbeySoftwareDevelopment\Sidebar\Badge', $badge);
    }

    public function test_can_set_value()
    {
        $this->badge->setValue('value');
        $this->assertEquals('value', $this->badge->getValue());
    }

    public function test_can_set_class()
    {
        $this->badge->setClass('class');
        $this->assertEquals('class', $this->badge->getClass());
    }

    public function test_badge_can_be_cached()
    {
        $this->badge->setValue('value');
        $this->badge->setClass('class');

        $serialized = serialize($this->badge);
        $unserialized = unserialize($serialized);

        $this->assertInstanceOf('AbbeySoftwareDevelopment\Sidebar\Badge', $unserialized);
        $this->assertEquals('value', $unserialized->getValue());
        $this->assertEquals('class', $unserialized->getClass());
    }
}

class StubBadge extends DefaultBadge implements Badge
{
}

<?php

namespace AbbeySoftwareDevelopment\Sidebar\Tests\Domain;

use AbbeySoftwareDevelopment\Sidebar\Domain\DefaultGroup;
use AbbeySoftwareDevelopment\Sidebar\Domain\DefaultItem;
use AbbeySoftwareDevelopment\Sidebar\Group;
use Mockery as m;
use PHPUnit\Framework\TestCase as TestCase;

class DefaultGroupTest extends TestCase
{
    /**
     * @var Illuminate\Contracts\Container\Container
     */
    protected $container;

    /**
     * @var DefaultGroup
     */
    protected $group;

    protected function setUp(): void
    {
        $this->container = m::mock('Illuminate\Contracts\Container\Container');
        $this->group = new DefaultGroup($this->container);
    }

    public function test_can_instantiate_new_group()
    {
        $group = new DefaultGroup($this->container);

        $this->assertInstanceOf('AbbeySoftwareDevelopment\Sidebar\Group', $group);
    }

    public function test_can_have_custom_groups()
    {
        $group = new StubGroup($this->container);

        $this->assertInstanceOf('AbbeySoftwareDevelopment\Sidebar\Group', $group);
    }

    public function test_group_can_be_cached()
    {
        $item = new DefaultItem($this->container);
        $this->group->addItem($item);

        $serialized = serialize($this->group);
        $unserialized = unserialize($serialized);

        $this->assertInstanceOf('AbbeySoftwareDevelopment\Sidebar\Group', $unserialized);
        $this->assertInstanceOf('Illuminate\Support\Collection', $unserialized->getItems());

        $this->assertCount(1, $unserialized->getItems());
    }
}

class StubGroup extends DefaultGroup implements Group
{
}

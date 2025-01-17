<?php

namespace AbbeySoftwareDevelopment\Sidebar\Infrastructure;

use Illuminate\Contracts\Container\Container;
use AbbeySoftwareDevelopment\Sidebar\Exceptions\LogicException;
use AbbeySoftwareDevelopment\Sidebar\Sidebar;

class ContainerResolver implements SidebarResolver
{
    /**
     * @var Container
     */
    protected $container;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param $name
     *
     * @return Sidebar
     * @throws LogicException
     */
    public function resolve($name)
    {
        $sidebar = $this->container->make($name);

        if (!$sidebar instanceof Sidebar) {
            throw new LogicException('Your sidebar should implement the Sidebar interface');
        }

        $sidebar->build();

        return $sidebar;
    }
}

<?php

namespace AbbeySoftwareDevelopment\Sidebar\Infrastructure;

use AbbeySoftwareDevelopment\Sidebar\Sidebar;

interface SidebarResolver
{
    /**
     * @param string $name
     *
     * @return Sidebar
     */
    public function resolve($name);
}

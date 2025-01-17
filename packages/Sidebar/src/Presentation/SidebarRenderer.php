<?php

namespace AbbeySoftwareDevelopment\Sidebar\Presentation;

use AbbeySoftwareDevelopment\Sidebar\Sidebar;

interface SidebarRenderer
{
    /**
     * @param Sidebar $sidebar
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(Sidebar $sidebar);
}

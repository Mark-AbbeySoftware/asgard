<?php

namespace AbbeySoftwareDevelopment\Sidebar\Infrastructure;

interface SidebarFlusher
{
    /**
     * Flush
     *
     * @param $name
     */
    public function flush($name);
}

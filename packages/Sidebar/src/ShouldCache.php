<?php

namespace AbbeySoftwareDevelopment\Sidebar;

use Serializable;

interface ShouldCache extends Serializable
{
    /**
     * @return array
     */
    public function getCacheables();
}

<?php

namespace AbbeySoftwareDevelopment\Modules\Lumen;

use AbbeySoftwareDevelopment\Modules\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}

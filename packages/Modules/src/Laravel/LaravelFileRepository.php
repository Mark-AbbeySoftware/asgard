<?php

namespace AbbeySoftwareDevelopment\Modules\Laravel;

use AbbeySoftwareDevelopment\Modules\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}

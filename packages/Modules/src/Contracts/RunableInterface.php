<?php

namespace AbbeySoftwareDevelopment\Modules\Contracts;

interface RunableInterface
{
    /**
     * Run the specified command.
     *
     * @param string $command
     */
    public function run($command);
}

<?php

namespace AbbeySoftwareDevelopment\Sidebar\Presentation\Illuminate;

use Illuminate\Contracts\View\Factory;
use AbbeySoftwareDevelopment\Sidebar\Append;

class IlluminateAppendRenderer
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @var string
     */
    protected $view = 'sidebar::append';

    /**
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param Append $append
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(Append $append)
    {
        if ($append->isAuthorized()) {
            return $this->factory->make($this->view, [
                'append' => $append
            ])->render();
        }
    }
}

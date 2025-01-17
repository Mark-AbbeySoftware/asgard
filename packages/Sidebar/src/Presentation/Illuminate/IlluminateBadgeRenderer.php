<?php

namespace AbbeySoftwareDevelopment\Sidebar\Presentation\Illuminate;

use Illuminate\Contracts\View\Factory;
use AbbeySoftwareDevelopment\Sidebar\Badge;

class IlluminateBadgeRenderer
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @var string
     */
    protected $view = 'sidebar::badge';

    /**
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param Badge $badge
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(Badge $badge)
    {
        if ($badge->isAuthorized()) {
            return $this->factory->make($this->view, [
                'badge' => $badge
            ])->render();
        }
    }
}

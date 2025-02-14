<?php

namespace AbbeySoftwareDevelopment\Sidebar\Domain;

use Illuminate\Contracts\Container\Container;
use AbbeySoftwareDevelopment\Sidebar\Append;
use AbbeySoftwareDevelopment\Sidebar\Traits\AuthorizableTrait;
use AbbeySoftwareDevelopment\Sidebar\Traits\CacheableTrait;
use AbbeySoftwareDevelopment\Sidebar\Traits\CallableTrait;
use AbbeySoftwareDevelopment\Sidebar\Traits\RouteableTrait;
use Serializable;

class DefaultAppend implements Append, Serializable
{
    use CallableTrait, CacheableTrait, RouteableTrait, AuthorizableTrait;

    /**
     * @var Container
     */
    protected $container;

    /**
     * @var string|null
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $icon = 'fa fa-plus';

    /**
     * @var array
     */
    protected $cacheables = [
        'name',
        'url',
        'icon'
    ];

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return $this
     */
    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     *
     * @return $this
     */
    public function icon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    public function __serialize(): array
    {
        return [
            'name' => $this->name,
            'url' => $this->url,
            'icon' => $this->icon,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->name = $data['name'];
        $this->url = $data['url'];
        $this->icon = $data['icon'];
    }
}

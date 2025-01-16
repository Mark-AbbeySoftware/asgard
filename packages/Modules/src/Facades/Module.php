<?php

namespace absdev\Modules\Facades;

use Illuminate\Support\Facades\Facade;

class Module extends Facade
{
    /**
     * @method static array all()
     * @method static array getCached()
     * @method static array scan()
     * @method static \absdev\Modules\Collection toCollection()
     * @method static array getScanPaths()
     * @method static array allEnabled()
     * @method static array allDisabled()
     * @method static int count()
     * @method static array getOrdered($direction = 'asc')
     * @method static array getByStatus($status)
     * @method static \absdev\Modules\Module find(string $name)
     * @method static \absdev\Modules\Module findOrFail(string $name)
     * @method static string getModulePath($moduleName)
     * @method static \Illuminate\Filesystem\Filesystem getFiles()
     * @method static mixed config(string $key, $default = null)
     * @method static string getPath()
     * @method static void boot()
     * @method static void register(): void
     * @method static string assetPath(string $module)
     * @method static bool delete(string $module)
     * @method static bool isEnabled(string $name)
     * @method static bool isDisabled(string $name)
     */
    protected static function getFacadeAccessor(): string
    {
        return 'modules';
    }
}

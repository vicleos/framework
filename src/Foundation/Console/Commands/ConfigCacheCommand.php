<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-21 12:07
 */
namespace Notadd\Foundation\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Kernel as ConsoleKernelContract;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Contracts\Http\Kernel as HttpKernelContract;
use Illuminate\Filesystem\Filesystem;
use Notadd\Foundation\Application;
use Notadd\Foundation\Console\Kernel as ConsoleKernel;
use Notadd\Foundation\Exception\Handler;
use Notadd\Foundation\Http\Kernel;

/**
 * Class ConfigCacheCommand.
 */
class ConfigCacheCommand extends Command
{
    /**
     * @var string
     */
    protected $name = 'config:cache';

    /**
     * @var string
     */
    protected $description = 'Create a cache file for faster configuration loading';

    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * ConfigCacheCommand constructor.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * @return void
     */
    public function fire()
    {
        $this->call('config:clear');
        $config = $this->getFreshConfiguration();
        $this->files->put($this->laravel->getCachedConfigPath(),
            '<?php return ' . var_export($config, true) . ';' . PHP_EOL);
        $this->info('Configuration cached successfully!');
    }

    /**
     * @return array
     */
    protected function getFreshConfiguration()
    {
        $application = new Application($this->laravel->basePath());
        $application->singleton(HttpKernelContract::class, Kernel::class);
        $application->singleton(ConsoleKernelContract::class, ConsoleKernel::class);
        $application->singleton(ExceptionHandler::class, Handler::class);
        $application->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $application['config']->all();
    }
}

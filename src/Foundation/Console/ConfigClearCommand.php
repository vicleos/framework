<?php
/**
 * This file is part of Notadd.
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-21 12:07
 */
namespace Notadd\Foundation\Console;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
/**
 * Class ConfigClearCommand
 * @package Notadd\Foundation\Console\Consoles
 */
class ConfigClearCommand extends Command {
    /**
     * @var string
     */
    protected $name = 'config:clear';
    /**
     * @var string
     */
    protected $description = 'Remove the configuration cache file';
    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;
    /**
     * ConfigClearCommand constructor.
     * @param \Illuminate\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files) {
        parent::__construct();
        $this->files = $files;
    }
    /**
     * @return void
     */
    public function fire() {
        $this->files->delete($this->laravel->getCachedConfigPath());
        $this->info('Configuration cache cleared!');
    }
}
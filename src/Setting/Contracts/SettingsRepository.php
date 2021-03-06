<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-24 10:08
 */
namespace Notadd\Foundation\Setting\Contracts;

/**
 * Interface SettingsRepository.
 */
interface SettingsRepository
{
    /**
     * Get all settings.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all();

    /**
     * Delete a setting value.
     *
     * @param $keyLike
     */
    public function delete($keyLike);

    /**
     * Get a setting value by key.
     *
     * @param      $key
     * @param null $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Set a setting value from key and value.
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value);
}

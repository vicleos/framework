<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-01-13 12:17
 */

return [
    'name'            => env('APP_NAME', 'My Application'),
    'env'             => env('APP_ENV', 'production'),
    'debug'           => env('APP_DEBUG', true),
    'url'             => env('APP_URL', 'http://localhost'),
    'timezone'        => env('APP_TIMEZONE', 'PRC'),
    'locale'          => env('APP_LOCALE', 'zh-cn'),
    'fallback_locale' => env('APP_LOCALE_FALLBACK', 'zh-cn'),
    'key'             => env('APP_KEY'),
    'cipher'          => 'AES-256-CBC',
    'log'             => env('APP_LOG', 'daily'),
    'log_level'       => env('APP_LOG_LEVEL', 'debug'),
    'providers'       => [
        Notadd\Foundation\Attachment\AttachmentServiceProvider::class,
        Notadd\Foundation\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Notadd\Foundation\Bus\BusServiceProvider::class,
        Notadd\Foundation\Cache\CacheServiceProvider::class,
        Notadd\Foundation\Composer\ComposerServiceProvider::class,
        Notadd\Foundation\Console\ConsoleServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Notadd\Foundation\Database\DatabaseServiceProvider::class,
        Notadd\Foundation\Debug\DebugServiceProvider::class,
        Notadd\Foundation\Editor\EditorServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Notadd\Foundation\Extension\ExtensionServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Notadd\Installer\InstallerServiceProvider::class,
        Notadd\Foundation\Image\ImageServiceProvider::class,
        Notadd\Foundation\Mail\MailServiceProvider::class,
        Notadd\Foundation\Member\MemberServiceProvider::class,
        Notadd\Foundation\Database\MigrationServiceProvider::class,
        Notadd\Foundation\Module\ModuleServiceProvider::class,
        Notadd\Foundation\Navigation\NavigationServiceProvider::class,
        Notadd\Foundation\Notification\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Notadd\Foundation\Passport\PassportServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Notadd\Foundation\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Notadd\Foundation\SearchEngine\SearchEngineServiceProvider::class,
        Notadd\Foundation\Session\SessionServiceProvider::class,
        Notadd\Foundation\Setting\SettingServiceProvider::class,
        Notadd\Foundation\Theme\ThemeServiceProvider::class,
        Notadd\Foundation\Translation\TranslationServiceProvider::class,
        Notadd\Foundation\Validation\ValidationServiceProvider::class,
        Notadd\Foundation\Yaml\YamlServiceProvider::class,
        Notadd\Foundation\Http\HttpServiceProvider::class,
        Notadd\Foundation\Administration\AdministrationServiceProvider::class,
    ],
    'aliases'         => [
        'App'          => Illuminate\Support\Facades\App::class,
        'Artisan'      => Illuminate\Support\Facades\Artisan::class,
        'Auth'         => Illuminate\Support\Facades\Auth::class,
        'Blade'        => Illuminate\Support\Facades\Blade::class,
        'Cache'        => Illuminate\Support\Facades\Cache::class,
        'Config'       => Illuminate\Support\Facades\Config::class,
        'Cookie'       => Illuminate\Support\Facades\Cookie::class,
        'Crypt'        => Illuminate\Support\Facades\Crypt::class,
        'DB'           => Illuminate\Support\Facades\DB::class,
        'Eloquent'     => Illuminate\Database\Eloquent\Model::class,
        'Event'        => Illuminate\Support\Facades\Event::class,
        'File'         => Illuminate\Support\Facades\File::class,
        'Gate'         => Illuminate\Support\Facades\Gate::class,
        'Hash'         => Illuminate\Support\Facades\Hash::class,
        'Lang'         => Illuminate\Support\Facades\Lang::class,
        'Log'          => Illuminate\Support\Facades\Log::class,
        'Mail'         => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password'     => Illuminate\Support\Facades\Password::class,
        'Queue'        => Illuminate\Support\Facades\Queue::class,
        'Redirect'     => Illuminate\Support\Facades\Redirect::class,
        'Redis'        => Illuminate\Support\Facades\Redis::class,
        'Request'      => Illuminate\Support\Facades\Request::class,
        'Response'     => Illuminate\Support\Facades\Response::class,
        'Route'        => Illuminate\Support\Facades\Route::class,
        'Schema'       => Illuminate\Support\Facades\Schema::class,
        'Session'      => Illuminate\Support\Facades\Session::class,
        'Storage'      => Illuminate\Support\Facades\Storage::class,
        'URL'          => Illuminate\Support\Facades\URL::class,
        'Validator'    => Illuminate\Support\Facades\Validator::class,
        'View'         => Illuminate\Support\Facades\View::class,
    ],
];

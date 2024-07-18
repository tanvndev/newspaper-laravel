<?php

namespace App\Providers;

use App\Http\ViewComposers\{
    MenuComposer,
    SystemComposer
};


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    // Khai bao cac service
    protected $serviceBindings = [
        // Base
        'App\Services\Interfaces\BaseServiceInterface' => 'App\Services\BaseService',
        // User
        'App\Services\Interfaces\UserServiceInterface' => 'App\Services\UserService',
        // UserCatalogue
        'App\Services\Interfaces\UserCatalogueServiceInterface' => 'App\Services\UserCatalogueService',
        // Post
        'App\Services\Interfaces\PostServiceInterface' => 'App\Services\PostService',
        // PostCatalogue
        'App\Services\Interfaces\PostCatalogueServiceInterface' => 'App\Services\PostCatalogueService',
        // Language
        'App\Services\Interfaces\LanguageServiceInterface' => 'App\Services\LanguageService',
        // Permission
        'App\Services\Interfaces\PermissionServiceInterface' => 'App\Services\PermissionService',
        // System
        'App\Services\Interfaces\SystemServiceInterface' => 'App\Services\SystemService',
        // Comment
        'App\Services\Interfaces\CommentServiceInterface' => 'App\Services\CommentService',
    ];
    public function register(): void
    {
        // 
        foreach ($this->serviceBindings as $key => $value) {
            $this->app->bind($key, $value);
        }

        $this->app->register(AppRepositoryProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $composerClass = [
            SystemComposer::class,
            MenuComposer::class
        ];
        foreach ($composerClass as $value) {
            view()->composer('clients.*', $value);
        }
    }
}

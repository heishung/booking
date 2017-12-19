<?php

namespace App\Providers;
use View;

use Illuminate\Http\Request;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use App\Models\Option;
use App\Models\slide;
use App\Models\Post;
use App\Models\Hotels;
use App\Models\Locations;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
            View::share('options',Option::pluck('value', 'name'));
            View::share('slidelocation',Locations::all());
            View::share('slidehotels',Hotels::all());
            View::share('slides',slide::all());
            View::share('itineraries',Post::where('slug','=','itineraries')->first());
            View::share('services',Post::paginate(4)->where('slug','=','services'));
            View::share('aboutus',Post::where('slug','=','aboutus')->first());

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
	    if ($this->app->environment() !== 'production') {
		    $this->app->register(IdeHelperServiceProvider::class);
	    }
    }
}

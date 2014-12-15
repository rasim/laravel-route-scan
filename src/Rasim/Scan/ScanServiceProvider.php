<?php 

namespace Rasim\Scan;

use Illuminate\Support\ServiceProvider;

class TaraServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('rasim/scan');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['router'] = $this->app->share(function($app) {
			$router = new Router($app['events'], $app);
			if ($app['env'] == 'testing')
			{
				$router->disableFilters();
			}
			return $router;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('router');
	}

}



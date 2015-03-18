<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('partials.nav', function($view) {
			$connection = \Redis::connection();

			try {
				$redisInfo = $connection->info();
				$isConnected = true;
			} catch (\Exception $e) {
				\Session::flash('errors', $e->getMessage());
				$redisInfo = null;
				$isConnected = false;
			}
			$view->with('isConnected', $isConnected);
			$view->with('redisInfo', $redisInfo);
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}

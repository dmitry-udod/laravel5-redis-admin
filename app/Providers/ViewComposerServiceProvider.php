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
		$connection = \Redis::connection();

		try {
			$serverInfo = $connection->info();
			$isConnected = true;
		} catch (\Exception $e) {
			\Session::flash('error', 'Check Redis server connection. ' . $e->getMessage());
			$serverInfo = null;
			$isConnected = false;
		}
		\View::share(compact('isConnected', 'serverInfo'));
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

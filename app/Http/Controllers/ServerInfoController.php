<?php namespace App\Http\Controllers;

class ServerInfoController extends Controller
{
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('server_info.index');
	}

}

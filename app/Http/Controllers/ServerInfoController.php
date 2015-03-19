<?php namespace App\Http\Controllers;

class ServerInfoController extends Controller
{
	/**
	 * Show redis server info
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('server_info.index');
	}

}

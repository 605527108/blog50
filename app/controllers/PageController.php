<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /page
	 *
	 * @return Response
	 */
	public function index()
	{
            Cookie::queue('bla', 'mojoman', 60 * 24 * 30); // 30 days

            return View::make('page.index');
        }
}

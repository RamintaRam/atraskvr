<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class VRFrontendController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /vrfrontend
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
		return view('frontend.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vrfrontend/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vrfrontend
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /vrfrontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /vrfrontend/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /vrfrontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /vrfrontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
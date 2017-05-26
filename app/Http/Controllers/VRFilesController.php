<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class VRFilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /vrfiles
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        return view('admin.resources');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vrfiles/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $configuration['auth'] = (auth()->user());
        return view('admin.resources', $configuration);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vrfiles
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /vrfiles/{id}
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
	 * GET /vrfiles/{id}/edit
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
	 * PUT /vrfiles/{id}
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
	 * DELETE /vrfiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
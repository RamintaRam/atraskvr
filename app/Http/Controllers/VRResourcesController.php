<?php namespace App\Http\Controllers;

use App\Models\VRResources;
use Illuminate\Routing\Controller;

class VRResourcesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /vrresources
	 *
	 * @return Response
	 */

    public function upload(UploadedFile $file)
    {

    }


	public function adminIndex()
	{
        return view('admin.resources');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vrresources/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vrresources
	 *
	 * @return Response
	 */
	public function store()
	{


    }

	/**
	 * Display the specified resource.
	 * GET /vrresources/{id}
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
	 * GET /vrresources/{id}/edit
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
	 * PUT /vrresources/{id}
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
	 * DELETE /vrresources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
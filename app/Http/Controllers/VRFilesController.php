<?php namespace App\Http\Controllers;

use App\Models\VRPages;
use App\Models\VRPagesResourcesConnections;
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
	public function adminStore()
	{
//        $resource = request()->file('file');
//        $resourceController = new VRResourcesController();
//        $record = $resourceController->upload($resource);
//        VRPagesResourcesConnections::create([
//            "pages_id" => "f94cb50b-8b7c-457b-b44c-4616974ddb94",
//            "resources_id" => $record->id,


            VRPagesResourcesConnections::create([
                'pages_id' => $data['pages_id'],
                'resources_id' => $data['resources_id'],

]);


        $data = request()->all();
        $resource = request()->file('image');
        $imageUpload = new VRUploadController();
        $record = $imageUpload->upload($resource);


        $page = VRPages::create([
            'pages_categories_id' => $data['category_'],
            'cover_image_id' => $record['id']
        ]);
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
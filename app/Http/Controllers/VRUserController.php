<?php namespace App\Http\Controllers;

use App\Models\VRUsers;
use Illuminate\Routing\Controller;

class VRUserController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /vruser
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $dataFromModel = new VRUsers();

        $configuration['list'] = VRUsers::get()->toArray();
        $configuration['tableName'] = $dataFromModel->getTableName();

        if($configuration['list'] == [])
        {
            $configuration['error'] = ['message' => trans("Create some " . $configuration['tableName'] . ", then go to list")];
            return view('admin.list', $configuration);
        }

        return view('admin.list', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vruser/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vruser
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /vruser/{id}
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
	 * GET /vruser/{id}/edit
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
	 * PUT /vruser/{id}
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
	 * DELETE /vruser/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
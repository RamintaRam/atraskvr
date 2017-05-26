<?php namespace App\Http\Controllers;

use App\Models\VRLanguages;
use App\Models\VRPages;
use App\Models\VRPagesCategories;
use App\Models\VRPagesTranslations;
use App\Models\VRResources;
use Illuminate\Routing\Controller;

class VRPagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /vrpages
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vrpages/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();
        $configuration['dropdown']['pages_categories_id'] = VRPagesCategories::all()->pluck('count', 'id')->toArray();
        $configuration['dropdown']['cover_image_id'] = VRResources::all()->pluck('path', 'id')->toArray();
        $configuration['dropdown']['languages_id'] = VRLanguages::all()->pluck( 'name', 'id')->toArray();
        array_push ($configuration['fields'],'title') ;
        array_push ($configuration['fields'],'slug') ;
        array_push ($configuration['fields'],'languages_id');
        array_push ($configuration['fields'],'description_short') ;
        array_push ($configuration['fields'],'description_long') ;



        return view('admin.pages', $configuration);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vrpages
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        $data = request()->all();
        
        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();
        $configuration['dropdown']['pages_categories_id'] = VRPagesCategories::all()->pluck('count', 'id')->toArray();
        $configuration['dropdown']['cover_image_id'] = VRResources::all()->pluck('path', 'id')->toArray();
        array_push ($configuration['fields'],'title') ;
        array_push ($configuration['fields'],'slug') ;
        $configuration['dropdown']['languages_id'] = VRLanguages::all()->pluck( 'name', 'id')->toArray();
        array_push ($configuration['fields'],'languages_id');
        array_push ($configuration['fields'],'description_short') ;
        array_push ($configuration['fields'],'description_long') ;

        $record = VRPages::create($data);

        /*$rec['pages_id'] = $record['id'];
        $rec['title'] = $data['title'];
        $rec['languages_id'] = $data['languages_id'];
        $rec['slug'] = $data['slug'];
        $rec['description_short'] = $data['description_short'];
        $rec['description_long'] = $data['description_long'];

        dd($data, $rec);*/

        $data['pages_id'] = $record['id'];

        VRPagesTranslations::create($data);

        $configuration['comment'] = ['message' => trans(substr($configuration['tableName'], 0, -1) . ' added successfully')];
        return view('admin.pages', $configuration);


//        return redirect()->route('app.categories.index');

	}

	/**
	 * Display the specified resource.
	 * GET /vrpages/{id}
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
	 * GET /vrpages/{id}/edit
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
	 * PUT /vrpages/{id}
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
	 * DELETE /vrpages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
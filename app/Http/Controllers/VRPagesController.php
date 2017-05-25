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
	public function index()
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
        $configuration['dropdown']['pages_categories_id']=VRPagesCategories::all()->pluck('id')->toArray();
        $configuration['dropdown']['cover_image_id']=VRResources::all()->pluck('name', 'id')->toArray();
        $configuration['dropdown']['language_id']=VRLanguages::all()->pluck('name', 'id')->toArray();
        $configuration['dropdown']['description_short']=VRPagesTranslations::all()->pluck('name', 'id')->toArray();
        $configuration['dropdown']['description_long']=VRPagesTranslations::all()->pluck('name', 'id')->toArray();
//dd($configuration);

        array_push($configuration['fields'], "language_id");
        array_push($configuration['fields'], "short_description");
        array_push($configuration['fields'], "long_description");
//        $configuration['cache'] = cache()->get('super-ingredient');
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

        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();
        $configuration['dropdown']['pages_categories_id']=VRPagesCategories::all()->pluck('id')->toArray();
        $configuration['dropdown']['cover_image_id']=VRResources::all()->pluck('id')->toArray();
        $configuration['dropdown']['language_id']=VRLanguages::all()->pluck('name', 'id')->toArray();
        $configuration['dropdown']['description_short']=VRPagesTranslations::all()->pluck('name', 'id')->toArray();
        $configuration['dropdown']['description_long']=VRPagesTranslations::all()->pluck('name', 'id')->toArray();
//dd($configuration);

        array_push($configuration['fields'], "language_id");
        array_push($configuration['fields'], "short_description");
        array_push($configuration['fields'], "long_description");


        foreach ($configuration['fields'] as $key => $value) {
            if (!isset($data[$value])) {
                $configuration['error'] = ['message' => trans('Please enter ' . $value)];
                return view('admin.pages', $configuration);
            }
        }

        VRPages::create($data);
        $configuration['comment'] = ['message' => trans('Record added successfully')];

//        $record = VRPages::create($data);
//        $record->pagesConnections()->sync($data['languages']);

//        $missingValuesNot= '';
//        $missingValues= '';
//        foreach($configuration['fields'] as $key=> $value) {
//            if ($value == 'comment'){}
//            elseif ($value == 'language_id'){}
//            elseif (!isset($data[$value])) {
//                $missingValues = $missingValues . ' ' . $value . ',';
//            }
//        }
//        if ($missingValues  != $missingValuesNot){
//            $missingValues = substr($missingValues, 1, -1);
//            $configuration['error'] = ['message' => trans('Please enter ' . $missingValues)];
//            return view('admin.pages', $configuration);
//        }
//
//        $record = VRPages::create($data);
//        $record->languages()->sync($data['languages']);

        return view('admin.pages', $configuration);
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
<?php

namespace App\Http\Controllers;

use App\Models\VRLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App;
use Illuminate\Support\Facades\Lang;

class VRLanguagesController extends Controller
{

//    public function changeLanguage(Request $request)
//    {
//        if ($request->ajax()) {
//            $request->session()->put('locale', $request->locale());
//            $request->session()->flash('alert-success',('app.Locale_Change_Success'));
//        }
//    }
    /**
     * Display a listing of the resource.
     * GET /pages categories
     *
     * @return Response
     */
    public function adminIndex()
    {
        $dataFromModel = new VRLanguages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

        $configuration['list_data'] = VRLanguages::get()->where('deleted_at', '=', null)->toArray();

        if ($configuration['list_data'] == []) {
            $configuration['error'] = ['message' => trans("List is empty. Please create some " . $configuration['tableName'] . ", then check list again")];
            return view('admin.list', $configuration);
        }

        if(Route::has('app.' . $configuration['tableName'] . '.translations')){
            $configuration[ 'translationExist' ] = true;
        }

        return view('admin.list', $configuration);
    }

    public function adminCreate()
    {
        $dataFromModel = new VRLanguages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

        return view('admin.createform', $configuration);
    }

    public function adminStore()
    {
        $data = request()->all();

        $dataFromModel = new VRLanguages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

        $missingValues= '';
        foreach($configuration['fields'] as $key=> $value) {
            if (!isset($data[$value])) {
                $missingValues = $missingValues . ' ' . $value . ',';
            }
        }
        if ($missingValues != ''){
            $missingValues = substr($missingValues, 1, -1);
            $configuration['error'] = ['message' => trans('Please enter ' . $missingValues)];
            return view('admin.createform', $configuration);
        }

        VRLanguages::create($data);

        $configuration['comment'] = ['message' => trans('Record added successfully')];

        return view('admin.createform', $configuration);
    }

    public function adminShow($id)
    {
        $dataFromModel = new VRLanguages();
        $configuration['record'] = VRLanguages::find($id)->toArray();
        $configuration['tableName'] = $dataFromModel->getTableName();

        return view('admin.single', $configuration);
    }

    public function adminEdit($id)
    {
        $dataFromModel = new VRLanguages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

        $configuration['record'] = VRLanguages::find($id)->toArray();

        return view('admin.editform', $configuration);
    }

    public function adminUpdate($id)
    {
        $data = request()->all();

        $dataFromModel = new VRLanguages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

        $missingValues= '';
        foreach($configuration['fields'] as $key=> $value) {
            if (!isset($data[$value])) {
                $missingValues = $missingValues . ' ' . $value . ',';
            }
        }
        if ($missingValues != ''){
            $missingValues = substr($missingValues, 1, -1);
            $configuration['error'] = ['message' => trans('Please enter ' . $missingValues)];
            $configuration['record'] = VRLanguages::find($id)->toArray();
            return view('admin.editform', $configuration);
        }

        $record = VRLanguages::find($id);

        $record->update($data);

        $dataFromModel = new VRLanguages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

        $configuration['list_data'] = VRLanguages::get()->toArray();

        if(Route::has('app.' . $configuration['tableName'] . '_translations.create')){
            $configuration[ 'translationExist' ] = true;
        }

        $configuration['fullComment'] = 'Record updated successfully';

        return view('admin.list', $configuration);
    }

    public function adminDestroy($id)
    {
        if (VRLanguages::destroy($id))
        {
            return json_encode(["success" => true, "id" => $id]);
        }
    }

}

<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use DB;
use Log;
use App\EquipmentType;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class EquipmentTypeController extends Controller
{

    public function index()
    {
        $EquipmentType    = EquipmentType::get();
        $data = array(
            'id'         => 'EquipmentType'
        );

        return view('backend/EquipmentType/index', $data);
    }


    public function datatable()
    {
        // Query data showing data is not deleted
        $EquipmentType = EquipmentType::get();

        foreach ($EquipmentType as $key=>$item) {
            $collection[] = array(
                'equipTypeId'   => $item->equipTypeId,
                'equipTypeName' => $item->equipTypeName,
                'activeFlag'   => $item->activeFlag,
                'createDate'   => $item->createDate,
                'createBy'     => $item->createBy,
                'updateDate'   => $item->updateDate,
                'updateBy'     => $item->updateBy,
                'action'       => '<button onclick="editFunction('.$item->equipTypeId.')" type="button" id="editButton" class="btn btn-outline-warning btn-sm editButton" value='.$item->equipTypeId.' data-toggle="modal" data-target="#modaledit">Edit</button>'  .'<button onclick="deleteFunction('.$item->equipTypeId.', '.$key.' )" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modaldelete">Delete</button>'
            );
        }
        $collections = json_encode(array( "data" => $collection ));

        return $collections;
    }

    public function create(Request $request)
    {   
          // Begin transaction
    //     DB::beginTransaction();

    //     // Create equipmentType


    //     if (Condition check)
    //     {
    //         // Case insert complete
    //         DB::commit();
    //     } else {
    //         // Case insert Failed
    //         DB::rollback();
    //     }  
        return 1;
    }

   
    public function edit($id)
    {
        $EquipmentType = EquipmentType::where('equipTypeId', $id)->first();

        Log::info('EquipmentType : '. print_r($EquipmentType, true));

        $data = array(
            'equipTypeId'  => $EquipmentType->equipTypeId,
            'equipTypeName'  => $EquipmentType->equipTypeName,
            'activeFlag'   => $EquipmentType->activeFlag
        );

        return $data;
    }

    public function delete($id)
    {
        $EquipmentType = EquipmentType::where('equipTypeId', $id)->first();

        Log::info('EquipmentType : '. print_r($EquipmentType, true));

        $data = array(
            'equipTypeId'  => $EquipmentType->equipTypeId,            
            'activeFlag'   => $EquipmentType->activeFlag
        );

        return $data;
    }

    
}

<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use DB;
use Log;
use App\Section;
use App\Department;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section    = Section::get();
        $department = Department::get();
        // $section = DB::table('tb_section')->get();
        // $section = Building::where('activeFlag', '=', 1)->get();
        // $project = Project::whereNull('projDeleteDate')->get();

        $data = array(
            'id'         => 'section',
            'department' => $department
        );

        return view('backend/section/index', $data);
    }


    public function datatable()
    {
        // Query data showing data is not deleted
        $section = Section::get();

        foreach ($section as $key=>$item) {
            $collection[] = array(
                'sectionID'    => $item->sectionId,
                'sectionEn'    => $item->sectionEn,
                'sectionTh'    => $item->sectionTh,
                'deptId'       => $item->deptId,
                'activeFlag'   => $item->activeFlag,
                'createDate'   => $item->createDate,
                'createBy'     => $item->createBy,
                'updateDate'   => $item->updateDate,
                'updateBy'     => $item->updateBy,
                'action'       => '<button onclick="editFunction('.$item->sectionId.')" type="button" id="editButton" class="btn btn-outline-warning btn-sm editButton" value='.$item->sectionId.' data-toggle="modal" data-target="#modaledit">Edit</button>'  .'<button onclick="deleteFunction('.$item->sectionId.', '.$key.' )" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modaldelete">Delete</button>'
            );
        }
        $collections = json_encode(array( "data" => $collection ));

        return $collections;
    }

    public function create(Request $request)
    {   
    //     // Begin transaction
    //     DB::beginTransaction();

    //     // Create on BOM
    //     $bom = new Billofmaterial;
    //     $bom->bomName        = $request->bomName;
    //     $bom->bom_buildingID = $request->buildingID;
    //     $resultBOM = $bom->save();

    //     // Create on PBOM with bomID above
    //     $pbom = new Projectbom;
    //     $pbom->pBOM_projID  = $request->projID;
    //     $pbom->pBOM_bomID   = $bom->bomID;
    //     $resultPBOM = $pbom->save();

    //     // Update pBOMID into Billofmaterial
    //     $resbom = Billofmaterial::find($bom->bomID);
    //     $resbom->bom_pbomID = $pbom->pBOMID;
    //     $resultRESBOM = $resbom->save();

    //     if ($resultBOM == 1 && $resultPBOM == 1 && $resultRESBOM == 1)
    //     {
    //         // Case insert complete
    //         DB::commit();
    //     } else {
    //         // Case insert Failed
    //         DB::rollback();
    //     }


        return 1;
    }

    // public function createcat(Request $request)
    // {
    //     // Begin transaction
    //     DB::beginTransaction();

    //     // Create on BOM
    //     $building = new Building;
    //     $building->buildingTitle  = $request->buildingTitle;
    //     $resBuilding = $building->save();

    //     // Case insert complete
    //     DB::commit();
    //     return 1;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // $time = time();
        
    //     // if( $request->meeroo_id != ''){
    //     //     $Meeting_room = Meeting_room::find($request->meeroo_id);

    //     // }else{
    //     //     $Meeting_room = new Meeting_room;
    //     //     $Meeting_room->meeroo_created_date = $time;
    //     // }

    //     // $Meeting_room->meeroo_updated_date = $time;
    //     // $Meeting_room->meeroo_mem_id = $request->mem_id;
    //     // $Meeting_room->meeroo_doc_id = Auth::user()->getAuthId();
    //     // $Meeting_room->meeroo_description = $request->meeroo_description;
    //     // $Meeting_room->meeroo_name = ($request->meeroo_name == '' ? $request->mem_fullname : $request->meeroo_name);
    //     // $Meeting_room->meeroo_is_active = $request->meeroo_is_active;
        
    //     // $Meeting_room->save();

    //     // Session::flash('message', 'Successfully created Meeting_room!');
    //     // return Redirect::to('b/'.Auth::user()->getAuthPrefixTypeLogin().'/meeting_room');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meeting_room  $meeting_room
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {   
    //     $categorymaterial = DB::table('categorymaterial')->get();
    //     $vendor = DB::table('vendor')->get();

    //     $bom    = Billofmaterial::find($id);
    //     $matbom = Materialbom::where('matBOM_bomID', '=', $id)->select('matBOM_matID')->orderBy('matBOM_matID')->get();

    //     $matID = [];
    //     foreach ($matbom as $item) {
    //         Log::info('matbom : '. $item->matBOM_matID);
    //         $matID[] = $item->matBOM_matID;
    //         // Log::info('bom : '. print_r($bom, true));
    //         // Log::info('bom->')
    //     }
    //     Log::info('----------');

    //     Log::info('matID : '. print_r($matID, true));

    //     $data = array(
    //         'id'               => 'bom',
    //         'bom'              => $bom,
    //         'categorymaterial' => $categorymaterial,
    //         'vendor'           => $vendor,
    //         'matbom'           => $matID
    //     );
    //     return view('backend/bom/show', $data);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meeting_room  $meeting_room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::where('sectionId', $id)->first();

        Log::info('section : '. print_r($section, true));

        $data = array(
            'sectionId'  => $section->sectionId,
            'sectionEn'  => $section->sectionEn,
            'sectionTh'  => $section->sectionTh,
            'deptId'     => $section->deptId
        );

        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meeting_room  $meeting_room
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // Begin transaction
    //     DB::beginTransaction();

    //     // Update data into BOM
    //     $bom = Billofmaterial::find($id);
    //     $bom->bomName        = $request->bomName;
    //     $bom->bom_buildingID = $request->buildingID;
    //     $resBOM = $bom->save();

    //     // Get data for checking projectID changed ?
    //     // $pbom = Projectbom::where('pBOM_bomID', '=', $bom->bomID)
    //     //                     ->select('pBOM_projID')->first();

    //     // Log::info('pbom : '. $pbom);
    //     // Log::info('projID : '. $request->projID);

    //     // // Check projectID change will do this if below
    //     // if ($request->projID != $pbom->pBOM_projID){
    //     //     $projPbom = Projectbom::find($bom->bom_pbomID);
    //     //     $projPbom->pBOM_projID = $request->projID;
    //     //     $resProjPbom = $projPbom->save();
    //     // } else {
    //     //     $resProjPbom = 1;
    //     // }

    //     // Check for saving or not
    //     if ($resBOM == 1)
    //     {
    //         // Case insert complete
    //         DB::commit();
    //     } else {
    //         // Case insert Failed
    //         DB::rollback();
    //     }

    //     return 1;
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meeting_room  $meeting_room
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     // Log::info('deleted id : '. $id);
    //     $billofmaterial = Billofmaterial::find($id);
    //     $response = $billofmaterial->delete();

    //     return 1;
    // }
}

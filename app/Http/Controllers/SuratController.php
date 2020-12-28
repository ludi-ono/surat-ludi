<?php

namespace App\Http\Controllers;

use App\DataKirim;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;

use Datatables;
use Redirect, Response;
use DateTime;
use DB;
use Helper;
use Excel;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_kerja = DB::select('select * from unit_kerja');
        return view('surat_dinas',['list_unit_kerja' => $unit_kerja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        // $this->validate($request, [
        //     'bengkel_code' => 'required',
        //     'bengkel_name' => 'required',
        //     'address' => 'required'
        // ]);

        $date_time = new DateTime;        

        $data = $request->all();
        $unit_kerja = $data['unit_kerja'];
        $jabatan_id = $data['jabatan_id'];
        $pegawai_id = $data['pegawai_id'];
        $redaksi = $data['redaksi'];
        $data_kirim = [];

        $data_kirim['jabatan_id'] = $jabatan_id;
        $data_kirim['pegawai_id'] = $pegawai_id;
        $data_kirim['unit_kerja'] = $unit_kerja;
        $data_kirim['redaksi'] = $redaksi;        

        $kirim = DataKirim::create($data_kirim);
        $id_kirim = $kirim->id;

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=DataKirim::where('id',$id)->delete();
        return response()->json(['success' => true]);
    }

    public function list_data_kirim(Request $request){
        $columns = array( 
            2 => 'jabatan'          
        );
        
        $totalData = DB::table('qview_data_kirim')
                    ->count();

        $totalFiltered = $totalData; 

        if($request->input('length') != -1)
            $limit = $request->input('length');
        else
            $limit = $totalData;

        $start = $request->input('start');
        $order = 'jabatan';
        $dir = 'asc';
        if(empty($request->input('search.value'))){
            $jabatan = DB::table('qview_data_kirim')
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();
        }
        else
        {
            $search = $request->input('search.value'); 

            $jabatan =  DB::table('qview_data_kirim')
                        ->where([['jabatan', 'LIKE', "%{$search}%"]])
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();

            $totalFiltered = DB::table('qview_data_kirim')
                            ->where([['jabatan', 'LIKE', "%{$search}%"]])
                            ->count();
        }
        $data = array();
        if(!empty($jabatan))
        {
            foreach ($jabatan as $key=>$item)
            {
                $nestedData['id'] = $item->id;
                $nestedData['jabatan'] = $item->jabatan;
                $nestedData['pegawai'] = $item->nama_pegawai;
                $nestedData['redaksi'] = $item->redaksi;
                $nestedData['hapus'] = '<a href="javascript:void(0)" id="delete_data" data-toggle="tooltip" title="View" data-id="$item->id" data-original-title="" class="btn btn-danger btn-sm"><i class="dripicons-trash"></i></a>';
        
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
        );
            
        echo json_encode($json_data);
    }

    public function list_jabatan(Request $request){
        $columns = array( 
            2 => 'jabatan'          
        );
        $id = $request->id;
        $totalData = DB::table('jabatan')
                    ->where('unit_kerja_id','=',$id)
                    ->count();

        $totalFiltered = $totalData; 

        if($request->input('length') != -1)
            $limit = $request->input('length');
        else
            $limit = $totalData;

        $start = $request->input('start');
        $order = 'jabatan';
        $dir = 'asc';
        if(empty($request->input('search.value'))){
            $jabatan = DB::table('jabatan')
                        ->where('unit_kerja_id','=',$id)
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();
        }
        else
        {
            $search = $request->input('search.value'); 

            $jabatan =  DB::table('jabatan')
                        ->where([['jabatan', 'LIKE', "%{$search}%"],['unit_kerja_id','=',$id]])
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();

            $totalFiltered = DB::table('jabatan')
                            ->where([['jabatan', 'LIKE', "%{$search}%"],['unit_kerja_id','=',$id]])
                            ->count();
        }
        $data = array();
        if(!empty($jabatan))
        {
            foreach ($jabatan as $key=>$item)
            {
                $nestedData['id'] = $item->id;
                $nestedData['jabatan'] = $item->jabatan;
        
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
        );
            
        echo json_encode($json_data);
    }

    public function list_pegawai(Request $request){
        $columns = array( 
            2 => 'pegawai'          
        );
        $id = $request->id;
        $totalData = DB::table('pegawai')
                    ->where('jabatan_id','=',$id)
                    ->count();

        $totalFiltered = $totalData; 

        if($request->input('length') != -1)
            $limit = $request->input('length');
        else
            $limit = $totalData;

        $start = $request->input('start');
        $order = 'nama_pegawai';
        $dir = 'asc';
        if(empty($request->input('search.value'))){
            $pegawai = DB::table('pegawai')
                        ->where('jabatan_id','=',$id)
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();
        }
        else
        {
            $search = $request->input('search.value'); 

            $pegawai =  DB::table('pegawai')
                        ->where([['nama_pegawai', 'LIKE', "%{$search}%"],['jabatan_id','=',$id]])
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();

            $totalFiltered = DB::table('pegawai')
                            ->where([['nama_pegawai', 'LIKE', "%{$search}%"],['jabatan_id','=',$id]])
                            ->count();
        }
        $data = array();
        if(!empty($pegawai))
        {
            foreach ($pegawai as $key=>$item)
            {
                $nestedData['id'] = $item->id;
                $nestedData['nama_pegawai'] = $item->nama_pegawai;
        
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
        );
            
        echo json_encode($json_data);
    }
}

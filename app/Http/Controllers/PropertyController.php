<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

use App\Models\Buildings;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct(){
    //     $this->middleware(['auth','isAdmin'])->except('');
    //  }

     
    public function index()
    {   
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $buildings=Buildings::paginate(6);

        return view('admin.buildings-details',['buildings'=>$buildings,'latest_properties'=>$latest_property,'latest_property_info']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function display(Request $request)
    // {
    //     $latest_property_info=Buildings::latest()->paginate(4);
    //     $latest_property=$latest_property_info->total();
    //     $buildings=[];
    //     if($request->option=="By Agent"){
                // $buildings=Agent::where('agent_id',);
                // return view('property-grid',['buildings'=>$buildings]);

                // $house=Agent::where('agent_name','like','%'.$request->item.'%')->get();

               

                // foreach($house as $building){
                //     foreach($building->buildings as $house){

                //         array_push($buildings,$house);

                //     }
                   
                // };
                // return dd($buildings);
                // return redirect(route('property-grid.index'));
                // return view('property-grid',['buildings' => $buildings,'latest_properties'=>$latest_property,'latest_property_info'=>$latest_property_info]); 
                // return Redirect::back()->with('buildings',$buildings);           
                // Session::put('houses',$buildings);

                // return redirect()->route('property.index')->with(['buildings',$buildings]);
                
                // return view('property-grid',['buildings'=>$buildings]);
// return Redirect::back()->with('buildings',$buildings);

                // $building=$house[0]->buildings;
                //  return($building);
        // }
    //     }
    //     else if($request->option=='By Price'){
    //         $buildings=Buildings::where('price',(int)$request->item)->paginate(6);
    //             return view('property-grid',['buildings'=>$buildings,'latest_properties'=>$latest_property,'latest_property_info'=>$latest_property_info]);

    //     }

    //     else if($request->option=="By Keywords"){
    //         $buildings=Buildings::where('description','like','%'.$request->item.'%')->paginate(6);
    //             return view('property-grid',['buildings'=>$buildings,'latest_properties'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    //     }

       
    // }

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
   
    // public function list(){

    // }
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
        //
    }
}

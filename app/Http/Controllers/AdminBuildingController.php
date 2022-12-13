<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\Models\Buildings;
use App\Models\Agent;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Requests\updateBuildings;
use App\Http\Requests\updateBuildingsRequest;

class AdminBuildingController extends Controller
{ 

    public function __construct(){
        $this->middleware(['auth','isAdmin'],['except'=>['show','list','display']]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $buildings=Buildings::paginate(6);
    //   return view('property-grid',['buildings'=>$buildings]);
    $latest_property_info=Buildings::latest()->paginate(4);
    $latest_property=$latest_property_info->total();
    $buildings=Buildings::paginate(6);

    return view('admin.buildings-details',['buildings'=>$buildings,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    public function create(Request $request)
    {
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $agents=Agent::all();
        return view('admin.new-building',["agents"=>$agents,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    public function store(AdminRequest $request)
    {
        
        $request->validated();
        $arr = [];

        for ($i = 0; $i < count($request->images); $i++) {
            $newName = time().'-'.uniqid().'identification'.'-'. $request->agent_id.'.' . $request->images[$i]->extension();
            $request->images[$i]->move(public_path('images'), $newName);
            array_push($arr, $newName);
        }

        $storing = Buildings::create([
            'agent_id' =>$request->agent_id,
            'garage' => $request->garage,
            'images' => $arr,
            'description' => $request->description,
            'status'=>$request->status,
            'price' => $request->price,
            'city' => $request->city,
            'address' => $request->address,
            'rooms' => $request->rooms
        ]);

        return redirect(route('info.index'));
    }
    public function show($info)
    {
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $building=Buildings::find($info);
        return view('property-single',['building'=>$building,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    public function edit($info)
    {
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $user_details=Buildings::find($info);
        $agents=Agent::all();
      return view('admin.edit-building',['info'=>$user_details,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info,'agents'=>$agents,'user_id'=>$user_details->agent_id]);
    }

    public function update(updateBuildingsRequest $request, $info)
    {
        $request->validated();
        $user_details=Buildings::find($info);
        if(is_array($request->images)&&count($request->images)!=0){
            return('hello');
            $arr = [];

            for ($i = 0; $i < count($request->images); $i++) {
                $newName = time().'-'.uniqid().'identification'.'-'. $request->agent_id.'.' . $request->images[$i]->extension();
                $request->images[$i]->move(public_path('images'), $newName);
                array_push($arr, $newName);
            }
            Buildings::where('id',$info)->update([
                'agent_id' =>$request->agent_id?$request->agent_id:$user_details->agent_id,
                'garage' =>$request->garage?$request->garage:$user_details->garage,
                'images' => $arr,
                'description' =>$request->description?$request->description:$user_details->description,
                'status'=>$request->status?$request->status:$user_details->status,
                'price' =>$request->price?$request->price:$user_details->price,
                'city' => $request->city?$request->city:$user_details->city,
                'address' =>$request->address?$request->address:$user_details->address,
                'rooms' =>$request->rooms?$request->rooms:$user_details->rooms
                    ]);
                    return redirect('/admin/buildings/info ');

        }else{
            Buildings::where('id',$info)->update([
                'agent_id' =>$request->agent_id?$request->agent_id:$user_details->agent_id,
                'garage' =>$request->garage?$request->garage:$user_details->garage,
                'description' =>$request->description?$request->description:$user_details->description,
                'status'=>$request->status?$request->status:$user_details->status,
                'price' =>$request->price?$request->price:$user_details->price,
                'city' => $request->city?$request->city:$user_details->city,
                'address' =>$request->address?$request->address:$user_details->address,
                'rooms' =>$request->rooms?$request->rooms:$user_details->rooms
                    ]);
                    return redirect('/admin/buildings/info ');

        }
        
    }
 
    public function list(){
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $buildings=Buildings::paginate(6);
        return view('property-grid',['buildings'=>$buildings,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    public function display(Request $request)
    {
        $buildings=[];
        if($request->option=="By Agent"){
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
                // $buildings=Agent::where('agent_id',);
                // return view('property-grid',['buildings'=>$buildings]);

                $house=Agent::where('agent_name','like','%'.$request->item.'%')->get();

               

                foreach($house as $building){
                    foreach($building->buildings as $house){

                        array_push($buildings,$house);

                    }
                   
                };
                // return dd($buildings);
                // return redirect(route('property-grid.index'));
                return view('property-grid',['buildings' => $buildings,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]); 
                // return Redirect::back()->with('buildings',$buildings);           
                // Session::put('houses',$buildings);

                // return redirect()->route('property.index')->with(['buildings',$buildings]);
                
                // return view('property-grid',['buildings'=>$buildings]);
// return Redirect::back()->with('buildings',$buildings);

                // $building=$house[0]->buildings;
                //  return($building);
        }
    //     }
        else if($request->option=='By Price'){
            $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
            $buildings=Buildings::where('price',(int)$request->item)->paginate(6);
                return view('property-grid',['buildings'=>$buildings,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);

        }

        else if($request->option=="By Keywords"){
            $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
            $buildings=Buildings::where('description','like','%'.$request->item.'%')->paginate(6);
                return view('property-grid',['buildings'=>$buildings,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
        }else{
           return redirect('/userdashboard');

        }

       
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($info)
    {

        $building=Buildings::find($info);
        $building->delete();
        return redirect(route('info.index'));
       
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store($account, Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($account)
    {
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $user=User::find($account);
        return view('account',['accounts'=>$user,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
       return view('edit-form',['latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $account)
    {  
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $user_details=User::find($account);
        if($request->profile_picture){
            $file=$request->file('profile_picture');
            $file_extension=$file->getClientOriginalExtension();
            $newName=time().uniqid().'-'.$user_details->name.'.'.$file_extension;
            $request->profile_picture->move(public_path('images'),$newName);
            User::where('id',$account)->update([
                'profile_picture'=>$newName,
                'location'=>$request->location?$request->location:$user_details->location,
                'phone_number'=>$request->phone_number?$request->phone_number:$user_details->phone_number,
                'name'=>$request->name?$request->name:$user_details->name
            ]);
            return view('account',['accounts'=>User::find($account),'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
        }else{

            User::where('id',$account)->update([
                'location'=>$request->location?$request->location:$user_details->location,
                'phone_number'=>$request->phone_number?$request->phone_number:$user_details->phone_number,
                'name'=>$request->name?$request->name:$user_details->name
            ]);
            return view('account',['accounts'=>User::find($account),'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
            
        }
    }


    public function notification(){
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        return view('notitification',['latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    public function userDashboard(){
        $buildings=Buildings::paginate(6);
        $properties_count=$buildings->total();
        $sold_properties=$buildings->where('status','sold')->count();
        $properties_on_sale=$buildings->where('status','sale')->count();
        $properties_on_rent=$buildings->where('status','rent')->count();
        $user_count=User::where('role','0')->get()->count();
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $agents_count=Agent::count();
        if(Auth::user()->role=='1'){
        return view('dashboard',[
            'buildings'=>$buildings,
            'user_count'=>$user_count,
            'properties_count'=>$properties_count,
            'agents_count'=>$agents_count,
            'sold_properties'=>$sold_properties,
            'properties_on_sale'=>$properties_on_sale,
            'properties_on_rent'=> $properties_on_rent,
        ]);
    }else{
        return view('dashboard',[
            'buildings'=>$buildings,
            'latest_property'=>$latest_property,
            'latest_property_info'=> $latest_property_info
        ]);
    }

    }

    public function userHomeScreen(){
        return redirect('/userdashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($account)
    {
        $user=User::find($account);
         $user->delete();
         return redirect('/register');
    }
}

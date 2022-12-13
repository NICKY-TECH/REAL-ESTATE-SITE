<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\Agent;
use App\Models\Buildings;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class AdminAgentController extends Controller
{

    public function __construct(){
        $this->middleware(['auth','isAdmin'],['except'=>['show','display']]);
    }
  public function index()
    {
        $agents=Agent::all();
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        // return view ('agents-grid',['agents'=>$agents]);
        return view('admin.agents-details',['agents'=>$agents,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    public function create(){
        return view('admin.add-agent');
    }

    public function store(AgentRequest $request){
        $request->validated();

        $newImage=uniqid().'-'.time().'-'.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$newImage);

        $storing=Agent::create([
            'agent_name'=>$request->agent_name,
            'facebook'=>$request->facebook,
            'about_agent'=>$request->about_agent,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'image'=>$newImage,
            'linkedIn'=>$request->linkedIn
        ]);
        return redirect()->back()->with('message','agent added successfully');



    }
      public function show($info)
    { 
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $agent=Agent::find($info);
        return view('agent-single',['agent'=>$agent,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    //    return ($agent->buildings);
    }

    public function display(){
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $agents=Agent::all();
        return view('agents-grid',['agents'=>$agents,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($detail)
    {
        $latest_property_info=Buildings::latest()->paginate(4);
        $latest_property=$latest_property_info->total();
        $user_details=Agent::find($detail);
      return view('admin.edit-agent',['details'=>$user_details,'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentRequest $request,$detail)
    {

        $request->validated();
        $user_details=Agent::find($detail);
        if($request->image){
            $file=$request->file('image');
            $file_extension=$file->getClientOriginalExtension();
            $newName=time().uniqid().'-'.$user_details->name.'.'.$file_extension;
            $request->image->move(public_path('images'),$newName);
            Agent::where('id',$detail)->update([
                'image'=>$newName,
                'agent_name'=>$request->agent_name?$request->agent_name:$user_details->agent_name,
                'phone_number'=>$request->phone_number?$request->phone_number:$user_details->phone_number,
                'about_agent'=>$request->about_agent?$request->about_agent:$user_details->about_agent,
                'email'=>$request->email?$request->email:$user_details->email,
                'facebook'=>$request->facebook?$request->facebook:$user_details->facebook,
                'twitter'=>$request->twitter?$request->twitter:$user_details->twitter,
                'instagram'=>$request->instagram?$request->instagram:$user_details->instagram,
                'linkedIn'=>$request->linkedIn?$request->linkedIn:$user_details->linkedIn,
            ]);
        }else{
            // $new_details=[
            //     'agent_name'=>$request->agent_name?$request->agent_name:$user_details->agent_name,
            //     'phone_number'=>$request->phone_number?$request->phone_number:$user_details->phone_number,
            //     'about_agent'=>$request->about_agent?$request->about_agent:$user_details->about_agent,
            //     'email'=>$request->email?$request->email:$user_details->email,
            //     'facebook'=>$request->facebook?$request->facebook:$user_details->facebook,
            //     'twitter'=>$request->twitter?$request->twitter:$user_details->twitter,
            //     'instagram'=>$request->instagram?$request->instagram:$user_details->instagram,
            //     'linkedIn'=>$request->linkedIn?$request->linkedIn:$user_details->linkedIn,
            // ];
            // $user_details->fill($new_details);
            // $user_details->save();
            $latest_property_info=Buildings::latest()->paginate(4);
            $latest_property=$latest_property_info->total();
            Agent::where('id',$detail)->update([
                'agent_name'=>$request->agent_name?$request->agent_name:$user_details->agent_name,
                'phone_number'=>$request->phone_number?$request->phone_number:$user_details->phone_number,
                'about_agent'=>$request->about_agent?$request->about_agent:$user_details->about_agent,
                'email'=>$request->email?$request->email:$user_details->email,
                'facebook'=>$request->facebook?$request->facebook:$user_details->facebook,
                'twitter'=>$request->twitter?$request->twitter:$user_details->twitter,
                'instagram'=>$request->instagram?$request->instagram:$user_details->instagram,
                'linkedIn'=>$request->linkedIn?$request->linkedIn:$user_details->linkedIn,
            ]);
        }

            // $detail->fill($new_details);
            // $detail->save();
            return view('admin.agents-details',['agents'=>Agent::all(),'latest_property'=>$latest_property,'latest_property_info'=>$latest_property_info]);
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($detail)
    {
     $user=Agent::find($detail);
     $user->delete();
     return redirect(route('details.index'));
    }

}


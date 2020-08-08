<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\DB;
class TeamController extends Controller
{


    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
    //    $teams = Team::all()->take(100);
          $teams = Team::all();
          return view('teams.teams',['teams'=>$teams]);

    }
                    
    public function loadUIForOneTeamAndGetTeamName(){
         return view('teams.get-team-name');
    }              

    public function FetchTeamDetails( Request $request){
        $validatedData = $request->validate([          
            'name'=>'required '
        ]);
        $name= $request->name;
        $team = Team::where('name',$name)->get()->first();
        //dd($team->id);

       
        if(!$team){
              return view('teams.one-team-with-players')->with('noteam',true);

        }
        else 
        {
        $playersOfThisTeam = Player::where('teams_id',$team->id)->get();
       
     
        
      //  dd($playersOfThisTeam);
        return view('teams.one-team-with-players')->with('team',$team)->with('players',$playersOfThisTeam)->with('noteam',false);
        }
             
    }

    public function TeamPlayersDetails($id){
         $team = Team::find($id);
         $playersOfThisTeam = Player::where('teams_id',$id)->get();
         $noteam = false;
         if(!$playersOfThisTeam->count()){
            $noteam=true;  
         }
        return view('teams.one-team-with-players')->with('team',$team)->with('players',$playersOfThisTeam)->with('noteam',$noteam);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
       
        $validatedData = $request->validate([          
            'name'=>'required ',
            'country'=>'required',
             
         
      ]);    

      
      $team= Team::create([ 
         'name'=>$request->name,
         'country'=>$request->country
     ]);     

     return redirect()->route('teams.add');

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
    {    $team = Team::find($id);
         return view('teams.edit')->with('team',$team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         
        $validatedData = $request->validate([          
            'name'=>'required ',
            'country'=>'required',
          ]); 

        $id = $request->id;

        $team = Team::find($id);
        $team->name = $request->name;
        $team->country = $request->country;
        $team->save();
        return redirect()->route('teams');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return   redirect()->route('teams');
    }
}

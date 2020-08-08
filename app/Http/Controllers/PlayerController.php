<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
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
        $players = Player::all();

        return view('players.players')->with('players',$players);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $teams = Team::all();
        return view('players.add')->with('teams',$teams);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd($request->team);
        $validatedData = $request->validate([          
            'first_name'=>'required',
            'last_name' =>'required',
            'gender'    =>'required',
            'team'      =>'required',
            'age'       =>'required'
         ]);    

     //dd($request->team);
      
      $player = Player::create([ 
         'teams_id'=>  $request->team,
         'first_name'=>$request->first_name,
         'last_name'=>$request->last_name,
         'age'     =>$request->age,
         'gender'   => $request->gender
     ]);     

     return redirect()->route('player.add');
  
    }

    public function loadUIForOnePlayerAndGetTeamName(){

        return view('players.get-player-name');
    }


    public  function FetchPlayerDetails(Request $request){
        $validatedData = $request->validate([          
            'first_name'=>'required'
        ]);

        $first_name= $request->first_name;
        $player = Player::where('first_name',$first_name)->get()->first();
        //dd($team->id);

       
        if(!$player){
              return view('players.one-player-details')->with('noplayer',true);

        }
        else 
        {
        return view('players.one-player-details')->with('player',$player)->with('noplayer',false);
        }
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
        $player = Player::find($id);
        $teams = Team::all();
        $teamOfThisPlayer = Team::find($player->teams_id);
        return view('players.edit')->with('player',$player)->with('teams',$teams)->with('teamOfThisPlayer',$teamOfThisPlayer);
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
        $player = Player::create([ 
            'first_name'=>$request->first_name,
            'last_name' =>$request->last_name,
            'age'       =>$request->age,
            'teams_id'  =>$request->team,
            'gender'    => $request->gender
        ]);     
   

        $id = $request->id;

        $player = Player::find($id);
        $player->first_name = $request->first_name;
        $player->last_name  = $request->last_name;
        $player->teams_id   = $request->team;
        $player->gender     = $request->gender;
        $player->age        = $request->age;

        $player->save();
        return redirect()->route('players');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd($id);
        $player = Player::find($id);
        $player->delete();
        return   redirect()->route('players');
    }
}

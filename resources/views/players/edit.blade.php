@extends('layouts.app')


@section('content')
 



<section class="content">
    <div class="container">
      <div class="row  justify-content-center">
      
        <div class="col-md-6">
        
          <div class="card card-success ">
            <div class="card-header">
              <h2 class="card-title " >Edit A Player </h2>
            </div>
            <!-- form start -->
        <form action="{{route('player.update')}}" method="post" role="form">
              @csrf
              <div class="card-body">
          <div class="form-group">          
                  <label class="label" for="first_name">First Name</label>
          <input type="text" class="form-control" name="first_name" value="{{$player->first_name}}"  required placeholder="Enter The First Name">
          </div>
          <div class="form-group">          
            <label class="label" for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name"  value="{{$player->last_name}}" required placeholder="Enter The Last Name">
         </div>
         
         <div class="form-group">          
            <label class="label" for="team">Select A Team From Available teams</label>     
         <select class="form-control" name="team" id="team" required style="font-weight:bold">
         <option value="{{$teamOfThisPlayer->id}}" selected>{{$teamOfThisPlayer->name}}</option>
            @foreach ($teams as $team)
         <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
          </select>
        </div>

         <div class="form-group">          
            <label class="label" for="first_name">Gender:</label>
            <input type="radio" class="" name="gender" @if ($player->gender=='M')
                checked
            @endif value="M"> Male
            <input type="radio" class="" name="gender" @if ($player->gender=='F')
               checked
            @endif value="F"> Female
         </div>
                
         <div class="form-group">          
            <label class="label" for="age">Age</label>
         <input type="number" class="form-control" name="age" value="{{$player->age}}" required placeholder="Enter The Age">
         </div>
       
         <input type="hidden" name="id" value= {{$player->id}}>
              </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-block btn-success ">Edit  Player</button>
              </div>
            </form>
        <a class="btn btn-primary btn-lg"  href="{{route('players')}}" role="button">View All Players</a>
        <a class="btn btn-info btn-lg"  href="{{route('home')}}" role="button">Back Home</a>

          </div>
        </div>  
    </div>
   </div>


</section>
    
   
 
@endsection
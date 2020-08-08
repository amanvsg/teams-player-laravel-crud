


@extends('layouts.app')


@section('content')
 


<div class="col-md-12">
  @if ($noteam)
       <h3> There is no team with this name </h3>
       <a class="btn btn-primary btn-lg"  href="{{route('teams')}}" role="button">View All Teams</a> 

  @else
     
  <h3>Team - {{$team->name}}</h3>

  <h5>Plyars Of this team </h5>
  <table class="table">
    <thead>
      <tr>  
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($players as $player)
        <tr>
           <td>{{$player->first_name}}</td>
        </tr>
     @endforeach  
      </tbody>
    </table>
  
  </div>  


  @endif

   
 
@endsection
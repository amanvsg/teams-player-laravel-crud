@extends('layouts.app')


@section('content')
 


<div class="col-md-12">
  @if ($noplayer)
  <h3> There is no Player with this name </h3>
  <a class="btn btn-primary btn-lg"  href="{{route('players')}}" role="button">View All Players</a> 

@else
<table class="table">
  <thead>
    <tr>  
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">Actions</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <tr>
         <td>{{$player->first_name}}</td>
         <td>{{$player->last_name}}</td>
         <td>{{$player->gender}}</td>
         <td>{{$player->age}}</td>
         <td><a class="btn btn-sm btn-info" href="{{route('player.edit',['id'=>$player->id])}}">Edit</a></td> 
         <td><a class="btn btn-sm btn-danger" href="{{route('player.delete',['id'=>$player->id])}}">Delete</a></td>
          
      </tr>
  
    </tbody>
  </table>
  @endif

</div>  
   
 
@endsection
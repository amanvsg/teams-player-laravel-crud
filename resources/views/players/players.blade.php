@extends('layouts.app')


@section('content')
 


<div class="col-md-12">
<h4>All The Players </h4>

  <a class="btn btn-primary btn-sm "  href="{{route('home')}}" role="button">Back Home</a>
  <a class="btn btn-primary btn-sm "  href="{{route('player.add')}}" role="button">Add Player</a>
 
<table class="table">
  <thead>
    <tr>  
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>

      <th scope="col" colspan="3">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($players as $player)
      <tr>
         <td>{{$player->first_name}}</td>
         <td>{{$player->last_name}}</td>
         <td>{{$player->gender}}</td>
         <td>{{$player->age}}</td>



        
         <td><a class="btn btn-sm btn-info" href="{{route('player.edit',['id'=>$player->id])}}">Edit</a></td> 
         <td><a class="btn btn-sm btn-danger" href="{{route('player.delete',['id'=>$player->id])}}">Delete</a></td>
          
      </tr>
      @endforeach  
    </tbody>
  </table>

</div>  
   
 
@endsection
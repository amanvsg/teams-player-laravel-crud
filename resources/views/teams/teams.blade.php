@extends('layouts.app')


@section('content')
 


<div class="col-md-12">
<h4>All The  Teams </h4>

  <a class="btn btn-primary btn-sm "  href="{{route('home')}}" role="button">Back Home</a>
  <a class="btn btn-primary btn-sm "  href="{{route('teams.add')}}" role="button">Add Team</a>

  
<table class="table">
  <thead>
    <tr>  
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col" colspan="3" >Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($teams as $team)
      <tr>
         <td>{{$team->name}}</td>
         <td>{{$team->country}}</td>
         <td><a class="btn btn-sm btn-info" href="{{route('teams.edit',['id'=>$team->id])}}">Edit</a></td>
         <td><a class="btn btn-sm btn-danger" href="{{route('teams.delete',['id'=>$team->id])}}">Delete</a></td>
         <td><a class="btn btn-sm btn-success" href="{{route('team-details-players',['id'=>$team->id])}}">View Players</a></td>
      </tr>
      @endforeach  
    </tbody>
  </table>

</div>  

      
   
 
@endsection
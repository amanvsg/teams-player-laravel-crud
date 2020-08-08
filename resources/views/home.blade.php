@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row ">
           <div class="col-md-12">

           
            <div class="jumbotron">
                <h1 class="display-4">Welcome ,{{ Auth::user()->name }} </h1>
                <p class="lead">Lets Play A CRUD with Teams And Players</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg " href="{{route('player.add')}}" role="button">Add A Player</a>
                <a class="btn btn-primary btn-lg" href="{{route('players')}}" role="button">View All Players</a>
                <a class="btn btn-primary btn-lg" href="{{route('player')}}" role="button">View A Single Player</a> 
           
                <hr class="my-4">
           
                <a class="btn btn-primary btn-lg " href="{{route('teams.add')}}" role="button">Add A Team</a>
                <a class="btn btn-primary btn-lg"  href="{{route('teams')}}" role="button">View All Teams</a>
                <a class="btn btn-primary btn-lg"  href="{{route('team')}}" role="button">View A Single Team</a> 



              </div>

            </div>   
        </div>
    </div>
</div>
@endsection

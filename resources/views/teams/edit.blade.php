@extends('layouts.app')


@section('content')
 



<section class="content">
    <div class="container">
      <div class="row  justify-content-center">
      
        <div class="col-md-6">
        
          <div class="card card-success ">
            <div class="card-header">
              <h2 class="card-title " >Edit A Team </h2>
            </div>
            <!-- form start -->
        <form action="{{route('teams.update')}}" method="post" role="form">
              @csrf
              <div class="card-body">
          <div class="form-group">          
                  <label class="label" for="name">Name</label>
          <input type="text" class="form-control" id="title" name="name" value="{{$team->name}}" required placeholder="Enter The Name of Team">
               </div>
               
                <div class="form-group">
                  <label class="label" for="country">Country</label>
                <input type="text" class="form-control " id="description" name="country" value= "{{$team->country}}" required placeholder="Enter Country Name">
                </div >
              </div>

              <input type="hidden" name="id" value="{{$team->id}}">


              <div class="card-footer ">
                <button type="submit" class="btn btn-block btn-success ">Edit Team</button>
              </div>
            </form>
          </div>
        </div>  
    </div>
   </div>
</section>
    
   
 
@endsection
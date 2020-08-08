@extends('layouts.app')


@section('content')
 



<section class="content">
    <div class="container">
      <div class="row  justify-content-center">
      
        <div class="col-md-6">
        
          <div class="card card-success ">
            <div class="card-header">
              <h2 class="card-title " >Know About A Team </h2>
            </div>
            <!-- form start -->
        <form action="{{route('team-details')}}" method="post" role="form">
              @csrf
              <div class="card-body">
          <div class="form-group">          
                  <label class="label" for="name">Enter Name Of The Team</label>
                  <input type="text" class="form-control" id="name" name="name"  required placeholder="Enter The Name of Team">
         </div>
        
              <div class="card-footer ">
                <button type="submit" class="btn btn-block btn-success ">Get Team Details</button>
              </div>
            </form>
          </div>
        </div>  
    </div>
   </div>
</section>
    
   
 
@endsection
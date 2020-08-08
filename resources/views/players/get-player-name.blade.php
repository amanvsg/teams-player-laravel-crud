@extends('layouts.app')


@section('content')
 



<section class="content">
    <div class="container">
      <div class="row  justify-content-center">
      
        <div class="col-md-6">
        
          <div class="card card-success ">
            <div class="card-header">
              <h2 class="card-title " >Know About A Player </h2>
            </div>
            <!-- form start -->
        <form action="{{route('player-details')}}" method="post" role="form">
              @csrf
              <div class="card-body">
          <div class="form-group">          
                  <label class="label" for="first_name">Enter First Name Of Player</label>
                  <input type="text" class="form-control" id="first_name" name="first_name"  required placeholder="Enter The First  Name of Player">
         </div>
        
              <div class="card-footer ">
                <button type="submit" class="btn btn-block btn-success ">Get Details</button>
              </div>
            </form>
          </div>
        </div>  
    </div>
   </div>
</section>
    
   
 
@endsection
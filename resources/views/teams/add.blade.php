@extends('layouts.app')


@section('content')
 



<section class="content">
    <div class="container">
      <div class="row  justify-content-center">
      
        <div class="col-md-6">
        
          <div class="card card-success ">
            <div class="card-header">
              <h2 class="card-title " >Add A Team </h2>
            </div>
            <!-- form start -->
        <form action="{{route('teams.store')}}" method="post" role="form">
              @csrf
              <div class="card-body">
          <div class="form-group">          
                  <label class="label" for="name">Name</label>
                  <input type="text" class="form-control" id="title" name="name"  required placeholder="Enter The Name of Team">
               </div>
               
                <div class="form-group">
                  <label class="label" for="country">Country</label>
                  <input type="text" class="form-control " id="description" name="country" required placeholder="Enter Country Name">
                </div >
              </div>

              <div class="card-footer ">
                <button type="submit" class="btn btn-block btn-success ">Add Team</button>
              </div>
            </form>
   <a class="btn btn-primary "  href="{{route('teams')}}" role="button">View All Teams</a>
  <a class="btn btn-info btn-lg "  href="{{route('home')}}" role="button">Back Home</a>


          </div>
        </div>  
    </div>
   </div>


</section>
    
   
 
@endsection
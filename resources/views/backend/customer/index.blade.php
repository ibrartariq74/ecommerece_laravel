@extends('backend.app')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('customer.index')}}">Customer</a></li>
            </ol>
            <div>
        
            </div>
          
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>




    

   
    <section class="content">
 
  <div style="margin-top:2%" > 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th> Name</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($customer as $customer )
    <tr>
      <td>{{$customer->id}}</td>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
     
      
    

      
    </tr>
    @endforeach
    </tbody>
    
   
   
    
    
  </table>
  </div>

           
  


    
    </section>
    
  </div>
  

@endsection

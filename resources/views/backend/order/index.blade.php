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
              <li class="breadcrumb-item"><a href="{{route('order.index')}}">order</a></li>
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
        <th>productName</th>
        <th>customerName</th>
        <th>customer adress</th>
        <th>customer email</th>
        <th>customer phone_no</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <!-- /.MODAL-->
    

           
    <tr>
    
      <td>{{$product->id}}</td>
      <td>{{$product->product->name}}</td>
      <td>{{$product->user->name}}</td>
      <td>{{$product->user->adress}}</td>
      <td>{{$product->user->email}}</td>
      <td>{{$product->user->phone_no}}</td>
      <td>{{$product->status}}</td>
 
    
      <td> 
      <a class="btn btn-info" href="{{  route('order.edit',$product->id) }}" > EDIT </a> 
      
    
      </td>

      </form>
     

    </tr>
  
   
   

    @endforeach


    </tbody>
    
    
  </table>


      



    
    </section>
    
  </div>
  


         
    
    

@endsection

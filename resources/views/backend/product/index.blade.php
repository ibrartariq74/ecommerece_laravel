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
              <li class="breadcrumb-item"><a href="{{route('products.index')}}">Product</a></li>
            </ol>
            <div>
        
            </div>
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
        <th>Name</th>
        <th>Description</th>
        
        <th> price  </th>
     
        <th> image  </th>
        <th> Actions  </th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $pro )
    <tr>
      <td>{{$pro->id}}</td>
      <td>{{$pro->name}}</td>
      <td>{{$pro->description}}</td>
      
      <td>{{$pro->price}}</td>
      
      <td><img src="{{asset('product/' . $pro->image  )}}" height="100px" width="100px"  /></td>
      

      <form method="POST" action="{{ route('products.destroy',$pro->id) }}" >  
      @csrf
      @method('DELETE')
      <td> <a class="btn btn-info" href="{{  route('products.edit',$pro->id) }}" > EDIT </a>  
      <button type="submit" class="btn btn-danger" >Delete</button> 
    
      </td>

      </form>
    </tr>
    @endforeach
    </tbody>
    
   
   
    
    
  </table>
  </div>

           
  


    
    </section>
    
  </div>
  

@endsection

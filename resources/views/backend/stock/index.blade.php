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
              <li class="breadcrumb-item"><a href="{{route('stock.index')}}">Stock Managment</a></li>
            </ol>
            <div>
        
            </div>
          
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    
        <!-- /.MODAL-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
  
      <form method="POST" action=""  >
      @csrf
      <div class="form-group">
          <label for="exampleInputEmail1">Select Product</label>
          <select class="form-control" name="product_id" id="sel1">
              
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Add Stock</label>
          <input type="text" class="form-control"    name="stock" placeholder="Enter description">
        </div>
        
        
        
       
      </div>
      <div class="modal-footer">
           
       
        <button type="submit" class="btn btn-primary">Register Category</button>
        </form>
      </div>
    </div>
  </div>
</div>


    

   
    <section class="content">
 
  <div style="margin-top:2%" > 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>Description</th>
       
        <th> price  </th>
        <th> stock  </th>
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
      <td>{{$pro->stock->stock}}</td>
      <td><img src="{{asset('product/' . $pro->image  )}}" height="100px" width="100px"  /></td>
      

      <td> <a class="btn btn-info" href="{{  route('stock.edit',$pro->id) }}" > EDIT </a>  
      
    
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

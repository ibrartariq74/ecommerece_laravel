@extends('backend.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('products.index')}}">Product</a></li>
            </ol>
            <div>
              
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  

    <!-- /.content-header -->

   
    <section class="content">
           
  <table class="table table-striped">
  <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" >
      @csrf
      
      <div class="form-group">
          <label for="exampleInputEmail1">Select  Category</label>

          <select class="form-control"  name="category"  aria-label="Default select example">
          <option selected>Open this select menu</option>
          @foreach($category as $cat)
               
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach   
            </select>
         
          
        </div>
      <div class="form-group">
          <label for="exampleInputEmail1">ADD Name</label>
          <input type="text" class="form-control" id="id1" name="name"  >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD Price</label>
          <input type="number" class="form-control"   name="price" >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD Description</label>
          <input type="text" class="form-control"  name="description" >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD Image</label>
          <input type="file" name="image"  class="form-control" >
          
        </div>
       
          
      </div>
      <div class="modal-footer">   
        <button type="submit" class="btn btn-primary">Add  Product</button>
        </form>
    
  </table>


    
    </section>
    
  </div>
  

@endsection

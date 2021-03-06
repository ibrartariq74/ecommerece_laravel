@extends('backend.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('products.index')}}">product</a></li>
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
  <form method="POST" action="{{ route('products.update',$product->id ) }}" enctype="multipart/form-data"  >
      @csrf
      {{ method_field('PATCH') }}

      <div class="form-group">
          <label for="exampleInputEmail1">Select  Category</label>

          <select class="form-control"  name="category"  aria-label="Default select example">
          <option selected value="{{$product->category_id}}" >{{$products->category->name}}</option>

          @foreach($category as $cat)
               
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach   
            </select>
         
          
        </div>
      <div class="form-group">
          <label for="exampleInputEmail1">ADD Name</label>
          <input type="text" class="form-control" id="id1" name="name" value= "{{ $product->name }}" >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD Price</label>
          <input type="number" class="form-control"   name="price" value= "{{ $product->price }}" >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD description</label>
          <input type="text" class="form-control"  name="description" value= "{{ $product->description }}">
          
        </div>

       
     
       
        <div class="form-group">
          <label for="exampleInputEmail1">ADD Image</label><br>

          <img src="{{asset('product/' . $product->image  )}}" height="100px" width="100px"  />

          <input type="file" name="image"  class="form-control" >
          
        </div>
       
          
      </div>
       
          
      </div>
      <div class="modal-footer">   
        <button type="submit" class="btn btn-primary">Update product</button>
        </form>
    
  </table>


    
    </section>
    
  </div>
  

@endsection

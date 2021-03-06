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
              <li class="breadcrumb-item"><a href="{{route('stock.index')}}">stock</a></li>
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
  <form method="POST" action="{{ route('stock.update',$products->stock->id ) }}"  >
      @csrf
      {{ method_field('PATCH') }}

      <div class="form-group">
          <label for="exampleInputEmail1">  Category</label>
          <input type="text" class="form-control"disabled  name="category" value= "{{ $products->category->name }}" >

        
        
          
        </div>
      <div class="form-group">
          <label for="exampleInputEmail1">product Name</label>
          <input type="text" class="form-control" disabled name="name" value= "{{ $products->name }}" >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD stock</label>
          <input type="number" class="form-control"   name="stock" value= "{{ $products->stock->stock }}" >
          
        </div>
      

       
     
       
       
          
      </div>
       
          
      </div>
      <div class="modal-footer">   
        <button type="submit" class="btn btn-primary">Update stock</button>
        </form>
    
  </table>


    
    </section>
    
  </div>
  

@endsection

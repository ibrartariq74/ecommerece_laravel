@extends('backend.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('category.index')}}">category</a></li>
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
  <form method="POST" action="{{ route('category.update',$category->id ) }}"  enctype="multipart/form-data"  >
      @csrf
      {{ method_field('PATCH') }}
      <div class="form-group">
          <label for="exampleInputEmail1">ADD Name</label>
          <input type="text" class="form-control" id="id1" name="name" value= "{{ $category->name }}" >
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD dscription</label>
          <input type="text" class="form-control"  name="description" value= "{{ $category->description }}">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD image</label><br>
          <img src="{{asset('category/' . $category->image  )}}" height="100px" width="100px"  />
         
          <input type="file" src="{{asset('category/' . $category->image  )}}" height="100px" width="100px"class="form-control"     name="image" >
        </div>
       
          
      </div>
      <div class="modal-footer">   
        <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    
  </table>


    
    </section>
    
  </div>
  

@endsection

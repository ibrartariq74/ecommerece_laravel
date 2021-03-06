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
              <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
            </ol>
            <div>
        
            </div>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  ADD Category 
                </button>
                
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
   
  
      <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data"  >
      @csrf
      <div class="form-group">
          <label for="exampleInputEmail1">ADD Name</label>
          <input type="text" class="form-control"  name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ADD Description</label>
          <input type="text" class="form-control" step="any"    name="description" placeholder="Enter description">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Add Image</label>
          <input type="file" class="form-control"     name="image" >
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
        <th>Name</th>
        <th>Description</th>
        <th> Actions  </th>
      </tr>
    </thead>
    <tbody>
    @foreach($categorys as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td><img src="{{asset('category/' . $category->image  )}}" height="100px" width="100px"  /></td>
      

      <form method="POST" action="{{ route('category.destroy',$category->id) }}" >  
      @csrf
      @method('DELETE')
      <td> <a class="btn btn-info" href="{{  route('category.edit',$category->id) }}" > EDIT </a>  
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

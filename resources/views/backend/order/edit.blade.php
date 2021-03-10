@extends('backend.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update order</h1>
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

  

    <!-- /.content-header -->

   
    <section class="content">
           
  <table class="table table-striped">
  <form method="POST" action="{{ route('order.update',$order->id ) }}"   >
      @csrf
      {{ method_field('PATCH') }}
      
      <div class="form-group">
  <label for="sel1">Select status:</label>
  <select class="form-control" name="status"  id="sel1">
    <option selected value="pending" >select stauts</option>
    <option value="deliverd" >deliverd</option>
    <option value="canceled" > canceled </option>
   
  </select>
</div>
          
      </div>
      <div class="modal-footer">   
        <button type="submit" class="btn btn-primary">Update status</button>
        </form>
    
  </table>


    
    </section>
    
  </div>
  

@endsection

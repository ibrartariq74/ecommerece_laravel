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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
    <section class="content">
    <div class="container-fluid">

      <div class="row" class="col-lg-3 col-6" >
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warn">
              <div class="inner">
                <h3>customers</h3>

                <p> {{$customer}} custumers</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('customer.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warn">
              <div class="inner">
                <h3>categories</h3>

                <p>  {{$category}} category</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('category.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">


            <!-- small box -->
            <div class="small-box bg-warn">
              <div class="inner">
                <h3>products</h3>

                <p> {{$product}} products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('products.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

     
        </div>

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warn">
              <div class="inner">
                <h3>Orders</h3>

                <p>  {{$order}} order</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('order.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        
    
      </div>



    
    </section>
    
  </div>
  

@endsection

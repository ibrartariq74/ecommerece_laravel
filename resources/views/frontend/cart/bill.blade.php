<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

	<table id="cart" class="table table-hover table-condensed">
	
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:8%">bill </th>
							
						</tr>
					</thead>
					<tbody>
					@foreach($finalproduct as $cart)
						<tr>
							<td data-th="Product">
								<div class="row">
								
									<div class="col-sm-10">
										<h4 class="nomargin">{{$cart->poduct_name}}</h4>
										
									</div>
								</div>
							</td>
							
							<td data-th="Quantity">
							{{$cart->price}}$
						
							</td>
							<td data-th="Subtotal" class="text-center">	{{$cart->quantity}}</td>
							</td>

							<td data-th="Subtotal" class="text-center">	{{$cart->total_price}}</td>
						
						
						</tr>
						@endforeach
					</tbody>
					<tfoot>
                   
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99    <h2>  </strong>
                         </td>
						</tr>
                    
						<tr>
							<td><a href="{{route('home')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>${{$totalbill}}</strong></td>
							
						
							<td>
							<div >
                                   
									<a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
							 class="btn btn-success btn-block" 
							 >Checkout </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
							</td>
						
						</tr>
					</tfoot>
					
					
				</table>
				
</div>
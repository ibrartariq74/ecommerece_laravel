

<!--Section: Block Content-->



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"   >
<body>

<section class="mb-5">

  <div class="row" style="margin-top:5px;" >
    <div class="col-md-6 mb-4 mb-md-0">

      

      <div class="mdb-lightbox">

        <div class="row ">

          <div class="col-12 mb-0" style="margin-top:10px;" >
            <figure class="view overlay rounded z-depth-1 main-img">
              <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                data-size="710x823">
                <img src="{{asset('product/' . $product->image  )}}" 
                  class="img-fluid z-depth-1">
              </a>
            </figure>
           
            
        
          </div>
         
        </div>

      </div>

    </div>
    <div class="col-md-6 " style="margin-top:10%;" >

     
      
      
      <div class="table-responsive">
        <table class="table table-sm table-borderless mb-0">
          <tbody>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Name</strong></th>
              <td>{{$product->name}}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Collection</strong></th>
              <td>{{$product->description}}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
              <td>{{$product->price}}$</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr>
      <div class="table-responsive mb-2">
	 
        <table class="table table-sm table-borderless">
          <tbody>
            <tr>
              <td class="pl-0 pb-0 w-25">Quantity</td>
              <td class="pb-0">Select size</td>
            </tr>
            <tr>
              <td class="pl-0">
                <div class="def-number-input number-input safari_only mb-0">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  class="plus btn-danger "  > dec </button>
                  <button style="margin-top:4px;"  onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    class="plus btn-info "  >inc </button>
                  <form method="POST" action="{{ route('cart.update',$product->id  ) }}"  enctype="multipart/form-data"  >
	  @csrf
      {{ method_field('PATCH') }}
                  <input style="margin-top:3px;"  class="quantity" min="0" name="quantity" value="1" type="number">
				  
               
					
                </div>
              </td>
              <td>
                <div class="mt-1">
                  <div class="form-check form-check-inline pl-0">
                    <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                      checked>
                    <label class="form-check-label small text-uppercase card-link-secondary"
                      for="small">Small</label>
                  </div>
                  <div class="form-check form-check-inline pl-0">
                    <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary"
                      for="medium">Medium</label>
                  </div>
                  <div class="form-check form-check-inline pl-0">
                    <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary"
                      for="large">Large</label>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    
      <button type="submit" class="btn btn-primary">Add to cart</button>
	  </form>

    </div>
  </div>

</section>


</body>
</html>

@extends('front.master-payments')
@section('content')
  <!-- offer block end  -->
 <br>


        {{--  --}}
        <main class="main">
        	{{-- <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')"> --}}
        		<div class="container">
        			<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                        <li>
                            <a href="{{url('/')}}/shopping-cart">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/shopping-cart/checkout/payment">Billing Details</a>
                        </li>
                        <li class="active">
                            <a href="{{url('/')}}/shopping-cart/checkout/payment-last">Checkout</a>
                        </li>
                        <li class="disabled">
                            <a href="#">Order Complete</a>
                        </li>
                    </ul>

        		</div><!-- End .container -->



            <div class="page-content">
            	<div class="checkout">
	                <div class="container" style="margin:0px auto !important">
                        <center>
            			<div class="checkout-discount text-center col-lg-6">
            				<form action="#" method="POST" id="submit-coupon">
                                @csrf
                                <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code then press enter</span></label>
        						<input autocomplete="off" type="text" name="code" class="form-control" required id="checkout-discount-input">

            				</form>

            			</div><!-- End .checkout-discount -->
                        <p id="coupon-processing" style="color:#66139B; font-weight:600;">Processing....</p>
                        </center>

                        {{-- <p id="remove-coupon" style="color:#66139B; font-weight:600;"><a href="">Remove</a></p> --}}

		                	<div class="row">

                                @if(Session::has('coupon'))
                                <aside class="col-lg-6" style="margin:0px auto !important">
		                			<div class="cart-summary">
		                				<h3 class="summary-title">Your Order #{{$OrderNumberNumber}}</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
                                                @foreach($CartItems as $CartItem)
                                                <?php
                                                                $Products = DB::table('product')->where('id',$CartItem->id)->get();
                                                ?>
                                                @foreach($Products as $Product)
		                						<tr>
		                							<td><a href="{{url('/')}}/product/{{$Product->slung}}">{{$Product->name}} <strong>x</strong> {{$CartItem->qty}}</a></td>
		                							<td>KES {{$CartItem->price}}</td>
		                						</tr>
                                                @endforeach
                                                @endforeach


		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>{{Cart::subtotal()}}</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>KES {{$Shipping}}</td>
		                						</tr>
                                                <tr>
		                							<td>Coupon Discount:</td>
		                							<td>KES {{ Session::get('coupon')}}</td>
		                						</tr>

		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>KES
                                                        <?php
                                                          //remove comma
                                                          $Subtotal = Cart::subtotal();
                                                          $WithCoupon = Session::get('coupon-total');
                                                          $PrepSubtotal = str_replace(',', '', $WithCoupon);
                                                          $WholeSubtotal = ceil($PrepSubtotal);
                                                          $TheTotal = $WholeSubtotal + $Shipping;
                                                          echo $TheTotal;
                                                        ?>

                                                     </td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    M-PESA PayBill
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                {{--  --}}
                                                        <p>
                                                        <ul style="color:#333333">
                                                            <li style="border-bottom:1px solid #666666">Go to your MPESA menu</li>
                                                            <li style="border-bottom:1px solid #666666">Select Lipa Na MPESA</li>
                                                            <li style="border-bottom:1px solid #666666">Select PayBill</li>
                                                            <?php $SettingsTill = DB::table('sitesettings')->get(); ?>
                                                            @foreach($SettingsTill as $set)
                                                            <li style="border-bottom:1px solid #666666">Enter the Business Number <strong>{{$set->till}}</strong> </li>
                                                            @endforeach
                                                            <!-- Invoice Number -->
                                                            <li style="border-bottom:1px solid #666666">Enter Account Number <strong>{{$InvoiceNumber}}</strong></li>
                                                            <!-- Invoice Number -->
                                                            <li style="border-bottom:1px solid #666666">Enter Amount KSH
                                                              <strong>
                                                              <?php
                                                                if(Session::has('campaign')){
                                                                    $cost = Cart::total();
                                                                    $percentage = 10;
                                                                    $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                    $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                    $discount = ($percentage / 100) * $FormatTotalCart;
                                                                    $TotalCart = ($FormatTotalCart - $discount);
                                                                }else{
                                                                    $cost = Cart::total();
                                                                    $percentage = 10;
                                                                    $WithCoupon = Session::get('coupon-total');
                                                                    $PrepeTotalCart = str_replace( ',', '', $WithCoupon );
                                                                    $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                    $TotalCart = $FormatTotalCart;
                                                                }

                                                                  $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                  $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                  $ShippingFee = $Shipping;
                                                                  $TotalCost = $FormatTotalCart+$ShippingFee;
                                                                  echo $TotalCost;

                                                              ?>
                                                              </strong>
                                                            </li>
                                                            <li style="border-bottom:1px solid #666666">Then press ok to confirm</li>
                                                            <li style="border-bottom:1px solid #666666">Enter the transaction code below</li>
                                                            <li style="border-bottom:1px solid #666666">Click verify to verify payment</li>
                                                            <form method="POST" action="#" id="verify">
                                                              {{ csrf_field() }}
                                                              <input type="hidden" name="invoice" value="{{$InvoiceNumber}}">
                                                                    <?php
                                                                        if(Session::has('campaign')){
                                                                            $cost = Cart::total();
                                                                            $percentage = 10;
                                                                            $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                            $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                            $discount = ($percentage / 100) * $FormatTotalCart;
                                                                            $TotalCart = ($FormatTotalCart - $discount);
                                                                        }else{
                                                                            $cost = Cart::total();
                                                                            $percentage = 10;
                                                                            $WithCoupon = Session::get('coupon-total');
                                                                            $PrepeTotalCart = str_replace( ',', '', $WithCoupon );
                                                                            $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                            $TotalCart = $FormatTotalCart;
                                                                        }

                                                                        $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                        $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                        $ShippingFee = $Shipping;
                                                                        $TotalCost = $FormatTotalCart+$ShippingFee;


                                                                    ?>
                                                              <input type="hidden" name="amount" value="{{$TotalCost}}">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                      <p for="email">Enter Your MPESA Transaction Code <span>*</span></p>
                                                                      <input type="text" name="TransactionID" class="form-control" required placeholder="NJL4E9WJ96" id="email" autocomplete="off">
                                                                  </div>
                                                                <div class="pull-left"><button id="veryfyID" class="btn btn-outline-primary-2 btn-order btn-block" type="submit"> Veryfy Payment &nbsp;<i class="fa fa-arrow-right"></i> </button></div>
                                                              </div>
                                                            </form>

                                                        </ul>
                                                        </p>
                                                        {{--  --}}
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->



                                            @if($location == 'Nairobi')
										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">
                                                        <form method="POST" action="{{url('/shopping-cart/checkout/placeOrder')}}" id="verify">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="invoice" value="{{$InvoiceNumber}}">
                                                                  <?php
                                                                      if(Session::has('campaign')){
                                                                          $cost = Cart::total();
                                                                          $percentage = 10;
                                                                          $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                          $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                          $discount = ($percentage / 100) * $FormatTotalCart;
                                                                          $TotalCart = ($FormatTotalCart - $discount);
                                                                      }else{
                                                                          $cost = Cart::total();
                                                                          $percentage = 10;
                                                                          $WithCoupon = Session::get('coupon-total');
                                                                          $PrepeTotalCart = str_replace( ',', '', $WithCoupon );
                                                                          $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                          $TotalCart = $FormatTotalCart;
                                                                      }

                                                                      $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                      $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                      $ShippingFee = $Shipping;
                                                                      $TotalCost = $FormatTotalCart+$ShippingFee;


                                                                  ?>
                                                            <input type="hidden" name="amount" value="{{$TotalCost}}">
                                                            <div class="col-md-12">
                                                                {{-- <div class="form-group">
                                                                    <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery" spellcheck="false"></textarea>
                                                                </div> --}}
                                                            {{--  --}}
                                                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                                                <span class="btn-text">Place Order Now</span>
                                                                <span class="btn-hover-text">Proceed to Chekout</span>
                                                            </button>
                                                            {{--  --}}
                                                            </div>
                                                        </form>
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

                                            {{--  --}}

                                            @endif



										</div><!-- End .accordion -->

		                				<a href="{{url('/')}}/dashboard" type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text"><i class="icon-user"></i> My Account</span>
		                					<span class="btn-hover-text">Proceed to My Account</span>
                                        </a>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
                                @else
		                		<aside class="col-lg-6" style="margin:0px auto !important">
		                			<div class="summary" style="margin:0px !important">
		                				<h3 class="summary-title">Your Order #{{$OrderNumberNumber}}</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
                                                @foreach($CartItems as $CartItem)
                                                    <?php
                                                        $Products = DB::table('product')->where('id',$CartItem->id)->get();
                                                    ?>
                                                    @foreach($Products as $Product)
                                                    <tr>
                                                        <td><a href="{{url('/')}}/product/{{$Product->slung}}">{{$Product->name}} <strong>x</strong> {{$CartItem->qty}}</a></td>
                                                        <td>KES {{$CartItem->price}}</td>
                                                    </tr>
                                                    @endforeach
                                                @endforeach


		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>{{Cart::subtotal()}}</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>KES {{$Shipping}}</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>KES
                                                        <?php
                                                          //remove comma
                                                          $Subtotal = Cart::subtotal();
                                                          $PrepSubtotal = str_replace(',', '', $Subtotal);
                                                          $WholeSubtotal = ceil($PrepSubtotal);
                                                          $TheTotal = $WholeSubtotal + $Shipping;
                                                          echo $TheTotal;
                                                        ?>
                                                     </td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">



                                            @if($location == 'Nairobi')
                                            <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">
                                                        <form method="POST" action="{{url('/shopping-cart/checkout/placeOrder')}}" id="verify">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="invoice" value="{{$InvoiceNumber}}">
                                                                  <?php
                                                                      if(Session::has('campaign')){
                                                                          $cost = Cart::total();
                                                                          $percentage = 10;
                                                                          $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                          $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                          $discount = ($percentage / 100) * $FormatTotalCart;
                                                                          $TotalCart = ($FormatTotalCart - $discount);
                                                                      }else{
                                                                          $cost = Cart::total();
                                                                          $percentage = 10;
                                                                          $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                          $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                          $TotalCart = $FormatTotalCart;
                                                                      }

                                                                      $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                      $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                      $ShippingFee = $Shipping;
                                                                      $TotalCost = $FormatTotalCart+$ShippingFee;


                                                                  ?>
                                                            <input type="hidden" name="amount" value="{{$TotalCost}}">
                                                            <div class="col-md-12">
                                                                {{-- <div class="form-group">
                                                                    <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery" spellcheck="false"></textarea>
                                                                </div> --}}
                                                            {{--  --}}
                                                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                                                <span class="btn-text">Place Order Now</span>
                                                                <span class="btn-hover-text">Proceed to Chekout</span>
                                                            </button>
                                                            {{--  --}}
                                                            </div>
                                                        </form>
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
                                            {{--  --}}
                                            <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed btn btn-outline-primary-2 btn-order btn-block" style="border-radius:10px;" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    Order With WhatsApp <span class="fab fa-whatsapp"></span>
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
                                                        <form method="POST" action="{{url('/shopping-cart/checkout/placeOrder')}}" id="verify">
                                                            @foreach($CartItems as $CartItem)
                                                            <?php
                                                                            $Products = DB::table('product')->where('id',$CartItem->id)->get();
                                                            ?>
                                                            @foreach($Products as $Product)
                                                            {{-- <tr>
                                                                <td><a href="{{url('/')}}/product/{{$Product->slung}}">{{$Product->name}} <strong>x</strong> {{$CartItem->qty}}</a></td>
                                                                <td>KES {{$CartItem->price}}</td>
                                                            </tr> --}}
                                                            @endforeach
                                                            @endforeach

                                                            <a href="https://wa.me/254790721397?text=Hello, my name is {{Auth::user()->name}}, I am placing an order for :{{$Product->name}} Quantity:{{$CartItem->qty}}" class="btn btn-outline-primary-2 btn-order btn-block">
                                                                <span class="btn-text">Place Order Now</span>
                                                            </a>
                                                            {{--  --}}
                                                            </div>
                                                        </form>
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
                                            {{--  --}}
                                            @endif


										</div><!-- End .accordion -->
                                        {{-- <button href="{{url('/')}}/dashboard" type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text"> Save and Proceed <i class="icon-arrow-right"></i></span>
		                					<span class="btn-hover-text">Proceed to Place Order</span>
                                        </button> --}}


		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
                                @endif
		                	</div><!-- End .row -->

	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        {{--  --}}



@endsection

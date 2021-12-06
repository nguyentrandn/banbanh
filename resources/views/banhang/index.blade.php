@extends('banhang.layout.master')

@section('container')
<div class="rev-slider">
        <div class="fullwidthbanner-container">
                        <div class="fullwidthbanner">
                            <div class="bannercontainer" >
                            <div class="banner" >
                                    <ul>
                                        @foreach($slides as $sl)
                                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="/source/image/slide/{{ $sl['image'] }}" data-src="/source/image/slide/{{ $sl['image']}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/image/slide/{{ $sl['image']}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                                        </div>
                                                    </div>

                                        </li>
                                        @endforeach
                                   
                                    </ul>
                                </div>
                            </div>

                            <div class="tp-bannertimer"></div>
                        </div>
        </div>
        <!--slider-->

	</div>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>San Pham Moi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Co {{ count($new_product) }} san pham </p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@php $stt = 0 ; @endphp 
								@foreach($new_product as $new)
								@php $stt ++  @endphp
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="/source/image/product/{{ $new -> image }}" alt="" height="200px" width="200"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $new -> name }}</p>
											<p class="single-item-price">
												<span>{{ $new -> unit_price }}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								
								@if ($stt %4 == 0)
								<div class= "space40"> &nbsp</div>
								@endif
								
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@php $stt = 0 ; @endphp 
								@foreach($all_pr as $pr)
								@php $stt ++  @endphp

									<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="/source/image/product/{{ $pr -> image }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $pr -> name }}</p>
											<p class="single-item-price">
												<span>{{ $pr -> price }} </span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
									</div>

								@if ($stt %40 == 0)
								<div class= "space50"> &nbsp</div>
								@endif
								
								@endforeach
							</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection

@section('copyright')
<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="/source/assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="/source/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="/source/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="/source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->
@endsection


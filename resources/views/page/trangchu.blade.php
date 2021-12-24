@extends('master')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
								@foreach($slide as $sl)
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->Name_img}}" data-src="source/image/slide/{{$sl->Name_img}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->Name_img}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
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
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							
							<div class="row">
							@foreach($product as $pr)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item">
											@if($pr->price_promotion!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											</div>
											@endif
										</div>
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$pr->idSanPham)}}"><img style="width:400px;height:250px" src="source/assets/dest/images/products/Phone/{{$pr->Anh1}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pr->TenSPham}}</p>
											<p class="single-item-price" style="font-size:16px">
												@if($pr->price_promotion ==0)
												
												<span class="flash-sale">{{number_format($pr->price)}} vnđ</span>
											@else
											<span class="flash-del"> {{number_format( $pr->price)}} vnđ </span>
											<span class="flash-sale">{{number_format($pr->price_promotion)}} vnđ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khuyến mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($product_promotion)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
						@foreach($product_promotion as $pr_promotion)
								<div class="col-sm-3">
								<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											</div>
									
									<div class="single-item">
									
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$pr_promotion->idSanPham)}}"><img style="width:400px;height:250px" src="source/assets/dest/images/products/Phone/{{$pr_promotion->Anh1}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pr_promotion->TenSPham}}</p>
											<p class="single-item-price" style="font-size:16px">
											<span class="flash-del"> {{number_format($pr_promotion->price) }}vnđ</span>
											<span class="flash-sale">{{number_format($pr_promotion->price_promotion)}} vnđ</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach	
						</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

	
@endsection

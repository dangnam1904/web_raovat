@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham->TenSPham}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">

				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/assets/dest/images/products/Phone/{{$sanpham->Anh1}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title" style="font-size: 24px;">{{$sanpham->TenSPham}}</p>
								<br>
								<p class="single-item-price">
									@if($sanpham->price_promotion ==0)
												
									<span class="flash-sale">{{number_format($sanpham->price)}} vnđ</span>
									@else
									<span class="flash-del"> {{number_format( $sanpham->price)}} vnđ </span>
									<span class="flash-sale">{{number_format($sanpham->price_promotion)}} vnđ</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->MoTa1}} </p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								
								<select class="wc-select" name="color">
									<option>SL</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-reviews">Đánh giá (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p style="font-size:18px">{{$sanpham->MoTa1}} </p>
							<br>
						<img src="source/assets/dest/images/products/Phone/{{$sanpham->Anh1}}" style="width:400px ;height:450px; display: block; margin-left: auto; margin-right: auto;" alt="" srcset="">
							<br>
							<p style="font-size:18px">{{$sanpham->Mota2}} </p>
							<br>
						<img src="source/assets/dest/images/products/Phone/{{$sanpham->Anh2}}" style="width:400px ;height:450px; display: block; margin-left: auto; margin-right: auto;" alt="" srcset="">
							<br>
							<p style="font-size:18px">{{$sanpham->Mota3}} </p>
							<br>
						<img src="source/assets/dest/images/products/Phone/{{$sanpham->Anh3}}" style="width:400px ;height:450px; display: block; margin-left: auto; margin-right: auto;" alt="" srcset="">
							<br>
							

						</div>
						<div class="panel" id="tab-reviews">
							<p>Chưa có đánh giá</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>
						<br>
						<br>
						<div class="row">
							@foreach( $sp_tuongtu as $sp_tt)
							<div class="col-sm-4">
								<div class="single-item">
										@if($sp_tt->price_promotion!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											</div>
										@endif
									<div class="single-item-header">
										<a href="product.html"><img width="300px" height="250px" src="source/assets/dest/images/products/Phone/{{$sp_tt->Anh1}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp_tt->TenSPham}}</p>
										<p class="single-item-price">
										<p class="single-item-price">
												@if($sp_tt->price_promotion ==0)
												
												<span class="flash-sale">{{number_format($sp_tt->price)}} vnđ</span>
											@else
											<span class="flash-del"> {{number_format( $sp_tt->price)}} vnđ </span>
											<span class="flash-sale">{{number_format($sp_tt->price_promotion)}} vnđ</span>
												@endif
											</p>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
							<div class="row">
							
							</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
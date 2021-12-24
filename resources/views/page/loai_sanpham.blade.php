@extends('master')
@section('content')
</div> <!-- #header -->
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$loai_sp->TenNhomSP}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
					
						<ul class="aside-menu">
						@foreach( $loai as $l)
							<li><a href="{{route('loaisanpham',$l->idNhomSp)}}">{{$l->TenNhomSP}}</a></li>
						@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm </p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
                            @foreach($sp_theoloai as $sp)
								<div class="col-sm-4">
									<div class="single-item">
									@if($sp->price_promotion!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											</div>
											@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$sp->idSanPham)}}"><img style="height:300px" src="source/assets/dest/images/products/Phone/{{$sp->Anh1}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->TenSPham}}</p>
											<p class="single-item-price" style="font-size: 17px;">
											@if($sp->price_promotion ==0)
												
												<span class="flash-sale">{{number_format($sp->price)}} vnđ</span>
											@else
											<span class="flash-del"> {{number_format( $sp->price)}} vnđ </span>
											<span class="flash-sale">{{number_format($sp->price_promotion)}} vnđ</span>
												@endif
											</p>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach

							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_khac)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sp_khac as $sp_k)
								<div class="col-sm-4">
									<div class="single-item">
									@if($sp_k->price_promotion!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											</div>
											@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$sp->idSanPham)}}"><img style="height:300px" src="source/assets/dest/images/products/Phone/{{$sp_k->Anh1}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp_k->TenSPham}}</p>
											<p class="single-item-price" style="font-size: 17px;">
											@if($sp_k->price_promotion ==0)
												
												<span class="flash-sale">{{number_format($sp_k->price)}} vnđ</span>
											@else
											<span class="flash-del"> {{number_format( $sp_k->price)}} vnđ </span>
											<span class="flash-sale">{{number_format($sp_k->price_promotion)}} vnđ</span>
												@endif
											</p>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
		

							
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> 
    @endsection 
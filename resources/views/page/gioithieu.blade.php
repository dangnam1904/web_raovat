@extends('master')
@section('content')
<div class="inner-header">
	<base href="{{asset('')}}">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Giới thiệu</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Giới thiệu</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="our-history">
				<h2 class="text-center wow fadeInDown">Lịnh trình Web </h2>
				<div class="space35">&nbsp;</div>

				<div class="history-slider">
					<div class="history-navigation">
						<a data-slide-index="0" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2017</span></a>
						<a data-slide-index="0" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2018</span></a>
						<a data-slide-index="0" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2019</span></a>
						<a data-slide-index="1" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2020</span></a>
						<a data-slide-index="2" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2021</span></a>
						<a data-slide-index="0" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2023</span></a>
						<a data-slide-index="0" href="{{route('trang-chu')}}" class="circle"><span class="auto-center">2024</span></a>		
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fa fa-user"></i></p>
						<p class="beta-counter-value timer numbers" data-to="19855" data-speed="2000">20</p>
						<p class="beta-counter-title">Lượng người dùng</p>
					</div>
				</div>

				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fa fa-picture-o"></i></p>
						<p class="beta-counter-value timer numbers" data-to="3568" data-speed="2000">25</p>
						<p class="beta-counter-title">Tổng sản phẩm</p>
					</div>
				</div>

				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fa fa-clock-o"></i></p>
						<p class="beta-counter-value timer numbers" data-to="258934" data-speed="2000">320</p>
						<p class="beta-counter-title">Tổng Thời gian hoạt động</p>
					</div>
				</div>

				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fa fa-pencil"></i></p>
						<p class="beta-counter-value timer numbers" data-to="150" data-speed="2000">20</p>
						<p class="beta-counter-title">Tổng bài viết</p>
					</div>
				</div>
			</div> <!-- .beta-counter block end -->

			<div class="space50">&nbsp;</div>
			<hr />
			<div class="space50">&nbsp;</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
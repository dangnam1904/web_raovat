@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng bán sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Đăng sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="" method="post" class="beta-form-checkout" enctype="multipart/form-data"> 
			<input type="hidden" name="_token" value="{{csrf_token()}}"> 
				<<div class="row">
		<div class="col-sm-3"></div>
				
					<div class="col-sm-6">
						<h4>Đăng bán sản phẩm của bạn</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="tensp">Tên sản phẩm</label>
							<input type="text" name="Tensp" required>
						</div>

                        <div class="form-block">
                        <label for="nhomsp">Loại sản phẩm</label>
                        <select name="nhom_sp" id="">
                        @foreach( $loai_sp as $l)
                        <option  >{{$l->TenNhomSP}}</option>
                       @endforeach
                        </select>
						</div>

						<div class="form-block">
							<label for="text">Mô tả sản phẩm</label>
							<textarea name="Mota1" id="" cols="70" rows="10"></textarea>
						</div>

						<div class="form-block">
							<label for="text">Mô tả sản phẩm chi tiết </label>
							<textarea name="Mota2" id="" cols="200" rows="10"></textarea>
						</div>

                        <div class="form-block">
                        <label for="formFileMultiple" class="form-label">Chọn file ảnh</label>
                        <input class="form-control" name="image" type="file" id="formFileMultiple" enctype multiple>
                        </div>
						<div class="form-block">
							<label for="price">Giá bán sản phẩm</label>
							<input type="number" name="price" required>
						</div>
						<div class="form-block">
							<label for="sluong">Số lượng sản phẩm</label>
							<input type="number" name="soluong" required>
						</div>

						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng bài</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
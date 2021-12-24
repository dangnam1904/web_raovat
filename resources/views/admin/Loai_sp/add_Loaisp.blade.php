@extends('admin.admin_Layout')
@section('admin_content')
<header class="panel-heading">
    Thêm loại sản phẩm
</header>
 <div class="panel-body">
     <?php
use Illuminate\Support\Facades\Session;
$message= Session::get('message');
if ($message){
    echo '<spam class="text-alert">' .$message. '</spam>';
    Session::put('message',null);
}
?>
    <div class="position-center">
        <form role="form" action="{{route('save_loaisp')}}" method="post">
        @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">id </label>
                <input type="number" class="form-control" name="id" placeholder="id">
             </div>
                <label for="exampleInputEmail1">Tên nhóm sản phẩm</label>
                <input type="text" class="form-control" name="tenNhom" placeholder="Tên nhóm sản phẩm">
             </div>
            <div class="form-group">
                <label for="Mota">Mô tả sản phẩm</label>
                <textarea name="mota" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-info" name="add_loaisp">Thêm</button>
        </form>
    </div>
 </div>

@endsection 
<?php

namespace App\Http\Controllers;
use App\Extensions\MongoSessionHandler;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\slide;
use App\Models\group_san_pham;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide= slide::all();
        $product= sanpham::all();
        $product_promotion= sanpham::where('price_promotion','<>',0)->get();
        return view('page.trangchu', compact('slide','product','product_promotion'));
    }

    public function getLoaiSp($type){
        $sp_theoloai = sanpham::where('idNhomSp',$type)->get();
        $sp_khac=sanpham::where('idNhomSp','<>',$type)->get(); //paginate(3);
        $loai= group_san_pham::all();
        $loai_sp= group_san_pham::where('idNhomSp',$type)->first();
    	return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
  
    public function getChitiet(Request $req){
        $sanpham = sanpham::where('idSanPham',$req->id)->first();
        $sp_tuongtu = sanpham::where('idNhomSp',$sanpham->idNhomSp)->get();
    	return view('page.chitiet_sp',compact('sanpham','sp_tuongtu'));
    }

    public function getLienHe(){
    	return view('page.lienhe');
    }

    public function getGioiThieu(){
    	return view('page.gioithieu');
    }

    public function getCheckout(){
        return view('page.dat_hang');
    }

    public function getLogin(){
        return view('page.dangnhap');
    }
    public function getSignin(){
        return view('page.dangki');
    }

    public function getSearch(Request $req){
         
        $product= sanpham::where('TenSPham','like','%'.$req->key.'%')
                            ->orwhere('price',$req->key)
                                ->get();
        return view('page.search',compact('product'));
    }
    // public function postSignin(Request $req){
    //     $this->validate($req,
    //         [
    //             'email'=>'required|email|unique:users,email',
    //             'password'=>'required|min:6|max:20',
    //             'fullname'=>'required',
    //             're_password'=>'required|same:password'
    //         ],
    //         [
    //             'email.required'=>'Vui lòng nhập email',
    //             'email.email'=>'Không đúng định dạng email',
    //             'email.unique'=>'Email đã có người sử dụng',
    //             'password.required'=>'Vui lòng nhập mật khẩu',
    //             're_password.same'=>'Mật khẩu không giống nhau',
    //             'password.min'=>'Mật khẩu ít nhất 6 kí tự'
    //         ]);
    //     // $user = new User();
    //     // $user->full_name = $req->fullname;
    //     // $user->email = $req->email;
    //     // $user->password = Hash::make($req->password);
    //     // $user->phone = $req->phone;
    //     // $user->address = $req->address;
    //     // $user->save();
    //     return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    // }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        // $user = User::where([
        //         ['email','=',$req->email],
        //         ['status','=','1']
        //     ])->first();

        // if($user){
        //     if(Auth::attempt($credentials)){

        //     return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        //     }
        //     else{
        //         return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        //     }
        // }
        // else{
        //    return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        // }
        
    }
    // public function postLogout(){
    //     Auth::logout();
    //     return redirect()->route('trang-chu');
    // }
    
    public function dang_ban(){
        $loai_sp= group_san_pham::all();
     return view('page.dangban',compact('loai_sp'));
    }

    public function postdang_ban(Request $req){

        $req->validate([
            'image' =>'required|mines:jpg,png,jpeg|max:500',
            'Tensp'=>'required',
            'Mota1'=>'required',
            'Mota2'=>'required'
        ]);
    $newImageNam = time(). '-' . $req->Anh1 .'.'.
    $req ->image->extension();
    dd($newImageNam);
        exit;
        $loai_sp= group_san_pham::all();
     return view('page.dangban',compact('loai_sp'));
    }
    
    
}

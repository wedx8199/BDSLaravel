<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use App\District;
use App\City;
use App\Type;
use App\BDS;
use App\File;
use App\RequestModel;
use Session;
use Hash;
use Auth;

class AdminController extends Controller
{


    public function admin_index(){

        $bds = BDS::where('status','onl')->get();
        $bdsoff = BDS::where('status','off')->get();
        $user = User::all();

$collection = BDS::where('status','onl')->where('loai',1)->groupBy('id_city')
->selectRaw('count(*) as total, id_city')
->get();
$collection2 = BDS::where('status','onl')->where('loai',2)->groupBy('id_city')
->selectRaw('count(*) as total, id_city')
->get();
$collection3 = BDS::where('status','onl')->where('loai',3)->groupBy('id_city')
->selectRaw('count(*) as total, id_city')
->get();
        $contact = RequestModel::latest()->take(5)->get();

    return view('admin_index',compact('bds','bdsoff','user','collection','collection2','collection3','contact'));
    }

    public function manage_bds(){
    	$bds = BDS::where('loai',1)->where('status','onl')->get();
        $bdsoff = BDS::where('status','off')->get();
        $bdsrent = BDS::where('loai',2)->where('status','onl')->get();
        $bdsneed = BDS::where('loai',3)->where('status','onl')->get();
    	return view('personalpost',compact('bds','bdsoff','bdsrent','bdsneed'));
    }




    public function manage_city(){

    	$city=City::all();
    	return view('manage_city',compact('city'));
    }


    public function postaddcity(Request $req){



				$city=new City;
		    	$city->name=$req->name;
		    	$city->save();

	return redirect()->back()->with('alert','Tải lên thành công');
    }

    public function postadmincityedit(Request $req,$id){


        City::where('id',$id)->update(['name' => $req->name]);
        return redirect()->back()->with('alert','Sửa thành công');
    }

    public function delcity($id){
    	$check = BDS::where('id_city',$id)->get();
    	if($check->isNotEmpty())
    	{
		return redirect()->back()->with('alert','Không thể xóa vì còn bài đăng thuộc TP này');
    	}
    	else{
    	$district = District::where('id_city',$id)->delete();
		$city = City::where('id',$id)->delete();
    	return redirect()->back()->with('alert','Xóa thành công TP và các quận của TP');
    	}

    }





    public function manage_district(){
    	$district=District::all();
    	$city=City::all();
    	return view('manage_district',compact('city','district'));
    }
    public function postadddistrict(Request $req){



				$district=new District;
		    	$district->name=$req->name;
		    	$district->id_city=$req->city;
		    	$district->save();

	return redirect()->back()->with('alert','Tải lên thành công');
    }

    public function postadminquanedit(Request $req,$id){


        District::where('id',$id)->update(['name' => $req->name,'id_city' => $req->city]);
        return redirect()->back()->with('alert','Sửa thành công');
    }

    public function deldistrict($id){
    	$check = BDS::where('id_district',$id)->get();
    	if($check->isNotEmpty())
    	{
		return redirect()->back()->with('alert','Không thể xóa vì còn bài đăng thuộc quận này');
    	}
    	else{
    	$district = District::where('id',$id)->delete();
    	return redirect()->back()->with('alert','Xóa thành công quận của TP');
    	}

    }











    public function manage_type(){

    	$type=Type::all();
    	return view('manage_type',compact('type'));
    }


    public function postaddtype(Request $req){



				$type=new Type;
		    	$type->name=$req->name;
		    	$type->save();

	return redirect()->back()->with('alert','Tải lên thành công');
    }


    public function postadmintypeedit(Request $req,$id){


        Type::where('id',$id)->update(['name' => $req->name]);
        return redirect()->back()->with('alert','Sửa thành công');
    }


    public function deltype($id){
    	$check = BDS::where('id_type',$id)->get();
    	if($check->isNotEmpty())
    	{
		return redirect()->back()->with('alert','Không thể xóa vì còn bài đăng thuộc loại này');
    	}
    	else{
		$type = Type::where('id',$id)->delete();
    	return redirect()->back()->with('alert','Xóa thành công loại');
    	}

    }




    public function manage_user(){

    	$user=User::where('role','!=', 'admin')->get();
    	return view('manage_user',compact('user'));
    }
    public function postadminuseredit(Request $req,$id){


    	User::where('id',$id)->update(['name' => $req->name,'phone' => $req->phone]);
    	return redirect()->back()->with('alert','Sửa thành công');
    }


    public function deluser($id){
    	$check = BDS::where('id_owner',$id)->get();
    	if($check->isNotEmpty())
    	{
		return redirect()->back()->with('alert','Không thể xóa vì còn bài đăng');
    	}
    	else{
		$user = User::where('id',$id)->delete();
    	return redirect()->back()->with('alert','Xóa thành công');
    	}

    }

    public function lockuser($id){

        User::where('id',$id)->update(['role' => 'suspended']);
        BDS::where('id_owner',$id)->where('status','onl')->update(['status' => 'lock']);
        return redirect()->back()->with('alert','Khóa tài khoản thành công');

    }
    public function unlockuser($id){

        User::where('id',$id)->update(['role' => 'user']);
        BDS::where('id_owner',$id)->where('status','lock')->update(['status' => 'onl']);
        return redirect()->back()->with('alert','Mở lại tài khoản thành công');

    }






    public function manage_dt(){
        $bds = BDS::where('loai',1)->where('status','off')->get();
        return view('doanhthu',compact('bds'));
    }

    public function doanhthutime(Request $req){
        $date1 = $req->day1;
        $date2 = $req->day2;
        $bds = BDS::where('loai',1)->where('updated_at', '>=', $date1)->where('updated_at', '<=', $date2)->where('status','off')->orderBy('updated_at', 'ASC')->get();
        return view('doanhthu',compact('bds'));
    }





    public function manage_lh(){
        $contact = RequestModel::all();
        return view('manage_request',compact('contact'));
    }
    public function delreq($id){
        $contact = RequestModel::where('id',$id)->delete();
        return redirect()->back()->with('alert','Xử lý xong yêu cầu');

    }




}

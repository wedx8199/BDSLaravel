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
use App\Rules\Captcha;
use Session;
use Hash;
use Auth;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $req){

    	$bds=BDS::where('loai',1)->where('status','onl')->inRandomOrder()->take(9)->get();
        $bds2=BDS::where('loai',2)->where('status','onl')->latest()->take(4)->get();
$collection = BDS::where('loai',1)->where('status','onl')->groupBy('id_city')
->selectRaw('count(*) as total, id_city')
->get();
    	$type=Type::all();
    	return view('main.index',compact('bds','bds2','type','collection'));
    }

    public function allpost(Request $req){

        $bds=BDS::where('loai',1)->where('status','onl')->paginate(5);
        $type=Type::all();
        return view('main.allpost',compact('bds','type'));
    }









    public function type2(Request $req){

        $bds=BDS::where('loai',2)->where('status','onl')->paginate(5);
        $type=Type::all();
        return view('main.thue',compact('bds','type'));
    }
    public function type3(Request $req){

        $bds=BDS::where('loai',3)->where('status','onl')->paginate(5);
        $type=Type::all();
        return view('main.canmuathue',compact('bds','type'));
    }






    public function city(Request $req, $id){

    	$bds = BDS::where('loai',1)->where('status','onl')->where('id_city',$id)->paginate(5);
    	$name = City::where('id',$id)->first();
    	$type=Type::all();
    	return view('main.allpost',compact('bds','type','name'));
    }
    public function citytype2(Request $req, $id){

        $bds = BDS::where('loai',2)->where('status','onl')->where('id_city',$id)->paginate(5);
        $name = City::where('id',$id)->first();
        $type=Type::all();
        return view('main.thue',compact('bds','type','name'));
    }








    public function quan(Request $req, $id){

    	$bds = BDS::where('loai',1)->where('status','onl')->where('id_district',$id)->paginate(5);
    	$name = District::where('id',$id)->first();
    	$type=Type::all();
    	return view('district',compact('bds','type','name'));
    }
    public function quantype2(Request $req, $id){

        $bds = BDS::where('loai',2)->where('status','onl')->where('id_district',$id)->paginate(5);
        $name = District::where('id',$id)->first();
        $type=Type::all();
        return view('district',compact('bds','type','name'));
    }







    public function signin(){
    	return view('signin');
    }

    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'pass'=>'required|min:6',
                'name'=>'required',
                'repass'=>'required|same:pass',
                'phone'=>'required',
                'g-recaptcha-response'=>'required', new Captcha(),
            ],
            [
                'email.required'=>'Vui l??ng nh???p email',
                'email.email'=>'Vui l??ng nh???p ????ng ?????nh d???ng email',
                'email.unique'=>'???? c?? email n??y',
                'name.required'=>'Vui l??ng nh???p t??n',
                'phone.required'=>'Vui l??ng nh???p S??T',
                'pass.required'=>'Vui l??ng nh???p password',
                'pass.min'=>'Password c?? ??t nh???t 6 k?? t???',
                'repass.same'=>'Vui l??ng nh???p ????ng m???t kh???u',
                'g-recaptcha-response.required'=>'Vui l??ng ??i???n Captcha',
            ]);

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->pass);
        $user->phone = $req->phone;
        $user->save();
        return redirect()->back()->with('alert','???? t???o t??i kho???n th??nh c??ng, vui l??ng ????ng nh???p');
    }




    public function login(){
    	return view('login');
    }






    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'pass'=>'required|min:6',
                'g-recaptcha-response'=>'required', new Captcha(),
            ],
            [
                'email.required'=>'Vui l??ng nh???p email',
                'email.email'=>'Vui l??ng nh???p ????ng ?????nh d???ng email',
                'pass.required'=>'Vui l??ng nh???p password',
                'pass.min'=>'Password c?? ??t nh???t 6 k?? t???',
                'g-recaptcha-response.required'=>'Vui l??ng ??i???n Captcha',
            ]);

        $credentials = array('email'=>$req->email,'password'=>$req->pass);
        if(Auth::attempt($credentials)){
            $userStatus = Auth::user()->role;
                if($userStatus !== 'suspended'){
                    return redirect()->route('index')->with('alert','????ng nh???p th??nh c??ng');
                }
                else{
                    Auth::logout();
                    Session::flush();
                    return redirect()->back()->with('alert','T??i kho???n ???? b??? kh??a b???i ADMIN');
                }
             
        }
        else {
            return redirect()->back()->with('alert','H??y ??i???n ????ng email ho???c m???t kh???u');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }









    public function viewpost($id){
    	$bds = BDS::where('id',$id)->first();
    	//$product_related = Product::where('id_type',$product->id_type)->take(3)->inRandomOrder()->get();
    	$owner = User::where('id',$bds->id_owner)->first();
    	$pic = File::where('id_bds',$id)->get();
        $bds2=BDS::where('id', '!=', $bds->id)->where('loai',$bds->loai)->where('id_district',$bds->id_district)->where('status','onl')->take(3)->inRandomOrder()->get();
        $bds3=BDS::where('id', '!=', $bds->id)->where('loai',$bds->loai)->where('id_city',$bds->id_city)->where('status','onl')->take(3)->inRandomOrder()->get();
    	return view('main.viewpost',compact('bds','owner','pic','bds2','bds3'));
    }












    public function addpost(){
    	$district=District::all();
    	$city=City::all();
    	$type=Type::all();
    	return view('addpost',compact('district','city','type'));
    }

    public function postaddpost(Request $req){

$this->validate($req,
            [
                'name'=>'required',
                'address'=>'required',
                'price'=>'required',
                'area'=>'required',
                'newFile.*' => 'required|mimes:jpeg,png,jpg,svg',
                'info'=>'required|max:255'
            ],
            [
                'name.required'=>'Vui l??ng nh???p t???a ?????',
                'address.required'=>'Vui l??ng nh???p ?????a ch???',
                'price.required'=>'Vui l??ng nh???p gi?? ti???n',
                'area.required'=>'Vui l??ng nh???p di???n t??ch',
                'newFile.required'=>'Vui l??ng th??m h??nh',
                'newFile.mimes'=>'H??nh ph???i l?? jpeg,png,jpg,svg',
                'info.required'=>'Vui l??ng nh???p mi??u t???'
            ]);

				$bds=new BDS;
		    	$bds->name=$req->name;
		    	$bds->address=$req->address;
		    	$bds->id_city=$req->city;
		    	$bds->id_district=$req->district;
		    	$bds->id_type=$req->type;
		    	$bds->price=$req->price;
		    	$bds->dientich=$req->area;
                $bds->loai=$req->loai;
		    	$bds->info=$req->info;
		    	$bds->id_owner=Auth::user()->id;
                $bds->dangdum_name=$req->oname;
                $bds->dangdum_phone=$req->onumber;
                $bds->youtube=$req->youtube;
		    	$bds->save();



foreach ($req->file('newFile') as $file) {
		$postImage = new File;
$getFileExt   = $file->getClientOriginalExtension();
$getFileName = $file->getClientOriginalName();
$filename =   time().'w'.$getFileName.'.'.$getFileExt;
		$file->move('source/image',$filename);
		$postImage->id_bds = $bds->id;
		$postImage->name = $filename;
		$postImage->save();
	}
return redirect()->route('index')->with('alert','T???i l??n th??nh c??ng');








    }












    public function viewedit($id){
    	$bds = BDS::where('loai',1)->where('id_owner',$id)->where('status','onl')->get();
    	$bdsoff = BDS::where('id_owner',$id)->where('status','off')->get();
        $bdsrent = BDS::where('loai',2)->where('id_owner',$id)->where('status','onl')->get();
        $bdsneed = BDS::where('loai',3)->where('id_owner',$id)->where('status','onl')->get();
    	return view('personalpost',compact('bds','bdsoff','bdsrent','bdsneed'));
    }



    public function viewpersonal($id){
        $bds = BDS::where('id_owner',$id)->where('status','onl')->paginate(5);
        $owner = User::where('id',$id)->first();
        return view('main.personal',compact('bds','owner'));
    }




    public function editpost($id){
    	$bds = BDS::where('id',$id)->first();
    	$district=District::all();
    	$city=City::all();
    	$type=Type::all();
    	$pic = File::where('id_bds',$id)->get();
        
        if(Auth::user()->id == $bds->id_owner || Auth::user()->role == "admin"){

            return view('editpost',compact('bds','district','city','type','pic'));
        }
        else{
            return abort(404,'Page not found.');
        }
    	
    }
    public function delpic($id){
    	$img = File::where('id',$id)->first();					//bug ???????ng d???n
    	Storage::delete('public/source/image/' . $img->name); 	//bug ???????ng d???n
    	File::where('id',$id)->delete();
    	return redirect()->back()->with('alert','X??a ???nh th??nh c??ng');
    }


    public function posteditpost(Request $req,$id){

$this->validate($req,
            [
                'name'=>'required',
                'address'=>'required',
                'price'=>'required',
                'area'=>'required',
                'newFile.*' => 'nullable|mimes:jpeg,png,jpg,svg', //bug mimes fix = .*
                'info'=>'required|max:255'
            ],
            [
                'name.required'=>'Vui l??ng nh???p t???a ?????',
                'address.required'=>'Vui l??ng nh???p ?????a ch???',
                'price.required'=>'Vui l??ng nh???p gi?? ti???n',
                'area.required'=>'Vui l??ng nh???p di???n t??ch',
                'newFile.mimes'=>'H??nh ph???i l?? jpeg,png,jpg,svg',
                'info.required'=>'Vui l??ng nh???p mi??u t???'
            ]);

if($req->hasFile('newFile')){

BDS::where('id',$id)->update(['name' => $req->name,'address'=>$req->address,'id_type'=>$req->type,'id_city'=>$req->city,'id_district'=>$req->district,'price'=>$req->price,'dientich'=>$req->area,'info'=>$req->info,'dangdum_name'=>$req->oname,'dangdum_phone'=>$req->onumber,'youtube'=>$req->youtube]);



foreach ($req->file('newFile') as $file) {
		$postImage = new File;
$getFileExt   = $file->getClientOriginalExtension();
$getFileName = $file->getClientOriginalName();
$filename =   time().'w'.$getFileName.'.'.$getFileExt;
		$file->move('source/image',$filename);
		$postImage->id_bds = $id;
		$postImage->name = $filename;
		$postImage->save();
	}
return redirect()->route('index')->with('alert','S???a th??ng tin th??nh c??ng');
}
else
{
	BDS::where('id',$id)->update(['name' => $req->name,'address'=>$req->address,'id_type'=>$req->type,'id_city'=>$req->city,'id_district'=>$req->district,'price'=>$req->price,'dientich'=>$req->area,'info'=>$req->info,'dangdum_name'=>$req->oname,'dangdum_phone'=>$req->onumber,'youtube'=>$req->youtube]);
	return redirect()->route('index')->with('alert','S???a th??ng tin th??nh c??ng');
}







    }




    public function delpost($id){
        $bds = BDS::where('id',$id)->first();
		

        if(Auth::user()->id == $bds->id_owner || Auth::user()->role == "admin"){
            
            $bdsdel = BDS::where('id',$id)->delete();
            $pic = File::where('id_bds',$id)->delete();
            return redirect()->back()->with('alert','X??a b??i th??nh c??ng');
        }
        else{
            return abort(404,'Page not found.');
        }
    }


    public function soldpost($id){
        $bds = BDS::where('id',$id)->first();
        

        if(Auth::user()->id == $bds->id_owner || Auth::user()->role == "admin"){
            
            BDS::where('id',$id)->update(['status' => 'off']);
            return redirect()->back()->with('alert','X??c nh???n ???? b??n BDS');
        }
        else{
            return abort(404,'Page not found.');
        }


    }










    public function useredit($id){
    	$user=User::where('id',$id)->first();

        if(Auth::user()->id == $user->id || Auth::user()->role == "admin"){
            
        return view('edituser',compact('user'));
        }
        else{
            return abort(404,'Page not found.');
        }
    }

    public function postuseredit(Request $req,$id){


    	User::where('id',$id)->update(['phone' => $req->phone]);
    	return redirect()->back()->with('alert','S???a th??nh c??ng');
    }



    public function changepass(){
        return view('changepass');
    }   

    public function postChangepass(Request $req){
        $this->validate($req,
            [
                
                
                'passnew'=>'required|min:6',
                'repassnew'=>'required|min:6|same:passnew'
            ],
            [

                
                'passnew.required'=>'Vui l??ng nh???p password',
                'passnew.min'=>'Password c?? ??t nh???t 6 k?? t???',
                'repassnew.required'=>'Vui l??ng nh???p password',
                'repassnew.min'=>'Password c?? ??t nh???t 6 k?? t???',
                'repassnew.same'=>'Vui l??ng nh???p l???i ????ng m???t kh???u'
            ]);
        $passnew = Hash::make($req->passnew);

        User::where('id',Auth::user()->id)->update(['password' => $passnew]);
        return redirect()->route('index')->with('alert','S???a m???t kh???u th??nh c??ng'); 

    }







    public function contact(){
        return view('main.contact');
    }

    public function postaddrequest(Request $req){

                $contact=new RequestModel;
                $contact->name=$req->name;
                $contact->email=$req->email;
                $contact->phone=$req->sdt;
                $contact->comment=$req->subject;
                $contact->save();

$data = array(
    'email' => $req->email,
    'name' => $req->name,
    'content' => $req->subject,

);



Mail::send('mailfb', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('wedx8199@gmail.com');
            $message->subject($data['content']);
        });





return redirect()->back()->with('alert','???? ghi nh???n th??ng tin c???a b???n, ch??ng t??i s??? li??n h??? b???n sau');


    }







}

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
use Session;
use Hash;
use Auth;

class SortController extends Controller
{
    //
    public function sortpriceup(){
    	$bds = BDS::where('loai',1)->where('status','onl')->orderBy('price', 'ASC')->paginate(5);
    	$type=Type::all();
    	return view('main.allpost',compact('bds','type'));
    }
    public function sortpricedown(){
    	$bds = BDS::where('loai',1)->where('status','onl')->orderBy('price', 'DESC')->paginate(5);
    	$type=Type::all();
    	return view('main.allpost',compact('bds','type'));
    }
    public function sortareaup(){
    	$bds = BDS::where('loai',1)->where('status','onl')->orderBy('dientich', 'ASC')->paginate(5);
    	$type=Type::all();
    	return view('main.allpost',compact('bds','type'));
    }
    public function sortareadown(){
    	$bds = BDS::where('loai',1)->where('status','onl')->orderBy('dientich', 'DESC')->paginate(5);
    	$type=Type::all();
    	return view('main.allpost',compact('bds','type'));
    }
    public function sortlatest(){
    	$bds = BDS::where('loai',1)->where('status','onl')->orderBy('updated_at', 'DESC')->paginate(5);
    	$type=Type::all();
    	return view('main.allpost',compact('bds','type'));
    }









    public function sortpriceupcity($id){
    	$bds = BDS::where('status','onl')->where('id_city',$id)->orderBy('price', 'ASC')->get();
    	$name = City::where('id',$id)->first();
    	$type=Type::all();
    	return view('city',compact('bds','type','name'));
    }
    public function sortpricedowncity($id){
    	$bds = BDS::where('status','onl')->where('id_city',$id)->orderBy('price', 'DESC')->get();
    	$name = City::where('id',$id)->first();
    	$type=Type::all();
    	return view('city',compact('bds','type','name'));
    }
    public function sortareaupcity($id){
    	$bds = BDS::where('status','onl')->where('id_city',$id)->orderBy('dientich', 'ASC')->get();
    	$name = City::where('id',$id)->first();
    	$type=Type::all();
    	return view('city',compact('bds','type','name'));
    }
    public function sortareadowncity($id){
    	$bds = BDS::where('status','onl')->where('id_city',$id)->orderBy('dientich', 'DESC')->get();
    	$name = City::where('id',$id)->first();
    	$type=Type::all();
    	return view('city',compact('bds','type','name'));
    }
    public function sortlatestcity($id){
    	$bds = BDS::where('status','onl')->where('id_city',$id)->orderBy('updated_at', 'DESC')->get();
    	$name = City::where('id',$id)->first();
    	$type=Type::all();
    	return view('city',compact('bds','type','name'));
    }










    public function sortpriceupquan($id){
    	$bds = BDS::where('status','onl')->where('id_district',$id)->orderBy('price', 'ASC')->get();
    	$name = District::where('id',$id)->first();
    	$type=Type::all();
    	return view('district',compact('bds','type','name'));
    }
    public function sortpricedownquan($id){
    	$bds = BDS::where('status','onl')->where('id_district',$id)->orderBy('price', 'DESC')->get();
    	$name = District::where('id',$id)->first();
    	$type=Type::all();
    	return view('district',compact('bds','type','name'));
    }
    public function sortareaupquan($id){
    	$bds = BDS::where('status','onl')->where('id_district',$id)->orderBy('dientich', 'ASC')->get();
    	$name = District::where('id',$id)->first();
    	$type=Type::all();
    	return view('district',compact('bds','type','name'));
    }
    public function sortareadownquan($id){
    	$bds = BDS::where('status','onl')->where('id_district',$id)->orderBy('dientich', 'DESC')->get();
    	$name = District::where('id',$id)->first();
    	$type=Type::all();
    	return view('district',compact('bds','type','name'));
    }
    public function sortlatestquan($id){
    	$bds = BDS::where('status','onl')->where('id_district',$id)->orderBy('updated_at', 'DESC')->get();
    	$name = District::where('id',$id)->first();
    	$type=Type::all();
    	return view('district',compact('bds','type','name'));
    }









    public function getQuan($id){
        $states = District::where('id_city',$id)->pluck("name","id");
        return json_encode($states);
    }
    public function getDist($id){
        $districts = District::where('id_city',$id)->pluck("name","id");
        return json_encode($districts);
    }









    public function search(Request $req){
        $ten=$req->searchbox;
        $city=$req->country;
        $district=$req->state;
        $type=$req->type;
        $price=$req->price;
        $loai=$req->loai;
        $dt=$req->area;
        $sort=$req->sort;

        $conditions = ['status' => 'onl'];

        if($city != null){
            $conditions = array_merge($conditions, ['id_city' => $req->country]);
        }

        if($district != null){
            $conditions = array_merge($conditions, ['id_district' => $req->state]);
        }
        if($type != null){
            $conditions = array_merge($conditions, ['id_type' => $req->type]);
        }

        $bds = BDS::where($conditions);

        if($ten != null){
            $bds = $bds->where('name', 'like', '%'.$ten.'%');
        }



        if($loai != null){
            switch ($loai) {
                case '1':
                    $bds->where('loai',1);
                    break;
                case '2':
                    $bds->where('loai',2);
                    break;
                case '3':
                    $bds->where('loai',3);
                    break;
                default:
                    // code...
                    break;
            }
        }




        if($price != null){
            switch ($price) {
                case '1':
                    $bds->where('price', '<', '1000000000');
                    break;
                case '2':
                    $bds->where('price', '>=', '1000000000')->where('price', '<', '2000000000');
                    break;
                case '3':
                    $bds->where('price', '>=', '2000000000')->where('price', '<', '3000000000');
                    break;
                case '4':
                    $bds->where('price', '>=', '3000000000')->where('price', '<', '5000000000');
                    break;
                case '5':
                    $bds->where('price', '>=', '5000000000');
                    break;
                default:
                    // code...
                    break;
            }
        }



        if($dt != null){
            switch ($dt) {
                case '1':
                    $bds->where('dientich', '<', '30');
                    break;
                case '2':
                    $bds->where('dientich', '>=', '30')->where('dientich', '<', '50');
                    break;
                case '3':
                    $bds->where('dientich', '>=', '50')->where('dientich', '<', '100');
                    break;
                case '4':
                    $bds->where('dientich', '>=', '100');
                    break;
                default:
                    // code...
                    break;
            }
        }


        if($sort != null){
            switch ($sort) {
                case '1':
                    $bds->orderBy('id', 'ASC');
                    break;
                case '2':
                    $bds->orderBy('price', 'ASC');
                    break;
                case '3':
                    $bds->orderBy('price', 'DESC');
                    break;
                case '4':
                    $bds->orderBy('dientich', 'ASC');
                    break;
                case '5':
                    $bds->orderBy('dientich', 'DESC');
                    break;
                case '6':
                    $bds->orderBy('updated_at', 'DESC');
                    break;
                default:
                    // code...
                    break;
            }
        }






        $bds = ($bds)->paginate(5);
        $type=Type::all();
        return view('main.search',compact('bds','type'));


    }





}

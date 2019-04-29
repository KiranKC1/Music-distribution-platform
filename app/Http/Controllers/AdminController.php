<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Code;
use Session;

class AdminController extends Controller
{
    public function GenerateCode()
    {
        for($i = 1; $i <= 100 ;$i++)
        {
            $code = new Code;
            $code->access_code = "PBM-".$this->TheGenerator();
            $code->status = "unshipped";   
            $code->uuid = Uuid::uuid1();
            $code->save();         
        }
        Session::flash('status',"Generated 100 Album Codes Succesfully!");
        return redirect()->route('get.code');
 
    }

    public function ShipCode()
    {
        $codes = Code::where('status','unshipped')->paginate(20);
        $unshipped = count(Code::where('status','unshipped')->get());
        return view('admin.ship_code')->with('codes',$codes)->with('unshipped',$unshipped);
    }

    public function PostShipCode(Request $request)
    {
        $code = Code::where('status','unshipped')->get();
        $unshipped_codes = Code::where('status','unshipped')->take($request->code_count)->get();
        if($request->code_count > count($code))
        {
            Session::flash('status',"There isn't that many codes to ship! :(");
            return redirect()->back();
        }
       foreach($unshipped_codes as $c)
        {
            $c->status = "shipped";
            $c->save();
        }
        return redirect()->back();
    }

    public function ShippedCodes()
    {
        $codes = Code::where('status','shipped')->orderby('updated_at','desc')->paginate(20);
        return view('admin.code_generator')->with('codes',$codes);
    }

    public function RedeemedCodes()
    {
        $codes = Code::where('status','redeemed')->orderby('updated_at','desc')->paginate(20);
        return view('admin.code_generator')->with('codes',$codes);
    }
    public function UnShippedCodes()
    {
        $codes = Code::where('status','unshipped')->orderby('updated_at','desc')->paginate(20);
        return view('admin.code_generator')->with('codes',$codes);
    }

    public function TheGenerator()
    {
        $id = str_random(10);

        $validator = \Validator::make(['id'=>$id],['id'=>'unique:codes,access_code']);
   
        if($validator->fails()){
             return $this->randomId();
        }
        return $id;
    }

    public function ChangeCodeStatus(Request $request)
    {
        $code = Code::where('access_code',$request->access_code)->first();
        $code->status = $request->status;
        if($request->status == "shipped" || $request->status == "unshipped" )
        {
            $code->redeemed_by = null;
        }
        $code->save();
        return redirect()->back();  
    }

    public function SearchCode(Request $request)
    {
        $query = $request->input('query');
        $codes = Code::where('access_code','=',$query)->orWhere('redeemed_by','=',$query)->paginate(20);
        return view('admin.code_generator')->with('codes',$codes);
    }


    public function CheckCode(Request $request)
    {
        $code = Code::where('access_code',$request->code)->first();
        if($code != null){
            if($code->status == "redeemed" || $code->status == "unshipped"){
            Session::flash('error',"The code has been already redeemed");
            return redirect()->back();
            }else{
            return redirect()->route('get.goodies',['uuid' => $code->uuid,'access_code' => $code->access_code,'email' => $request->email]);
            }
        }else{
            Session::flash('error','Sorry the code you provided was incorrect');
            return redirect()->back();
        }
    }

    public function GetGoodies($uuid,$access_code,$email)
    {
        $code = Code::where('access_code',$access_code)->where('status','shipped')->first();
        if($code != null){
            $code->status = "redeemed";
            $code->redeemed_by = $email;
            $code->save();
            Session::flash('success','Thank you for your purchase. Incase the download fails please email us at pahenlobattimuni@gmail.com along with your code and we will reactivate your code.');
            return response()->download(storage_path('app/public/songs/Pahenlo Batti Muni.zip'));
            
        }else{
            Session::flash('status','You have already used the code. If there was probelm downloading contact us at pahenlobattimuni@gmail.com along with your code');
           return redirect()->route('album.download');
        }
    }
    
}

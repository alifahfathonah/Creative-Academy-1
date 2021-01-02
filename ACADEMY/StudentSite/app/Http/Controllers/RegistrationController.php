<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Model\PaymentGuideModel;
use  App\Model\StudentListModel;
use SoapClient;
class RegistrationController extends Controller
{
    function RegistrationPage(){
        $PaymentGuide=PaymentGuideModel::all();
        return view('Page.registration',['PaymentGuide'=>$PaymentGuide]);
    }

    function onRegister(Request $request){
        $name =$request->input('name');
        $email =$request->input('email');
        $mobile =$request->input('mobile');
        $password=$request->input('password');
        $status="active";

        $CountMobile= StudentListModel::where('phn','=', $mobile)->count();

        if($CountMobile>0 ){
            return "MobileExist";
        }

        else{
            $Result=StudentListModel::insert([
                'name' =>$name ,
                'email' => $email,
                'pass' => $password,
                'phn' => $mobile,
                'status' => $status
            ]);
            if($Result==true){
                try {
                    $soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
                    $paramArray = array('userName' => "01987210026",
                        'userPassword' => "43912",
                        'mobileNumber' => trim($mobile),
                        'smsText' => "Thank you for registering in the Laravel Tutorial Series. You will receive a confirmation SMS shortly. After confirmation your account will be activated and you will be able to login.",
                        'type' => "TEXT"
                    );
                    $value = $soapClient->__call("OneToOne", array($paramArray));
                }
                catch (Exception $e) {

                }
                return 1;
            }
            else{
                return 0;
            }
        }
    }
}

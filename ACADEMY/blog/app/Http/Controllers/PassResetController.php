<?php

namespace App\Http\Controllers;

use App\Model\StudentListModel;
use Illuminate\Http\Request;
use SoapClient;
class PassResetController extends Controller
{
    function onReset(Request $req) {
        $phone= $req->input('mobile');
        $oldPass= $req->input('oldPass');
        $newPass= $req->input('newPass');

        $count= StudentListModel::where('phn','=',$phone)->where('pass','=',$oldPass)->count();

        if($count==0){
            return "AccountNotExist";
        }
        else if($count>0){
            $result=StudentListModel::where('phn','=',$phone)->where('pass','=',$oldPass)->update(['pass'=>$newPass]);
            if($result==true){
                try {
                    $soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
                    $paramArray = array('userName' => "01987210026",
                        'userPassword' => "43912",
                        'mobileNumber' => trim($phone),
                        'smsText' => "From:Rabbil Hasan - Password has been successfully changed for laravel series",
                        'type' => "TEXT"
                    );
                    $value = $soapClient->__call("OneToOne", array($paramArray));
                    return 1;
                }
                catch (Exception $e) {
                    return 0;
                }
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }
    }
}

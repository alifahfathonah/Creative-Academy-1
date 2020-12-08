<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\StudentListModel;
use SoapClient;
class PassRecoverController extends Controller
{
    function onRecover(Request $req) {
        $phone= $req->input('mobile');
        $result= StudentListModel::where(['phn' => $phone])->get();
        $count= StudentListModel::where(['phn' => $phone])->count();
        if($count==0){
            return "AccountNotExist";
        }
        else if($result==true && $count>0){
            $name=$result[0]->name;
            $email=$result[0]->email;
            $password=$result[0]->pass;
            $phone=$result[0]->phn;
            try {
                $soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
                $paramArray = array('userName' => "01987210026",
                    'userPassword' => "43912",
                    'mobileNumber' => trim($phone),
                    'smsText' => "From:Rabbil Hasan-"." Name: ".$name." Email: ".$email." Password: ".$password." Phone: ".$phone,
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

}

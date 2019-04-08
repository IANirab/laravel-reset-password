<?php

namespace nirab\resetpassword\Models;

use Illuminate\Database\Eloquent\Model;
use nirab\resetpassword\Mail\resetPassword;
use App\User;

class UserResetPassword extends Model
{
    public function SendMail($email)
    {

    	$user = User::where('email',$email)->first();

    	if ($user == null) {
    		$msgError = config('resetpassword.msgError');
    		return $msgError;
    	} else {
    		$newPass = rand(100000,999999);
    		$password = bcrypt($newPass);
    		$changePass = User::where('email',$email)->update(['password'=>$password]);
    		\Mail::to($email)->send(new resetPassword($newPass));
    		$msgSuccess = config('resetpassword.msgSuccess');
    		return $msgSuccess;
    	}

    }
}

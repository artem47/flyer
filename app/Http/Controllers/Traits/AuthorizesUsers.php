<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use App\Flyer;

trait AuthorizesUsers{

    protected function userCreatedFlyer(Request $request){

        return Flyer::where([
            'zip'     => $request->zip,
            'street'  => $request->street,
            'user_id' => $this->user->id
        ])->exists();
    }

    protected function unauthorized(Request $request){
    if($request->ajax()){
    return response(['message'=>'No Way!'], 403);
    }

    flash('No Way');

    return redirect('/');
    }
}


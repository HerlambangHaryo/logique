<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FormfrontController extends Controller
{
    //
    
    public function post(Request $request)
    {       
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

            $FLASH_MESSAGE = 1;

            $DMHA_1         = $request->p;
            $DMHA_271       = $request->t;
            $PARAM_2        = $request->p2;
            $PARAM_3        = $request->p3;
            $ID             = $request->di;
            $AUTH_ID        = $request->a;
            
            //////////////////////////////////////////////////////////////////////////////////////////// Mind Suhu
                if($DMHA_1 == 457) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; user_create_me($request->all()); }
                }
        // ------------------------------------------------------------------------- SEND
            Session::flash('message',$FLASH_MESSAGE);
            return redirect(rules_link_after_post($DMHA_1,null,$PARAM_2,$PARAM_3,$DMHA_271));
    }
}

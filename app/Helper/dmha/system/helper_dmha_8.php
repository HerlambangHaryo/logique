<?php

    use App\Models\system\dmha_8;

    function dmha_8_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_nama_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::nama_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_what_is_my_app_mode()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::what_is_my_app_mode();

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_what_is_my_app_mode_id()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::what_is_my_app_mode_id();

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_is_it_dev_mode()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $temp    = dmha_8::is_it_dev_mode();

            if($temp == 1){
                $isi = ' Development';
            }
            elseif($temp == 2){
                $isi = ' Demo';
            }
            elseif($temp == 3){
                $isi = '';
            }
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(5).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Active', $class_th).'
                    '.th_me('Mode', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 	
    }  
    

    function dmha_8_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_8_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_8_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_8::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
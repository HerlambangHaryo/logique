<?php

	use App\Models\system\dmha_15;

    function dmha_15_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_15_let_me_generate_data_array($AUTH_ID,$PARAM_ID,$TIPE,$agent_name)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::let_me_generate_data_array($AUTH_ID,$PARAM_ID,$TIPE,$agent_name);
            

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_15_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(3).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}
    
    function dmha_15_generate_daftar_pertanyaan($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::let_me_generate_data_array($AUTH_ID,$ID,'default',null);            

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_15_generate_daftar_pertanyaan_form_wizard($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::let_me_generate_data_array($AUTH_ID,$ID,'form_wizard',null);            

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_15_create_me($dmha_1,$dmha_13,$urutan,$urutan_tabel,$urutan_tabel_mobile)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::create_me($dmha_1,$dmha_13,$urutan,$urutan_tabel,$urutan_tabel_mobile);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_15_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_15_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_15::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
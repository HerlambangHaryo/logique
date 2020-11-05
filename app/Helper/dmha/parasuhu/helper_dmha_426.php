<?php

	use App\Models\parasuhu\dmha_426;

    function dmha_426_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_426::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_426_let_me_generate_data_array($AUTH_ID,$PARAM_ID,$STATUS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_426::let_me_generate_data_array($AUTH_ID,$PARAM_ID,$STATUS);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_426_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(24).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama Panggung', $class_th).'
                    '.th_me('Nama Lengkap', $class_th).'
                    '.th_me('Tanggal Lahir', $class_th).'
                    '.th_me('Gender', $class_th).'
                    '.th_me('Email', $class_th).'
                    '.th_me('Nomor HP WA', $class_th).'
                    '.th_me('Kota Domisili', $class_th).'
                    '.th_me('Negara', $class_th).'

                    '.th_me('Visi', $class_th).'
                    '.th_me('Misi', $class_th).'
                    '.th_me('Target', $class_th).'
                    
                    '.th_me('Profesi', $class_th).'
                    '.th_me('Kompetensi', $class_th).'
                    '.th_me('Pengajaran', $class_th).'
                    '.th_me('Pengalaman', $class_th).'
                    '.th_me('Audiens', $class_th).'
                    '.th_me('Video', $class_th).'

                    
                    '.th_me('Facebook', $class_th).'
                    '.th_me('Instagram', $class_th).'
                    '.th_me('Linked in', $class_th).'
                    '.th_me('Twitter', $class_th).'
                    '.th_me('Youtube', $class_th).'


                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}

    function dmha_435_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(10).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama Panggung', $class_th).'
                    '.th_me('Nama Lengkap', $class_th).'
                    '.th_me('Tanggal Lahir', $class_th).'
                    '.th_me('Gender', $class_th).'
                    '.th_me('Email', $class_th).'
                    '.th_me('No. Telp WA', $class_th).'
                    '.th_me('Kota', $class_th).'
                    '.th_me('Negara', $class_th).'

                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_436_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(6).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama Panggung', $class_th).'

                    '.th_me('Visi', $class_th).'
                    '.th_me('Misi', $class_th).'
                    '.th_me('Target', $class_th).'

                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_437_data_table()
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
                    '.th_me('Nama Panggung', $class_th).'
                    
                    '.th_me('Profesi', $class_th).'
                    '.th_me('Kompetensi', $class_th).'

                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_438_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(12).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama Panggung', $class_th).'

                    '.th_me('Pengajaran', $class_th).'
                    '.th_me('Pengalaman', $class_th).'
                    '.th_me('Audiens', $class_th).'
                    '.th_me('Video', $class_th).'
                    
                    '.th_me('Facebook', $class_th).'
                    '.th_me('Instagram', $class_th).'
                    '.th_me('Linked in', $class_th).'
                    '.th_me('Twitter', $class_th).'
                    '.th_me('Youtube', $class_th).'

                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_426_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_426::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_426_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_426::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_426_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_426::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    

    function dmha_426_let_me_generate_data_pdf($AUTH_ID,$PARAM_ID,$STATUS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $model    = dmha_426_let_me_generate_data_array($AUTH_ID,$PARAM_ID,$STATUS);


            foreach ($model as $row) 
            {
                $isi .= '
                <div class="widget-card widget-card-rounded m-b-20" data-id="widget">
                    <div class="widget-card-cover">
                        test
                    </div>
                    <div class="widget-card-content">
                        <h5 class="f-s-12" >
                            <b>
                                MAKING A DIFFERENCE
                            </b>
                        </h5>
                        <h4 class="m-b-10">
                            <b>
                            
                            </b>
                        </h4>
                        
                        <div class="row">
                            <div class="col-md-2">
                                Visi :
                            </div>
                            <div class="col-md-10">
                                '.$row->visi.'
                            </div>
                        </div>

                    </div>
                    <div class="widget-card-content bottom">
                        <b class="text-black-transparent-7" data-id="widget-elm" data-light-class="f-s-12 text-black-transparent-7" data-dark-class="f-s-12 text-white-transparent-7">
                            Opt in and help heart research.
                        </b>
                    </div>
                </div>
                ';
            }


        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
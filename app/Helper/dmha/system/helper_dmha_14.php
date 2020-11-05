<?php

    use App\Models\system\dmha_14;

    function dmha_14_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_let_me_generate_data_array($AUTH_ID,$PARAM_ID,$STATUS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::let_me_generate_data_array($AUTH_ID,$PARAM_ID,$STATUS);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_data_table()
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
    
    function dmha_14_generate_value_checked($VALUE,$DMHA_1,$ID,$name)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $COL = '';

            $hasil = ' checked="checked" ';

            $id_termasuk_id_check_col = array(1);

        // ------------------------------------------------------------------------- ACTION        
            if (in_array($DMHA_1, $id_termasuk_id_check_col)) {
                if($DMHA_1 == 1) { $COL = dmha_1_id_check_col($ID,$name); }  

                if($VALUE == $COL) { $isi .= $hasil; }
            }


            else {                 
                if($DMHA_1 == 162) { $COL = dmha_162_id_check($ID,$name);}  
                elseif($DMHA_1 == 157) { $COL = dmha_157_id_check($ID,$name); }  

                if($COL == 1) { $isi .= $hasil; }
            }
            

            $isi .= '('.$ID.'-'.$name.'-'.$VALUE.'-'.$COL.'-'.$DMHA_1.')';
            //$isi .= '('.$VALUE.'-'.$COL.')';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_type($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID,$PLACEHOLDER,$REQUIRED,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = ''; 
            $val_required    = ''; 
            $is_foreach = true;

            if($REQUIRED == 1)
            {
               // $val_required = 'required';
            }
            else
            {
                $ATTR = '';
            }

        // ------------------------------------------------------------------------- ACTION
            if($dmha_14 == 1) { $isi .= dmha_14_generate_input_text($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$val_required,$ATTR,$ADDITIONAL_CLASS); }  
            elseif($dmha_14 == 2) { $isi .= dmha_14_generate_input_number($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 3) { $isi .= dmha_14_generate_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 4) { $isi .= dmha_14_generate_radio_horizontal($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 5) { $isi .= dmha_14_generate_input_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 6) { $isi .= dmha_14_generate_switcher($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 7) { $isi .= dmha_14_generate_checkboxes($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 8) { $isi .= dmha_14_generate_input_text_disabled($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }  
            elseif($dmha_14 == 9) { $isi .= dmha_14_generate_multi_text($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); } 
            elseif($dmha_14 == 10) { $isi .= dmha_14_generate_textarea($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER); } 
            elseif($dmha_14 == 11) { $isi .= dmha_14_generate_masked($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); } 
            elseif($dmha_14 == 12) { $isi .= dmha_14_generate_file_upload($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); } 
            elseif($dmha_14 == 14) { $isi .= dmha_14_generate_autocomplete_masked($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); }
            elseif($dmha_14 == 15) { $isi .= dmha_14_generate_autocomplete($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID); } 
            // elseif($dmha_14 == 16) { $isi .= dmha_14_generate_autocomplete_nop($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID); } OFF
            elseif($dmha_14 == 18) { $isi .= dmha_14_generate_camera($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID); } 
            elseif($dmha_14 == 19) { $isi .= dmha_14_generate_locate_by_mapbox($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID); } 
            elseif($dmha_14 == 21) { $isi .= dmha_14_generate_input_number_centimeter($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID); } 
            elseif($dmha_14 == 22) { $isi .= dmha_14_generate_input_date($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$val_required,$ATTR,$ADDITIONAL_CLASS); }  
            elseif($dmha_14 == 23) { $isi .= dmha_14_generate_textarea_double($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$val_required,$ATTR,$ADDITIONAL_CLASS); } 
            elseif($dmha_14 == 24) { $isi .= dmha_14_generate_input_grup_tahun($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$val_required,$ATTR,$ADDITIONAL_CLASS); } 
            elseif($dmha_14 == 25) { $isi .= dmha_14_generate_input_grup_audiens($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$val_required,$ATTR,$ADDITIONAL_CLASS); } 
            elseif($dmha_14 == 26) { $isi .= dmha_14_generate_input_grup_video($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$val_required,$ATTR,$ADDITIONAL_CLASS); }  
            elseif($dmha_14 == 27) { $isi .= dmha_14_generate_select_name($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$val_required); }  
            elseif($dmha_14 == 28) { $isi .= dmha_14_generate_radio_vertical_nama($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$val_required,$ATTR,$ADDITIONAL_CLASS); }  
            elseif($dmha_14 == 29) { $isi .= dmha_14_generate_input_password($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$val_required,$ATTR,$ADDITIONAL_CLASS); }  

            else{ $isi .= dmha_40_id_check_col(5,'nama').' - '.$dmha_14; }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_hidden($class,$name,$value)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            
            $check = dmha_8_is_it_dev_mode();

            if($check != ' Development')
            {
                $type = 'hidden';
            }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="'.$type.'" class="'.$class.'"  name="'.$name.'"  value="'.$value.'"  >';       

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_text_disabled($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
                 
            $disabled = 'disabled';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_input_text($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$placeholder,$required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' '.$ADDITIONAL_CLASS.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" placeholder="'.$placeholder.'"  '.$required.' '.$ATTR.'  '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    

    function dmha_14_generate_input_password($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$placeholder,$required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="password" class="'.$class.' '.$ADDITIONAL_CLASS.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" placeholder="'.$placeholder.'"  '.$required.' '.$ATTR.'  '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    function dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_271 == 3 || $DMHA_271 == 4)
            {
                ///////////////////////////////////////////////////////////////////////////////// System
                    if($DMHA_1 == 1) { $isi .= dmha_1_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 2) { $isi .= dmha_2_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 3) { $isi .= dmha_3_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 4) { $isi .= dmha_4_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 5) { $isi .= dmha_5_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 8) { $isi .= dmha_8_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 9) { $isi .= DMHA_271_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 13) { $isi .= dmha_13_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 14) { $isi .= dmha_14_id_check_col($ID,$name);  }  
                    // elseif($DMHA_1 == 15) { $isi .= dmha_15_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 15) { 
                        $isi .= dmha_15_id_check_col($ID,$name);  
                        //$isi .= $ID;  
                        //$isi .= $name;  
                        //$isi .= $DMHA_271;  
                    }  

                    elseif($DMHA_1 == 40) { $isi .= dmha_40_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 122) { $isi .= dmha_122_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 271) { $isi .= dmha_271_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 322) { $isi .= dmha_322_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 326) { $isi .= dmha_326_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 322) { $isi .= dmha_322_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 158) { $isi .= user_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 431) { $isi .= dmha_431_id_check_col($ID,$name);  }  

                ///////////////////////////////////////////////////////////////////////////////// acadion
                    elseif($DMHA_1 == 111) { $isi .= dmha_111_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 171) { $isi .= dmha_171_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 335) { $isi .= dmha_335_id_check_col($ID,$name);  }  

                ///////////////////////////////////////////////////////////////////////////////// notarion
                    elseif($DMHA_1 == 55) { $isi .= dmha_55_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 60) { $isi .= dmha_60_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 185) { $isi .= dmha_185_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 255) { $isi .= dmha_255_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 259) { $isi .= dmha_259_id_check_col($ID,$name);  }  

                ///////////////////////////////////////////////////////////////////////////////// scientist
                    elseif($DMHA_1 == 287) { $isi .= dmha_287_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 288) { $isi .= dmha_288_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 292) { $isi .= dmha_292_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 296) { $isi .= dmha_296_id_check_col($ID,$name);  }  
                ///////////////////////////////////////////////////////////////////////////////// Penelitian
                    elseif($DMHA_1 == 344) { $isi .= dmha_344_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 348) { $isi .= dmha_348_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 352) { $isi .= dmha_352_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 356) { $isi .= dmha_356_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 364) { $isi .= dmha_364_id_check_col($ID,$name);  }  
                ///////////////////////////////////////////////////////////////////////////////// Data Pendukung
                    elseif($DMHA_1 == 372) { $isi .= dmha_372_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 382) { $isi .= dmha_382_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 386) { $isi .= dmha_386_id_check_col($ID,$name);  }  
                    elseif($DMHA_1 == 395) { $isi .= dmha_395_id_check_col($ID,$name);  }  
                    
                ///////////////////////////////////////////////////////////////////////////////// Mind Suhu
                    elseif($DMHA_1 == 426) { $isi .= dmha_426_id_check_col($ID,$name);  }  

                else{ $isi .= dmha_40_id_check_col(6,'nama'); }
                
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_number($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$AUTH_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
                <select class="'.$class.'"  id="form-'.$dmha_13.'"  name="'.$name.'"  '.$disabled.' >';

                ////////////////////////////////////////////////////////////////////////////////////////////// SYSTEM  
                    if($dmha_13 == 3) { $isi_model = dmha_14_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 8) { $isi_model = dmha_2_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 8) { $isi_model = dmha_2_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 9) { $isi_model = dmha_3_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 10) { $isi_model = dmha_4_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 12) { $isi_model = dmha_9_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 14) { $isi_model = dmha_1_let_me_generate_data_array(null,null,'select'); }
                    elseif($dmha_13 == 44) { $isi_model = dmha_300_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 18) { $isi_model = dmha_144_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 22) { $isi_model = dmha_9_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 23) { $isi_model = dmha_9_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 24) { $isi_model = dmha_73_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 25) { $isi_model = dmha_126_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 26) { $isi_model = dmha_130_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 27) { $isi_model = dmha_134_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 28) { $isi_model = dmha_138_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 33) { $isi_model = dmha_122_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 49) { $isi_model = dmha_322_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 60) { $isi_model = dmha_271_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 78) { $isi_model = dmha_360_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 103) { $isi_model = dmha_8_let_me_generate_data_array(null,null,null); }
                
                ////////////////////////////////////////////////////////////////////////////////////////////// ACADION                    
                    elseif($dmha_13 == 46) { $isi_model = dmha_171_let_me_generate_data_array($AUTH_ID,null); }        
                    elseif($dmha_13 == 76) { $isi_model = dmha_193_let_me_generate_data_array(null,null,null); }     
                    elseif($dmha_13 == 77) { $isi_model = dmha_336_let_me_generate_data_array(null,null,null); }

                ////////////////////////////////////////////////////////////////////////////////////////////// NOTARION                  
                    elseif($dmha_13 == 71) { $isi_model = dmha_279_let_me_generate_data_array(null,null,null); }    

                ////////////////////////////////////////////////////////////////////////////////////////////// Scientist
                    elseif($dmha_13 == 35) { $isi_model = dmha_292_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 36) { $isi_model = dmha_296_let_me_generate_data_array(null,null,null); }

                ////////////////////////////////////////////////////////////////////////////////////////////// Penelitian
                    elseif($dmha_13 == 82) { $isi_model = dmha_356_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 85) { $isi_model = dmha_364_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 86) { $isi_model = dmha_372_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 89) { $isi_model = dmha_390_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 90) { $isi_model = dmha_386_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 94) { $isi_model = dmha_382_let_me_generate_data_array(null,null,null); }
                    elseif($dmha_13 == 97) { $isi_model = dmha_352_let_me_generate_data_array(null,null,null); }

                ////////////////////////////////////////////////////////////////////////////////////////////// Data Pendukung
                    elseif($dmha_13 == 93) { $isi_model = dmha_395_let_me_generate_data_array(null,null,null); }

                $isi .= '<option value="">Pilihan '.dmha_13_id_check_col($dmha_13,'nama').'</option>';

                foreach ($isi_model as $row) { $isi .= '<option value="'.$row->id.'" 
                    '.dmha_14_generate_value_selected($row->id,dmha_14_generate_value(3,$DMHA_1,$ID,$name)).'>'.$row->nama.'</option>'; }

            $isi .= '
                </select>'; 
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    
    function dmha_14_generate_select_name($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$val_required)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
                <select class="'.$class.'"  id="form-'.$dmha_13.'"  name="'.$name.'" '.$val_required.' '.$disabled.' >';

                ////////////////////////////////////////////////////////////////////////////////////////////// Data Pendukung
                   if($dmha_13 == 125) { $isi_model = dmha_452_let_me_generate_data_array(null,null,null); }
                   elseif($dmha_13 == 140) { $isi_model = dmha_452_let_me_generate_data_array(null,null,null); } // membership

                $isi .= '<option value="">Pilihan '.dmha_13_id_check_col($dmha_13,'nama').'</option>';

                foreach ($isi_model as $row) { $isi .= '<option value="'.$row->nama.'" 
                    '.dmha_14_generate_value_selected($row->id,dmha_14_generate_value(3,$DMHA_1,$ID,$name)).'>'.$row->nama.'</option>'; }

            $isi .= '
                </select>'; 
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_date($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$val_required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="date" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" '.$ATTR.' '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    function dmha_14_generate_value_selected($ROW_ID,$VALUE)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION            
            if($ROW_ID == $VALUE)
            {
                $isi .= 'selected';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_value_checked_checked($ROW_ID,$VALUE)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION            
            if($ROW_ID == $VALUE)
            {
                $isi .= ' checked="checked" ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_radio_horizontal($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

            if($dmha_13 == 11) { $isi_model = dmha_5_let_me_generate_data_array(null,null,null); }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '            
            <div class="row">';
            foreach ($isi_model as $row) {
            $isi .= '            
            <div class="col-md-3">
                <div class="radio radio-css radio-inline col-md-1">
                    <input type="radio" name="'.$name.'" id="form'.$dmha_13.$row->id.'" value="'.$row->id.'"
                    '.dmha_14_generate_value_checked_checked($row->id,dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name)).' >
                    <label for="form'.$dmha_13.$row->id.'"><i class="'.$row->fa.' fa-2x"></i> '.$row->nama.' </label>
                </div>
            </div>';
            }
            $isi .= '            
            </div>';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_radio_vertical($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" '.dmha_14_generate_value($dmha_14,$name,$DMHA_1,$DMHA_271,$ID).' '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_radio_vertical_nama($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$val_required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

            if($dmha_13 == 125) { $isi_model = dmha_452_let_me_generate_data_array(null,null,null); }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '            
            <div class="row">';
            foreach ($isi_model as $row) {
            $isi .= '            
            <div class="col-md-3">
                <div class="radio radio-css">
                    <input type="radio" name="'.$name.'" id="form'.$dmha_13.$row->id.'" value="'.$row->nama.'"
                    '.dmha_14_generate_value_checked_checked($row->id,dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name)).' '.$ATTR.' >
                    <label for="form'.$dmha_13.$row->id.'"><i class="'.$row->fa.' fa-2x"></i> '.$row->nama.' </label>
                </div>
            </div>';
            }
            $isi .= '            
            </div>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_switcher($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
                <div class="switcher">
                    <input type="checkbox" name='.$name.' id="form-'.$ID.'" 
                    '.dmha_14_generate_value_checked_checked(1,dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name)).' value="1">
                    <label for="form-'.$ID.'"></label>
                </div>
            ';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_checkboxes($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION        
            if($dmha_13 == 30) { 
                $isi_model = dmha_1_let_me_generate_data_array(null,null,'level1'); 
            }
            elseif($dmha_13 == 48) { 
                $isi_model = dmha_1_let_me_generate_data_array(null,null,'pertanyaan_hak_akss_app_mode'); 
            }
            elseif($dmha_13 == 101) { 
                $isi_model = dmha_122_let_me_generate_data_array(null,null,null); 
            }
            
            if($dmha_13 == 101)
            {
                foreach ($isi_model as $row) 
                {
                    $isi .= dmha_14_generate_checkboxes_field($row->id,$name,$row->nama,$DMHA_1,$ID);
                }
            }
            else
            {
                foreach ($isi_model as $row) {
                    $isi .= dmha_14_generate_checkboxes_field($row->id,$name,$row->nama,$DMHA_1,$ID);
                    
                    $isi_model2 = dmha_1_let_me_generate_data_array(null,$row->id,'level2'); 

                    foreach ($isi_model2 as $row2) {
                        $isi .= dmha_14_generate_checkboxes_field($row2->id,$name,'&nbsp; &nbsp; '.$row2->nama,$DMHA_1,$ID);
                        
                        $isi_model3 = dmha_1_let_me_generate_data_array(null,$row2->id,'level2'); 
                        
                        foreach ($isi_model3 as $row3) {
                            $isi .= dmha_14_generate_checkboxes_field($row3->id,$name,'&nbsp; &nbsp; &nbsp; &nbsp; '.$row3->nama,$DMHA_1,$ID);
                            
                            $isi_model4 = dmha_1_let_me_generate_data_array(null,$row3->id,'level2'); 

                            foreach ($isi_model4 as $row4) {
                                $isi .= dmha_14_generate_checkboxes_field($row4->id,$name,'&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '.$row4->nama,$DMHA_1,$ID);
                            }
                        }
                    }
                }
            }


            // $isi = count($isi_model);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }   
    
    function dmha_14_generate_checkboxes_field($row_id,$name,$label,$DMHA_1,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi .= '
            <div class="checkbox checkbox-css">
                <input type="checkbox" id="form-'.$row_id.'" value="'.$row_id.'"  name="'.$name.'[]" '.dmha_14_generate_value_checked($row_id,$DMHA_1,$ID,$row_id).' >
                <label for="form-'.$row_id.'">';
                $isi .= $label;
                // $isi .= '-'.$row_id.'-'.$DMHA_1.'-'.$ID.'-'.$row_id;


                $isi .= '</label>
            </div>
            ';     

            /*
            $isi .= '
                
            <tr>
            <td>
                '.$label.'
            </td>
            <td>
                '.$row_id.'
            </td>
            <td>
                '.dmha_1_id_check_col($row_id,'dmha_1').'
            </td>
            <td>
                '.dmha_1_id_check_col(dmha_1_id_check_col($row_id,'dmha_1'),'nama').'
            </td>
            </tr>
            ';
            */
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
   
    function dmha_14_generate_multi_text($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

            if($dmha_13 == 34) { $isi_model = dmha_13_let_me_generate_data_array(null,null,'default'); }

        // ------------------------------------------------------------------------- ACTION
                $isi .= '<div class="row m-b-5">';
                $isi .= '<label class="col-md-2 col-form-label text-center">';
                $isi .= 'Form';    
                $isi .= '</label>';
                $isi .= '<label class="col-md-2 col-form-label text-center">';
                $isi .= 'Tabel';     
                $isi .= '</label>';
                $isi .= '<label class="col-md-2 col-form-label text-center">';
                $isi .= 'Mobile';     
                $isi .= '</label>';

                $isi .= '</div>';
            foreach ($isi_model as $row) {
                $isi .= '<div class="row m-b-5">';

                // urutan_tabel
                    $isi .= '<div class="col-md-2">';
                        $isi .= '<input type="text" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'[]" 
                        value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID.'#'.$row->id,'urutan').'" '.$disabled.'>';      
                    $isi .= '</div>';

                // dmha_13
                    $isi .= '<div class="col-md-2 display-none">';
                        $isi .= '<input type="text" class="'.$class.'" id="form-dmha_13-'.$dmha_13.'" name="dmha_13[]"  value="'.$row->id.'" '.$disabled.'>';      
                    $isi .= '</div>';

                // urutan_tabel
                    $isi .= '<div class="col-md-2">';
                        $isi .= '<input type="text" class="'.$class.'" id="form-urutan_tabel-'.$dmha_13.'" name="urutan_tabel[]"  value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID.'#'.$row->id,'urutan_tabel').'" '.$disabled.'>';      
                    $isi .= '</div>';

                // 	urutan_tabel_mobile
                    $isi .= '<div class="col-md-2">';
                        $isi .= '<input type="text" class="'.$class.'" id="form-urutan_tabel_mobile-'.$dmha_13.'" name="urutan_tabel_mobile[]"  value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID.'#'.$row->id,'urutan_tabel_mobile').'" '.$disabled.'>';      
                    $isi .= '</div>';

                // Label Nama
                    $isi .= '<label class="col-md-4 col-form-label">';
                        $isi .= $row->nama;     
                    $isi .= '</label>';

                // Label name
                    $isi .= '<label class="col-md-2 col-form-label">';
                        //$isi .= $row->name;  
                        $isi .= $DMHA_271.'-'.$DMHA_1.'-'.$ID.'-'.$row->id;
                    $isi .= '</label>';

                $isi .= '</div>';
            }
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 	
    }
    
    function dmha_14_generate_textarea($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
            <textarea class="'.$class.'" rows="3" id="form-'.$dmha_13.'" name="'.$name.'" placeholder="'.$PLACEHOLDER.'" >'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'</textarea>';
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_textarea_double($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$PLACEHOLDER,$required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
            <textarea class="'.$class.'" rows="6" id="form-'.$dmha_13.'" name="'.$name.'" placeholder="'.$PLACEHOLDER.'"  '.$required.' '.$ATTR.'  >'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'</textarea>';
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_file_upload($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="file"  name="'.$name.'" '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_autocomplete($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' autocomplete autocomplete_'.replace_to_underscore($name).'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" >
            <div class="list-autocomplete-'.replace_to_underscore($name).'"></div>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_masked($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' masked-'.replace_to_underscore($name).'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_autocomplete_masked($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' autocomplete-'.replace_to_underscore($name).' masked-'.replace_to_underscore($name).'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" >
            <div class="list-autocomplete-'.replace_to_underscore($name).'"></div>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    
    function dmha_14_generate_camera($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="file"  name="'.$name.'" accept="image/*;capture=camera"   '.$disabled.' >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_locate_by_mapbox($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<div id="map"></div>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    
    function dmha_14_generate_input_number_centimeter($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<div class="input-group m-b-10">';
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" '.$disabled.'>';      

            $isi .= '
                <div class="input-group-append"><span class="input-group-text">cm</div>
            </div>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_input_grup_tahun($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$placeholder,$required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<div class="input-group m-b-10">';
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" placeholder="'.$placeholder.'"  '.$required.' '.$ATTR.' '.$disabled.'>'; 
            $isi .= '
                <div class="input-group-append"><span class="input-group-text">Tahun</div>
            </div>';
                 

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_input_grup_audiens($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$placeholder,$required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<div class="input-group m-b-10">';
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" placeholder="'.$placeholder.'"  '.$required.' '.$ATTR.' '.$disabled.'>'; 
            $isi .= '
                <div class="input-group-append"><span class="input-group-text">Audiens</div>
            </div>';
                 

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_input_grup_video($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID,$placeholder,$required,$ATTR,$ADDITIONAL_CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<div class="input-group m-b-10">';
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" placeholder="'.$placeholder.'"  '.$required.' '.$ATTR.' '.$disabled.'>'; 
            $isi .= '
                <div class="input-group-append"><span class="input-group-text">Video</div>
            </div>';
                 

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    /*

    function dmha_14_generate_autocomplete_nik($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' masked-input-nik" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_generate_autocomplete_nop($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' masked-input-nop" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    

    function dmha_14_generate_masked_date($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' masked-input-date" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }


    function dmha_14_generate_masked_rt_rw($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $disabled = '';            
            if($DMHA_271 == 4){ $disabled = 'disabled'; }

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.' masked-input-rt-rw" id="form-'.$dmha_13.'" name="'.$name.'" value="'.dmha_14_generate_value($DMHA_271,$DMHA_1,$ID,$name).'" '.$disabled.'>';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    */
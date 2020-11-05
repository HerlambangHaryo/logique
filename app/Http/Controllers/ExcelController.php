<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bi_jatim\dmha_439;
use Illuminate\Support\Str;

class ExcelController extends Controller
{
    //
    public function temptosql($PARAM)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $model = dmha_451_let_me_generate_data_array(null,null,null);
            $round = TRUE;
            $temp_komoditi1 = '';
        // ------------------------------------------------------------------------- ACTION
            foreach ($model as $row) 
            {
                if($row->bongkar_1 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi1 = $row->Komoditi_1;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_1) )
                        {
                            $temp_komoditi1 = $row->Komoditi_1;
                        }
                    }

                    // $temp_val = dmha_443_nama_check_col_or_create($temp_komoditi1,'id');
                    

                    $trim_temp_komoditi1 = Str::of($temp_komoditi1)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi1,
                        'muat_dmha_447'     => $row->muat_1,
                        'bongkar_dmha_447'     => $row->bongkar_1,
                        'tonase'     => $row->tonase_1,
                        'tanggal'     => $PARAM.'-01-01'
                    ]);
                }

                if($row->bongkar_2 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi2 = $row->Komoditi_2;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_2) )
                        {
                            $temp_komoditi2 = $row->Komoditi_2;
                        }
                    }

                    $trim_temp_komoditi2 = Str::of($temp_komoditi2)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi2,
                        'muat_dmha_447'     => $row->muat_2,
                        'bongkar_dmha_447'     => $row->bongkar_2,
                        'tonase'     => $row->tonase_2,
                        'tanggal'     => $PARAM.'-02-02'
                    ]);
                }

                if($row->bongkar_3 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi3 = $row->Komoditi_3;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_3) )
                        {
                            $temp_komoditi3 = $row->Komoditi_3;
                        }
                    }

                    $trim_temp_komoditi3 = Str::of($temp_komoditi3)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi3,
                        'muat_dmha_447'     => $row->muat_3,
                        'bongkar_dmha_447'     => $row->bongkar_3,
                        'tonase'     => $row->tonase_3,
                        'tanggal'     => $PARAM.'-03-03'
                    ]);
                }

                if($row->bongkar_4 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi4 = $row->Komoditi_4;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_4) )
                        {
                            $temp_komoditi4 = $row->Komoditi_4;
                        }
                    }

                    $trim_temp_komoditi4 = Str::of($temp_komoditi4)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi4,
                        'muat_dmha_447'     => $row->muat_4,
                        'bongkar_dmha_447'     => $row->bongkar_4,
                        'tonase'     => $row->tonase_4,
                        'tanggal'     => $PARAM.'-04-04'
                    ]);
                }

                if($row->bongkar_5 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi5 = $row->Komoditi_5;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_5) )
                        {
                            $temp_komoditi5 = $row->Komoditi_5;
                        }
                    }

                    $trim_temp_komoditi5 = Str::of($temp_komoditi5)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi5,
                        'muat_dmha_447'     => $row->muat_5,
                        'bongkar_dmha_447'     => $row->bongkar_5,
                        'tonase'     => $row->tonase_5,
                        'tanggal'     => $PARAM.'-05-05'
                    ]);
                }
                
                if($row->bongkar_6 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi6 = $row->Komoditi_6;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_6) )
                        {
                            $temp_komoditi6 = $row->Komoditi_6;
                        }
                    }

                    $trim_temp_komoditi6 = Str::of($temp_komoditi6)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi6,
                        'muat_dmha_447'     => $row->muat_6,
                        'bongkar_dmha_447'     => $row->bongkar_6,
                        'tonase'     => $row->tonase_6,
                        'tanggal'     => $PARAM.'-06-06'
                    ]);
                }
                
                if($row->bongkar_7 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi7 = $row->Komoditi_7;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_7) )
                        {
                            $temp_komoditi7 = $row->Komoditi_7;
                        }
                    }

                    $trim_temp_komoditi7 = Str::of($temp_komoditi7)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi7,
                        'muat_dmha_447'     => $row->muat_7,
                        'bongkar_dmha_447'     => $row->bongkar_7,
                        'tonase'     => $row->tonase_7,
                        'tanggal'     => $PARAM.'-07-07'
                    ]);
                }

                if($row->bongkar_8 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi8 = $row->Komoditi_8;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_8) )
                        {
                            $temp_komoditi8 = $row->Komoditi_8;
                        }
                    }

                    $trim_temp_komoditi8 = Str::of($temp_komoditi8)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi8,
                        'muat_dmha_447'     => $row->muat_8,
                        'bongkar_dmha_447'     => $row->bongkar_8,
                        'tonase'     => $row->tonase_8,
                        'tanggal'     => $PARAM.'-08-08'
                    ]);
                }

                if($row->bongkar_9 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi9 = $row->Komoditi_9;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_9) )
                        {
                            $temp_komoditi9 = $row->Komoditi_9;
                        }
                    }

                    $trim_temp_komoditi9 = Str::of($temp_komoditi9)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi9,
                        'muat_dmha_447'     => $row->muat_9,
                        'bongkar_dmha_447'     => $row->bongkar_9,
                        'tonase'     => $row->tonase_9,
                        'tanggal'     => $PARAM.'-09-09'
                    ]);
                }

                if($row->bongkar_10 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi10 = $row->Komoditi_10;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_10) )
                        {
                            $temp_komoditi10 = $row->Komoditi_10;
                        }
                    }

                    $trim_temp_komoditi10 = Str::of($temp_komoditi10)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi10,
                        'muat_dmha_447'     => $row->muat_10,
                        'bongkar_dmha_447'     => $row->bongkar_10,
                        'tonase'     => $row->tonase_10,
                        'tanggal'     => $PARAM.'-10-10'
                    ]);
                }

                if($row->bongkar_11 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi11 = $row->Komoditi_11;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_11) )
                        {
                            $temp_komoditi11 = $row->Komoditi_11;
                        }
                    }

                    $trim_temp_komoditi11 = Str::of($temp_komoditi11)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi11,
                        'muat_dmha_447'     => $row->muat_11,
                        'bongkar_dmha_447'     => $row->bongkar_11,
                        'tonase'     => $row->tonase_11,
                        'tanggal'     => $PARAM.'-11-11'
                    ]);
                }

                if($row->bongkar_12 != '')
                {
                    if($round == TRUE)
                    {
                        $temp_komoditi12 = $row->Komoditi_12;
                    }
                    else
                    {
                        if(!is_null($row->Komoditi_12) )
                        {
                            $temp_komoditi12 = $row->Komoditi_12;
                        }
                    }

                    $trim_temp_komoditi12 = Str::of($temp_komoditi12)->trim();

                    dmha_439::insert(
                    [
                        'dmha_443'     => $trim_temp_komoditi12,
                        'muat_dmha_447'     => $row->muat_12,
                        'bongkar_dmha_447'     => $row->bongkar_12,
                        'tonase'     => $row->tonase_12,
                        'tanggal'     => $PARAM.'-12-12'
                    ]);
                }

                $round = FALSE;
            }
        // ------------------------------------------------------------------------- SEND
            
            return redirect('Data_Data_Komoditi_Pelabuhan_Tanjung_Perak');
        ////////////////////////////////////////////////////////////////////////////
    }
}

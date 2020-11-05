<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $name
 * @property int $dmha_14
 * @property string $panjang
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_13 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_13';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'name', 'placeholder',  'dmha_14','panjang', 'required',  'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_13::where('id','=',$ID)
                ->whereNull('deleted_at')
                ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_generate_data_array($AUTH_ID,$ID,$TIPE)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            

            if($TIPE == 'default')
            {
                $isi = dmha_13::whereNull('deleted_at')
                    ->orderBy('nama','asc')
                    ->get();
            }
            elseif($TIPE == 'joined')
            {

                $isi = dmha_13::selectRaw('
                    dmha_13.id,
                    dmha_13.nama,
                    dmha_13.name,
                    dmha_13.placeholder,
                    dmha_14.nama as dmha_14,
                    dmha_13.panjang,
                    dmha_13.required
                    ')
                    ->join('dmha_14', 'dmha_14.id', '=', 'dmha_13.dmha_14')                    
                    ->orderBy('dmha_13.id','desc');
            }
            elseif($TIPE == 'data_table')
            {
                $isi = dmha_13::whereNull('deleted_at')
                    ->orderBy('nama','asc');
            }
    
        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_13::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';
            $required = 0;

            if(isset($array_data['required']))
            {
                $required = 1;
            }

        // ------------------------------------------------------------------------- ACTION
            dmha_13::where('id','=', $id)
                ->update(
                    [
                        'nama'     => $array_data['nama'],
                        'name'     => $array_data['name'],
                        'placeholder'     => $array_data['placeholder'],
                        'dmha_14'     => $array_data['dmha_14'],
                        'panjang'     => $array_data['panjang'],
                        'required'     => $required,
                    'updated_at'     => now()
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_13::where('id','=', $id)
            ->update(
                [
                    'deleted_at' => now()
                ]);


        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_13::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}

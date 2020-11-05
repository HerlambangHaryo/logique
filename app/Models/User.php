<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name',
        'term_condition',
        'address',
        'date_birth',
        'gender',
        'membership',
        'cc_number',
        'cc_type',
        'cc_expiry_date_date',
        'cc_expiry_date_year'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = user::where('id','=',$ID)
                ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_generate_data_array($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';
            $dmha_8 = dmha_8_what_is_my_app_mode_id();

        // ------------------------------------------------------------------------- ACTION
                $isi = user::
                    selectRaw('
                        users.id,
                        users.name,
                        users.email,
                        dmha_122.nama as dmha_122
                    ')
                ->join('dmha_122', 'dmha_122.id', '=', 'users.dmha_122')    
                ->join('dmha_8', 'dmha_8.id', '=', 'dmha_122.dmha_8')   

                ->where('dmha_122.dmha_8','=',$dmha_8)
                ->orWhere('users.dmha_122','=',2)

                ->orderBy('users.id','desc')
                ->get();

                
                $isi2 = user::
                    selectRaw('
                        users.id,
                        users.name,
                        users.email,
                        dmha_122.nama as dmha_122
                    ')
                ->join('dmha_122', 'dmha_122.id', '=', 'users.dmha_122')  

                ->orWhere('users.dmha_122','=',2)

                ->orderBy('users.id','desc');

        // ------------------------------------------------------------------------- SEND
            $words = $isi->merge($isi2)->all();
            //$words = $isi2;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            //user::create($array_data);

            user::insert(
                [
                    'name'     => $array_data['name'],
                    'email'     => $array_data['email'],
                    'password'     => bcrypt($array_data['password']),
                    'last_name'     => $array_data['last_name'],
                    'term_condition'     => $array_data['term_condition'],
                    'address'     => $array_data['address'],
                    'date_birth'     => $array_data['date_birth'],
                    'gender'     => $array_data['jenis_kelamin'],
                    'membership'     => $array_data['membership'],
                    'cc_number'     => $array_data['cc_number'],
                    'cc_type'     => $array_data['cc_type'],
                    'cc_expiry_date_date'     => $array_data['cc_expiry_date_date'],
                    //'cc_expiry_date_year'     => $array_data['cc_expiry_date_year']
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            user::where('id','=', $id)
            ->update(
                [
                    'dmha_122'     => $array_data['dmha_122']
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            user::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}

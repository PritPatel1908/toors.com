<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'gender',
        'email',
        'phone_no',
        'password',
        'address',
        'pincode',
        'city',
        'state',
        'country',
        'role',
        'profile_pic',
        'is_active',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function user_profile_pic_get()
    {
        if ($this->role == 1) {
            if ($this->profile_pic != '') {
                return '<img src="'.asset($this->profile_pic).'" alt="'.$this->first_name.' '.$this->last_name.'" class="rounded-circle" height="150" width="150">';
            }
            else {
                return '<img src="'.asset('assets/Admin/img/avatars/avatar.jpg').'" rounded-circle" height="150" width="150" alt="'.$this->first_name.' '.$this->last_name.'" />';
            }
        }
    }

    public function admin_profile_pic_get()
    {
        if ($this->role == 0) {
            if ($this->profile_pic != '') {
                return '<img src="'.asset($this->profile_pic).'" class="avatar img-fluid rounded me-1" alt="'.$this->first_name.' '.$this->last_name.'" />';
            }
            else {
                return '<img src="'.asset('assets/Admin/img/avatars/avatar.jpg').'" class="avatar img-fluid rounded meme-1" alt="'.$this->first_name.' '.$this->last_name.'" />';
            }
        }
    }
}

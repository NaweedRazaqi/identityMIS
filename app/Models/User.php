<?php

namespace App\Models;

use App\Models\candidate;
use App\Models\profile_Id;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function scopeFilter($query, array $filters){

        $name = $filters['name'] ?? false;
        $email = $filters['email'] ?? false;
        //dd($filters['tag']);
        // if($filters['tag'] ?? false){
        //     $query->where('tags','like','%' . request('tag'). '%');
        // }

        $query->when($name, function ($query, $name) {
            $query
                ->where('name', 'like', '%' . $name . '%');
            });

            $query->when($email, function ($query, $email) {
                $query
                    ->where('email', 'like', '%' . $email . '%');
                });
                // ->orwhere('description', 'like', '%' . $search . '%');
}
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relations with profils

    public function candidates(){
    return $this->hasMany(candidate::class, 'createdBy');
    }
}

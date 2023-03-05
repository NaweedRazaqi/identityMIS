<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;


    protected $fillable = [
        'firstname',
        'firstnameEn',
        'lastname',
        'lastnameEn',
        'fathername',
        'fathernameEn',
        'grandfathername',
        'grandfathernameEn',
        'placeofbirthID',
        'martialstatusID',
        'martialstatusIDEn',
        'dateofbirth',
        'genderID',
        'genderIDEn',
        'hight',
        'eyecolor',
        'eyecolor',
        'eyecolorEn',
        'skincolor',
        'skincolorEn',
        'otherIdent',
        'otherIdentEn',
        'photopath',
        'currentID',
        'currentIDEn',
        'reasonfornoID',
        'reasonfornoIDEn',
        'createdBy',
    ];


    public function scopeFilter($query, array $filters){

        $firstname = $filters['firstname'] ?? false;
        $lastname = $filters['lastname'] ?? false;
        $firstnamEn = $filters['fristnameEn'] ?? false;
        $lastnameEn = $filters['lastnameEn'] ?? false;

        $query->when($firstname, function ($query, $firstname) {
            $query
                ->where('firstname', 'like', '%' . $firstname . '%');
            });

            $query->when($lastname, function ($query, $lastname) {
                $query
                    ->where('lastname', 'like', '%' . $lastname . '%');
                });
            $query->when($firstnamEn, function ($query, $firstnamEn) {
                $query
                    ->where('firstnamEn', 'like', '%' . $firstnamEn . '%');
                });
            $query->when($lastnameEn, function ($query, $lastnameEn) {
                $query
                    ->where('lastnameEn', 'like', '%' . $lastnameEn . '%');
                });
                // ->orwhere('description', 'like', '%' . $search . '%');
}

public function user(){
    return $this->belongsTo(User::class,'createdBy');
}
}

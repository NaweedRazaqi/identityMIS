<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class candidate extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public function scopeFilter($query, array $filters){
        $firstname = $filters['firstname'] ?? false;
        $lastname = $filters['lastname'] ?? false;
        $firstnameEn = $filters['firstnameEn'] ?? false;
        $lastnameEn = $filters['lastnameEn'] ?? false;
        $code = $filters['code'] ?? false;
        $code = $filters['code'] ?? false;

        //dd($filters['tag']);
        // if($filters['tag'] ?? false){
        //     $query->where('tags','like','%' . request('tag'). '%');
        // }

        $query->when($firstname, function ($query, $firstname) {
            $query
                ->where('firstname', 'like', '%' . $firstname . '%');
            });

            $query->when($lastname, function ($query, $lastname) {
                $query
                    ->where('lastname', 'like', '%' . $lastname . '%');
                });
            $query->when($firstnameEn, function ($query, $firstnameEn) {
                $query
                    ->where('firstnameEn', 'like', '%' . $firstnameEn . '%');
                });
            $query->when($lastnameEn, function ($query, $lastnameEn) {
                $query
                    ->where('lastnameEn', 'like', '%' . $lastnameEn . '%');
                });
            $query->when($code, function ($query, $code) {
                $query
                    ->where('code', 'like', '%' . $code . '%');
                });
}
}

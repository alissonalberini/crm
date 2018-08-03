<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    protected $fillable =
        [
            'name',
            'email1',
            'email2',
            'phone1',
            'phone2',
            'source',
            'obs'
        ];
}

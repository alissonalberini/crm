<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imobile extends Model
{
    protected $fillable =
        [
            'name',
            'value',
            'public_place',
            'number',
            'zip_code',
            'neighborhood',
            'state_id',
            'city_id',
            'region_id',
            'complement',
            'count_bedroom',
            'count_wc',
            'count_convenient',
            'useful_area',
            'total_area',
            'type',
        ];
    
    public function citie(){
        return $this->belongsTo('App\Models\City');
    }    
    
    public function regiao(){
        return $this->belongsTo('App\Models\Region');
    }
    
    public function state(){
        return $this->belongsTo('App\Models\State');
    }
    
    public function documents()
    {
        return $this->hasMany(Document::class, 'imobile_id', 'id');
    }

}

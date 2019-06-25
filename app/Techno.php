<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techno extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'technos';

    public $timestamps = false;

    public function technoType()
    {
        return $this->belongsTo('App\TechnoType', 'techno_type_id');
    }
}

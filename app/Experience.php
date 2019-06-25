<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'experiences';

    public $timestamps = false;

    public function experienceType()
    {
        return $this->belongsTo('App\ExperienceType', 'experience_type_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id');
    }
}

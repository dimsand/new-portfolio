<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'experience_types';

    public $timestamps = false;

    const TYPE_PRO = 1;
    const TYPE_FORMATION = 2;

}

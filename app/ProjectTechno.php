<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTechno extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project_technos';

    /**
     * The projects that belong to the project_techno.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
}

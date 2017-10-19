<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The categories that belong to the project.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'project_categories');
    }

    /**
     * The technos that belong to the project.
     */
    public function technos()
    {
        return $this->belongsToMany('App\Techno');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}

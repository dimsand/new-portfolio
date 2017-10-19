<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The projects that belong to the project_category.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
}

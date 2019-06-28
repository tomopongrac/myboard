<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];

    /**
     * Project has a path.
     *
     * @return string
     */
    public function path()
    {
        return '/projects/'.$this->id;
    }
}

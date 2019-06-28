<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id'];

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

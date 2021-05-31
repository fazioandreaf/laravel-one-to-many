<?php

namespace App;
use App\Task;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[

        'firstname',
        'lastname',
        'ral',
    ];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}

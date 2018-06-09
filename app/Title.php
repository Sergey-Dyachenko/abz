<?php

namespace App;
use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    public function employees()
    {
        return $this->hasMany(Employee::class, 'id', 'title_id');
    }
}

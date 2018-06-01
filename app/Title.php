<?php

namespace App;
use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}

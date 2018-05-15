<?php

namespace App;
use App\Title;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function titles()
    {
        return $this->hasOne(Title::class);
    }
}

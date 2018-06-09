<?php

namespace App;
use App\Title;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}

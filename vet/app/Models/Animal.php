<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "type",
        "date_of_birth",
        "Weight",
        "Height",
        "Biteyness",
        "owner_id",
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function dangerous()
    {
        return $this->Biteyness > 3;
    }
}

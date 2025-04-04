<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forge extends Model
{
    protected $fillable = ['name', 'description'];

    /** @use HasFactory<\Database\Factories\ForgeFactory> */
    use HasFactory;

    public int    $id;
    public string $name;
    public string $description;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public int $id;
    public string $name;
    public string $description;
}

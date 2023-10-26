<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    const NAME = [
        "アジア" => 1,
        "アフリカ" => 2,
        "ヨーロッパ" => 3,
        "北アメリカ" => 4,
        "南アメリカ" => 5,
        "オセアニア" => 6,
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Car';
    protected $primaryKey = 'Id';

    protected $fillable = [
        'RegNumber',
        'Vin',
        'Model',
        'Brand',
    ];
    // Долго пытался но не смог разобраться как с помощью мутатора сделать так,
    // что бы работать в клиентском коде с ключами нижним регистром
    /*
    protected function vin(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value) {
                return $this->getAttribute('Vin');
            },
        );
    }
    */
}

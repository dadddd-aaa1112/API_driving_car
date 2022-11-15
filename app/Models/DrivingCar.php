<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'car_id',
        'status'
    ];

    public function cars() {
        return $this->belongsTo(Car::class,  'car_id','id');
    }

    public function clients() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function statuses() {
        return $this->belongsTo(Status::class, 'status', 'id');
    }
}

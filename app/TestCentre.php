<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestCentre extends Model
{
    protected $table = 'test_centre';
    protected $fillable = ['name','status','address'];


    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function Test()
    {
        return $this->hasMany(Test::class);
    }

    public function TestKit()
    {
        return $this->hasMany(TestKit::class);
    }
}

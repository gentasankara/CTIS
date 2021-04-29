<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test_data';
    protected $fillable = ['user_id','tester_id','patient_type','symptoms','result','status','test_centre_id'];
    protected $attributes = [
        'status' => "Pending",
    ];
    public function TestCentre()
    {
        return $this->belongsTo(TestCentre::class);
    }
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}

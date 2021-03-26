<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestKit extends Model
{
    protected $table = 'test_kit';
    protected $fillable = ['kitName','stock','test_centre_id'];

    public function TestCentre()
    {
        return $this->belongsTo(TestCentre::class);
    }
}

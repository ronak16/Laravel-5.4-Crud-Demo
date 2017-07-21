<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'interviews';

    public function peoplename()
    {
        return $this->belongsTo('App\People','people');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Choice extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    /* ------------------------------------------------- */
    //      ACCESSORS/MUTATORS
    /* ------------------------------------------------- */
    public function getEncryptedChoiceNumberAttribute()
    {
        return Crypt::encrypt($this->choice_number);
    }
}

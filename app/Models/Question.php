<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function choices()
    {
        return $this->hasMany(Choice::class)
            ->whereNot('choices.content', '')
            ->orWhereNull('choices.content');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}

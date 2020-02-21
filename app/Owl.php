<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owl extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'teacher_id',
        'is_resit',
        'version_number',
        'comments'
    ];

    /**
     * The validator rules
     *
     * @var array
     */
    public static $rules = [
        'name'           => 'required|max:255',
        'teacher_id'     => 'required|integer|exists:teachers,id',
        'is_resit'       => 'required|boolean',
        'version_number' => 'numeric',
        'comments'       => 'required'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}

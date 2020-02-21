<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    /**
     * Checks if this teacher's subject_position is a real subject. Some subject/positions like 'grounds keeper' or 'librarian'
     * do not have classes associated. This means, when the teacher is absent, no classes are dismissed and the name of the
     * teacher should not appear on the list of absent teachers.
     */
    public function givesSubject()
    {
        // the array of real subjects
        $real_subjects = [
            'Flying',
            'Care of Magical Creatures',
            'Defence Against the Dark Arts',
            'Transfiguration',
            'Muggle Studies',
            'Astronomy',
            'Potions',
            'Herbology',
            'Divination',
            'Arithmancy'
        ];
        // Check if the subject_position of this teacher is in the array of real_subjects
        return in_array($this->subject_position, $real_subjects);
    }

    public function owls()
    {
        return $this->hasMany(Owl::class);
    }
}

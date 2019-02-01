<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $table = 'projects';
    
    public function getDurationAsString() {
    
        $years = floor($this->month/12);
        $months = $this->month%12;
        if (($years >= 1) && ($months != 0)) {
        return "Time invested: $years years $months months";
        } else if ((($years >= 1) && ($months == 0))) {
        return "Time invested: $years year(s)";
        } else {
        return "Time invested: $months months";
        }
    }
}
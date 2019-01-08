<?php

namespace App\Models;

class Project extends BaseElement implements Printable {
    
    public function getDurationAsString() {
    
        $years = floor($this->month/12);
        $months = $this->month%12;
        if (($years >= 1) && ($months != 0)) {
        return "Time invested: $years years $months months <br>";
        } else if ((($years >= 1) && ($months == 0))) {
        return "Time invested: $years year(s) <br>";
        } else {
        return "Time invested: $months months <br>";
        }
    }

    public function getDescription() {
        return $this->description;
    }

}
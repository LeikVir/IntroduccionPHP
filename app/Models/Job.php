<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    protected $table = 'jobs';
   
    public function getDurationAsString() {
    
        $years = floor($this->month/12);
        $months = $this->month%12;
        if (($years >= 1) && ($months != 0)) {
        return "Job duration: $years years $months months <br>";
        } else if ((($years >= 1) && ($months == 0))) {
        return "Job duration: $years year(s) <br>";
        } else {
        return "Job duration: $months months <br>";
        }
    }

    public function getDescription() {
        return $this->description;
    }

}

// public function __construct($title, $description, $month) {
//     $newTitle = 'Job: ' . $title;
//     parent::__construct($newTitle, $description, $month);
// }

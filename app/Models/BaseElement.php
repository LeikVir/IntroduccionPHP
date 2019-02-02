<?php

namespace App\Models;

require_once 'Printable.php';

class BaseElement {
    private $title;
    public $description;
    public $visible = true;
    public $month;
    public $logo;
    
    public function __construct($title, $description, $month, $ruta) {
        $this->setTitle($title); 
        $this->description = $description; 
        $this->month = $month;
        $this->logo = $ruta;

    }

    public function setTitle($t) {
        if($t == '') {
            $this->title = 'N/A';
        }else {
            $this->title = $t;
        }
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getDurationAsString() {
    
        $years = floor($this->month/12);
        $months = $this->month%12;
        if (($years >= 1) && ($months != 0)) {
        return "$years years $months months <br>";
        } else if ((($years >= 1) && ($months == 0))) {
        return "$years years <br>";
        } else {
        return "$months months <br>";
        }
    }

    public function getDescription() {
        return $this->description;
    }

}
<?php

class User {
    public $anun;
    public $azganun;
    protected $andznagrHamar;
    protected $heraxosahamar;
    public $tariq;
    
    public function __construct($anun, $azganun, $andznagrHamar, $heraxosahamar, $tariq) {
        $this->anun = $anun;
        $this->azganun = $azganun;
        $this->andznagrHamar = $andznagrHamar;
        $this->heraxosahamar = $heraxosahamar;
        $this->tariq = $tariq;
    }
    
    public function getAndznagrHamar() {
        return $this->andznagrHamar;
    }
    
    public function getHeraxosahamar() {
        return $this->heraxosahamar;
    }
    
    public function getLrivAnun() {
        return $this->anun . " " . $this->azganun;
    }
}

class Student extends User {
    public $mog;
    public $fakultet;
    public $kurs;
    
    public function __construct($anun, $azganun, $andznagrHamar, $heraxosahamar, $tariq, $mog, $fakultet, $kurs) {
        // Կանչում ենք ծնող կլասի կոնստրուկտորըparent::__construct($anun, $azganun, $andznagrHamar, $heraxosahamar, $tariq);
        
        $this->mog = $mog;
        $this->fakultet = $fakultet;
        $this->kurs = $kurs;
    }
    
    public function getAmboghjakanTvyalner() {
        return [
            'anun' => $this->anun,
            'azganun' => $this->azganun,
            'andznagrHamar' => $this->getAndznagrHamar(),
            'heraxosahamar' => $this->getHeraxosahamar(),
            'tariq' => $this->tariq,
            'mog' => $this->mog,
            'fakultet' => $this->fakultet,
            'kurs' => $this->kurs
        ];
    }
}

?>

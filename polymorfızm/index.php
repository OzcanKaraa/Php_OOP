<?php
class Hayvan {

    private $hayvanSesi;

    public function __construct($ses) {
        $this->hayvanSesi = $ses;

    }

    public function getHayvanSesi() {
        return $this->hayvanSesi;

    }
}

class Inek extends Hayvan {

    public function __construct(){
        parent::__construct("Möö :) ");
    }
}


class Kuzu extends Hayvan {

    public function __construct(){
        parent::__construct("Mee :)");
    }
}
class Inek extends Hayvan {

    public function __construct(){
        parent::__construct("Möö :) ");
    }
}

class Kuzu extends Hayvan {

    public function __construct(){
        parent::__construct("Mee :)");
    }
}

class Ses {
    public function __construct(Hayvan $ses) {
        echo $ses->getHayvanSesi()."<br/>";
    }
}

$inek = new Inek();
$kuzu = new Kuzu();

new Ses($inek); // Möö :)
new Ses($kuzu); // Mee :)
<?php

class tabla{
    public $precio;
    public $anios;

    public function setprecio($precio){
        $this->precio=$precio;
    }

    public function setanios($anios){
        $this->anios=$anios;
    }

    public function getprecio(){
        return $this->precio;
    }

    public function getanios(){
        return $this->anios;
    }

    public function tblcalculo(){
        $pr1 = $this->precio;
        $pr2= 0;
        $dep=$this->precio/$this->anios;
        ?>
        <h2 style="text-align: center;">Calculo de depresiación anual</h2>
        <h4>Precio original: B/.<?php echo $this->precio; ?></h4>
        <h4>Vida util: <?php echo $this->anios; ?></h4>
        <h4>Depresiación Anual: B/. <?php echo $dep; ?></h4>
        <br>
        <table class="table table-info table-striped table-hover table-bordered table-sm table-responsive-sm">
            <tr>
                <th style="text-align: center;">Año</th>
                <th style="text-align: center;">Valor por Año</th>
                <th style="text-align: center;">Valor Recuperado</th>
            </tr>

        <?php
         for($i=0;$i<=$this->anios;$i++){
            echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>
            <th><h3 style='text-align: center;'>" .$pr1  . "</h3></th>
            <th><h3 style='text-align: center;'>". $pr2 ."</h3></th>";
            $pr1 = $pr1-$dep;
            $pr2 = $pr2+$dep;
        
        }
    
    }

}

?>
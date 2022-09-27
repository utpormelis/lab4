<?php
    class empleado {
       private $horas; 
       private $phora; 
    
       public function sethoras($horas){
        $this->horas = $horas;
       }

       public function gethoras(){
        return $this->horas;
       }

       public function setphora($phora){
        $this->phora = $phora;
       }

       public function gethora(){
        return $this->phora;
       }

       public function mostrar(){
        $sbruto=$this->horas * $this->phora;
        $desc=$sbruto*0.2;
        $sneto=$sbruto-$desc;
        return "<h2>Horas trabajadas ".$this->horas.", Salario por hora ".$this->phora."<br> Salario bruto = "
        .$sbruto."<br> Descuento = ".$desc."<br> Salario neto = ".$sneto."</h2>"."<h4><br> el salario neto es de ".$sneto."</h4>";
       }
    }
    ?>
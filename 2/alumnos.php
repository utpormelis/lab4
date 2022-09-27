<?php
    class alumnos{
        private $ninos;
        private $ninas;

        public function setninos($ninos){
            $this->ninos=$ninos; 
        }

        public function setninas($ninas){
            $this->ninas=$ninas;
        }

        public function getninos(){
            return $this->ninos;
        }

        public function getninas(){
            return $this->ninas;
        }

        public function pninos(){
            $suma=$this->ninos+$this->ninas;
            $pninos=($this->ninos/$suma)*100;
            return $pninos;
        }

        public function pninas(){
            $suma=$this->ninos+$this->ninas;
            $pninas=($this->ninas/$suma)*100;
            return $pninas;
        }


    }
    ?>
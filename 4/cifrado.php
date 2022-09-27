<?php

class cifrado{
    private $pass;
    private $salto;

public function setpass($pass){
    $this->pass=$pass;
}

public function getpass(){
    return $this->pass;
}

public function cif(){
    $cif=rand();
    return $cif;
}

public function cif1(){
    $cif1=base64_encode($this->pass)."".rand();
    return $cif1;
}

public function cif2(){
    $cif2=md5($this->pass)."".rand();
    return $cif2;
}

public function cif3(){
    $cif3=sha1($this->pass)."".rand();
return $cif3;
}

public function cif4(){
    $cif4=crc32($this->pass,)."".rand();
    return $cif4;
}

public function cif5(){
    $cif5=crypt($this->pass,'rand()');
    return $cif5;
}

public function cif6(){
    $cif6=hash('sha224',$this->pass)."".rand();
    return $cif6;
}

public function cif7(){
    $cif7=hash('sha512',$this->pass)."".rand();
    return $cif7;
}

public function cif8(){
    $cif8=hash('whirlpool',$this->pass)."".rand();
    return $cif8;
}

public function cif9(){
    $cif9=hash('snefru',$this->pass)."".rand();
    return $cif9;
}

public function cif10(){
    $cif10=hash('haval128,3',$this->pass)."".rand();
    return $cif10;
}

public function cif11(){
    $cif11=hash('haval128,5',$this->pass)."".rand();
    return $cif11;
}

}

?>
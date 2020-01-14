<?php
$banco = new mysqli ("localhost","root","","marina");
class Lista{
    public $string;
    
    public function __construct($qstring){
        $this->string =$qstring ;
    }
    $str = $banco->query($string);
    
    while($item = $str->fetch_assoc()){
     
        foreach ($item as $campo){
         echo " $campo <br /> ";   
        }
    }
    
}
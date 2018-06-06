<?php

class MyYear {
    public $year="";

    public function __construct($year) {
        $this ->  $year = $year
    }

    public function getMyYear() {
        return $this ->  $year
        
    }
   public function isLeap() {
        $this ->  $year
    }
  
    if($year%400==0){
   echo'true'.PHP_EOL;
   }
  
  
    else if($year%100==0){
   echo'false'.PHP_EOL;
   }
   
   
   
    else if ($year%4==0){
    echo'true'.PHP_EOL;
   }
   
    else {
   echo'false'.PHP_EOL;
   }
 }
 
 
  $year = new MyYear(2018);
  isLeap(400);
  var_export($year->isLeap());
?>
  
  

     {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        
        
        {!! Form::label('content', 'tasklist:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Submit') !!}
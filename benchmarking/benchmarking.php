<?php

class TimeCounter
{
    var $startTime;
    var $endTime;
     
    function TimeCounter()
    {
        $this->startTime=0;
        $this->endTime=0;
    }
    function getTimestamp()
    {
        $timeofday = gettimeofday();
        //RETRIEVE SECONDS AND MICROSECONDS (ONE MILLIONTH OF A SECOND)
        //CONVERT MICROSECONDS TO SECONDS AND ADD TO RETRIEVED SECONDS
        //MULTIPLY BY 1000 TO GET MILLISECONDS
         return 1000*($timeofday['sec'] + ($timeofday['usec'] / 1000000));
    }
    function startCounter()
    {
        $this->startTime=$this->getTimestamp();
    }
    function stopCounter()
    {
        $this->endTime=$this->getTimestamp();
    }
    function getElapsedTime()
    {
        //RETURN DIFFERECE IN MILLISECONDS
        return number_format(($this->endTime)-($this->startTime), 2);
    }
}


//INITIALIZE COUNTER CLASS
$counter=new TimeCounter();

//START COUNTER
$counter->startCounter();
 
 
 for($i = 1; $i< 10000; $i++)
 {
 	echo ($i/100)."<br>";
 }
 
//STOP COUNTER
$counter->stopCounter();
 
//OUTPUT RESULT
echo $counter->getElapsedTime();
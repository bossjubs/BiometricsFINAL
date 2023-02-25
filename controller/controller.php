<?php
    require_once '/xampp/htdocs/BiometricsFINAL/model/model.php';
    class Controller {
        static public function ctrShowEmployees(){
            $answer = (new Model)->mdlShowEmployees();
            return $answer;
        }

        static public function ctrGetTime($id,$date,$timeType){
            if ($timeType=="Time in AM"){
                $fromTime = "05:00:00";
                $toTime = "08:45:00";
                $answer = (new Model)->mdlGetTime($id,$date,$fromTime,$toTime,"Time In");
                return $answer;    
            } else if ($timeType=="Time out AM"){
                $fromTime = "08:45:00";
                $toTime = "13:00:00";
                $answer = (new Model)->mdlGetTime($id,$date,$fromTime,$toTime,"Time Out");
                return $answer;    
            }  else if ($timeType=="Time in PM"){
                $fromTime = "13:01:00";
                $toTime = "13:45:00";
                $answer = (new Model)->mdlGetTime($id,$date,$fromTime,$toTime,"Time In");
                return $answer;    
            }  else if ($timeType=="Time out PM"){
                $fromTime = "13:45:00";
                $toTime = "19:00:00";
                $answer = (new Model)->mdlGetTime($id,$date,$fromTime,$toTime,"Time Out");
                return $answer;    
            }
            
        }

        static public function ctrGetLate($time){
           return $answer = (new Model)->mdlGetLate($time);
        }

        static public function ctrGetTotalLate($lateAM, $latePM){
            return $answer = (new Model)->mdlGetTotalLate($lateAM, $latePM);
        }

        static public function ctrGetTimeWorked($timeIn,$timeOut){
            return $answer = (new Model)->mdlGetTimeWorked($timeIn,$timeOut);
        }

        static public function ctrGetTotalHours($timeAM,$timePM){
            return $answer = (new Model)->mdlGetTotalHours($timeAM,$timePM);
        }
    }
?>
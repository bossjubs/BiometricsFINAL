<?php 
    require_once '/xampp/htdocs/biometrics/Biometrics/controller/connection.php';

    class Model {
        static public function mdlShowEmployees(){
            $stmt = (new Connection)->connect()->prepare("SELECT * FROM `biometrics`");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt = null;
        }

        static public function mdlGetTime($id,$date,$fromTime,$toTime,$timeType){
            try {
                if ($timeType == "Time In"){
                    $stmt = (new Connection)->connect()->prepare("select * from biometrics where id = :id and (time_type = :timeType or time_type = 'Late') and time BETWEEN :fromTime and :toTime and date = :date order by time;");
                    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
                    $stmt->bindParam(":date", $date, PDO::PARAM_STR);
                    $stmt->bindParam(":fromTime", $fromTime, PDO::PARAM_STR);
                    $stmt->bindParam(":toTime", $toTime, PDO::PARAM_STR);
                    $stmt->bindParam(":timeType", $timeType, PDO::PARAM_STR);
                } else if ($timeType == "Time Out") {
                    $stmt = (new Connection)->connect()->prepare("select * from biometrics where id = :id and time_type = :timeType and time BETWEEN :fromTime and :toTime and date = :date order by time;");
                    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
                    $stmt->bindParam(":date", $date, PDO::PARAM_STR);
                    $stmt->bindParam(":fromTime", $fromTime, PDO::PARAM_STR);
                    $stmt->bindParam(":toTime", $toTime, PDO::PARAM_STR);
                    $stmt->bindParam(":timeType", $timeType, PDO::PARAM_STR);
                }
                $stmt -> execute();

                try {
                    if ($stmt->rowCount() > 0) {
                        $answer = $stmt -> fetch()[3];
                        return $answer;
                        $stmt = null;
                    } else {
                        return 0;
                    }
                } catch (Exception $e) {
                    echo "oof, something went wrong bruuuh<br>";
                }                    

            }catch (Exception $e) {
                echo "oof, something went wrong<br>";
            }
            
        }

        static public function mdlGetLate($time){
            $timeIn = DateTime::createFromFormat('H:i:s', $time);
            $lateAM1 = DateTime::createFromFormat('H:i:s', '08:31:00');
            $lateAM2 = DateTime::createFromFormat('H:i:s', '08:45:00');
            $latePM1 = DateTime::createFromFormat('H:i:s', '13:31:00');
            $latePM2 = DateTime::createFromFormat('H:i:s', '13:45:00');

            if ($timeIn > $lateAM1 && $timeIn <= $lateAM2){
                $diff = $timeIn->diff($lateAM1);
                $answer = $diff->format('%H:%I:%S');
                return $answer;
            }  else if ($timeIn > $latePM1 && $timeIn <= $latePM2){
                $diff = $timeIn->diff($latePM1);
                $answer = $diff->format('%H:%I:%S');
                return $answer;
            }
            else {
                $answer = '00:00:00';
                return $answer;
            } 
        }

        static public function mdlGetTotalLate($lateAM, $latePM){
            $total = strtotime($lateAM) + strtotime($latePM);
            $answer = date('H:i:s', $total);
            return $answer;
        }

        static public function mdlGetTimeWorked($timeIn, $timeOut){
            $timeIn = DateTime::createFromFormat('H:i:s', $timeIn);
            $timeOut = DateTime::createFromFormat('H:i:s', $timeOut);

            if ($timeIn == '0' || $timeOut == '0'){
                $answer = '00:00:00';
                return $answer;
            } else {    
                $diff = $timeOut->diff($timeIn);
                $answer = $diff->format('%H:%I:%S');
                return $answer;
            }
        }

        static public function mdlGetTotalHours($timeAM, $timePM){
            $total = strtotime($timeAM) + strtotime($timePM);
            $answer = date('H:i:s', $total);
            return $answer;
        }
    }
?>
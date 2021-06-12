<?php

    function avalMedia($id,$con){
        $query = "SELECT aval FROM avalies where tips_id = $id and situation = 1";
        $result  = mysqli_query($con, $query);
        $data = mysqli_fetch_array($result);
        if ($result == mysqli_error($con)|| empty($data)) {
            return 0;
        }else{
            $amo = mysqli_num_rows($result);
            $sum = 0;
            for ($i = 0; $i<$amo; $i++) {
                $sum += $data[$i];
            }
            return $sum/$amo;
        }
    }
?>
<!--php code to enter information into database-->

<?php

include('connection.php');
 $name=$_POST['name'];
 $I1=$_POST['identify1'];
 $I2=$_POST['identify2'];
 $I3=$_POST['identify3'];
 $I4=$_POST['identify4'];
 $I5=$_POST['identify5'];
 $I6=$_POST['identify6'];
 $P1=$_POST['protect1'];
 $P2=$_POST['protect2'];
 $P3=$_POST['protect3'];
 $P4=$_POST['protect4'];
 $P5=$_POST['protect5'];
 $P6=$_POST['protect6'];
 $P7=$_POST['protect7'];
 $P8=$_POST['protect8'];
 $P9=$_POST['protect9'];
 $P10=$_POST['protect10'];
 $P11=$_POST['protect11'];
 $P12=$_POST['protect12'];
 $D1=$_POST['detect1'];
 $D2=$_POST['detect2'];
 $D3=$_POST['detect3'];
 $D4=$_POST['detect4'];
 $D5=$_POST['detect5'];
 $D6=$_POST['detect6'];
 $RS1=$_POST['respond1'];
 $RS2=$_POST['respond2'];
 $RS3=$_POST['respond3'];
 $RS4=$_POST['respond4'];
 $RS5=$_POST['respond5'];
 $RS6=$_POST['respond6'];
 $RC1=$_POST['recover1'];
 $RC2=$_POST['recover2'];
 $RC3=$_POST['recover3'];
 $RC4=$_POST['recover4'];
 $RC5=$_POST['recover5'];



        $sql = "INSERT INTO gapanalysis (name, identify1, identify2, identify3, identify4, identify5, identify6, protect1, protect2, protect3, protect4, protect5, protect6, protect7, protect8, protect9, protect10, protect11, protect12, detect1, detect2, detect3, detect4, detect5, detect6, respond1, respond2, respond3, respond4, respond5, respond6, recover1, recover2, recover3, recover4, recover5) VALUES ('$name', '$I1', '$I2', '$I3', '$I4', '$I5', '$I6', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10', '$P11', '$P12', '$D1', '$D2', '$D3', '$D4', '$D5', '$D6', '$RS1', '$RS2', '$RS3', '$RS4', '$RS5', '$RS6', '$RC1', '$RC2', '$RC3', '$RC4', '$RC5')";
        
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Submitted Successfully.";
            header("Location: gapAnalysisData.php");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: gapAnalysis.html");
        }
   
?>
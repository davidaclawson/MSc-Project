<!--php code to edit database information-->

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

    if(empty($_POST["name"]) || empty($_POST["identify1"]) || empty($_POST["identify2"]) || empty($_POST["identify3"]) || empty($_POST["identify4"] || empty($_POST["identify5"]) || empty($_POST["identify6"]) || empty($_POST["protect1"]) || empty($_POST["protect2"]) || empty($_POST["protect3"]) || empty($_POST["protect4"]) || empty($_POST["protect5"]) || empty($_POST["protect6"]) || empty($_POST["protect7"]) || empty($_POST["protect8"]) || empty($_POST["protect9"]) || empty($_POST["protect10"]) || empty($_POST["protect11"]) || empty($_POST["protect12"]) || empty($_POST["detect1"]) || empty($_POST["detect2"]) || empty($_POST["detect3"]) || empty($_POST["detect4"]) || empty($_POST["detect5"]) || empty($_POST["detect6"]) || empty($_POST["respond1"]) || empty($_POST["respond2"]) || empty($_POST["respond3"]) || empty($_POST["respond4"]) || empty($_POST["respond5"]) || empty($_POST["respond6"]) || empty($_POST["recover1"]) || empty($_POST["recover2"]) || empty($_POST["recover3"]) || empty($_POST["recover4"]) || empty($_POST["recover5"])))
    {
        echo "All fields are required.";
    }
       
    else
    {   
        $sql = "UPDATE gapanalysis set name='$name',identify1='$I1',identify2='$I2',identify3='$I3', identify4='$I4', identify5='$I5', identify6='$I6', protect1='$P1', protect2='$P2', protect3='$P3', protect4='$P4', protect5='$P5', protect6='$P6', protect7='$P7', protect8='$P8', protect9='$P9', protect10='$P10', protect11='$P11',protect12='$P12',  detect1='$D1',  detect2='$D2',  detect3='$D3',  detect4='$D4',  detect5='$D5',  detect6='$D6',  respond1='$RS1',  respond2='$RS2',  respond3='$RS3',  respond4='$RS4',  respond5='$RS5',  respond6='$RS6',  recover1='$RC1',  recover2='$RC2',  recover3='$RC3',  recover4='$RC4',  recover5='$RC5'";

        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Updated Successfully";
            header("Location: index.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: index.html");
        }
    }
   
?>
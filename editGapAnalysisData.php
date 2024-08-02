<!--php code to edit database information-->


<html>
    <body>

        <?php
            include('connection.php');
          
            
            $sql = "SELECT * FROM gapanalysis";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        $row = $result->fetch_assoc();

                        $name = $row['name'];
                        $I1 = $row['identify1'];
                        $I2 = $row['identify2'];
                        $I3 = $row['identify3'];
                        $I4 = $row['identify4'];
                        $I5 = $row['identify5'];
                        $I6 = $row['identify6'];
                        $P1 = $row['protect1'];
                        $P2 = $row['protect2'];
                        $P3 = $row['protect3'];
                        $P4 = $row['protect4'];
                        $P5 = $row['protect5'];
                        $P6 = $row['protect6'];
                        $P7 = $row['protect7'];
                        $P8 = $row['protect8'];
                        $P9 = $row['protect9'];
                        $P10 = $row['protect10'];
                        $P11 = $row['protect11'];
                        $P12 = $row['protect12'];
                        $D1 = $row['detect1'];
                        $D2 = $row['detect2'];
                        $D3 = $row['detect3'];
                        $D4 = $row['detect4'];
                        $D5 = $row['detect5'];
                        $D6 = $row['detect6'];
                        $RS1 = $row['respond1'];
                        $RS2 = $row['respond2'];
                        $RS3 = $row['respond3'];
                        $RS4 = $row['respond4'];
                        $RS5 = $row['respond5'];
                        $RS6 = $row['respond6'];
                        $RC1 = $row['recover1'];
                        $RC2 = $row['recover2'];
                        $RC3 = $row['recover3'];
                        $RC4 = $row['recover4'];
                        $RC5 = $row['recover5'];


                        echo"
                        <html>
                        <body>
                        <form method='post' action='updateGapAnalysis.php'>
                            <label>Name:</label>
                            <input type='text' name='name' value='$name'/><br><br>
                            <label>I1:&nbsp;&nbsp;</label>
                            <input type='text' name='identify1' value='$I1'/> <br><br>
                            <label>I2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='identify2' value='$I2'/> <br><br>
                            <label>I3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='identify3' value='$I3'/> <br><br>
                            <label>I4:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='identify4' value='$I4'/> <br><br>
                            <label>I5:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='identify5' value='$I5'/> <br><br>
                            <label>I6:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='identify6' value='$I6'/> <br><br>
                            <label>P1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect1' value='$P1'/> <br><br>
                            <label>P2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect2' value='$P2'/> <br><br>
                            <label>P3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect3' value='$P3'/> <br><br>
                            <label>P4:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect4' value='$P4'/> <br><br>
                            <label>P5:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect5' value='$P5'/> <br><br>
                            <label>P6:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect6' value='$P6'/> <br><br>
                            <label>P7:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect7' value='$P7'/> <br><br>
                            <label>P8:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect8' value='$P8'/> <br><br>
                            <label>P9:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect9' value='$P9'/> <br><br>
                            <label>P10:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect10' value='$P10'/> <br><br>
                            <label>P11:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect11' value='$P11'/> <br><br>
                            <label>P12:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='protect12' value='$P12'/> <br><br>
                            <label>D1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='detect1' value='$D1'/> <br><br>
                            <label>D2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='detect2' value='$D2'/> <br><br>
                            <label>D3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='detect3' value='$D3'/> <br><br>
                            <label>D4:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='detect4' value='$D4'/> <br><br>
                            <label>D5:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='detect5' value='$D5'/> <br><br>
                            <label>D6:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='detect6' value='$D6'/> <br><br>
                            <label>RS1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='respond1' value='$RS1'/> <br><br>
                            <label>RS2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='respond2' value='$RS2'/> <br><br>
                            <label>RS3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='respond3' value='$RS3'/> <br><br>
                            <label>RS4:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='respond4' value='$RS4'/> <br><br>
                            <label>RS5:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='respond5' value='$RS5'/> <br><br>
                            <label>RS6:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='respond6' value='$RS6'/> <br><br>
                            <label>RC1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='recover1' value='$RC1'/> <br><br>
                            <label>RC2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='recover2' value='$RC2'/> <br><br>
                            <label>RC3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='recover3' value='$RC3'/> <br><br>
                            <label>RC4:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='recover4' value='$RC4'/> <br><br>
                            <label>RC5:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='recover5' value='$RC5'/> <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='submit' name='submit' value='Submit' />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </form>
                        </body></html>";
                    }
                    else 
                    {
                        echo " Gap Analysis Name Not Found ";
                    }
                    
             

            $db->close();
            ?>

</body>
</html>
<!doctype html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>David Lawson MSc Project</title>
        <link rel = "stylesheet" href = "assets/css/style.css">
        <link rel = "stylesheet" href = "assets/css/unsemantic-grid-responsive-tablet.css">
    </head>

    <body>
        <!--Beginning of Header-->
        <header>
            <h1>David Lawson MSc Project</h1>
            <nav>
                <ul style="list-style: none;">
                    <li><a href="index.html"> Home </a></li>
                    <li><a href="casestudies.html"> Case Studies </a></li>
                    <li><a href="findings.html"> Findings </a></li>
                    <li><a href="framework.html"> Hybrid Cybersecurity Framework </a></li>
                    <li><a href="sources.html"> Sources </a></li>
                </ul>
            </nav>
        </header>
        <!--Ending of Header-->

        <!--Beginning of Main & php code to echo databsase entries-->
            <main>
            <h2> Gap Analysis Inputted Data: </h2>
            <?php
            include('connection.php');
            $sql = "SELECT * FROM gapanalysis";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) 
                    
                    {
                        while($row = $result->fetch_assoc()){

                        echo "<p>Name: ".$row["name"]."</p>";
                        echo "<p>I1: ".$row["identify1"]."</p>";
                        echo "<p>I2: ".$row["identify2"]."</p>";
                        echo "<p>I3: ".$row["identify3"]."</p>";
                        echo "<p>I4: ".$row["identify4"]."</p>";
                        echo "<p>I5: ".$row["identify5"]."</p>";
                        echo "<p>I6: ".$row["identify6"]."</p>";
                        echo "<p>P1: ".$row["protect1"]."</p>";
                        echo "<p>P2: ".$row["protect2"]."</p>";
                        echo "<p>P3: ".$row["protect3"]."</p>";
                        echo "<p>P4: ".$row["protect4"]."</p>";
                        echo "<p>P5: ".$row["protect5"]."</p>";
                        echo "<p>P6: ".$row["protect6"]."</p>";
                        echo "<p>P7: ".$row["protect7"]."</p>";
                        echo "<p>P8: ".$row["protect8"]."</p>";
                        echo "<p>P9: ".$row["protect9"]."</p>";
                        echo "<p>P10: ".$row["protect10"]."</p>";
                        echo "<p>P11: ".$row["protect11"]."</p>";
                        echo "<p>P12: ".$row["protect12"]."</p>";
                        echo "<p>D1: ".$row["detect1"]."</p>";
                        echo "<p>D2: ".$row["detect2"]."</p>";
                        echo "<p>D3: ".$row["detect3"]."</p>";
                        echo "<p>D4: ".$row["detect4"]."</p>";
                        echo "<p>D5: ".$row["detect5"]."</p>";
                        echo "<p>D6: ".$row["detect6"]."</p>";
                        echo "<p>RS1: ".$row["respond1"]."</p>";
                        echo "<p>RS2: ".$row["respond2"]."</p>";
                        echo "<p>RS3: ".$row["respond3"]."</p>";
                        echo "<p>RS4: ".$row["respond4"]."</p>";
                        echo "<p>RS5: ".$row["respond5"]."</p>";
                        echo "<p>RS6: ".$row["respond6"]."</p>";
                        echo "<p>RC1: ".$row["recover1"]."</p>";
                        echo "<p>RC2: ".$row["recover2"]."</p>";
                        echo "<p>RC3: ".$row["recover3"]."</p>";
                        echo "<p>RC4: ".$row["recover4"]."</p>";
                        echo "<p>RC5: ".$row["recover5"]."</p>";}
                    }
                    ?>
                


           
                
                    <br>
                    <h3> Please click the following link to edit the gap analysis data: <a href="editGapAnalysis.html"> Edit Gap Analysis</a>.</h3>  
                
              
            
                
                 <br>
                 <h3> For further information on how to become compliant to the framework requisites, please click the following link to access valuable security tools and information: <a href="securityTools.html"> Security Tools </a>.</h3>
                
                      

            
             
                <br>      
                <h3> Please enter the name used to delete the gap analysis data below: </h3>
                <form method="post" action="deleteGapAnalysis.php">
                    <label>Enter Name:</label>
                    <input type="text" name="name" />
                    <br><br>
                    <input type="submit" name="submit" value="Submit to Delete" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </form>
            </body>
            </main>



        <!--Beginning of Footer-->
        <footer>
            <section class = "grid-100">
                <h1>David Lawson MSc Project</h1>
                <nav>
                    <ul style="list-style: none;">
                        <li><a href="index.html"> Home </a></li>
                        <li><a href="casestudies.html"> Case Studies </a></li>
                        <li><a href="findings.html"> Findings </a></li>
                        <li><a href="framework.html"> Hybrid Cybersecurity Framework </a></li>
                        <li><a href="sources.html"> Sources </a></li>
                    </ul>
                </nav>
            
            </section>
                
            <div id = "copyright">
                <p> (c) David Lawson 2024 </p>
            </div>
        </footer>
        <!--Ending of Footer-->
    </body>
</html>
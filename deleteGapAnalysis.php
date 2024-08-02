<!--php code to delete database entries-->


<?php
            include('connection.php');

            $name=$_POST['name'];
           
            $sql = "DELETE FROM gapanalysis WHERE name='$name'" ;
            $result = $db->query($sql);
            header("Location: index.html");
            $db->close();
        ?>
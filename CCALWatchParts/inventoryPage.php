<?php
    //DataBase Info
    $servername = "localhost";
    $dbUserName = "root";
    $dbPWord = "";
    $dbName = "ccal_watch_parts";



    // PartNum works fine.
    function partNum($servername, $dbUserName, $dbPWord, $dbName)
    {
        //Code To connect To the Database
        $conn = new mysqli($servername, $dbUserName, $dbPWord, $dbName);
        if($conn->connect_error)
        {
            die("Connection Failed: ".$conn->connect_error);
        } 

        $sql = "SELECT * FROM inventory";
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo"<br> Part Number: ". $row["PartNumber"]. "<br>";
            }
        }
        $conn->close(); 
    }

    //dispAll function works fine
    function dispAll($servername, $dbUserName, $dbPWord, $dbName)
    {
        $conn = new mysqli($servername, $dbUserName, $dbPWord, $dbName);
        if($conn->connect_error)
        {
            die("Connection Failed: ".$conn->connect_error);
        } 

        $sql = "SELECT * FROM inventory;";
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            echo "<table>";
            //Set Up Table Headers
            echo "<tr><th>Part Number</th> <th>Part Name</th> <th>Repair Cost</th> 
            <th>Quantity</th> <th>Description</th></tr>";
            
            //Code to Actually Print The Stuff From The Database.
            while($row = $result->fetch_assoc())
            {
                echo "<tr><td>" . $row['PartNumber'] . "</td><td> " . $row['PartName'] . "</td>
                <td>" . $row['RepairCost'] . "</td><td>" . $row['Quantity'] . "</td>
                <td>" . $row['Description'] . "</td></tr>"; 
            }

            echo"</table>";
        }
         else
        {
            echo "No Rows Found For Your Query";
        }

        $conn->close();
    }

    function specPartNum($servername, $dbUserName, $dbPWord, $dbName) //To disp Specific Part Number
    {
        /*//Code To connect To the Database
        $conn = new mysqli($servername, $dbUserName, $dbPWord, $dbName);
        if($conn->connect_error)
        {
            die("Connection Failed: ".$conn->connect_error);
        } 

        $sql = "SELECT * FROM inventory";
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo"<br> Part Number: ". $row["PartNumber"]. "<br>";
            }
        }
        $conn->close(); */
        $indPartNum = htmlspecialchars($_POST['searchPartNum']);
        echo $indPartNum;
    }

   specPartNum("localhost", "root", "","ccal_watch_parts");

      /*if(isset($_POST['searchBtn'])) 
   {
        partNum();
   }
   else if (isset($_POST['dispAllBtn']))
   {
       echo "Hello World";
           // dispAll("localhost", "root", "","ccal_watch_parts");
   } */
     
?>

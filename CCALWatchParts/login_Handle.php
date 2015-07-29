<?php
    //Capturing The Variables
    $uName = htmlspecialchars($_POST['userName']);
    $pWord = htmlspecialchars($_POST['userPword']);
    
    $servername = "localhost";
    $dbUserName = "root";
    $dbPWord = "";
    $dbName = "ccal_watch_parts";

    $conn = new mysqli($servername, $dbUserName, $dbPWord, $dbName);

    if($conn->connect_error)
    {
        die("Connection Failed: ".$conn->connect_error);
    }   

    $selectQuery = "SELECT * FROM users WHERE userName LIKE '$uName' AND password LIKE '$pWord'";

    $result = $conn->query($selectQuery);

    if ($result->num_rows == 1) 
    {
        echo "Login Successful <br>";
        while($row = $result->fetch_assoc()) 
        {
            echo "User ID: " . $row["userID"]. "<br>". "User Name: " . $row["userName"]. "<br>". "Password: ". $row["password"].
            "<br>". "Date Of Last Login: ". $row["lastLogins"]. "<br>". "Number Of Logins: ". $row["numOfLogins"]. "<br>";

            echo "<a href=http://localhost/424Project/ConfidentialFile/ConfidentialInfo.txt>Confidential File</a>";
        }
    } 
    else {
        echo "Login Failure Please Check Username and Password";
    }

    $conn->close();

   
    /*
    // Can use this function to generate the hash. 
    $passHash = hash('sha512', $pWord);
  
    //Code to Generate salt Manually. Bear in mind that thre are functions that do that for you. 
    $salt = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
    
    //prepend the salt
    $password = $salt.$passHash;
    
    echo $password; */

    //Connect to Database


    //Code to Add Salt

?>


<?php

?>

<!DOCTYPE html>
<script src="http://localhost/CCALWatchParts/Scripts/newUserFormScript.js"></script> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>New User Sign-UP</title>
    </head>
    <body>
    <!--Need to supress ability to submit form unless form check is ok-->
<form action = "http://localhost/CCALWatchParts/new_User_Handler.php" method= "post">
    <p>New User Registration</p>
    <!--First Name-->
    <div id=" firstName">
        <label for="fName">First Name:</label><br>
        <input type ="text" id="fName" name="userFirstName" required/>
    </div>
    <!--Last Name-->
    <div>
        <label for="lName">Last Name:</label><br>
        <input type ="text" id="lName" name="userLastName"/>
    </div>
    <!-- This is the section for the date of birth test throughly(Implement With Jquery Maybe)-->
    <div>
        <label for="dobDate">Date Of Birth: </label><br>
        <input type="text" id="datepicker"  placeholder="MM/DD/YYYY" name="userDOB" onchange ="dobvalidate(this)" pattern ="^\d{2}/\d{2}/\d{4}$" required />
        <!-- Script For Error Checking Need to move it all to one place for good form-->
    </div>
    <!--User Name-->
    <div>   
        <label for="uName">User Name:</label><br>
        <input type ="text" id="uname" name="userName"  oninput="userValidate(this.value)"/>
        <!--Need to add code to check database to see username isnt taken-->
        <!-- Need to implement Ajax to do this, double check if it is this or this.value-->
        <p id="inputTest"></p>
        <p id="test"></p>
    </div>
    <!--Email-->
    <div>
        <label for="mail">Email Address:</label><br>
        <input type ="email" id="mail" name ="userEmailAddress"/>
    </div>
    <!--Password-->
    <div>
        <label for="pword">Password:</label><br>
        <input type ="password" id="pword" name=" userPassword" onchange="passwordStrength(this)" pattern="^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z].*[a-z]).{6,}$"/><p id="pwordStrength"></p>
    </div>
    <!--Confirm Password-->
    <div>
        <label for="cpword">Confirm Password:</label><br>
        <input type ="password" id="cpword" name="confirmPword" onchange=" confirmPassword(this)"/>
        <p id="test"></p><br>
    </div>
    <!--This is going to be the Secret Question 1(Need To make sure that the answer and the selection are posted)-->
    <!--This posts the value of the selection need some way to in database-->
    <div>
        <label for="sQ1">Secret Question 1:</label><br>
        <select name ="secQues1">
            <option value="1">Where were you when you had your first kiss?</option>
            <option value="2">What was the last name of your third grade teacher?</option>
            <option value="3">Where were you when you had your first alcoholic drink (or cigarette)?</option>
        </select>

        <input type ="text" id="sq1Answer" name="secQues1Answer" />
    </div>
    <!--Secret Question 2-->
    <div>
        <label for="sQ2">Secret Question 2:</label><br>
        <select name ="secQues2">
            <option value="1">Who was your childhood hero? </option>
            <option value="2">What is the name of the hospital you were born?</option>
            <option value="3">What is the name of the first movie you saw in the theater?</option>
        </select>

        <input type ="text" id="sq2Answer" name="secQues2Answer" />
    </div>
</form>
</body>
</html>

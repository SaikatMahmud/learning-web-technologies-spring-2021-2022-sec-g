<?php
require('header.php');
require('../models/userModel.php');
$id = $_GET['id'];
$userName = $_GET['name'];
$user = getUserByID($id);
$user = mysqli_fetch_assoc($user);
//print_r($user);
// $printUpdate="";
// $printUpdate=$_GET['msg'];
?>

<html>

<head>
    <title>Your Profile</title>
</head>

<body>

    <h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
    <a href="home.php?userid=<?= $id ?>&name=<?= $userName ?>"> Back</a>
    <br></br>

    <p align="center"><img src="../assets/<?= $user['IMAGE'] ?>" width="150" height="150"></p>
    <table>
        <tr>
            <td>Name </td>
            <td><input type="text" id="name" name="name" value="<?= $user['NAME'] ?>" onkeyup="checkName()" readonly></td>
            <td id="nameCheck"></td>
        </tr>
        
        <tr>
            <td>Username </td>
            <td> <input type="text" id="username" name="username" value="<?= $user['USERNAME'] ?>" onkeyup="checkUsername()" readonly></td>
            <td id="usernameCheck"></td>
        </tr>
        
        <tr>
            <td>Email </td>
            <td>
                <input type="text" id="email" name="email" value="<?= $user['EMAIL'] ?>" onkeyup="checkEmail()" readonly>
            </td>
            <td id="emailCheck"></td>
        </tr>
       
        <tr>
            <td>Mobile </td>
            <td>
                <input type="text" id="mobile" name="mobile" value="<?= $user['MOBILE'] ?>" onkeyup="checkMobile()" readonly>
            </td>
            <td id="mobileCheck"></td>
        </tr>
        
        <tr>

            <td>DOB </td>
            <td><input type="date" id="dob" name="dob" value="<?= $user['DOB'] ?>" onkeyup="checkDate()" readonly>
            <td>
            <td id="dobCheck"></td>
        </tr>
        

        <!-- <tr>
            <td id="tdGender">Gender: $user['GENDER'] </td>
            <td id="genderRadio" style="visibility:hidden;">
					<input type="radio" name="gender" value="Male" readonly>Male
					<input type="radio" name="gender" value="Female" readonly>Female
					<input type="radio" name="gender" value="Others" readonly>Others
			</td>
        </tr> -->
    </table>
    <div id="msg"></div>
    <br></br>
    <button id="button" onclick="editProfile(<?= $user['ID'] ?>)">Edit Profile</button>
    <br></br>
    <a href="userProfile.php?id=<?= $id ?>&name=<?= $userName ?>">Edit profile (PHP)</a>
    
    <script>

        let btnCount = 0;
        function editProfile(id) {

            document.getElementById('name').readOnly = false;
            document.getElementById('username').readOnly = false;
            document.getElementById('email').readOnly = false;
            document.getElementById('mobile').readOnly = false;
            document.getElementById('dob').readOnly = false;
            document.getElementById('button').innerHTML = "Save";
            document.getElementById('msg').innerHTML = "";
            let name = document.getElementById('name').value;
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let mobile = document.getElementById('mobile').value;
            let dob = document.getElementById('dob').value;
            btnCount++;
            if (btnCount == 2) {
                let xhttp = new XMLHttpRequest();
                xhttp.open("GET", "userProfileJS.php?id=" + id + "&name=" + name + "&username=" + username + "&email=" + email + "&mobile=" + mobile + "&dob=" + dob, true);
                xhttp.send();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if(this.responseText=='done')
                        {
                            document.getElementById('name').readOnly =true;
                            document.getElementById('username').readOnly =true;
                            document.getElementById('email').readOnly =true;
                            document.getElementById('mobile').readOnly =true;
                            document.getElementById('dob').readOnly =true;
                            document.getElementById('button').innerHTML = "Edit Profile";
                            document.getElementById('msg').innerHTML = "Update Operation success";
                            btnCount=0;
                            
                        }
                        else{
                            document.getElementById('msg').innerHTML =this.responseText;
                        }
                    }
                }
            }
        }
    </script>
    <script src="../js/valid.js"></script>
</body>
</html>
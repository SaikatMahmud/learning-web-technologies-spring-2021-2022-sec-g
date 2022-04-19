function checkName() {
    let name = document.getElementById('name').value;
    if ((name.length) <= 0) {
        document.getElementById('nameCheck').innerHTML = "Name can not be empty";
    }
    else
        document.getElementById('nameCheck').innerHTML = "";
}

function checkUsername() {
    let username = document.getElementById('username').value;
    if (username.length < 3) {
        document.getElementById('usernameCheck').innerHTML = "Username must be at least 3 characters";
    }
    else
        document.getElementById('usernameCheck').innerHTML = "";
}

function checkEmail() {
    let email = document.getElementById('email').value;
    if ((email.length) <= 0) {
        document.getElementById('emailCheck').innerHTML = "Email can not be empty";
    }
    else
        document.getElementById('emailCheck').innerHTML = "";
}

function checkMobile() {
    let mobile = document.getElementById('mobile').value;
    if ((mobile.length) < 11 || (mobile.length) > 11) {
        document.getElementById('mobileCheck').innerHTML = "Mob number must be 11 digit";
    }
    else
        document.getElementById('mobileCheck').innerHTML = "";
}

function checkPassword() {
    let password = document.getElementById('password').value;
    if (password.length < 3) {
        document.getElementById('passCheck').innerHTML = "Password must be at least 3 characters";
    }
    else
        document.getElementById('passCheck').innerHTML = "";
}

function checkDate() {
    let dob = document.getElementById('dob').value;
    if ((dob) == null) {
        document.getElementById('dobCheck').innerHTML = "provide a date";
    }
    else {
        document.getElementById('dobCheck').innerHTML = "";

    }
}
function checkGender() {
    let gender1 = document.getElementById('gender1');
    let gender2 = document.getElementById('gender2');
    let gender3 = document.getElementById('gender3');
    if (gender1.checked || gender2.checked || gender3.checked) {
        document.getElementById('genderCheck').innerHTML = "";
    }
    else {
        document.getElementById('genderCheck').innerHTML = "&emsp;Select a gender";

    }
}

let gender;
function btnSignUp() {
    let uname = document.getElementById('name').value
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let mobile = document.getElementById('mobile').value;
    let password = document.getElementById('password').value;
    let dob = document.getElementById('dob').value;
    if (document.getElementById('gender1').checked) {
        gender = document.getElementById('gender1').value;
    }
    if (document.getElementById('gender2').checked) {
        gender = document.getElementById('gender2').value;
    }
    if (document.getElementById('gender3').checked) {
        gender = document.getElementById('gender3').value;
    }
    if (uname.length > 0 && username.length > 2 && email.length > 0 && mobile.length == 11 &&
        password.length > 2 && dob != null & gender != null) {
        signUp();
    }
    else {
        checkName();
        checkUsername();
        checkEmail();
        checkMobile();
        checkPassword();
        checkDate();
        checkGender();
    }


}

function btnLogin() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    if (username.length > 2 && password.length > 2) {
        // const url = '../controllers/loginCheck.php?username=' + username + '&password=' + password;
        // window.location = url;
        login();
    }
    // if (usernamelength < 3 && passwordlength < 3) {
    //     document.getElementById('userError').innerHTML = "Username must be at least 3 characters";
    //     document.getElementById('passError').innerHTML = "Password must be at least 3 characters";
    // }
    // else
    // {
    //     document.getElementById('userError').innerHTML = "";
    //     document.getElementById('passError').innerHTML = "";
    // }
    else {
        checkUsername();
        checkPassword();
    }
}

function login() {

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET", "../controllers/loginCheck.php?username=" + username + "&password=" + password, true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "deactive") {
                document.getElementById('noData').innerHTML = "Your account is deactivated. Contact admin!";
            }
            else if (this.responseText == "notFound") {
                document.getElementById('noData').innerHTML = "Invalid Username or Password";
            }
            else
                window.location = this.responseText;
        }

    }

}

function signUp() {

    let uname = document.getElementById('name').value
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let mobile = document.getElementById('mobile').value;
    let password = document.getElementById('password').value;
    let dob = document.getElementById('dob').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET", "../controllers/addUserCheck.php?name=" + uname +
        "&username=" + username + "&email=" + email + "&mobile=" + mobile + "&password=" + password + "&dob=" + dob + "&gender=" + gender, true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "failed") {
                document.getElementById('failed').innerHTML = "Add user operation failed!";
            }
            else
            {
                window.location = this.responseText;   
            }
        }
    }
}

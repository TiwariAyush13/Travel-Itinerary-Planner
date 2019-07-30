
function fnameCheck() {

    var f = document.getElementById("fname").value;
    var fbox = document.getElementById("fname");
    var alert = document.getElementById("fname-alert");
    alert.style.color = "#ff0000";
    fbox.style.backgroundColor = "#ff0000";
    var reg1 = /[a-zA-Z]+/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    if (reg1.test(f) == false) {
        alert.innerHTML = "invalid firstname";
        return false;
    }

    else if (reg2.test(f)) {
        alert.innerHTML = "firstname has white spaces";
        return false;
    }
    else {
        alert.innerHTML = "firstname valid";
        alert.style.color = "#00FF00";
        fbox.style.backgroundColor = "#00ff00";
        return true;
    }

}

function lnamecheck() {
    var l = document.getElementById("lname").value;
    var alert = document.getElementById("lname-alert");
    var lbox = document.getElementById("lname");
    alert.style.color = "#ff0000";
    lbox.style.backgroundColor = "#ff0000";
    var reg1 = /[a-zA-Z]+/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    var test = true;

    if (reg1.test(l) == false) {
        alert.innerHTML = "invalid lastname";
        return false;
    }

    else if (reg2.test(l)) {
        alert.innerHTML = "firstname has white spaces";
        return false;
    }

    else {
        alert.innerHTML = "lastname valid";
        alert.style.color = "#00FF00";
        lbox.style.backgroundColor = "#00ff00";
        return true;
    }

}

function usercheck() {
    var i = document.getElementById("userid").value;
    var alert = document.getElementById("userid-alert");
    var ubox = document.getElementById("userid");
    alert.style.color = "#FF0000";
    ubox.style.backgroundColor = "#FF0000";
    var reg1 = /\S{3,}/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    var test = true;


    if (reg1.test(i) == false) {
        alert.innerHTML = "userid is too short";
        return false;
    }

    else if (reg2.test(i)) {
        alert.innerHTML = "userid has white spaces";
        return false;
    }

    else {
        alert.innerHTML = "userid valid";
        alert.style.color = "#00FF00";
        ubox.style.backgroundColor = "#00ff00";
        return true;
    }
}

function passcheck() {
    var p = document.getElementById("pass").value;
    var alert = document.getElementById("pass-alert");
    var pbox = document.getElementById("pass");
    alert.style.color = "#FF0000";
    pbox.style.backgroundColor = "#FF0000";
    var reg1 = /\S{3,}/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    var test = true;

    if ((reg1.test(p) && reg3.test(p)) == false) {
        alert.innerHTML = "password is invalid";
        return false;
    }
    else {
        alert.innerHTML = "password valid";
        alert.style.color = "#00FF00";
        pbox.style.backgroundColor = "#00FF00";
        return true;
    }
}

function confirmpasscheck() {
    var p = document.getElementById("pass").value;
    var cp = document.getElementById("c_pass").value;
    var alert = document.getElementById("confirm-pass-alert");
    var cpbox = document.getElementById("c_pass");
    alert.style.color = "#FF0000";
    cpbox.style.backgroundColor = "#FF0000";
    var reg1 = /\S{3,}/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    var test = true;

    if ((p == cp) == false) {
        alert.innerHTML = "password & confirm password are not same";
        return false;
    }
    else {
        alert.innerHTML = "password and confirm password are same";
        alert.style.color = "#00FF00";
        cpbox.style.backgroundColor = "#00FF00";
        return true;
    }
}

function emailcheck() {
    var em = document.getElementById("email").value;
    var embox = document.getElementById("email");
    var alert = document.getElementById("email-alert");
    alert.style.color = "#FF0000";
    embox.style.backgroundColor = "#FF0000";
    var reg1 = /\S{3,}/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /([a-zA-Z]+)([0-9]*)\@[a-zA-Z]+.com/;
    var test = true;

    if (reg4.test(em) == false) {
        alert.innerHTML = "email is not valid";
        return false;
    }
    else {
        alert.innerHTML = "email is valid";
        alert.style.color = "#00FF00";
        embox.style.backgroundColor = "#00FF00";
        return true;
    }

}
function phonecheck() {
    var ph = document.getElementById("phone").value;
    var phbox = document.getElementById("phone");
    var alert = document.getElementById("phone-alert");
    alert.style.color = "#FF0000";
    phbox.style.backgroundColor = "#FF0000";
    var reg1 = /\S{3,}/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    var test = true;
    var reg5 = /^[0-9]{10}$/;
    if (reg5.test(ph) == false) {
        alert.innerHTML = "phone number is not valid";
        return false;
    }
    else {
        alert.innerHTML = "phone number is valid";
        alert.style.color = "#00FF00";
        phbox.style.backgroundColor = "#00FF00";
        return true;
    }
}

function zipcheck() {
    var zip = document.getElementById("zipcode").value;
    var zipbox = document.getElementById("zipcode");
    var alert = document.getElementById("zipcode-alert");
    alert.style.color = "#FF0000";
    zipbox.style.backgroundColor = "#FF0000";
    var reg1 = /\S{3,}/;
    var reg2 = /\S\s+\S/;
    var reg3 = /\W{1,}/;
    var reg4 = /\@{1}/;
    var test = true;
    var reg5 = /^[0-9]{6}$/;

    if (reg5.test(zip) == false) {
        alert.innerHTML = "zipcode invalid";
        return false;
    }
    else {
        alert.innerHTML = "zipcode is valid";
        alert.style.color = "#00FF00";
        zipbox.style.backgroundColor = "#00FF00";
        return true;
    }

}
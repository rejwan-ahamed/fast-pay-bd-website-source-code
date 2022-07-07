// console.warn("hello")
// var r = document.getElementById("send").value
// console.warn(r)

function getvaluse() {
    var r = document.getElementById("send").value
    console.warn(r)

    if (r == "Bkash Personal") {
        document.getElementById("sender-img").src = "./icons/bkash.svg";
    }
    else if (r == "Nagad Personal") {
        document.getElementById("sender-img").src = "./icons/nagad.svg";
    }
    else if (r == "Upay Personal") {
        document.getElementById("sender-img").src = "./icons/upay.svg";
    }
    else if (r == "Payeer") {
        document.getElementById("sender-img").src = "./icons/payeer.svg";
    }
    else if (r == "Payoneer") {
        document.getElementById("sender-img").src = "./icons/payoneer.svg";
    }
    else if (r == "Perfect Money") {
        document.getElementById("sender-img").src = "./icons/perfect.svg";
    }
    else if (r == "Paypal") {
        document.getElementById("sender-img").src = "./icons/paypal.svg";
    }
    else if (r == "AdvCash") {
        document.getElementById("sender-img").src = "./icons/advcash.svg";
    }
}

function getvaluser() {
    var r = document.getElementById("recive").value
    console.warn(r)

    if (r == "Bkash Personal") {
        document.getElementById("reciver-img").src = "./icons/bkash.svg";
    }
    else if (r == "Nagad Personal") {
        document.getElementById("reciver-img").src = "./icons/nagad.svg";
    }
    else if (r == "Upay Personal") {
        document.getElementById("reciver-img").src = "./icons/upay.svg";
    }
    else if (r == "Payeer") {
        document.getElementById("reciver-img").src = "./icons/payeer.svg";
    }
    else if (r == "Payoneer") {
        document.getElementById("reciver-img").src = "./icons/payoneer.svg";
    }
    else if (r == "Perfect Money") {
        document.getElementById("reciver-img").src = "./icons/perfect.svg";
    }
    else if (r == "Paypal") {
        document.getElementById("reciver-img").src = "./icons/paypal.svg";
    }
    else if (r == "AdvCash") {
        document.getElementById("reciver-img").src = "./icons/advcash.svg";
    }
 
}
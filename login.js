function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " respnsive";
    } else {
        i.className = "nav-menu";
    }
}

var box = document.getElementById("box");
var main = document.getElementById("main");
var a = document.getElementById("loginBtn");
var b = document.getElementById("registerBtn");
var x = document.getElementById("login");
var y = document.getElementById("register");

function login() {
    box.classList.remove("hidden");
    main.classList.add("hidden");
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
}

function register() {
    box.classList.remove("hidden");
    main.classList.add("hidden");
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
}

function showhome() {
    box.classList.add("hidden");
    main.classList.remove("hidden");
}
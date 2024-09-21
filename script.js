let next = document.querySelector(".next")
let prev = document.querySelector(".prev")

next.addEventListener("click", function () {
    let items = document.querySelectorAll(".item")
    document.querySelector(".slide").appendChild(items[0])
})

prev.addEventListener("click", function () {
    let items = document.querySelectorAll(".item")
    document.querySelector(".slide").prepend(items[items.length - 1])
})

let registerBtn = document.getElementById("register-btn");
let registerBox = document.getElementById("register");

let logbtn = document.getElementById("log-btn");
let logBox = document.getElementById("log-in");


let slider = document.getElementById("slider");
let navigation = document.getElementById("navigation");

let btncancel = document.getElementById("btncancel");
let home = document.getElementById("main");

logbtn.addEventListener("click", function(){
    if (window.getComputedStyle(logBox).display === "none") {
        logBox.style.display = "block";
        // registerBox.style.display = "none";
        home.style.opacity=0.1;
        logBox.style.zIndex = 999;
        navigation.style.opacity=0.2;
    }
     else {
        logBox.style.display = "none";
    }
});

registerBtn.addEventListener("click",function(){
    if(registerBox.style.display === "none" || registerBox.style.display === ""){
        registerBox.style.display = "block";
        registerBox.style.zIndex = 999;
        home.style.opacity=0.1;
        // home.style.display="none";
        logBox.style.display = "none";
        navigation.style.opacity=0.2;
    }
    else{
        registerBox.style.display = "none";
    }
});

// let btnC = document.querySelectorAll(".btncancel");
// btnC.forEach(function(button){
//     btnC.addEventListener("click", function(){
//         if(home.style.display === "none") {
//             home.style.display = "block";
//             registerBox.style.display = "none";
//             // registerBox.style.zIndex = -1;
//             logBox.style.display = "none";
//             home.style.opacity = 1;
//             navigation.style.opacity = 1;
//             ticketBox.style.display = "none";
//         }
//         else{
//             home.style.display = "block";
//         }
//     });
// })

btncancel.addEventListener("click",function(){
    if(home.style.opacity == "0.1" || home.style.display === ""){
        // if(window.getComputedStyle(home).opacity === "0.1" || home.style.display === ""){
        home.style.display = "block";
        registerBox.style.display = "none";
        // registerBox.style.zIndex = -1;
        logBox.style.display = "none";
        home.style.opacity = 1;
        navigation.style.opacity = 1;
        ticketBox.style.display = "none";
    }
    else{
        home.style.display = "block";
    }
});

let buybtn = document.querySelectorAll(".book-btn");
let ticketBox = document.getElementById("ticket-section");

buybtn.forEach(function(button){    
    button.addEventListener("click",function(){
        // console.log("hello");
        if(ticketBox.style.display === "none" || ticketBox.style.display === ""){
            // button.style.position = "absolute";
            // button.appendChild(ticketBox);
            ticketBox.style.display = "block";
            ticketBox.style.zIndex = 999;
            home.style.opacity=0.1;
            navigation.style.opacity=0.2;
        }
        else{
            ticketBox.style.display = "none";
        }
    });
});

// let bookBtn = document.getElementById("book-btn");
// let ticketBox = document.getElementById("ticket-section");

// bookBtn.addEventListener("click",function(){
//     // console.log("hello");
//     if(ticketBox.style.display === "none" || ticketBox.style.display === ""){
//         ticketBox.style.display = "block";
//         ticketBox.style.zIndex = 999;
//         home.style.opacity=0.1;
//         navigation.style.opacity=0.2;
//     }
//     else{
//         ticketBox.style.display = "none";
//     }
// });


let bookcancel = document.getElementById("book-cancel");
bookcancel.addEventListener("click",function(){
    if(home.style.opacity == "0.1" || home.style.display === ""){
        // if(window.getComputedStyle(home).opacity === "0.1" || home.style.display === ""){
        home.style.display = "block";
        home.style.opacity = 1;
        navigation.style.opacity = 1;
        ticketBox.style.display = "none";
    }
    else{
        home.style.display = "block";
    }
});


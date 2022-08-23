
// Bring Elemnt from html
const navbar = document.querySelector('nav');
const about = document.querySelector('#about');
let myVideo= document.getElementById('myVideo');
let nums = document.querySelectorAll('.milestones h2 span');
let secServ = document.getElementById('services');
let sections = document.querySelectorAll('.section');
let navItem = document.querySelectorAll('.nav-item .custom-links');
const counter = document.querySelectorAll(".counter span");
const circlePrg= document.querySelectorAll(".exper svg circle");

let started = false;
// Video
function playVideo(){
myVideo.play();
}
function stopVideo(){
    myVideo.pause();
}
function OnVideo(){
    if(Math.trunc(window.pageYOffset) < 500 || Math.trunc(window.pageYOffset)>1010){
     stopVideo();
      
    }
    else{
       playVideo();
    }
}
window.addEventListener("scroll", OnVideo);
// Function of navbar whene scroll
function stickyNavbar(){
    navbar.classList.toggle("scrolled",window.pageYOffset >0);
}
window.addEventListener("scroll", stickyNavbar);
// scroll reval
    onscroll = function(){
     // change title in nav
    var scrollPosition = document.documentElement.scrollTop;
    sections.forEach((section)=>{
        if(scrollPosition >= section.offsetTop && scrollPosition<=section.offsetTop + section.offsetHeight){
            var currentId=section.attributes.id.value;
            removeClassActive();
            addClassActive(currentId);
        }else if(scrollPosition == 0){
              removeClassActive();
        }
    })
    }
var removeClassActive = function(){
    navItem.forEach((el)=>{
        if(el.classList.contains("activeNav")){
            el.classList.remove("activeNav");
        }
    })



    if(window.scrollY>=about.offsetTop){
        if(!started){
          counter.forEach(()=> startCount());
          circlePrg.forEach((p)=>{p.style.animation = "progress 1s ease-in-out forwards"});
        }
        started = true;
    }
function updateCount(num,maxNum){
    let currentNumber = +num.innerText;
   
    if(currentNumber<maxNum){
        num.innerText=currentNumber+1;
          setTimeout(()=>{
        updateCount(num,maxNum);
    },50);
    }
}
function startCount(){
counter.forEach((el,i)=>{
let goal = +el.dataset.goal;
let strokeValue= 298-298 * (goal/100);
circlePrg[i].style.setProperty("--target", strokeValue);
    setTimeout(()=>{
        updateCount(el,goal);
    },50);
})}

}
let addClassActive = function(id){
   let sellected = `.nav-item .custom-links[href="#${id}"]` ;
   document.querySelector(sellected).classList.add("activeNav");
}


let sr=ScrollReveal({
duration:2500,
distance:"100px",
});

sr.reveal(".about-video-ar", {origin:"left", delay:100});
sr.reveal(".about-video", {origin:"right", delay:100});
sr.reveal(".servisec-content", {origin:"left", delay:100});
sr.reveal(".servisec-content-ar", {origin:"right", delay:100});

function myFunction1() {
  var dots = document.querySelector(".dots1");
  var moreText = document.querySelector(".more1");
  var btnText = document.querySelector(".read-more1");
  let changeL = document.querySelector(".change-lang a");

var icon = document.getElementById("icon1");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    icon.style.cssText="transform: rotate(0deg);";
    if(changeL.classList.contains("active")){
       btnText.innerHTML = "اقرأ أكثر"; 
       icon.style.cssText="transform: rotate(180deg);   animation:none;";

    }
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
     icon.style.cssText="transform: rotate(180deg);   animation:none;";
      if(changeL.classList.contains("active")){
       btnText.innerHTML = "اقرأ أقل"; 
        icon.style.cssText="transform: rotate(0deg);";
    }
  }
}
function myFunction2() {
  var dots = document.querySelector(".dots2");
  var moreText = document.querySelector(".more2");
  var btnText = document.querySelector(".read-more2");
  let changeL = document.querySelector(".change-lang a");

var icon = document.getElementById("icon2");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    icon.style.cssText="transform: rotate(0deg);";
    if(changeL.classList.contains("active")){
    btnText.innerHTML = "اقرأ أكثر"; 
         icon.style.cssText="transform: rotate(180deg);   animation:none;";

 }
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
     icon.style.cssText="transform: rotate(180deg);   animation:none;";
      if(changeL.classList.contains("active")){
       btnText.innerHTML = "اقرأ أقل"; 
          icon.style.cssText="transform: rotate(0deg);";
    }
  }
}
function myFunction3() {
  var dots = document.querySelector(".dots3");
  var moreText = document.querySelector(".more3");
  var btnText = document.querySelector(".read-more3");
  var icon = document.getElementById("icon3");
  let changeL = document.querySelector(".change-lang a");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    icon.style.cssText="transform: rotate(0deg);";
       if(changeL.classList.contains("active")){
       btnText.innerHTML = "اقرأ أكثر"; 
        icon.style.cssText="transform: rotate(180deg);   animation:none;";
    }
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
     icon.style.cssText="transform: rotate(180deg);   animation:none;";
    if(changeL.classList.contains("active")){
       btnText.innerHTML = "اقرأ أقل"; 
        icon.style.cssText="transform: rotate(0deg);";
    }
    
  }
}

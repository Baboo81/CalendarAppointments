"use strict";

//Animation balls:
const ball = document.getElementById('ball1');
let leftPos = 0;
let dir = -1;

ball.style.position = "absolute";

function ballAnimate () {
    if (leftPos == 300) {
        dir = 1
    } else if 
        (leftPos == -50) {
        dir = -1
    }
    
    leftPos += -2 * dir;
    ball.style.left = `${leftPos}px`;

    requestAnimationFrame(ballAnimate);
};

requestAnimationFrame(ballAnimate);

/////////////////////////////////////////////////////////////////

//Card content collapse:
const togg = document.getElementById('togg');
const togg2 = document.getElementById('togg2');
const content = document.getElementById('cardContent');
const content2 = document.getElementById('cardContent2');


togg.addEventListener("click", () => {
    if(getComputedStyle(content).display != "none") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
});

togg2.addEventListener("click", () => {
    if(getComputedStyle(content2).display != "none") {
        content2.style.display = "none";
    } else {
        content2.style.display = "block";
    }
});


function collapsed () {
    if(getComputedStyle(content).display != "none") {
        content.style.display = "none";
        content2.style.display = "none";
  }
};

collapsed();
//////////////////////////////////////////////////////////////////

//CarouselProduct
let slides = document.querySelectorAll(".carousel-slide");
let currentSlide = 0;

function resetSlides() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
}

function showSlide(n) {
  resetSlides();
  slides[n].style.display = "flex";
}

showSlide(currentSlide);

document.querySelector(".carousel-control-prev").addEventListener("click", function () {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  showSlide(currentSlide);
});

document.querySelector(".carousel-control-next").addEventListener("click", function () {
  currentSlide++;
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
});

///////////////////////////////////////////////////////////////////////////

//Footer map:

//Create map:
 const centroid = [50.709925, 4.352603];
 const map = L.map('mapid').setView(centroid, 16.4);

 //Add tiles & marker:
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
 L.marker([50.709925, 4.352603]).addTo(map);

 /////////////////////////////////////////////////////////////////
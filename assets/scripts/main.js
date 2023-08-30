"use strict";

//Calendrier :

 
//Déplacement des blocs :

const bloc = document.getElementById('subContainer');
let xPos = 0;
let yPos = 0;
let angle = 0;

function animate () {
    //xPos += "300px";
    //xPos -= "300px";
    //angle += .5; 
    //yPos = Math.round(Math.sin(angle));
    yPos = 

    bloc.style.transform = `translate3d(${xPos}, ${yPos}, 0)`;

    requestAnimationFrame(animate);
};

animate();
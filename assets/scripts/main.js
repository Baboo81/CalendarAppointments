"use strict";

let Case = document.getElementsByClassName('case');

let date = new Date();
let year = date.getFullYear();
let month = date.getMonth() + 1;
let day = date.getDate();

const monthName = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];

const UP_MONTH ='upMonth';
const DOWN_MONTH = 'downMonth';

//Fct permettant de diminuer ou d'augmenter l'année en fct du clic avant ou arrière:
function CALENDRIER_REDUCER(action) {
    switch (action) {
        case UP_MONTH :
            if (month < 12) month++
                else {
                    year++
                    month = 1 
                }
                break;
        case DOWN_MONTH :  
            if (month > 0) month--
                else {
                    year--
                    month = 12
                }
                break;
        default:
            break;
    }
}


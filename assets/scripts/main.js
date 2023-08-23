"use strict";

let Cases = document.getElementsByClassName('case');

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
    calendrier(year, month)
}

document.getElementById('avant').onclick = function () {
    CALENDRIER_REDUCER(DOWN_MONTH)
    console.log(month)
}

document.getElementById('apres').onclick = function () {
    CALENDRIER_REDUCER(UP_MONTH)
    console.log(month)
}

function calendrier (year, month) {
    const monthNb = month + 12 * (year - 2020)

    let cld = [{dayStart: 2, length: 31, year: 2020, month: "janvier"}]

    for (let i = 0; i < monthNb - 1; i++) {
        let yearSimule = 2020 + Math.floor(i / 12)
        const monthsSimuleLongueur = [31, getFevrierLength(yearSimule), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31] 
        let monthSimuleIndex = (i + 1) - (yearSimule - 2020) * 12

        cld[i + 1] = {
            dayStart: (cld[i].dayStart + monthsSimuleLongueur[monthSimuleIndex - 1]) % 7,
            length: monthsSimuleLongueur[monthSimuleIndex],
            year: 2020 + Math.floor((i + 1) / 12),
            month: monthName[monthSimuleIndex]
        }

        //Avec cette méthode de calcul, le mois de janvier n'apparait pas alors je fais ceci :
        if (cld[i + 1].month === undefined) {
            cld[i + 1].month = "janvier"
            cld[i + 1].length = 31
        }
    }

    for (let i = 0; i < Cases.length; i++) {
        Cases[i].innerText = "" 
    }

    for (let i = 0; i < cld[cld.length - 1].length; i++) {
        Cases[i + cld[cld.length - 1].dayStart].innerText = i + 1
    }

    document.getElementById('cldT').innerText = cld[cld.length - 1].month.toLocaleUpperCase() + " " + cld[cld.length - 1].year
}
calendrier(year, month);

//Fct si année bissextile : 
function getFevrierLength(year) {
    if (year % 4 === 0) return 29
        else return 28
    }
 

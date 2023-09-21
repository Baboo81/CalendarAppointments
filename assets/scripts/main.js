"use strict";

var randomMovement = function() {
    return anime.random(-20, 20) + 'rem'
};

var randomSpeed = function() {
  return anime.random(1000, 5000) + 'rem'  
};

$(document).ready(function(){
    var timelineParameters = anime.timeline({
        loop: true
    });

    timelineParameters
    .add({
        targets: '#dandelion1',
        translateX: [ { value: randomMovement  }, { value: randomMovement }, { value: randomMovement } ],
        translateY: [ { value: -200  }, { value: -400 }, { value: -600 } ],
        opacity: [ {value: 0.5 }, { value: 0 }],
        easing: 'linear',
        duration: randomSpeed
    })
    .add({
        targets: '#dandelion2',
        translateX: [ { value: randomMovement }, { value: randomMovement }, { value: randomMovement } ],
        translateY: [ { value: -200 }, { value: -400 }, { value: -600 } ],
        opacity: [ { value: 0.8 }, { value: 0 }],
        easing: 'linear',
        duration: randomSpeed,
        offset: 100
    })
    .add({
        targets: '#dandelion3',
        translateX: [ { value: randomMovement }, { value: randomMovement }, { value: randomMovement } ],
        translateY: [ { value: -200 }, { value: -400 }, { value: -600 } ],
        opacity: [ { value: 0.3 }, { value: 0 }],
        easing: 'linear',
        duration: randomSpeed,
        offset: 0
    })
});

/*var myman = document.getElementById('main'),
myPower = document.getElementById('power');
function im(){
    'use strict';
    document.getElementById("monster1").style.display='none';
    document.getElementById('monster2').style.display = 'none';
}
myPower.onclick = function () {
    'use strict';
    myman.addEventListener('click',im );
};*/
/*var myP= document.createElement('p');
myptext=document.createTextNode('this is my page');
myP.appendChild(myptext);
document.body.appendChild(myP);*/

/*var el=document.createElement('div');
ele=document.createTextNode('this is mine');
el.appendChild(ele);
document.body.appendChild(el);
el.innerHTML='this isn\'t mine';*/
/*var i = document.getElementsByTagName('p');
i[0].innerHTML = 'changed by me';*/

/*var myElement = document.querySelectorAll('.i');
myElement[0].innerHTML = 'Changed by Javascript';*/
anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 2000
  }).add({
    targets: '.ml5 .line',
    duration: 2000,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 2000,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 2000,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 2000,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 2000,
    easing: "easeOutExpo",
    delay: 1000
  });

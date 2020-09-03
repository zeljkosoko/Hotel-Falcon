var sliders = document.querySelectorAll('.slide')
var dot1 = document.querySelector('.dot1');
var dot2 = document.querySelector('.dot2');
var dot3 = document.querySelector('.dot3');

var index = 0;

//sakri sve sem prvog
hideSliders(index);

dot1.addEventListener('click', function(){
    hideSliders(0);
});
dot2.addEventListener('click', function(){
    hideSliders(1);
});
dot3.addEventListener('click', function(){
    hideSliders(2);
});

function hideSliders(num){
    for(var i = 0;i < sliders.length;i++){
        sliders[i].style.display = "none";
    }
    sliders[num].style.display = "block";
}
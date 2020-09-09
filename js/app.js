var slides = document.querySelectorAll('.slide');
var slider = document.querySelector('.slider');

var dot1 = document.querySelector('.dot1');
var dot2 = document.querySelector('.dot2');
var dot3 = document.querySelector('.dot3');
var dots = document.querySelectorAll('.dot');

var index = 0;

//sakri sve sem prvog
//hideSlides(index);

dots.forEach((dot,i) => { 
    dot.addEventListener('click', () => {
        slider.style.right = i*100+'%';
        removeActive();
        dot.classList.add('active-dot');
    })
});

// dot1.addEventListener('click', function(){
//     removeActive();
//     this.classList.add('active-dot');
// });
// dot2.addEventListener('click', function(){
//    slider.style.right = "100%";
//     removeActive();
//     this.classList.add('active-dot');
// });
// dot3.addEventListener('click', function(){
    
//     removeActive();
//     this.classList.add('active-dot');
// });

// function hideSlides(num){
//     for(var i = 0;i < sliders.length;i++){
//         slides[i].style.display = "none";
//     }
//     slides[num].style.display = "block";
// }

function removeActive(){
    for(var i = 0; i<dots.length; i++){
        dots[i].classList.remove("active-dot");
    }
}
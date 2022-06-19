console.log("It's Working!");


// NICK
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("PSlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex -1].style.display = "block";
    dots[slideIndex -1].className += " active";
};
// NICK

// STEFAN
/*const counters = document.querySelectorAll(".count");
const speed = 200;

counters.forEach((counter) => {
    const updateCount = () => {
        const target = parseInt(+counter.getAttribute("data-target"));
        const count = parseInt(+counter.innerText);
        const increment = Math.trunc(target / speed);
        //console.log(increment);

        if(count < target) {
            counter.innerText = count + increment;
            setTimeout(updateCount, 1);
        } else {
            count.innerText = target;
        }
    };
    updateCount();
});*/
const counters = document.querySelectorAll(".count");
const speed = 200;
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;

        const increment = target / speed;
        console.log(increment);

        if(count < target) {
            counter.innerText =  Math.ceil(count + increment);
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };
    updateCount();
});
// STEFAN
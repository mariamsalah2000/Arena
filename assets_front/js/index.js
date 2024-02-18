///show-button-up

let buttonUp = document.querySelector(".button-up");
window.onscroll = function () {
    if (this.scrollY >= 400) {
        buttonUp.classList.add("show");
    }
    else {
        buttonUp.classList.remove("show");
    }
};

///button-up

buttonUp.onclick = function () {
    window.scrollTo(
        {
            top: 0,
            behavior: "smooth",
        }
    );
};

///add sticky on nav-bar

window.addEventListener("scroll" , function()
{
    var header = document.querySelector(".big-nav")
    header.classList.toggle("sticky" , window.scrollY > 0 );
})


/////mouse-move

var cursor = document.querySelector(".cursor")

document.addEventListener("mousemove",function(e){
    cursor.style.cssText = "left: " + e.clientX 
    + "px; top: " + e.clientY + "px;";
});


/////////////////gallery

document.addEventListener('DOMContentLoaded', function () {
    const multiImageSlider = document.querySelector('.multi-image-slider')
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let counter = 1; // Start at the second slide

    nextBtn.addEventListener('click', function () {
        if (counter < 4) {
            counter++;
        } else {
            counter = 0;
        }
        updatemultiImageSlider();
    });

    prevBtn.addEventListener('click', function () {
        if (counter > 1) {
            counter--;
        } else {
            counter = 4;
        }
        updatemultiImageSlider();
    });

    function updatemultiImageSlider() {
        const slideWidth = 100 / 5; // Number of slides
        multiImageSlider.style.transform = 'translateX(' + (-counter * slideWidth) + '%)';
    }

});


document.addEventListener('DOMContentLoaded', function () {
    const slidere = document.querySelector('.slidere');
    const slidese = document.querySelectorAll('.slidee');

    slides.forEach((slidee, index) => {
        slidee.addEventListener('mouseover', function () {
            const imageUrl = this.getAttribute('data-src');
            slidere.style.backgroundImage = `url(${imageUrl})`;
            // Optionally, you can add logic to highlight the hovered slide
            slidese.forEach(s => s.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

//////////////////////////////

let slideIndex = 0;
showSlide(slideIndex);

function nextSlide() {
    showSlide(slideIndex += 1);
}

function prevSlide() {
    showSlide(slideIndex -= 1);
}

function showSlide(n) {
    let slides = document.getElementsByClassName("slide-");
    if (n >= slides.length) {
        slideIndex = 0;
    }
    if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}
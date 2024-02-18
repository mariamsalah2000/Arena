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

window.addEventListener("scroll", function () {
    var header = document.querySelector(".nav-bar")
    header.classList.toggle("sticky", window.scrollY > 0);
})

/////////section projects

filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column-proj");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)

var header = document.getElementById("buttons");
var btns = header.getElementsByClassName("button3");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active-proj");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active-proj", "");
        }
        this.className += " active-proj";
    });
}


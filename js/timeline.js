//hide all extra details at beginning
//when certain id is clicked, show the details
//should store most on backend and call up extra info once clicked on
//if more than one image exists, create a slideshow

//slide show code taken from Wendy's P1:
var index = 0;
var auto = true;
var timeout;
slideshow();

function changeSlides(i) {
    index += i;
    auto = false;
    slideshow();
}

function slideshow() {
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    if (auto) {
        index++;
    }
    if (index > x.length) {index = 1}
    if (index < 1) {index = x.length}
    x[index-1].style.display = "block";  
    clearTimeout(timeout);
    timeout = setTimeout(slideshow, 4000);
    auto = true;
}

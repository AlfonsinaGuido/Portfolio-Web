//typewriter effect for hero paragraph
var text = document.getElementById("hero-p");
var str = text.innerHTML;

text.innerHTML = "";

var speed = 200;
var i = 0;

//typewriter effect
function typeWriter() {
    if(i < str.length) {
        text.innerHTML += str.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

setTimeout(typeWriter, speed);
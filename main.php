<!DOCTYPE html>
<html>
<title>Anna Bytnar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <link rel="icon" 
      type="image/png" 
      href="serce.png" />
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="box">
    <div id="name">
      <h2>Anna</h2>
      <h2> Bytanr</h2>
    </div>
    <div id="containers_box">
      <div id="mountain_container" class="container">
        <img id="gory" class="icon" src="gory.png" onclick="iconAction(1)">
      </div>
      <div id="design_container" class="container">
        <img class="image" id="gory" class="icon" src="bauhaus.jpg" onclick="iconAction(1)">
      </div>
      
      <div id="it_container" class="container">
        <h1>
          <span
             class="txt-rotate"
             data-period="2000"
             data-rotate='[ "0001010101000101010101011", "console.log(Hello World!);", "Hello World! :) "]'></span>
        </h1>
      </div>
      <div id="wave_container" class="container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371.02 172.16"><defs><style>.cls-1{fill:none;stroke:#85c1bc;stroke-miterlimit:10;}</style></defs><title>wave</title><g id="Warstwa_2" data-name="Warstwa 2"><g id="Warstwa_1-2" data-name="Warstwa 1"><path class="cls-1" d="M0,.55c31.5.5,40.85,40.49,58,38C73.94,36.23,94,2,110,.55c16.85-1.55,39.11,37.07,56,38,15.09.84,31.91-37.31,47-38,17.11-.79,39.88,38.45,57,38,15.89-.42,35.16-36.65,51-38,15.64-1.33,31.5,38.5,50,38"/><path class="cls-1" d="M0,33.8c31.5.5,40.85,40.49,58,38,15.93-2.32,36-36.52,52-38,16.85-1.55,39.11,37.07,56,38,15.09.84,31.91-37.31,47-38,17.11-.79,39.88,38.45,57,38,15.89-.42,35.16-36.65,51-38,15.64-1.33,31.5,38.5,50,38"/><path class="cls-1" d="M0,67c31.5.5,40.85,40.49,58,38,15.93-2.32,36-36.52,52-38,16.85-1.55,39.11,37.07,56,38,15.09.84,31.91-37.31,47-38,17.11-.79,39.88,38.45,57,38,15.89-.42,35.16-36.65,51-38,15.64-1.33,31.5,38.5,50,38"/><path class="cls-1" d="M0,100.3c31.5.5,40.85,40.49,58,38,15.93-2.32,36-36.52,52-38,16.85-1.55,39.11,37.07,56,38,15.09.84,31.91-37.31,47-38,17.11-.79,39.88,38.45,57,38,15.89-.42,35.16-36.65,51-38,15.64-1.33,31.5,38.5,50,38"/><path class="cls-1" d="M0,133.55c31.5.5,40.85,40.49,58,38,15.93-2.32,36-36.52,52-38,16.85-1.55,39.11,37.07,56,38,15.09.84,31.91-37.31,47-38,17.11-.79,39.88,38.45,57,38,15.89-.42,35.16-36.65,51-38,15.64-1.33,31.5,38.5,50,38"/></g></g></svg>
      </div>
      
    </div>
</div>


<script>
// Automatic Slideshow - change image every 4 seconds
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    // x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function iconAction(i){
  console.log(i);
  var x = document.getElementsByTagName("BODY")[0];
  switch( i ) {
    case 1:
      document.getElementById("mountain_container").style.backgroundColor = "#b3d0ef";
      break;
    default:
      x.style.backgroundColor = "white";
      break;
  }
}

</script>

</body>
</html>

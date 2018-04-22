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
//carousel();

// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     for (i = 0; i < x.length; i++) {
//        x[i].style.display = "none";  
//     }
//     myIndex++;
//     if (myIndex > x.length) {myIndex = 1}    
//     // x[myIndex-1].style.display = "block";  
//     setTimeout(carousel, 4000);    
// }

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



function showDescription(i){
 switch( i ) {
    case 1:
      document.getElementById("mountain_container").style.display = "none";
      document.getElementById("mountain_description").style.display = "inherit";
      break;
    case 2:
      document.getElementById("mountain_container").style.display = "inherit";
      document.getElementById("mountain_description").style.display = "none";
      break;
    case 3:
      document.getElementById("design_container").style.display = "none";
      document.getElementById("design_description").style.display = "inherit";
      break;
    case 4:
      document.getElementById("design_container").style.display = "inherit";
      document.getElementById("design_description").style.display = "none";
      break;
    case 5:
      document.getElementById("it_container").style.display = "none";
      document.getElementById("it_description").style.display = "inherit";
      break;
    case 6:
      document.getElementById("it_container").style.display = "inherit";
      document.getElementById("it_description").style.display = "none";
      break;
    default:
      
      break;
  }

}

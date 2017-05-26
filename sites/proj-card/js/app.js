var help = document.getElementsByClassName('help')[0];
var requestBtn = document.getElementById('requestBtn');
var opacity, contactBox = document.getElementById('contact');
window.addEventListener("load", hideHelp);
document.addEventListener("click", hideContact);
help.addEventListener("mouseenter", showHelp);
help.addEventListener("mouseleave", hideHelp);
requestBtn.addEventListener("click", showNotif);

function hideHelp(){
  help.style.right = -120+"px";
}

function showHelp(){
  help.style.right = 0+"px";
}

function showNotif(){
  var notifi = document.getElementsByClassName('notification')[0];
  notifi.style.bottom = 30+"px";
  setTimeout(function(){
    notifi.style.bottom = -100+"px";
  }, 3000);
}

function contact(el, event){
  var style = window.getComputedStyle(contactBox);
      opacity = style.getPropertyValue('opacity');

  if(opacity == 0){
    var x = event.clientX;
    var y = event.clientY;
    var yOffset=Math.max(document.documentElement.scrollTop,document.body.scrollTop);
    var coords = "X coords: " + x + ", Y coords: " + y;
    console.log(coords);
    contactBox.style.top = y+yOffset+"px";
    contactBox.style.left = x+"px";
    contactBox.style.opacity = 1;
    contactBox.style.zIndex = 1000;
  } else {
    contactBox.style.opacity = 0;
    contactBox.style.zIndex = -1000;
  }

}

function hideContact(){
  var style = window.getComputedStyle(contactBox);
      opacity = style.getPropertyValue('opacity');
  // alert("opacity: "+opacity);
  if(opacity != 0){
    contactBox.style.opacity = 0;
    contactBox.style.zIndex = -1000;
  }
}

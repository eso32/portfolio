document.getElementById("body").addEventListener("mousemove", follow);

//SLIDING EFFECT FOR THE HOME PAGE
function follow(event){
  var x = event.clientX;
  var y = event.clientY;
  var w = window.innerWidth;
  var leftDiv = document.getElementById('leftD');
  var rightDiv = document.getElementById('rightD');

  rightDiv.style.width = (1-x/w)*100 +"%";
  leftDiv.style.width = x/w*100 +"%";
}

//ONCLICK EFECT FOR HOMEPAGE (BLOG | PORTFOLIO)
function change(elem){
  document.getElementById("body").removeEventListener("mousemove", follow);
  var leftDiv = document.getElementById('leftD');
  var rightDiv = document.getElementById('rightD');
  if(elem.innerHTML === "BLOG"){
    leftDiv.style.width = "100%";
    rightDiv.style.width = "0%";
  } else if(elem.innerHTML === "PORTFOLIO"){
    leftDiv.style.width = "0%";
    rightDiv.style.width = "100%";
  }
}

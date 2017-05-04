// function left(){
//
//   var leftDiv = document.getElementById('leftD');
//   var rightDiv = document.getElementById('rightD');
//
//   leftDiv.style.width = "80%";
//   rightDiv.style.width = "20%";
// };
//
// function right(){
//
//   var leftDiv = document.getElementById('leftD');
//   var rightDiv = document.getElementById('rightD');
//   var test = document.getElementById('test');
//
//
//   rightDiv.style.width = "80%";
//   leftDiv.style.width = "20%";
// };
document.getElementById("body").addEventListener("mousemove", follow);

function follow(event){
  var x = event.clientX;
  var y = event.clientY;
  var w = window.innerWidth;
  var leftDiv = document.getElementById('leftD');
  var rightDiv = document.getElementById('rightD');

  rightDiv.style.width = (1-x/w)*100 +"%";
  leftDiv.style.width = x/w*100 +"%";
}

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

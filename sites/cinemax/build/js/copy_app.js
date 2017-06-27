var data,
    places = document.getElementById('places'),
    order = {};

//Get the JSON file from the server
$(function (){
  // var $ul = $('#orders');
  places.innerHTML = "Wait....";
  $.ajax({
    type: 'GET',
    url: 'cinema-halls.json',
    success: function(response){
      data = response;
      console.log("ajax");
      // $.each(orders, function(i, order){
      //   $ul.append('<li>name: '+order.name+' drink: '+order.drink+'</li>');
      // })
      generPlaces();
      clc();
    }
  });
})

//Generate chairs
function generPlaces(){
  console.log("places");
  places.innerHTML = "";
  for(i=0; i<40; i++){
    if((i)%10==0){
      if(data.hasOwnProperty('p'+i)){
        places.innerHTML = places.innerHTML + '<div class="place booked" id="p'+i+'" style="clear: both;"></div>';
      } else {
        places.innerHTML = places.innerHTML + '<div class="place free" id="p'+i+'" style="clear: both;"></div>';
      }
    } else {
      if(data.hasOwnProperty('p'+i)){
        places.innerHTML = places.innerHTML + '<div class="place booked" id="p'+i+'"></div>';
      } else {
        places.innerHTML = places.innerHTML + '<div class="place free" id="p'+i+'"></div>';
      }
    }
  }
}

//Booking system
function clc(){
  var $free = $('.free'),
      $place = $('#place'),
      $select = $('#select'),
      $form = $('#choose'),
      $passPlace = 0,
      $passPlaceObj;


  $free.click(function(){
    $free.removeClass(" preselect");
    $passPlace = this.id;
    $passPlaceObj = $(this);
    if(!$(this).hasClass(" select")){
      $form.css('display','block');
      $(this).toggleClass(" preselect")
      $place.text(this.id);
      console.log("przed"+$passPlace);

      $('#confirm').on('click', function(){
        console.log($passPlace);
        order[$passPlace]={booked: "true", ticket: $select.val()};
        console.log(order);
        $form.css('display','none');
        $passPlaceObj.toggleClass(' preselect');
        $passPlaceObj.toggleClass(' select');
      });
    } else {
      console.log('deselected: '+this.id);
      $(this).toggleClass(' select');
      $place.text("");
      delete order[$passPlace];
      console.log("Object "+$passPlace+" has been deleted");
    }
  })
}

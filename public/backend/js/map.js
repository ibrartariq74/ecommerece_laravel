
$(document).ready(function() {
    console.log(map);
    createMap();

       //Create Map
       function createMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat:-33.86 , lng:151.17 },
            zoom: 12
        });
   
    }

  
   

});
  
  
 
 
    
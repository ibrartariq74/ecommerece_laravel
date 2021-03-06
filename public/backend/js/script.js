var map;
var myLatLng;
$(document).ready(function() {
    createMap();
    locations();

       //Create Map
       function createMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat:-33.86 , lng:151.17 },
            zoom: 12
        });
   
    }

    function locations()
    {
       $.get('http://127.0.0.1:8000/api/location',function(match)
       {
           console.log(match);
           $.each(match,function(i,val)
           {
               console.log(val.name);
               var locationlatval=val.lat;
                var locationlngval=val.lng;
                myLatLng = new google.maps.LatLng(locationlatval, locationlngval);
                createMarker(myLatLng);

           });


         //  var { lat,lng }= value;
          // console.log(lat);
        // var locationlatval=match.type;
         //  console.log(value1.lat);
           //var locationlngval=match.lng;
         //  myLatLng = new google.maps.LatLng(locationlatval, locationlngval);
           
        //   createMarker(myLatLng);

       }
       );
       

   }

    //Create marker
    function createMarker(latlng)
     {
        var marker = new google.maps.Marker({
            position: latlng,
            map
        
            
        });
    }
   

});
  
  
 
 
    
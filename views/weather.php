<button type='button' onclick="geoFindMe()" class="btn btn-success">Use my location</button>
<div id="out"></div><br>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<script>
function geoFindMe() {
  var output = document.getElementById("out");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    var weather = "http://api.openweathermap.org/data/2.5/weather?lat="+latitude+"&lon="+longitude+"&appid=2de143494c0b295cca9337e1e96b00e0&units=imperial";


    loadWeatherData(weather);
  };

  function loadWeatherData(weather) {
    $.ajax({
      url: weather,
      timeout: 4000,
      success: function(results) {
        var response = JSON.stringify(results);
        // document.write(response);
        var location = results['name'].toString();
        var latitude = results['coord']['lat'].toString();
        var longitude = results['coord']['lon'].toString();
        var weather = results['weather'][0]['main'].toString();
        var temp = results['main']['temp'].toString();
        var temp_min = results['main']['temp_min'].toString();
        var temp_max = results['main']['temp_max'].toString();
        document.getElementById('geoloc').value = location;
        document.getElementById('lat').value = latitude;
        document.getElementById('lon').value = longitude;
        document.getElementById('geoweather').value = weather;
        document.getElementById('temp').value = temp;
        document.getElementById('temp_min').value = temp_min;
        document.getElementById('temp_max').value = temp_max;


        $.ajax({
          type: "POST",
          url: '../views/flora_submit.php',
          data: { location : location },
          success: function(location){
            output.innerHTML = "<p>Locating Complete</p>";
          }
        });

      }
  });
  };

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  };

  output.innerHTML = "<p>Locating...</p>";

  navigator.geolocation.getCurrentPosition(success, error);
};
</script>

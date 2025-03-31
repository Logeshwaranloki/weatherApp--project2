
<?php


// API KEY 

$apikey = "f5cc1847f208ddd6fc680a969760a10f ";
$city = $_POST['city'] ?? ""; //Defualt city is empty
$weatherurl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apikey&units=metric";


// initialize variables 
$temperature = $description = $cityName = $errorMessage = "";


// if city name found 
if ($city) {
    $weatherData = @file_get_contents($weatherurl);
    $weatherArray = json_decode($weatherData, true);


    if ($weatherArray && $weatherArray['cod'] == 200) {
        $cityName = $weatherArray['name'];
        $temperature = $weatherArray['main']['temp'];
        $description = ucfirst($weatherArray['weather'][0]['description']);

    }
    else
    {
        $errorMessage = "City not found";
    }
}




?>
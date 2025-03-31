<?php
include('weather.php')
?>

<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Weather App</h1>

    <!-- on Search button click -->
    <form method="POST">
        <input type="text" name="city" placeholder="Enter city" />
        <button type="submit">Get Weather</button>
    </form>
  
    <!-- if weather info found or not found  -->
     <?php if($errorMessage): ?>  
     <div class="error"><?php echo $errorMessage;?></div>
     <?php elseif($city):?>
        <div class="weather-info">
            <h3>Weather in : <?php echo htmlspecialchars($cityName);  ?></h3>
            <p>Temparature : <?php echo $temperature ; ?>
            </p>
            <p>Desciption : <?php echo $description;  ?></p>
           
        </div>
        <?php endif;  ?>
</div>

</body>
</html>

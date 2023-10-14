
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<html>
    <head>

        <title>CareConect</title>
        <link rel="stylesheet" href="nav.css">
        <link rel="stylesheet" href="home.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        

        <nav>
           <div class="navbar">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Channeling</a>
                <a href="#">Contact Us</a>
                <a href="#">My Appointments</a>
                <a href="#">Log In</a>
                <a href="#">Sign In</a> 
            </div>
        </nav>

        
        
        <div class="slides">
            <img src="Images/Andrew.png.webp" alt="">
        </div>

        <form method="POST" action="home.php">
            <div class="hd">
                <div class="type">
                    Select type
                    <br>
                    <select name="dh" id="dh">
                        <option value="Doctor">Doctor</option>
                        <option value="Hospital">Hospital</option>
                    </select>
                </div>
                <div class="search">
                    <p id="searched">Doctor name</p>
                    <input type="text" name="searchedName" placeholder="   Search Doctor Name  (Max 50 Characters)" maxlength="50">
                    <button type="submit" class="searchb">Search</button>
                </div>
            </div>
        </form>
        

        <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="image1.jpg" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <img src="image2.jpg" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <img src="image3.jpg" style="width:100%">
            </div>
          </div>
          
          <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected type and searched name from the form
    $selectedType = $_POST["dh"];
    $searchedName = $_POST["searchedName"]; // Assuming you set the "name" attribute for the input field

    // Process the search or perform other back-end operations here
    // You might connect to a database and run a query based on the selected type and searched name

    // For now, let's just print the values for demonstration
    echo "Selected Type: $selectedType <br>";
    echo "Searched Name: $searchedName";
}
?>
    </body>











</html>

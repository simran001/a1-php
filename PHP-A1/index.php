<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD in OOP PHP | Create & Read</title>
	<meta name="description" content="This week we will be using OOP PHP to create and read with our CRUD application">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" href="./css/style.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/php-logo.png" alt="header logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

       <div class="container">
         <h2>Pizza Order Form</h2>
         <form method="post">
            <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="fname" placeholder="Enter your first name" required>
            </div>
        
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="lname" placeholder="Enter your last name" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="xyz@abc.com" required>
            </div>

            <!-- <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" placeholder="000-000-000" required>
            </div>

            <div class="form-group">
                <label for="pizza-type">Pizza type</label>
                <select id="pizza-type" name="type">
                    <option value="veg">Vegetarian</option>
                    <option value="non-veg">Non-vegetarian</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pizza-size">Pizza Size:</label>
                <select id="pizza-size" name="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="toppings">Select Toppings:</label>
                <div class="custom-select">
                        <label><input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni</label>
                        <label><input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</label>
                        <label><input type="checkbox" name="toppings[]" value="onions">Onions</label>
                        <label><input type="checkbox" name="toppings[]" value="sausage">Sausage</label>
                </div>
            </div> -->
            
        
            <div class="form-group">
                <label for="delivery">Delivery Address:</label>
                <input type="text" id="delivery" name="deladdress" placeholder="Enter your address" required>
            </div>
        
            <div class="form-group">
				 <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit">
			 </div>
            </form>

         <div class="form-group submit-message">
           <?php
				 require_once ('database.php');
				 if(isset($_POST) & !empty($_POST)){
				  $fname = $database->sanitize($_POST['fname']);
				  $lname = $database->sanitize($_POST['lname']);
				  $email = $database->sanitize($_POST['email']);
                  $deladdress = $database->sanitize($_POST['deladdress']);
				  $res = $database->create($fname,$lname,$email,$deladdress);
				  if ($res){
					  echo "<p>Record Added</p>";
				  }
				  else{
				  echo "<p>could not create record</p>";
				  }
				 }
			 ?>
        </div>
      </section>
     </main>
   </body>
</html>

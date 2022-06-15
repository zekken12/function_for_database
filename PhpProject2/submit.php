<!DOCTYPE html>
<html lang="en">
<head>
    <title>GFG- Store Data</title>
</head>
  
<body>
    <center>
        
    <form action="insert.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>  
              
<p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
  
  
  
              
              
<p>
                <label for="lastName">Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
  
  
  
              
              
<p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender" value="homme">
                
            </p>
  
  
              
              
              
<p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address">
            </p>
  
  
              
              
              
<p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" placeholder="Ex : example@google.com" required>
            </p>
  
  
            <input type="file" onchange='chargerTexte(this)'/> 
            <input type="submit" value="Submit">
        
		</div>
    </center>
</body>
  
</html>
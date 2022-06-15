<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
    <meta charset="utf-8">
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "root", "staff");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        
        $sql = "SELECT * FROM college";
        if(mysqli_query($conn, $sql)){
            
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
        <a href="index.php">Accueil</a>
    </center>
</body>
  
</html>         

<?php 
     
     $conn = mysqli_connect('localhost','root','','review_db');

     $review = $_POST['reviewtxt'];

     $query = "insert into review_form(reviews) values ('$review')";

     $insert = mysqli_query($conn,$query);

     if($insert){
          header('location:reviews.php');
     }
     else{
         echo "sorry! there is some problem";
     }

?>
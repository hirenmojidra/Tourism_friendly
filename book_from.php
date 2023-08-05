<?php 

   $connect =  mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mno'];
    $Address = $_POST['address'];
    $Tour = $_POST['tourname'];
    $guests = $_POST['hmy'];
    $Arrival = $_POST['arrival'];
    $leaving = $_POST['leave'];

    $query = "insert into book_form(name,email,phone,address,location,guests,arrivals,leaving) values('$name', '$email', '$phone','$Address','$Tour','$guests','$Arrival','$leaving')";

    mysqli_query($connect, $query);

    header('location:book.php');

   }else{

    echo "something went wrong try again";

   }


?>
<?php
$connection=mysqli_connect('localhost','root','','book_data');
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $address=$_POST['address'];
   $location=$_POST['location'];
   $guests=$_POST['guests'];
   $arrivals=$_POST['arrivals'];
   $leaving=$_POST['leaving'];
  $_REQUEST="insert into book_form(name,email,mobile,address,location,guests,arrivals,leaving)
   values('$name','$email','$mobile','$address','$location','$guests','$arrivals','$leaving')";
   $result=mysqli_query($connection,$_REQUEST);
   if($result){
   echo'<script>alert("you have booked successfully")</script>';
   echo'<script>window.location="book.php"</script>';
}
else{
    echo 'Something went wrong please try again';
}
}
?>
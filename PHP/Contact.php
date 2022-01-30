<?php
include('connection.php');

if(isset($_POST['submit'])){
  
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $data = "insert into ContactForm(Fname,Email,Message) value('$fname','$email','$message')";
  
  $sent = mysqli_query($con,$data);
  
  if($sent){
    ?>
    <script>
      location.replace("../menufile/contact.html");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("try again error!");
    </script>
    <?php
  }
}

?>
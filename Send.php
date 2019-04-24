<!DOCTYPE>
<html>
<head>
        <title></title>
</head>
<body>
<?php
$name =$_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$to = 'info@lamon.com';
$subject = 'Message from La Mon Website';
$msg = "My name is $name \n".
        "$message";
    $output_form = false;
    
        if((!empty($name)) && (!empty($message)) && (!empty($email))){
            mail($to, $subject, $msg, 'From :' .$email);
        }
        if(empty($name) && empty($message) && empty($email)){
            echo 'Enter field information.';
            $output_form = true;
        }
        if((!empty($name)) && empty($message) && empty($email)){
            echo 'Enter message and email.';
            $output_form = true;
        }
        if(empty($name) && (!empty($message)) && empty($email)){
            echo 'Enter name and email.';
            $output_form = true;
        }
        if(empty($name) && empty($message) && (!empty($email))){
            echo 'Enter name and message.';
            $output_form = true;
        }
        if((!empty($name)) && (!empty($message)) && empty($email)){
          echo 'You forgot to enter your email.';
          $output_form = true;
        }
        if((!empty($name)) && empty($message) && (!empty($email))){
            echo 'You forgot to enter your message.';
            $output_form = true;
          }
        if(empty($name) && (!empty($message)) && (!empty($email))){
            echo 'You forgot to enter your name.';
            $output_form = true;
          }  
        if($output_form){
?>
        
        <form method="POST" action="Send.php">
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="Message" placeholder="Message"></textarea>
            </div>
            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Send">
            </div>
        </form>
    <?php
        }
    ?>



</body>
</html>
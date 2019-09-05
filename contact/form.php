
$name_error = $email_error = phone_error = url_error = "" = $success = "";
 $name = $email = $phone = $message = $url = "" = $success = "";
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $name_error = "Name is required";
    }
} else{
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name)){
        $name_error = "only letters and white space allowed";
    }
} 
   if(empty($_POST["email"])){
        $email_error = "Email is required";
    }
}else{
    $email = test_input($_POST["email"]);
    
    <div class="container">
    <form id="contact" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        <h3>Quick Contact</h3>
        <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
            <span class="error"><?= $name_error;?></span>
        </fieldset>
             <fieldset>
            <input placeholder="Your Email Address" type="text"  name="email" value="<?= $email ?>" tabindex="2">
            <span class="error"><?= $email_error;?></span>
        </fieldset>
             <fieldset>
            <input placeholder="Your Phone Number" type="text" tabindex="3" name="phone" value="<?= $phone ?>" tabindex="3">
            <span class="error"><?= $phone_error?></span>
        </fieldset>
             <fieldset>
            <input placeholder="Your Web Site Start With http://" type="url" name="name" value="<?= $url ?>" tabindex="4">
            <span class="error"><?= $url_error;?></span>
        </fieldset>
             <fieldset>
            <input placeholder="Type Your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5">
        </fieldset>
             <fieldset>
                 <button name="submit" type="submit" id="contact-submit" data-submit="...sending">submit</button>
        </fieldset>
        <div class="success"><?= $success;?></div>
    </form>
</div>
    
    
    *{
margin:0;
padding:0;
box-sizing:border-box;
font-smoothing:antialiased;
text-rendering:optimizeLegibility;
}
.error{
color:red;
}
.success{
color:#ff9966;
text-align:center;
font-weight:bold;
font-size:14px;
}

/*body{
font-family:"Open Sans",Helvetica,Arial,sans-serif;
font-weight:300;
font-size:12px;
line-height:30px;
color:#777;
background:#0CF;
}*/
.container1{
max-width:400px;
width:100%;
margin:0 auto;
}
    
    
    
    
    
    
    
    
    
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error = "Invalid email format";
    }
} 

   if(empty($_POST["phone"])){
        $phone_error = "phone is required";
    }
}else{
    $name = test_input($_POST["phone"]);
    if(!preg_match("/^(\d[\s-]?)?[\[\s-]{0.2}?\d{3}[\)\]\s-]{0.2}?\d{3}[\s=]?\d{4}$/i",$phone)){
        $phone_error = "Invalid phone number";
    }
}
   if(empty($_POST["url"])){
        $url_error = "";
    }
} else{
    $url = test_input($_POST["url"]);
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i",$url)){
        $url_error = "Invalid URL";
    }
}
   if(empty($_POST["message"])){
        $message_error = "";
    }
} else{
    $message = test_input($_POST["message"]);
    }
    if($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach($_POST as $key => $value){
          $message_body .= "$key: $value\n";
      }
      $to = 'abeltshepo16@gmail.com';
      $subject = 'Contact Form';
      mail($to, $subject, $message)){
          $success = "Message sent, thank you for contacting us!";
          $name = $email = $phone = $message = $url = '';
      }
    }
} }
function test_input($data){
  $data = trim($data); 
  $data = stripslashes($data); 
  $data = htmlspecialchars($data); 
  return $data;
}



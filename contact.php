<title>Contact Us | AcuBalance LLC</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<script>
    
    function colorChange(x) {
        x.style.backgroundColor = "white";
    }
    
    function focusOut(x) {
        x.style.backgroundColor = "#f9f8fb";
    }
    
</script>

<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $fullname = mysqli_real_escape_string($dbc, $_POST['fullname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $phone = mysqli_real_escape_string($dbc, $_POST['phone']);
        $message = mysqli_real_escape_string($dbc, $_POST['message']);
    
        // form validation
        $errors = array();
        
        if (empty($fullname)) 
            {
                $errors['fullname'] = "Full name required";
            }
        elseif (!preg_match("/^[a-zA-Z ]*$/", $fullname))
            {
                $errors['valid_fullname'] = "Valid full name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = "Email required";
            }
        elseif (empty($message))
            {
                $errors['message'] = "Message required";
            }
        else
            {
          $sql = "INSERT INTO acubalance (firstname, lastname, email, phone, message)
                VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";
            
            mysqli_query($dbc, $sql);
            
          $url='thankyou.php';
  
          echo '<script>window.location = "'.$url.'";</script>';
              
         $email_to = "jtfranz90@gmail.com";
         $email_from = "mail.jfranzdesigns.com";
         $subject = "Information Request";
         $content = $firstname . " " . $lastname . " would like more information about your services " . " \nEmail: " . " " . $email . " \nPhone: " . $phone . "\n " . "\n" . $message;
         mail($email_to, $subject, $content);

        }  
    
    //end form validation
  
}   


?>

<body>
    
<h1 class="img-text">Contact</h1>
    
<div class="img5" alt="Contact Us"></div>
    
    <div id="content">
        
        <br>
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sm-12">
        
                <p>Please fill out the form to be added to our customer list.</p>

                <p>AcuBalance LLC
                    <br>
                    Melissa Bichanich L.Ac, Biofeedback specialist</p>

                <span class="glyphicon glyphicon-earphone"></span><a href="tel:262-995-8778" class="phone">262-995-8778</a><br>
                    <span class="glyphicon glyphicon-envelope"></span><a href="mailto:info@acubalancellc.com" class="email">info@acubalancellc.com</a>
                <br>
                
            <h4><strong>Appointment</strong></h4>
                <p>Initial Acupuncture Session with Exam is $75<br>
                    Follow-up Session is $60</p>

                <h4><strong>Initial Biofeedback Consult $115
                    <br>
                    Kids Initial  $85
                    <br>
                    Follow-up $65
                    </strong></h4>
                <p>Initial Consult lasts about an hour and a half to two hours. This allows us time to get a comprehensive understanding of you and navigate a plan together. </p>
                
            </div>
    
            <div class="col-lg-6 col-md-6 sm-12">
                 
                 <form id="myForm" action="contact.php" method="post" >

                      <label for="fname">Name *</label><input type="text" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" name="fullname" size="14" placeholder="Full Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                    <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                    <p class="error"><?php if(isset($errors['valid_fullname'])) echo $errors['valid_fullname']; ?></p>

                     <label for="email">Email *</label><input type="email" name="email" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                     <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                     
                     <label for="phone">Phone</label><input type="text" name="phone" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" placeholder="Phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>">
                     <p class="error"><?php if(isset($errors['phone'])) echo $errors['phone']; ?></p>

                    <label for="message">Message *</label>
                    <textarea rows="5" style="width:100%" name="message" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" placeholder="Message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
                     <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
                    <br />
                     
                     <input type="submit" value="Send" name="Submit" id="submit">
                         <input type="hidden" name="submitted" value="TRUE" />
                </form> 
                     
            </div>
       
        </div>

    </div>
    
</body>
    
<?php
include 'includes/footer.php';
?>
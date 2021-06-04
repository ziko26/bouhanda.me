<?php
// Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Assign Variables
        $user = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $sub = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
     // Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        $headers = 'From: ' . $mail . '\r\n';
        $myEmail = 'contact@bouhanda.me';
        $subject = 'Contact Form English';
            mail($myEmail, $subject, $msg, $headers);
            $user = '';
            $mail = '';
            $sub  = '';
            $msg  = '';
            $success = '<div class="alert alert-success"><i class="fa fa-check"></i> Your Message was successfuly sent.</div>'; 

    }
?>
 <section class="contact" id="contact">
    <div class="container">
    	<h2 class="title">Contact Me</h2>
          <div class="mail">
            <h3>LEAVE US A MESSAGE</h3>
            <p>Do not hesitate to fill out your form, we will get back to you as soon as possible.</p>
            <?php if(isset($success)) {echo $success;} ?>
            <form class="form-group" id="muForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>#contact">
              <div class="row">
                <div class="col-md-4">
                  <input class="form-control" type="text" name="name" id="name" required="required" placeholder="Your Name">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="email" name="email" id="email" required="required" placeholder="Email Adress">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="subject" id="tel" placeholder="Subject">
                </div>
              </div>
              <textarea class="form-control" name="message" id="comment" required="required" placeholder="Message"></textarea>
              <button type="submit" name="submit" value="Envoyer">Send</button>
            </form>
          </div>
    </div>
  </section>

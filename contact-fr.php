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
        $subject = 'Contact Form Frensh';
            mail($myEmail, $subject, $msg, $headers);
            $user = '';
            $mail = '';
            $sub  = '';
            $msg  = '';
            $success = '<div class="alert alert-success"><i class="fa fa-check"></i> Nous avons reçu votre message</div>'; 
    }
?>
 <section class="contact" id="contact">
    <div class="container">
    	<h2 class="title">Contactez moi</h2>
          <div class="mail">
            <h3>LAISSEZ-NOUS UN MESSAGE</h3>
            <p>N'hésitez pas à remplir votre formulaire, nous vous répondrons dans les plus brefs délais.</p>
            <?php if(isset($success)) {echo $success;} ?>
            <form class="form-group" id="muForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>#contact">
              <div class="row">
                <div class="col-md-4">
                  <input class="form-control" type="text" name="name" id="name" required="required" placeholder="Votre nom">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="email" name="email" id="email" required="required" placeholder="Adresse e-mail">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="subject" id="tel" placeholder="Sujet">
                </div>
              </div>
              <textarea class="form-control" name="message" id="comment" required="required" placeholder="Message"></textarea>
              <button type="submit" name="submit" value="Envoyer">Envoyer</button>
            </form>
          </div>
    </div>
  </section>

<?php 
    define ("TITLE", "Contact Us | Franklin`s");

    include('./assets/includes/header.php');
 ?>
 <div id="contact">
     <hr>
     <h1>Cet in touch with us!</h1>
     <form action="" id="contact-form" method="post">
         <label for="name">Your name</label>
         <input type="text" id="name" name="name">
         
         <label for="name">Your email</label>
         <input type="email" id="email" name="email">
         
         <label for="message">Your message</label>
         <textarea name="message" id="message" cols="30" rows="10"></textarea>
         
         <br><input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
         <label for="subscribe">Subscribe</label>
         
         <input type="submit" class="button next" name="contact_subimt" valu="Send Message"> 
         

     </form>
 </div>
<?php 
    include('./assets/includes/footer.php');

 ?>
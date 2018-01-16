<?php include 'html/include/header.php' ?>
<div class="hero contact-hero">
    <div class ="link-forum">
      <a href="main_forum.php"><h3>Forum</h3></a>
    </div>
    <div class="hero-text">
      <a href = "index.php"><img src="html/img/layout/logo.png"></a>
      <h1>Sunshine Consultancy</h1>
    </div>
    <div class="title">
      <h1>Contact Us</h1>
    </div>
    <?php include 'html/include/nav.php' ?>
</div>

<div class="container yellow">
  <div class="content-container">
    <div id="contact-info" class="yellow">
      <div id="contact-us-form" class="contact-form">
        <h3 class="heading">Contact Us</h3>
          <form action="mailto:olliep54@hotmail.co.uk" method="post" enctype="text/plain">
                  <strong>Name:<br></strong>
                  <input type="text" name="name"><br>
                  <strong>E-mail:<br></strong>
                  <input type="text" name="mail"><br>
                  <strong>Comment:<br></strong>
                  <textarea name="comment"></textarea><br><br>
                  <input type="submit" value="Send">
                  <input type="reset" value="Reset">
          </form>
      </div>
    </div>
    <div id="contact-map">
      <h3>Address:</h3>
      <strong>
        Sunshine Consultancy<br>
        Brook Steet<br>
        Tonbridge<br>
        Kent<br>
        TN9 2PW<br>
      </strong>
      <br>
      <h3>Email:</h3>
        <strong>contact@sunshineconsultancy.co.uk<br></strong>
      <br>
      <h3>Telephone</h3>
        <strong>12345 678910</strong>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.756522851759!2d0.26134331570485747!3d51.18671034192072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df4f5ae1fe863f%3A0xf591c4d0f00cb0df!2sWest+Kent+College!5e0!3m2!1sen!2suk!4v1495528388409"
      width="600" height="450" frameborder="0" style="border:0; margin: 5px 0 5px;" allowfullscreen></iframe>
    </div>
  </div>
</div>



<?php include 'html/include/footer.php' ?>

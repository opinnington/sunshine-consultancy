<!DOCTYPE HTML5>
<html>
<?php include 'html/include/header.php' ?>
  <div id="hero-homepage" class="hero">
    <div class="overlay overlay-home">
      <div class ="link-forum">
        <a href="main_forum.php"><h3>Forum</h3></a>
      </div>
      <div class="hero-text-home">
        <a href = "index.php"><img src="html/img/layout/logo.png"></a>
        <h1>Sunshine Consultancy</h1>
        <h3>Working towards a bright future</h3>
      </div>
      <?php include 'html/include/nav.php' ?>
  </div>
</div>

<div class="container yellow">
  <div class="content-container">
    <div class="content">
      <div id="what-we-do">
        <div id="what-we-do-text">
          <h3 class="heading">What we do</h3></strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque tortor vel nulla posuere, nec rutrum orci viverra.
          In hac habitasse platea dictumst. Quisque pulvinar sapien eu nibh vehicula, nec dignissim dolor iaculis. Donec at aliquam ex. Aliquam ac sagittis ex. Proin varius mi lorem,
          a volutpat elit aliquet vitae. Maecenas non felis mauris. Sed ullamcorper, tellus id lacinia ultrices, tellus tortor vestibulum purus, eu pellentesque ipsum orci nec dui.</p>
          <br>
          <p>Ut dictum convallis nisi, at sodales sapien congue quis. Vivamus efficitur libero a ex vestibulum bibendum. Cras ac lacinia dui, tristique suscipit elit.
          Ut et aliquam lacus, iaculis dignissim quam. Suspendisse potenti. Mauris ornare in augue nec congue. Morbi justo libero, tincidunt nec facilisis vitae,
          viverra nec metus. Sed ut turpis eu ex hendrerit egestas. Curabitur varius lobortis consequat.</p>
          <br>
          <p>Proin sollicitudin hendrerit nibh a cursus. Nunc iaculis eros vulputate turpis blandit egestas. Fusce malesuada consequat dignissim.
          Vivamus sollicitudin nunc at ipsum aliquet, vel pulvinar leo consequat. Proin non dui et felis hendrerit dictum id congue sapien.
          Pellentesque at enim quis neque lacinia elementum suscipit et massa. Proin accumsan sit amet diam vitae commodo. Mauris varius nulla id ex iaculis, a scelerisque libero sagittis.
          Vivamus convallis cursus lorem, vel aliquet ipsum tincidunt a.</p>
          <div class="link-more">
            <a href="services.php">Click for more...</a>
          </div>
        </div>
        <div id="what-we-do-video">
          <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/3wPeND2gvqc?ecver=2"
            width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0;overflow:hidden;" allowfullscreen></iframe></div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div id="about-us">
    <div class="overlay">
      <div class="content-container">
        <div class="content">
          <div id="about-us-text">
            <h3 class="heading">About Us</h3>
            <strong><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque tortor vel nulla posuere, nec rutrum orci viverra.
            In hac habitasse platea dictumst. Quisque pulvinar sapien eu nibh vehicula, nec dignissim dolor iaculis. Donec at aliquam ex. Aliquam ac sagittis ex. Proin varius mi lorem,
            a volutpat elit aliquet vitae. Maecenas non felis mauris. Sed ullamcorper, tellus id lacinia ultrices, tellus tortor vestibulum purus, eu pellentesque ipsum orci nec dui.</p></strong>
            <br>
            <p>Ut dictum convallis nisi, at sodales sapien congue quis. Vivamus efficitur libero a ex vestibulum bibendum. Cras ac lacinia dui, tristique suscipit elit.
            Ut et aliquam lacus, iaculis dignissim quam. Suspendisse potenti. Mauris ornare in augue nec congue. Morbi justo libero, tincidunt nec facilisis vitae,
            viverra nec metus. Sed ut turpis eu ex hendrerit egestas. Curabitur varius lobortis consequat.</p>
            <br>
            <img src="html/img/content/team/boss.png"/>
            <div class="subtext">
              <strong><em><p>Team! Team, team, team, team, team. I even love saying the word team. You probably think this is a picture of my family?
              No! It is a picture of The A-Team. Bodie, Doyle, Tiger, the Jewellery Man.</p></em></strong>
              <br>
              <h3>- Business Director,<br><br>Denholm Reynholm</h3>
            </div>
          </div>
        </div>
        <div class="link-more">
          <a href="about-us.php">Click for more...</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container yellow">
  <div class="content-container">
    <div class="content">
      <div id="contact-us-form">
        <h3 class="heading">Contact Us</h3>
          <form action="mailto:olliep54@hotmail.co.uk" method="post" enctype="text/plain">
                  Name:<br>
                  <input type="text" name="name"><br>
                  E-mail:<br>
                  <input type="text" name="mail"><br>
                  Comment:<br>
                  <textarea name="comment"></textarea><br><br>
                  <input type="submit" value="Send">
                  <input type="reset" value="Reset">
          </form>
      </div>
      <div id="contact-us-address">
        <div id="contact-us-address-container">
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
          </div>
      </div>
    </div>
  </div>
</div>

<?php include 'html/include/footer.php' ?>

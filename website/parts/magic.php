<!-- Main Content -->
<section class="content-wrap">

  <!-- Banner -->
  <div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('assets/images/dataset-original.jpg'); opacity:1">
    </div>


  </div>
  <!-- /Banner -->


  <!-- Signup -->
  <div class="h3"></div>
  <section class="youplay-banner youplay-banner-parallax small">
    <div class="image" style="opacity:.99 ;background-image: url('assets/images/mg.jpg');">
    </div>

    <div class="info container align-center">
      <div>
        <h2><b>Tournament</h2>

        <!-- See countdown init in bottom of the page -->

        <?php
        if (isset($loggedUser)) {

          if ($loggedUser->admin == '1'){
            echo '<a  class="btn btn-lg" href="?page=tournamentCreate&game=magic"><b>Create Tournament</a>';
          } 
} else {
            echo '<div class="countdown h2" data-end="2018-02-23 12:00" data-timezone="UTC-4"></div><br><br>';
            echo '<a  class="btn btn-lg" href="#!"><b>Tournament Signup</a>';
          }
          ?>
      </div>
    </div>
  </section>
  <div class="h3"></div>
  <!-- /Signup -->

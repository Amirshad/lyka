<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'links.php'; ?>
  <meta name="description" content="">
  <meta name="keywords" content="" />
  <meta name="author" content="">
  <link rel="canonical" href="#">
  <title>Lyka Holidays - Visas</title>
</head>

<body>
  <?php include 'header.php'; ?>

  <!--SLIDER-->

  <section class="location-content-sm flex image-bg tx-white text-center ov-bg" style="background-image: url(./images/bg/9.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Tourist Visa</p>
          <h2>Adventure Awaits Here</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="woldmap section-100 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="w-map">
            <img src="images/img/world.svg" alt="">
          </div>
        </div>
        <div class="col-md-12 text-center pt-50">
          <a class="mbtn bg-main w-50" href="view-all-visas.php">View All Visa</a>
          <form class="d-flex search-form mx-auto">
            <input class="form-control me-2" type="search" placeholder="Search your visa here..." aria-label="Search">
            <a class="sbtn" href="visa-detail-page.php">
              <i data-feather="search"></i>
            </a>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
  <?php include 'scripts.php'; ?>
  <script type="text/javascript" src="./js/mapdata.js"></script>
  <script type="text/javascript" src="./js/worldmap.js"></script>
</body>

</html>

<style>
  header {
    background: #fff;
  }

  .ov-bg::before {
    content: "";
    display: block;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 100%);
  }

  .ov-bg .container {
    position: relative;
    z-index: 1;
  }
</style>



<!-- https://simplemaps.com/ -->
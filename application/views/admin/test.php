<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link href="<?php echo base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/jquery-2.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
  </head>

  <body>
  <div class="container-fluid">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
      <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
      <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
      <div class=" col-md-4">.col-xs-6 .col-md-4</div>
      <div class="col-md-4">.col-xs-6 .col-md-4</div>
      <div class="col-md-4">.col-xs-6 .col-md-4</div>
    </div>

    <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class="row">
      <div class="col-xs-6">.col-xs-6</div>
      <div class="col-xs-6">.col-xs-6</div>
    </div>

  </div>
  </body>
</html>

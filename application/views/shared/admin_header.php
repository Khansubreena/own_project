<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>https://kit.fontawesome.com/0b384d5c12.js?<?php echo time(); ?>" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/r-2.2.9/sc-2.0.5/datatables.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/setting.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <title>Dashboard Wateen Travels</title>
  <style>
    .fa-eye,
    .fa-pen-to-square {
      color: blue;
    }

    .fa-trash {
      color: red;
    }
  </style>
</head>

<body>
  <?php
  if ($this->ion_auth->logged_in()) {
  ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">Dashboard</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>blogs/index">Blogs</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<//?php echo base_url() ?>orders/index">Customer Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<//?php echo base_url() ?>shipping_charges/index">Shipping Charges</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>guides/index">Guides</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>pages/index">Pages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>packages/index">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>testimonials/index">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>faqs/index">Faqs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>gallery/index">Gallery</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?//php echo base_url() ?>goals/index">goals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?//php echo base_url() ?>gateway_settings/index">Payment Gateway</a>
          </li> -->

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
            <!-- <li class="nav-item ">
        <a class = "nav-link" href="<?php echo site_url('auth/create_user') ?>">Create New User</a>
      </li> -->
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link text-primary" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  <?php
  } ?>
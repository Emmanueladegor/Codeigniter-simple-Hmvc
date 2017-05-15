<!DOCTYPE html>
<html lang="en">
<head>
  

  <title><?php if ($title)
    { 
      echo $title; 
    }
    else
    { 
      echo ' '; 
    }
    ?> </title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <?php $this->load->view($header) ?> <!-- here your header files would be loaded to this template -->
    <div class="container">
      <?php $this->load->view($content) ?> <!-- here your contents would be loaded to this template -->
    </div>    
    

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
  </html>

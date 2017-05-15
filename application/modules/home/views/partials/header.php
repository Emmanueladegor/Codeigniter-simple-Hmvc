<!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CI HMVC</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>home/about">About</a></li>
          <li><a href="<?php echo base_url();?>home/services">Services</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         
          <li><a href="#">Register</a></li>
          <li class="active"><a href="#">Login <span class="sr-only">(current)</span></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

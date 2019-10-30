<div class="row">
  <div class="col-md-12 p-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/uploads/car1.jpg" style="height: 85vh;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/uploads/car2.jpg" style="height: 85vh;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/uploads/black8.jpg" style="height: 85vh;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </div>
</div>


<div class="row">
	  <?php 
	   if(count($picture_list)){
	  foreach ($picture_list as $pic): ?>
		  <div class="col-md-3 p-4">
		  	<div class="card">
          <form method="post" action="<?php echo base_url('cart/cart')?>">
          <?php //echo form_open_multipart('welcome/dashboard'); ?>
		  		<div class="bg-secondary p-2 card-block" >
		  			<img class="card-img-top" height="200px" src="<?=base_url().'assets/uploads/'.$pic->pic_file;?>">
		  		</div>
		  		<div class="card-body">
		  			<p><?=$pic->pic_title;?></p>
		  			<p><?=$pic->pic_desc;?></p>
		  			<!--button class="btn-info btn-lg btn-block">Add To Cart</button-->
           <button type="submit" class="btn btn-block btn-primary" value="<?=$pic->pic_title;?>" name="item">Add To Cart</button>
		  		</div>
          </form>
		  	</div>
		  </div>
		<?php endforeach ?>
	</div>
	  
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>


<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>


<div class="row justify-content-md-center pt-5">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header text-center display-4">
        ADD PRODUCT
      </div>
      <div class="card-body">
        <?php echo form_open_multipart('upload/file_data');?>

  <div class="form-group">
    <label for="pic_title">Product:</label>
    <input type="text" class="form-control" name="pic_title" value="<?= set_value('pic_title'); ?>" id="pic_title">
  </div>
  <div class="form-group">
    <label for="pic_desc">Price</label>
    <input type="number" name="pic_desc" class="form-control" id="pic_desc"><?= set_value('pic_desc'); ?>
  </div>
  <div class="form-group">
    <label for="pic_file">Upload Image*:</label>
    <input type="file" name="pic_file" class="form-control"  id="pic_file">
  </div>

  <div class="row">
    <div class="col-md-6">
      <a href="<?=base_url('welcome/dashboard');?>" class="btn btn-warning btn-block">Back</a>
    </div>
    <div class="col-md-6">
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    </div>
  </div>
</form>
      </div>
    </div>
  </div>
</div>


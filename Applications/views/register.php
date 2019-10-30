
<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>

<?php print(json_encode($info)); ?>


<div class="row justify-content-md-center pt-5">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header text-center display-4">
        REGISTER ACCOUNT
      </div>
      <div class="card-body">
        <?php echo form_open_multipart('register/file_register');?>

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>" id="name">
  </div>
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" name="uname" class="form-control" id="uname"><?= set_value('uname'); ?>
  </div>
  <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" name="pass" class="form-control"  id="pass">
  </div>

  <div class="row">
    <div class="col-md-6">
      <a href="<?=base_url();?>" class="btn btn-warning btn-block">Cancel</a>
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


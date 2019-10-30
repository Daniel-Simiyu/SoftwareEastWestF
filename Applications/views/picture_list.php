  
<div class="row justify-content-md-end pt-3">
	<div class="col-md-2">
		 <a href="<?=base_url().'upload/form';?>" class="btn btn-outline-primary btn-block">Add Item</a>
	</div>
</div>


  <p class="text-center">INVENTORY</p>

 

  <?php if(count($picture_list)){?>
	  <table class="table table-bordereless table-hover ">
		<thead class="thead-dark">
		  <tr>
			<th scope="col">Product</th>
			<th scope="col">Price</th>
			<th scope="col">Thumbnail</th>
			<th scope="col"></th>
			<th scope="col"></th>
		  </tr>
		</thead>
		<tbody class="table-hover">
		<?php foreach ($picture_list as $pic): ?>
		  <tr>
			<td><?=$pic->pic_title;?></td>
			<td><?=$pic->pic_desc;?></td>
			<td><a href="<?=base_url().'assets/uploads/'.$pic->pic_file;?>" target="_blank"><img src="<?=base_url().'assets/uploads/'.$pic->pic_file;?>" width="100" height="100"></a></td>
			<td><a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit" id="<?=$pic->pic_title;?>">EDIT</a></td>
			<td><a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete" id="<?=$pic->pic_title;?>">DELETE</a></td>
		  </tr>
		<?php endforeach ?>
		</tbody>
	  </table>

	  <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-center text-light" id="exampleModalLabel">EDIT ITEM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php echo form_open_multipart('upload/update_data');?>
        <form>
        	<div class="form-group">
			    <label for="exampleFormControlSelect1">Select Product</label>
			    <select class="form-control" id="" name="item">
			    <?php foreach ($picture_list as $pic): ?>
			      <option value="<?=$pic->pic_title;?>"><?=$pic->pic_title; endforeach?></option>
			    </select>
			  </div>

			 <div class="form-group">
			    <label for="pic_desc">Price</label>
			    <input type="number" name="pic_desc" class="form-control" id="pic_desc">
			  </div>
			  <div class="form-group">
			    <label for="pic_file">Upload Image*:</label>
			    <input type="file" name="pic_file" class="form-control"  id="pic_file">
			  </div>

			 <button type="submit" class="btn btn-primary" name="save">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-center text-light" id="exampleModalLongTitle">DELETE ITEM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php echo form_open_multipart('upload/delete_data');?>
        <form>
        	<div class="form-group">
			    <label for="exampleFormControlSelect1">Select Product</label>
			    <select class="form-control" id="" name="item">
			    <?php foreach ($picture_list as $pic): ?>
			      <option value="<?=$pic->pic_title;?>"><?=$pic->pic_title; endforeach?></option>
			    </select>
			  </div>

			<button type="submit" class="btn btn-primary" name="save">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	  
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>
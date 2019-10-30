
<div class="row justify-content-md-end pt-3 p-4">
   <div class="col-md-2">
       <a href="<?=base_url();?>" class="btn btn-outline-primary btn-block">Shop More</a>
   </div>
</div>


 <table class="table table-bordereless table-hover ">
      <thead class="thead-dark">
        <tr>
         <th scope="col">Product</th>
         <th scope="col">Price</th>
         <th scope="col">Thumbnail</th>
        
        </tr>
      </thead>


      <tbody>
         <?php if($this->cart->total_items() > 0){ foreach ($this->cart->contents() as $item){    ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>

             <td><?php echo '$'.$item["price"].' USD'; ?></td>

            <td>
               <img src="<?=base_url().'assets/uploads/'.$item["pic"];?>" width="100" height="100">
                <?php //$imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                <!--img src="<?php// echo $imageURL; ?>" width="50"/-->
            </td>
            
        </tr>



        <?php } }else{ ?>
        <tr><td colspan="6"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
      </tbody>
   </table>

   <div class="row justify-content-md-center">
      <div class="col-md-6">
         
      <form method="post" action="<?php echo base_url('cart/mpesa')?>">
        <div class="form-group">
          <label for="total">Total </label>
          <input type="number" class="form-control" id="total" value="<?php echo $this->cart->total(); ?>" name="total" readonly>
        </div>
        <div class="form-group">
          <label for="number">Phone Number</label>
          <input type="text" class="form-control" id="number" value="2547" name="number">
        </div>

        <button type="submit" class="btn btn-block btn-success">Pay With Mpesa</button>
      </form>

      </div>
   </div>
    
      

   <div class="row justify-content-md-end pt-3 p-4">
   <div class="col-md-2">
       <a href="<?=base_url().'cart/delete_cart';?>" class="btn btn-outline-primary btn-block">Delete Cart</a>
   </div>
</div>
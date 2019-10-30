

<div class="row justify-content-center pt-5 pb-5 mt-5 mb-5">
  <div class="col-md-6">
     <form method="post" action="<?php echo base_url('cart/mpesa_confirm')?>" class="pt-5 pb-5"> 
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">You Paid</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="total" value="<?php
                 echo $this->cart->total();
                  ?>" readonly="readonly">
               </div>
           </div>

           <div class="form-group row">
                <label class="col-sm-2 col-form-label">M-PESA MESSAGE</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="total" value="<?php echo $data
                  ?>" readonly="readonly">
               </div>
           </div>

           <input type="submit" class="form-control text-center text-white btn btn-success btn-block" value="CONFIRM" name="confirm">
            </div>
            </form>
  </div>
</div>


      
  


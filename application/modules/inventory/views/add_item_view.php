<div class="row">
    <div class="col-md-12">
        <form method="post" action="<?php echo base_url(); ?>inventory/post_item" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Serial Number</label>
                        <input type="number" name="sr_num" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="item_image">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="item_model" class="form-control select2">
                            <?php  echo $item_types;  ?>
                        </select>
                    </div>
                </div>
                <!--div class="col-md-12">
                    <div class="form-group">
                        <label>Maker</label>
                        <select name="maker" class="form-control select2">
                            <?php echo $makers; ?>
                        </select>
                    </div>
                </div-->
                <!--div class="col-md-12">
                    <div class="form-group">
                        <label>Invoice Number</label>
                        <input type="text" name="invoice" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Gold(Grams)</label>
                        <input type="text" name="gold" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Gold(USD)</label>
                        <input type="text" name="gold_rate" class="form-control" value="<?php echo $gold_rate; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Fare</label>
                        <input type="text" name="fare" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block">Save Item</button>
                </div>
            </div-->
        </form>
    </div>
</div>
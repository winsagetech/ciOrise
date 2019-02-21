<script type="text/javascript"> var iid=0;</script>
<?php
if ($this->session->userdata('user') != "admin") {
    ?>

<div class="box">
	<!-- /.box-header -->
	<div class="box-body">
		<table id="table_id" class="table table-striped table-bordered">
			<thead>

				<th>S/N</th>
				<th>Item</th>
				<th>Category</th>
				<th>Image</th>
				<th>Action</th>
			</thead>
			<tbody>
            <?php foreach($items as $item){?>
                <script type="text/javascript">                	
                    if(iid < <?php echo $item->srno;  ?>) iid = <?php echo $item->srno;  ?>;
                </script>

                    <td><?php echo $item->srno;?></td>
				<td><?php echo $item->name;?></td>				
				<td><?php echo $item->category;?></td>
				<td><img class="zoom"
						src="<?php echo base_url() . 'upload/subcats/' . $item->image;?>"
						class ="img-thumbnail" width="50" height="35" /></td>
				<td align="center">
					<button class="btn btn-warning" title="Edit"
						onclick="edit_item_user(<?php echo $item->srno;?>)">
						<i class="fa fa-edit"></i>
					</button>
				</td>
				</tr>
            <?php }?>
            </tbody>
			<tfoot>
				<tr>
					<th>S/N</th>
					<th>Item</th>
					<th>Category</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>

	</div>
	<!-- box body -->
</div>
<!-- box -->

<?php

} else {
    ?>
<div class="row">
	<div class="col-md-2 pull-right">
		<button class="btn btn-warning  pull-right" onclick="add_item()">
			<i class="fa fa-plus-circle"></i> &nbsp; &nbsp; Add New Item
		</button>
	</div>
</div>
<br>

<div class="box">
	<!-- /.box-header -->
	<div class="box-body">
		<table id="table_id" class="table table-striped table-bordered">
			<thead>
				<th>S/N</th>
				<th>Item</th>
				<th>Category</th>
				<th>Image</th>
				<th>Action</th>
			</thead>
			<tbody>
            <?php foreach($items as $item){?>
            	<script type="text/javascript">                	
                    if(iid < <?php echo $item->srno;  ?>) iid = <?php echo $item->srno;  ?>;
                </script>
            
                    <td><?php echo $item->srno;?></td>
				<td><?php echo $item->name;?></td>
				<td><?php echo $item->category;?></td>
				<td><img class="zoom"
						src="<?php echo base_url() . 'upload/subcats/' . $item->image;?>"
						class ="img-thumbnail" width="50" height="35" /></td>
				<td align="center">
					<button class="btn btn-warning" title="Edit"
						onclick="edit_item(<?php echo $item->srno;?>)">
						<i class="fa fa-edit"></i>
					</button>
					<button class="btn btn-danger" title="Delete"
						onclick="delete_item(<?php echo $item->srno;?>)">
						<i class="fa fa-trash"></i>
					</button>
					<button class="btn btn-success" title="Product Gallery"
						onclick="manage_gallery(<?php echo $item->srno;?>)">
						<i class="fa fa-image"></i>
					</button>
				</td>
				</tr>
            <?php }?>
            </tbody>
			<tfoot>
				<tr>
					<th>S/N</th>
					<th>Item</th>
					<th>Category</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>

	</div>
	<!-- box body -->
</div>
<!-- box -->
<?php } ?>

<!-- jQuery 3 -->
<script
	src="<?php echo base_url();  ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script
	src="<?php echo base_url();  ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Data Tables -->
<script
	src="<?php echo base_url();  ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script
	src="<?php echo base_url();  ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script
	src="<?php echo base_url();  ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script
	src="<?php echo base_url();  ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();  ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();  ?>assets/dist/js/demo.js"></script>


<!-- Generate PDF
<script src="<?php echo base_url();  ?>assets/dist/js/png.js"></script>
<script src="<?php echo base_url();  ?>assets/dist/js/zlib.js"></script>
<script src="<?php echo base_url();  ?>assets/dist/js/jspdf.min.js"></script>

<script src="<?php echo base_url();  ?>assets/dist/js/html2canvas.js"></script>
-->



<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable({
            "pageLength": 50});
    } );


    var save_method; //for save method string
    var table;

    function add_item() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        document.getElementById('itemid').value=iid + 1;
    }

     function add_item_user() {
         
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        document.getElementById('itemid').value=iid + 1;
    }

   function edit_item(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('inventory/ajax_edit_item/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="sr_num"]').val(data.item.srno);
                $('[name="item_name"]').val(data.item.name);
                $('[name="item_model"]').val(data.item.category);                
                $('[name="image"]').val(data.image);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Item'); // Set title to Bootstrap modal title
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_item_user(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('inventory/ajax_edit_item/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="sr_num"]').val(data.item.srno);                
                $('[name="item_name"]').val(data.item.name);
                $('[name="item_model"]').val(data.item.category);                   
                $('[name="image"]').val(data.image);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Item'); // Set title to Bootstrap modal title
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }   
   
    function save() {
        var url;
        if(save_method == 'add') {
            url = "<?php echo site_url('inventory/item_add/')?>" //+ diamondCtr + "/" + stoneCtr;
        } else {
            url = "<?php echo site_url('inventory/item_update')?>";
        }
        //console.log('Form Data ' + $('#form').serialize());
        var item_form = document.getElementById("form");
        var disabled = $('#form').find(':input:disabled').removeAttr('disabled');
        $.ajax({
            url: url,
            type: "POST",
            data: new FormData(item_form),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                //if success close modal and reload ajax table
                //saveImage();
                $('#modal_form').modal('hide');
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
                alert('Error adding / update data');
                disabled.attr('disabled','disabled');
            }
        });
    }

    function delete_item(id) {
        if(confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('inventory/item_delete')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });
        }
    }

    function manage_gallery(srno) {
    	window.location.href = "<?php echo site_url('dashboard/gallery'); ?>/" + srno ;
    }

    
</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title">Item Form</h3>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal"
					enctype="multipart/form-data">
					<input type="hidden" value="" name="id" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Serial Number</label>
							<div class="col-md-9">
								<input name="sr_num" placeholder="Serial Number"
									class="form-control" type="number" id="itemid">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Category</label>
							<div class="col-md-9">
								<select name="item_model" class="form-control select2">
                                    <?php echo $category_types; ?>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Name</label>
							<div class="col-md-9">
								<input type="text" name="item_name" class="form-control"
									id="item_name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Image</label>
							<div class="col-md-9">
								<input type="file" name="image" id="image">
							</div>
						</div>


						<hr>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()"
					class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Bootstrap modal -->



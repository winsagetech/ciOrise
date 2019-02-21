<div class = "row">
    <div class="col-md-12">
        <button class="btn btn-primary pull-right" onclick="add_order()"><i class="fa fa-plus-circle"></i> &nbsp; &nbsp; Add Order</button>
    </div>
</div>
<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Orders</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table_id" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Item</th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Address</th>
                <th>Country</th>
                <th>Mobile</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $order){?>
                <tr>
                    <td><?php echo $order->id;?></td>
                    <td><?php echo $order->item;?></td>
                    <td><?php echo $order->date;?></td>
                    <td><?php echo $order->name;?></td>
                    <td><?php echo $order->email;?></td>
                    <td><?php echo $order->company;?></td>
                    <td><?php echo $order->address;?></td>
                    <td><?php echo $order->country;?></td>
                    <td><?php echo $order->mobile;?></td>
                    <td><?php echo $order->status;?></td>
					
                    <td align="center">
                        <button class="btn btn-primary" title="Edit" onclick="edit_order(<?php echo $order->id;?>)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" title="Delete" onclick="delete_order(<?php echo $order->id;?>)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Item</th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Address</th>
                <th>Country</th>
                <th>Mobile</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>



<!-- jQuery 3 -->
<script src="<?php echo base_url();  ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();  ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Data Tables -->
<script src="<?php echo base_url();  ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();  ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();  ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();  ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();  ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();  ?>assets/dist/js/demo.js"></script>


<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    var save_method; //for save method string
    var table;

    function add_order() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
    }

    function edit_order(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('orders/edit_order/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="item"]').val(data.item);
                $('[name="date"]').val(data.date);
                $('[name="name"]').val(data.name);
                $('[name="email"]').val(data.email);
                $('[name="company"]').val(data.company);
                $('[name="address"]').val(data.address);
                $('[name="country"]').val(data.country);
                $('[name="mobile"]').val(data.mobile);
                $('[name="status"]').val(data.status);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Model'); // Set title to Bootstrap modal title
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function save() {
        var url;
        //console.log('save method = ' + save_method);
        if(save_method == 'add') {
            url = "<?php echo site_url('orders/add_order')?>";
        } else {
            url = "<?php echo site_url('orders/edit_order')?>";
        }
        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",            
            data: new FormData(form),
            processData: false,
            contentType: false,
            cache: false,
            async: false,            
            success: function(data) {
                //if success close modal and reload ajax table
                $('#modal_form').modal('hide');
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
                alert('Error adding / update data');
            }
        });
    }

    function delete_order(id) {
        if(confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('orders/delete_order')?>/"+id,
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
</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Order Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                    	<div class="form-group">
							<label class="control-label col-md-3">Serial Number</label>
							<div class="col-md-9">
								<input name="id" placeholder="Serial Number"
									class="form-control" type="number" id="itemid">
							</div>
						</div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Item</label>
                            <div class="col-md-9">
                                <input name="item" placeholder="Item" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date</label>
                            <div class="col-md-9">
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input name="email" placeholder="Email" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Company</label>
                            <div class="col-md-9">
                                <input name="company" placeholder="Comapany" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <input name="address" placeholder="Address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Country</label>
                            <div class="col-md-9">
                                <input name="country" placeholder="Country" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mobile</label>
                            <div class="col-md-9">
                                <input name="mobile" placeholder="Mobile" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-9">
                                <input name="status" placeholder="Status" class="form-control" type="text">
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<div class = "row">
    <div class="col-md-12">
        <button class="btn btn-primary pull-right" onclick="add_category()"><i class="fa fa-plus-circle"></i> &nbsp; &nbsp; Add Category</button>
    </div>
</div>
<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Categories</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table_id" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($models as $model){?>
                <tr>
                    <td><?php echo $model->id;?></td>
                    <td><?php echo $model->category;?></td>
					<td><img class="zoom"
						src="<?php echo base_url() . 'upload/cats/' . $model->image;?>"
						class="img-thumbnail" width="50" height="35" /></td>
                    <td align="center">
                        <button class="btn btn-primary" title="Edit" onclick="edit_category(<?php echo $model->id;?>)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" title="Delete" onclick="delete_category(<?php echo $model->id;?>)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Image</th>
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

    function add_category() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
    }

    function edit_category(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('category/ajax_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="category"]').val(data.category);
                $('[name="sr_num"]').val(data.id);
                $('[name="image"]').val("");
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
            url = "<?php echo site_url('category/category_add')?>";
        } else {
            url = "<?php echo site_url('category/category_update')?>";
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

    function delete_category(id) {
        if(confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('category/category_delete')?>/"+id,
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
                <h3 class="modal-title">category Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                    	<div class="form-group">
							<label class="control-label col-md-3">Serial Number</label>
							<div class="col-md-9">
								<input name="sr_num" placeholder="Serial Number"
									class="form-control" type="number" id="itemid">
							</div>
						</div>
                        <div class="form-group">
                            <label class="control-label col-md-3">category Name</label>
                            <div class="col-md-9">
                                <input name="category" placeholder="Category Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-md-3">Image</label>
							<div class="col-md-9">
								<input type="file" name="image" id="image">
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

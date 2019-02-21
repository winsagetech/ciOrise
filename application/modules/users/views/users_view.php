<div class = "row">
    <div class="col-md-12">
        <button class="btn btn-primary pull-right" onclick="add_user()"><i class="fa fa-plus-circle"></i> &nbsp; &nbsp; Add User</button>
    </div>
</div>
<br>
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table_id" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
               
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user){?>
                <tr>
                    <td><?php echo $user->name;?></td>
                    <td><?php echo $user->address;?></td>
                    <td><?php echo $user->phone;?></td>
                    <td><?php echo $user->email;?></td>

                    <td align="center">
                        <button class="btn btn-primary" title="Edit" onclick="edit_user(<?php echo $user->id;?>)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" title="Delete" onclick="delete_user(<?php echo $user->id;?>)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>

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

    function add_user() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
    }

    function edit_user(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('users/ajax_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="name"]').val(data.name);
                $('[name="address"]').val(data.address);
                $('[name="phone"]').val(data.phone);
                $('[name="email"]').val(data.email);
                $('[name="type"]').val(data.type);
                //$('[name="password"]').val(data.password);
				
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title
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
            url = "<?php echo site_url('users/user_add')?>";
        } else {
            url = "<?php echo site_url('users/user_update')?>";
        }
        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
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

    function delete_user(id) {
        if(confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('users/user_delete')?>/"+id,
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
                <h3 class="modal-title">User Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="User Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">User Address</label>
                            <div class="col-md-9">
                                <input name="address" placeholder="User Address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">User Phone</label>
                            <div class="col-md-9">
                                <input name="phone" placeholder="User Phone" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">User Email</label>
                            <div class="col-md-9">
                                <input name="email" placeholder="User Email" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">User Type</label>
                            <div class="col-md-9">
                                <select name="type" class="form-control select2">
                                    <option value='Dealer'> Dealer </option>
                                    <option value='Employee'> Employee </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
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

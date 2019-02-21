
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table_id" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($subscribers as $subscriber){ ?>
                <tr>
                    <td><?php echo $subscriber->email;?></td>

                    <td align="center">
                        <button class="btn btn-danger" title="Delete" onclick="delete_subscriber(<?php echo $subscriber->id;?>)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
            <tfoot>
            <tr>
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

    function add_subscriber(email) {
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

    function delete_subscriber(email) {
        if(confirm('Are you sure delete this subscriber?')) {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('subscribers/subscriber_delete')?>/"+email,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error deleting subscriber');
                }
            });
        }
    }
</script>

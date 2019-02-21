<div class = "row">

        <button class="btn btn-primary pull-right" style="margin-right: 20px;" onclick="add_blog()"><i class="fa fa-plus-circle"></i> &nbsp; &nbsp; Add Blog</button>


        <a href="<?php echo base_url();  ?>/blog" class="btn btn-primary pull-right" style="margin-right: 20px;">Go to blog page</a>

</div>
<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">List Of Blogs</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table_id" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>title</th>
                  <th>image</th>
                 <th>date</th>
                  <th>data</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($blogs as $blog){?>
                <tr>
                    <td><?php echo $blog->id;?></td>
                    <td><?php echo $blog->title;?></td>
                    <td><img class="zoom"
                    src="<?php echo base_url() . 'upload/' . $blog->image;?>"
                    class="img-thumbnail" width="50" height="35" /></td>
                    <td><?php echo $blog->date;?></td>
                    <td><?php if($blog->data) {echo ("yesss");}?></td>

                    <td align="center">
                        <button class="btn btn-primary" title="Edit" onclick="edit_blog(<?php echo $blog->id;?>)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" title="Delete" onclick="delete_blog(<?php echo $blog->id;?>)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
               <th>title</th>
               <th>image</th>
                 <th>date</th>
                  <th>data</th>
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
<script type="text/javascript" src="<?php echo base_url();  ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>assets/ckfinder/ckfinder.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    var save_method; //for save method string
    var table;

    function add_blog() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $("#edi").val("");
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Blog');
    }

    function edit_blog(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('blog/ajax_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="title"]').val(data.title);
                 $('[name="date"]').val(data.date);
                  $('[name="data"]').val(data.data);
              CKEDITOR.instances['edi'].setData(data.data);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Blog'); // Set title to Bootstrap modal title
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
            url = "<?php echo site_url('blog/blog_add')?>";
        } else {
            url = "<?php echo site_url('blog/blog_update')?>";
        }
         var blog_form = document.getElementById("form");
        for (instance in CKEDITOR.instances) {
       CKEDITOR.instances[instance].updateElement();
    }
        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
             data: new FormData(blog_form),
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

    function delete_blog(id) {
        if(confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('blog/blog_delete')?>/"+id,
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Blog</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-1">Title</label>
                            <div class="col-md-11">
                                <input name="title" placeholder="Title" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-md-1">Image</label>
                            <div class="col-md-11">
                                <input type="file" name="blog_image" id="blog_image">
                            </div>
                        </div>
                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-1">Date</label>
                            <div class="col-md-11">
                                <input name="date" placeholder="Date" class="form-control" type="date">
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea id="edi"  class="ckeditor" rows = "5" cols = "50" name="data" placeholder="data" class="form-control"></textarea>
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

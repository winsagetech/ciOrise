
<br />
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Catalogue Requests</h3>
  </div>
  
  <!-- /.box-header -->
  <div class="box-body">
    <table id="table_requests" class="table table-striped table-bordered">
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
        <?php $rowNum = 1; foreach($orders as $order){?>
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
          <?php $status = $order->status; ?>
          <td>
            <select name="status" class="form-control select2" disabled id="<?php echo 'status_' . $order->id; ?>" >
              <option value="New" <?php if ($status === "New") echo "selected";  ?> >New</option>
              <option value="Processing" <?php if ($status === "Processing") echo "selected";  ?> >Processing</option>
              <option value="Closed" <?php if ($status === "Closed") echo "selected";  ?> >Closed</option>
              <option value="Cancelled" <?php if ($status === "Cancelled") echo "selected";  ?> >Cancelled</option>
              <option value="On Hold" <?php if ($status === "On Hold") echo "selected";  ?> >On Hold</option>
            </select>
          </td>

          <td align="center">
            <button
              class="btn btn-primary"
              title="Edit"
              onclick="enable_disable_order_status(<?php echo $order->id;?>)"
            >
              <i class="fa fa-edit"></i>
            </button>
            <button
              class="btn btn-success"
              title="Save Changes"
              onclick="update_order(<?php echo $order->id;?>)"
            >
              <i class="fa fa-floppy-o"></i>
            </button>
            <button
              class="btn btn-warning"
              title="Add to CRM"
              onclick="add_to_crm(<?php echo $rowNum;?>)"
            >
              <i class="fa fa-id-card"></i>
            </button>
            <button
              class="btn btn-danger"
              title="Delete"
              onclick="delete_order(<?php echo $order->id;?>)"
            >
              <i class="fa fa-trash"></i>
            </button>
          </td>
        </tr>
        <?php $rowNum++; }?>
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
  $(document).ready(function() {
    $("#table_requests").DataTable();
  });

  var table;

  function enable_disable_order_status(id) {
    var status_select = document.getElementById("status_"+id);
    status_select.disabled = !status_select.disabled;
  }
  
  function update_order(id){
      var url = "<?php echo site_url('orders/update_order')?>";
      var status_select = document.getElementById("status_"+id);
      var status = status_select.options[status_select.selectedIndex].value;
      //console.log("ID: " + id + " STATUS: " + status);
      $.ajax({
        url: url,
        type: "POST",
        data: {"id" : id, "status" : status},        
        success: function(data) {          
          location.reload(); // for reload a page
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(errorThrown);
          alert("Error updating status");
        }
      });
  }

  function delete_order(id) {
    if (confirm("Are you sure delete this data?")) {
      // ajax delete data from database
      $.ajax({
        url: "<?php echo site_url('orders/delete_order')?>/" + id,
        type: "POST",
        dataType: "JSON",
        success: function(data) {
          location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert("Error deleting data");
        }
      });
    }
  }

  function add_to_crm(rowNum) {
    var rowCells = document.getElementById("table_requests").rows[rowNum].cells;
    var name = rowCells[3].innerHTML;
    var email = rowCells[4].innerHTML;
    var company = rowCells[5].innerHTML;
    var address = rowCells[6].innerHTML;
    var country = rowCells[7].innerHTML;
    var mobile = rowCells[8].innerHTML;
  
    var url = "<?php echo site_url('crm/user_add')?>";

    $.ajax({
        url: url,
        type: "POST",
        data: {
          "name" : name, 
          "email" : email,
          "company" : company,
          "address" : address,
          "country" : country,
          "mobile" : mobile
        },

        success: function(data) {        
          alert("CRM Updated");  
          location.reload(); // for reload a page
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(errorThrown);
          alert("Some error: May be duplicate entry");
        }
      });
    
  }
</script>

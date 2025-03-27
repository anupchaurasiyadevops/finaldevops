<script type="text/javascript">

$(document).ready(function() {
// Generate a simple captcha
   
    $('#profileform').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
		
			  company_name: {
                row: '.validating_label',
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
			
			
			
			
			
			
			
			
             
        }
    })
	.on('success.form.fv', function(e) {
        // Save the form data via an Ajax request
        e.preventDefault();
		  // Get the form instance
            var $form = $(e.target);

            // Get the FormValidation instance
            //var bv = $form.data('formValidation');
		// var datastring = $("#profileform").serialize();
bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Submitting Your Data Please Wait...</div>' });
		 $.ajax({
                url:"<?=base_url()?>index.php/estudent_account/submit_enrollment_edit",
                type: 'POST',
      			data: new FormData($("#profileform")[0]),
      			processData: false,
      			contentType: false,
            }).done(function(data) {
                if(data=="0")
				{
					bootbox.hideAll();
					//bootbox.alert("Customer Admission submitted successfully");
					document.forms["profileform"].reset(); //and then reset the form values
					$form.formValidation('resetForm', true); 
					bootbox.confirm({
    message: "Profile Updated successfully.",
    buttons: {
        confirm: {
            label: 'Ok',
            className: 'btn-success'
        }
    },
    callback: function (result) {
       var hid=document.getElementById("hid").value;
	//alert(admsn_no);
       //	window.location.href = "<?=base_url()?>index.php/customer/print_registration_slip/"+customer_id;
			window.location.href = "<?=base_url()?>index.php/estudent_account/profile/"+hid;
    }
});

				
$("#load_class").html("<center><img id='checkmark' src='<?=base_url()?>application/libraries/images/load2.gif' /></center>");
					$("#load_class").load("<?=base_url()?>index.php/customer/view_customer////");
				}
            }).fail(function() {
                bootbox.alert("data not send ?");
            });

            // ... Process the result
        });
	
	
});
	function add_process_credit_card()
    {
    $("#load_pccard").load("<?=base_url()?>index.php/estudent_account/add_process_credit_card/");
    }
       function add_swiped_transactions()
    {
    $("#load_swipedtransactions").load("<?=base_url()?>index.php/estudent_account/add_swiped_transactions/");
    }
	
	      function load_classroom_form()
    {
	var id=document.getElementById("session_id").value;
$("#load_student_type").html("<center><img id='checkmark' src='<?=base_url()?>application/libraries/admin/images/load2.gif' /></center>");
    $("#load_classroom_form").load("<?=base_url()?>index.php/eclassroom/load_classroom_form/"+id);
    }
</script>
</script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
	 <script>
  $(function () {
    $("#datatable_active").DataTable();
  });
</script> 
    
	  <section class="content">
          <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab">CLASS LIST</a></li>
              <li><a href="#tab_2" data-toggle="tab">ATTENDANCE</a></li>
              <li class="active"><a href="#tab_3" data-toggle="tab">NEW CLASS</a></li>
            </ul>
            <div class="tab-content">
              
           <div class="tab-pane active" id="tab_1">
               <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
				
<!--                    <i class="fa fa-fw fa-search"></i>-->
              <h3 class="box-title">ENROLLMENT</h3>
               <div class="box-tools pull-right"> 
					   <a href="#tab_3" target="_blank" class="btn btn-success"><i class="fa fa-plus"></i>Add New</a>
                   </div> </div>
            <div class="box-body">
              <table id="datatable_active" class="table table-bordered table-striped">
                      <thead>
                      <tr>
				<th>Date</th>
				<th>Location</th>
				<th>Class ID#</th>
				<th>Start Time</th>
				<th>Product</th>
				<th>Zoom</th>
				<th>Teacher</th>
				<th>Enrollment</th>
				<th>Status</th>
				<th>Details</th>
				<th>Action</th>
				</tr>
                      </thead>
                      
                      <tbody>
				 <tr>
				<td>Date</td>
				<td>Location</td>
				<td>Class ID#</td>
				<td>Start Time</td>
				<td>Product</td>
				<td>Zoom</td>
				<td>Teacher</td>
				<td>Enrollment</td>
				<td>Status</td>
				<td>Details</td>
				<td>Action</td>
				
				</tr>
                      </tbody>  
                    </table> 
				
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
			
		</div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
				  
             <div class="row">
        <div class="col-md-6">

          <div class="box">
            <div class="box-header">
				
<!--                    <i class="fa fa-fw fa-search"></i>-->
              <h3 class="box-title">ENROLLMENT</h3>
              </div>
            <div class="box-body">
              <table id="datatable_active" class="table table-bordered table-striped">
                      <thead>
                      <tr>
				<th>Class#</th>
			    <th>Date</th>
			    <th>Session#</th>
				<th>Attendance</th>
				<th>Select</th>
				</tr>
                      </thead>
                      
                      <tbody>
				 <tr>
				<td>Date</td>
				<td>Location</td>
				<td>Class ID#</td>
				<td>Start Time</td>
					 <td>Product</td>
				
				</tr>
                      </tbody>  
                    </table> 
				
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
			
		</div>
              </div>
               <div class="tab-pane" id="tab_3">
               <div class="row">
        <div class="col-md-5">

          <div class="box">
            
            <div class="box-body">
               <div class="form-group">
                  <div class="col-sm-12">
                   <select class="form-control select2" name="session_id" id="session_id" onChange="load_classroom_form()" style="width: 100%;" >
                   <option value="">SELECT CLASS SESSION TYPE</option>
				   <option value="1">MULTI SESSION TYPE</option>
                   <option value="2">SINGLE SESSION TYPE</option>
                        
                        </select>  
                </select>
                  </div>
                </div>
				<div class="row">
		<div class="col-md-12">
			

		<div id="load_classroom_form">
		
		</div>
								</form>

		</div>
		</div>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
			<div class="col-md-7">
          <!-- Custom Tabs -->
         <div class="alert alert-warning alert-dismissible">
<!--                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
                <h4>Add New Class</h4>
                Select the class session type of single or multi-session class.Click on Learn more button (top right) to view detailed instructions.
              </div>
              <!-- /.tab-pane -->
    
            </div>
		</div>
              </div>
               
              
              </div>
              <!-- /.tab-pane -->
             
            </div>
          </div>
  
 </section>
    <!-- /.content -->
  </div>
	  <div class="modal fade" id="addpccard" tabindex="-1" role="dialog" aria-labelledby="addpccard">
  <div style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="addpccard">Process Credit Card</h4>
      </div>
      <div class="modal-body">
    <div id="load_pccard">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="addswipedtransactions" tabindex="-1" role="dialog" aria-labelledby="addswipedtransactions">
  <div style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="addswipedtransactions">Enter Swiped Transactions</h4>
      </div>
      <div class="modal-body">
    <div id="load_swipedtransactions">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
  </script>
<?php
if ($id == 1) {

?>

	anup / vaibhav
<!--
                	  <div class="form-group">
                  <label class="col-sm-4 control-label">Assign to Location</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" name="location_id" id="location_id" style="width: 100%;" >
                   <option value="">PLEASE SELECT</option>
                        <?php
						foreach($master_location->result() as $mltrow)
						{
						?>
                        <option value="<?=$mltrow->id?>"><?=$mltrow->location?></option>
                        <?php
						}
						?>
                        </select>  
                </select>
                  </div>
                </div>
						<div class="form-group">
                  <label class="col-sm-4 control-label">Assign to Staff</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="staff_id" id="staff_id">
                   <option value="">PLEASE SELECT</option>
			      <?php
						foreach($manage_employee->result() as $merow)
						{
						?>
                        <option value="<?=$merow->employee_id?>"><?=$merow->employee_name?></option>
                        <?php
						}
						?>
                </select>
                  </div>
                </div>
-->
					
						 <div class="form-group">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Middle Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="address" id="address" placeholder="">
                  </div>
                </div>
					 <div class="form-group">
                  <label class="col-sm-4 control-label">City</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="city" id="city" placeholder="">
                  </div>
                </div>
<!--
                <div class="form-group">
                  <label class="col-sm-4 control-label">Province</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" style="width: 100%;" name="province" id="province">
                        <option value="">PLEASE SELECT</option>
			      <?php
						foreach($master_province->result() as $merow)
						{
						?>
                        <option value="<?=$merow->id?>"><?=$merow->province_name?></option>
                        <?php
						}
						?>
					  </select>
                  </div>
                </div>
-->
                 <div class="form-group">
                  <label class="col-sm-4 control-label">Postal Code</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="postal_code" id="postal_code" placeholder="">
                  </div>
                </div>
					
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Home Phone</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="">
                  </div>
                </div>
 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Student Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="s_email" id="s_email" placeholder="">
                  </div>
                </div>
                 		<div class="form-group">
                  <label class="col-sm-4 control-label">Parent Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="parent_name" id="parent_name" placeholder="">
                  </div>
                </div>
	<div class="form-group">
                  <label class="col-sm-4 control-label">Parent Cell Phone</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="parent_cphone" id="parent_cphone" placeholder="">
                  </div>
                </div>
	<div class="form-group">
                  <label class="col-sm-4 control-label">Parent Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="parent_email" id="parent_email" placeholder="">
                  </div>
                </div>
         <div class="form-group">
                  <label class="col-sm-4 control-label">Your Availability</label>
                  <div class="col-sm-8">
                  <input type="checkbox" class="flat-red">
                  Daytime 09:00am-03:00pm
					  <input type="checkbox" class="flat-red">
                  Wednesday after school
                  <input type="checkbox" class="flat-red">
                  Spare blocks during school
					  <input type="checkbox" class="flat-red">
                  Weekends
                   <input type="checkbox" class="flat-red">
                  Evenings
                  
                  </div>
                </div>	
            <div class="form-group">
                  <label class="col-sm-4 control-label">Driving Experience (If any, in months)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="driving_experience" id="driving_experience" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">Additional Comments</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="comments" id="comments" placeholder="">
                  </div>
                </div>
<!--
               	 <div class="form-group">
                  <label class="col-sm-4 control-label">Lead</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" name="lead_id" id="lead_id" style="width: 100%;">
                   <option value="">PLEASE SELECT</option>
					 <?php
						foreach($master_lead->result() as $mlrow)
						{
						?>
                        <option value="<?=$mlrow->id?>"><?=$mlrow->lead_name?></option>
                        <?php
						}
						?>
                </select>
                  </div>
              
                </div>	
-->
               	 <div class="form-group">
                  <label class="col-sm-4 control-label">Date Of Birth</label>
                  <div class="col-sm-8">
                 <input type="text" class="form-control" name="s_dob" id="s_dob" placeholder="DOB" />
						<script>
		$('#s_dob').datepicker({
          			format: 'dd-mm-yyyy',
					todayHighlight: true,
					autoclose: true
      })
      .on('changeDate', function(e) {
          $('#admissionform').formValidation('revalidateField', 's_dob');
      });
					</script>                  </div>
                </div>	
<!--
                	 <div class="form-group">
                  <label class="col-sm-4 control-label">Preferred Pronoun</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="preferred_pronoun" id="preferred_pronoun">
                   <option value="">PLEASE SELECT</option>
					 <?php
						foreach($master_preferred_pronoun->result() as $mpprow)
						{
						?>
                        <option value="<?=$mpprow->id?>"><?=$mpprow->pronoun_name?></option>
                        <?php
						}
						?>
                </select>
                  </div>
                </div>	
-->
                   <div class="form-group">
                  <label class="col-sm-4 control-label">Student Height (Example 5.10 inches)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="s_height" id="s_height" placeholder="">
                  </div>
                </div>
<!--
                 	 <div class="form-group">
                  <label class="col-sm-4 control-label">High School</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="highschool" id="highschool">
                   <option value="">PLEASE SELECT</option>
					  <?php
						foreach($master_high_school->result() as $mhsrow)
						{
						?>
                        <option value="<?=$mhsrow->id?>"><?=$mhsrow->high_school_name?></option>
                        <?php
						}
						?>
                </select>
                  </div>
                </div>	
-->
                      <div class="form-group">
                  <label class="col-sm-4 control-label">Wear Glasses/Contacts</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="wear_glasses" id="wear_glasses">
                  <option>PLEASE SELECT</option>
                  <option value="1">Yes</option>
                  <option value="2">No</option>
                </select>
                  </div>
                </div>	
                 <div class="form-group">
                  <label class="col-sm-4 control-label">DL No.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="DL No." name="dl_no" id="dl_no">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">DL Issued Date</label>
                  <div class="col-sm-8">
                   <input type="text" class="form-control" name="dl_issued_date" id="dl_issued_date" placeholder="DL Issued Date" />
						<script>
		$('#dl_issued_date').datepicker({
          			format: 'dd-mm-yyyy',
					todayHighlight: true,
					autoclose: true
      })
      .on('changeDate', function(e) {
          $('#admissionform').formValidation('revalidateField', 'dl_issued_date');
      });
					</script>  
					</div>
                </div>
                    <div class="form-group">
                  <label class="col-sm-4 control-label">DL Expiration Date</label>
                  <div class="col-sm-8">
                   <input type="text" class="form-control" name="dl_expiration_date" id="dl_expiration_date" placeholder="DL Expiration Date" />
						<script>
		$('#dl_expiration_date').datepicker({
          			format: 'dd-mm-yyyy',
					todayHighlight: true,
					autoclose: true
      })
      .on('changeDate', function(e) {
          $('#admissionform').formValidation('revalidateField', 'permit_expiration_date');
      });
					</script>  
						</div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-4 control-label">Medical Conditions</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" cols="10" name="medical_conditions" id="medical_conditions"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Student Notes</label>
                  <div class="col-sm-8 w-100">
                    <textarea class="form-control" rows="3" cols="10" name="student_notes" id="student_notes"></textarea>
                  </div>
                </div>
<!--
             	 <div class="form-group">
                  <label class="col-sm-4 control-label">Languages Spoken</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="language_spoken" id="language_spoken">
                   <option value="">PLEASE SELECT</option>
					  <?php
						foreach($master_language->result() as $mhsrow)
						{
						?>
                        <option value="<?=$mhsrow->id?>"><?=$mhsrow->language_name?></option>
                        <?php
						}
						?>
                </select>
                  </div>
                </div>	
-->
<!--
               <div class="form-group">
                  <label class="col-sm-4 control-label">License Class</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="license_class" id="license_class">
                   <option value="">PLEASE SELECT</option>
					  <?php
						foreach($master_license_class->result() as $mlcrow)
						{
						?>
                        <option value="<?=$mlcrow->id?>"><?=$mlcrow->license_class?></option>
                        <?php
						}
						?>
                </select>
                  </div>
				    <div class="col-sm-8">
                    <input type="checkbox" class="flat-red" name="mark_checkbox" id="mark_checkbox" value="1">
                   I have read and agreed to Terms and Conditions
                  </div>
                </div>
-->
<!--
               <div class="form-group">
                  <label class="col-sm-4 control-label">Condition Code Choose from the list</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;" name="condition_code" id="condition_code">
                   <option value="">PLEASE SELECT</option>
					   <?php
						foreach($master_condition_code->result() as $mcrow)
						{
						?>
                        <option value="<?=$mcrow->id?>"><?=$mcrow->condition_code?></option>
                        <?php
						}
						?>
                </select>
					
                  </div>
                </div>
-->
                <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-success btn-lg pull-left" name="signup" id="Sign up">Save</button>
                        </div>
                    </div>

<?php  
} elseif ($id ==2) {
  
?>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Student Type</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;">
                   <option value="">PLEASE SELECT</option>
                </select>
                  </div>
                </div>
						<div class="form-group">
                  <label class="col-sm-4 control-label">Assign to Staff</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;">
                   <option value="">PLEASE SELECT</option>
                </select>
                  </div>
                </div>
						  <div class="form-group">
                  <label class="col-sm-4 control-label">Assign to Location</label>
                  <div class="col-sm-8">
                   <select class="form-control select2" style="width: 100%;">
                   <option value="">PLEASE SELECT</option>
                </select>
                  </div>
                </div>
						 <div class="form-group">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Middle Name</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="">
                  </div>
                </div>
						 	 <div class="form-group">
                  <label class="col-sm-4 control-label">City</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="">
                  </div>
                </div>

<?php
}
?>
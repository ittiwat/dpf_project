<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>add Employee</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="pl">
    <meta name="robots" content="all">
    <meta name="copyright" content="Copyright &copy; MultimediaDesign">
    <meta name="description" lang="pl" content="Encore Admin">
    <meta name="keywords" lang="pl" content="Encore Admin, admin theme, admin skin, admin panel">
    <base href="<?=base_url()?>">
	<link href="<?=base_url()?>assets/css/global.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/layout.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/skin/blue.css" rel="stylesheet" type="text/css" />
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color", "#cccccc");
			});
			$("input").blur(function(){
				$(this).css("background-color", "#ffffff");
			});
		});
	</script>
	<link rel="stylesheet" media="all" type="text/css" href="<?=base_url()?>assets/js/calender/jquery-ui.css" />
	<link rel="stylesheet" media="all" type="text/css" href="<?=base_url()?>assets/js/calender/jquery-ui-timepicker-addon.css" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-ui-sliderAccess.js"></script>
	</head>
	<script type="text/javascript">
	$(function(){
		$("#startdate").datepicker({
			dateFormat: 'dd-M-yy'
		});
	});
	</script>
</head>
<body id="pageForm" class="withoutSubnav">
            <div id="main" class="clear">
                <div id="head" class="clear">
				</div>
					<form id="formEditor" name="formEditor" class="mainForm clear"  method="post" <?php echo form_open('index.php/employee/add_employee')?>
                    <fieldset class="clear">
                        <legend><span>Form</span></legend>
                        <div class="field clear">
                            <label for="txtName" class="error">Name :</label>
							<input id="name_eng"name="name_eng" class="text medium" type="text" value=""> 
                        </div>
						<div class="field clear">
                            <label for="txtName" class="error">Lastname : </label>
                            <input id="lastname_eng" name="lastname_eng" class="text medium" type="text" value="">  
                        </div>
						<div class="field clear">
                            <span class="label">Name (ไทย) :</span>
							<input id="name_thai"  name="name_thai"   class="text medium" type="text" value="">    
                        </div>
						<div class="field clear">
                            <span class="label">Lastname (ไทย) :</span>
							<input id="lastname_thai" name="lastname_thai" class="text medium" type="text" value="">    
                        </div>
						<div class="field clear">
                            <span class="label">Identity Card :</span>
							<input id="id_card" name="id_card" class="text medium" type="text" value="">    
                        </div>
						<div class="field clear">
                            <span class="label">House No. :</span>
							<input id="address" name="address"class="text short" type="text" value="">   
                        </div>
						<div class="field clear">
                            <span class="label">Sub-district/ Sub-area :</span>
							<select id="selSingleDropdown" name="amphur" class="medium">
							  <option selected="selected">-- select --</option></center>
								<?php for ( $num2 = 0; $num2 < count($province['district']); $num2++) {?>
                                <option value="<?php echo $province['district'][$num2]->name; ?>"><?php echo $province['district'][$num2]->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
						<div class="field clear">
                            <span class="label">District / Area :</span>
							<select id="selSingleDropdown" name="locality" class="medium">
							  <option selected="selected">-- select --</option></center>
								<?php for ( $num1 = 0; $num1 < count($province['amphur']); $num1++) {?>
                                <option value="<?php echo $province['amphur'][$num1]->name; ?>"><?php echo $province['amphur'][$num1]->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
						<div class="field clear">
                            <label for="selSingleDropdown">Province : <span class="star">*</span></label>
                            <select id="selSingleDropdown" name="province" class="medium">
                                <option selected="selected">-- select --</option>
								<?php for ( $num = 0; $num < count($province['province']); $num++) {?>
                                <option value="<?php echo $province['province'][$num]->name; ?>"><?php echo $province['province'][$num]->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
						
						<div class="field clear">
                            <span class="label">Postal Code :</span>
							<input id="postcode" name="postcode" class="text short" type="text" value="">    
                        </div>
						<div class="field clear">
                            <span class="label">Phone :</span>
							<input id="tel" name="tel" class="text short" type="text" value="">    
                        </div>
						<div class="field clear">
                            <span class="label">Fax :</span>
							<input id="fax"  name="fax" class="text short" type="text" value="">     
                        </div>
						<div class="field clear">
                            <span class="label">Position :</span>
							<input id="position_eng" name="position_eng" class="text short" type="text" value="">     
                        </div>
						<div class="field clear">
                            <span class="label">Position(ไทย) :</span>
							<input id="position_thai" name="position_thai" class="text short" type="text" value="">     
                        </div>
						<div class="field clear">
                            <span class="label">Salary :</span>
							<input id="salary"  name="salary" class="text short" type="text" value="">     
                        </div>
						<div class="field clear">
                            <span class="label">Raise Salary :</span>
							<input id="raise_salary_cus"  name="raisesalary" class="text short" type="text" value="">     
							<label for="selSingleDropdown"><span class="star">&nbsp;(Only apprentice)</span></label>
                        </div>
						<div class="field clear">
                            <span class="label">Start Date. :</span>
							<input id="startdate" name="firstday"class="text short" type="text" value="">   
                        </div>
                    <div class="formActions clear">
                        <input id="btnSubmit" class="button primary" type="submit" value="Save">
                        <input id="btnCancel" class="button secondary" type="reset" value="Cancel">
						<?php echo form_close(); ?>
                    </div>
                </form>
		</div>
		<div id="push">&nbsp;</div>
    </div>
	</body>
</html>
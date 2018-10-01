
<main>
	<div class="container">
	<div class="row">	
		<div class="col-s12 col-m12 col-l12">
			<div class="page-header">
				<h3>Excel-Datei hochladen</h3>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-xs12 col-s8 col-m6 col-l6">
	<div class="panel panel-primary">
		<div class="panel-heading">Hochladen</div>
		<div class="panel-body">
			<?php echo form_open_multipart('admin/upload', array('role'=>'form')); ?>
			<div class="file-field input-field col s6">
				<div class="btn">
					<span>Datei wählen</span>
					<input type="file" name="userfile" id="image"/>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
							<input placeholder="Wie heißt das Blatt?" id="nameExcel_input" name="nameExcel_input" type="text" class="validate">
							<label for="weight_input">Den Namen der Blätter</label>
				</div>
				<div class="col-s6 col-xs12">
					<div id="previewLoad" style='margin-left: 0px; display: none'>
						<img src='<?php echo base_url();?>images/loading.gif'/>
					</div>
					<div class="image_preview">
					<?php
								if(isset($message)): 
									echo "<div class='alert alert-success'>".$message."</div>";
									endif; ?>	
				
					</div>
				</div>
			</div>					
			
			<div class="right">
				<input type="submit" value="Hochladen" class="btn btn-primary"/>
				<a href="#" onclick="reset();" class="btn btn-warning">Zurücksetzen</a>
			</div>
		
			<?php form_close();
			if(isset($errors)):
				echo "<div class='alert alert-danger'>".$errors."</div>";
			endif; ?>			
		</div>

	</div>
	</div>
	</div>
	</div> <!-- end container -->	
	</main>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function readURL(input) {
	$('#previewLoad').show();
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('.image_preview').html('<img src="'+e.target.result+'" alt="'+reader.name+'" class="img-thumbnail" width="304" height="236"/>');
		}
		reader.readAsDataURL(input.files[0]);
		$('#previewLoad').hide();
	}
	}
	
	function reset(){
	$('#image').val("");
	$('.image_preview').html("");
	}
	</script>
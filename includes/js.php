<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready( function (){
		$("#formSubmit").submit( function(submitEvent) {

			var filename = $("input[name=filename]").val();
			var fileType = $("#fileType").val();
			if(filename != "" && filename != null){
				var extension = filename.replace(/^.*\./, '');

				if(extension != "csv"){
					alert("Please choose CSV files only or convert the file to CSV");
					submitEvent.preventDefault();
				}

			}else{
				alert("No file selected");
				submitEvent.preventDefault();
			}

		});
		$('.appendInputGroup').on('click', '.closeBtn', function(){
			$(this).parent('div').remove();
		});
		$('.addColumn').on('click', function(){
			$('.appendInputGroup').append('<div class="input-group"> <input type="text" class="form-control" name="dbColumnName[]"> <input type="text" class="form-control" name="csvColumnName[]"> <input type="text" class="form-control" name="columnType[]"> <button type="button" class="close closeBtn" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>'); 
		});
	});
</script>
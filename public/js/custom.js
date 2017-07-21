var custom = {
	deletePeople:function(){
		$('.delete-people').on('click',function(e){
			var id = $(this).attr('rel');
			e.preventDefault();
			if(confirm("Are you sure!")){
				$('.delete-people-form-'+id).submit();
			}
		});
	},
	deleteInterview:function(){
		$('.delete-interview').on('click',function(e){
			var id = $(this).attr('rel');
			e.preventDefault();
			if(confirm("Are you sure!")){
				$('.delete-interview-form-'+id).submit();
			}
		});	
	},
	initilizeDatepicker:function(){
		$('#datetimepicker').datetimepicker({
			format: 'yyyy-mm-dd hh:ii::ss'
		});
	}
}
$(document).ready(function(){
	custom.deletePeople();
	custom.deleteInterview();
	custom.initilizeDatepicker();
});
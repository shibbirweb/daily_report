
var allTasksName = [];
var allTasksDescription = [];
function getTaskName(id, name){
    allTasksName[id] = [name];    
}
function getTaskDescription(id, description){
    allTasksDescription[id] = [description];    
}
function taskNameDesDelete(id){
    delete allTasksName[id]; 
    delete allTasksDescription[id]; 
}


jQuery(document).ready(function($) {

	/*word export start*/
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    /*word export end*/
    
    /*date picker start*/
      $(function () {
      			//Date picker
                $('#report-date-picker').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
                $("#report-start-time-picker,#shift-end-time-picker,#log-in-time-picker, #log-out-time-picker").each(function(){
				    $(this).datetimepicker({
				        format: 'LT',
				    });
				});
            });
    /*date picker end*/


    /*Repeatable field start*/
	$(function() {
		$(".todos_labels .repeatable").repeatable({
			addTrigger: ".todos_labels .add",
			deleteTrigger: ".todos_labels .delete",
			template: "#todos_labels",
			startWith: 1
		});
	});
    /*Repeatable field end*/


    /*Dynamic Part Start*/



    $("#report-form").on("submit", function(e){
    	e.preventDefault();
    	var name, date, shiftStartTime, shiftEndTime, workArena, reportingTo, logInTime, logOutTime, tasks, comment;

    	name = $("#name").val();
    	date = $("#date").val();
    	shiftStartTime = $("#shift_start").val();
    	shiftEndTime = $("#shift_end").val();
    	workArena = $("#work_arena").val();
    	reportingTo = $("#reporting_to").val();
    	logInTime = $("#log_in_time").val();
    	logOutTime = $("#log_out_time").val();
    	comment = $('#comment').val();

        

    });
    /*Dynamic Part End*/


    });


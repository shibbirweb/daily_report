
var allTasksName = [];
var allTasksDescription = [];
function getTaskName(id, name){
    allTasksName[id] = [name];    
}
function getTaskDescription(id, description){
    allTasksDescription[id] = [description];    
}
function taskNameDesDelete(id){
    allTasksName.splice(id, 1); 
    allTasksDescription.splice(id,1); 
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

        $('#doc_name').text(name);
        $('#doc_date').text(date);
        $('#doc_shift_time').text(shiftStartTime+' to '+shiftEndTime);
        $('#doc_work_arena').text(workArena);
        $('#doc_reporting_to').text(reportingTo);
        $('#doc_comment').text(comment);

        var tableRow = '';
        var i;
        var serial = 1;
        if (allTasksName.length > 0 || allTasksDescription.length > 0) {
            for(i=0; i<allTasksName.length; i++){
                tableRow += '<tr><td style="border: 1px solid black; padding: 3px 5px;">'+ serial++ +'</td><td style="border: 1px solid black; padding: 3px 5px;">'+allTasksName[i]+'</td><td style="border: 1px solid black; padding: 3px 5px;">'+allTasksDescription[i]+'</td></tr>';  
            }
        }else{
            tableRow += '<tr><td style="border: 1px solid black; padding: 3px 5px;" colspan="3" align="center">No task</td></tr>'; 
        }
        


        $('#doc_task_list').html(tableRow);


    });
    /*Dynamic Part End*/


    });


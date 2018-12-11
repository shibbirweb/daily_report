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
    	date = $("#date")
    	alert(name);
    });
    /*Dynamic Part End*/

    });


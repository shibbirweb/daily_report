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

                //Shift start time picker
                $('#report-start-time-picker').datetimepicker({
                    format: 'LT',
                });

                //Shift end time picker
                $('#shift-end-time-picker').datetimepicker({
                    format: 'LT'
                });

                //Log in time picker
                $('#log-in-time-picker').datetimepicker({
                    format: 'LT'
                });

                //Log out time picker
                $('#log-out-time-picker').datetimepicker({
                    format: 'LT'
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

    });


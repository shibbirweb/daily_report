
/*Task initial start*/
var allTasksName = [];
var allTasksDescription = [];

function getTaskName(id, name){
    allTasksName[id] = [name];    
}

function getTaskDescription(id, description){
    allTasksDescription[id] = [description];    
}

function taskNameDesDelete(id){

    if (typeof(allTasksName[id]) != 'undefined') {
        allTasksName.splice(id, 1); 
    }
    
    if (typeof(allTasksDescription[id]) != 'undefined') {
        allTasksDescription.splice(id,1); 
    }
}
/*Task initial end*/

jQuery(document).ready(function($) {

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
    	dynamicDocGenarator();
        $("#page-content").wordExport('Daily Report of '+ $("#name").val()+' date_'+$("#date").val());
    });

    $('#doc_perview').on("click", function(){
        dynamicDocGenarator();
    });



    function dynamicDocGenarator(){
        var name, date, shiftStartTime, shiftEndTime, workArena, reportingTo, logInTime, logOutTime, comment, lateTime, earlyLeaveTime;

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
        $('#doc_login').text(logInTime);
        $('#doc_logout').text(logOutTime);
        if (comment.length > 0) {
            $('#doc_comment_section').css('display', 'block');
            $('#doc_comment').text(comment);
        }else{
            $('#doc_comment_section').css('display', 'none');
        }

        var getLateTime = timeDuration(shiftStartTime, logInTime);
        if (getLateTime.hours() == 0 && getLateTime.minutes() == 0) {
            lateTime = '';
        }else if (getLateTime.hours() >= 0 && getLateTime.minutes() >= 0) {
                var min, hour;
                if(getLateTime.hours() > 1){
                    hour = " hours ";
                }else{
                    hour = " hour ";
                }
                if (getLateTime.minutes() > 1) {
                    min = " minutes";
                }else{
                    min = " minute";
                }

                if(getLateTime.hours() == 0){
                    lateTime = getLateTime.minutes()+min;
                }else if (getLateTime.minutes() == 0) {
                    lateTime = getLateTime.hours()+hour;
                }else {
                    lateTime = getLateTime.hours()+hour+ getLateTime.minutes()+min;
                }
        }else{
            lateTime = '';
        }
        $('#doc_late').text(lateTime);

    // early time
    if (logOutTime == '') {
         earlyLeaveTime = '';
    }else{
            var getEarlyTime = timeDuration(shiftEndTime, logOutTime);
            if (getEarlyTime.hours() < 1 && getEarlyTime.minutes() < 1) {
                var min, hour;
                absHour = Math.abs(getEarlyTime.hours());
                absMin = Math.abs(getEarlyTime.minutes());

                if(absHour > 1){
                    hour = " hours ";
                }else{
                    hour = " hour ";
                }
                if (absMin > 1) {
                    min = " minutes";
                }else{
                    min = " minute";
                }

                if (absHour == 0) {
                    earlyLeaveTime = absMin+min;
                }else if(absMin == 0){
                    earlyLeaveTime = absHour+hour;
                }else{
                    earlyLeaveTime = absHour+hour+ absMin+min;
                }
            }else{
                earlyLeaveTime = '';
            }
        }

        $('#doc_early_leave').text(earlyLeaveTime);

        //task name
        var tableRow = '';
        var i;
        var serial = 1;
        var allTaskNameFiltered = allTasksName.filter(function (el) {
            return el != null;
        });
        var allTasksDescriptionFiltered = allTasksDescription.filter(function (el) {
            return el != null;
        });

        if (allTaskNameFiltered.length > 0 || allTasksDescriptionFiltered.length > 0) {
            for(i=0; i<allTaskNameFiltered.length; i++){
                if (typeof(allTaskNameFiltered[i]) != 'undefined' && typeof(allTasksDescriptionFiltered[i]) != 'undefined') {
                    tableRow += '<tr><td style="border: 1px solid black; padding: 3px 5px;">'+ serial++ +'</td><td style="border: 1px solid black; padding: 3px 5px;">'+allTaskNameFiltered[i]+'</td><td style="border: 1px solid black; padding: 3px 5px;">'+allTasksDescriptionFiltered[i]+'</td></tr>';  
                }   
            }
        }else{
            tableRow += '<tr><td style="border: 1px solid black; padding: 3px 5px;" colspan="3" align="center">No task</td></tr>'; 
        }     

        $('#doc_task_list').html(tableRow);
    }
    /*Dynamic Part End*/


    /*Custom function*/

    function timeDuration(startTime, endTime){
        /**
             * [timeDuration reutn duration value]
             * @param  {[type]} startTime [example: 12:00 PM]
             * @param  {[type]} endTime   [example: 1:00 PM]
             * @return {value}           to get hour value.hours(), to get minute value.minute();
         */
            var initStartRawTime = startTime;
            var initStartAmPm = initStartRawTime.split(" ").slice(-1)[0];
            var initStartTime = initStartRawTime.split(" ")[0];
            var initStartHour = parseInt(initStartTime.split(":")[0]);
            var initStartMin = initStartTime.split(":")[1];

            if(initStartAmPm == 'AM' && initStartHour == 12){
                initStartHour = 0;
            }else if (initStartAmPm == 'PM' && initStartHour < 12) {
                initStartHour +=12;
            }

            var initEndRawTime = endTime;
            var initEndAmPm = initEndRawTime.split(" ").slice(-1)[0];
            var initEndTime = initEndRawTime.split(" ")[0];
            var initEndHour = parseInt(initEndTime.split(":")[0]);
            var initEndMin = initEndTime.split(":")[1];

            if (initEndAmPm == 'AM' && initEndHour == 12) {
                initEndHour = 0;
            }else if (initEndAmPm == 'PM' && initEndHour < 12) {
                initEndHour +=12;
            }


            var start = moment.duration(initStartHour+":"+initStartMin, "HH:mm");
            var end = moment.duration(initEndHour+":"+initEndMin, "HH:mm");
            return diff = end.subtract(start);
            //diff = end.subtract(start);
            // alert(diff.hours()+" hour "+diff.minutes() + " minutes");
        }


    });


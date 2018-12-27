<?php
require_once 'process.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css" />
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" />
   <link rel="stylesheet" type="text/css" href="css/BsMultiSelect.min.css">
	<link rel="stylesheet" href="css/style.css" />
	<title>Daily Report</title>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-8 offset-md-2 form-area">
				<div class="card">
				  <div class="card-header text-center">
				    Daily Report Genarator
				  </div>
				  <div class="card-body">
				    <form method="POST" action="" id="report-form">
					  <div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-10">
                            <select class="form-control" id="name" name="name"  required="1">
                                <option value=""><-- Select Name --></option>
                                <option value="Aminur Islam">Aminur Islam</option>
                                <option value="Babul Ahmed">Babul Ahmed</option>
                                <option value="MD. Shibbir Ahmed">MD. Shibbir Ahmed</option>
                                <option value="Mohamad Yousuf">Mohamad Yousuf</option>
                                <option value="Niloy Dea Sorkar">Niloy Dea Sorkar</option>
                                <option value="Sagor Biswas">Sagor Biswas</option>
                            </select>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="date" class="col-sm-2 col-form-label">Date</label>
					    <div class="col-sm-10">
					      <div class="input-group date" id="report-date-picker" data-target-input="nearest">
		                    <input type="text" id="date" name="date" class="form-control datetimepicker-input" data-target="#report-date-picker"  required="1"/>
		                    <div class="input-group-append" data-target="#report-date-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
		                    </div>
		                </div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="shift_start" class="col-sm-2 col-form-label">Shift</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="report-start-time-picker" data-target-input="nearest">
		                    <input type="text" value="10:00 AM" id="shift_start" name="shift_start" class="form-control datetimepicker-input" data-target="#report-start-time-picker"  required="1"/>
		                    <div class="input-group-append" data-target="#report-start-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
		                 <label for="shift_end"  class="col-sm-2 text-center col-form-label">to</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="shift-end-time-picker" data-target-input="nearest">
		                    <input type="text" id="shift_end" name="shift_end" value="6:00 PM" class="form-control datetimepicker-input" data-target="#shift-end-time-picker"  required="1"/>
		                    <div class="input-group-append" data-target="#shift-end-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
					  </div>

					<div class="form-group row">
					    <label for="work_arena" class="col-sm-2 col-form-label">Work Arena</label>
					    <div class="col-sm-10">
					      <select class="form-control" id="work_arena" name="work_arena"  required="1">
                              <option value=""><-- Select One --></option>
                              <option value="Android Apps Development">Android Apps Development</option>
                              <option value="Content Writer">Content Writer</option>
                              <option value="Web Development">Web Development</option>
                              <option value="Web Design">Web Design</option>
                              <option value="Graphic Design">Graphic Design</option>
						    </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="reporting_to" class="col-sm-2 col-form-label">Reporting to</label>
					    <div class="col-sm-10">
					      <select class="form-control" id="reporting_to" name="reporting_to"  required="1">
                              <option value=""><-- Select One --></option>
                              <option value="Amor Chandra Das">Amor Chandra Das</option>
                              <option value="Araf Karim">Araf Karim</option>
                              <option value="Engr. Rony Debnath">Engr. Rony Debnath</option>
                              <option value="Md Ashraful Islam">Md Ashraful Islam</option>
						    </select>
					    </div>
					</div>

					<hr/>

					<div class="form-group row">
					    <label for="log_in_time" class="col-sm-2 col-form-label">Log in</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="log-in-time-picker" data-target-input="nearest">
		                    <input type="text"  id="log_in_time" name="log_in_time" class="form-control datetimepicker-input" data-target="#log-in-time-picker"  required="1"/>
		                    <div class="input-group-append" data-target="#log-in-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
		                 <label for="log_out_time"  class="col-sm-2 text-center col-form-label">Log out</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="log-out-time-picker" data-target-input="nearest">
		                    <input type="text" id="log_out_time" name="log_out_time" class="form-control datetimepicker-input" data-target="#log-out-time-picker"  required="1"/>
		                    <div class="input-group-append" data-target="#log-out-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="" class="col-sm-2 col-form-label">Task</label>
					    <div class="col-sm-10">
					    	<fieldset class="todos_labels">
						      <div class="repeatable row"></div>
								<div class="form-group mt-1" style="text-align:center;">
									<input id="task_lebel" type="button" value="Add More Task" class="btn btn-success btn-sm add" align="center">
								</div>
							</fieldset>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="comment" class="col-sm-2 col-form-label">Comment</label>
					    <div class="col-sm-10">
					      <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Comment"></textarea>
					    </div>
					  </div>

					  <fieldset class="form-group">
					    <div class="row">
					      <legend class="col-form-label col-sm-2 pt-0">Send Mail?</legend>
					      <div class="col-sm-10">
					        <div class="form-check form-check-inline">
					          <input class="form-check-input" type="radio" name="send_mail_permission" id="email-yes" value="1" checked>
					          <label class="form-check-label" for="email-yes">Yes</label>
					        </div>
					        <div class="form-check form-check-inline">
					          <input class="form-check-input" type="radio" name="send_mail_permission" id="email-no" value="0">
					          <label class="form-check-label" for="email-no">No</label>
					        </div>
					      </div>
					    </div>
					  </fieldset>

					  <fieldset class="form-group" id="email-options" style="display: none;">
					    <div class="row">
					      <label for="send_from_mail" class="col-sm-2 col-form-label">Send From</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" name="send_from_mail" id="send_from_mail" placeholder="Send From" aria-describedby="send-from-email-help-block">
					      <small id="send-from-email-help-block" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Use only gmail address</small>
					    </div>
					    </div>
					    <div class="row mt-2">
					      <label for="send-from-email-password" class="col-sm-2 col-form-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" name="send_from_mail_password" id="send-from-email-password" placeholder="Email password" aria-describedby="send-from-email-password-help-block">
					      <small id="send-from-email-password-help-block" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Your password will not store in server</small>
					    </div>
					    </div>
					    <div class="row mt-2">
					      <label for="send-to-email" class="col-sm-2 col-form-label">Send To </label>
						    <div class="col-sm-10">
						     <select name="mail_to[]" id="email-select" class="form-control"  multiple="multiple" style="display: none;">
								<!-- <option value="ikram.akand@gmail.com">Rayms Raymon</option>
								<option value="bjayanta.me@gmail.com">Jayanta Biswas</option>
								<option value="ronycse9@gmail.com">Engr. Rony Debnath</option>
								<option value="arafkarim@gmail.com">Araf Karim</option>
								<option value="ashrafulbdit@gmail.com">Md Ashraful Islam</option>
								<option value="akhteruzzaman44@gmail.com">Md. Akhteruzzaman</option>
								<option value="rtr.amor@gmail.com">Amor Chandra Das</option> -->
								<option value="shibbirweb@gmail.com">Shibbir Ahmed</option>
								<option value="happycoding@shayzam.net">Happy Coding</option>
							</select>
						    </div>
					    </div>
					    <div class="row mt-2">
					      <label for="send-from-email-subject" class="col-sm-2 col-form-label">Subject</label>
						    <div class="col-sm-10">
						      <input type="text"name="mail_subject" class="form-control" id="send-from-email-subject" placeholder="Email subject">
						    </div>
					    </div>
					    <div class="row mt-2">
					      <label for="email_body" class="col-sm-2 col-form-label">Message Body</label>
						    <div class="col-sm-10">
						      <textarea class="form-control" id="email_body" name="email_body" rows="5" placeholder="Email body"></textarea>
						    </div>
					    </div>
					  </fieldset>

					  <div class="form-group row">
					    <div class="col-sm-10 offset-sm-1 text-center">
					      <button type="submit" class="btn btn-success" id="send-mail" name="send-mail"><i class="fa fa-paper-plane"></i> Send Mail</button>
					      <button type="submit" class="btn btn-primary" name="generate">Generate</button>
					      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#doc-preview-modal"  id="doc_perview">Preview</button>
					    </div>
					  </div>


					</form>

				  </div>
				  <div class="card-footer text-center">&copy; Shibbir Ahmed 2018</div>
				</div>
			</div><!-- end form-area -->
		</div>
<!-- ============================================ -->
<!-- Modal -->
<div class="modal fade" id="doc-preview-modal" tabindex="-1" role="dialog" aria-labelledby="doc-preview-modal-lable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="doc-preview-modal-lable">Daily Report Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
			<div id="page-content" class="doc-area col-md-12">

				<!-- Activity Informaion  Start-->
				<div class="information-section">
					<h3 style="text-align: center; font-family: Calibri, sans-serif">Daily Activity Update</h3>

					<table style="font-family: Calibri, sans-serif; border:1px solid black; border-collapse: collapse;" align="center" width="100%">
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Name</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_name"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Date</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_date"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Shift</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_shift_time"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Work Arena</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_work_arena"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Reporting to</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_reporting_to"></td>
						</tr>
					</table>
				</div>
				<!-- Activity Informaion  End-->

				<!-- Check In/Check Out Start -->
				<div class="check-section">
					<h3 style="text-align: center; font-family: Calibri, sans-serif">Check In / Check Out</h3>
					<table style="font-family: Calibri, sans-serif; border:1px solid black; border-collapse: collapse;" align="center" width="100%">
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Log in</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_login"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Log out</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_logout"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Late</td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_late"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Early leave </td>
							<td style="border: 1px solid black; padding: 3px 5px;" id="doc_early_leave"></td>
						</tr>
					</table>
				</div>
				<!-- Check In/Check Out End -->

				<!-- Activity Log Start -->
				<div class="log-section">
					<h3 style="text-align: center; font-family: Calibri, sans-serif">Daily Activity Log</h3>
					<table style="font-family: Calibri, sans-serif; border:1px solid black; border-collapse: collapse;" align="center" width="100%">
						<thead>
							<th style="border: 1px solid black; padding: 3px 5px; background-color: #4472C4; color: white;">SL</th>
							<th style="border: 1px solid black; padding: 3px 5px; background-color: #4472C4; color: white;">Activity Log</th>
							<th style="border: 1px solid black; padding: 3px 5px; background-color: #4472C4; color: white;">Description</th>
							<th style="border: 1px solid black; padding: 3px 5px; background-color: #4472C4; color: white;">Status</th>
						</thead>
						<tbody id="doc_task_list">	</tbody>
					</table>
				</div>
				<!-- Activity Log End -->

				<!-- Comment Start -->
				<div class="comment-section " id="doc_comment_section">
					<h3 style="text-align: center; font-family: Calibri, sans-serif">Comment</h3>
					<div style="border: 1px solid #000; padding: 5px; font-family: Calibri, sans-serif">
						<p id="doc_comment"></p>
					</div>
				</div>
				<!-- Comment End -->
			</div> <!-- end doc-area -->
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




	</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/tempusdominus-bootstrap-4.min.js"></script>
	<script type="text/javascript" src="js/FileSaver.js"></script>
	<script type="text/javascript" src="js/jquery.wordexport.js"></script>
	<script type="text/javascript" src="js/jquery.repeatable.js"></script>
	<script type="text/javascript" src="js/BsMultiSelect.min.js"></script>
	<script type="text/javascript" src="js/ckeditor.js"></script>

	<script type="text/template" id="todos_labels">
		<div class="col-sm-6   field-group">
			<div class=" mt-1">
	      		<input type="text" class="form-control" id="task-name-{?}" name="task[{?}][name]" placeholder="Task Name" onblur="getTaskName('{?}',this.value);" required="1">
	      	</div>
	      	<div class=" mt-1">
	      		<textarea class="form-control" onblur="getTaskDescription('{?}',this.value);" id="task-description-{?}" name="task[{?}][description]" rows="3" placeholder="Task Description" required="1"></textarea>
	      	</div>
	      	<div class=" mt-1">
	      		<label for="task-status-{?}">Task Status</label><br>
	      		<select class="form-control" id="task-status-{?}" name="task[{?}][status]" required="1" onchange="getTaskStatus('{?}',this.value);">
					<option value="">--Select Status--</option>
					<option value="Pending">Pending</option>
					<option value="Complete">Complete</option>
					<option value="Processing">Processing</option>
	      		</select>
	      	</div>
	      	<div class=" mt-1">
	      		<label for="">Action</label><br>
	  			<input onclick="taskNameDesDelete({?})" type="button" class="btn btn-sm btn-danger span-2 mb-2 delete" value="Remove" />
      	</div>
      </div>
	</script>
	<script>
		$(document).ready(function(){
			$("#email-select").bsMultiSelect();

			ClassicEditor
			    .create( document.querySelector( '#email_body' ), {
			        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList' ],
			        heading: {
			            options: [
			                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
			                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
			                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
			                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
			                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
			                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
			                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
			            ]
			        }
			    } )
			    .then( editor => {
			        console.log( editor );
			    } )
			    .catch( error => {
			        console.error( error );
			    } );
		});
	</script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
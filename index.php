<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css" />
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" />
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

				    <form>
					  <div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" value="MD. Shibbir Ahmed" class="form-control" id="name" name="name" placeholder="Name">
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="date" class="col-sm-2 col-form-label">Date</label>
					    <div class="col-sm-10">
					      <div class="input-group date" id="report-date-picker" data-target-input="nearest">
		                    <input type="text" class="form-control datetimepicker-input" data-target="#report-date-picker"/>
		                    <div class="input-group-append" data-target="#report-date-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
		                    </div>
		                </div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="date" class="col-sm-2 col-form-label">Shift</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="report-start-time-picker" data-target-input="nearest">
		                    <input type="text" value="2:00 PM" class="form-control datetimepicker-input" data-target="#report-start-time-picker"/>
		                    <div class="input-group-append" data-target="#report-start-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
		                 <label  class="col-sm-2 text-center col-form-label">to</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="shift-end-time-picker" data-target-input="nearest">
		                    <input type="text" value="6:00 PM" class="form-control datetimepicker-input" data-target="#shift-end-time-picker"/>
		                    <div class="input-group-append" data-target="#shift-end-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
					  </div>

					<div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Work Arena</label>
					    <div class="col-sm-10">
					      <select class="form-control" id="exampleFormControlSelect1">
						      <option value="Web Development">Web Development</option>
						      <option value="Web Design">Web Design</option>
						      <option value="Graphic Design">Graphic Design</option>
						      <option value="Android Apps Development">Android Apps Development</option>
						    </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Reporting to</label>
					    <div class="col-sm-10">
					      <select class="form-control" id="exampleFormControlSelect1">
						      <option value="Engr. Rony Debnath">Engr. Rony Debnath</option>
						    </select>
					    </div>
					</div>

					<hr/>

					<div class="form-group row">
					    <label for="date" class="col-sm-2 col-form-label">Log in</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="log-in-time-picker" data-target-input="nearest">
		                    <input type="text"  class="form-control datetimepicker-input" data-target="#log-in-time-picker"/>
		                    <div class="input-group-append" data-target="#log-in-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
		                 <label  class="col-sm-2 text-center col-form-label">Log out</label>
					    <div class="col-sm-4">
					      <div class="input-group date" id="log-out-time-picker" data-target-input="nearest">
		                    <input type="text" class="form-control datetimepicker-input" data-target="#log-out-time-picker"/>
		                    <div class="input-group-append" data-target="#log-out-time-picker" data-toggle="datetimepicker">
		                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
		                    </div>
		                </div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Task</label>
					    <div class="col-sm-10">
					    	<fieldset class="todos_labels">
						      <div class="repeatable row"></div>
								<div class="form-group mt-1" style="text-align:center;">
									<input type="button" value="Add More Task" class="btn btn-success btn-sm add" align="center">
								</div>
							</fieldset>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="comment" class="col-sm-2 col-form-label">Comment</label>
					    <div class="col-sm-10">
					      <textarea class="form-control" id="comment" name="commnet" rows="3" placeholder="Comment"></textarea>
					    </div>
					  </div>

					  <div class="form-group row">
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary text-center">Genarate</button>
					    </div>
					  </div>
					</form>

				  </div>
				  <div class="card-footer text-center">&copy; Shibbir Ahmed 2018</div>
				</div>
			</div><!-- end form-area -->
		</div>
<!-- ============================================ -->
<hr/>
		<div class="row">
			<div id="page-content" class="doc-area col-md-12">

				<!-- Activity Informaion  Start-->
				<div class="information-section">
					<h3 style="text-align: center; font-family: Calibri, sans-serif">Daily Activity Update</h3>

					<table style="font-family: Calibri, sans-serif; border:1px solid black; border-collapse: collapse;" align="center" width="100%">
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Name</td>
							<td style="border: 1px solid black; padding: 3px 5px;">MD. Shibbir Ahmed</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Date</td>
							<td style="border: 1px solid black; padding: 3px 5px;">2018-12-09</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Shift</td>
							<td style="border: 1px solid black; padding: 3px 5px;">02:00 PM  to 6:00 PM</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Work Arena</td>
							<td style="border: 1px solid black; padding: 3px 5px;">Web Development</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px; background-color: #BFBFBF;">Reporting to</td>
							<td style="border: 1px solid black; padding: 3px 5px;">Engr. Rony Debnath</td>
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
							<td style="border: 1px solid black; padding: 3px 5px;">01:50 PM</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Log out</td>
							<td style="border: 1px solid black; padding: 3px 5px;">08:00 PM</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Late</td>
							<td style="border: 1px solid black; padding: 3px 5px;"></td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 3px 5px;">Early leave </td>
							<td style="border: 1px solid black; padding: 3px 5px;"></td>
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
						</thead>
						<tbody>
							<tr>
								<td style="border: 1px solid black; padding: 3px 5px;">1</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Study</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Javascript</td>
							</tr>
							<tr>
								<td style="border: 1px solid black; padding: 3px 5px;">1</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Study</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Javascript</td>
							</tr>
							<tr>
								<td style="border: 1px solid black; padding: 3px 5px;">1</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Study</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Javascript</td>
							</tr>
							<tr>
								<td style="border: 1px solid black; padding: 3px 5px;">1</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Study</td>
								<td style="border: 1px solid black; padding: 3px 5px;">Javascript</td>
							</tr>
						</tbody>	
					</table>
				</div>
				<!-- Activity Log End -->	

				<!-- Comment Start -->	
				<div class="comment-section">
					<h3 style="text-align: center; font-family: Calibri, sans-serif">Comment</h3>
					<div style="border: 1px solid #000; padding: 5px; font-family: Calibri, sans-serif">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
					</div>
				</div>
				<!-- Comment End -->	
			</div> <!-- end doc-area -->
		</div>
		

	<a class="btn btn-success btn-sm mt-2 word-export" href="javascript:void(0)"> Export as .doc </a> 
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/tempusdominus-bootstrap-4.min.js"></script>
	<script type="text/javascript" src="js/FileSaver.js"></script>
	<script type="text/javascript" src="js/jquery.wordexport.js"></script>
	<script type="text/javascript" src="js/jquery.repeatable.js"></script>
	
	<script type="text/template" id="todos_labels">
		<div class="col-sm-6   field-group">
			<div class=" mt-1">
	      		<input type="text" class="form-control" id="task-name-{?}" name="task[{?}][name]" placeholder="Task Name">
	      	</div>
	      	<div class=" mt-1">
	      		<textarea class="form-control" id="task-description-{?}" name="task[{?}][description]" rows="3" placeholder="Task Description"></textarea>
	      	</div>
	      	<div class=" mt-1">
	      		<label for="">Action</label><br>
	  			<input type="button" class="btn btn-sm btn-danger span-2 mb-2 delete" value="Remove" />
      	</div>
      </div>
	</script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
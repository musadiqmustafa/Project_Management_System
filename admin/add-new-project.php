<?php
/*
//////////////////// Add New Projects  //////////////////////////
*/
ob_start();
include("../includes/lib-initialize.php");
$title = "Add New Project | " . $syatem_title;
include("../templates/admin-header.php");

if (!($session->isLoggedIn())) {
	redirectTo($url . "index.php");
}
if ($_SESSION['accountStatus'] == 2) {
	redirectTo($url . "client/index.php");
}
if ($_SESSION['accountStatus'] == 3) {
	redirectTo($url . "staff/index.php");
}
//condition check for login
$id = $session->userId; //id of the current logged in user 
$user = User::findById((int)$id); //take the record of current user in an object array 	
$username = $user->firstName;
$email = $user->email;
$account_stat = $user->status;
$settings = settings::findById((int)$id);
$message = "";
if (isset($_POST['add-project'])) {

	$flag = 0; //determines if all posted values are not empty includ

	if ($flag == 0) {
		$project = new Projects();
		$s_idsa = implode(',', $_POST['staff']);
		$project->project_title = $_POST['projectTite'];
		$project->p_id		= (int)NULL;
		$project->c_id = $_POST['client'];
		$project->s_ids = $s_idsa;
		$project->project_desc = $_POST['description'];
		$project->budget = $_POST['budget'];
		$project->status = $_POST['status'];
		$project->archive = $_POST['archive'];
		$project->trash = 0;
		$project->start_time = $_POST['startTime'];
		$project->end_time = $_POST['endTime'];
		$project->revisions = $_POST['revisions'];
		// Check if file was uploaded
		if(isset($_FILES['formfile']) && $_FILES['formfile']['error'] == UPLOAD_ERR_OK) {
			$project->p_id		= (int)NULL;
			// Define upload directory and file name
			$uploadDir = '../admin/file_uploads/';
			$fileName = basename($_FILES['formfile']['name']);
			$uploadFile = $uploadDir . $fileName;
		
			// Move uploaded file to upload directory
			if (move_uploaded_file($_FILES['formfile']['tmp_name'], $uploadFile)) {
				// Set file field to file address in database
				$project->file = $uploadFile;
		
				// Save project to database
				$saveProject = $project->save();
			} else {
				echo "Error uploading file.";
			}
		} else {
			// No file was uploaded, set file field to null
			$project->file = "musadiq";}
		
		
			// Save
		

		

		if ($saveProject) {
			$milestone1 = new Milestone();
			$milestone1->id = null;
			$milestone1->p_id = Milestone::getLastSavedProjectId();
			$milestone1->title = "Musadiq";
			$saveMilestone = $milestone1->save();
			if ($saveMilestone) {
				echo "Milestone saved successfully";
			} else {
				echo "Failed to save milestone";
			}
		} else {
			echo "Failed to save project";
		}

		$notmessagea = $lang['Project has been created successfully!'];
		$notmessageb = $lang['Project could not created at this time. Please Try Again Later . Thanks'];
		if ($saveProject) {
			$project_title = $_POST['projectTite'];
			if (isset($_POST['notifyClient'])) {
				$user = user::findById($_POST['client']);
				// send verification email
				$to  = $user->email;
				$subject = 'New Project Created';
				$variablesArr = array('{USER_NAME}' => $user->firstName, '{SIGNATURE}' => $company_name, '{DASHBOARD_URL}' => $url, '{PROJECT_NAME}' => $project_title);
				$templateHTML = $settings->project_assign_email;
				$message = strtr($templateHTML, $variablesArr);
				// To send HTML mail, the Content-type header must be set (don't change this section)
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				$headers .= 'From: ' . $company_name . ' <' . $system_email . '>' . "\r\n";
				$emailSent = mail($to, $subject, $message, $headers);
				if ($emailSent) {
					$message = "<p class='alert alert-success'><i class='fa fa-check'></i> Project has been created successfully!</p>";
				} else {
					echo "Project has been created successfully! but Error sending the Email please contact site administrator";
				}
				/* Staff Email */
				$all_users = user::findBySql("select * from users");
				foreach ($all_users as $recentlyRegisteredUser) {
					if ($recentlyRegisteredUser->accountStatus == 3) {
						$s_all = $_POST['staff'];
						if (in_array($recentlyRegisteredUser->id, $s_all)) {
							$user = user::findById($recentlyRegisteredUser->id);
							// send verification email
							$to  = $user->email;
							$subject = 'Project assignment notification';
							$variablesArr = array('{USER_NAME}' => $user->firstName, '{SIGNATURE}' => $company_name, '{DASHBOARD_URL}' => $url, '{PROJECT_NAME}' =>  $project_title);
							$templateHTML = $settings->assign_staff_email;
							$message = strtr($templateHTML, $variablesArr);
							// To send HTML mail, the Content-type header must be set (don't change this section)
							$headers  = 'MIME-Version: 1.0' . "\r\n";
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

							$headers .= 'From: ' . $company_name . ' <' . $system_email . '>' . "\r\n";
							$emailSent = mail($to, $subject, $message, $headers);

							if ($emailSent) {
							} else {
								// header("Location:projects.php?message=error_email");
							}
						}
					}
				}
				/* Staff Email End */
			} else {
				$message = "<p class='alert alert-success'><i class='fa fa-check'></i> " . $notmessagea . "</p>";
			}
			// header("Location:projects.php?message=created");
		} else {
			$message = "<p class='alert alert-danger'><i class='fa fa-times'></i> " . $notmessageb . "</p>";
		}
	}
}
?>

<div class="page-container">
	<div class="container-fluid">
		<div class="row row-eq-height">
			<?php include("../templates/sidebar.php"); ?>

			<div class="page-content col-lg-9 col-md-12 col-sm-12 col-lg-push-3">
				<?php include('../templates/top-header.php'); ?>
				<div class="row">
					<div class="col-md-12 margin-top-10 clients">

						<?php if (isset($message) && (!empty($message))) {
							echo $message;
						} ?>
						<div class="add-project">
							<form method="post" action="#" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-3">
										<div class="project-header">
											<h2><?php echo $lang['Create New Project']; ?> </h2>
											<p><?php echo $lang['create a project and assigned the staff here.']; ?></p>
										</div>
										<div class="project-himg">
											<img src="<?php echo $url ?>images/create-a-project.png" class="img-fluid" />
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group">
											<input type="text" name="projectTite" class="form-control" placeholder="<?php echo $lang['Project title']; ?>" required>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="<?php echo $lang['Description']; ?>" name="description"></textarea>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="number" name="budget" placeholder="<?php echo $lang['Budget']; ?> <?php echo $currency_symbol . $recentProject->budget; ?>" class="form-control" required>
													<input type="hidden" name="status" value="0">
													<input type="hidden" name="archive" value="0">
												</div>
												<div class="form-group">
													<input type="text" placeholder="<?php echo $lang['Start Time']; ?>" name="startTime" class="form-control datepicker" required />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<select required class="ui dropdown form-control" name="client">
														<option value=""><?php echo $lang['Select a client']; ?></option>
														<?php $recentlyRegisteredUsers = user::findBySql("select * from users ORDER BY id DESC");
														foreach ($recentlyRegisteredUsers as $recentlyRegisteredUser) {
															if ($recentlyRegisteredUser->accountStatus == 2) {
														?>
																<option value="<?php echo $recentlyRegisteredUser->id; ?>"><?php echo $recentlyRegisteredUser->firstName; ?></option>
														<?php
															}
														} ?>
													</select>
												</div>

												<div class="form-group">
													<input type="text" placeholder="End Time" name="endTime" class="form-control datepicker" required />

												</div>



											</div>

										</div>

										<div class="row">

											<div class="col-xl-6">
												<div class="form-group">
													<input type="number" id='revisions' name="revisions" placeholder="Revisions" class="form-control">


												</div>

											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<input type="number" id='milestones_num' name="milestones" placeholder="Milestones" class="form-control">


												</div>

											</div>
										</div>
										<div class="mb-3">

											<input class="form-control" name='formfile' type="file" id="formFile">

										</div>
										<div> Milestones</div>
										<br>
										<div class="row">
											<div class='col-2'>
												<div class="form-group">
													<input type="text" name="milestoneTitle" class="form-control" placeholder="Milestone Title" required>
												</div>

											</div>
											<div class='col-2'>
												<div class="form-group">
													<input type="text" placeholder="<?php echo $lang['Start Time']; ?>" name="startTime_milestone" class="form-control datepicker" required />
												</div>
											</div>
											<div class='col-2 '>
												<div class="form-group">
													<input type="text" placeholder="End Time" name="endTime_milestone" class="form-control datepicker" required />

												</div>
											</div>
											<div class='col-2'>
												<div class="form-group">
													<input type="text" name="milestoneTitle" class="form-control" placeholder="Milestone budget" required>
												</div>





											</div>
											<div class='col-2'>
												<i id='m-add' style="font-size: 1.5em;margin-top: 17px;" class="fa fa-plus-circle"></i>


											</div>

										</div>
										<div id='add-inputs'></div>


										<div class="col-md-12">
											<div class="form-group">
												<div class="staff-heading">
													<h4><?php echo $lang['Assign staff']; ?></h4>
													<span><?php echo $lang['Choose any team member for this project']; ?></span>
												</div>
												<input type="hidden" name="staff[]" value="1" />
												<input type="hidden" name="staff[]" class="new_val" />
												<select multiple required class="ui fluid dropdown" name="staff[]">
													<option value=""><?php echo $lang['Select Staff members']; ?></option>
													<?php $recentlyRegisteredUsers = user::findBySql("select * from users ORDER BY id DESC");
													foreach ($recentlyRegisteredUsers as $recentlyRegisteredUser) {
														if ($recentlyRegisteredUser->accountStatus == 3) {
													?>
															<option value="<?php echo $recentlyRegisteredUser->id; ?>"><?php echo $recentlyRegisteredUser->firstName; ?></option>
													<?php
														}
													} ?>
												</select>
											</div>
										</div>

										<div class="col-md-12 input-notify">
											<div class="form-group">
												<div class="inline field">
													<div class="ui toggle checkbox custom-btnc">
														<input type="checkbox" name="notifyClient" tabindex="0" class="hidden" />
														<label><?php echo $lang['Email Notification']; ?><br><span><?php echo $lang['Notify to client and staff project has been created']; ?></span></label>
													</div>
													<input type="submit" onclick="add_project()" name="add-project" value="<?php echo $lang['add new project']; ?>" class="btn new-btnblue" />
												</div>
											</div>
										</div>
									</div>
								</div>

						</div>
						</form>
					</div><!--add-project -->

				</div>
			</div><!-- row -->
		</div>
		<div class="clearfix"></div>

	</div>
</div>
</div>
<?php include("../templates/admin-footer.php"); ?>
<script>
	$('.custom-btnc').checkbox();
</script>
<script>
	// Set initial milestone counter to 1
	let milestoneCounter = 1;

	// Add event listener to 'm-add' button
	document.getElementById('m-add').addEventListener('click', function() {

		// Construct unique IDs for each milestone field
		const milestoneTitleId = `milestoneTitle_${milestoneCounter}`;
		const startTimeId = `startTime_${milestoneCounter}`;
		const endTimeId = `endTime_${milestoneCounter}`;
		const milestoneBudgetId = `milestoneBudget_${milestoneCounter}`;

		// Get container element where milestones will be added
		const addMilestones = document.getElementById('add-inputs');

		// Create new milestone element with unique IDs
		const newMilestone = `
    <div class="row">
      <div class='col-2'>
        <div class="form-group">
          <input type="text" id="${milestoneTitleId}" name="milestoneTitle[]" class="form-control" placeholder="Milestone Title" required>
        </div>
      </div>
      <div class='col-2'>
        <div class="form-group">
          <input type="text" placeholder="<?php echo $lang['Start Time']; ?>" id="${startTimeId}" name="startTime[]" class="form-control datepicker" required>
        </div>
      </div>
      <div class='col-2'>
        <div class="form-group">
          <input type="text" placeholder="End Time" id="${endTimeId}" name="endTime[]" class="form-control datepicker" required>
        </div>
      </div>
      <div class='col-2'>
        <div class="form-group">
          <input type="text" id="${milestoneBudgetId}" name="milestoneBudget[]" class="form-control" placeholder="Milestone budget" required>
        </div>
      </div>
      <div class='col-2'>
        <i onclick="minus(this)" style="font-size: 1.5em; margin-top: 17px;" class="fa fa-minus-circle"></i>
      </div>
    </div>
  `;

		// Append new milestone element to container
		addMilestones.innerHTML += newMilestone;

		// Increment milestone counter
		milestoneCounter++;
	});


	function minus(btn) {
		btn.parentElement.parentElement.remove();


	}

	function add_project() {
		console.log('add project');
		var revision = document.getElementById('revisions').value;
		var milestone_num = document.getElementById('milestones_num').value;
		console.log(revision);
		console.log(milestone_num);
		var file = document.getElementById('formFile1');

		var formData = new FormData()
		formData.append('file', file.files[0])
		formData.append('revision', revision)

		formData.append("action", "add_project")
		$.ajax({
			url: 'ajax\functions.php',
			type: 'POST',
			data: formData,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data)
			}
		})






		console.log(revision);


	}
</script>
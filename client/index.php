<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Modal with Chart.js</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Chart.js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Chart.js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>

	<!-- Popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2>Project Progress</h2>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectModal">View Progress</button>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="projectModalLabel">Project Progress</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<canvas id="projectChart"></canvas>
				</div>
			</div>
		</div>
	</div>

	<script>
		var ctx = document.getElementById('projectChart').getContext('2d');
		var projectChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ['Completed', 'Uncompleted'],
				datasets: [{
					label: 'Project Progress',
					data: [80, 20],
					backgroundColor: [
						'rgba(75, 192, 192, 0.5)',
						'rgba(255, 99, 132, 0.5)'
					],
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Project Progress'
				},
				legend: {
					display: true,
					position: 'bottom'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		});
	</script>


<?php
include('../includes/config.php');

	


if ($_POST["action"] == "completed") {
    completed();
}
function completed() {
    global $connect;
    $id = $_POST["project_id"];

    $query_total = "SELECT COUNT(*) AS total FROM milestones WHERE p_id = $id";
    $result_total = mysqli_query($connect, $query_total);
    $total_count = mysqli_fetch_assoc($result_total)['total'];

    $query_completed = "SELECT COUNT(*) AS completed FROM milestones WHERE p_id = $id AND completed = 1";
    $result_completed = mysqli_query($connect, $query_completed);
    $completed_count = mysqli_fetch_assoc($result_completed)['completed'];

    $stats = array(
        $total_count,
        $completed_count,
         $completed_count
    );

    echo json_encode($stats);
}


?>  

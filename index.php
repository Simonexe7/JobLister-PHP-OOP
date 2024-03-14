<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if ($category) {
    $template->jobs = $job->getJobByCategory($category);
    $template->title = "Jobs In " . $job->getCategory($category)->name;
} else {
    $template->jobs = $job->getAllJobs();
    $template->title = "Latest Jobs";
}

if (isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->deleteJob($del_id)){
        redirect('index.php', 'Job Deleted', 'success');
    } else {
        redirect('index.php', 'Job Not Deleted', 'error');
    }
}

    $template->categories = $job->getCategories();

echo $template;
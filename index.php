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
$template->categories = $job->getCategories();

echo $template;
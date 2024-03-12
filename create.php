<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/create-page.php');

if (isset($_POST['submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category_id'];
    $data['location'] = $_POST['location'];
    $data['description'] = $_POST['description'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if ($job->createJob($data)) {
        redirect('index.php', 'Your job has been listed!', 'success');
    } else {
        redirect('index.php', 'Something went wrong!', 'error');
    }
}

$template->categories = $job->getCategories();

echo $template;
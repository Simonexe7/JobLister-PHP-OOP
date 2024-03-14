<?php include 'inc/header.php'; ?>
<div class="container my-5">
    <h3 class="pw-bold fs-1">
        <?php echo $jobs->job_title ?>
    </h3>
    <small>Posted By
        <?php echo $jobs->contact_user ?> on
        <?php echo $jobs->post_date ?>
    </small>
    <p class="lead mt-3">
        <?php echo $jobs->description ?>
    </p>
    <ul class="list-group">
        <li class="list-group-item">Company :
            <?php echo $jobs->company ?>
        </li>
        <li class="list-group-item">Salary :
            <?php echo $jobs->salary ?>
        </li>
        <li class="list-group-item">Contact Email :
            <?php echo $jobs->contact_email ?>
        </li>
    </ul>
    <a href="index.php" class="btn btn-primary px-4 mt-5" type="button">
        Go Back
    </a>
    <a href="edit.php?id=<?php echo $jobs->id ?>" class="btn btn-secondary px-4 mt-5" type="button">
        Edit
    </a>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/header.php'; ?>
<div class="container my-5">
    <h1 class="mb-5">Create List</h1>
    <form class="row g-3" method="POST">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Company</label>
            <input type="text" class="form-control" id="inputEmail4" name="company">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option value="0">Select Categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id ?>">
                        <?php echo $category->name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="inputAddress" name="job_title">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Location</label>
            <input type="text" class="form-control" id="inputAddress" name="location">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="inputCity" name="description"></textarea>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Salary</label>
            <input type="text" class="form-control" id="inputState" name="salary">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Contact User</label>
            <input type="text" class="form-control" id="inputAddress2" name="contact_user">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Contact Email</label>
            <input type="text" class="form-control" id="inputAddress2" name="contact_email">
        </div>
        <div class="col-12 mt-5">
            <a href="index.php" class="btn btn-danger">Cancel</a>
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/header.php'; ?>
<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100">
      <use xlink:href="#bootstrap" />
    </svg>
    <h1 class="text-body-emphasis">
      <?php echo SITE_TITLE ?>
    </h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      This is a custom jumbotron featuring an SVG image at the top, some longer text that wraps early thanks to a
      responsive <code>.col-*</code> class, and a customized call to action.
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      <a href="create.php" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill"
        type="button">
        Create Listing
        <svg class="bi ms-2" width="24" height="24">
          <use xlink:href="#arrow-right-short" />
        </svg>
      </a>
      <a href="index.php" class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
        Home Page
      </a>
    </div>
  </div>
</div>

<div class="container my-5">
  <form action="" class="p-5 d-flex bg-body-tertiary rounded-3 justify-content-between">
    <label for="" class="fs-4 fw-bold">Categories</label>
    <div class="col-8">
      <select class="form-select" aria-label="Default select example">
        <option value="0">Select Categories</option>
        <?php foreach ($categories as $category): ?>
          <option value="<?php $category->id ?>">
            <?php echo $category->name ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
  </form>
</div>

<div class="b-example-divider"></div>

<?php foreach ($jobs as $job): ?>
  <div class="container my-5">
    <div class="p-5 text-start d-flex flex-row bg-body-tertiary rounded-3 justify-content-between">
      <div class="d-flex flex-column">
        <h1 class="text-body-emphasis">
          <?php echo $job->job_title; ?>
        </h1>
        <p class="lead mt-4">
          <?php echo $job->description; ?>
        </p>
      </div>
      <button class="align-items-center btn btn-primary btn-lg px-4" type="button">
        View
      </button>
    </div>
  </div>
<?php endforeach; ?>

<div class="b-example-divider"></div>

<?php include 'inc/footer.php'; ?>
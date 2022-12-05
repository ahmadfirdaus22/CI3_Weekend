<div class="container">
    <br>
    <?php echo validation_errors(); ?>
    <form action="" method="POST">
    <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="month" class="form-label">Month</label>
    <input type="text" class="form-control" id="month" name="month">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text"  autocomplete="off" class="form-control" id="price" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
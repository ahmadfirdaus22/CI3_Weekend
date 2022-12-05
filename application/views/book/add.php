<div class="container">
    <br>
    <?php echo validation_errors(); ?>
    <form action=""method="POST">
    <div class="mb-3">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" autocomplete="off" name="isbn" class="form-control" id="isbn" aria-describedby="synopsisHelp">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="synopsis" class="form-label">Synopsis</label>
    <input type="text" class="form-control" id="synopsis" name="synopsis">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text"  autocomplete="off" class="form-control" id="author" name="author">
  </div>
  <div class="mb-3">
    <label for="publisher" class="form-label">Publisher</label>
    <input type="text" class="form-control" id="publisher" name="publisher">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" id="category" name="category">
  </div>
  <div class="mb-3">
    <label for="languange" class="form-label">Languange</label>
    <input type="text" class="form-control" id="languange" name="languange">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST">
<div class="mb-3">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" hidden value="<?= $data->id ?>" name="id">
    <input type="text" autocomplete="off" name="isbn" value="<?= $data->isbn ?> " class="form-control" id="isbn" aria-describedby="synopsisHelp">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" value="<?= $data->title ?> " name="title">
  </div>
  <div class="mb-3">
    <label for="synopsis" class="form-label">Synopsis</label>
    <input type="text" class="form-control" id="synopsis" value="<?= $data->synopsis ?> " name="synopsis">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text"  autocomplete="off" class="form-control" value="<?= $data->author ?> " id="author" name="author">
  </div>
  <div class="mb-3">
    <label for="publisher" class="form-label">Publisher</label>
    <input type="text" class="form-control" id="publisher" value="<?= $data->publisher ?> " name="publisher">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" id="category" value="<?= $data->category ?> " name="category">
  </div>
  <div class="mb-3">
    <label for="languange" class="form-label">Languange</label>
    <input type="text" class="form-control" value=" <?= $data->languange ?> " id="languange" name="languange">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
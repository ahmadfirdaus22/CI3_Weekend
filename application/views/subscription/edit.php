<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" hidden value="<?= $data->id ?>" name="id">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" value="<?= $data->title ?> " name="title">
  </div>
  <div class="mb-3">
    <label for="month" class="form-label">Month</label>
    <input type="text" class="form-control" id="month" value="<?= $data->month ?> " name="month">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text"  autocomplete="off" class="form-control" value="<?= $data->price ?> " id="price" name="price">
  </div>
  <div class="mb-3">
    <label for="isActive" class="form-label">isActive</label>
    <select name="is_Active" id="" class="form-select">
        <option value="1" <?= $data->is_Active=='1'? 'selected':'' ?> >YES</option>
        <option value="0" <?= $data->is_Active=='0'? 'selected':'' ?> >NO</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
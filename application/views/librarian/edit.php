<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" hidden name="id" value="<?= $data->id ?>">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" value="<?= $data->username ?>" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="<?= $data->name ?>" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" value="<?= $data->email ?>" name="email">
  </div>
  <div class="mb-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="file" class="form-control" id="avatar" name="avatar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
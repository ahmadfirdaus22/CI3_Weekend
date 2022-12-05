<div class="container">
    <br>
    <?php echo validation_errors(); ?>
    <form action="" enctype="multipart/form-data" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" autocomplete="off" name="username" class="form-control" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  autocomplete="off" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="file" class="form-control" id="avatar" name="avatar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<div class="container">
    <br>
    <?php echo validation_errors(); ?>
    <form action=""  method="POST">
    <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="text" autocomplete="off" name="nik" class="form-control" id="nik" aria-describedby="phoneHelp">
  </div>
  <div class="mb-3">
    <label for="full_name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="full_name" name="full_name">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text"  autocomplete="off" class="form-control" id="address" name="address">
  </div>
  <div class="mb-3">
    <label for="born_place" class="form-label">Born Place</label>
    <input type="text" class="form-control" id="born_place" name="born_place">
  </div>
  <div class="mb-3">
    <label for="born_date" class="form-label">Born Date</label>
    <input type="date" class="form-control" id="born_date" name="born_date">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select name="gender" class="form-select" id="">
        <option value="L" >Man</option>
        <option value="P" >Woman</option>
        <option value="O" >Other</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" id="country" name="country">
  </div>
  <div class="mb-3">
    <label for="nationality" class="form-label">Nationality</label>
    <select name="nationality" class="form-select" id="">
        <option value="WNI" >WNI</option>
        <option value="WNA" >WNA</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
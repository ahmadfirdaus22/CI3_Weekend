<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="text" hidden value="<?= $data->id ?>" name="id">
    <input type="text" autocomplete="off" name="nik" value="<?= $data->nik ?> " class="form-control" id="nik" aria-describedby="phoneHelp">
  </div>
  <div class="mb-3">
    <label for="full_name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="full_name" value="<?= $data->full_name ?> " name="full_name">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" value="<?= $data->phone ?> " name="phone">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text"  autocomplete="off" class="form-control" value="<?= $data->address ?> " id="address" name="address">
  </div>
  <div class="mb-3">
    <label for="born_place" class="form-label">Born Place</label>
    <input type="text" class="form-control" id="born_place" value="<?= $data->born_place ?> " name="born_place">
  </div>
  <div class="mb-3">
    <label for="born_date" class="form-label">Born Date</label>
    <input type="date" class="form-control" id="born_date" value="<?= $data->born_date ?> " name="born_date">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select name="gender" id="" class="form-select">
        <option value="L" <?= $data->gender=='L'? 'selected' : ' '?> >Man</option>
        <option value="P" <?= $data->gender=='P'? 'selected' : ' '?> >Woman</option>
        <option value="O" <?= $data->gender=='O'? 'selected' : ' '?> >Other</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" value=" <?= $data->country ?> " id="country" name="country">
  </div>
  <div class="mb-3">
    <label for="nationality" class="form-label">Nationality</label>
    <select name="nationality" id="" class="form-select">
        <option value="WNI" <?= $data->nationality=='WNI'? 'selected':'' ?> >WNI</option>
        <option value="WNA" <?= $data->nationality=='WNA'? 'selected':'' ?> >WNA</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="isActive" class="form-label">isActive</label>
    <select name="isActive" id="" class="form-select">
        <option value="1" <?= $data->isActive=='1'? 'selected':'' ?> >YES</option>
        <option value="0" <?= $data->isActive=='0'? 'selected':'' ?> >NO</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
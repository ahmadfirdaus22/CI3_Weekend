<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST">
<div class="mb-3">
    <label for="name" class="form-label">Member Name</label>
    <select class="form-select" name="name" id="">
        <optgroup>
                 <?php foreach($data2 as $row){?>
                <option value="<?= $row->id?>" <?php echo $row->id == $data1->member_id ? 'selected' :''; ?>><?= $row->full_name ?></option>
                <?php } ?>
            </optgroup>
    </select>
  </div>
  <div class="mb-3">
    <label for="note" class="form-label">Note</label>
    <input type="text" class="form-control" value=" <?= $data1->note ?> " id="note" name="note">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
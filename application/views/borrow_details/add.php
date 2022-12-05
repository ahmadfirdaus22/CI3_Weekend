<div class="container">
    <br>
    <?php echo validation_errors(); ?>
    <form action=""method="POST">
    <select class="form-select" name="book" id="">
        <optgroup>
                 <?php foreach($data1 as $row){?>
                <option value="<?= $row->id ?>"><?= $row->title ?></option>
                <?php } ?>
            </optgroup>
    </select> 
    <select class="form-select" name="name" id="">
        <optgroup>
                 <?php foreach($data2 as $row){?>
                <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                <?php } ?>
            </optgroup>
    </select>
  <div class="mb-3">
    <label for="note" class="form-label">Note</label>
    <input type="text" class="form-control" id="note" name="note">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
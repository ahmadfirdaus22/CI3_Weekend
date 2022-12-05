<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST">
<select class="form-select" name="name" id="">
        <optgroup>
                 <?php foreach($data2 as $row){?>
                <option value="<?= $row->id?>" <?php echo $row->id == $data1->member_id ? 'selected' :''; ?>><?= $row->full_name ?></option>
                <?php } ?>
            </optgroup>
    </select>
    <select class="form-select" name="name" id="">
        <optgroup>
                 <?php foreach($data2 as $row){?>
                <option value="<?= $row->id?>" <?php echo $row->id == $data1->member_id ? 'selected' :''; ?>><?= $row->full_name ?></option>
                <?php } ?>
            </optgroup>
    </select>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
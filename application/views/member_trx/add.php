<div class="container">
    <br>
    <?php echo validation_errors(); ?>
    <form action=""  method="POST">
    <div class="mb-3">
    <label for="name" class="form-label">Member Name</label>
    <select class="form-select" name="name" id="">
        <optgroup>
                 <?php foreach($data1 as $row){?>
                <option value="<?= $row->id ?>"><?= $row->full_name ?></option>
                <?php } ?>
            </optgroup>
    </select>
  </div>
  <div class="mb-3">
    <label for="full_name" class="form-label">Subscription Title</label>
    <select class="form-select" name="title" id="">
        <?php foreach($data2 as $row){?>
            <option value="<?= $row->id ?>"><?= $row->title ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="mb-3">
      <label for="active_at" class="form-label">Active At</label>
      <input type="date" class="form-control" id="active_at" name="active_at">
    </div>
    <div class="mb-3">
      <label for="expire_at" class="form-label">Expire at</label>
      <input type="date" class="form-control" id="expire_at" name="expire_at">
    </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" class="form-select" id="">
            <option value="paid">Paid</option>
            <option value="unpaid">UnPaid</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="total_order" class="form-label">Total Order</label>
    <input type="text" class="form-control" id="total_order" name="total_order">
  </div>
  <div class="mb-3">
    <label for="note" class="form-label">Note</label>
    <input type="text" class="form-control" id="note" name="note">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
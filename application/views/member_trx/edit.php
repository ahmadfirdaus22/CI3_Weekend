<div class="container">
<?php echo validation_errors(); ?>
<form action="" method="POST" enctype="multipart/form-data">
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
    <label for="title" class="form-label">Subscription Title</label>
    <select class="form-select" name="title" id="">
        <?php foreach($data3 as $row){?>
            <option value="<?= $row->id ?>" <?php echo $row->id == $data1->subs_id ? 'selected':''; ?>><?= $row->title ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="mb-3">
      <label for="active_at" class="form-label">Active At</label>
      <input type="date" value="<?= $data1->active_at ?>" class="form-control" id="active_at" name="active_at">
    </div>
    <div class="mb-3">
      <label for="expire_at" class="form-label">Expire at</label>
      <input type="date" value="<?= $data1->expire_at ?>" class="form-control" id="expire_at" name="expire_at">
    </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" class="form-select" id="">
            <option value="paid" <?= $data1->status=='paid'?'selected':''; ?> >Paid</option>
            <option value="unpaid" <?= $data1->status=='unpaid'?'selected':''; ?>>UnPaid</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="total_order" class="form-label">Total Order</label>
    <input type="text" value=" <?= $data1->total_order?>" class="form-control" id="total_order" name="total_order">
  </div>
  <div class="mb-3">
    <label for="note" class="form-label">Note</label>
    <input type="text" value="<?= $data1->note ?>" class="form-control" id="note" name="note">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
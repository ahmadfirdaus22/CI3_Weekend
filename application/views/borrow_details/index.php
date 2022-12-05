<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("borrow_details/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Book Title</td>
                <td>Borrow id</td>
                <td>Deadline</td>
                <td>Note</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($borrow_details as $row){?>
                <tr>
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <td><?= $no++?></td>
                    <td><?= $row->book?></td>
                    <td><?= $row->borrow_id ?></td>
                    <td><?= $row->deadline_at?></td>
                    <td><?= $row->note?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td><a  class="btn btn-sm btn-danger" href="<?= base_url("borrow_details/delete/$row->id") ?>" style="padding-right:2px;">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("borrow_details/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

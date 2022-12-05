<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("borrow_books/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Name</td>
                <td>Transaction Date</td>
                <td>Note</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($borrow_books as $row){?>
                <tr style="text-align: center;">
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <td><?= $no++?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->trx_date?></td>
                    <td><?= $row->note?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td><a  class="btn btn-sm btn-danger" href="<?= base_url("borrow_books/delete/$row->id") ?>" style="padding-right:2px;">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("borrow_books/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

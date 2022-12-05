<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("subscription/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Title</td>
                <td>Month</td>
                <td>Price</td>
                <td>Is Active</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($subscription as $row){?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->title?></td>
                    <td><?= $row->month?></td>
                    <td><?= $row->price?></td>
                    <td><?php echo $row->is_Active==1 ?"Yes":"No";?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td ><a  class="btn btn-sm btn-danger" style="color:black; text-decoration:none;" href="<?= base_url("subscription/delete/$row->id") ?>">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("subscription/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

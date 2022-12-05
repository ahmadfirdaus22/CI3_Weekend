<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("member_trx/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Member Name</td>
                <td>Subscription Title</td>
                <td>Transaction Date</td>
                <td>Active At</td>
                <td>Expire At</td>
                <td>Status</td>
                <td>Total Order</td>
                <td>Note</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($member_trx as $row){?>
                <tr>
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <td><?= $no++?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->title?></td>
                    <td><?= $row->trx_date?></td>
                    <td><?= $row->active_at?></td>
                    <td><?= $row->expire_at?></td>
                    <td><?php if($row->status=='paid'){echo "Paid";}else{echo "UnPaid";}?></td>
                    <td><?= $row->total_order?></td>
                    <td><?= $row->note?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td ><a  class="btn btn-sm btn-danger" style="color:black; text-decoration:none;" href="<?= base_url("member_trx/delete/$row->id") ?>">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("member_trx/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

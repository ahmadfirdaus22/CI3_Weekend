<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("librarian/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Username</td>
                <td>Name</td>
                <td>Email</td>
                <td>Avatar</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($librarian as $row){?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $row->username?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->email?></td>
                    <td><img width="50" src="<?= base_url('assets/profile/').$row->avatar ?>"></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td ><a  class="btn btn-sm btn-danger" style="color:black; text-decoration:none;" href="<?= base_url("librarian/delete/$row->id") ?>">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("librarian/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

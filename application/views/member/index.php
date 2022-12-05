<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("member/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
            <td>NO</td>
                <td>NIK</td>
                <td>Name</td>
                <td>Phone</td>
                <td>Addres</td>
                <td>Born Place</td>
                <td>Born Date</td>
                <td>Gender</td>
                <td>Country</td>
                <td>Nationality</td>
                <td>Status</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($member as $row){?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nik?></td>
                    <td><?= $row->full_name?></td>
                    <td><?= $row->phone?></td>
                    <td><?= $row->address?></td>
                    <td><?= $row->born_place?></td>
                    <td><?= $row->born_date?></td>
                    <td><?php if($row->gender=='L'){echo "Man";}else if($row->gender=='P'){echo "Woman";}else{echo "Other";}?></td>
                    <td><?= $row->country?></td>
                    <td><?= $row->nationality?></td>
                    <td><?php echo $row->isActive==1 ?'YES': 'NO'; ?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td ><a  class="btn btn-sm btn-danger" style="color:black; text-decoration:none;" href="<?= base_url("member/delete/$row->id") ?>">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("member/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

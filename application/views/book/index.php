<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= base_url("book/add") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>ISBN</td>
                <td>Title</td>
                <td>Synopsis</td>
                <td>Author</td>
                <td>Publisher</td>
                <td>Category</td>
                <td>Languange</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($book as $row){?>
                <tr>
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <td><?= $no++?></td>
                    <td><?= $row->isbn?></td>
                    <td><?= $row->title?></td>
                    <td><?= $row->synopsis?></td>
                    <td><?= $row->author?></td>
                    <td><?= $row->publisher?></td>
                    <td><?= $row->category?></td>
                    <td><?= $row->languange?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td><a  class="btn btn-sm btn-danger" href="<?= base_url("book/delete/$row->id") ?>" style="padding-right:2px;">Delete</a>&nbsp;<a class="btn btn-sm btn-info" style="color:black; text-decoration:none;" href="<?= base_url("book/edit/$row->id")?>">Update</a></td>
                </tr>
            </form>
                <?php } ?>

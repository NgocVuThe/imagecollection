<div class="table-responsive">
    <table class = "table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Register</th>
                <th>Name Collection</th>
                <th><a href="create" class ="btn btn-sm btn-success btn-block">Create</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emps as $key => $emp):?>
                <tr>
                    <td><?= $key + 1;?> </td>
                    <td><a href="/imagecollection/public/detail?id=<?=$emp->id;?>"><?= $emp->name;?></a></td>
                    <td><?= $emp->address;?> </td>
                    <td><?= $emp->regist_num;?> </td>
                    <td><?= $emp->namecollection;?> </td>
                    <td>
                        <a href="/imagecollection/public/delete?id=<?=$emp->id?>" class ="btn btn-sm btn-danger btn-block">Delete</a>
                        <a href="/imagecollection/public/edit?id=<?=$emp->id?>" class = "btn btn-sm btn-primary btn-block">Edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>    
    </table>
</div>
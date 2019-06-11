<section>
    <table class="table table-light table-bordered">
        <tr>
            <th>Tên Thí Sinh</th>
            <td><?=$emp->name;?></td>
        </tr>
        <tr>
            <th>Địa Chỉ</th>
            <td><?=$emp->address;?></td>
        </tr>
        <tr>
            <th>Tên Bộ Sưu Tập</th>
            <td><?=$emp->namecollection;?></td>
        </tr>
        <tr>
            <th>Mã Số Bộ Sưu Tập</th>
            <td><?=$emp->regist_num;?></td>
        </tr>
        <tr>
            <th>Miêu Tả</th>
            <td><?=$emp->description;?></td>
        </tr>
        <tr class = "avatar">
            <th>Ảnh Đại Diện</th>
            <td><img src="<?=$emp->avatar;?>" alt="" width="100px"></td>
        </tr>
    </table>

    <div class="gallery">
    <h6>Ảnh BST</h6>
        <?php foreach ($gallerys as $key => $gallery):?>
            <img src="<?=$gallery->img_url;?>" alt="" width="200px">
        <?php endforeach?>
    </div>
</section>
<style>
form{
    margin-bottom: 30px;
}
.gallery{
    min-height: 200px;
}
</style>
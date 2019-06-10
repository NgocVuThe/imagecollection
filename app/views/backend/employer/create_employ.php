<section>
    <form action="" method="POST" enctype = "multipart/form-data">
        <div class="form-group">
            <label for="">Tên Thí Sinh</label>
            <input type="text" class = "form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class = "form-control" name = "adress">
        </div>
        <div class="form-group">
            <label for="">Tên Bộ Sưu Tập</label>
            <input type="text" class = "form-control" name = "namecollection">
        </div>
        <div class="form-group">
            <label for="">Mã Số Bộ Sưu Tập</label>
            <input type="text" class = "form-control" name = "regist_num">
        </div>
        <div class="form-group">
            <label for="">Ảnh Đại Diện</label>
            <img src="<?=$emp->avatar?>" width="100" alt="">
            <input type="file" multiple="multiple" class = "form-control" name = "avatar" id = "avatar">
        </div>
        <div class="form-group">
            <label for="">Mô Tả</label>
            <textarea name="description" cols="30" class = "form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name ="btnsubmit">Submit</button>
        </div>
    </form>
</section>
<style>
form{
    margin-bottom: 30px;
}
</style>
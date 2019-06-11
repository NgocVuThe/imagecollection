<script>
    function readURL(input){
        if(input.files){
            var totalFile = input.files.length;
            for(i=0;i<=totalFile;i++){
                var reader = new FileReader();
                reader.onload = function(e){
                    var img = $('<img id="dynamic" width= "50px" margin="10px">');
                    img.attr('src', e.target.result);
                    img.appendTo('#gallery');  
                }
            reader.readAsDataURL(input.files[i]);
            }
        }
    }

</script>

<section>
    <form action="" method="POST" enctype = "multipart/form-data">
        <input type="hidden" name = "id" id ="<?=$emp->id?>"  value="<?=$emp->id?>">
        <div class="form-group">
            <label for="">Tên Thí Sinh</label>
            <input type="text" class = "form-control" name="name" value="<?=$emp->name?>">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class = "form-control" name = "adress" value="<?=$emp->address?>">
        </div>
        <div class="form-group">
            <label for="">Tên Bộ Sưu Tập</label>
            <input type="text" class = "form-control" name = "namecollection" value="<?=$emp->namecollection?>">
        </div>
        <div class="form-group">
            <label for="">Mã Số Bộ Sưu Tập</label>
            <input type="text" class = "form-control" name = "regist_num" value="<?=$emp->regist_num?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh Đại Diện</label>
            <img src="<?=$emp->avatar?>" width="100" alt="">
            <input type="file" multiple="multiple" class = "form-control" name = "avatar" id = "avatar">
        </div>
        <div class="form-group">
            <label for="">Mô Tả</label>
            <textarea name="description" cols="30" class = "form-control" value="<?=$emp->description?>"></textarea>
        </div>
        <div class="form-group">
            <label for="">Thêm Ảnh Vào Bộ Sưu Tập</label>
            <input type="file" multiple="multiple" class = "form-control" name = "imgcollection[]" id = "imgcollection" onchange="readURL(this);">
            <div id="gallery"></div> 
        </div>
        <div class="gallery">
            <p>Ảnh BST</p>
            <?php foreach ($gallerys as $key => $gallery):?>
                <img src="<?=$gallery->img_url;?>" alt="" width="200px">
            <?php endforeach?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name ="btnsubmit">Save</button>
        </div>
    </form>
</section>
<style>
form{
    margin-bottom: 30px;
}
.gallery{
    min-height: 100px;
    margin-bottom: 100px;
}
</style>
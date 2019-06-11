<script>
    function readURL(input){
        if(input.files){
            var totalfile = input.files.length;
            for(i=0; i <= totalfile; i++){
                var reader = new FileReader();
                reader.onload = function (e) {
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
    <form id = "form_upload" runat="server" action="" method="POST" enctype = "multipart/form-data">
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
            <img src="" width="100" alt="">
            <input type="file" class = "form-control" name = "avatar" id = "avatar" onchange="readURL(this);">
        </div>

        <div class="form-group">
            <label for="">Ảnh Bộ Sưu Tập</label>
            <input type="file" multiple="multiple" class = "form-control" name = "imgcollection[]" id = "imgcollection" onchange="readURL(this);">
            <div id="gallery"></div> 
        </div>

        <div class="form-group">
            <label for="">Mô Tả</label>
            <textarea name="description" cols="30" class = "form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name ="btnsubmit">Thêm Mới</button>
        </div>
    </form>
</section>
<style>

form{
    margin-bottom: 30px;
}
#dynamic{
    margin: 2px;
}
</style>
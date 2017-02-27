<div class="container" style="margin-top:50px;">
	<script src="<?=get_instance()->common->getUrl()?>web/lib/ckeditor/ckeditor.js" charset="utf-8"></script>
	<form action="<?=get_instance()->common->getUrl()?>index.php/board/add" method="post">
	<div>
		<input class="form-control input-sm" style="width: 50%; float:left;" placeholder="이름" name="user_id">
		<input type="password" class="form-control input-sm" style="width: 50%;" placeholder="패스워드" name="password">
	</div>
	<div>
		<input class="form-control input-sm" placeholder="제목" name="title">
	</div>
	<div>
		<textarea placeholder="내용" class="form-control input-sm" rows="20" name="contents"></textarea>
	</div>
	<button type="submit" class="btn btn-primary btn-sm" style="width: 80px;">글쓰기</button>
	</form>
</div>
<script>
CKEDITOR.replace('contents',{
    filebrowserUploadUrl: '<?=get_instance()->common->getUrl()?>index.php/board/upload_image'
});
</script>
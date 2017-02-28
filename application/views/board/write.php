<div class="container" style="margin-top:50px;">
	<script src="<?=get_instance()->common->getUrl()?>web/lib/ckeditor/ckeditor.js" charset="utf-8"></script>
	<form action="<?=get_instance()->common->getUrl()?>index.php/board/add" method="post">
	<div>
		<input type="hidden" name="type" value="<?= $this->uri->segment(3,1);?>"/>
		<input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id');?>"/>
		<input type="hidden" name="user_nm" value="<?= $this->session->userdata('user_nm');?>"/>
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
<div class="container" style="margin-top:50px;">
	<div class="center-block" style="width:300px;">
		<form action="<?=base_url()?>index.php/user/login" method="post">
			<div>
				<input name="user_id" type="text" class="form-control input-sm" placeholder="로그인 ">
				<input name="user_pw" type="password" class="form-control input-sm" placeholder="패스워드" style="margin-top:3px;">
			</div>
			<div style="margin-top:10px;">
				<a href="<?=base_url()?>index.php/user/user_join"><button class="btn btn-primary btn-sm join_toggle" type="button" style="width: 80px; margin-right:3px;">회원가입</button></a>
				<button type="submit" class="btn btn-default btn-sm" style="width: 60px; float:right;margin-right:3px;">로그인</button>
			</div>
		</form>
	</div>
</div>
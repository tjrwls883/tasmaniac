<div class="container" style="margin-top:50px;">
	<div style="width:300px" class="center-block">
		<form action="<?=base_url()?>index.php/user/add" method="post">
			<div>
				<input name="user_id" type="text" class="form-control input-sm" placeholder="아이디">
				<input name="user_nm" type="text" class="form-control input-sm" placeholder="닉네임" style="margin-top:3px;">
				<input name="user_pw" type="password" class="form-control input-sm" placeholder="패스워드" style="margin-top:3px;">
				<input name="user_pwck" type="password" class="form-control input-sm" placeholder="패스워드확인" style="margin-top:3px;">	
				<input name="email" type="text" class="form-control input-sm" placeholder="이메일" style="margin-top:3px;">
			</div>
			<div style="margin-top:10px;">
				<button class="btn btn-primary btn-sm" style="width: 80px;" data-toggle="modal" data-target="#clause">약관확인</button>
				<a href="<?=base_url()?>index.php/user/login"><button class="btn btn-danger btn-sm join_toggle" style="width: 50px; float:right;">취소</button></a>
				<button type="submit" class="btn btn-default btn-sm" style="width: 80px; float:right;margin-right:3px;" data-loading-text="진행중.." >회원가입</button>
			</div>
		</form>
	</div>
</div>
<div class="container" style="margin-top:50px;">
		<div style="border-top:1px solid #a7a7a7;padding-top:5px;">
			<span style="font-size:17px;padding-top:6px;display:inline-block;"><?= $data->title?></span>
			<span style="color: #343434; float:right;"><?= $data->user_nm?></span></br>
			<span class="hidden-xs" style="float:right;margin-top:-7px;"><span style="padding-right:10px; color: #5c5c5c;">사고팔고구인구직</span><span style="padding-right:10px; color: #8d8d8d;"><?= $data->reg_dt?></span><span style="color: #8d8d8d;">조회수 <?= $data->hits?></span></span>
		</div>
	
	<div style="margin-top:5px; border-bottom:1px solid #a7a7a7; padding-bottom:10px;">
		
	</div>
	<div style="height:400px; border-bottom:1px solid #a7a7a7;padding-top:10px;">
		<?= $data->contents?>
	</div>
	<div>
	댓글수 추천수
	</div>
	<div>
		<input class="form-control input-sm" style="width: 100px; float:left;" placeholder="이름">
		<input type="password" class="form-control input-sm" style="width: 100px; float: left;" placeholder="패스워드">
		<input class="btn btn-primary btn-sm" type="button" value="댓글" style="width: 80px;">
	</div>
	<div>
		<textarea placeholder="내용" class="form-control input-sm" rows="3"></textarea>
	</div>
</div>
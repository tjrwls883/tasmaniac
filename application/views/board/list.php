<div class="container" style="margin-top:50px;">
	<table class="table table-striped board">
	<thead>
		<tr>
		  <td>제목</td>
		  <td>글쓴이</td>
		  <td>날짜</td>
		  <td class="hidden-xs">조회</td>
		  <td class="hidden-xs">추천</td>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($list as $lt){
		?>
			<tr>
			  <td><a href="<?=base_url()?>index.php/board/board_read/<?= $this->uri->segment(3,1);?>/<?=$lt->board_id?>"><?=$lt->title?></a></td>
			  <td><?=$lt->user_nm?></td>
			  <td><?=$lt->reg_dt?></td>
			  <td class="hidden-xs"><?=$lt->hits?></td>
			  <td class="hidden-xs"><?=$lt->like?></td>
			</tr>
		<?php
			}
		?>
	</tbody>
	</table>
	<div>
		<?= $pagination;?>
	</div>
	<div>
		<input type="text" class="form-control input-sm" id="exampleInputName2" placeholder="검색" style="width: 200px; float: left;">
		<select class="form-control input-sm" style="width: 120px; float: left;">
			<option>제목+내용</option>
			<option>제목</option>
			<option>내용</option>
		</select>
		<input class="btn btn-default btn-sm" type="button" value="검색" style="width: 80px;">
	</div>
	<div>
	<?php if($this->session->userdata('logged_in')){?>
	<a href="<?=base_url()?>index.php/board/board_write/<?= $this->uri->segment(3,1);?>"><input class="btn btn-primary btn-sm" type="button" value="글쓰기" style="float: right;"></a>
	<?php }?>
	</div>
	
</div>
<div class="container" style="margin-top:50px;">
	<table class="table table-striped board">
	<thead>
		<tr>
		  <td>제목2</td>
		  <td>글쓴이</td>
		  <td>날짜</td>
		  <td class="hidden-xs">조회</td>
		  <td class="hidden-xs">추천</td>
		</tr>
	</thead>
	<tbody>
		<? 
			foreach ($list as $lt){
		?>
			<tr>
			  <td><a href="<?=get_instance()->common->getUrl()?>index.php/board/board_read/<?=$lt->board_id?>"><?=$lt->title?></a></td>
			  <td>운영자</td>
			  <td>2001-02-03</td>
			  <td class="hidden-xs">2</td>
			  <td class="hidden-xs">34</td>
			</tr>
		<?
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
	<a href="<?=get_instance()->common->getUrl()?>index.php/board/board_write"><input class="btn btn-primary btn-sm" type="button" value="글쓰기" style="float: right;"></a>
	</div>
	
</div>
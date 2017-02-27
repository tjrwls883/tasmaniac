<div class="footer">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<div class="footer_bottom_content">
						Copyright © 2084 <a href="#">Your Company Name</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=get_instance()->common->getUrl()?>web/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=get_instance()->common->getUrl()?>web/lib/toast/javascript/jquery.toastmessage.js"></script>
	<script src="<?=get_instance()->common->getUrl()?>web/js/common.js"></script>
	<script>
	$(window).load(function(){
		
		if(location.hash.indexOf("login")!=-1){
			toastalert({message:'로그인이 완료되었습니다.'});
			$('#offcanvass').toggleClass('fh5co-awake');
			location.hash = "";
		}else if(location.hash.indexOf("logout")!=-1){
			toastalert({message:'로그아웃이 완료되었습니다.'});
			$('#offcanvass').toggleClass('fh5co-awake');
			location.hash = "";
		}
		
		
		$('body').on('click', '.offcanvas_btn', function(){
			$('#offcanvass').toggleClass('fh5co-awake');
		});

		$(".join_toggle").click(function(){
			$("#join_form input").val("");
			$("#login_form input").val("");
			$("#login_form").toggleClass('display_onoff');
			$("#join_form").toggleClass('display_onoff');
		});

		$("#loginBtn").click(function(){

			if($("#login_id").val()==""){
				toastalert({message:'아이디를 입력해 주세요',color:'red'});
				return;
			}

			if($("#login_pw").val()==""){
				toastalert({message:'패스워드를 입력해 주세요',color:'red'});
				return;
			}

			$.ajax({
				url:"<?=get_instance()->common->getUrl()?>index.php/user/user_login",
				type:"post",
				data:{
					"user_id":$("#login_id").val(),
					"user_pw":$("#login_pw").val()
				},
				dataType:"html",
				complete:function(xhr, textStatus){

					if(textStatus=="success"){
						
						location.hash = "login";
						javascript:location.reload();

					}else{

						toastalert({message:'로그인이 실패했습니다.',color:'red'});

					}
		
				}
			});
			

		});

		$("#logoutBtn").click(function(){

			$.ajax({
				url:"<?=get_instance()->common->getUrl()?>index.php/user/user_logout",
				type:"post",
				dataType:"html",
				complete:function(xhr, textStatus){

					if(textStatus=="success"){

						location.hash = "logout";
						javascript:location.reload();
						
					}else{

						toastalert({message:'로그아웃이 실패했습니다.',color:'red'});

					}
		
				}
			});
			
		});

		$("#joinBtn").click(function(){

			if($("#join_id").val()==""||$("#join_pw").val()==""||$("#join_pwck").val()==""||$("#join_nm").val()==""||$("#join_email").val()==""){
				toastalert({message:'모든정보를 입력해주세요',color:'red'});
				return;
			}

			if($("#join_pw").val()!=$("#join_pwck").val()){
				toastalert({message:'패스워드가 일치하지 않습니다.',color:'red'});
				return;
			}

			$("#joinBtn").button('loading');

			$.ajax({
				url:"<?=get_instance()->common->getUrl()?>index.php/user/user_join",
				type:"post",
				data:{
					"user_id":$("#join_id").val(),
					"user_pw":$("#join_pw").val(),
					"user_nm":$("#join_nm").val(),
					"email":$("#join_email").val()
				},
				dataType:"html",
				complete:function(xhr, textStatus){

					if(textStatus=="success"){
						
						toastalert({message:'회원가입이 완료되었습니다.'});

						$("#join_id").val("");
						$("#join_pw").val("");
						$("#join_pwck").val("");
						$("#join_nm").val("");
						$("#join_email").val("");
						$("#login_form").toggleClass('display_onoff');
						$("#join_form").toggleClass('display_onoff');
						
						$("#joinBtn").button('reset');

					}else{

						toastalert({message:'회원가입이 실패했습니다.',color:'red'});

					}
		
				}
			});
			
		});
			
	});
	</script>
	</body>
	
</html>
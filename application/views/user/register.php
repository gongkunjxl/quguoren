
<?php $this->load->view("header");?>
<link rel="stylesheet" type="text/css" href="/statics/css/register.css">
	<script type="text/javascript" src="/statics/js/scrollable.js"></script>
	<script type="text/javascript" src='/statics/js/chinaUniversityList.js'></script>
	<script type="text/javascript" src='/statics/js/chinaUniversitychange.js'></script>
<body style="overflow: hidden; width: 100%; font-size: 12px;">
<div id="container" style="height: 619px;">
<div class="wrap" style="overflow:hidden;">
	<form class="login-form" action="/user/register" method="post" id="regForm" enctype="multipart/form-data">
	<div class="reg" id="wizard">
		<div class="items" style="left: 0px;">
			<div class="page" id='f_page'>
				<div class="top">
					用户注册
					<span class="ir next">下一步</span>
				</div>
				
				<div class="control">
					<div class="control_text first">
						<div class="control_text_primary">用户类型</div>
					</div>
					<!-- <label class="weui_cell" for="zhongguo">
						<div class="control_text" title="主播注册">我是中果仁
							<div class="weui_cell_ft">
								<input type="radio" class="weui_check" name="usertype" id="zhongguo" value="1">
								<span class="weui_icon_checked"></span>
							</div>
						</div>
					</label> -->
					<label class="weui_cell" for="waiguo">
						<div class="control_text" title="I'm a foreigner">I'm a foreigner
							<div class="weui_cell_ft">
								<input type="radio" class="weui_check" name="gr_type" id="waiguo" value="1">
								<span class="weui_icon_checked"></span>
							</div>
						</div>
					</label>
					<label class="weui_cell" for="bus1">
						<div class="control_text" title="我是中国学生">我是中国学生
							<div class="weui_cell_ft">
								<input type="radio" class="weui_check" name="gr_type" id="bus1" value="4" selected="">
								<span class="weui_icon_checked"></span>
							</div>
						</div>
					</label>
				</div>
				
				
			</div>
			<div class="page" id='s_page'>
			    <div class="top" id="top2">
					<span class="il prev disabled">Previous</span>
					<strong></strong>
					<a href="/user/login"><span class="ir loginin">login in</span></a>
				</div>
				
				<div class="control">
					 <div class="input-box clear first">
						<span class="title">Telephone</span>
						<input type="text" id="username" class="span3" placeholder="" datatype="*1-16" value="<?php echo $data['telephone'];?>" name="telephone">
					</div>
					<div class="input-box clear">
						<span class="title">Code</span>
						<input type="text" name="code" id="verify" style="width:5rem;" value="<?php echo $data['code'];?>">
						<a id="sendverify">Get code</a>
						<a id="off"><span id="num">59</span>S</a>
					</div>
					<div class="input-box clear">
						<span class="title">Password</span>
						<input type="password" id="inputPassword" placeholder="at least 6 characters long" errormsg="at least 6 characters long" nullmsg="Please fill in the password" datatype="*6-20" name="password">
					</div>
					<div class="input-box clear">
						<span class="title">Confirm password</span>
						<input type="password" id="inputPassword2" class="span3" placeholder="at least 6 characters long" recheck="password" errormsg="The password you entered twice is inconsistent" nullmsg="Please fill in the confirmation password" datatype="*" name="repassword">
					</div>

					<div class="input-box clear foreigner">
						<span class="title">Birthday</span>
						<input type="date" id="inputDate" class="span3" placeholder="Please choose the date of birth" recheck="" errormsg="" nullmsg="Please choose the date of birth" datatype="*" name="birthday">
					</div>

					<div class="input-box clear foreigner">
						<span class="title">Continent</span>
						<select type="text" id="inputContinent" class="span3" placeholder="Please enter country" recheck="" value="<?php echo $data['dazhou'];?>" errormsg="" nullmsg="Please enter Continent" datatype="*" name="dazhou"></select>
					</div>


					<div class="input-box clear foreigner">
						<span class="title">Country</span>
						<select type="text" style="width: 6rem;" id="inputCountry" class="span3" placeholder="Please enter country" recheck="" value="<?php echo $data['country'];?>" errormsg="" nullmsg="Please enter country" datatype="*" name="country"></select>
					</div>


					<div class="input-box clear foreigner">
						<span class="title">Student ID photo</span>
						<input type="file" id="inputFile" class="span3" placeholder="" recheck="" errormsg="" nullmsg="Please upload student ID card" datatype="*" name="xueshengzheng" value='Please upload student ID card'>
					</div>


					<div class="input-box clear foreigner">
						<span class="title">HSK level</span>
						<select name="hsk_class" id="">
                        	<?php $hsk_class = get_hsk_class('-1');?>
                            <?php foreach( $hsk_class as $key => $value ):?>
								<option value="<?php echo $key;?>" <?php if( $data['hsk_class'] == $key ):?> selected="selected" <?php endif;?>><?php echo $value;?></option>
                            <?php endforeach;?>
						</select>
					</div>
					
					<!--<div class="input-box clear foreigner">
						<span class="title">Have a live or experience before</span>
						<label class='' for="yes"><input type="radio" value="1" checked <?php if( $data['if_show_experience'] == 1 ):?> checked<?php endif;?> class='spanT' name='if_show_experience' id='yes'>YES</label>
						<label class='' for="no"><input type="radio" value="0" <?php if( $data['if_show_experience'] == 0 && $data['if_show_experience'] != '' ):?> checked<?php endif;?> class='spanT' name='if_show_experience' id='no'>NO</label>
					</div>-->

					
						<!-- <div class="input-box clear active">
						<span class="title">Upload avatar</span>
						<input type="file" id="inputFile" class="span3" placeholder="" recheck="" errormsg="" nullmsg="" datatype="*" name="icon" value='Upload avatar'>
						</div>	
						<div class="input-box clear active">
						<span class="title">Contact name</span>
						<input type="text" id="inputlinkman" class="span3" value="<?php echo $data['realname'];?>" placeholder="Contact name" recheck="" errormsg="" nullmsg="Contact name" datatype="*" name="realname">
						</div>

							<div class="input-box clear active">
						<span class="title">company name</span>
						<input type="text" id="inputcompany" class="span3" placeholder="Please enter the company name" value="<?php echo $data['company_name'];?>" recheck="" errormsg="" nullmsg="Please enter the company name" datatype="*" name="company_name">
						</div>

						<div class="input-box clear active">
						<span class="title">city</span>
						<input type="text" id="inputcity" class="span3" placeholder="Please enter the city" value="<?php echo $data['city'];?>" recheck="" errormsg="" nullmsg="Please enter the city" datatype="*" name="city">
						</div>

						<div class="input-box clear active">
						<span class="title">Description of Requirement</span>
						<input type="text" id="inputrequirement" class="span3" placeholder="Description of Requirement..." recheck="" value="<?php echo $data['company_need'];?>" errormsg="" nullmsg="Description of Requirement..." datatype="*" name="company_need">
						</div> -->
							<div class="input-box clear active">
						<span class="title">性别</span>
						<label><input class='radioinput' type="radio" name="sex" value="1" checked> 男</label>
						<label><input class='radioinput' type="radio" name="sex" value='2'> 女</label>
						</div>
						
						<div class="input-box clear active school_c">
						<span class="title">学校</span>
						<input id='chooseSchool' type="text" name="school" placeholder="请输城市查找学校">
						
						</div>


						<div class="input-box clear active">
						<span class="title">年级</span>
						<select name="grade" id=""  value='本科一年级'>
                        	<option value='本科一年级' checked>本科一年级</option>
                        	<option value='本科二年级'>本科二年级</option>
                        	<option value='本科三年级'>本科三年级</option>
                        	<option value='本科三年级'>本科四年级</option>
                        	<option value='研究生一年级'>研究生一年级</option>
                        	<option value='研究生二年级'>研究生二年级</option>
                        	<option value='研究生二年级'>研究生三年级</option>
                        	<option value='研究生二年级'>博士生</option>
						</select>
						</div>


<input type="hidden" name="invite_id" value="<?php echo $invite_id;?>"/>

					<div class="controls top-line Validform_checktip text-warning"></div>
					<div class="sub-btn">
						 <a class="form-get" target-form="dosubmit" onClick="submitReg()">Register</a>
						 <button type="button" class="dosubmit" style="display:none"></button>
					</div>
				</div>
				
				<!-- <p style="padding:0.4rem;">*注册收不到短信，请联系客服<a href="tel:400-992-0220" style="color:#FF8904;padding:0 0.2rem;">400-992-0220</a></p> -->
				
			</div>
		</div>
	</div>
	</form>
</div>
</div>	
<div class="school_shade">
	<input id='searchSchool' class='school_search' type="" name="" placeholder="学校查询">
	<div id="choose-a-province" class="schoolList province-item-c">
    </div>
    <div id="choose-a-school"  class="schoolList schoolList_c">
    </div>
	
</div>
<style>
	.spanT{
		width: .4rem !important;
		    position: relative;
    top: 0.3rem;
	}
	.foreigner{
			display: none;
	}
	.active{
		display: none;
	}
	.school_search{
		display:block;
		width:6rem;
		height:1rem;
		padding-left:.1rem;
		line-height: 1;
		border:.01rem solid #ddd;
		border-radius:.04rem;
		margin:1rem auto 0;
		
	}
	.school_shade{
		display: none;
		width:100%;
		position: fixed;
		top:0;
		bottom:0;
		left:0;
		right:0;
		background:#fff;
	}
	
	.province-item{
		float: left;
		width:2.5rem;
		height:1rem;
		line-height: 1rem;
		margin-right:.1rem;
		text-align: center;
	}
	.choosen{
		background: #FF8904;
		color:#fff;
	}
	.schoolList{
		/*position: absolute;*/
		/*bottom:-.45rem;*/
		margin:0 auto;
		/*height:1rem;*/
		width:6rem;
		left:.8rem;
		border:1px solid #ddd;
		z-index: 99999;
		background: #fff;
	}
	.province-item-c{
		height:1rem;
		width:5.6rem;
		padding-left:.4rem;
	}
	.school-item{
		display: inline-block;
		padding:.1rem;
	}
	.schoolList{
		max-height: 6.5rem;
		overflow: scroll;
		background: #fff;
	}
</style>
<script type="text/javascript">

// 浏览器下拉
var win_h = $(window).height();
var header_h = $('.header').height();
$('#container').height(win_h-header_h);
var list = ['container'];
var preventOverScroll = new window.PreventOverScroll({
    list: list
});


$(function(){
	$('label.weui_cell').click(function(){
		var title = $(this).find('.control_text').attr('title');
		$("#top2 strong").html(title);
		setTimeout(function(){
			$('.next').click();
		},100);	
	})
	

	$('.ir.next').click(function(){
		var usertype = $('input[name="gr_type"]:checked').val();

				if(usertype !=1 &&usertype != 4 ){
					alert("Please select the user type!");
					return false;
				}
	})
	// $("#wizard").scrollable({
	// 	conf:{
	// 		touch: false,
	// 	},
	// 	onSeek: function(event,i){
	// 		//$("#status li").removeClass("active").eq(i).addClass("active");
	// 	},
	// 	onBeforeSeek:function(event,i){
	// 		if(i==1){
	// 			var usertype = $('input[name="gr_type"]:checked').val();
	// 			if(usertype !=1 &&usertype != 2 ){
	// 				alert("Please select the user type!");
	// 				return false;
	// 			}
							
	// 			if(usertype == 1){
	// 					$('.foreigner').show();
	// 					$('.il.prev').html('Previous');
	// 					$('.ir.loginin').html('login in');
	// 					$('#username').parent().find('.title').html('telephone');
	// 					$('#verify').parent().find('.title').html('code');
	// 					$('#sendverify').html('Get code');
	// 					$('#inputPassword').attr('placeholder','at least 6 characters long')
	// 					$('#inputPassword2').attr('placeholder','at least 6 characters long')
	// 					$('#inputPassword').parent().find('.title').html('password');
	// 					$('#inputPassword2').parent().find('.title').html('Confirm password');
	// 					$('.form-get').html('Registered')

	// 			}else{
	// 				$('.foreigner').hide();
	// 			}

	// 			if(usertype == 2){
	// 					$('.active').show();

	// 					$('.il.prev').html('上一步');
	// 					$('.ir.loginin').html('登录');
	// 					$('#username').parent().find('.title').html('手机号');
	// 					$('#verify').parent().find('.title').html('验证码')
	// 					$('#sendverify').html('获取验证码');
	// 					$('#inputPassword').attr('placeholder','至少6个字符')
	// 					$('#inputPassword2').attr('placeholder','至少6个字符')
	// 					$('#inputPassword').parent().find('.title').html('密码');
	// 					$('#inputPassword2').parent().find('.title').html('确认密码');
	// 					$('.form-get').html('注册')
						
	// 			}else{
	// 				$('.active').hide();
	// 			}

	// 		}
	// 	}
	// });

	$('.weui_cell').click(function(){
			
			var usertype = $('input[name="gr_type"]:checked').val();
			
			

			if(usertype == 1){
						$('#f_page').hide();
						$('#s_page').show();
						$('.foreigner').show();
						$('.il.prev').html('Previous').removeClass('disabled');
						$('.ir.loginin').html('login in');
						$('#username').parent().find('.title').html('Telephone');
						$('#verify').parent().find('.title').html('Code');
						$('#sendverify').html('Get code');
						$('#inputPassword').attr('placeholder','at least 6 characters long')
						$('#inputPassword2').attr('placeholder','at least 6 characters long')
						$('#inputPassword').parent().find('.title').html('Password');
						$('#inputPassword2').parent().find('.title').html('Confirm password');
						$('.form-get').html('Register')

				}else{
					$('.foreigner').hide();
					// $('#s_page').show();
				}

				if(usertype == 4){
						$('#f_page').hide();
						$('#s_page').show();
						$('.active').show();

						$('.il.prev').html('上一步').removeClass('disabled');
						$('.ir.loginin').html('登录');
						$('#username').parent().find('.title').html('手机号');
						$('#verify').parent().find('.title').html('验证码')
						$('#sendverify').html('获取验证码');
						$('#inputPassword').attr('placeholder','至少6个字符')
						$('#inputPassword2').attr('placeholder','至少6个字符')
						$('#inputPassword').parent().find('.title').html('密码');
						$('#inputPassword2').parent().find('.title').html('确认密码');
						$('.form-get').html('注册')
						
				}else{
					$('.active').hide();
					// $('#s_page').show();
				}

	})
	
});


$('.il.prev').click(function(){
	
$('#s_page').hide();
$('#f_page').show();

})
</script>
	  <script>
		$("#sendverify").click(function(){
			var phone = $("#username").val();
			var phone_cookie = getCookie(phone);
			var api_url = $('#api_url').val()+'/api/send_mobile_code';
			var check_mobile=$('#api_url').val()+'/api/check_mobile'
			if(phone.length != 11){
				alert("Please fill in 11 phone numbers!");
			}else if(!checkMobile(phone)){
				alert("Mobile phone number is wrong, please check!");
			}else if(phone_cookie == 1){
				//60秒后才能再次发送
				alert("SMS sent too often, try again later!");
			}else{
				
				verifytime.init();
				$.post(check_mobile,{action:'check_mobile',telephone:phone},function(res){
						if(res==0){
							$.post(api_url,{ telephone:phone,action:'send_mobile_code' },function(res){
								setCookie(phone,1,60);
								alert(res);
							})
						}
						if(res==1){
							alert('手机号码已注册,请直接登录');
							location.href='/user/login'
						}


				})
				//59S后再次获取
				
			}
		})
		var verifytime = {
			init:function(){
				setTimeout("verifytime.reset()",1000);
				$("#sendverify").hide();
				$('#off').show();
				$('#num').text(59);
			},
			reset:function(){
				var num = parseInt($('#num').text());
				num--;
				if(num == 0){
					$("#sendverify").show();
					$('#off').hide();
				}else{
					$('#num').text(num);
					setTimeout("verifytime.reset()",1000);
				}
			}
		}
	  </script>
         
          


	<script type="text/javascript">
    	
function submitReg()
{
	$('#regForm').submit();
}

/*     	$("form").submit(function(){

			var self = $(this);
			$('#regForm').submit();

   		$.post(self.attr("action"), self.serialize(), success, "json");
    		return false;

    		function success(data){
    			if(data.status){
    				window.location.href = '/Sms/show.html?msg='+data.msg+'&url=/User/login.html';
    			} else {
    				self.find(".Validform_checktip").text('*'+data.msg);
    				//刷新验证码
    				//$(".reloadverify").click();
    			}
    		}
    	});
	*/
	</script>
	<script type="text/javascript">
			var Continent_arr=new Array('Africa','Aisa','America','Europe','Oceania')
var Africa_arr= new Array("Algeria", "Angola", "Benin", "Botswana", "Burkina faso", "Burundi", "Cameroun", "Cape Verde", "Central African", "Chad", "Comores", "Congo(B)", "Congo(K)", "Cote d’Ivoire", "Djibouti", "Egypt", "Equatorial Guinea", "Eritrea", "Ethiopia", "Gabon", "Gambia", "Ghana", "Guine", "Guine-Bissau", "Kenya", "Lesotho", "Liberia", "Libya", "Madagascar", "Malawi", "Mali", "Maroc", "Mauritius", "Mozambique", "Namibia", "Niger", "Nigeria", "Reunion", "Rwanda", "Saint Helena", "Sao Tome and Principe", "Senegal", "Seychelles", "Sierra Leone", "Somali", "South Africa", "Sudan", "Swaziland", "Tanzania", "Togo", "Tunis", "Uganda", "Western Sahara", "Zambia", "Zimbabwe", "Mauritania");
var Aisa_arr=new Array("Afghanistan", "Armenia", "Bangladesh", "Bhutan ", "Burma", "Cambodia", "China", "Cyprus", "East timor", "Georgia ", "India", "Indonesia ", "Iran", "Iraq", "Israel ", "Japan", "Jordan ", "Kuwait", "Laos", "Lebanon ", "Malaysia", "Mongolia", "Nepal", "North Korea", "Oman ", "Pakistan ", "Qatar", "Saudi Arabia", "Singapore", "South Korea", "Sri Lanka", "Syria", "Thailand", "The Philippines", "Turkey", "Vietnam", "azerbaijan", "bahrain", "brunei", "kazakhstan", "kyrgyzstan", "tajikistan ", "the Palestinian", "the maldives", "the united Arab emirates (uae)", "turkmenistan", "uzbekistan ", "yemen ");
var Europe_arr=new Array('Albania ','Azerbaijan ','Ireland ','Estonia ','Andorra ','Austria ','Belarus ','Bulgaria ','Belgium ','Republic of Bosnia and Herzegovina','Poland ','Denmark ','Germany ','Russia ','France ','Vatican ','Finland ','Georgia ','Kazakstan','Netherlands','Kyrgyzstan','Czech Republic','Croatia','Lithuania ','Liechtenstein ','Luxembourg','Romania','Malta ','Yugoslavia','Norway ','Portugal','Macedonia ','Sweden','Switzerland ','Slovakia ','Slovenia ','Tajikistan','Turkmenstan ','Ukraine ','Uzbekistan ','Spain ','Greece','Hungary ','Italy','United Kingdom GB','United Kingdom of Great Britain and Northern Ireland');
var Oceania_arr=new Array("Australia", "Federated States of Micronesia", "Fiji", "Kiribati", "Marshall Islands", "Nauru", "New Zealand","Palau", "Papua New Guinea", "Samoa", "Solomon Islands", "Tonga", "Tuvalu", "Vanuatu");
var America_arr=new Array("Antigua and Barbuda", "Argentina", "Bahamas", "Barbados", "Belize", "Bolivia", "Brazil", "Canada", "Chile", "Colombia", "Costa Rica", "Cuba", "Dominican Republic", "Dominique", "Ecuador", "El Salvador", "Grenada", "Guatemala", "Guyana", "Haiti", "Honduras", "Jamaica", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Saint Lucia", "Saint Vincent and the Grenadines", "St. Christopher and Nevis", "Suriname", "Trinidad and Tobago", "United States", "Uruguay", "Venezuela");


 
function populateStates(countryElementId, stateElementId) {
    var selectedCountryIndex = document.getElementById(countryElementId).value;
 console.log(selectedCountryIndex)
 	var ArrName;
 	if(selectedCountryIndex=='Africa'){
 			ArrName=Africa_arr

 	}else if(selectedCountryIndex=='Aisa'){
 		ArrName=Aisa_arr

 	}else if(selectedCountryIndex=='America'){
 		ArrName=America_arr
 	}else if(selectedCountryIndex=='Europe'){
 		ArrName=Europe_arr
 	}else if(selectedCountryIndex=='Oceania'){
 		ArrName=Oceania_arr
 	}
console.log(stateElementId)
    var stateElement = document.getElementById(stateElementId);
 	
    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select Country', '');
    stateElement.selectedIndex = 0;
 
    // var state_arr = s_a[selectedCountryIndex].split("|");
 	console.log(ArrName)
    for (var i = 0; i < ArrName.length; i++) {
        stateElement.options[stateElement.length] = new Option(ArrName[i], ArrName[i]);
    }
}
 
function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Continent', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < Continent_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(Continent_arr[i], Continent_arr[i]);
    }
    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }

}



 populateCountries("inputContinent", "inputCountry");


	</script>
<?php $this->load->view("footer");?>
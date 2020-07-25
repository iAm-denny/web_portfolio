$(document).on('click' ,'a[href^="#"]',function(event){
 event.preventDefault();
 $('html,body').animate({
 	scrollTop:$($.attr(this,'href')).offset().top
 },800);
});

$('.bar').click(function(){
	$('#nav').addClass('active');
	$('.bar').addClass('active');
	$('.bar-times').addClass('active');
	
});
$('.bar-times').click(function(){
	
	$('#nav').removeClass('active');
	$('.bar').removeClass('active');
	$('.bar-times').removeClass('active');
});

$('.sent_msg').click(function(){
	$('.suss').hide();
});
$('.sent_failed').click(function(){
	$('.fails').hide();
});
$('.pwd_hide').hide();
$('#form').on('click','.pwd_show',function(){
	let pwd=$('#pws').attr('type','text');
	$('.pwd_hide').show();
	$('.pwd_show').hide();
});

$('#form').on('click','.pwd_hide',function(){
	let pwd=$('#pws').attr('type','password');
	$('.pwd_hide').hide();
	$('.pwd_show').show();

});
$('.old_hide').hide();
$('#user_form').on('click','.old_show',function(){
	let pwd=$('.old_pwd').attr('type','text');
	$('.old_hide').show();
	$('.old_show').hide();
});
$('#user_form').on('click','.old_hide',function(){
	let pwd=$('.old_pwd').attr('type','password');
	$('.old_hide').hide();
	$('.old_show').show();

});
$('.new_hide').hide();
$('#user_form').on('click','.new_show',function(){
	let pwd=$('.new_pwd').attr('type','text');
	$('.new_hide').show();
	$('.new_show').hide();
});
$('#user_form').on('click','.new_hide',function(){
	let pwd=$('.new_pwd').attr('type','password');
	$('.new_hide').hide();
	$('.new_show').show();

});

$('.con_hide').hide();
$('#user_form').on('click','.con_show',function(){
	let pwd=$('.con_pwd').attr('type','text');
	$('.con_hide').show();
	$('.con_show').hide();
});
$('#user_form').on('click','.con_hide',function(){
	let pwd=$('.con_pwd').attr('type','password');
	$('.con_hide').hide();
	$('.con_show').show();

});
$('.srh1').click(function(){
	$('#srh-btn i').addClass('active');
	$('#search').addClass('active');
	$('.srh2').addClass('active');
});
$('.srh2').click(function(){
	$('#srh-btn i').removeClass('active');
	$('#search').removeClass('active');
	$('.srh2').removeClass('active');
	$('.search_list').removeClass('active');
	$('.animelist').removeClass('active');
	$('#search').val("");
	$('.search_list').fadeOut();
});

$('#search').keypress(function(){
	$('.search_list').addClass('active');
	$('.animelist').addClass('active');
	let search=$(this).val();
	
	
	$.ajax({
		url:'search.php',
		method:'POST',
		data:{search :search},
		success:function(data){
			$('.search_list').fadeIn();
			$('.search_list').html(data);
		}
	});
});
$('.nsrh1').click(function(){
	$('#nsrh-btn i').addClass('active');
	$('#nsearch').addClass('active');
	$('.nsrh2').addClass('active');
});
$('.nsrh2').click(function(){
	$('#nsrh-btn i').removeClass('active');
	$('#nsearch').removeClass('active');
	$('.nsrh2').removeClass('active');
	$('.nsearch_list').removeClass('active');
	$('.nanimelist').removeClass('active');
	$('#nsearch').val("");
	$('.nsearch_list').fadeOut();
});

$('#nsearch').keypress(function(){
	$('.nsearch_list').addClass('active');
	$('.nanimelist').addClass('active');
	let nsearch=$(this).val();
	
	
	$.ajax({
		url:'search.php',
		method:'POST',
		data:{nsearch :nsearch},
		success:function(data){
			$('.nsearch_list').fadeIn();
			$('.nsearch_list').html(data);
		}
	});
});
$('.psrh1').click(function(){
	$('#psrh-btn i').addClass('active');
	$('#psearch').addClass('active');
	$('.psrh2').addClass('active');
});
$('.psrh2').click(function(){
	$('#psrh-btn i').removeClass('active');
	$('#psearch').removeClass('active');
	$('.psrh2').removeClass('active');
	$('.psearch_list').removeClass('active');
	$('.panimelist').removeClass('active');
	$('#psearch').val("");
	$('.psearch_list').fadeOut();
});

$('#psearch').keypress(function(){
	$('.psearch_list').addClass('active');
	$('.panimelist').addClass('active');
	let psearch=$(this).val();
	
	
	$.ajax({
		url:'search.php',
		method:'POST',
		data:{psearch :psearch},
		success:function(data){
			$('.psearch_list').fadeIn();
			$('.psearch_list').html(data);
		}
	});
});
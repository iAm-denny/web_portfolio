function fetch_data(view=''){
	$.ajax({
		url:'fetch_data.php',
		method:'POST',
		data:{view:view},	
		success:function(data){
			$('.animelist').html(data);
		}
	});
}
fetch_data();
 $(document).on('click','.del',function(){ 
	let id=$(this).data("del");
	$.ajax({
		url:'delete.php',
		method:'POST',
		data:{id:id},
		dataType:'text', 
		success:function(){
			fetch_data();
		}
	});
});
 function nfetch_data(nview=''){
	$.ajax({
		url:'nfetch_data.php',
		method:'POST',
		data:{nview:nview},	
		success:function(data){
			$('.nanimelist').html(data);
		}
	});
}
nfetch_data();
 $(document).on('click','.ndel',function(){ 
	let id=$(this).data("ndel");
	$.ajax({
		url:'ndelete.php',
		method:'POST',
		data:{id:id},
		dataType:'text', 
		success:function(){
			nfetch_data();
		}
	});
});


 function pfetch_data(pview=''){
	$.ajax({
		url:'pfetch_data.php',
		method:'POST',
		data:{pview:pview},	
		success:function(data){
			$('.panimelist').html(data);
		}
	});
}
pfetch_data();
 $(document).on('click','.pdel',function(){ 
	let id=$(this).data("pdel");
	$.ajax({
		url:'pdelete.php',
		method:'POST',
		data:{id:id},
		dataType:'text', 
		success:function(){
			pfetch_data();
		}
	});
});

$('.search_btn').keypress(function(){
	 $('.header').show();

	let search_btn=$('.search_btn').val();

	

	$('table .anims').each(function(){
		let tr=$(this).html().toLowerCase();

		if(tr.indexOf(search_btn) >0){
			$(this).show();
			 
		}
		else{
			$(this).hide();
			
		}
	});	

});

$('.search_btn').keyup(function(){

	let search_btn=$('.search_btn').val();
	if(search_btn !=""){
		$('table tr').hide();
		 $('.header').show();
		$('table tr').each(function(){
		var tr=$(this).html().toLowerCase();
			if(tr.indexOf(search_btn) >0){
				$(this).show();
				 $('.header').show();
			}
			else{
			$(this).hide();
			 $('.header').show();
			}
		});
		
	}
	else{
		$('table tr').show();
	}


});

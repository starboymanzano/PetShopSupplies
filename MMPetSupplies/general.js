$(document).ready(function() {
	category();
	animal();
	function category() {
		$.ajax({
			url : 'functions.php',
			method: 'POST',
			data : {category:1},
			success : function(data){
				$('#get_category').html(data);
			} 
		})
	}
	
	function animal() {
		$.ajax({
			url : 'functions.php',
			method: 'POST',
			data : {animal:1},
			success : function(data){
				$('#get_animal').html(data);
			} 
		})
	}
	
	
	
	
	
	
	
	
	
})
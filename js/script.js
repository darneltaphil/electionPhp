$(document).ready(function(){
	"use strict" ;
	load();
	function load() {
		setTimeout(function() {
			$("#se-pre-con").addClass("animated fadeOut")
		}, 8000);
		setTimeout(function() {
			$("#se-pre-con").remove()
		}, 9000);
	}
	
	$("#ballot").on("submit", function(e){
		$("#vote").attr('disabled', true);

		e.preventDefault();
			$.confirm({
		theme: 'supervan',//'dark', // 'material', 'bootstrap'
		title: 'Ready to vote?',
		icon: 'fas fa-vote-yea fa-5x',
		content: '<center><span class="btn btn-light">After you proceed, kindly leave the console.</span></center>',
		// columnClass: 'col-md-5 col-md-offset-5',
		typeAnimated: true,
		buttons: {
			Yes: {
				text: 'PROCEED',
				btnClass: 'btn-success',
				action: function(){			
					$.ajax({
						url:'process.php',
						method:'post',
						data:$("#ballot").serialize(),
						beforeSend:function(){
							$("#vote").html('Voting...').removeClass('btn-primary').addClass('btn-success');
						}
					}).done(function(){
						$('body').append('<div id="se-pre-con" class="animated fadeIn"></div>');
						load();
						$('#ballot')[0].reset();            
						$("#vote").html('VOTE').removeClass('btn-success').addClass('btn-primary');
						$("#vote").attr('disabled', false);
						// window.scroll({ top: 0,left: 0,behavior: 'smooth' });
						document.documentElement.scrollTop = 0;
					}).fail(function(){
						$.notify({
							message: '<h5>Something went wrong</h5>',
							placement: {
							from: "top",
							align: 'center'
										}
								},
							 {
							type: 'danger'
							});
					});
			
				}
				},
			No: {
				text: 'CANCEL',
				btnClass: 'btn-danger',
				action: function(){
					$("#vote").attr('disabled', false);
									}
				}

				}	
			})

	});


});


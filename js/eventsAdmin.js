	
	$(document).ready(function(){
		$("#card1").click( function (ev){

            $.get('../php/formSelectEntidad.php', function(data) { 
                $('body').append(data); 
                $("body div.menu div #x").click(function(e){
                    $("body .menu").fadeIn(500).remove();
                });
            });

		});

		$("#card2").click( function (ev){

		alert("card2");
		});

		$("#card3").click( function (ev){

			$.get('../php/formSelectUpdate.php', function(data) { 
                $('body').append(data); 
                $("body div.menu div #x").click(function(e){
                    $("body .menu").fadeIn(500).remove();
                });
            });
		});

		$("#card4").click( function (ev){

		alert("card4");
		});

	});
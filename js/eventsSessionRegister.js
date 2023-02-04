$(document).ready(function(){
    addEventsRegister();
    addEventSession();
});

function addEventsRegister(){
    $("#btnRegEmp").click( function (ev){
        var text=ev.target.textContent;
        if(text=="Empresa"){
            $.get('php/formEmpresa.php', function(data) { 
                $('body').append(data); 
                $("body div.menu div #x").click(function(e){
                    $("body .menu").fadeIn(500).remove();
                });
            });
        }
    });

    $("#btnCand").click( function (ev){
        var text=ev.target.textContent;
        if(text=="Candidato"){
           $.get('php/formCand.php', function(data) { 
            $('body').append(data); 
            $("body div.menu div #x").click(function(e){
				$("body .menu").fadeIn(500).remove();
			});
        });
        }
    });

    
    $("#btnISession").click( function (ev){
        var text=ev.target.textContent;
        if(text=="Iniciar sesion"){
           $.get('php/session.php', function(data) { 
            $('body').append(data); 
            $("body div.menu div #x").click(function(e){
				$("body .menu").fadeIn(500).remove();
			});
        });
        }
    });
}

function addEventSession(){

}
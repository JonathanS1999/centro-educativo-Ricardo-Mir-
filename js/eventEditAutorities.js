var action=1;
var idUpdate=0;
$(document).ready(function(){

    $("#button").click( function (ev){
       var cargo=  $("#cargo").val();
       var nombre = $("#nombre").val();
       var image = $("#image").val();
       if(image!="" || action==4){
        if(nombre!=""&&cargo!=""){
        var formData = new FormData($("#form")[0]);
        formData.append("actionBase",action);
        formData.append("btn",this);
        if(action==4){
        formData.append("id",idUpdate);
        }
        $.ajax({
            url:"iudAutorities.php",
            type:"post",
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(res){
                $("#contImage img").remove();
                $("#cargo").val("");
                $("#nombre").val("");
                $("#image").val("");
                onclikItems();
                action=1;
                },
            error: function(e){
                alert("hay error");
            }
            });
        }else{
            alert("por favor rellena el formulario");
        }
       }else{
        alert("por favo selecciona una imagen");
       }
       
    });

    onclikItems();

});


function onclikItems(){
    $.post("processAutorities.php",function(mensaje, estado){
        document.getElementById("container").innerHTML=mensaje;
        
        $('button[name="edit"]').click(function (ev){
            var id=ev.target.value;
            var formData = new FormData();
            formData.append("actionBase",3);
            formData.append("select",id);
            $.ajax({
                url:"iudAutorities.php",
                type:"post",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(res){
                    $("#contImage img").remove();
                    var obj= jQuery.parseJSON(res);
                   $("#cargo").val(""+obj.cargo);
                   $("#nombre").val(""+obj.nombre);
                   var image="<img src='../../"+obj.image_url+"' class='imageUpdate' />";
                   $("#contImage").prepend(image);
                   action=4;
                   idUpdate=obj.id;
                    },
                error: function(e){
                    alert("hay error");
                }
                });
        });

        $('button[name="delete"]').click(function (ev){
            var id=ev.target.value;
            var element=this;
            var formData = new FormData();
            formData.append("actionBase",2);
            formData.append("del",id);
            $.ajax({
                url:"iudAutorities.php",
                type:"post",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(res){
                        var del=$("div[id='"+id+"']");
                        del.remove();
                        $("#contImage img").remove();
                        $("#cargo").val("");
                        $("#nombre").val("");
                        $("#image").val("");
                    },
                error: function(e){
                    alert("hay error");
                }
                });
            
        });
    });
}



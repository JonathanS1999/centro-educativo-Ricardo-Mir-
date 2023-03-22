var action=1;
var idUpdate=0;
const queryString=window.location.search;
const urlParams= new URLSearchParams(queryString);
const variable=urlParams.get("op");
const op=variable;
$(document).ready(function(){

   

    $("#button").click( function (ev){
       var description=  $("#description").val();
       var title = $("#title").val();
       var image = $("#image").val();

       if(image!="" || action==4){
        if(description!=""&&description!=""){
        var formData = new FormData($("#form")[0]);
        formData.append("actionBase",action);
        formData.append("btn",this);
        formData.append("op",op);
        if(action==4){
        formData.append("id",idUpdate);
        }
        
        $.ajax({
            url:"iudNoticesProyects.php",
            type:"post",
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(res){
                $("#contImage img").remove();
                $("#description").val("");
                $("#title").val("");
                $("#image").val("");
                onclikItems();
                action=1;
                alert(res);
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
    $.post("showNoticesProyect.php", {op:op},function(mensaje, estado){
        document.getElementById("container").innerHTML=mensaje;

        
        $('button[name="edit"]').click(function (ev){
            var id=ev.target.value;
            var formData = new FormData();
            formData.append("actionBase",3);
            formData.append("select",id);
            $.ajax({
                url:"iudNoticesProyects.php",
                type:"post",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(res){
                    $("#contImage img").remove();
                    var obj= jQuery.parseJSON(res);
                   $("#description").val(""+obj.description);
                   $("#title").val(""+obj.title);
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
                url:"iudNoticesProyects.php",
                type:"post",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(res){
                        onclikItems();
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

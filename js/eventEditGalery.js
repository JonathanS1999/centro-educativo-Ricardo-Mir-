var tg=1;
var action=1;
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
        formData.append("tg",tg);
        if(action==4){
        formData.append("id",idUpdate);
        }
        
        $.ajax({
            url:"iudGalery.php",
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

    $.get("showGalery.php", {tg:tg},function(mensaje, estado){
        document.getElementById("container").innerHTML=mensaje;
        addEventsMenu();
        addEventsItems();
    });

    deleteTag();
    addTagForm();
    
}

function deleteTag(){
    $("#tr1").remove();
    $("#tr2").remove();
    $("#tr3").remove()
}

function addEventsMenu(){
    $("#instalations").click( function (ev){
        tg=1;
        onclikItems();
    });
    $("#photos").click( function (ev){
        tg=0;
        onclikItems();
    });
    $("#videos").click( function (ev){
        tg=2;
        onclikItems();
    });
}


function addEventsItems(){

    $('button[name="edit"]').click(function (ev){
        var id=ev.target.value;
        var formData = new FormData();
        formData.append("actionBase",3);
        formData.append("select",id);
        formData.append("tg",tg);
        $.ajax({
            url:"iudGalery.php",
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
        formData.append("tg",tg);
        $.ajax({
            url:"iudGalery.php",
            type:"post",
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(res){
                    onclikItems();
                    $("#contImage img").remove();
                    $("#description").val("");
                    $("#title").val("");
                    $("#image").val("");
                    alert(res);
                },
            error: function(e){
                alert("hay error");
            }
            });
        
    });
}

function addTagForm(){
    var tag="";
    if(tg!=2){
     tag = '<tr  id="tr1">'+
    '<td id="contImage">'+
    '<label for="imagen" >Imagen</label>'+
    '<div class="ajustTextFile">'+
    '<input type="file" name="imagen" id="image"/>  </div>'+
    '</td>'+
    '</tr>'+
    '<tr id="tr2">'+
'<td>'+
    '<div>'+
    '<label> titulo </label> </br>'+
    '<input type="text"  required="required" name="title" value="" id="title"/>'+
    '</div>'+
'</td>'+
'</tr>'+
'<tr id="tr3">'+
'<td>'+
    '<div>'+
    '<label> Descripción </label> </br>'+
    '<textarea name="areatexto"  required="required" id="description"></textarea>'+
    '</div>'+
'</td>'+
'</tr>';
    }else if(tg==2){
tag='<tr id="tr3">'+
'<td>'+
    '<div>'+
    '<label> Inserta la etiqueta del video </label> </br>'+
    '<textarea name="areatexto"  required="required" id="description"></textarea>'+
    '</div>'+
'</td>'+
'</tr>';
}
$("#table").prepend(tag);
}
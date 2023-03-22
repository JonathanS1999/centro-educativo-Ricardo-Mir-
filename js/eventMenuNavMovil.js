$(document).ready(function(){
    var viewNav=false;
    $("#btnNav").click( function (ev){
       
        if( viewNav){
            document.getElementById("navContainer").style.display="none";
            viewNav=false;
        }else{
            document.getElementById("navContainer").style.display="block";
            viewNav=true;
        }
    });
    var view1=false;
    $("#desp1").click( function (ev){
        if(view1){
            document.getElementById("subMenu1").style.display="none";
            view1=false;
            }else{
                document.getElementById("subMenu1").style.display="block";
                document.getElementById("subMenu2").style.display="none";
                document.getElementById("subMenu3").style.display="none";
            view1=true;
            view2=false;
            view3=false;
            }
        
    });
    var view2=false;
    $("#desp2").click( function (ev){
        if(view2){
            document.getElementById("subMenu2").style.display="none";
            view2=false;
            }else{
                document.getElementById("subMenu2").style.display="block";
                document.getElementById("subMenu1").style.display="none";
                document.getElementById("subMenu3").style.display="none";
            view2=true;
            view3=false;
            view1=false;
            }
        
    });
    var view3=false;
    $("#desp3").click( function (ev){
        if(view3){
            document.getElementById("subMenu3").style.display="none";
            view3=false;
            }else{
                document.getElementById("subMenu3").style.display="block";
                document.getElementById("subMenu1").style.display="none";
                document.getElementById("subMenu2").style.display="none";
            view3=true;
            view1=false;
            view2=false;
            }
        
    });

});
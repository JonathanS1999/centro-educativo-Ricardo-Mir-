$(document).ready(function(){
    var element = document.getElementById("canvasLA");
    var width=element.width;
    var height=element.height;
    var canvas=element.getContext("2d");
   drawStyleAdmision(canvas, width ,height );
});



function drawStyleAdmision(canvas, width ,height ){


    var gradient=canvas.createRadialGradient(width, 0 , width , width ,(height/2), ((height*0.5)/2) );
    gradient.addColorStop(0,"#f8dd1e");
    gradient.addColorStop(1,"#f8b61e");
    canvas.fillStyle=gradient;

        canvas.beginPath();
    canvas.moveTo(0,height*0.48);
    canvas.lineTo(width,height*0.98);
    canvas.lineTo(0,height);
    canvas.lineTo(0,height*0.5);
    canvas.fill();

        var gradient=canvas.createRadialGradient(width, 0 , width , width ,(height/2), ((height*0.5)/2) );
    gradient.addColorStop(0,"#660ccb");
    gradient.addColorStop(1,"#c19412");
    canvas.fillStyle=gradient;

    canvas.beginPath();
    canvas.moveTo(0,height*0.5);
    canvas.lineTo(width,height);
    canvas.lineTo(0,height);
    canvas.lineTo(0,height*0.5);
    canvas.fill();



    var gradient=canvas.createRadialGradient(width, 0 , width , width ,(height/2), ((height*0.5)/2) );
    gradient.addColorStop(0,"#660ccb");
    gradient.addColorStop(1,"#f81e60");
    canvas.fillStyle=gradient;
    canvas.beginPath();
    canvas.moveTo(width,height*0.7);
    canvas.lineTo(width*0.7,height);
    canvas.lineTo(width,height);
    canvas.lineTo(width,height*0.7);
    canvas.fill();

    var gradient=canvas.createRadialGradient(width, 0 , width , width ,(height/2), ((height*0.5)/2) );
    gradient.addColorStop(0,"#660ccb");
    gradient.addColorStop(1,"#80c19412");
    canvas.fillStyle=gradient;

    canvas.beginPath();
    canvas.moveTo(0,height*0.5);
    canvas.lineTo(width,height);
    canvas.lineTo(0,height);
    canvas.lineTo(0,height*0.5);
    canvas.fill();
}
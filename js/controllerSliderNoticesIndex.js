	
	var widthNT=0;
    var widthIncrementalNT=0;
    var intervalNT;
    var itemsNT=0;
    var contador_de_procesoNT=0;
    $(document).ready(function(){

    
		$("#arrorLeftControlNT").click( function (ev){
            var boxNOTICES = document.querySelector('.slider-container');
            var width = boxNOTICES.offsetWidth;
            var height = boxNOTICES.offsetHeight;

            widthIncrementalNT--;
            if(widthIncrementalNT<0){
                widthIncrementalNT=itemsNT-1;
            }

            var auxWidth=(-1*(100*widthIncrementalNT))+"%";

            boxNOTICES.style.marginLeft=auxWidth;

             boxNOTICES = document.querySelector('.slider-container');

            clearInterval(intervalNT);

            intervalNT=setInterval(sliderPrincipalw, 4500, boxNOTICES , itemsNT);

		});

        $("#arrorRightControlNT").click( function (ev){

            var boxNOTICES = document.querySelector('.slider-container');
            var width = boxNOTICES.offsetWidth;
            var height = boxNOTICES.offsetHeight;

            
            widthIncrementalNT++;
            if(widthIncrementalNT>=itemsNT){
                widthIncrementalNT=0;
            }
            var auxWidth=(-1*(100*widthIncrementalNT))+"%";

            boxNOTICES.style.marginLeft=auxWidth;

             boxNOTICES = document.querySelector('.slider-container');

            clearInterval(intervalNT);

            intervalNT=setInterval(sliderPrincipalw, 4500, boxNOTICES , itemsNT);
           

		});


        var boxNOTICES = document.querySelector('.slider-container');
         itemsNT=document.querySelector('.slider-container').childElementCount;

       intervalNT= setInterval(sliderPrincipalw, 4500, boxNOTICES , itemsNT);
       
	});

    function sliderPrincipalw(boxNT , itemsNT){

        widthIncrementalNT++;
        if(widthIncrementalNT>=itemsNT){
            widthIncrementalNT=0;
        }

        boxNT.style.marginLeft=(widthIncrementalNT*-100)+"%";
        console.log(" contador_de_proceso "+contador_de_procesoNT+" "+(widthIncrementalNT*-100)+"%");

        contador_de_procesoNT++;

    }

	
	
    var width;
    var widthIncremental=0;
    var interval;
    var items=2;

    $(document).ready(function(){

		$("#arrorLeftControl").click( function (ev){
            var box = document.querySelector('.slider-containerFP');
            var width = box.offsetWidth;
            var height = box.offsetHeight;

            widthIncremental--;
            if(widthIncremental<0){
                widthIncremental=items-1;
            }

            var auxWidth=(-1*(100*widthIncremental))+"%";

            box.style.marginLeft =auxWidth;

            var box = document.querySelector('.slider-containerFP');
            width = box.offsetWidth;

            console.log(" si pasa por aqui left");
            
            clearInterval(interval);
            console.log("aux="+auxWidth);
            interval=setInterval(sliderPrincipal, 3500, box , width, items);

		});

        $("#arrorRightControl").click( function (ev){

            var box = document.querySelector('.slider-containerFP');
            var width = box.offsetWidth;
            var height = box.offsetHeight;

            
            widthIncremental++;
            if(widthIncremental>=items){
                widthIncremental=0;
            }
            var auxWidth=(-1*(100*widthIncremental))+"%";

            box.style.marginLeft=auxWidth;

            var box = document.querySelector('.slider-containerFP');
            width = box.offsetWidth;

            console.log(" si pasa por aqui right");

            clearInterval(interval);

            interval=setInterval(sliderPrincipal, 3500, box , width, items);
           

		});

        var width=box = document.querySelector('.slider-containerFP').offsetWidth;

        var box = document.querySelector('.slider-containerFP');
         width = box.offsetWidth;
         items=2;

       interval= setInterval(sliderPrincipal, 3500, box , width, items);
       
	});

    function sliderPrincipal(box , width, items){

        widthIncremental++;
        if(widthIncremental>=items){
            widthIncremental=0;
        }
        
        box.style.marginLeft=(widthIncremental*-100)+"%";
        console.log(" rt "+widthIncremental);

    }

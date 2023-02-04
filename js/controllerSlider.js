	
	
    var width;
    var widthIncremental=0;

    $(document).ready(function(){

		$("#arrorLeftControl").click( function (ev){
            var box = document.querySelector('.slider-containerFP');
            var width = box.offsetWidth;
            var height = box.offsetHeight;
            box.style.marginLeft ="0%";


		});

        $("#arrorRightControl").click( function (ev){

            var box = document.querySelector('.slider-containerFP');
            var width = box.offsetWidth;
            var height = box.offsetHeight;

            box.style.marginLeft="-100%";

		});

        var width=box = document.querySelector('.slider-containerFP').offsetWidth;

        var box = document.querySelector('.slider-containerFP');
         width = box.offsetWidth;
         var items=2;

        setInterval(sliderPrincipal, 2500, box , width, items);
       
	});

    function sliderPrincipal(box , width, items){

        widthIncremental++;
        if(widthIncremental>=items){
            widthIncremental=0;
        }
        
        box.style.marginLeft=(widthIncremental*-100)+"%";
        console.log(" rt "+widthIncremental);

    }

// var $body = document.querySelector("body");
// var body  = new Hammer($body);
$(document).ready(main);

var contador=1;

function main(){
    $(".button-menu").click(function(){
        //$("nav").toggle();
        if (contador===1) {
            $(".menu").animate({
                left:"0"    
            });
            contador=0;
        }else{
            contador=1;
            $(".menu").animate({
                left:"-100%"    
            });
        }
    });
};
// var contador=1;
// body.on('panleft', function(){
//     $('.menu').animate({
//         left:'-100%'
//     });
// });

// var contador=0;
// body.on('panright', function(){
//     $('.menu').animate({
//         left:'0'
//     });
// });

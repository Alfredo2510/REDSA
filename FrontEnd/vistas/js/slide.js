/*=============================================
VARIABLES
=============================================*/
var item = 0;
var itemPaginacion = $("#paginacion li");
var interrumpirCiclo = false;
var imgProducto = $(".imgProducto");
var titulos1 = $("#slide h1");
var titulos2 = $("#slide h2");
var titulos3 = $("#slide h3");
var btnVerProducto = $("#slide button");
var detenerIntervalo = false;

/*=============================================
ANIMACIÓN INICIAL
=============================================*/
$(imgProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(imgProducto[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos1[item]).animate({"top":-10 +"%", "opacity": 0},300)
$(titulos1[item]).animate({"top":30 +"px", "opacity": 1},600)
$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0},300)
$(titulos2[item]).animate({"top":30 +"px", "opacity": 1},600)
$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0},300)
$(titulos3[item]).animate({"top":30 +"px", "opacity": 1},600)

$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0},350)
$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1},600)



/*=============================================
PAGINACION
=============================================*/
$("#paginacion li").click(function(){

    item = $(this).attr("item")-1;

    movimientoSlide(item);

})

/*=============================================
AVANZAR
=============================================*/
function avanzar(){
    if(item == 3){
        item =0;
    }else{
        item++;
    }
    movimientoSlide(item);
}

$("#slide #avanzar").click(function(){
    avanzar();

})

/*=============================================
RETROCEDER
=============================================*/

$("#slide #retroceder").click(function(){
    
    if(item == 0){
        item =3;
    }else{
        item--;
    }
    movimientoSlide(item);

})

/*=============================================
MOVIMIENTO DEL SLIDE
=============================================*/
function movimientoSlide(item){
    $("#slide ul").animate({"left": item * -100 + "%"}, 500)
    $("#paginacion li").css({"opacity":.5})
    $(itemPaginacion[item]).css({"opacity":1})
    interrumpirCiclo = true;


    $(imgProducto[item]).animate({"top":-10 +"%", "opacity": 0},200)
    $(imgProducto[item]).animate({"top":30 +"px", "opacity": 1},800)

    $(titulos1[item]).animate({"top":-10 +"%", "opacity": 0},300)
    $(titulos1[item]).animate({"top":30 +"px", "opacity": 1},600)
    $(titulos2[item]).animate({"top":-10 +"%", "opacity": 0},300)
    $(titulos2[item]).animate({"top":30 +"px", "opacity": 1},600)
    $(titulos3[item]).animate({"top":-10 +"%", "opacity": 0},300)
    $(titulos3[item]).animate({"top":30 +"px", "opacity": 1},600)

    $(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0},350)
    $(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1},600)
}

/*=============================================
INTERVALO Interrumpir Ciclo
=============================================*/
setInterval(function(){

    if(interrumpirCiclo){
        interrumpirCiclo = false;
    }else{
        if (!detenerIntervalo){
            avanzar();
        }
         
    }

 

},3000)

/*=============================================
FLECHAS CON ANIMACION "APARECER"
=============================================*/
$("#slide").mouseover(function(){
    $("#slide #retroceder").css({"opacity":1});
    $("#slide #avanzar").css({"opacity":1});

    detenerIntervalo=true;
})


$("#slide").mouseout(function(){
    $("#slide #retroceder").css({"opacity":0});
    $("#slide #avanzar").css({"opacity":0});
    detenerIntervalo=false;
})
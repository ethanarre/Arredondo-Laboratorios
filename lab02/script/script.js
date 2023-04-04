
function Mostrar(){
    var user=document.getElementById('user').value;
    var email=document.getElementById('email').value;
    if( user!==null || email!==null ){
        alert("Bienvenido "+user+", su usuario es "+email)
    }else{
        alert("Introduzca sus datos")
    }
}
var btn=document.getElementById('button1');
btn.addEventListener("click",()=>Mostrar())




function Ejercicio2(){
    var n1=document.getElementById('num1').value;
    var n2=document.getElementById('num2').value;
    var n3=document.getElementById('num3').value;
    var n4=document.getElementById('num4').value;
    var r1=parseInt(n1) + parseInt(n2);
    var r2=parseInt(n3) * parseInt(n4);
    document.getElementById('r1').value=r1;
    document.getElementById('r2').value=r2;
}
var btn2=document.getElementById('btn2').value;
btn2.addEventListener('click',()=>Ejercicio2)




function Ejercicio3(){
    var val1=document.getElementById('val1').value;
    var val2=document.getElementById('val2').value;
    var n1 = parseInt(val1);
    var n2 = parseInt(val2);
    if(n1>n2){
        var r1 = parseInt(n1) - parseInt(n2);
        alert(n1+" es mayor que "+n2+" por "+r1);
    }else{
        if(n2>n1){
            var r1 = parseInt(n2) - parseInt(n1);
            alert(n1+" es menor que "+n2+" por "+r1);
        }else{
            alert(n1+" y "+n2+" son iguales");
        }
    }};
var btn3=document.getElementById('btn3');
btn3.addEventListener("click",()=>Ejercicio3())




function Ejercicio4(){
    var val1=document.getElementById('nota1').value;
    var val2=document.getElementById('nota2').value;
    var val3=document.getElementById('nota3').value;

    if(parseInt(val1)>10){
        alert("La maxima nota es 10")
        return
    }
    if(parseInt(val2)>10){
        alert("La maxima nota es 10")
        return
    }
    if(parseInt(val3)>10){
        alert("La maxima nota es 10")
        return
    }
    var prom = (parseInt(val1) + parseInt(val2) + parseInt(val3))/3;
    if(prom>=4){
        document.getElementById('prom').value = "Regular: "+prom;
    }else{
        document.getElementById('prom').value = "Reprobado: "+prom;
    }
}
var btn4=document.getElementById('btn4');
btn4.addEventListener("click",()=>Ejercicio4())




function Ejercicio5(){
    var val1=document.getElementById('number1').value;
    var val2=document.getElementById('number2').value;
    var val3=document.getElementById('number3').value;
    if(parseInt(val1)>parseInt(val2)){
        if(parseInt(val1)>parseInt(val3)){
            alert(val1+" es el número mayor")
        }else{
            alert(val3+" es el número mayor")
        }
    }else{
        if(val2>val3){
            alert(val2+" es el número mayor")
        }else{
            alert(val3+" es el número mayor")
        }
    }
}
var btn5 = document.getElementById('btn5').value;
btn5.addEventListener('click',()=>Ejercicio05());
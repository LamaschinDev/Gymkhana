//Basicamente crea toda la pagina primero y despues la funcion inciar
window.onload = inciar;


function inciar(){
    var btnCalcular = document.getElementById("btnCalcular");
    btnCalcular.addEventListener("click",clickBtnCalcular);
    
}

function clickBtnCalcular(){
    var txtPeso = document.getElementById("txtPeso");
    var Peso = txtPeso.value;
    var txtAltura = document.getElementById("txtAltura");
    var Altura = txtAltura.value;

    var imc= Peso/(Altura*Altura);
    alert("El imc es: " + imc);

    var valor 
    valor= imc;
   
    if(valor<16.00) 
        {
            alert("Peso bajo necesitas Valorar signos de desnutricion");
        }
    else if(valor<=16.00 || valor<=16.99)
        {
            alert("Delgades Moderada");
        }
    else if (valor<=17.00 || valor<18.49)
        {
            alert("Delgades Leve");
        }
    else if (valor<=18.50 || valor<=24.99)
        {
            alert("Peso Normal");
        }
    else if (valor<=25.00 || valor<=29.99)
        {
            alert("Tienes OBESIDAD GRADA I. Riesgo alto para desarrollar enfermedades cardiovasculares");
        }
    else if (valor<=30.00 || valor<=34.99)
        {
            alert("Tienes OBESIDAD GRADA II. Riesgo alto para desarrollar enfermedades cardiovasculares");
        }
   else if (valor<=35.00 || valor>40.00)
        {
            alert("Tienes OBESIDAD GRADO III. Riesgo muy alto para desarrollar enfermedades cardiovasculares");
        }
    else 
        {
            alert("No existe clasificacion");
        }
}
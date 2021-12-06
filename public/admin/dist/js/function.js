const { runInContext } = require("lodash");

function hideElements(){

    if(document.getElementById('selectPadre').value == 0){
        var valor = document.getElementById('selectPadre').value;
        document.getElementById('div__changes-raiz').style.display = 'block';
        document.getElementById('div__changes-raiz2').style.display = 'block';
        document.getElementById('div__changes-raiz3').style.display = 'block';
        // document.getElementsByClassName('div__changes-raiz').style.display = 'none';

    }
    else{
        document.getElementById('div__changes-raiz').style.display = 'none';
        document.getElementById('div__changes-raiz2').style.display = 'none';
        document.getElementById('div__changes-raiz3').style.display = 'none';
    }

}
function returnView(){
    let url = "{{route('admin.pantalla.delete')}}";
    window.location.href = url;
}

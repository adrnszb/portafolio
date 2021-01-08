$(document).ready(function(){
    $('#btnguardar').click(function(){
        var datos=$('#frmajax').serialize();

        $.ajax({
            type:"POST",
            url:"../insertar.php",
            data:datos,
            success:function(r){
                if(r==1){
                    alert("Agregado con éxito");
                }else{
                    alert("Fallo");
                }
            }
        });

        return false;
    });
});

var evento = {
    init: function(){
      this.bt_enter();  
    },
    
    bt_enter: function(){
        var me = this;
        
        $("#email").keypress(function(e){
            if(e.which === 13){
                me.validar();
            }
        });
        
         $("#senha").keypress(function(e){
            if(e.which === 13){
                me.validar();
            }
        });
    },
    
    validar: function(){
        var me    = this,
            email = $.trim($("#email").val()),
            senha = $.trim($("#senha").val());
    
            if(email !== "" && senha !== ""){
                $.post("inicial/login", "&email="+email+"&senha="+senha, function(retorno){
                    if(retorno === "sucesso"){
                       $(location).attr("href", "areaProfessor"); 
                    } else {
                      alert ("Email ou senha errada");  
                    }
                });
            } else {
                alert ("Informe o email e a senha");
            }
    }
};

$(document).ready(function(){
    evento.init();
});

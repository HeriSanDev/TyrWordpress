jQuery(document).ready(function() {
    

    var Root="http://"+document.location.hostname+"/";

  
    jQuery("#FiltroBusca").on("submit", function(event){
        event.preventDefault();
        var Dados =jQuery(this).serialize();
        
        jQuery.ajax(
            {
                url: Root+"controllerFilter",
                method: "post",
                dataType: "html",
                data: Dados,
                success: function(Dados) {
                    jQuery('#ResultadoBuscaPosts').empty().html(Dados);
                }
            }
        );
    });
    
    var HeightWindow=jQuery(window).height();
    jQuery('.Fundo404').height(HeightWindow);
        

    });
(function($, window, document, undefined) {
    "use strict";
    
    var loadCities = {
        init: function() {

            $('select[name="state"]').on('change', function() {
                var id_state = $(this).val();
                var token = $('input[name="_token"]').val();
                
                $.ajax({
                    url: $('body').data('src') + '/load-cidades',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_state: id_state, _token: token},
                    beforeSend: function() {
                        console.log('init');
                    },
                    success: function(data) {
                        if(data.code == 200) {
                            $('select[name="city"]').html(data.options);
                        } else {
                            alert('Errouuuuu');
                        }
                    },
                    error: function(x) {
                        console.log('erro');
                        console.log(x);
                    }
                });
            });
        }
    }
    
    var masks = {
        init: function() {
            $('.cpf-mask').mask('000.000.000-00', {reverse: false});
            $('.phone-mask').mask('(00) 00000-0000');
            $('.cep-mask').mask('00000-000');
            $('.height-mask').mask('0000');
            $('.weight-mask').mask('0000');
            $('.data-mask').mask("00/00/0000", {placeholder: "__/__/____"});
        }
    }
    
    loadCities.init();
    masks.init();
    
}(jQuery, window, document));
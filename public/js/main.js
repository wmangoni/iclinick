(function($, window, document, undefined) {
    "use strict";

    function loadCity(id_state) {

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
                    $('select[name="city_id"]').html(data.options);
                } else {
                    alert('Errouuuuu');
                }
            },
            error: function(x) {
                console.log('erro');
                console.log(x);
            }
        });
    }

    var loadCities = {
        init: function() {
            var state_id = $('select[name="state_id"]').val();
            var city_id = $('select[name="city_id"]').data('id');

            if (state_id != '' && state_id != 0) {
                loadCity(state_id);
            }

            $('select[name="state_id"]').on('change', function() {
                var id_state = $(this).val();
                loadCity(id_state);
            });

            if (city_id != 0) {
                console.log('caiu no if');
                //$('select[name="city_id"] option[value="'+city_id+'"]').attr('selected', true);
                $('select[name="city_id"] option').on('each', function() {
                    if ($(this).val() == city_id) {
                        $(this).attr('selected', true);
                    }
                });
            }
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
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
    
    loadCities.init();
    
}(jQuery, window, document));
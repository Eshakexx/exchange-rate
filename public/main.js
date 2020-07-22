$("[data-acttion='calculate']" ).on( "click", function() {
    $.ajax({
        url: 'index.php?action=convert',
        data: {
            value: $('[data-container="value"]').val(),
            currency : $('[data-container="select-currency"]').val(),
        },
        success: function( result ) {
            $('[data-container="outcome"]').val(result);
        }
    });
})
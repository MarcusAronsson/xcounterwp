jQuery(function ($){

    var frame;

    $( document ).on( 'click', '.upload-media-button', function ( event ) {

        event.preventDefault();


        //this är knappen
        var self = $ ( this),
        //Find the siblings, don't want to select all
            imageContainer = self.siblings ( '.image-container'),
            mediaInput = self.siblings( '.media-input' );

        frame = wp.media({
            title: 'Insert Media',
            button: {
                text: 'Use image'
            },
            library: {
                type: 'image'
            },
            multiple: false
        });

        frame.on( 'select', function() {
            //Attachment object
            var attachment = frame.state().get( 'selection').first().toJSON();

            if( attachment.type === 'image' ){
                imageContainer.html( '<img src="' + attachment.url +  '" style="max-width: 100%; margin: 5px 0; display: block;">');
            }

            mediaInput.val( attachment.url );

            mediaInput.change();

        } );

        frame.open();

    });

});
function activePage(page) {
    if (page == 'dashboard') {
        $('.dashboard').addClass('active');
    }
    if (page == 'directory') {
        $('.directory').addClass('active');
    }
    if (page == 'report') {
        $('.report').addClass('active');
    }
    if (page == 'charts') {
        $('.charts').addClass('active');
    }
    if (page == 'calendar-standard') {
        $('.calendar-standard').addClass('active');
    }
    if (page == 'calendar-custom') {
        $('.calendar-custom').addClass('active');
    }
}

function openModal( modalTitle, iframeSrc ) {
    $( '#cb-modal-title' ).html( modalTitle );
    $( '#cb-modal-body'  ).html( '<iframe frameborder="0" width="100%" scrolling="no" id="cb-modal-frame" src="' + iframeSrc + '"></iframe>' );
    $( '#cb-modal-frame' ).on( 'load', function() {
        iframeLoaded( this.id );
    });  
    $( '#cb-modal' ).modal();
}

function openLogModal( modalTitle, dataPageSrc ) {
    $( '#cb-modal-body' ).html( '' );
    var dataPageScript = document.createElement("script");
    dataPageScript.src = dataPageSrc;
    document.getElementById( 'cb-modal-body' ).appendChild( dataPageScript );
    
        $( '#cb-modal-title' ).html( modalTitle );
        $( '#cb-modal' ).modal({
        backdrop: 'static',
        keyboard: false
    });
}

function iframeLoaded( elementId ){
    setTimeout( function() {

    var $iframe = $('#'+ elementId ).length ? $('#'+ elementId ) : window.parent.$('#'+ elementId );
    var padding = 0;
        
    $iframe.css( 'height', '0px' );  
    var height = $iframe.get(0).contentWindow.document.body.scrollHeight + padding;
    $iframe.css( 'height', height + 'px' );

    }, 50 );
}

$('.chart-container').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView && $(this).attr('data-isloaded') == 'N')
    {
        if (visiblePartY == 'top'){
            var dataPageScript = document.createElement("script");
            dataPageScript.src = $(this).attr('data-dpsrc');

            this.appendChild( dataPageScript );
            $(this).attr({'data-isloaded' : 'Y' });

        } // alert('element is now visible in the viewport!');
        else if (visiblePartY == 'bottom'){} // alert('bottom part of element is visible!')
        else
        {
            
        }
    }
    else{} // alert('element has gone out of viewport!');
});
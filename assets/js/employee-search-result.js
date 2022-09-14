document.addEventListener('DataPageReady', function(event) {
    if (event.detail.appKey == 'caf260004f0836038ffd4a4795ab') {

        $('.cbSubmitButtonContainer').hide();

        var position = $('input[name$="cbParamVirtual4"]');

        if (position.val()) {
            var interval = setInterval(function() {
                $('select[name="cbParamVirtual2"]').val(position.val());
                if ($('select[name="cbParamVirtual2"]').val()) {
                    clearInterval(interval);
                }
            }, 100);
        };

        
    };

    if (event.detail.appKey == 'caf260000a722c4ddca74c01ad27') {
        $('.cbSubmitButtonContainer').hide();
    }

    if (event.detail.appKey == 'caf260008264958e54014ac3a997') {

        $('.cb-result-container table[data-cb-name="cbTable"] tbody tr').on('click', '.cb-edit-button',function() {
            $(this).parent().parent().last().find('a[data-cb-name="InlineEdit"]').trigger('click');
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.cb-result-container table[data-cb-name="cbTable"] tbody tr').on('click', '.cb-delete-button',function() {
            $(this).parent().parent().last().find('a[data-cb-name="InlineDelete"]').trigger('click');
        });
        
        $('[data-toggle="tooltip"]').tooltip();
    };

    if (event.detail.appKey == 'caf260003c1ad036a629409cb16a') {
        $('[data-toggle="tooltip"]').tooltip();
    } 

    if (event.detail.appKey == 'caf26000cdf294cbb1b44d39a6f1') {
        $('[data-toggle="tooltip"]').tooltip();
    }

    //Open log Modal sample
    $('.add-log-button').on('click', function() {
        openLogModal('Add Log', 'https://Datapage.link');
    });

});

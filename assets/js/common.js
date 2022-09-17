var cbAccountId = 'c3abw763'; // 8 character ID
var cbAppKeyPrefix = '7ccbb000'; // 8 character Prefix

var cbDomain = 'https://' + cbAccountId + '.caspio.com';
var cbDataPagePrefix = cbDomain + '/dp/' + cbAppKeyPrefix;
/**
 * Samples DataPage src:
 * https://c2axa202.caspio.com/dp/caf260007a03bf51843444c08db3/emb
 * https://{AccountID}.caspio.com/dp/{AppKeyPrefix}7a03bf51843444c08db3/emb
 */

/**
 * Deploy a DataPage to an element.
 * Sample call:
 * deployDP('result-container', '7a03bf51843444c08db3', '?ID=24')
 *
 * @param {string} containerID Element's ID where the DataPage will be inserted
 * @param {string} appKey DataPage App Key without the 8 digit prefix
 * @param {string} params Query string parameters for the DataPage, question mark should be included.
 */
function deployDP(containerID, appKey, params) {
    var params = params || '';
    var dataPageScript = document.createElement("script");
    var container = document.getElementById(containerID);
    dataPageScript.src = cbDataPagePrefix + appKey + '/emb' + params;
    container.innerHTML = '';
    container.appendChild(dataPageScript);
}

/**
 * Deploy a DataPage to the common modal and show it. Uses deployDP internally
 * Also makes that modal draggable.
 * Sample call:
 * openModal('Edit Employee', '7a03bf51843444c08db3', '?ID=24', 'modal-md')
 *
 * @param {string} modalTitle Title to appear in the modal header
 * @param {string} appKey DataPage AppKey without the prefix
 * @param {string} params Query string parameters for the DataPage, question mark should be included.
 * @param {string} size Bootstrap modal class to be added for its size, i.e  'modal-sm', 'modal-md', 'modal-lg', or 'modal-xl'
 */
function openModal(modalTitle, appKey, params, size) {
    $('#cb-modal-body').html('');
    if (size) {
        $("#cb-modal .modal-dialog")
            .removeClass("modal-sm modal-md modal-lg modal-xl")
            .addClass(size);
    }
    deployDP("cb-modal-body", appKey, params);
    $('#cb-modal-title').html(modalTitle);
    $('#cb-modal').modal({
        backdrop: 'static',
        keyboard: false
    });

    // draggable modal
    $(".modal-header").on("mousedown", function (mousedownEvt) {
        var $draggable = $(this);
        var x = mousedownEvt.pageX - $draggable.offset().left,
            y = mousedownEvt.pageY - $draggable.offset().top;
        $("body").on("mousemove.draggable", function (mousemoveEvt) {
            $draggable.closest(".modal-content").offset({
                "left": mousemoveEvt.pageX - x,
                "top": mousemoveEvt.pageY - y
            });
        });
        $("body").one("mouseup", function () {
            $("body").off("mousemove.draggable");
        });
        $draggable.closest(".modal").one("bs.modal.hide", function () {
            $("body").off("mousemove.draggable");
        });
    });
}

/**
 * Refresh a DataPage manually.
 *
 * @param {string} appKey DataPage AppKey without the prefix
 */
 function refreshDP(appKey) {
    for (var key in window.dataPageManagerObj.dataPages) {
        if (key.search(cbAppKeyPrefix + appKey) != -1) {
            window.dataPageManagerObj.dataPages[key].refresh();
        }
    }
}

/**
 * *Kind of outdated. Use openModal instead*
 * Open a default sized modal and deploy a data page.
 *
 * @param {string} modalTitle Title to appear in the modal header
 * @param {string} dataPageSrc Complete DataPage src
 */
 function openLogModal(modalTitle, dataPageSrc) {
    $('#cb-modal-body').html('');
    var dataPageScript = document.createElement("script");
    dataPageScript.src = dataPageSrc;
    document.getElementById('cb-modal-body').appendChild(dataPageScript);

    $('#cb-modal-title').html(modalTitle);
    $('#cb-modal').modal({
        backdrop: 'static',
        keyboard: false
    });
}

// Previous openModal function, uses an iFrame
// function openModal( modalTitle, iframeSrc ) {
//     $('#cb-modal-title').html( modalTitle );
//     $('#cb-modal-body').html('<iframe frameborder="0" width="100%" scrolling="no" id="cb-modal-frame" src="' + iframeSrc + '"></iframe>');
//     $('#cb-modal-frame').on( 'load', function() {
//         //iframeLoaded( this.id );
//     });
//     $('#cb-modal').modal();
// }

/**
 * Adjust the height of the iFrame after a few seconds.
 * Usually called on its 'load' event
 *
 * @param {string} elementId iFrame ID
 */
function iframeLoaded(elementId) {
    setTimeout(function () {
        var $iframe = $('#' + elementId).length ? $('#' + elementId) : window.parent.$('#' + elementId);
        var padding = 0;

        $iframe.css('height', '0px');
        var height = $iframe.get(0).contentWindow.document.body.scrollHeight + padding;
        $iframe.css('height', height + 'px');
    }, 2000);
}

/**
 * Extract Query String parameters
 *
 * @returns Array of parameters from the URL Query String.
 */
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        hash[1] = unescape(hash[1]);
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }

    return vars;
}
var urlVars = getUrlVars(); // Global variable for the URL parameters

// hide default submit button row at the bottom of inline forms
document.addEventListener('DataPageReady', function (e) {
    $('.cb-btn-reset').bind('click', function () {
        $(this).closest('form').find('select, input[type="text"]').val('');
        $(this).closest('form').find('input[type="submit"]').click();
    });

    // checkboxes to add/remove class to target
    $('input[role="cb-toggle-table"]').click(function () {
        var targetId = $(this).data('target');
        var className = $(this).data('class');

        if (this.checked) {
            $('#' + targetId).addClass(className);
        } else {
            $('#' + targetId).removeClass(className);
        }
    });
});

/**
 * Set the Nav's active page
 *
 * @param {string} page Page key or class to be set as active
 */
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

/**
 * Initial load for Caspio Orange
 * Add event to charts to load DataPages only when in view
 */
 $(function () {
    //Load the chart in the viewport
    $('.chart-container').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
        if (isInView && $(this).attr('data-isloaded') == 'N') {
            if (visiblePartY == 'top') {
                var dataPageScript = document.createElement("script");
                dataPageScript.src = $(this).attr('data-dpsrc');

                this.appendChild(dataPageScript);
                $(this).attr({ 'data-isloaded': 'Y' });
            } // alert('element is now visible in the viewport!');
            else if (visiblePartY == 'bottom') {

            } // alert('bottom part of element is visible!')
            else {

            }
        }
        else {

        } // alert('element has gone out of viewport!');
    });
 });

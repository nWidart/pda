$(document).ready(function() {
    /**
     * Table Toggles on character page
     *
     */
    $('table.statistics thead').on('click', function()
    {
        $(this).parent().find('tbody').fadeToggle();
    });
    /**
     * Doing the POST request for the profile info tab
     *
     */
    var $modal = $('.updateProfileInfo');
    $modal.on('submit', function(e)
    {
        e.preventDefault();
        $modal.modal('loading');
        var firstName = $('input[name="firstName"]').val(),
            lastName = $('input[name="lastName"]').val(),
            data = {
                'firstName' : firstName,
                'lastName' : lastName
            },
            posting = $.post( "/dashboard/update-user-info", data );
        posting.done( function(data) {

            $modal.modal('loading');
            if (data.success)
            {
                $('span.username').html( $('input[name="firstName"]').val() );
                alertify.success( data.success );
            }
            else
            {
                alertify.error( data.error );
                var html = '<div class="alert alert-error fade-in">';
                html += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                html += '<ul>';
                for (var i = 0; i < data.errors.length; i++) {
                    html += '<li>' + data.errors[i] + '</li>';
                }
                html += '</ul>';
                html += '</div>';
                $modal.prepend(html);
            }
        });
        posting.fail( function(data) {
            console.log('fail');
        });
    });

    /**
     * Loading to compare items modal
     */
     // var $compareItem = $(' .nwTooltip ');
     // $compareItem.on('click', function (e)
     // {
     //    e.preventDefault();
     //    $updateBtagForm.modal('loading');
     //    var itemId = $(this).attr('data-itemId');


     // });

    /**
     * Doing the POST request for the battletag info tab
     *
     */
    var $updateBtagForm = $('.updateBtagInfo');
    $updateBtagForm.on('submit', function(e){
        e.preventDefault();
        $updateBtagForm.modal('loading');

        var battletag = $('input#battletag').val(),
            server = $('select#server').val(),
            data = {
                'battletag' : battletag,
                'server' : server
            },
            posting = $.post( "/dashboard/update-user-btag-info", data );
        posting.done( function(data) {
            $updateBtagForm.modal('loading');
            if (data.success)
                alertify.success( data.success );
            else if (data.error)
            {
                alertify.error( data.error );
                var html = '<div class="alert alert-error fade-in">';
                html += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                html += '<ul>';
                for (var i = 0; i < data.errors.length; i++) {
                    html += '<li>' + data.errors[i] + '</li>';
                }
                html += '</ul>';
                html += '</div>';
                $updateBtagForm.prepend(html);
            }
        });
    });

    /**
     * The Import Characters Tab
     */
    $('.badge-small').on('click', function(){
        if(!$(this).find('input[type="checkbox"]').prop('checked')){
            $(this).find('input[type="checkbox"]').prop('checked', true).attr('checked','checked');
            $(this).addClass('badge-small-selected');
            $(this).find('i.icon-check-1').show();
        }else{
            $(this).find('input[type="checkbox"]').prop('checked', false).removeAttr('checked');
            $(this).removeClass('badge-small-selected');
            $(this).find('i.icon-check-1').hide();
        }
    });

    /**
     * Force close the modal
     */
    $('.jsCloseModal').on('click', function (e)
    {
        e.preventDefault();
        $('#modal').modal('hide');
    });
});

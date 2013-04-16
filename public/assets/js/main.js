$(document).ready(function() {

    $('.d3form').on('submit', function(e) {
        // Prevent the form from submiting
        e.preventDefault();

        // Get the Battletag from the form input
        var btag = $('input.battletag').val();
        $('.ajaxBtn').val('Loading');
        var posting = $.post( "/diablo/get-heroes", { 'battletag' : btag } );
        posting.done( function(data) {
            var html = '<form class="d3form_p2" action="/diablo/import" method="post">';
            html += '<a href="#"" id="select-all">select all</a> | ';
            html += '<a href="#" id="deselect-all">deselect all</a>';
            html += '<select multiple="multiple" id="d3characters" name="d3characters[]">';
            // $.each( data, function( key, value ){
            //     html += '<option value="' + key + '">' + value + '</option>';
            // });
            html += data;
            html += "</select>";
            html += '<input class="btn" type="submit" value="Import">';
            html +="</form>";
            html += '<script type="text/javascript">';
                html += '$("#d3characters").multiSelect({';
                html += '});';
                html += "$('#select-all').click(function(){";
                    html += "$('#d3characters').multiSelect('select_all');";
                    html += "return false;";
                html += "});";
                html += "$('#deselect-all').click(function(){";
                    html += "$('#d3characters').multiSelect('deselect_all');";
                    html += "return false;";
                html += "});";
            html += '</script>';
            $('.ajaxBtn').val('Done');
            $('.battletag').attr('disabled', 'disabled');
            $('.ajaxBtn').attr('disabled', 'disabled');
            setTimeout(function() {
                  $('.d3form').slideUp();
            }, 500);
            $('div.appending').append(html);
        });

    });

    /**
     * Doing the POST request for the profile info tab
     *
     */
    var $modal = $('.updateProfileInfo');
    $modal.on('submit', function(e){
        e.preventDefault();
        $modal.modal('loading');
        var firstName = $('input[name="firstName"]').val(),
            lastName = $('input[name="lastName"]').val(),
            battletag = $('input#battletag').val(),
            data = {
                'firstName' : firstName,
                'lastName' : lastName,
                'battletag' : battletag
            },
            posting = $.post( "/dashboard/update-user-info", data );
        posting.done( function(data) {
            $modal.modal('loading');
            if (data.success)
                alertify.success( data.success );
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
                $modal.find('.modal-body').prepend(html);
            }
        });
    });

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
                $updateBtagForm.find('.modal-body').prepend(html);
            }
        });
    });

});

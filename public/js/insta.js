

$.getJSON('/resources/insta.json')
    .done( function(obj, status, xhdr) {
        console.log(xhdr.responseJSON.html);
        $('#instagram').html(xhdr.responseJSON.html);
    });

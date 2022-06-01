$(function () {
    $('.create-new-event').click(function () {
        createEvent()
    })
})

let createEvent = () => {
    $.ajax({
        url: createEventUrl,
        method: 'POST',
        data: {
            title: $('#title').val(),
            places: $('#places').val(),
            description: $('#description').val(),
            start_at: $('#start_at').val()
        },
        success: function (response) {
            Swal.fire({
                icon: response.status,
                text: response.message
            }).then((result) => {
                if(result)
                {
                    window.location.reload();
                }
            });
        },
        error: function (response) {
            Swal.fire({
                icon: 'error',
                text: response.responseJSON.message
            });
        }
    })
}

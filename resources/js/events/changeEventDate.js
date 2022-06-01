$(function () {
    $('.change-event-date').click(function () {
        changeEventDate()
    })
})

let changeEventDate = () => {
    $.ajax({
        url: changeEventDateUrl,
        method: 'PUT',
        data: {
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

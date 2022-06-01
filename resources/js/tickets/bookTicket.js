$(function () {
    $('.book-new-ticket').click(function () {
        bookTicket()
    })
})

let bookTicket = () => {
    $.ajax({
        url: bookTicketUrl,
        method: 'POST',
        data: {
            name: $('#name').val(),
            last_name: $('#last_name').val(),
            email: $('#email').val()
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

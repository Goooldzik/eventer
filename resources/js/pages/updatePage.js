$(function () {
    $('.update-page').click(function () {
        updatePage()
    })
})

let updatePage = () => {
    $.ajax({
        url: updatePageUrl,
        method: 'PUT',
        data: {
            title: $('#title').val(),
            content: $('#content').val()
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

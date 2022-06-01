$(function () {
    $('.update-user').click(function () {
        updateUser()
    })
})

let updateUser = () => {
    $.ajax({
        url: updateUserUrl,
        method: 'PUT',
        data: {
            name: $('#name').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirmation: $('#password-confirm').val()
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

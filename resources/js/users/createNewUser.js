$(function () {
    $('.create-new-user').click(function () {
        createNewUser()
    })
})

let createNewUser = () => {
    $.ajax({
        url: createNewUserUrl,
        method: 'POST',
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

$(function () {
    $('.book-off').click(function () {
        Swal.fire({
            title: 'Potwierdź',
            text: "Czy na pewno chcesz usunąć rezerwację?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Tak, usuń!',
            cancelButtonText: 'Nie, nie usuwaj!',
            reverseButtons: true
        }).then((result) => {
            if(result.isConfirmed)
            {
                $.ajax({
                    method: 'POST',
                    url: bookOffUrl + $(this).data('id'),
                    success: function (response) {
                        Swal.fire({
                            icon: response.status,
                            text: response.message
                        }).then((result) => {
                            window.location.reload()
                        })
                    },
                    error: function (response) {
                        console.log(url)
                        Swal.fire({
                            icon: response.status,
                            text: response.responseJSON.message
                        })
                    }
                });
            }
        })
    })
})

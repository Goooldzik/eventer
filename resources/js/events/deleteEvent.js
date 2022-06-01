$(function () {
    $('.delete-event').click(function () {
        Swal.fire({
            icon: 'warning',
            title: 'Uwaga!',
            text: 'Czy na pewno chcesz odwołać to wydarzenie?',
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: 'Tak, chce anulować!',
            cancelButtonText: 'Nie, nie chce anulować!'
        }).then((result) => {
            if(result.isConfirmed)
            {
                deleteEvent()
            }
        })
    })
})

let deleteEvent = () => {
    $.ajax({
        url: deleteEventUrl,
        method: 'DELETE',
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

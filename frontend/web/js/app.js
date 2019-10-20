$().ready(function () {
    $(document).on('click', '.review-form button', function () {
        alert('Вы успешно оставили отзыв');
    });

    $(document).on('click', '#contact-form button', function (e) {
        alert('Вы успешно отправили сообщение?');
    });
});

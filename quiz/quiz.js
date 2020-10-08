$(function () {
    'use strict';

    $('.answer').on('click', function () {
        var $selected = $(this);
        $selected.addClass('selected');
        var answer = $selected.text();

        $.post('/_answer.php', {

        }).done(function (res) {
            $('.answer').each(function () {
                if ($(this).text() === res.correct_answer) {
                    $(this).addClass('correct');
                } else {
                    $(this).addClass('wrong');
                }
            });
            // alert(res.correct_answer);
            if (answer === res.correct_answer) {
                // correct!
                $selected.text(answer + ' ... CORRECT!');
            } else {
                // wrong!
                $selected.text(answer + ' ... WRONG!');
            }
        });
    });

});

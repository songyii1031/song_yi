$(document).ready(function() {
    $('#contact').on('submit', function(e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var your_message = $('#your_message').val();

        if (!name) {
            alert('이름을 입력하세요 !');
        } else if (!email) {
            alert('메일을 입력하세요 !');
        } else {
            var formData = {
                name: name,
                email: email,
                your_message: your_message,
            };

            $.ajax({
                url: 'ajax/mail_ajax.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert(response.message); // 성공 메시지
                    } else {
                        alert('메일 발송에 실패했습니다. 다시 시도해주세요.'); // 실패 메시지
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('메일 발송 중 오류가 발생했습니다.');
                }
            });
        }
    });
});

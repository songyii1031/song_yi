<?php
header('Content-Type: text/html; charset=utf-8');

// AJAX로 받은 데이터
$name = isset($_POST['name']) ? $_POST['name'] : ''; 
$email = isset($_POST['email']) ? $_POST['email'] : ''; 
$your_message = isset($_POST['your_message']) ? $_POST['your_message'] : ''; 

// 메일 수신 주소
$toEmail = "rlatpwls1031@naver.com";	

// 이메일 제목
$subject = "김송이 연습 사이트를 통한 문의: ";

// 이메일 본문 (HTML 형식으로 작성)
$content = "
<html>
<body>
<p><strong>이름:</strong> $name</p><br>
<p><strong>이메일:</strong> $email</p><br>
<p><strong>메세지:</strong> $your_message</p>
</body>
</html>
";

// 헤더 초기화
$headers = "From: {$email}\r\n"; 
$headers .= 'Organization: Sender Organization' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'X-Priority: 3' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n"; 

$mailResult = mail($toEmail, $subject, $content, $headers);

if ($mailResult) {
    echo json_encode(['success' => true, 'message' => '메일이 성공적으로 발송되었습니다!']);
} else {
    echo json_encode(['success' => false, 'message' => '메일 발송에 실패했습니다.']);
}
?>

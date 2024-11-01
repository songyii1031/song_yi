
$(document).ready(function () {

    // 이미지 width 늘어나며 풀스크린으로 차게하기
    imgWidthRe();
    starScore();


    // input 공란일 경우 알림창 띄우기
    document.getElementById('goPage').addEventListener('click', function (event) {
        const copyUrl = document.getElementById('urlInput').value;
        if (copyUrl === '') {
            event.preventDefault();
            alert('URL을 입력하세요!');
        }
    });

    // input 요소의 값이 변경될 때 inputValueChange 호출
    document.getElementById('urlInput').addEventListener('input', inputValueChange);

    let zero = new Number(0);

    if (zero) { // 변수 zero는 객체이므로, 조건문이 참이 됩니다.
      alert( "그런데 여러분은 zero가 참이라는 것에 동의하시나요!?!" );
    }
    
});


// input에 입력된 url을 a태그의 href로 받기
function inputValueChange() {
    const copyUrl = document.getElementById('urlInput').value;
    document.getElementById('goPage').href = copyUrl;
}


// url 복사하기
function clip() {
    var url = '';
    var textarea = document.createElement("textarea");
    document.body.appendChild(textarea);
    url = 'https://songyii-portfolio.netlify.app/';
    textarea.value = url;
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);

    document.querySelector('#message').style.display = 'block';
    document.getElementById('urlInput').value = url;
    inputValueChange();

    setTimeout(function () {
        document.querySelector('#message').style.display = 'none';
    }, 2000);

};


function imgWidthRe() {
    window.addEventListener('scroll', function () {
        const scrollY = window.scrollY;

        const ib_01 = this.document.querySelector('.ib_01_1');
        const ib_02 = this.document.querySelector('.ib_01_2');

        maxScroll = 700;
        const scale = Math.max(0, Math.min(1, scrollY / maxScroll));

        const newWidth = (1 - scale) * 50;

        ib_01.style.width = `${newWidth}%`;
        ib_02.style.width = `${newWidth}%`;
    });
}


 
// 개당 정수 0.5 씩 올라감  

function starScore() {

    const radios = document.querySelectorAll("input[name='rating']"); 
    radios.forEach(function (radio) {
        radio.addEventListener('change', function () {

            const chkElement = document.querySelector('input[name="rating"]:checked');
            const chkValue = chkElement ? chkElement.value : null;
 
            console.log(chkValue);

            document.getElementById('score_box').innerHTML = chkValue;
        });
    });
}






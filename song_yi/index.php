<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SONG TOY_P</title>
  <!-- CSS -->
  <link rel="stylesheet" href="/config_file/css/song.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b031081c74.js" crossorigin="anonymous"></script>
</head>

<body>

  <div>

    <section class="section section01"> 
      <div class="box_wrap">
        <div class="box">
          <!-- 리본 -->
          <div class="ribbon ribbon-top-left"><span>ribbon</span></div> 
          <img class="box_img" src="/config_file/images/song_img.png" alt="">
          <button id="linkBtn" class="button" type="button" onclick="clip()"><i class="fa-solid fa-link"></i> 링크 복사하기</button>
          <div id="message" style="display:none;">copy !</div>   
        </div>
   
          <!-- 별표 --> 
         <div class="star_box">
            <h4 class="bold">Portfolio #1</h4> 
           <label>
              <input id="urlInput" onchange="inputValueChange()" placeholder="url 붙여 넣기" type="text" style="width: 100%"/>
              <a id="goPage" href="#" target="_blank">go!</a>
           </label>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam officiis consequuntur ipsa vel? Possimus officiis ipsa odio distinctio minus nesciunt porro laboriosam, iure, sit rerum accusamus tempore. Quis, quia maiores.</p>
            <fieldset class="rating">
             
              <input type="radio" id="star5" name="rating" value="5" />
              <label class = "full" for="star5" title="Awesome - 5 stars"></label>

              <input type="radio" id="star4half" name="rating" value="4.5" />
              <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

              <input type="radio" id="star4" name="rating" value="4" />
              <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

              <input type="radio" id="star3half" name="rating" value="3.5" />
              <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

              <input type="radio" id="star3" name="rating" value="3" />
              <label class = "full" for="star3" title="Meh - 3 stars"></label>

              <input type="radio" id="star2half" name="rating" value="2.5" />
              <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

              <input type="radio" id="star2" name="rating" value="2" />
              <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

              <input type="radio" id="star1half" name="rating" value="1.5" />
              <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

              <input type="radio" id="star1" name="rating" value="1" />
              <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
              
              <input type="radio" id="starhalf" name="rating" value="0.5" />
              <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
          </fieldset> 
         </div>
      </div> 
      <p id="score_box">00</p> 
    </section> 

    <section class="section section2"> 
 
      <!-- contact mail -->
      <form id="contact" action="" method="post">
        <h3>Contact</h3>
        <p>Contact us today, and get reply with in 24 hours!</p>

        <fieldset data-name="name">
            <input id="name" placeholder="your name" type="text" name="name" tabindex="1" value="" required autofocus>
        </fieldset>

        <fieldset data-name="email">
          <input id="email" placeholder="Your Email Address" type="email" tabindex="2" value="" required>
        </fieldset>

       <fieldset data-name="your-message">
          <textarea id="your_message" cols="40" rows="10" aria-required="true" aria-invalid="false"
          placeholder="문의하실 내용을 입력해 주세요." name="your-message" autocomplete="off"></textarea>
       </fieldset>


        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
      </form> 
      <!-- contact mail -->

    </section>
    
    <div class="img_background">
      <div class="ib_01 ib_01_1"></div>
      <div class="ib_01 ib_01_2"></div>
    </div> 

    <div></div>
    


    <div id="myModal" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>






  <!-- JS -->
  <script type="text/javascript" src="/config_file/js/song.js"></script>
  <script type="text/javascript" src="/config_file/js/mail.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
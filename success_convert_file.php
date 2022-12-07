<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sub-style.css">
  <link href="https://www.dafontfree.net/embed/Z291ZHktaGFuZHRvb2xlZC1yZWd1bGFyJmRhdGEvMjUvZy8xMjc2MjYvR291ZHlIYW5kdG9vbGVkLnR0Zg" rel="stylesheet" type="text/css" />
  <title>
    CAT201 Assignment
  </title>
</head>

<body>
  <section class="sec" id="sec-1">
    <div class="wrapper">
      <div class="header">
        <img class="board" src="images/board.png">
        <h1 class="title">XL S to CSV Converter</h1>
      </div>

      <div class="box">
        <div class="ornament" id="ornament-3">
          <img class="ornament-obj" src="images/ornament-1.png" height="200px">
          <div class="button" id="button-words-3">
            <?php
            $converted_excel_file = $_GET['converted_file'];
            echo '
            <p><a href="download.php?converted_excel_file=' . $converted_excel_file . '">Download</a></p>'
            ?>
          </div>
        </div>

        <div class="ornament" id="ornament-4">
          <img class="ornament-obj" src="images/ornament-1.png" height="200px">
          <div class="button" id="button-words-3">
            <a href="index.html" class="return">Return</a>
          </div>
        </div>
      </div>

      <div class="instructions">
        <p class="instruction-words" id="instruction-3">Let the file convert and download your csv file right afterwards</p>
        <p class="instruction-words" id="instruction-4">Return to the main page</p>
      </div>

      <div class="main-container">
        <div class="sub-container" id="sub-container-1">
          <div class="main-machine-part">
            <div class="opening" id="entry">
              <div class="partition"></div>
              <div class="partition"></div>
              <div class="partition"></div>
            </div>
            <div class="main-machine-body">
              <div class="sub-machine-body"></div>
            </div>
            <div class="opening" id="exit">
              <div class="partition"></div>
              <div class="partition"></div>
              <div class="partition"></div>
            </div>
          </div>
          <div class="gauge-body">
            <img src="images/gauge.png" height="175px">

          </div>
          <div class="pointer">
            <img src="images/pointer.png" height="130px">
          </div>
          <div class="track">
            <div class="sub-track" id="track-1">
              <div class="excel-container">
                <div class="sub-excel-container">
                  <img src="images/excel 1.svg" alt="excel" class="excel">
                </div>
              </div>
            </div>
            <div class="sub-track" id="track-2">
              <img src="images/csv 1.svg" alt="csv" class="csv">
            </div>
          </div>
        </div>
        <div class="sub-container" id="sub-container-2">
          <div class="conveyor-belt">
            <div class="sub-conveyor-belt">
              <ul>
                <li class="cog" id="cog-1"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-2"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-3"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-4"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-5"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-6"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-7"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-8"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-9"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                <li class="cog" id="cog-10"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-container">
        <a href="#sec-2">
          <div class="scroll-down"></div>
        </a>
        <div class="scroll-instruction-container">
          <p class="scroll-instruction" id="scroll-down-instruction">Click or scroll down for more instructions!</p>
        </div>
      </div>
    </div>
  </section>
  <section class="sec" id="sec-2">
    <div class="wrapper" id="wrapper-2">
      <div class="header" id="about-us-header">
        <img class="board" src="images/board.png">
        <h1 class="title">About Us</h1>
      </div>

      <div class="people-information">
        <ul class="people">
          <li class="people-info" id="tty">
            <img src="images/taiyu.png" height="300px">
            <a class="ind-name" target=”_blank” href="https://www.linkedin.com/in/then-tai-yu/">Then Tai Yu</a>
          </li>
          <li class="people-info" id="yeo">
            <img src="images/yingsheng.png" height="300px">
            <a class="ind-name" target=”_blank” href="https://www.linkedin.com/in/yeousm/">Yeo Ying Sheng</a>
          </li>
          <li class="people-info" id="choo">
            <img src="images/brendanchoo.png" height="300px">
            <a class="ind-name" target=”_blank” href="https://www.linkedin.com/in/brendan-choo-060aa7227/">Brendan Choo</a>
          </li>
          <li class="people-info" id="dickson">
            <img src="images/dick.png" height="300px">
            <a class="ind-name" target=”_blank” href="https://www.linkedin.com/in/dickson-tan-b37474226/">Dickson Tan</a>
          </li>
        </ul>
      </div>

      <div class="about-us-desc">
        <p>Our team is established by a unity of four innovative Computer Science undergraduates from the University of Science, Malaysia.</p>
      </div>

      <div class="scroll-container" id="scroll-up-container">
        <a href="#sec-1">
          <div class="scroll-up"></div>
        </a>
        <div class="scroll-instruction-container">
          <p class="scroll-instruction" id="scroll-up-instruction">Click or scroll up for conversion!</p>
        </div>
      </div>
    </div>
  </section>
  <script src="sub-script.js"></script>
</body>

</html>

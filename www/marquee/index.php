<?php
$ani = '15s';
?>

<html>
<title>MCD Marquee</title>

  <style>
    body {
      font-family: Arial, Helvetica, san-sarif;
      font-weight: bold;
      padding:0; margin:0;
    }
    .wrapper{
      margin: 0 auto;
      width:100%;
      height:500px;
      background: black;
      overflow: hidden;
    }
    
    .fade {
      position: absolute;
      width: 100%;
      margin: 0 auto;
      margin-top:350px;
      height: 150px;
      background: -webkit-linear-gradient(rgba(0,0,0, 0), rgba(0,0,0,255)); 
      z-index: 100;
    }
    .view {
      -webkit-perspective: 520px;
      -webkit-perspective-origin-x: 400px;
      width: 800px;
      margin:0 auto;
      height: 1000px;
      position: relative;
    }

    ul {
      position: relative;
      width: 100%;
      height: 100%;
      padding-top: 100px;
    }
    .year {
      font-size: 300px;
      color:white;

      text-align: center;
      list-style: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 800px;
      height: 300px;
      -webkit-transition: all .5s linear;
      background: -webkit-linear-gradient(#fff, #666);
      -webkit-background-clip: text;

      text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);

    }
    .slide {
      list-style: none;
      position: absolute;
      top: 0;
      left: 0;
      font-size:100px;
      color:#00aeef;
      width:1000px;
    }
    
    <?php 
    //0
    $stop1Per = array('5%', '15%');
    $stop1Pos = '-200px';
    //3
    $stop2Per = array('25%', '30%');
    $stop2Pos = '1700px';
    //6
    $stop3Per = array('40%', '45%');
    $stop3Pos = '4000px';
    //10
    $stop4Per = array('60%', '65%');
    $stop4Pos = '6400px';
    //13
    $stop5Per = array('80%', '85%');
    $stop5Pos = '7600px';
    //15
    $stop6Per = array('80%', '88%');
    $stop6Pos = '8800px';


    ?>

    @-webkit-keyframes zoomIn {
      0% {
        -webkit-transform:translate3d(0px, 0px, -400px);
      }

      5% {
        -webkit-transform:translate3d(0px, 0px, -200px);
      }

      10% {
        -webkit-transform:translate3d(0px, 0px, -200px);
      }
       
       /*
      //slide1
      <?= $stop1Per[0] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop1Pos ?>);
      }
      <?= $stop1Per[1] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop1Pos ?>);
      }

      //slide2
      <?= $stop2Per[0] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop2Pos ?>);
      }
      <?= $stop2Per[1] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop2Pos ?>);
      }

      //slide3
      <?= $stop3Per[0] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop3Pos ?>);
      }
      <?= $stop3Per[1] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop3Pos ?>);
      }

      //slide4
      <?= $stop4Per[0] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop4Pos ?>);
      }
      <?= $stop4Per[1] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop4Pos ?>);
      }

      //slide5
      <?= $stop5Per[0] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop5Pos ?>);
      }
      <?= $stop5Per[1] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop5Pos ?>);
      }*/

      100% {
        -webkit-transform:translate3d(0px, 0px, 8900px);
      }
    }

    @-webkit-keyframes slide1 {
      0% {
        opacity:0;
        -webkit-transform: translate3d(-220px, 0px, -400px) rotateZ(0deg); 
      }

      <?= $stop1Per[0] ?> {
        opacity:1;
        -webkit-transform: translate3d(-220px, -220px, <?= $stop1Pos ?>) rotateZ(-12deg); 
      }
      100% {
        opacity:1;
        -webkit-transform: translate3d(-220px, -220px, <?= $stop1Pos ?>) rotateZ(-12deg); 
      }
    }

    @-webkit-keyframes slide2 {
      0% {
        opacity:0;
        -webkit-transform: translate3d(-220px, 0px, -1800px) rotateZ(0deg); 
      }

      <?= $stop2Per[0] ?> {
        opacity:1;
        -webkit-transform: translate3d(-220px, -220px, -1800px) rotateZ(-12deg); 
      }
      100% {
        opacity:1;
        -webkit-transform: translate3d(-220px, -220px, -1800px) rotateZ(-12deg); 
      }
    }

    @-webkit-keyframes slide6 {
      0% {
        opacity:0;
        -webkit-transform: translate3d(-220px, 0px, -8800px) rotateZ(0deg); 
      }

      <?= $stop2Per[0] ?> {
        opacity:1;
        -webkit-transform: translate3d(-220px, -220px, -9000px) rotateZ(-12deg); 
      }
      100% {
        opacity:1;
        -webkit-transform: translate3d(-220px, -220px, -9000px) rotateZ(-12deg); 
      }
    }

    .content {
      transform-style:preserve-3d;
      -webkit-transform:translate3d(0px, 0px, -400px);
      -webkit-animation: zoomIn <?= $ani ?> cubic-bezier(0.25, 0.46, 0.45, 0.94);
      -webkit-animation-fill-mode:forwards;
      
    }

    .slide {
      opacity:0;
      -webkit-animation-fill-mode:forwards;
    }
    .slide1 {
      -webkit-animation: slide1 <?= $ani ?>;
    }
    .slide2 {
      -webkit-animation: slide2 <?= $ani ?>;
    }
    .slide3 {
      -webkit-animation: slide3 <?= $ani ?>;
    }
    .slide4 {
      -webkit-animation: slide4 <?= $ani ?>;
    }
    .slide5 {
      -webkit-animation: slide5 <?= $ani ?>;
    }
    .slide6 {
      -webkit-animation: slide6 <?= $ani ?>;
    }

  </style>
<body>
  <div class="wrapper">
    <div class="fade"></div>
    <div class="view">
      <div class="content">
      <ul>
      <?php
        for ($i = 0; $i <= 30; $i++) {
          echo "<li class='year year-".$i."' style='-webkit-transform: translate3d(0px, 0px, -".($i*600)."px); z-index: ".(20-$i).";'>".(1999+$i).'</li>';
          switch ($i) {
            case 0:
              echo "<li class='slide slide1' style='z-index: ".(20-$i).";'>MCD OPENS!</li>'";
              break;

            /*case 3:
              echo "<li class='slide slide2' style='z-index: ".(20-$i).";'>MCD lands Discover!</li>'";
              break;

            case 6:
              echo "<li class='slide slide3' style='z-index: ".(20-$i).";'>Moves to Chelsea Offices</li>'";
              break;


            case 11:
              echo "<li class='slide slide4' style='z-index: ".(20-$i).";'>Expands Offices</li>'";
              break;


            case 13:
              echo "<li class='slide slide5' style='z-index: ".(20-$i).";'>MCD Gets a Chicago Address</li>'";
              break;*/

            case 15:
              echo "<li class='slide slide6' style='z-index: ".(20-$i).";'>Celebrates 15 years and still going strong! Imagine what the next 15 years will bring</li>'";
              break;


          }
        }
      ?>
      </ul>
      </div>
    </div>
  </div>
</body>
</html>
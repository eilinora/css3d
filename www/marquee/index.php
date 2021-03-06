<?php
$ani = '12s';
$ease = 'cubic-bezier(0.645, 0.045, 0.355, 1)';
?>

<html>
<title>MCD Marquee</title>

  <style>
    body {
      font-family: Arial, Helvetica, san-sarif;
      font-weight: bold;
      padding:0; margin:0;
      background: black;
    }
    .wrapper{
      margin: 0 auto;
      width:100%;
      height:500px;
      background: white;
      overflow: hidden;
      
    }
    
    .fade {
      position: absolute;
      width: 100%;
      margin: 0 auto;
      margin-top:350px;
      height: 150px;
      background: -webkit-linear-gradient(rgba(255,255,255, 0), rgba(255,255,255,255)); 
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
      color:#333;

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

    .slide6 {
      font-size:50px;
      line-height: 1em;
    }

    img {
      width:100%;
      height:auto;
      display: block;
    }

    .img {
      opacity:0;
      -webkit-animation: fadein 500ms <?= $ease ?>;
      -webkit-animation-delay:300ms;
      -webkit-animation-fill-mode:forwards;
      width:500px;
    }
    
    <?php 
    //0
    $stop1Per = array('5%', '10%');
    $stop1Pos = '-200px';

    ?>

    @-webkit-keyframes zoomIn {
      0% {
        -webkit-transform:translate3d(0px, 0px, -400px);
      }

      <?= $stop1Per[0] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop1Pos ?>);
      }

      <?= $stop1Per[1] ?> {
        -webkit-transform:translate3d(0px, 0px, <?= $stop1Pos ?>);
      }

      60% {
        -webkit-transform:translate3d(0px, 0px, 8900px);
      }

      85% {
        -webkit-transform:translate3d(0px, 0px, 8900px);
      }

      100% {
        -webkit-transform:translate3d(0px, 0px, 22000px);
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

    @-webkit-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    .content {
      transform-style:preserve-3d;
      -webkit-transform:translate3d(0px, 0px, -400px);
      -webkit-animation: zoomIn <?= $ani ?> <?= $ease ?>;
      -webkit-delay:600ms;
      -webkit-animation-fill-mode:forwards;
    }

    .slide {
      opacity:0;
    }
    .slide1 {
      -webkit-animation: slide1 <?= $ani ?> <?= $ease ?>;
      -webkit-delay:600ms;
    }
    /*.slide6 {
      -webkit-animation: slide6 <?= $ani ?>;
    }*/

  </style>
<body>
  <div class="wrapper">
    <div class="fade"></div>
    <div class="view">
      <div class="content">
      <ul>
      <?php
      $imgs = array('daily-candy-beauty.jpg', 'daily-candy-home.jpg', 'daily-candy-beauty.jpg', 'etrade-best-investing-experience.jpg', 'etrade-powerful-tools.jpg', 'macmillan-mobile-site.png', 'macmillan-book-smart-and-loves-travel.jpg', 'macmillan-publish-new-chapter-online.jpg', 'macmillan-responsive-site.jpg', 'mcd_home_mobile_320.jpg', 'mskcc-site-redesign.jpg', 'pulse-conference.jpg', 'pulse-debit-dashboard.jpg', 'sesame-muppets.jpg', 'tiffany-collection-crystal.jpg', 'tiffany-collection-rings.jpg', 'tiffany-collection-rings.jpg', 'tiffany-details-considered.jpg', 'samsung-redesign-and-reborn.jpg', 'samsung-pleased-to-meet-ux.jpg', 'samsung-inspiration-innovation-connected-living.png', 'samsung-beauty-skin-deep.png', 'samsung-ces-2014.jpg', 'samsung-black-friday-deals.png', 'nautica-shop-experience.jpg', 'nautica-360-blog.jpg', 'genworth-better-decision-making.jpg', 'genworth-value-at-click.jpg', 'drug-free-fighting-the-good-fight.jpg', 'drug-free-parenting-toolkit.jpg', 'drug-free-memorial.jpg', 'drug-free-dmx-stories.jpg', 'discover-everyday-giveaway.jpg',

        'daily-candy-beauty.jpg', 'daily-candy-home.jpg', 'daily-candy-beauty.jpg', 'etrade-best-investing-experience.jpg', 'etrade-powerful-tools.jpg', 'macmillan-mobile-site.png', 'macmillan-book-smart-and-loves-travel.jpg', 'macmillan-publish-new-chapter-online.jpg', 'macmillan-responsive-site.jpg', 'mcd_home_mobile_320.jpg', 'mskcc-site-redesign.jpg', 'pulse-conference.jpg', 'pulse-debit-dashboard.jpg', 'sesame-muppets.jpg', 'tiffany-collection-crystal.jpg', 'tiffany-collection-rings.jpg', 'tiffany-collection-rings.jpg', 'tiffany-details-considered.jpg', 'samsung-redesign-and-reborn.jpg', 'samsung-pleased-to-meet-ux.jpg', 'samsung-inspiration-innovation-connected-living.png', 'samsung-beauty-skin-deep.png', 'samsung-ces-2014.jpg', 'samsung-black-friday-deals.png', 'nautica-shop-experience.jpg', 'nautica-360-blog.jpg', 'genworth-better-decision-making.jpg', 'genworth-value-at-click.jpg', 'drug-free-fighting-the-good-fight.jpg', 'drug-free-parenting-toolkit.jpg', 'drug-free-memorial.jpg', 'drug-free-dmx-stories.jpg', 'discover-everyday-giveaway.jpg');

        $imgLen = count($imgs);

        for ($i = 0; $i < $imgLen; $i++) {
          if ($i < count($imgs)) {
            $x = rand(0,1) ? rand(-1160,-300): rand(850,1650);
            echo "<li class='year img img-".$i."' style='-webkit-transform: translate3d(".$x."px, ".rand(-500,200) ."px, ".rand(-400, -11000)."px); '><img src='assets/images/".$imgs[$i]."' /></li>";
          }
        }

        for ($i = 0; $i <= 30; $i++) {
          $op = '';
          if ($i > 15) {
            $o = (1*(30/$i))-1;
            $op = 'opacity: '.$o.';';
          } 

          echo "<li class='year year-".$i."' style='-webkit-transform: translate3d(0px, 0px, -".($i*600)."px); z-index: ".(20-$i)."; ".$op."'>".(1999+$i)."</li>";
          
          switch ($i) {
            case 0:
              echo "<li class='slide slide1' style='z-index: ".(20-$i).";'>MCD OPENS!</li>";
              break;

            case 15:
              echo "<li class='slide slide6' style='-webkit-transform: translate3d(-70px, -70px, -".($i*600)."px); z-index: ".(20-$i)."; opacity:1; text-align:center;'>Celebrating 15 years of amazing work!<br/> Imagine what the next 15 years will bring</li>";
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
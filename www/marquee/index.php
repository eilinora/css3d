<!DOCTYPE html>
<html>
  <title>MCD Marquee</title>

  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
            $x = rand(0,1) ? rand(-1760,-500): rand(1000,1850);
            echo "<li class='year img img-".$i."' style='-webkit-transform: translate3d(".$x."px, ".rand(-600,200) ."px, ".rand(-200, -9000)."px); '><img src='assets/images/".$imgs[$i]."' /></li>\n";
          }
        }

        for ($i = 0; $i <= 30; $i++) {
          $op = '';
          if ($i > 15) {
            $o = (1*(30/$i))-1;
            $op = 'opacity: '.$o.';';
          }

          echo "<li class='year year-".$i."' style='-webkit-transform: translate3d(0px, 0px, -".($i*600)."px); z-index: ".(20-$i)."; ".$op."'>".(1999+$i)."</li>\n";

          switch ($i) {
            case 0:
              echo "<li class='slide slide1' style='z-index: ".(20-$i).";'>MCD OPENS!</li>\n";
              break;

            case 15:
              echo "<li class='slide slide6' style='-webkit-transform: translate3d(-70px, -70px, -".($i*600)."px); z-index: ".(20-$i)."; '>Celebrating 15 years of amazing work.<br/>Imagine what the next 15 years will bring.</li>\n";
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
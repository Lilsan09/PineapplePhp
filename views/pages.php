<h2 class="h2Pages">Articles</h2>

<div class="container">
    <div class="row">
        <h2 class="h2Page"><?= THEMES[$cookieOne]->channel->title?></h2>
        <?php
        foreach (THEMES[$cookieOne]->channel->item as $itemCookieOne) {
            $decription = $itemCookieOne->description;
            preg_match("(<img.*jpg\")", $decription, $imgTag);
            $datetime = date_create($itemCookieOne->pubDate);
            $date = date_format($datetime, 'd M Y, H\hi');
            echo '<div class="cardThemePages col-12 col-lg-6">'. $imgTag[0] . '><div class="decript"><a href="'. $itemCookieOne->link .'">'. $itemCookieOne->title .'</a>'. $date .'</div></div>';
        }
        ?>
    </div>
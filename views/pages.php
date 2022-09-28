<h2 class="h2Pages">Articles</h2>

<div class="container">
    <div class="row">
        <h2 class="h2Pages"><?= $titlePhone ?></h2>
        <?php
        foreach ($rssSmartphone->channel->item as $itemPhone) {
            $decription = $itemPhone->description;
            preg_match("(<img.*jpg\")", $decription, $imgTag);
            echo '<div class="col-12 col-lg-6">'. $imgTag[0] . '><p><a href="'.$itemPhone->link .'">'. $itemPhone->title .'</a></p></div>';
        }
        ?>
    </div>
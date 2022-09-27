<div class="container">
    <div class="row align-items-center">
            <?php
            foreach ($rss->channel->item as $item) {
                echo '<div class="col-12 col-lg-4">
                <div><a href="' . $item->link . '">' . $item->title . '</a> ' . $item->description . '</div>
                </div>';
            }
            ?>
    </div>
</div>
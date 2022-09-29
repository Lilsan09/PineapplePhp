<h2 class="h1Home">Actualités</h2>

<?php if (empty($themes)) { ?>
        <section>
            <article>
                <h2>Bienvenue</h2>
                <form>
                    <p>Choisissez 3 themes</p>
                    <div>
                        <div><input value="0" type="checkbox" name="themes[]" id=""> <span>Smartphone</span></div>
                        <div><input value="1" type="checkbox" name="themes[]" id=""> <span>Tablette</span></div>
                        <div><input value="2" type="checkbox" name="themes[]" id=""> <span>PC portable</span></div>
                        <div><input value="3" type="checkbox" name="themes[]" id=""> <span>PC périphérique</span></div>
                        <div><input value="4" type="checkbox" name="themes[]" id=""> <span>Objets connectés</span></div>
                        <div><input type="submit" value="Envoyer" id="submit"></div>
                    </div>
                </form>
            </article>
        </section>
    <?php } ?>
<?php if (!empty($cookieThree)) { ?>

<div class="container">
    <div class="row">
        <h2 class="h2Home"><?= THEMES[$cookieOne]->channel->title ?></h2>
        <?php
        foreach (THEMES[$cookieOne]->channel->item as $itemCookieOne) {
            $decription = $itemCookieOne->description;
            preg_match("(<img.*jpg\")", $decription, $imgTag);
            echo '<div class="col-12 "><p class="pHome">'. $itemCookieOne->title .'</p>'. $imgTag[0] . '></div>';
        }
        ?>
    </div>
    
    <div class="row">
        <h2 class="h2Home"><?= THEMES[$cookieTwo]->channel->title ?></h2>
        <?php
        foreach (THEMES[$cookieTwo]->channel->item as $itemCookieTwo) {
            $decription = $itemCookieTwo->description;
            preg_match("(<img.*jpg\")", $decription, $imgTag);
            echo '<div class="col-12 "><p class="pHome">'. $itemCookieTwo->title .'</p>'. $imgTag[0] . '></div>';
        }
        ?>
    </div>

    <div class="row">
        <h2 class="h2Home"><?= THEMES[$cookieThree]->channel->title ?></h2>
        <?php
        foreach (THEMES[$cookieThree]->channel->item as $itemCookieThree) {
            $decription = $itemCookieThree->description;
            preg_match("(<img.*jpg\")", $decription, $imgTag);
            echo '<div class="col-12 "><p class="pHome">'. $itemCookieThree->title .'</p>'. $imgTag[0] . '></div>';
        }
        ?>
    </div>
</div>
<?php } ?>
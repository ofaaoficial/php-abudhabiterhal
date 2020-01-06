<?php $attractions = true; require_once 'includes/header.php'; ?>
<?php require_once 'includes/database.php'; ?>
<section class="home">
    <article class="container">
        <h4 class="sub-title">TOP 6 ABU DHABI TOURIST ATTRACTIONS</h4>
        <h1 class="title">Explore and be Inspired</h1>
        <article class="panels" id="panel">
            <?php if(isset($_GET['search'])) : $places = DB::selectWhere('places', 'title', $_GET['search']);?>
            <?php else: $places = DB::select('places', 9); endif;?>
            <?php foreach ($places as $place) : ?>
                <section class="panel">
                    <img src="<?= $place->picture; ?>" alt="<?= $place->title; ?>" class="panel-img">
                    <article class="panel-body">
                        <a href="http://localhost/abudhabiterhal/place.php?id=<?= $place->id; ?>">
                            <h2 class="panel-title"><?= $place->title; ?></h2>
                        </a>
                        <p class="panel-description"><?= substr($place->description, 0, 120). '.....'; ?></p>
                    </article>
                </section>
            <?php endforeach; ?>
        </article>
        <article class="center">
            <sectionl class="btns-navigator">
                <?php
                $c = 0;
                $btns = 1;
                if(!isset($_GET['search'])) {
                    foreach (DB::select('places') as $place):
                        $c++;
                        if($c % 9 == 0 || $c > 9) {
                            if(isset($_GET['p']) && $_GET['p'] == $btns){
                                echo "<button class=\"btn-nav active\">{$btns}</button>";
                                $btns++;
                            }else{
                                echo "<button class=\"btn-nav\">{$btns}</button>";
                                $btns++;
                            }
                        }
                    endforeach;
                }
                ?>
            </sectionl>
        </article>
    </article>
</section>
<?php require_once 'includes/footer.php' ?>
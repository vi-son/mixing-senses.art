<?php
if ($page->song()->toFile()):
  $song = $page->song()->toFile()->url();
else:
  $song = "";
endif;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title><?= $page->title() ?></title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <?= css("assets/css/style.css") ?>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <?= js("assets/js/vendor/p5.min.js") ?>
    <?= js("assets/js/vendor/p5.sound.min.js") ?>
    <?= js("assets/js/vendor/poisson-disk-sampling.min.js") ?>
    <?= js("assets/js/logo.js") ?>
    <?= js("assets/js/home.js") ?>
  </head>
  <body>

    <header>
      <div class="audio-permission">
        <?= $page->usemicrophonetext()->kt() ?>
        <div>
          <button id="allow-mic">
            <?= $page->allowmicbuttontext()->kt() ?>
          </button>
        </div>
      </div>

      <div class="buttons">
        <button class="button" id="button-song">
          <?= svg("assets/svg/icons/song.svg") ?>
          <?= $page->songbuttontext()->kt() ?>
        </button>
        <button class="button" id="button-mic">
          <?= svg("assets/svg/icons/microphone.svg") ?>
          <?= $page->micbuttontext()->kt() ?>
        </button>
      </div>
      <div id="logo-canvas-wrapper"
           data-song="<?= $song ?>">
      </div>
      <div class="logo-wrapper">
        <div class="logo"><?= svg("assets/svg/logo.svg") ?></div>
        <div class="subline"><?= svg("assets/svg/subline.svg") ?></div>
      </div>
    </header>

    <?php foreach($page->blocks()->toBuilderBlocks() as $block): ?>
      <?php if ($block->visible()->toBool()): ?>
        <?php snippet('blocks/' . $block->_key(),
                      ['data' => $block]) ?>
       <?php endif ?>
    <?php endforeach ?>

  </body>
</html>

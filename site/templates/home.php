<?php
if ($page->song()->toFile()):
  $song = $page->song()->toFile()->url();
else:
  $song = "";
endif;
?>

<?= snippet("layout/head") ?>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<?= js("assets/js/vendor/p5.min.js") ?>
<?= js("assets/js/vendor/p5.sound.min.js") ?>
<?= js("assets/js/vendor/poisson-disk-sampling.min.js") ?>
<?= js("assets/js/logo.js") ?>
<?= js("assets/js/home.js") ?>

<header>
  <div class="audio-permission">
    <?= $page->usemicrophonetext()->kt() ?>
    <div class="permission-buttons">
      <button class="button" id="button-song">
        <?= svg("assets/svg/icons/song.svg") ?>
        <?= $page->songbuttontext()->kt() ?>
      </button>
      <button class="button" id="button-mic">
        <?= svg("assets/svg/icons/microphone.svg") ?>
        <?= $page->micbuttontext()->kt() ?>
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

<?= snippet("layout/footer") ?>

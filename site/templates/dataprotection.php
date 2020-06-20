<?= snippet("layout/head") ?>
<?= js("assets/js/dataprotection.js") ?>

<section class="page-logo">
  <a href="/">
    <div class="logo"><?= svg("assets/svg/logo.full.svg") ?></div>
  </a>
</section>

<section class="tracking">
  <h2>Tracking</h2>
  <p class="info-text"><?= $page->trackingtext()->kt() ?></p>
  <div class="tracking-status">
    <div id="tracking-on" class="tracking-state">
      <?= svg("assets/svg/icons/tracking-on.svg") ?>
      <b><?= $page->trackingactive()->kt() ?></b>
      <button class="button-change" id="button-tracking-off">
        <?= $page->disabletracking()->kt() ?>
      </button>
    </div>
    <div id="tracking-off" class="tracking-state">
      <?= svg("assets/svg/icons/tracking-off.svg") ?>
      <b><?= $page->trackinginactive()->kt() ?></b>
      <button class="button-change" id="button-tracking-on">
        <?= $page->enabletracking()->kt() ?>
      </button>
    </div>
  </div>
</section>

<section class="<?= $page->title()->lower() ?>">
  <article><?= $page->text()->kt() ?></article>
</section>

<?= snippet("layout/footer") ?>

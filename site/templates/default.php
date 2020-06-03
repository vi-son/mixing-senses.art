<?= snippet("layout/head") ?>

<section class="page-logo">
  <a href="/">
    <div class="logo"><?= svg("assets/svg/logo.svg") ?></div>
    <div class="subline"><?= svg("assets/svg/subline.svg") ?></div>
  </a>
</section>

<section class="<?= $page->title()->lower() ?>">
  <article><?= $page->text()->kt() ?></article>
</section>

<?= snippet("layout/footer") ?>

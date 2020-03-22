<section
  class="textblock">
  <h3 class="preheading"><?= $data->preheadline() ?></h3>
  <h2 class="heading"><?= $data->headline() ?></h2>
  <article
    class="text"
    data-columns="<?= $data->columns() ?>">
    <?= $data->text()->kt() ?>
  </article>
</section>

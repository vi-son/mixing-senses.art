<section
  class="textblock-image"
  data-layout="<?= $data->image_position() ?>"
  data-columns="<?= $data->columns() ?>">
  <div class="cols">
    <div class="textblock">
      <h3 class="preheading"><?= $data->preheadline() ?></h3>
      <h2 class="heading"><?= $data->headline() ?></h2>
      <article
        class="text"
        data-columns="<?= $data->columns() ?>">
        <?= $data->text() ?>
      </article>
    </div>
    <div class="picture">
      <?php if($image = $data->image()->toFile()): ?>
        <img srcset="<?= $image->srcset([300, 800, 1024]) ?>">
      <?php endif ?>
    </div> 
  </div>  
</section>

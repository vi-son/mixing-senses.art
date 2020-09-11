<section
  class="newsblock"
  data-layout="<?= $data->image_position() ?>"
  data-columns="<?= $data->columns() ?>">
  <div class="blog">

    <div class="picture">
      <?php if($image = $data->image()->toFile()): ?>
        <img srcset="<?= $image->srcset([300, 800, 1024]) ?>">
      <?php endif ?>
    </div>

    <div class="textblock">
      <h3 class="preheading"><?= $data->preheadline() ?></h3>
      <h2 class="heading"><?= $data->headline() ?></h2>
      <article
        class="text"
        data-columns="<?= $data->columns() ?>">
        <?= $data->text() ?>
      </article>
        <h4>
           <a href="<?= $data->newslink()->url() ?>">
                  <span>👉</span> <?= $data->newslinktext()->kt() ?>
           </a>
        </h4>
    </div>
  </div>  
</section>

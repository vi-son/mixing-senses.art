<section class="image-grid">
  <?php $images =  $data->images()->toFiles(); ?>
  <?php foreach($images as $image): ?>
    <img
      class="grid-item"
      srcset="<?= $image->srcset([300, 800, 1024]) ?>"
      alt="">
  <?php endforeach ?>
</section>

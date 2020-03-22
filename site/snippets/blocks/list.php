<section class="list">
  <?php foreach($data->listitems()->toStructure() as $item): ?>
    <h4><?= $item->heading() ?></h4>
    <p><?= $item->text() ?></p>
  <?php endforeach ?>
</section>

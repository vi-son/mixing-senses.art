<section class="logolist">
  <h3><?= $data->headline()->kt() ?></h3>
  <div class="logos">
    <?php foreach($data->logos()->toStructure() as $item): ?>
    <div class="logo-item">
      <a href="<?= $item->link()->url() ?>" target="_blank">
          <img srcset="<?= $item->logo()->toFile()->srcset([300, 800, 1024]) ?>"
              alt="<?= $item->description() ?>">
        <p><?= $item->description()->kt() ?></p>
      </a>
    </div>
    <?php endforeach ?>
  </div>
</section>

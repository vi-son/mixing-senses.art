<section
  class="columns"
  data-column-count="<?= $data->columns()->toBuilderBlocks()->count() ?>">
  <?php foreach ($data->columns()->toBuilderBlocks() as $column): ?>
    <div class="col">
      <h4 class="preheading"><?= $column->preheading() ?></h4>
      <h2 class="heading"><?= $column->heading() ?></h2>
      <p>
        <?= $column->text()->kt() ?>
      </p>
      <ul class="infos-links">
        <?php foreach($column->infos()->toStructure() as $info): ?>
          <li>
            <a href="<?= $info->url() ?>"
               target="_blank">
              <?= $info->text() ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endforeach ?>
</section>

<?= snippet("layout/head") ?>

      
<section class="<?= $page->title()->lower() ?>">
  <a class="logo" href="/">
    <?= svg("assets/svg/logo.full.svg") ?>
  </a>
  <ul class="link-list">
    <?php foreach($page->links()->toStructure() as $link): ?>
      <li><a href="<?= $link->url()->url() ?>"><?= $link->title() ?></a></li>
    <?php endforeach?>
  </ul>
</section>

<?= snippet("layout/footer") ?>

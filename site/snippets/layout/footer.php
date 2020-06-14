  <?php $pages = $site->children()->listed() ?>

  <section>
    <nav class="footer-nav">
      <?php foreach($pages as $p): ?>
        <?= $p->title()->link() ?>
      <?php endforeach ?>
    </nav>
  </section>

  </body>
</html>

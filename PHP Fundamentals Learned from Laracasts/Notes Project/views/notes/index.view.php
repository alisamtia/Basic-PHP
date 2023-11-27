<?php require base_url('views/partials/head.php') ?>
<?php require base_url('views/partials/nav.php') ?>

<?php require base_url('views/partials/heading.php'); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
    <?php
    foreach($result as $note){
      echo "<a href='/note?id=".$note['id']."' class='text-blue-500 hover:underline'><li>".htmlspecialchars($note['note'])."...<li></a>";
        }
    ?>
</ul>
<p class="mt-7">
  <a href="/note/create" class="text-blue-700 hover:underline">New Note</a>
</p>
    </div>
  </main>
  <?php require base_url('views/partials/foot.php') ?>
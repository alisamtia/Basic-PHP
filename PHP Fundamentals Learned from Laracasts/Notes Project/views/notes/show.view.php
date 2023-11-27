<?php require base_url('views/partials/head.php') ?>
<?php require base_url('views/partials/nav.php') ?>
<?php require base_url('views/partials/heading.php'); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="text-blue-500 hover:underline">GO BACK..</a><BR>
    <?php
    if(isset($result['note'])) {
      echo htmlspecialchars($result['note']);
    }else{
        echo "<b class='text-400'>Sorry this Note does not found</b>";
    }
    ?>

  <form method="POST" action="/note/edit">
    <input type="hidden" name="__method" value="PATCH">
      <input type="hidden" name="id" value="<?=$result['id']?>">
      <button type="submit" href="/notes" class="mt-5 rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">EDIT</button>
    </form>

    <form method="POST">
    <input type="hidden" name="__method" value="DELETE">
      <input type="hidden" name="id" value="<?=$result['id']?>">
      <button type="submit" class="text-red-400">Delete</button>
    </form>
    </div>
  </main>
  <?php require base_url('views/partials/foot.php') ?>
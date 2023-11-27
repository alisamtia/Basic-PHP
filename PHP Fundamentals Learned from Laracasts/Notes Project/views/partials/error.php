<?php require 'head.php' ?>
<?php require 'nav.php' ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php
        $error_msg=$error_value==404?'This page seems to be not found':'You are not authorize to view this Page!';
        echo "<h2 class='text-3xl font-bold tracking-tight text-gray-900' align='center'>$error_msg</h2>";
        http_response_code($error_value);
    ?>
    </div>
  </main>
  <?php require 'foot.php' ?>
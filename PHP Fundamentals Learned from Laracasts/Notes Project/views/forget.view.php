<?php require base_url('views/partials/head.php') ?>
<?php require base_url('views/partials/nav.php'); use core\session;?>
  <main>
<div class="mt-20">
<div class="mt-6">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mt-5 mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mb-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Forget password? No problem!</h2>
  </div>

  <div class="sm:mx-auto sm:w-full sm:max-w-sm">



<?php
if(isset($_SESSION['code_match'])){
?>
<form class="space-y-6" action="/forget-pass-change" method="POST">
      <div>
      <input type="hidden" name="__method" value="POST">
      <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Enter your new Password:</label>
        <div class="mt-2">
          <input value="<?= old("EmailOrUser") ?>" style="padding-left:15px;" id="password" name="password" type="password" autocomplete="code" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      <p class="text-red-600 mb-3"><?php 
         if(isset($_SESSION['p_body_c'])){
          echo $_SESSION['p_body_c'];
          unset($_SESSION['p_body_c']);
          }?></p>
      <div class="mb-3">
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
      </div>
    </form>
  <?php
}elseif(isset($_SESSION['success_f_code'])){
?>
<p align="center">An confirmation email was send on your email Please check you <b>inbox</b> If you did not recevied it yet. Check your <b>Spam</b> or <b>Bin</b></p>
<form class="space-y-6" action="/forget-code" method="POST">
      <div>
      <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Please Enter the Code:</label>
        <div class="mt-2">
          <input type="hidden" name="__method" value="POST">
          <input value="<?= old("EmailOrUser") ?>" style="padding-left:15px;" id="code" name="code" type="number" autocomplete="code" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      <p class="text-red-600 mb-3"><?php 
         if(isset($_SESSION['f_body_c'])){
              echo $_SESSION['f_body_c'];
              unset($_SESSION['f_body_c']);
              }?></p>
      <div class="mb-3">
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
      </div>
    </form>
<?php
} else{?>
    <form class="space-y-6" action="/forget" method="POST">
      <div>
      <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username or Email Address</label>
        <div class="mt-2">
          <input type="hidden" name="__method" value="POST">
          <input value="<?= old("EmailOrUser") ?>" style="padding-left:15px;" id="username" name="userNameOrEmail" type="text" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      <p class="text-red-600 mb-3"><?php 
         if(isset($error['body'])){
              echo $error['body'];
              session::unflash('error');
              }?></p>
      <div class="mb-3">
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Forget my Password</button>
      </div>
    </form>
<?php }; ?>
  </div>
</div>

  </main>
  <?php require base_url('views/partials/foot.php'); ?>
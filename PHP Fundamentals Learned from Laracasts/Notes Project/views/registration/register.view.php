<?php require base_url('views/partials/head.php') ?>
<?php require base_url('views/partials/nav.php') ?>
  <main>
<div class="">
<div class="mt-3">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mt-5 mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mb-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register your account</h2>
  </div>

  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/register" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input style="padding-left:15px;" id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <p class="text-red-600 mt-3"><?php if(isset($error['email'])){
              echo $error['email'];
              }?></p>
        <p class="text-red-600 mt-3"><?php if(isset($error['a_email'])){
        echo $error['a_email'];
        }?></p>
        </div>
      </div>

      <div>
      <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
        <div class="mt-2">
          <input type="hidden" name="__method" value="POST">
          <input style="padding-left:15px;" id="username" name="username" type="text" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <p class="text-red-600 mt-3"><?php if(isset($error['username'])){
              echo $error['username'];
              }?></p>
        <p class="text-red-600 mt-3"><?php if(isset($error['a_user'])){
        echo $error['a_user'];
        }?></p>
        </div>

      <div class="mt-5 mb-6">
        <div class="flex items-center justify-between">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input style="padding-left:15px;" id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <p class="text-red-600 mt-3"><?php if(isset($error['password'])){
              echo $error['password'];
              }?></p>
      </div>

      <div class="mb-3">
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register Now</button>
      </div>
    </form>

    <p class=" text-center text-sm text-gray-500">
      Already a member?
      <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login Now</a>
    </p>
  </div>
</div>

  </main>
  <?php require base_url('views/partials/foot.php') ?>
<?php require base_url('views/partials/head.php') ?>
<?php require base_url('views/partials/nav.php') ?>
<?php require base_url('views/partials/heading.php'); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

<form method="POST">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
          <div class="mt-2">
            <textarea required name="note" id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" style="padding-left:10px" placeholder="Write Something in your Mind.."><?=isset($_POST['note'])?$_POST['note']:""?></textarea>
            <p class="text-red-600 mt-3"><?php if(isset($error['body'])){
              echo $error['body'];
              }?></p>
          </div>
        </div>


  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

    </div>
  </main>
  <?php require base_url('views/partials/foot.php') ?>
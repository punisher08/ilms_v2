

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/styles.css">
    <link rel="stylesheet" href="/src/css/tailwind.css">
    <script src="/src/js/app.js"></script>
    <title>JRETECH</title>
</head>
<body class="h-full">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Reset Password</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/change/password" method="POST">
        <input type="hidden" name="token" id="token" value="<?php echo $_GET['token'];?>">
      <div>
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Create New Password</label>
        <div class="mt-2">
          <input id="password" name="password" type="password"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
        <div class="mt-2">
          <input id="confirm_password" name="confirm_password" type="confirm_password"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      already a member?
      <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
    </p>
  </div>
</div>
</body>
</html>
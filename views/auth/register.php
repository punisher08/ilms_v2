

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/styles.css">
    <link rel="stylesheet" href="/src/css/tailwind.css">
    
    <title>ILMS</title>
</head>

<body class="h-full">
  <?php
    $success_class = 'hidden';
    $existing_class = 'hidden';
    $register_class = '';
    if(isset($_GET['registration'])){
      $register_class = 'hidden';
      $success_class = '';
    }
    if(isset($_GET['existing'])){
      $register_class = 'hidden';
      $existing_class = '';
    }
  ?>
  <div class="grid lg:grid-cols-2 grid-cols-1 registration_form <?=$register_class;?>">
    <div class="item" style="height:100vh;">
      <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="/src/images/logo-1666417736.png" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">REGISTRATION FORM</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="/register" method="POST" id="form_container">
          <div id="notice" class="hidden">Please fill in all required fields.</div>
            <section class="_step">
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="student_number" id="student_number" type="text" placeholder="Student ID" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="first_name" type="text" placeholder="First Name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="last_name" type="text" placeholder="Last Name"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="middle_name" type="text"  placeholder="Middle Name"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2 space-x-4">
                    <label class="inline-flex items-end">
                      <input type="radio" name="gender" value="male" class="mr-1.5">
                      Male
                    </label>
                    <label class="inline-flex items-end">
                      <input type="radio" name="gender" value="female" class="mr-1.5">
                      Female
                    </label>
                  </div>
                </div>
                <div class="_input_container mt-5">
                  <label for="dob" class="block text-sm font-medium leading-6 text-gray-900">Birth Date</label>
                  <div class="mt-2">
                    <input  name="dob" type="date"  placeholder="Last Name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
            </section>

            <section class="_step">
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="age" type="number"  placeholder="Age" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="contact" type="text"  placeholder="Contact" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="address" type="text"  placeholder="Address" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="email" type="text"  placeholder="Email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <?php
                      if(isset($_GET['existing'])){
                        echo'<span class="text-red-600 text-sm mt-2">Email already exists.</span>';
                      }
                    ?>
                  </div>
                </div>
             
                <div class="_input_container">
                  <div class="mt-2">
                  <input  name="college" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                    <!-- <select name="college" id="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      <option value="ccs">College of Computer Studies</option>
                      <option value="coed">College of Education</option>
                    </select> -->
                  </div>
                </div>
            </section>
            <section class="_step">
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="year_level" type="number"  placeholder="Year Level" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="program" type="text"  placeholder="Program" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="major" type="text"  placeholder="Major" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="_input_container">
                  <div class="mt-2">
                    <input  name="site_name" type="text"  placeholder="Site Name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
            </section>
            <!-- <section id="_details">
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="dataTable">
                      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                          <tr>
                              <th scope="col" class="px-6 py-3">Field</th>
                              <th scope="col" class="px-6 py-3">Value</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                  </table>
              </div>

            </section> -->
            <div>
                <button type="button" id="next" class="next flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">NEXT</button>
                <button type="button" id="prev" class="hidden prev mt-2 flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">PREV</button>
                <button type="submit" id="submit_registration" class="hidden flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-2">Register</button>
            </div>
          </form>
        

          <p class="mt-10 text-center text-sm text-gray-500">
            Already have an account ?
            <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
          </p>
        </div>
      </div>
    </div>
    <div class="item sm:hidden lg:block" >
    </div>
  </div>
  <!-- status block -->
  <!-- component -->
      <div class="bg-gray-100 <?=$success_class;?> ">
        <div class="bg-white p-6  md:mx-auto">
          <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
              <path fill="currentColor"
                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
              </path>
          </svg>
          <div class="text-center">
              <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Registration Successful</h3>
              <p class="text-gray-600 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam culpa sint libero nesciunt, voluptatem debitis ad nostrum eaque tenetur unde.</p>
              <div class="py-10 text-center">
                  <a href="/login" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                      GO BACK 
                </a>
              </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-100 <?=$existing_class;?> ">
        <div class="bg-white p-6  md:mx-auto">
          <div class="text-green-600 w-16 h-16 mx-auto my-6">
            <img src="src/images/error.webp" alt="">
          </div>
          <div class="text-center">
              <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Student Number or Email Already registered</h3>
              <p class="text-gray-600 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam culpa sint libero nesciunt, voluptatem debitis ad nostrum eaque tenetur unde.</p>
              <div class="py-10 text-center">
                  <a href="/login" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                      GO BACK 
                </a>
              </div>
          </div>
        </div>
      </div>
     
      <script src="/src/js/app.js"></script>
</body>
</html>
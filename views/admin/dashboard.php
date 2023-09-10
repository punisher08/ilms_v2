<?php include dirname(__DIR__).'/layout/header.php' ;?>

<main class="p-6 sm:p-10 space-y-6">
   <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
      <div class="mr-6">
         <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
         <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2>
      </div>
      <div class="">
         
         <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Export Data
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
         </button>
         <!-- Dropdown menu -->
         <div id="dropdownDivider" class="z-10 fixed hidden  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class=" py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
               <li>
               <a href="#" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Send to Web</a>
               </li>
               <li>
               <a href="#" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
               </li>
               <li>
               <a href="#" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
               </li>
            </ul>
         </div>

         <!--  -->
      </div>
   </div>
   <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
         <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
         </div>
         <div>
            <span class="block text-2xl font-bold"><?=$data['master_list'];?></span>
            <span class="block text-gray-500">Total Students</span>
         </div>
      </div>
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
         <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
         </div>
         <div>
            <span class="block text-2xl font-bold"><?=$data['active_list'];?></span>
            <span class="block text-gray-500">Active Students </span>
         </div>
      </div>
      <div class="flex items-center p-8 bg-white shadow rounded-lg">
         <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
            </svg>
         </div>
         <div>
            <span class="inline-block text-2xl font-bold"><?=$data['inactive_list'];?></span>
            <span class="block text-gray-500">Inactive Students</span>
         </div>
      </div>
      <!-- <div class="flex items-center p-8 bg-white shadow rounded-lg">
         <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
         </div>
         <div>
            <span class="block text-2xl font-bold">83%</span>
            <span class="block text-gray-500">Finished homeworks</span>
         </div>
      </div> -->
   </section>
</main>
<script>
   let data = <?=json_encode($data['master_list']);?>;
   console.log(data);

   async function sendDataToWebApp(data){
      fetch('http://localhost/ilms/webapp/api.php', {
      method: 'POST',
      mode: 'cors' ,
      headers: {
         "Content-Type": "application/json",
         // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      body:JSON.stringify(data)
      // body:data
      })
      .then(response => response.json())
      .then(response => console.log(response))
      .catch(error => console.error(error));
   }
</script>
<?php include dirname(__DIR__).'/layout/footer.php' ;?>
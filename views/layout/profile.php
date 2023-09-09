<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/src/css/styles.css">
      <link rel="stylesheet" href="/src/css/admin.css">
      <link rel="stylesheet" href="/src/css/tailwind.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
         integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <title>ADMIN TEMPLATE</title>
   </head>
   <body>
   <div class="flex bg-gray-100 min-h-screen"  id="app">
      <aside class="flex flex-col aside_menu">
         <a href="#"
            class="inline-flex items-center justify-center h-20 w-full bg-blue-600 hover:bg-blue-500 focus:bg-blue-500">
            <svg class="h-12 w-12 text-white" fill="currentColor" version="1.1" viewBox="0 0 215 215" stroke="none"
               xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
               xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:osb="http://www.openswatchbook.org/uri/2009/osb"
               xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
               <title>Company logo</title>
               <path transform="matrix(1.28 0 0 1.28 13.057 10.462)"
                  d="m121.65 15.95-11.2 11.2q-5.9-4.75-12.8-7.3-5.7-2.35-10.05-3.15v-16.7h-22.8v16.35l-6.9 1.75q-8.1 2.55-16.15 7.5l-11.6-11.65-15.95 15.75 11.8 11.65q-6.1 8.85-8.85 19.65l-0.8 4.55h-16.35v21.65h16.75l2.15 7.45q2.35 7.9 7.3 14.4l-12 11.6 15.35 15.35 12-11.8 6.5 3.95q8.85 4.3 16.75 5.7v16.15h22.8v-16.55q8.05-1.8 15.75-5.7l5.55-3.35 11.4 11.4 16.15-16.15-11.25-11.4q5.1-7.85 7.5-16.9l1.2-4.15h16.1v-21.65h-15.75q-1.55-8.5-4.5-15.35l-3.55-5.9 12-12.05-16.55-16.3m-7.65 58.85q-0.05 15.9-11.25 27.55-11.6 11-27.55 11-16.15 0-27.55-11.4-11.2-10.85-11.2-27.15 0-15.95 11.2-27.55 11.8-11.25 27.55-11.25 15.75 0 27.55 11.25 11.2 11.8 11.25 27.55"
                  stroke-linecap="square" stroke-width="1" />
               <path transform="matrix(.34872 0 0 .34872 83.818 78.7)"
                  d="m144.75 65.137-94.088 94.088-50.662-50.663v-65.138l50.662 50.663 94.088-94.088v65.137"
                  stroke-linecap="square" stroke-width="6" />
            </svg>
         </a>
         <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
            <nav class="flex flex-col mx-4 my-6 space-y-4">
               <a href="#"
                  class="inline-flex items-center py-3 hover:text-gray-400 bg-white  rounded-lg px-2 "  :class="`${menu ? '' : 'justify-center'}`">
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                  </svg>
                  <span class="ml-2" v-if="menu">Folders</span>
               </a>
               <a href="#" class="inline-flex items-center py-3 hover:text-gray-400  hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2 " :class="`${menu ? '' : 'justify-center'}`" >
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                  <span class="ml-2" v-if="menu">Dashboard</span>
               </a>
               <a href="#"
                  class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2 "  :class="`${menu ? '' : 'justify-center'}`">
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-2" v-if="menu">Messages</span>
               </a>
               <a href="#" class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2 "  :class="`${menu ? '' : 'justify-center'}`">
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-2" v-if="menu">Documents</span>
               </a>
            </nav>
            <div class="flex justify-end">
               <a
                  class="inline-flex p-3 hover:text-gray-400 justify-center border-gray-700 h-15 w-full border-t hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2" :class="`${menu ? '' : 'justify-center'}`">
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <span class="ml-2" v-if="menu">Settings</span>
               </a>
            </div>
         </div>
      </aside>
      <div class="flex-grow text-gray-800">
	  	<header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <div class="mr-8 cursor-pointer" @click="menu = !menu">
               <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
               </svg>
            </div>
            <div class="relative w-full max-w-md sm:-ml-2">
               <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                  class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
                  <path fill-rule="evenodd"
                     d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                     clip-rule="evenodd" />
               </svg>
               <input type="text" role="search" placeholder="Search..."
                  class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
            </div>
            <div class="flex flex-shrink-0 items-center ml-auto">
               <button class="relative inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg"
                  @click="panel = !panel" id="panel">
                  <span class="sr-only">User Menu</span>
                  <div class="hidden md:flex md:flex-col md:items-end md:leading-tight ">
                     <p class="font-semibold capitalize"><?=$_SESSION['first_name'].' '.$_SESSION['middle_name'].' '.$_SESSION['last_name'];?></p>
                     <span class="text-sm text-gray-600"><?=$_SESSION['role'];?></span>
                  </div>
                  <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="user profile photo"
                     class="h-full w-full object-cover">
                  </span>
                  <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                     class="hidden sm:block h-6 w-6 text-gray-300">
                     <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                  </svg>
               </button>
               <div class="absolute top-20 bg-white border rounded-md p-2 w-56 " id="_submenu" x-show="panel" :class="`${panel ? '' : 'hidden'}`">
                  <div class="p-2 hover:bg-blue-100 cursor-pointer"><a href="/profile">Profile</a></div>
                  <div class="p-2 hover:bg-blue-100 cursor-pointer">Messages</div>
                  <div class="p-2 hover:bg-blue-100 cursor-pointer">To-Do's</div>
               </div>
               <div class="border-l pl-3 ml-3 space-x-1">
                  <button
                     class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                     <span class="sr-only">Notifications</span>
                     <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
                     <span
                        class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
                     <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                     </svg>
                  </button>
                  <a href="/logout">
                     <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Log out</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                           class="h-6 w-6">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                     </button>
                  </a>
               </div>
            </div>
         </header>
         <main class="p-6 sm:p-10 space-y-6">
			<section>
				<div class="bg-gray-100 bg-opacity-25">

				<div class="lg:w-8/12 lg:mx-auto mb-8">

					<header class="flex flex-wrap items-center p-4 md:py-8">

					<div class="md:w-3/12 md:ml-16">
						<!-- profile image -->
						<img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
									border-2 border-pink-600 p-1" src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80" alt="profile">
					</div>

					<!-- profile meta -->
					<div class="w-8/12 md:w-7/12 ml-4">
						<div class="md:flex md:flex-wrap md:items-center mb-4">
						<h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
							mrtravlerrr_
						</h2>

						<!-- badge -->
						<span class="inline-block fas fa-certificate fa-lg text-blue-500 
											relative mr-6 text-xl transform -translate-y-2" aria-hidden="true">
							<i class="fas fa-check text-white text-xs absolute inset-x-0
											ml-1 mt-px"></i>
						</span>

						<!-- follow button -->
						<a href="#" class="bg-blue-500 px-2 py-1 
										text-white font-semibold text-sm rounded block text-center 
										sm:inline-block block">Follow</a>
						</div>

						<!-- post, following, followers list for medium screens -->
						<ul class="hidden md:flex space-x-8 mb-4">
						<li>
							<span class="font-semibold">136</span>
							posts
						</li>

						<li>
							<span class="font-semibold">40.5k</span>
							followers
						</li>
						<li>
							<span class="font-semibold">302</span>
							following
						</li>
						</ul>

						<!-- user meta form medium screens -->
						<div class="hidden md:block">
						<h1 class="font-semibold">Mr Travlerrr...</h1>
						<span>Travel, Nature and Music</span>
						<p>Lorem ipsum dolor sit amet consectetur</p>
						</div>

					</div>

					<!-- user meta form small screens -->
					<div class="md:hidden text-sm my-2">
						<h1 class="font-semibold">Mr Travlerrr...</h1>
						<span>Travel, Nature and Music</span>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

					</header>

					<!-- posts -->
					<div class="px-px md:px-3">

					<!-- user following for mobile only -->
					<ul class="flex md:hidden justify-around space-x-8 border-t 
								text-center p-2 text-gray-600 leading-snug text-sm">
						<li>
						<span class="font-semibold text-gray-800 block">136</span>
						posts
						</li>

						<li>
						<span class="font-semibold text-gray-800 block">40.5k</span>
						followers
						</li>
						<li>
						<span class="font-semibold text-gray-800 block">302</span>
						following
						</li>
					</ul>

					<!-- insta freatures -->
					<ul class="flex items-center justify-around md:justify-center space-x-12  
									uppercase tracking-widest font-semibold text-xs text-gray-600
									border-t">
						<!-- posts tab is active -->
						<li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-700">
						<a class="inline-block p-3" href="#">
							<i class="fas fa-th-large text-xl md:text-xs"></i>
							<span class="hidden md:inline">post</span>
						</a>
						</li>
						<li>
						<a class="inline-block p-3" href="#">
							<i class="far fa-square text-xl md:text-xs"></i>
							<span class="hidden md:inline">igtv</span>
						</a>
						</li>
						<li>
						<a class="inline-block p-3" href="#">
							<i class="fas fa-user border border-gray-500
											px-1 pt-1 rounded text-xl md:text-xs"></i>
							<span class="hidden md:inline">tagged</span>
						</a>
						</li>
					</ul>
					<!-- flexbox grid -->
					<div class="flex flex-wrap -mx-px md:-mx-3">

						<!-- column -->
						<div class="w-1/3 p-px md:px-3">
						<!-- post 1-->
						<a href="#">
							<article class="post bg-gray-100 text-white relative pb-full md:mb-6">
							<!-- post image-->
							<img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">

							<i class="fas fa-square absolute right-0 top-0 m-1"></i>
							<!-- overlay-->
							<div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
												left-0 top-0 hidden">
								<div class="flex justify-center items-center 
													space-x-4 h-full">
								<span class="p-2">
									<i class="fas fa-heart"></i>
									412K
								</span>

								<span class="p-2">
									<i class="fas fa-comment"></i>
									2,909
								</span>
								</div>
							</div>

							</article>
						</a>
						</div>

						<div class="w-1/3 p-px md:px-3">
						<a href="#">
							<!-- post 2 -->
							<article class="post bg-gray-100 text-white relative pb-full md:mb-6">
							<img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1498409570040-05bf6d3dd5b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">

							<!-- overlay-->
							<div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
												left-0 top-0 hidden">
								<div class="flex justify-center items-center 
													space-x-4 h-full">
								<span class="p-2">
									<i class="fas fa-heart"></i>
									412K
								</span>

								<span class="p-2">
									<i class="fas fa-comment"></i>
									1,993
								</span>
								</div>
							</div>

							</article>
						</a>
						</div>

						<div class="w-1/3 p-px md:px-3">
						<a href="#">
							<article class="post bg-gray-100 text-white relative pb-full  md:mb-6">
							<img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">
							<!-- overlay-->
							<div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
												left-0 top-0 hidden">
								<div class="flex justify-center items-center 
													space-x-4 h-full">
								<span class="p-2">
									<i class="fas fa-heart"></i>
									112K
								</span>

								<span class="p-2">
									<i class="fas fa-comment"></i>
									2,090
								</span>
								</div>
							</div>
							</article>
						</a>
						</div>

						<div class="w-1/3 p-px md:px-3">
						<a href="#">
							<article class="post bg-gray-100 text-white relative pb-full md:mb-6">
							<img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">

							<i class="fas fa-video absolute right-0 top-0 m-1"></i>

							<!-- overlay-->
							<div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
												left-0 top-0 hidden">
								<div class="flex justify-center items-center 
													space-x-4 h-full">
								<span class="p-2">
									<i class="fas fa-heart"></i>
									841K
								</span>

								<span class="p-2">
									<i class="fas fa-comment"></i>
									909
								</span>
								</div>
							</div>

							</article>
						</a>
						</div>

						<div class="w-1/3 p-px md:px-3">
						<a href="#">
							<article class="post bg-gray-100 text-white relative pb-full md:mb-6">
							<img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1475688621402-4257c812d6db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="image">
							<!-- overlay-->
							<div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
												left-0 top-0 hidden">
								<div class="flex justify-center items-center 
													space-x-4 h-full">
								<span class="p-2">
									<i class="fas fa-heart"></i>
									120K
								</span>

								<span class="p-2">
									<i class="fas fa-comment"></i>
									3,909
								</span>
								</div>
							</div>

							</article>
						</a>
						</div>

					</div>
					</div>
				</div>
				</div>
			</section>
         </main>
      </div>
   </div>
 <!-- <script src="/src/vue.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
   <script>
      new Vue({
         el: '#app',
         data:{
            menu:false,
            panel:false,
         },
         computed:{
         
         },
         methods:{
            menus(){
               console.log('clickes');
               }
         },
         mounted(){
               
         },
         updated(){
         
         },
      });
</script>
   </body>
</html>
<?php include dirname(__DIR__).'/layout/header.php' ;?>
<!-- component -->
<div class="sm:px-6 w-full">
<!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Master Lists</p>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="sm:flex items-center gap-2">
                    <div class="flex items-center">

                    </div>
                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <a href="/masterlist/add"><p class="text-sm font-medium leading-none text-white">Add Student</p></a>
                    </button>
                     <select name="" id="count" class="">
                        <option <?php echo (isset($_GET['count']) && $_GET['count'] == 5) ? 'selected': '' ;?> value="5">5</option>
                        <option <?php echo (isset($_GET['count']) && $_GET['count'] == 10) ? 'selected': '' ;?> value="10">10</option>
                        <option <?php echo (isset($_GET['count']) && $_GET['count'] == 20) ? 'selected': '' ;?> value="20">20</option>
                     </select>
                </div>
                <div class="mt-7 overflow-x-auto">
                    <table class="w-full whitespace-nowrap" id="usertable">
                        <tbody>
                            <!-- heading -->
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left"></th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Student Number</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Full Name</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">College</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Year Level</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Program</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Major</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Status</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left"></th>
                            </tr>
                            <?php
                            if(!empty($data['master_list'])):
                                foreach($data['master_list'] as $user ):
                                    $id = $user['id'];
                                    $student_number = $user['student_number'];
                                    $status = $user['status'];
                                    $fullname = $user['first_name'] .' '.$user['middle_name'].' '. $user['last_name'];
                                    $gender = $user['gender'];
                                    $dob = $user['dob'];
                                    $age = $user['age'];
                                    $contact = $user['contact'];
                                    $address = $user['address'];
                                    $email = $user['email'];
                                    $college = $user['college'];
                                    $year_level = $user['year_level'];
                                    $program = $user['program'];
                                    $major = $user['major'];
                                    $site_name = $user['site_name'];
                            ?>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                            <input placeholder="checkbox" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                                <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2"><?=$student_number;?></p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-gray-600 ml-2 uppercase"><?=$fullname;?></p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-gray-600 ml-2 uppercase"><?=$college;?></p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-gray-600 ml-2 uppercase"><?=$year_level;?></p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-gray-600 ml-2 uppercase"><?=$program;?></p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-gray-600 ml-2 uppercase"><?=$major;?></p>
                                    </div>
                                </td>
                                <td class="pl-4">
                                    <?php
                                        if($status){
                                            echo ' <button class="focus:ring-2 focus:ring-offset-2 focus:ring-green-300 text-sm leading-none text-green-600 py-3 px-5 bg-green-100 rounded hover:bg-green-100 focus:outline-none">Active</button>';
                                        }else{
                                            echo ' <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Inactive</button>';

                                        }
                                    ?>
                                   
                                </td>
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none _actions" data-id="_actions_<?=$id;?>" role="button" aria-label="option">
                                            <svg class="dropbtn" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M4.16667 10.8332C4.62691 10.8332 5 10.4601 5 9.99984C5 9.5396 4.62691 9.1665 4.16667 9.1665C3.70643 9.1665 3.33334 9.5396 3.33334 9.99984C3.33334 10.4601 3.70643 10.8332 4.16667 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.8332C10.4602 10.8332 10.8333 10.4601 10.8333 9.99984C10.8333 9.5396 10.4602 9.1665 10 9.1665C9.53976 9.1665 9.16666 9.5396 9.16666 9.99984C9.16666 10.4601 9.53976 10.8332 10 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M15.8333 10.8332C16.2936 10.8332 16.6667 10.4601 16.6667 9.99984C16.6667 9.5396 16.2936 9.1665 15.8333 9.1665C15.3731 9.1665 15 9.5396 15 9.99984C15 10.4601 15.3731 10.8332 15.8333 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden _actions_<?=$id;?>">
                                            <form action="/student" method="post" id="form_<?=$id;?>">
                                                <div tabindex="0" data-id="<?=$id;?>" class="editform_btn focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <input type="hidden" name="id" value="<?=$id;?>">
                                                    <button type="submit">Edit</button>
                                                </div>
                                            </form>    
                                            <form action="/masterlist/delete" method="post" id="delete_form_<?=$id;?>">
                                                <div tabindex="0"  data-id="<?=$id;?>" class="delete_master_list focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <input type="hidden" name="id" value="<?=$id;?>">
                                                    <button type="button" class="">Delete</button>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                           
                        </tbody>
                    </table>
                    <!-- mobile -->
                    <table class="w-full whitespace-nowrap" id="usertable_mobile">
                        <tbody>
                            <!-- heading -->
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left"></th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left">Student Number</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-left"></th>
                            </tr>
                            <?php
                            if(!empty($data['master_list'])):
                                foreach($data['master_list'] as $user ):
                                    $id = $user['id'];
                                    $student_number = $user['student_number'];
                                    $status = $user['status'];
                                    $fullname = $user['first_name'] .' '.$user['middle_name'].' '. $user['last_name'];
                                    $gender = $user['gender'];
                                    $dob = $user['dob'];
                                    $age = $user['age'];
                                    $contact = $user['contact'];
                                    $address = $user['address'];
                                    $email = $user['email'];
                                    $college = $user['college'];
                                    $year_level = $user['year_level'];
                                    $program = $user['program'];
                                    $major = $user['major'];
                                    $site_name = $user['site_name'];
                            ?>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                            <input placeholder="checkbox" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                                <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2"><?=$student_number;?></p>
                                    </div>
                                </td>
                              
                                
                                <td class="pl-4">
                                    <?php
                                        if($status){
                                            echo ' <button class="focus:ring-2 focus:ring-offset-2 focus:ring-green-300 text-sm leading-none text-green-600 py-3 px-5 bg-green-100 rounded hover:bg-green-100 focus:outline-none">Active</button>';
                                        }else{
                                            echo ' <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Inactive</button>';

                                        }
                                    ?>
                                   
                                </td>
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none _actions" data-id="_actions_<?=$id;?>" role="button" aria-label="option">
                                            <svg class="dropbtn" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M4.16667 10.8332C4.62691 10.8332 5 10.4601 5 9.99984C5 9.5396 4.62691 9.1665 4.16667 9.1665C3.70643 9.1665 3.33334 9.5396 3.33334 9.99984C3.33334 10.4601 3.70643 10.8332 4.16667 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.8332C10.4602 10.8332 10.8333 10.4601 10.8333 9.99984C10.8333 9.5396 10.4602 9.1665 10 9.1665C9.53976 9.1665 9.16666 9.5396 9.16666 9.99984C9.16666 10.4601 9.53976 10.8332 10 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M15.8333 10.8332C16.2936 10.8332 16.6667 10.4601 16.6667 9.99984C16.6667 9.5396 16.2936 9.1665 15.8333 9.1665C15.3731 9.1665 15 9.5396 15 9.99984C15 10.4601 15.3731 10.8332 15.8333 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden _actions_<?=$id;?>">
                                            <form action="/student" method="post" id="form_<?=$id;?>">
                                                <div tabindex="0" data-id="<?=$id;?>" class="editform_btn focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <input type="hidden" name="id" value="<?=$id;?>">
                                                    <button type="submit">Edit</button>
                                                </div>
                                            </form>    
                                            <form action="/masterlist/delete" method="post" id="delete_form_<?=$id;?>">
                                                <div tabindex="0"  data-id="<?=$id;?>" class="delete_master_list focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <input type="hidden" name="id" value="<?=$id;?>">
                                                    <button type="button" class="">Delete</button>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                           
                        </tbody>
                    </table>
                    <div class="navigation flex justify-between mt-4">
                       
                        <button  id="prev" class="px-4 py-2 bg-blue-500  hover:bg-blue-600 rounded-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                            Prev
                        </button>
                        <button  id="next" class="px-4 py-2 bg-blue-500  hover:bg-blue-600 rounded-lg flex items-center">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
<style>
.checkbox:checked + .check-icon {
    display: flex;
    }
</style>
<?php include dirname(__DIR__).'/layout/footer.php' ;?>
<script>
    const data = <?=json_encode($data);?>;
   
    $('#send_data').on('click',function(){
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
    })
    const currentpage = parseInt(<?=json_encode($data['current_page']);?>);
    const total_pages = parseInt(<?=json_encode($data['total_page']);?>);
    console.log(total_pages);
    let count = $('#count').val();
    $('#count').on('change', function () {
        let count = $(this).val(); 
        location.href = `/masterlist?count=${count}`;
    });
   
    
    $('#next').on('click',function(){
        let page = currentpage;
        page++;
        if(page <= total_pages){
            location.href = `/masterlist?count=${count}&page=${page}`;
        }
    });
    
    $('#prev').on('click',function(){
        let page = currentpage;
        page--;
        if(page != 0 ){
            location.href = `/masterlist?count=${count}&page=${page}`;
        }
    });

    $('.editform_btn').on('click',function(){
        let id = $(this).attr('data-id');
        $('#form_'+id).submit();
    });
    $('.delete_master_list').on('click',function(e){
      
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $('#delete_form_'+id).submit();
            }
        })
        
    })
    
</script>

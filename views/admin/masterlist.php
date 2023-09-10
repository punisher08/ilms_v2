<?php include dirname(__DIR__).'/layout/header.php' ;?>
<main class="container mx-auto py-10 _profile"  >   <!-- component -->
<!-- <h2 class="text-4xl font-semibold md-2 _title">Student Information</h2> -->
<?php
 $id = $data['id'];
 $student_number = $data['student_number'];
 $status = $data['status'];
 $fullname = $data['first_name'] .' '.$data['middle_name'].' '. $data['last_name'];
 $gender = $data['gender'];
 $dob = $data['dob'];
 $age = $data['age'];
 $contact = $data['contact'];
 $address = $data['address'];
 $email = $data['email'];
 $college = $data['college'];
 $year_level = $data['year_level'];
 $program = $data['program'];
 $major = $data['major'];
 $site_name = $data['site_name'];
?>
<form action="/masterlist/update" method="post">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-5 py-5 _info">
        <input type="hidden" name="id" value="<?=$id;?>">
        <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <p class="block uppercase tracking-wide text-grey-darker text-lg font-bold mb-2 py-2 "><?=$student_number;?></p>
     
        
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 disabled:bg-gray-200 "  name="student_number" type="hidden" placeholder="Student Number" value="<?=$student_number;?>">
        </div>
        </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            First Name
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="first_name" type="text" placeholder="First Name" value="<?=$data['first_name'];?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            Middle Name
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="middle_name" type="text" placeholder="Middle Name"  value="<?=$data['middle_name'];?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            Last Name
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"  name="last_name" type="text" placeholder="Last Name"  value="<?=$data['last_name'];?>">
        </div>
    </div>
    <div class="-mx-3 mb-2 flex _status">
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
            Status
            </label>
            <div class="mt-2 space-x-4 status">
                <input type="hidden" name="status" id="status" value="">
                <button class="mb-2 focus:ring-2 focus:ring-offset-2 _active  focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">
                    <?php echo ($status) ? 'Active' : 'Inactive';?>
                </button>
            </div>
            <div class="my-2 flex items-center">
                <div class="mx-2">
                    <input type="checkbox" name="status" id="" <?php echo ($status) ? 'checked' : '';?> value="1" class="px-2">Set to Active
                </div>
            </div>
        </div>

    </div>
    <div class="-mx-3 md:flex mb-2 py-2 ">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            Gender
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="gender" type="text" placeholder="Gender" value="<?=$gender;?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" >
            Date of Birth
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"name="dob"  type="text" placeholder="Date of Birth" value="<?=$dob;?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" >
            Age
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="age" type="text" placeholder="Age" value="<?=$age;?> ">
        </div>
    </div>
    <div class="-mx-3 md:flex mb-2 py-2 " >
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                Contact
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"name="contact"  type="text" placeholder="Contact" value="<?=$contact;?>">
        </div>
        <div class="md:w-1/2 px-3">
    <label class="block upt-grey-darker text-xs font-bold mb-2" >
            Email
        </label>
        <input class="appearance-none lowercase block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="email"  type="email" placeholder="Email" value="<?=$email;?> ">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" >
            Address
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="address"  type="text" placeholder="Address" value="<?=$address;?>">
        </div>
        
    </div>
    <div class="-mx-3 md:flex mb-2 py-2 " >
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" >
                College
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 uppercase" name="college"  type="text" placeholder="College" value="<?=$college;?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            Year Level
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="year_level"  type="text" placeholder="Year level" value="<?=$year_level;?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            Program
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="program"  type="text" placeholder="Program" value="<?=$program;?>">
        </div>
        <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            Major
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="major"  type="text" placeholder="Major" value="<?=$major;?>">
        </div>
    
    </div>
    <div class="-mx-3 md:flex mb-2 py-2 " >
    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
            Site Name
        </label>
        <input class="appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 lowercase" name="site_name"  type="text" placeholder="www.example.com" value="<?=$site_name;?>">
        </div>
    </div>
        <div class="flex my-2 py-2">
            <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
              <p class="text-sm font-medium leading-none text-white">Update</p>
            </button>
        </div>
    </div>
</form>

</main>
<?php include dirname(__DIR__).'/layout/footer.php' ;?>
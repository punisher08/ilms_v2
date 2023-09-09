// 
const steps = document.querySelectorAll('._step');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');
const submit_registration = document.getElementById('submit_registration');
const studentId = document.getElementById('student_number');
let idIsvalid = false;


let currentForm = null;
let isValid = false;
let active_step = 0;

async function loadStep(){
    
    steps.forEach((element,index) => {
        element.classList.add('hidden');
        if(index ===  active_step){
            element.classList.remove('hidden');
            currentForm = element;
        }
    });
}

async function next(){
    await validateFields();

    
    if(isValid){
        active_step = active_step + 1;
        await loadStep();
        prevButton.classList.remove('hidden');
        await buttons();
    }  
}
async function buttons(){

    if(active_step >= (steps.length - 1)){
        submit_registration.classList.remove('hidden');
        nextButton.classList.add('hidden');
    }else{
        submit_registration.classList.add('hidden');
        nextButton.classList.remove('hidden');
    }
}
async function prev(){
    active_step = active_step - 1;
    if(active_step === 0){
        prevButton.classList.add('hidden');
    }else{
        prevButton.classList.remove('hidden');
    }
    await loadStep();
    await buttons();

}

function displayPrevButton(){
    if(active_step !== 0 ){
        prevButton.classList.add('hidden');
    }else{
        prevButton.classList.remove('hidden');
    }
}
async function validateFields(){
 
    let fields = currentForm.querySelectorAll('input');
    fields.forEach(element => {
        if(element.value === null || element.value === ''){
            element.classList.remove('border-0');
            element.classList.add('required');
            isValid = false;
        }else{
            element.classList.remove('required');
            isValid = true;
        }
    })
}

async function validateUserId(student_id) {
    let data = {
        id: student_id
    };

    try {
        const response = await fetch('/api/userList', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const responseData = await response.json();

        if (!responseData.result) {
            alert(responseData.message);
            return false;
        } else {
            return true;
        }
    } catch (error) {
        console.error('Error:', error);
        return false;
    }
}


(async () => {
    await loadStep();
})();



nextButton.addEventListener('click',async () => {
    await next();
});
prevButton.addEventListener('click',async () => {
    await prev();
});
<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: POST"); 
header("Access-Control-Allow-Headers: Content-Type"); 

$rawData = file_get_contents("php://input");
$postData = json_decode($rawData, true); 
echo json_encode($postData);


?>
<script>
$('#fetch_data').on('click', function () {
    fetch('http://ilmsapi.test/api/web/v1/get/masterlist', {
        method: 'GET',
        mode: 'cors' // Set the mode to 'cors'
    })
    .then(response => response.json())
    .then(response => console.log(response))
    .catch(error => console.error(error));
}); 
</script>
<?php
if (isset($_POST['generate-btn'])) {
    // Retrieve other form data
    $name = $_POST['std_name'];
    $phone = $_POST['std_phone'];
    $email = $_POST['std_email'];
    $course = $_POST['std_course'];
    $session = $_POST['std_session'];
    $dob = $_POST['std_dob'];
    $age = $_POST['std_age'];
    $address = $_POST['std_address'];
    $profession = $_POST['std_profession'];

    // Handle uploaded image
    if (isset($_FILES['std_image'])) {
        $image = $_FILES['std_image'];
        $targetDir = "uploads/"; // Change this path to the desired directory to store the images

        // Generate a unique name for the image to avoid overwriting
        $imageName = uniqid() . "_" . $image['name'];

        // Move the uploaded image to the target directory
        move_uploaded_file($image['tmp_name'], $targetDir . $imageName);

        // Store the image path in a variable or database, here we're storing in the $imagePath variable
        $imagePath = $targetDir . $imageName;
    } else {
        // If no image is uploaded, you can set a default image path or handle this case accordingly
        $imagePath = "default.jpg"; // Change this to the path of your default image
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script> 
</head>

<body> 
    <h1 class="text-center display-3 mt-5 text-danger">ID Card Generator</h1>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-2 text-center bg-dark">
                    <div class="row">
                        <div class="col-md-7 border-right no-gutters">
                            <div class="py-3"><img src="<?php echo $imagePath;?>" width="150px"
                                    class="rounded-circle">
                                <h4 class="text-danger"><?php if(isset($name)){echo $name;} ?></h4>
                                <div class="allergy text-success"><span><?php if(isset($profession)){echo $profession;} ?></span></div>
                                <div class="stats">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column mt-5"> <span
                                                            class="text-left head text-warning">DOB</span>
                                                        <span class="text-left bottom text-white"><?php if(isset($dob)){echo $dob;} ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column mt-5"> <span
                                                            class="text-left head text-warning">Age</span>
                                                        <span class="text-left bottom text-white"><?php if(isset($age)){echo $age;} ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="py-3 mt-4">
                                <div> <span class="d-block head text-warning">Home Address</span> <span class="bottom text-white"><?php if(isset($address)){echo $address;} ?></span> </div>
                                <div class="mt-4"> <span class="d-block head text-warning">Mobile Phone#</span> <span
                                        class="bottom text-white"><?php if(isset($phone)){echo $phone;} ?></span> </div>
                                <div class="mt-4"> <span class="d-block head text-warning">Email</span> <span
                                        class="bottom text-white"><?php if(isset($email)){echo $email;} ?></span> </div>
                                <div class="mt-4"> <span class="d-block head text-warning">Course</span> <span
                                        class="bottom text-white"><?php if(isset($course)){echo $course;} ?></span> </div>
                                <div class="mt-4"> <span class="d-block head text-warning">Session</span> <span
                                        class="bottom text-white"><?php if(isset($session)){echo $session;} ?></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
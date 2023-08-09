<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script>
</head>

<body class="bg-dark">
<h1 class="text-center display-3 mt-5 text-danger">ID Card Generator</h1>
    <main class="container mt-5">
        <form action="id.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <h1 class="text-warning">Create your Id Card</h1>

            <!-- Name Field -->
            <div class="col-md-6">
                <label for="field" class="text-warning fs-12">Name</label>
                <section>
                    <input class="form-control" type="text" name="std_name" id="field" placeholder="Enter your Name" required>
                </section>
            </div>


            <!-- DOB field -->
            <div class="col-md-6">
                <label for="dob" class="text-warning fs-12">DOB</label>
                <section>
                    <input class="form-control" type="date" name="std_dob" id="dob" placeholder="Enter your DOB" required>
                </section>
            </div>

            <!-- Age field -->
            <div class="col-md-6">
                <label for="age" class="text-warning fs-12">Age</label>
                <section>
                    <input class="form-control" type="text" name="std_age" id="age" placeholder="Enter your Age" required>
                </section>
            </div>
            <!-- Phone Field -->
            <div class="col-md-6">
                <label for="phone" class="text-warning fs-12">Phone</label>
                <section>
                    <input class="form-control" type="" name="std_phone" id="phone" placeholder="Enter your Phone#" required>
                </section>
            </div>

            <!-- Email field -->
            <div class="col-md-6">
                <label for="email" class="text-warning fs-12">Email</label>
                <section>
                    <input class="form-control" type="email" name="std_email" id="email" placeholder="Enter your Email" required>
                </section>
            </div>

            <!-- Home Address -->
            <div class="col-md-6">
                <label for="address" class="text-warning fs-12">Address</label>
                <section>
                    <input class="form-control" type="address" name="std_address" id="address" placeholder="Enter your Address" required>
                </section>
            </div>

            <!-- Course Field -->
            <div class="col-md-6">
                <label for="course" class="text-warning fs-12">Course</label>
                <section>
                    <input class="form-control" type="text" name="std_course" placeholder="Name of your Course" required>
                </section>
            </div>

            <!-- Session Field -->
            <div class="col-md-6">
                <label for="session">Session</label>
                <section>
                    <input class="form-control" type="text" name="std_session" placeholder="Your Session" required>
                </section>
            </div>

            <!-- Profession Field -->
            <div class="col-md-6">
                <label for="profession" class="text-warning fs-12">Profession</label>
                <section>
                    <input class="form-control" type="text" name="std_profession" placeholder="Your Profession" required>
                </section>
            </div>

            <!-- Image field -->
            <div class="col-md-6">
                <label for="image" class="text-warning fs-12">Image</label>
                <section>
                    <input type="file" class="form-control" name="std_image" >
                </section>
            </div>

            <!-- Buttons -->
            <div class="mt-3">
                <input type="submit" name="generate-btn" class="btn btn-primary" value="Generate ID">
            </div>
        </div>
    </form>
        
    </main>
</body>

</html>
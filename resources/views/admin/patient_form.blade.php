<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container">
        <div class="text">
           Patient Form
        </div>
        <form action="{{url('add_patient')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required autocomplete="name" name="name">
                    <div class="underline"></div>
                    <label for="">Patient Name</label>
                </div>
                <div class="input-data">
                    <input type="password" required autocomplete="new-password" name="password">
                    <div class="underline"></div>
                    <label for="">Password</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required autocomplete="email" name="email">
                    <div class="underline"></div>
                    <label for="">Email Address</label>
                </div>
                <div class="input-data">
                    <input type="password" required autocomplete="new-password" name="confirmpassword">
                    <div class="underline"></div>
                    <label for="">Confirm Password</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input  type="file" name="file" required>
                    <div class="underline"></div>
                    <label for="patient_image">Upload Patient's Image</label>
                </div>

                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Phone</label>
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>

    </div>
</body>
</html>

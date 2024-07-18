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
          Add Medicine
        </div>
        <form action="{{url('add_medicine')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required name="medicine_name">
                    <div class="underline"></div>
                    <label for="">Medicine Name</label>
                </div>
                <div class="input-data">
                    <input type="text" required name="quantity">
                    <div class="underline"></div>
                    <label for="">Quantity</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="date" required name="date_added">
                    <div class="underline"></div>
                    <label for="">Date Added</label>
                </div>
                <div class="input-data">
                    <input type="date" required name="expiration_date">
                    <div class="underline"></div>
                    <label for="">Expiration Date</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input id="medicine_image" type="file" name="medicine_image" accept="image/*" required>
                    <div class="underline"></div>
                    <label for="medicine_image">Upload Medicine Image</label>
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

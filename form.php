<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8"style="border:2px solid black;padding:5px;text-align:center">
                <h1>Addmission forn 2023</h1>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10" style="padding:80px">
                <form action="form_action.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Full Name: </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Father Name: </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="fname" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Mother Name: </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="mname" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Address: </label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Email: </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                             <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Mobile Number: </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" name="mobile" maxlength="11" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">DoB: </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>
                             <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Category: </label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="category" class="form-control" required>
                                        <option value="">Select Your Department</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Data Science">Data Science</option>
                                        <option value="Artifical Intelligence">Artifical Intelligence</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Gender: </label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="label">Course: </label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="course" class="form-control" required>
                                        <option value="">Select Course</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Graphics Designing">Graphics Designing</option>
                                        <option value="Computrized Accounting">Computrized Accounting</option>
                                        <option value="UI/UX Designer">UI/UX Designer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group" style="float: right;">
                                        <label class="label">Profile</label>
                                        <div style="border:1px solid black; height:150px; width:150px;backgrount: #F5FAFF;">
                                            <img id="output" width="150"; height="150" / style="display:none">
                                        </div>
                                        <input type="file" name="image" id="image" onchange="loadfile(event)" class="form-control" required accept="image/*" / style="width:150px" required>
                                        <script type="text/javascript">
                                            var loadfile = function(event){
                                                var reader = new FileReader();
                                                reader.onload = function(){
                                                    var output = document.getElementById('output');
                                                    output.src = reader.result;
                                                };
                                                $('#output').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="Declaration"></label>
                            </div>
                            <div class="col-sm-8">
                                <div style="border:2px solid black;padding:10px;text-align:center;border-radius:25px;">
                                    <input type="checkbox" name="declare" required>
                                    I declare that I have read and filled all the above information, so the information is given by me is incorrect, you have rights to cancel admission form.
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-4">
                                        <br>
                                        <button class="btn btn-success" name="form_submit">Submit</button>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
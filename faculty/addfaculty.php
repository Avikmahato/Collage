<?php
include("../nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_Faculty</title>
    <link rel="stylesheet" href="faculty.css">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="../failed.css">
    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    <header>
        <h4>Add Faculty</h4>
    </header>
    <main>
        <form id="addfaculty" action="addfaculty.php" method="post" enctype="multipart/form-data">
            <div class="profile">
                <label for="profile">
                    <img src="male.png" alt="" id="profile_view">
                </label>
                <input required type="file" id="profile" style="display: none;" name="profile">
            </div>
            <div class="fiddiv">
                <label for="fid">
                    Faculty ID :
                </label>
                <input type="text" name="fid" id="fid" required>
            </div>
            <div class="fnamediv">
                <label for="fname">
                    Faculty Name :
                </label>
                <input type="text" name="fname" id="fname" required>
            </div>
            <div class="agediv">
                <label for="age">
                    Age :
                </label>
                <input type="text" name="age" id="age" required>
            </div>
            <div class="genderdiv">
                <label for="age" style="font-weight: 600; margin-right: 1.2rem;">
                    Gender :
                </label>
                <div class="genders">
                    <p style="font-size: 1.2rem; font-weight:600">
                        Male
                    </p>
                    <input type="radio" name="gender" value="Male" id="gender" required>
                    <p style="font-size: 1.2rem; font-weight:600">
                        Female
                    </p>
                    <input type="radio" name="gender" value="Female" id="gender" required>
                    <p style="font-size: 1.2rem; font-weight:600">
                        BTS
                    </p>
                    <input type="radio" name="gender" value="BTS" id="gender" required>
                    <p style="font-size: 1.2rem; font-weight:600">
                        Other
                    </p>
                    <input type="radio" name="gender" value="Other" id="gender" required>
                </div>
            </div>
            <div class="Educationdiv">
                <label for="Education">
                    Education :
                </label>
                <input type="text" name="education" id="Education" required>
            </div>
            <div class="specializationdiv">
                <label for="specialization">
                    Specialize In :
                </label>
                <input type="text" name="specialization" id="specialization" required>
            </div>
            <div class="emaildiv">
                <label for="email">
                    Email :
                </label>
                <input type="text" name="email" id="email" required>
            </div>
            <div class="mobilediv">
                <label for="mobile">
                    Mobile :
                </label>
                <input type="text" name="mobile" id="mobile" required>
            </div>
            <div class="submitdiv">
                <input type="submit" name="submit" value="submit" id="submit">
            </div>
        </form>
    </main>
</body>
</html>
<?php
include("../connection.php");
if ($connection) {
    if (isset($_POST['submit'])) {
        $name = $_POST['fname'];
        $age = $_POST['age'];
        $profile_name=$_FILES['profile']['name'];
        $profile_tmp_name=$_FILES['profile']['tmp_name'];
        $gender=$_POST['gender'];
        $id = $_POST['fid'];
        $educ = $_POST['education'];
        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $mobile=filter_input(INPUT_POST,'mobile',FILTER_VALIDATE_INT);
        $special = $_POST['specialization'];
        $path="../profiles/".$profile_name;
        $query="INSERT INTO professors(f_id,Profile,Name,Age,Gender,Education,Specialization,email,mobile)
        VALUES
        ('$id','$profile_name','$name','$age','$gender','$educ','$special','$email','$mobile');";
        try{
            $run=mysqli_query($connection,$query);
        }
        catch(Exception $e){
        }
        if(isset($run)){
            move_uploaded_file($profile_tmp_name,$path);
            echo "
            <script>
                Swal.fire({
                imageUrl: '../success.gif',
                imageHeight: 250,
                title:'Succesfully Added',
                text:'Faculty Member Is Added Succesfully.',
                imageAlt: 'A tall image'
            }).then(()=>{
                window.location.href='faculty.php';
            });
            </script>";
        }
        else{
            echo "
            <script>
                Swal.fire({
                imageUrl: '../failed.gif',
                imageHeight: 250,
                title:'Failed!!!',
                text:'Faculty Member Is Added Failed',
                imageAlt: 'A tall image'
            }).then(()=>{
                window.location.href='faculty.php';
            });
            </script>";
            
        }
    }
}
else{
    echo "
    <script>
        window.alert('Connection Failed.');
    </script>";
    
}
mysqli_close($connection);
?>
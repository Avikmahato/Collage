<?php
include("../nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Result</title>
    <link rel="stylesheet" href="result.css">
    <link rel="stylesheet" href="../Home/style.css">

</head>

<body>
<aside id="sidebar">
            <div>
                <i class="fa-solid fa-xmark" id="close" onclick="clo()"></i>
            </div>

            <?php
            if ($_SESSION['role'] == "student") {

                echo '<a href="index.php" >Home</a>';
                echo '<a href="#" onclick="choose(2)">Student Information</a>';
                echo '<a href="#" onclick="choose(3)">Edit Information</a>';
                echo '<a href="../results/result.php">Your Resuslt</a>';
                echo '<a href="#">Your Attendance</a>';
                echo '<a href="#">Today Questions</a>';
                echo '<a href="../signout.php">Log Out</a>';
            } elseif ($_SESSION['role'] == "professor") {
                echo '<a href="#">Your Rating</a>';
                echo '<a href="#">Add Questions</a>';
                echo '<a href="#">Today Questions</a>';
                echo '<a href="../signout.php">Log Out</a>';
            }
            ?>
        </aside>
    <div class="title">
        <h2>Your Results</h2>
    </div>
    <div class="content">
        <div class="result">
            <div class="exam_name">
                <p>First Semester</p>
            </div>
            <div class="mark">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Percentage</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    function check($val){
                        if($val>=90){
                            return "10";
                        }
                        elseif($val>=80){
                            return "9";
                        }
                        elseif($val>=70){
                            return "8";
                        }
                        elseif($val>=60){
                            return "7";
                        }
                        elseif($val>=50){
                            return "6";
                        }
                        elseif($val>=40){
                            return "5";
                        }
                        else{
                            return "Fail";
                        }
                    }
                    include("../connection.php");
                    $query = "SELECT BBCACCHC101,BBCACCHC102,BBCACCHC103,BBCACCHC104 FROM semester1 where registration='004400' and roll='107161' and no='2211833';";
                    $result = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<tr>';
                        $per = $data['BBCACCHC101'] * 10 / 5;
                        echo '<td>BBCACCHC101</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC101'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC102'] * 10 / 5;
                        echo '<td>BBCACCHC102</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC102'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC103'] * 10 / 5;
                        echo '<td>BBCACCHC103</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC103'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC104'] * 10 / 5;
                        echo '<td>BBCACCHC104</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC104'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan=5>No Result Found!</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="result">
            <div class="exam_name">
                <p>Second Semester</p>
            </div>
            <div class="mark">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Percentage</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    include("../connection.php");
                    $query = "SELECT BBCACCHC201,BBCACCHC202,BBCACCHC203,BBCACCHC204 FROM semester2 where registration='004400' and roll='107261' and no='2211833';";
                    $result = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<tr>';
                        $per = $data['BBCACCHC201'] * 10 / 5;
                        echo '<td>BBCACCHC201</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC201'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC202'] * 10 / 5.0;
                        echo '<td>BBCACCHC202</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC202'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC203'] * 10 / 5;
                        echo '<td>BBCACCHC203</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC203'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC204'] * 10 / 5;
                        echo '<td>BBCACCHC204</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC204'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan=5>No Result Found!</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="result">
            <div class="exam_name">
                <p>Third Semester</p>
            </div>
            <div class="mark">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Percentage</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    include("../connection.php");
                    $query = "SELECT BBCACCHC301,BBCACCHC302,BBCACCHC303,BBCACCHC304,BBCACCHC305 FROM semester3 where registration='004400' and roll='107361' and no='2211833';";
                    $result = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<tr>';
                        $per = $data['BBCACCHC301'] * 10 / 5;
                        echo '<td>BBCACCHC301</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC301'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC302'] * 10 / 5;
                        echo '<td>BBCACCHC302</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC302'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC303'] * 10 / 5;
                        echo '<td>BBCACCHC303</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC303'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC304'] * 10 / 5;
                        echo '<td>BBCACCHC304</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC304'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC305'] * 10 / 5;
                        echo '<td>BBCACCHC305</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC305'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan=5>No Result Found!</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="result">
            <div class="exam_name">
                <p>Fourth Semester</p>
            </div>
            <div class="mark">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Percentage</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    include("../connection.php");
                    $query = "SELECT BBCACCHC401,BBCACCHC402,BBCACCHC403,BBCACCHC404,BBCACCHC405 FROM semester4 where registration='004400' and roll='107461' and no='2211833';";
                    $result = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<tr>';
                        $per = $data['BBCACCHC401'] * 10 / 5;
                        echo '<td>BBCACCHC401</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC401'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC402'] * 10 / 5;
                        echo '<td>BBCACCHC402</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC402'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC403'] * 10 / 5;
                        echo '<td>BBCACCHC403</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC403'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC404'] * 10 / 5;
                        echo '<td>BBCACCHC404</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC404'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC405'] * 10 / 5;
                        echo '<td>BBCACCHC405</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC405'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan=5>No Result Found!</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="result">
            <div class="exam_name">
                <p>Fifth Semester</p>
            </div>
            <div class="mark">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Percentage</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    include("../connection.php");
                    $query = "SELECT BBCACCHC501,BBCACCHC502,BBCACCHC503,BBCACCHC504 FROM semester5 where registration='004400' and roll='107561' and no='2211833';";
                    $result = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<tr>';
                        $per = $data['BBCACCHC501'] * 10 / 5;
                        echo '<td>BBCACCHC501</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC501'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC502'] * 10 / 5;
                        echo '<td>BBCACCHC502</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC502'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC503'] * 10 / 5;
                        echo '<td>BBCACCHC503</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC503'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC504'] * 10 / 5;
                        echo '<td>BBCACCHC504</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC504'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan=5>No Result Found!</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="result">
            <div class="exam_name">
                <p>Sixth Semester</p>
            </div>
            <div class="mark">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Percentage</th>
                        <th>Point</th>
                    </tr>
                    <?php
                    include("../connection.php");
                    $query = "SELECT BBCACCHC601,BBCACCHC602,BBCACCHC603 FROM semester6 where registration='004400' and roll='107661' and no='2211833';";
                    $result = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<tr>';
                        $per = $data['BBCACCHC601'] * 10 / 5;
                        echo '<td>BBCACCHC601</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC601'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC602'] * 10 / 5;
                        echo '<td>BBCACCHC602</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC602'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        $per = $data['BBCACCHC603'] * 10 / 5;
                        echo '<td>BBCACCHC603</td>';
                        echo '<td>50</td>';
                        echo '<td>' . $data['BBCACCHC603'] . '</td>';
                        echo '<td>' . $per . '%</td>';
                        echo '<td>'.check($per).'</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan=5>No Result Found!</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
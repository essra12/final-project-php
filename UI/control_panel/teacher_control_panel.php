<?php 
include("../../path.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1">
        <title>Control_Panel_teacher</title>
        <link rel="stylesheet" href="../../css/group_tr_stu_file_control_panel.css">
        <!--icon8-->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>

<body id="b-vlightblue">

<!-- menu -->
<?php include(MAIN_PATH."/common/sidebar.php"); ?> 
<!-------------------->

<header class="main_icon">
    <div class="header-title">
        <label for="menu-toggle">
            <span class="las la-bars"></span>
        </label>
    </div>
</header>
<!--  main content -->

<div class="main-content">
    
    <!-- header card -->
    <div class="header-box">

        <div class="header-box-content-table">
            <h2>Create New Teacher</h2><br>
            <button class="btn-create">+</button>
        </div>
        <img src="../../sources/image/teacher_image_3d.png" >
    </div>

<!--  table for teacher  -->

    <div class="table-box">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Teacher Id</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Group Name</th>
                    <th scope="col" width="70px">Edit</th>
                    <th scope="col" width="70px">Delete</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td data-label="tr-id">1222</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-man.png" class="tab-img">MMM MMM</td>
                    <td data-label="tr-phone">092*******</td>
                    <td data-label="g-name">Math</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>
                <tr>
                    <td data-label="tr-id">1333</td>
                    <td data-label="tr-name"><img src="../../sources/image/user-weman.png" class="tab-img">YYY YYY</td>
                    <td data-label="tr-phone">091******</td>
                    <td data-label="g-name">English</td>
                    <td data-label="edit"></i><i class="las la-pen ticon edit"></i></td>
                    <td data-label="delete"><i class="las la-trash-alt ticon delet"></i></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

</body>
</html>

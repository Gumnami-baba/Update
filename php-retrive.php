<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link  rel="stylesheet">
</head>
<body>
    
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How to Update Data by ID into Database in PHP MySQL</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Student ID</label>
                                <input type="text" name="stud_id" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Class</label>
                                <input type="text" name="class" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone No.</label>
                                <input type="text" name="phone" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>How to Fetch Data by ID in Textbox using PHP MySQL</h4>
                    </div>
                    <div class="card-body">
                         
                    <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>

                        <form action="" method="GET" >
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="Trs_No" value="<?php if(isset($_GET['Trs_No'])){echo $_GET['Trs_No'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                   
                                        

                                    if(isset($_GET['Trs_No']))
                                    {
                                        $Trs_No = $_GET['Trs_No'];

                                        $query = "SELECT * FROM `student` WHERE Serial_No = '$Trs_No' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <form action="code.php" method="post">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>ID </th>
                                                                <th>Vehical-No</th>
                                                                <th>Wheel</th>
                                                                <th>WEIGHT</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?= $row['Serial_NO']; ?></td>
                                                                <td><input type="text" name="vehicalnum" value="<?= $row['Vehical_NO']; ?>"></td>
                                                                <td><input type="text" name="wheelnum" value="<?= $row['Wheel']; ?>"></td>
                                                                <td><input type="text" name="firstwt" value="<?= $row['First_WT']; ?>"></td>
                                                            </tr>   
                                                                
                                                            
                                                        </tbody>
                                                    </table>
                                                    <button type="submit" name="update">UPDATE</button>
                                                </form>
                                                
                                                
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
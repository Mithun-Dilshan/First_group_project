<?php
include "./config.php";

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnGetData'])) {
        $coNic = $_POST['coNic'];
        $sql = "SELECT * from loan WHERE nic LIKE " . "'%" . "$coNic" . "%'";
        // $sql = "SELECT * from loan WHERE nic = '$coNic'";
        $result = $conn->query($sql);
    } else if (isset($_POST['btnUpdate'])) {
        $id = $_POST['selectedLoanId'];
        $amount = $_POST['selectedAmount'];
        $period = $_POST['selectedPeriod'];
        $sql = "UPDATE loan SET amount = '$amount', period = '$period' WHERE loanId = '$id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            $msg = "Loan updated successfully.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        } else {
            $msg = "Error:" . $sql . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        
        $sql = "SELECT * from loan";
        $result = $conn->query($sql);

    } else if (isset($_POST['btnDelete'])) {
        $id = $_POST['selectedLoanId'];
        $sql = "DELETE FROM loan WHERE loanId = '$id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            $msg = "Loan deleted successfully.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        } else {
            $msg = "Error:" . $sql . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        
        $sql = "SELECT * from loan";
        $result = $conn->query($sql);

    } else {
        $sql = "SELECT * from loan";
        $result = $conn->query($sql);
    }
} else {
    $sql = "SELECT * from loan";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Samarasingha land Sale</title>
    <link rel="stylesheet" href="CSS/css path.css">
    <link rel="stylesheet" href="./CSS/loan.css">

    <script src="Js/contactus.js "></script>

</head>

<body>
    <div class="dev">

        <nav class="nev">

            <span onclick="openNav()">&#9776; More</span>

            <a href=#webpage> Home </a>
            <a href=#webpage> About us </a>
            <a href=#webpage>Contacts us</a>

            <img src="Image/profile.jpg" class="img">

        </nav>
        <input type="text" placeholder="Search.." class="search">
        <img src="Image/Logo.png" class="logo">

    </div>
    <input type="button" value="register" class="reg">
    <input type="button" value="login" class="log">

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#">Sale</a>
            <a href="#">Land List</a>
            <a href="LoanSubmit.php">Loan</a>
            <a href="#">Feedback</a>
            <a href="#">News</a>
            <a href="#">FAQ</a>
        </div>
    </div>

    <h2 style="text-align: center; margin-top: 5%;">Credit Officer Page</h2>
    <div style="text-align: left; margin-top: 70px; margin-bottom: 18%;">
        <fieldset style="margin-top: -2.5%;">
            <legend>Loan Details</legend>

            <form action="" method="POST">
                <div style="display: flex; justify-content: center;">
                    <div class="col-3" style="margin-right: 7px;">
                        <label for="coNic">Search with NIC No.</label>
                        <input type="text" id="coNic" name="coNic" placeholder="Enter NIC No." maxlength="10" autocomplete="off" value="<?php if (isset($coNic)) {
                                                                                                                                            echo $coNic;
                                                                                                                                        } ?>" />
                    </div>
                    <div class="col-1" style="margin-right: 7px;">
                        <br />
                        <input type="submit" class="button-sm blue" id="btnGetData" name="btnGetData" value="SEARCH" />
                    </div>
                </div>
                <div class="col-12" style="margin: 20px 5px 5px 5px;">
                    <table id="loans" style="width: 99%;">
                        <thead>
                            <tr>
                                <th>Loan Id</th>
                                <th>NIC No.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Mobile No.</th>
                                <th>Amount</th>
                                <th>Period</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result != null) {
                                if ($result->num_rows != null) {
                                    while ($row = $result->fetch_assoc()) {
                            ?>
                                        <tr>
                                            <td><?php echo $row['loanId']; ?></td>
                                            <td><?php echo $row['nic']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['address1'], ' ', $row['address2']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['amount']; ?></td>
                                            <td><?php echo $row['period']; ?></td>
                                            <!-- <td><a href="#" id="selectAction">SELECT</a></td> -->
                                        </tr>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <button id="myBtn" hidden>Open Modal</button>

                <div id="myModal" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center; margin-top: 2%;">Edit the Loan</h2>
                        <div style="text-align: left; margin-top: 70px; margin-bottom: 5%;">
                            <fieldset style="margin-top: -2.5%;">
                                <div style="display: flex; justify-content: start;">
                                    <div class="col-6" hidden>
                                        <label for="selectedLoanId">Loan Id</label>
                                        <input type="text" id="selectedLoanId" name="selectedLoanId" readonly="readonly" />
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <div class="col-6" style="margin-right: 5px;">
                                        <label for="selectedNic">NIC No.</label>
                                        <input type="text" id="selectedNic" name="selectedNic" disabled />
                                    </div>
                                    <div class="col-6">
                                        <label for="selectedName">Name</label>
                                        <input type="text" id="selectedName" name="selectedName" disabled />
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <div class="col-6" style="margin-right: 5px;">
                                        <label for="selectedAmount">Loan Amount</label>
                                        <input type="number" id="selectedAmount" name="selectedAmount" />
                                    </div>
                                    <div class="col-6">
                                        <label for="selectedPeriod">Period</label>
                                        <select name="selectedPeriod" id="selectedPeriod">
                                            <option value="default">Select the Loan Period</option>
                                            <option value="3 months">3 months</option>
                                            <option value="6 months">6 months</option>
                                            <option value="12 months">12 months</option>
                                            <option value="24 months">24 months</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: right;">
                                    <div class="col-3" style="margin-right: 5px;">
                                        <input type="submit" class="button-sm green" id="btnUpdate" name="btnUpdate" value="UPDATE" style="width: 100%;" onclick="return fnFormValidate();">
                                    </div>
                                    <div class="col-3">
                                        <input type="submit" class="button-sm red" id="btnDelete" name="btnDelete" value="DELETE" style="width: 100%;">
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>

                </div>
            </form>

        </fieldset>
    </div>

    <script src="./Js/creditOfficer.js"></script>
</body>

</html>
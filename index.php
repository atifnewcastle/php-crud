<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script> 
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="mt-2">
                                Employee Details
                                <a href="create.php" class="btn btn-success float-end">Add new employee</a>
                            </h2>
                            
                        </div>
                        <?php
                        require_once 'config.php';

                        $sql = "SELECT * FROM employees";
                        $result = mysqli_query($link, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Address</th>";
                            echo "<th>Salary</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            //list all select data
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["address"] . "</td>";
                                echo "<td>" . $row["salary"] . "</td>";
                                echo "<td>";
                                echo "<a href='read.php?id=".$row["id"]."' title='view record' class='btn btn-info mx-1' >view</a>";
                                echo "<a href='update.php?id=".$row['id']."' title='view record' class='btn btn-warning mx-1' >update</a>";
                                echo "<a href='delete.php?id=".$row['id']."' title='view record' class='btn btn-danger mx-1' >delete</a>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                        //Free result set
                        mysqli_free_result($result);

                        }
                        //Close connection
                        mysqli_close($link);
?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>
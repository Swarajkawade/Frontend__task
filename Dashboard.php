 <?php

    include('index.php');




?>

  <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">

                                 <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>UserName</th>
                                                    <th>Password</th>
                                                    <th>Edit</th>  
                                                    <th>Delete </th>    
  

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $conn = new mysqli("localhost", "root", "", "taskDb");
                                                 $i = 1;
                                                $sql = "SELECT * FROM `users`";
                                                $res = mysqli_query($conn, $sql);

                                                
                                                foreach($res as $row){
                                                
                                                    echo "<tr>";
                                                    echo "<td>" . $i . "</td>";
                                                    echo "<td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['email'] . "</td>";
                                                    echo "<td>" . $row['username'] . "</td>";
                                                    
                                                    echo "<td>" . $row['password'] . "</td>";
                                                   echo '<td><a href="editUser.php?userId='.$row["user_id"].'" onclick="return confirm(\'Are you sure you want to edit this?\');" style="color:green;"><i class="fa fa-edit"></i> </a> </td>';
                                                   echo '<td><a href="deleteUser.php?userId='.$row["user_id"].'" onclick="return confirm(\'Are you sure you want to delete this?\');" style="color:red;"><i class="fa fa-trash"></i> </a> </td>' ;
                                                 


                                                      

                                                    // echo '<td><a href="common/DeleteManager.php?userId='.$row["user_id"].'" onclick="return confirm(\'Are you sure you want to delete this?\');" style="color:red;"><i class="fa fa-trash"></i> </a> </td>';

                                                    echo "</tr>";
                                                    $i++;
                                                }
                                          

                                                ?> 
                                            </tbody>
                                        </table>

                             </div>
                        </div>
                     </div>
                </div>              
        <!-- JAVASCRIPT -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="js/pages/datatables.init.js"></script> 

        <script src="js/app.js"></script>

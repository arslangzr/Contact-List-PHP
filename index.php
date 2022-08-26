<?php
include('connection.php');
include('header.php');
?>
<body>
<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
             Contacts List Project
            </h1>
           
        </div>
    </div>
    <!-- /.row -->


 <div class="col-lg-12">
            <h2>List of Records</h2> <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <!-- <th>Las Name</th> -->
                            <!-- <th>Middle Name</th> -->
                            <!-- <th>Address</th> -->
                            <th>Contact</th>
                            <!-- <th>Comment</th> -->
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php                  
    $query = 'SELECT * FROM contact';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '<td>'. $row['phone_number'].'</td>';
                echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['contact_id'] . '" > VIEW </a> ';
                echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['contact_id'] . '"> EDIT </a> ';
                echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['contact_id'] . '">DELETE </a> </td>';
                echo '</tr> ';
    }
?> 
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
</body>
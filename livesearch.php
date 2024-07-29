<?php

    include("config.php");
    if(isset($_POST['input'])){
        $input =$_POST['input'];

        $query = "select * from search_d where name like '{$input}%'or address like '{$input}%' or address like '{$input}%'";

        $result = mysqli_query($conn , $query);
        if(mysqli_num_rows($result)>0){ ?>

            <table class="table table-bordered table-striped mt-4">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>address</th>
                            <th>age</th>
                            <th>email</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $address = $row['address'];
                            $age = $row['age'];
                            $email = $row['email'];
                            ?>
                            <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $age; ?></td>
                            <td><?php echo $email; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
            </table>
            <?php
        }else{
            echo "no data found";
        }
    }
?>
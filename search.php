<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Bac-miRNA - A comprehensive database for bacterial miRNAs</title>
        <h3 style="text-align: center;margin-top: 40px;margin-bottom: 40px;">Bac-miRNA - A comprehensive database for bacterial miRNAs</h3>
    </head>
    <body>
    <div style="list-style: none;text-align: center;font-size:20px;">
        <li style="display: inline-block;padding-right: 20px;"><a href="index">Home</a></li>
        <li style="display: inline-block;padding-right: 20px;"><a href="search">Search</a></li>
        <li style="display: inline-block;padding-right: 20px;"><a  href="Submit">Submit</a></li>
        <li style="display: inline-block;padding-right: 20px;"><a  href="Downloads">Downloads</a></li>
    </div>
    <div style="text-align: center;margin-top: 40px;margin-bottom: 40px;">
        <form action="" method="POST">
            <input type="text" name="search" placeholder="Enter Organism Name">
            <button type="submit" class="btn btn-sm" name="submit">Search</button>
    </form>
    </div>
    <div class="container my-5">
        <table class="table">
            <?php
        $con = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($con,'mirna');
        if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $sql = "SELECT * from bacmirna where Organism like '%$search%' ";
            $result = mysqli_query($con,$sql);
            if($result){
            if(mysqli_num_rows($result)>0){
                echo '<thead>
                <tr>
                <th>Name</th>
                <th>Sequence</th>
                <th>Length</th>
                <th>Organism</th>
                <th>Host targets</th>
                <th>Detection Method</th>
                <th>Reference</th>
                </tr>
                </thead>';
                while($row=mysqli_fetch_assoc($result)){
                echo '<tbody style="font-size:13px;">
                <tr>
                <td>'.$row['Name'].'</td>
                <td>'.$row['Sequence'].'</td>
                <td>'.$row['Length'].'</td>
                <td>'.$row['Organism'].'</td>
                <td>'.$row['Host targets'].'</td>
                <td>'.$row['Detection Method'].'</td>
                <td>'.$row['Reference'].'</td>
                </tr>
                </tbody>';
                }
            }else{
                echo '<h5 style="text-align: center;margin-top: 40px;margin-bottom: 40px;color: red;">No entries found</h5>';
            }
                
            }
        }
            ?>
        </table>
    </div>
</body>

<hr>

<h6 style="text-align:center;margin-top: 40px;margin-bottom: 40px;">Department of Biotechnology <br> PSG College of Technology</h6>        

</html>
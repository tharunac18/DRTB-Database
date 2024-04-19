<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>DRTB-DB - Database for Drug Resistant Tuberculosis</title>
        <h3 style="text-align: center;margin-top: 40px;margin-bottom: 40px;">DRTB-DB - Database for Drug Resistant Tuberculosis</h3>
    </head>
    <body>
    <div style="list-style: none;text-align: center;font-size:20px;">
        <li style="display: inline-block;padding-right: 20px;"><a href="index.html">Home</a></li>
        <li style="display: inline-block;padding-right: 20px;"><a href="search.html">Search</a></li>
        <li style="display: inline-block;padding-right: 20px;"><a  href="submit.html">Submit</a></li>
        <li style="display: inline-block;padding-right: 20px;"><a  href="Downloads.html">Downloads</a></li>
    </div>
    <div style="text-align: center;margin-top: 40px;margin-bottom: 40px;">
        <form action="" method="POST">
            <input type="text" name="search" placeholder="Enter Gene Name">
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
            $sql = "SELECT * from DRTB-Database where Gene '%$search%' ";
            $result = mysqli_query($con,$sql);
            if($result){
            if(mysqli_num_rows($result)>0){
                echo '<thead>
                <tr>
                <th>Gene</th>
                <th>Drug</th>
                <th>Nucleotide Position</th>
                <th>Nucleotide Mutation</th>
                <th>Amino Acid Position</th>
                <th>Amino Acid Mutation</th>
                <th>Sample Location</th>
                <th>Reference (PMID)</th>
                </tr>
                </thead>';
                while($row=mysqli_fetch_assoc($result)){
                echo '<tbody style="font-size:13px;">
                <tr>
                <td>'.$row['Gene'].'</td>
                <td>'.$row['Drug'].'</td>
                <td>'.$row['Nucleotide Position'].'</td>
                <td>'.$row['Nucleotide Mutation'].'</td>
                <td>'.$row['Amino Acid Position'].'</td>
                <td>'.$row['Amino Acid Mutation'].'</td>
                <td>'.$row['Sample Location'].'</td>
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

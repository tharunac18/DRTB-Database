<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .nav-item {
            margin-right: 20px;
        }
        .bg-light-grey {
            background-color: #f4f4f4;
        }
        .bg-light-blue {
            background-color: #eaf9fd;
        }
        .bg-light-green {
            background-color: #f5fde6;
        }
        .text-brown {
            color: #8b572a;
        }
        .border-brown {
            border-color: #8b572a;
        }
        .rounded-15 {
            border-radius: 15px;
        }
        .text-center {
            text-align: center;
        }
        .mt-40 {
            margin-top: 40px;
        }
        .mb-40 {
            margin-bottom: 40px;
        }
        .p-20 {
            padding: 20px;
        }
        .fs-25 {
            font-size: 25px;
        }
        .fs-20 {
            font-size: 20px;
        }
        .fs-15 {
            font-size: 15px;
        }
        .fw-bold {
            font-weight: bold;
        }
        .hr-brown {
            border-top: 2px solid #8b572a;
        }
    </style>
    <title>DRTB-DB - Database for Drug Resistant Tuberculosis</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">DRTB-DB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.html">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit.html">Submit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Downloads.html">Downloads</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-40 mb-40">
        <form action="" method="POST" class="text-center">
            <input type="text" name="search" placeholder="Enter Gene Name" class="form-control mb-20">
            <button type="submit" class="btn btn-sm btn-primary mb-20" name="submit">Search</button>
        </form>
    </div>
    <div class="container my-5">
        <table class="table">
            <?php
        $con = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($con,'DRTB');
        if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $sql = "SELECT * from DRTB-Database where Gene like '%$search%' ";
            $result = mysqli_query($con,$sql);
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
            </thead>
            <tbody style="font-size:13px;">';
            while($row=mysqli_fetch_assoc($result)){
            echo '<tr>
            <td>'.$row['Gene'].'</td>
            <td>'.$row['Drug'].'</td>
            <td>'.$row['Nucleotide Position'].'</td>
            <td>'.$row['Nucleotide Mutation'].'</td>
            <td>'.$row['Amino Acid Position'].'</td>
            <td>'.$row['Amino Acid Mutation'].'</td>
            <td>'.$row['Sample Location'].'</td>
            <td>'.$row['Reference'].'</td>
            </tr>';
            }
            echo '</tbody>';
            }else{
                echo '<h5 style="text-align: center;margin-top: 40px;margin-bottom: 40px;color: red;">No entries found</h5>';
            }
                
            }
        ?>
        </table>
    </div>
    <div class="hr-brown mt-40 mb-40"></div>
    <div class="text-center mb-40">
        <p class="fs-15">
            Department of Biotechnology <br>
            PSG College of Technology
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

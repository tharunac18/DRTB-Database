<!DOCTYPE html>
<html>
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
    <div class="container mt-40 mb-40 rounded-15 p-20 bg-light-grey">
        <div class="text-center">
            <p class="fs-20">Download the database data from the below link</p>
            <a href="https://github.com/tharunac18/DRTB-Database/blob/main/DRTB.csv" class="btn btn-lg btn-outline-primary mt-20">Download</a>
        </div>
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

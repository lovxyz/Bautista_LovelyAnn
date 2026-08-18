<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely Ann's Student Hub</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        .info {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .label {
            font-weight: bold;
        }

        .nav {
            text-align: center;
            margin-top: 25px;
        }

        .nav a {
            margin: 0 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Lovely Ann's Student Hub</h1>

    <div class="info">
        <span class="label">Student ID:</span>
        <?= $student['student_id']; ?>
    </div>

    <div class="info">
        <span class="label">Student Name:</span>
        <?= $student['name']; ?>
    </div>

    <div class="info">
        <span class="label">Course:</span>
        <?= $student['course']; ?>
    </div>

    <div class="info">
        <span class="label">Year Level:</span>
        <?= $student['year']; ?>
    </div>

    <div class="info">
        <span class="label">Section:</span>
        <?= $student['section']; ?>
    </div>

    <div class="info">
        <span class="label">Email:</span>
        <?= $student['email']; ?>
    </div>

</div>

</body>
</html>
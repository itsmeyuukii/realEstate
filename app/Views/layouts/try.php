<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .header .logo {
            color: #fff;
            text-decoration: none;
        }

        .header .nav-links {
            list-style-type: none;
            margin-left: 20px;
        }

        .header .nav-links li {
            display: inline;
            margin-right: 10px;
        }

        .header .nav-links li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 60px; /* Height of the header */
            height: calc(100% - 60px);
            width: 200px;
            background-color: #555;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar .links {
            list-style-type: none;
            margin-top: 20px;
        }

        .sidebar .links li a {
            display: block;
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }

        .content {
            margin-left: 200px; /* Width of the sidebar */
            padding: 20px;
        }

        .content .main {
            background-color: #ddd;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="#" class="logo">Logo</a>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

<?= $this->renderSection("content"); ?>




</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Party Planner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav>
                <h1 class="logo">Party Planner</h1>
            <ul class="nav-links">
                <li id="home" class="nav-link">
                    <a href='index.php'>Home</a>
                </li>
                <li id="Back" class="nav-link">
                    <a href='eventPage.php'>Back</a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <section class="table-container">
        <table id = "detailsTable">
                <tr id="title">
                    <th>Title</th>
                    <td>Test 1</td>
                </tr>
                <tr id="date">
                    <th>Date</th>
                    <td>17/09/2022</td>
                </tr id="location">
                <tr>
                    <th>Location</th>
                    <td>My House</td>
                </tr>
                <tr id="Thumbnail">
                    <th>Thumbnail</th>
                    <td>url</td>
                </tr>
        </table>
    </section>

    <section class="buttonContainer">
        <button class="buttons">Cancel Party</button>
        <button class="buttons">Save</button>
    </section>

    <script src="navSlide.js"></script>
    <script src="addDetails.js"></script>
</body>
</html>
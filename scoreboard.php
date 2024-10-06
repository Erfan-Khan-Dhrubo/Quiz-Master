<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Scoreboard</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css for home/navbar.css" />
    <link rel="stylesheet" type="text/css" href="css for home/body.css" />

    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 75%;
        }

        td {
            padding: 10px;
            border-bottom: 2px solid black;

        }

        th {
            padding: 10px;
            border-bottom: 2px solid black;
        }

        .oddRow {
            background-color: #fbf7fc;
        }
    </style>

    <?php include 'common style.php' ?>
</head>

<body>

    <?php include 'navbar.php' ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <div class="container text-center">


                    <h1 style="margin-top: 20px; margin-bottom:40px; font-family: Georgia; color: #82368c">TOP 10 Scoreboard</h1>
                    <table>

                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Name</th>
                            <th scope="col">Score</th>

                        </tr>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "my_project");

                        $sql = "SELECT * FROM scoreboard ORDER BY score DESC LIMIT 10";
                        $result = mysqli_query($conn, $sql);

                        $rank = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($rank % 2 == 0) {
                                    echo '<tr class="evenRow">';
                                    echo "<td>" . $rank . "</td>";
                                    echo "<td>" . strtoupper($row['name']) . "</td>";
                                    echo "<td>" . $row['score'] . "</td>";
                                    echo "</tr>";
                                    $rank++;
                                } else {
                                    echo '<tr class="oddRow">';
                                    echo "<td>" . $rank . "</td>";
                                    echo "<td>" . strtoupper($row['name']) . "</td>";
                                    echo "<td>" . $row['score'] . "</td>";
                                    echo "</tr>";
                                    $rank++;
                                }
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>




                    </table>



                </div>
            </div>
            <div class="col">
                <div id="cartoon" class="container text-center">
                    <img style="height: 500px;" src="images/cartoon.png" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
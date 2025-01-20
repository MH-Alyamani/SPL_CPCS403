<?php
include('../Includes/session_manager.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Cup of Saudi Arabia - Matches</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div>
        <?php
        include "../Includes/Header.php";
        ?>
    </div>
    <h1 style="margin-left: 30%;">King Cup of Saudi Arabia - Match Results</h1>

    <table class="king-cup-table">
        <thead>
            <tr>
                <th rowspan="2">Date</th>
                <th rowspan="2">Match</th>
                <th colspan="2">Score</th>
                <th rowspan="2">Location</th>
            </tr>
            <tr>
                <th>Home</th>
                <th>Away</th>
            </tr>
        </thead>
        <tbody>
            <!-- Round of 16 -->
            <tr>
                <td rowspan="8">"Round of 16" 20 to 22 December 2022</td>
                <td>Damac vs Al-Wehda</td>
                <td>0</td>
                <td>1</td>
                <td>Abha</td>
            </tr>
            <tr>
                
                <td>Al-Fayha vs Al-Khaleej</td>
                <td>3</td>
                <td>1</td>
                <td>Al Majma'ah</td>
            </tr>
            <tr>
                <td>Abha vs Al-Taawoun</td>
                <td>4</td>
                <td>3 (a.e.t.)</td>
                <td>Abha</td>
            </tr>
            <tr>
                <td>Al-Hilal vs Al-Ettifaq</td>
                <td>4</td>
                <td>0</td>
                <td>Riyadh</td>
            </tr>
            <tr>
                <td>Al-Nassr vs Al-Adalah</td>
                <td>2</td>
                <td>0</td>
                <td>Riyadh</td>
            </tr>
            <tr>
                <td>Al-Batin vs Al-Raed</td>
                <td>1</td>
                <td>0</td>
                <td>Hafar al-Batin</td>
            </tr>
            <tr>
                <td>Al-Fateh vs Al-Tai</td>
                <td>2</td>
                <td>2 (a.e.t.)<br>7–6 p</td>
                <td>Al-Hasa</td>
            </tr>
            <tr>
                <td>Al-Ittihad vs Al-Shabab</td>
                <td>1</td>
                <td>1 (a.e.t.)<br>4–3 p</td>
                <td>Jeddah</td>
            </tr>

            <!-- Quarter-finals -->
            <tr>
                <td rowspan="4">"Quarter-finals" 13 to 14 March 2023</td>
                <td>Al-Fayha vs Al-Ittihad</td>
                <td>1</td>
                <td>1 (a.e.t.)<br>3–4 p</td>
                <td>Al Majma'ah</td>
            </tr>
            <tr>
                <td>Al-Wehda vs Al-Batin</td>
                <td>2</td>
                <td>1</td>
                <td>Mecca</td>
            </tr>
            <tr>
                <td>Al-Nassr vs Abha</td>
                <td>3</td>
                <td>1</td>
                <td>Riyadh</td>
            </tr>
            <tr>
                <td>Al-Hilal vs Al-Fateh</td>
                <td>3</td>
                <td>1</td>
                <td>Riyadh</td>
            </tr>

            <!-- Semi-finals -->
            <tr>
                <td rowspan="2">"Semi-finals" 23 to 24 April 2023</td>
                <td>Al-Ittihad vs Al-Hilal</td>
                <td>0</td>
                <td>1 (a.e.t.)</td>
                <td>Jeddah</td>
            </tr>
            <tr>
                <td>Al-Nassr vs Al-Wehda</td>
                <td>0</td>
                <td>1</td>
                <td>Riyadh</td>
            </tr>
            <tr>
            <td>"Final" 12 April 2023</td>
            <td>Al-Hilal vs Al-Wehda</td>
            <td>1</td>
            <td>0</td>
            <td>Jeddah</td>
            </tr>
        </tbody>
    </table>
    <?php
    include "../Includes/Footer.php";
    ?>
</body>

</html>

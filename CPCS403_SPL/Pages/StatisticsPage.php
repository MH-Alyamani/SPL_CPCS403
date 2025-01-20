<?php
include('../Includes/session_manager.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Saudi Professional League Statistics">
    <title>Saudi Professional League - Statistics</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div>
        <?php
        include "../Includes/Header.php";
        ?>
    </div>

    <!-- League Statistics Section -->
    <section style="background-color: rgb(250, 249, 249); padding-bottom: 70px;">
        <h2>League Statistics (2022/2023)</h2>
        <blockquote cite="https://www.footballdatabase.eu/en/competition/overall/16910-roshn_saudi_league/2022-2023"><p style="font-size: 18px;">Here, you can explore detailed statistics from the 2022/2023 season, including the
            top goal scorers, assists, clean sheets, and other vital stats that shaped the league's competition.</p></blockquote>
        <div class="statistics-grid">
            <div class="stat-section">
                <h3>League Statistics</h3>
                <table style="width: 20%;">
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                    </tr>
                    <tr>
                        <td>Game Played</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td>Goals Scored</td>
                        <td>648 (2.7 goals per match )</td>
                    </tr>
                    <tr>
                        <td>Yellow cards</td>
                        <td>886</td>
                    </tr>
                    <tr>
                        <td>Red cards</td>
                        <td>40</td>
                    </tr>
                </table>
            </div>

            <!-- Top Scorers Section -->
            <div class="stat-section">
                <h3>Top 3 Scorers</h3>
                <table style="width: 50%" ;>
                    <tr>
                        <th>Player</th>
                        <th>Team</th>
                        <th>Goals</th>
                        <th>Matches Played</th>
                    </tr>
                    <tr>
                        <td>Abderrazak Hamdallah</td>
                        <td>Al Ittihad</td>
                        <td>21</td>
                        <td>26</td>
                    </tr>
                    <tr>
                        <td>Anderson Talisca</td>
                        <td>Al Nassr</td>
                        <td>20</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>Odion Ighalo</td>
                        <td>Al Hilal</td>
                        <td>19</td>
                        <td>27</td>
                    </tr>
                </table>
            </div>

            <!-- Assists Section -->
            <div class="stat-section">
                <h3>Top 3 Assists</h3>
                <table style="width: 50%" ;>
                    <tr>
                        <th>Player</th>
                        <th>Team</th>
                        <th>Assists</th>
                        <th>Matches Played</th>
                    </tr>
                    <tr>
                        <td>A. Romero Gamarra</td>
                        <td>Al Taawoun</td>
                        <td>15</td>
                        <td>26</td>
                    </tr>
                    <tr>
                        <td>Igor Coronado</td>
                        <td>Al Ittihad</td>
                        <td>13</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>Knowledge Musona</td>
                        <td>Al Tai</td>
                        <td>9</td>
                        <td>29</td>
                    </tr>
                </table>
            </div>

            <!-- Clean Sheets Section -->
            <div class="stat-section">
                <h3>Top 3 Clean Sheets</h3>
                <table style="width: 50%" ;>
                    <tr>
                        <th>Goalkeeper</th>
                        <th>Team</th>
                        <th>Clean Sheets</th>
                        <th>Matches Played</th>
                    </tr>
                    <tr>
                        <td>Marcelo Grohe</td>
                        <td>Al Ittihad</td>
                        <td>18</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Abdullah Al Muaiouf</td>
                        <td>Al Hilal</td>
                        <td>12</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>Seung-kyu Kim</td>
                        <td>Al Shabab</td>
                        <td>11</td>
                        <td>30</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <div>
        <?php
        include "../Includes/Footer.php";
        ?>
    </div>
</body>

</html>

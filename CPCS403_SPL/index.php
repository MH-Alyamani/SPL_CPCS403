<?php
include('./Includes/session_manager.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- head Section -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Saudi Professional Football League">
    <title>Saudi Professional League</title>
    <link href="./global/styles.css" rel="stylesheet" type="text/css" />
    <link href="./global/print.css" rel="stylesheet" type="text/css" />
</head>

<!-- The body -->
<body>
    <!-- Header include -->
    <div>
        <?php
        include "./Includes/IndexHeader.php";
        ?>
    </div>

    <!-- Paragraph Section -->
    <section style="background-color: rgb(250, 249, 249);">
        <h2>About the Saudi Professional League</h2>
        <p style="font-size: 18px;">The Saudi Professional League <a href="https://www.spl.com.sa/en">(SPL)</a>, also
            known as <i>Roshn Saudi League</i>, is the premier division of professional football in Saudi Arabia.
            Established in 1976, it has grown to become one of the most competitive and exciting leagues in the region,
            showcasing some of the best teams and talents in Middle Eastern football. Notable clubs such as <b>Al
                Hilal</b>, <b>Al
                Nassr</b>, <b>Al Ittihad</b>, and <b>Al Ahli</b> have a rich history and a passionate fan base,
            contributing to the league's
            vibrant
            atmosphere. Over the years, the SPL has gained significant international attention, particularly in recent
            seasons, due to high-profile player signings and substantial investments in clubs. This influx of talent has
            not only elevated the quality of play but has also sparked greater global interest in Saudi football, paving
            the way for increased viewership and sponsorship opportunities. As the league continues to evolve, it plays
            a vital role in promoting sports culture in Saudi Arabia and aligns with the country's broader vision for
            sports development.
            Our website aims to provide in-depth statistics and insights about the clubs
            participating in the 2022/2023 season, offering fans a comprehensive view of their favorite teams and
            players.</p>
    </section>

    <!-- League Table Section -->
    <div class="container" style="background-color: rgb(250, 249, 249);">
        <div class="left-section">
            <div id="printable">
                <table>
                    <caption> Saudi Professional League Table </caption>
                    <tr>
                        <th>Position</th>
                        <th>Team</th>
                        <th>Played</th>
                        <th>Points</th>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(10, 176, 71);">1</td>
                        <td>Al Ittihad</td>
                        <td>30</td>
                        <td>72</td>
                    </tr>
                    <tr>
                        <td style="background-color:  rgb(10, 176, 71);">2</td>
                        <td>Al Nassr</td>
                        <td>30</td>
                        <td>67</td>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(10, 176, 71);">3</td>
                        <td>Al Hilal</td>
                        <td>30</td>
                        <td>59</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Al Shabab</td>
                        <td>30</td>
                        <td>56</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Al Taawoun</td>
                        <td>30</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Al Fateh</td>
                        <td>30</td>
                        <td>43</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Al Ettifaq</td>
                        <td>30</td>
                        <td>37</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Damac</td>
                        <td>30</td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Al Raed</td>
                        <td>30</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Al Tai</td>
                        <td>30</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Al Fayha</td>
                        <td>30</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Abha</td>
                        <td>30</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Al Wehda</td>
                        <td>30</td>
                        <td>32</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Al Khaleej</td>
                        <td>30</td>
                        <td>31</td>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(210, 8, 8);">15</td>
                        <td>Al Adalah</td>
                        <td>30</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(210, 8, 8);">16</td>
                        <td>Al Batin</td>
                        <td>30</td>
                        <td>20</td>
                    </tr>
                </table>
            </div>

            <!-- Legend for Table -->
            <div class="legend">
                <p><span style="background-color: rgb(10, 176, 71); color: white; padding: 10px;"></span>: AFC Champions
                    League Elite</p>
                <p><span style="background-color: rgb(210, 8, 8); color: white; padding: 10px;"></span>: Relegation</p>
            </div>
            <button id="print-button" onclick="window.print()">Print Table</button>
        </div>

        <!-- Champions Section -->
        <div class="right-section">
            <h2 style="text-align: center; margin-bottom: 40px; font-size: 50px; font-weight: bolder;">The Champions
            </h2>
            <!-- Picture With Figure Section -->
            <div class="champions">
                <figure>
                    <img src="./Images/champions.jpeg" alt="Al Ittihad champions" width="100" height="100">
                    <figcaption>Al Ittihad - 2022/2023 Champions</figcaption>
                </figure>
                <figure>
                    <img src="./Images/champions3.jpg" alt="Al Ittihad champions" width="100" height="100">
                    <figcaption>Al Ittihad - 2022/2023 Champions</figcaption>
                </figure>
            </div>

            <!-- Paragraph of Champions Section -->
            <section class="champions-story" style="background-color:  rgb(250, 249, 249);">
                <h3>Story of Champions:</h3>
                <p><b>Al Ittihad’s</b> journey to the 2022/2023 <i> Saudi Professional League championship </i> was one
                    of persistence
                    and strength. The road to victory was filled with challenges, none more difficult than the crucial
                    matches that could have shifted the course of the season.</p>

                <p>One of the defining moments came in their intense encounter with <b> Al Shabab </b>. Knowing that any
                    mistake
                    could derail their title hopes, <b> Al Ittihad </b> fought hard in a nerve-wracking match. <b> Al
                        Shabab </b> proved
                    to be tough opponents, but <b>Al Ittihad</b> managed to secure a critical 2-1 victory in last
                    minute. This win not only
                    demonstrated their resilience but also gave them the confidence to push forward during the final
                    stretch of the season.</p>

                <p>The season's ultimate test, however, came in their showdown with <b> Al Nassr </b>, their closest
                    competitor
                    for the title. With both teams vying for the top spot, the stakes could not have been higher. <b> Al
                        Ittihad </b> held firm under pressure, and despite the attacking strength of Al Nassr, they
                    managed to
                    hold them off, securing a draw that solidified their place at the top of the table. This result was
                    enough to ensure their league triumph, marking a crowning moment for the club.</p>

                <p>Through teamwork, solid defense, and unyielding determination, <b> Al Ittihad </b> overcame every
                    hurdle to
                    lift the trophy. Their triumph in the 2022/2023 season will go down as one of the most memorable in
                    the club’s history.</p>
            </section>
        </div>
    </div>

    <!-- Footer include -->
    <div>
        <?php
        include "./Includes/Footer.php";
        ?>
    </div>

</body>

</html>

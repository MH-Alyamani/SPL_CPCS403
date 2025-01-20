<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
    <script src="../javaScript/validation.js"></script>
</head>

<body>
    <div>
        <?php
        include "../Includes/Header.php";
        ?>
    </div>

    <form action="../Includes/process_form.php" method="post" onsubmit="return validateForm()">
        <h2>SignUp</h2>

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Username -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!-- Gender -->
        <!-- Radio Inputs -->
        <p>Gender:</p>
        <div class="gender-container">
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="male" style="margin-right: 50px;">Male</label>
            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="female">Female</label>
        </div>


        <!-- Clubs Interests -->
        <p>Interest Teams:</p>
        <div class="checkbox-container">
            <input type="checkbox" id="Al-Adalah" name="interests[]" value="Al-Adalah">
            <label for="Al-Adalah">Al Adalah</label>

            <input type="checkbox" id="Al-Ahli" name="interests[]" value="Al-Ahli">
            <label for="Al-Ahli">Al Ahli</label>

            <input type="checkbox" id="Al-Batin" name="interests[]" value="Al-Batin">
            <label for="Al-Batin">Al Batin</label>

            <input type="checkbox" id="Al-Damac" name="interests[]" value="Al-Damac">
            <label for="Al-Damac">Damac</label>

            <input type="checkbox" id="Al-Ettifaq" name="interests[]" value="Al-Ettifaq">
            <label for="Al-Ettifaq">Al Ettifaq</label>

            <input type="checkbox" id="Al-Fateh" name="interests[]" value="Al-Fateh">
            <label for="Al-Fateh">Al Fateh</label>

            <input type="checkbox" id="Al-Fayha" name="interests[]" value="Al-Fayha">
            <label for="Al-Fayha">Al Fayha</label>

            <input type="checkbox" id="Al-Hilal" name="interests[]" value="Al-Hilal">
            <label for="Al-Hilal">Al Hilal</label>

            <input type="checkbox" id="Al-Ittihad" name="interests[]" value="Al-Ittihad">
            <label for="Al-Ittihad">Al Ittihad</label>

            <input type="checkbox" id="Al-Khaleej" name="interests[]" value="Al-Khaleej">
            <label for="Al-Khaleej">Al Khaleej</label>

            <input type="checkbox" id="Al-Nassr" name="interests[]" value="Al-Nassr">
            <label for="Al-Nassr">Al Nassr</label>

            <input type="checkbox" id="Al-Raed" name="interests[]" value="Al-Raed">
            <label for="Al-Raed">Al Raed</label>

            <input type="checkbox" id="Al-Shabab" name="interests[]" value="Al-Shabab">
            <label for="Al-Shabab">Al Shabab</label>

            <input type="checkbox" id="Al-Taawoun" name="interests[]" value="Al-Taawoun">
            <label for="Al-Taawoun">Al Taawoun</label>

            <input type="checkbox" id="Al-Tai" name="interests[]" value="Al-Tai">
            <label for="Al-Tai">Al Tai</label>

            <input type="checkbox" id="Al-Wehda" name="interests[]" value="Al-Wehda">
            <label for="Al-Wehda">Al Wehda</label>

            <input type="checkbox" id="Abha" name="interests[]" value="Abha">
            <label for="Abha">Abha</label>
        </div>

        <!-- Favourite Club Dropdown -->
        <label for="Club">Favourite Club:</label>
        <select id="Club" name="Club" required>
            <option value="">Select Club</option>
            <option value="Abha">Abha</option>
            <option value="Al Ahli">Al Ahli</option>
            <option value="Al Adalah">Al Adalah</option>
            <option value="Al Batin">Al Batin</option>
            <option value="Al Ettifaq">Al Ettifaq</option>
            <option value="Al Fayha">Al Fayha</option>
            <option value="Al Fateh">Al Fateh</option>
            <option value="Al Hilal">Al Hilal</option>
            <option value="Al Ittihad">Al Ittihad</option>
            <option value="Al Khaleej">Al Khaleej</option>
            <option value="Al Nassr">Al Nassr</option>
            <option value="Al Raed">Al Raed</option>
            <option value="Al Shabab">Al Shabab</option>
            <option value="Al Tai">Al Tai</option>
            <option value="Al Taawoun">Al Taawoun</option>
            <option value="Al Wehda">Al Wehda</option>
            <option value="Damac">Damac</option>
        </select><br><br>

        <!-- Textarea -->
        <label for="passion">Why are you passionate about football? (Optional)</label><br>
        <textarea id="passion" name="passion" rows="4" cols="50"
            placeholder="Share your thoughts here"></textarea><br><br>

        <!-- Submit Button -->
        <button type="Submit">Sign Up</button>
    </form>

    <div>
        <?php
        include "../Includes/Footer.php";
        ?>
    </div>

</body>

</html>
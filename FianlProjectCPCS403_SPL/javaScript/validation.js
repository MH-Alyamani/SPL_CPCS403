function validateForm() {
    // Name validation
    var name = document.getElementById("name").value;
    if (name == "") {
        alert("Name is required.");
        return false;
    }

    // Email validation
    var email = document.getElementById("email").value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email == "") {
        alert("Email is required.");
        return false;
    } else if (!email.match(emailPattern)) {
        alert("Please enter a valid email.");
        return false;
    }

    // Username validation
    var username = document.getElementById("username").value;
    if (username == "") {
        alert("Username is required.");
        return false;
    }

    // Password validation
    var password = document.getElementById("password").value;
    if (password == "") {
        alert("Password is required.");
        return false;
    }

    // Gender validation
    var gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        alert("Please select your gender.");
        return false;
    }

    // Club Interest validation (at least one checkbox must be selected)
    var interests = document.querySelectorAll('input[name="interests[]"]:checked');
    if (interests.length === 0) {
        alert("Please select at least one club interest.");
        return false;
    }

    // Favorite Club validation
    var club = document.getElementById("Club").value;
    if (club == "") {
        alert("Please select your favorite club.");
        return false;
    }

    // Passion text area validation (optional but if filled in, must not be too long)
    var passion = document.getElementById("passion").value;
    if (passion.length > 500) {
        alert("Passion description cannot be more than 500 characters.");
        return false;
    }

    // If all validations pass, submit the form
    return true;
}

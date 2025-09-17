document.getElementById('apply').addEventListener('click', function() {
    const password_1 = document.getElementById('password_1').value;
    const password_2 = document.getElementById('password_2').value;
    if (password_1.length < 8)
    {
        alert("Password 1 too short");
    }
    else if(password_2.length < 8)
    {
        alert("Password 2 too short");
    }
    else if(password_1 == password_2)
    {
        alert("Passwords are equal.");
    }
    else
    {
        alert("Passwords do not match.");
    }
});
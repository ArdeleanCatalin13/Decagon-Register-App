<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editprofile.css">
    <title>Edit Profile</title>
</head>
<body>
    <div class="profile-container">
        <h1>Edit Profile</h1>
        <form class="profile-info" action="includes/userupdate.inc.php" method="post">
            <label for="name">Name:</label>
            <div class="input-container">
                <input type="text" name="username" id="name" value="John Doe">
            </div>
            <label for="email">Email:</label>
            <div class="input-container">
                <input type="email" name="email" id="email" value="johndoe@example.com">
            </div>
            <label for="pwd">Password:</label>
            <div class="input-container">
                <input type="text" name="pwd" id="pwd" value="(239) 816-9029">
            </div>
            <label for="adress">Address:</label>
            <div class="input-container">
                <input type="text" id="adress" value="Bay Area, San Francisco, CA">
            </div>
            <button id="save-button">Save changes</button>
        </form>
    </div>
</body>
</html>

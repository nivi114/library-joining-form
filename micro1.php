<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library Joining Form</title>
  <link rel="stylesheet" href="micro2.css">
</head>
<body>
  <div class="form-container">
    <h2>Library Membership Form</h2>
    <form action="submit.php" method="post">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" required>

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>

      <label for="resone">Resone to join library</label>
      <input type="text" id="resone" name="resone" required>

      <label for="address">Address</label>
      <textarea id="address" name="address" rows="3" required></textarea>

      <label for="gender">Gender</label>
      <select id="gender" name="gender" required>
        <option value="">-- Select Gender --</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>

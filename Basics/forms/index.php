<!-- Forms with PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Form Example</title>

  <style>
    form {
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    form input {
      margin-left: 8px;
      max-width: 200px;
      height: 28px;
    }
    form h4 {
      margin-left: 20px;
    }

    form button {
      height: 40px;
      width: 80px;
      margin-left: 20px;
      border: none;
      border-radius: 12px;
      background-color: green;
      color: white;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <form action="formHandle.php" method="GET">
    <h4>Name:  </h4> <input type="text" name="name">
    <h4>Email: </h4> <input type="email" name="email">
    <button type="submit">SEND</button>
  </form>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Bright Framework</title>

    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
      <h1>
          <?php echo htmlspecialchars($name); ?>
      </h1>
      <p>
          by <?php echo htmlspecialchars($author); ?>
      </p>
</body>
</html>
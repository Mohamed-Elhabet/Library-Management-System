<?php require_once('config.php'); ?>
<?php $page_title = 'Update Book'; ?>
<?php $page_heading = 'Book Update'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
        body {
    margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: wheat;
}
 .topnav {
  overflow: hidden;
  background-color: #333;
}


                #aa {
                  padding: 6px 10px; margin-top: 0px;margin-right: 16px;
                    background-color: #555;color: white;font-size: 17px;border: none;cursor: pointer;
                  }

                #aa:hover {
                  background-color: green;
                }
      

    </style>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>

</head>

<body>
    <div class="topnav">
        <h1 style="color:white">Simple Library Management System</h1>
    </div>
    <h1> <?php echo $page_heading; ?> </h1>
    <p> <a href="index.php">Go back to the homepage</a> </p>

    <?php if(isset($_GET['id'])): ?>
    <?php $ISBN=$_GET['id']; ?>
    
    <div style="background:#eee;padding:10px;">
        <p>You are updating the book has id #<?php echo $ISBN; ?></p>
    </div>

    <br>
    <hr>
    <hr>
    <br>

    <?php $connection = new PDO($dsn, $dbuser, $dbuserpassword, $options); ?>

    <?php $sql = "SELECT * FROM book_info WHERE ISBN=:ISBN"; ?>
    <?php $statement =  $connection->prepare($sql); ?>
    <?php $statement->bindValue(":ISBN", $ISBN); ?>
    <?php $statement-> execute();   ?>
    <?php $idea =  $statement-> fetch(PDO::FETCH_ASSOC);   ?>

    <?php if (isset($_POST['submit'])): ?>

<?php if(isset($_POST['TITLE'])): ?>
<?php $idea_title = $_POST['TITLE']; ?>
<?php endif; ?>
<?php if(isset($_POST['AUTHOR'])): ?>
<?php $idea_text = $_POST['AUTHOR']; ?>
<?php endif; ?>
<?php if(isset($_POST['EDITION'])): ?>
<?php $idea_ed = $_POST['EDITION']; ?>
<?php endif; ?>
<?php if(isset($_POST['Date'])): ?>
<?php $idea_d = $_POST['Date']; ?>
<?php endif; ?>
<?php $idea = array('ISBN'=> $_POST['ISBN'],
        'TITLE' => $_POST['TITLE'],
        'AUTHOR' => $_POST['AUTHOR'],
        'EDITION' => $_POST['EDITION'],
        'Date' => $_POST['Date']);
  ?> 


    <?php $connection = new PDO($dsn, $dbuser, $dbuserpassword, $options); ?>

    <?php $sql = "UPDATE book_info SET TITLE=:TITLE,AUTHOR=:AUTHOR , EDITION=:EDITION , Date=:Date WHERE ISBN=:ISBN"; ?>

    <?php $statement =  $connection->prepare($sql); ?>
    <?php $statement-> execute($idea);   ?>

    <div style="background:green;color:white;padding:10px;">
        <p>Your have updated your Book succesfully</p>
    </div>
    <br>
    <?php endif; ?>
    <?php endif; ?>

    <form action="" method="POST">
        <?php foreach($idea as $key=>$value): ?>
        <?php if ($key =='text'): ?>
        <textarea name="<?php echo $key; ?>" rows="8" cols="80"><?php echo $value; ?>
    </textarea>

    <textarea name="<?php echo $key; ?>" rows="8" cols="80"><?php echo $value; ?>
    </textarea>
    <textarea name="<?php echo $key; ?>" rows="8" cols="80"><?php echo $value; ?>
    </textarea>
    <textarea name="<?php echo $key; ?>" rows="8" cols="80"><?php echo $value; ?>
    </textarea>
    <textarea name="<?php echo $key; ?>" rows="8" cols="80"><?php echo $value; ?>
    </textarea>

        <?php else: ?>
        <input type="text" name="<?php echo $key; ?>" value="<?php echo $value; ?>" id="<?php echo $key; ?>"
            <?php if ($key =='id'){echo 'readonly';} ?>>
        <?php endif; ?>
        <br><br>

        <?php endforeach; ?>
        <input id="aa" type="submit" name="submit" value="Save your update ">
    </form> 

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Zsolt Szilagyi">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Character counter for SEO</title>
</head>

<body>

  <header>
    <h3>Counter tools for SEO</h3>
  </header>


  <div class="characterCounter">
    <h4>Character counter</h4>


 


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

    <br><br>
   <textarea name="comment" rows="5" cols="40"><?php echo $characters;?></textarea>
   <br><br>

    <input type="submit" name="characters" value="characters">  

    </form>

    <?php

    $characters = array(
      "Lorem ipsum dolor sit ame, consectetur adipiscing elit. Curabitur faucibus, tellus condimentum posuere venenatis, risus quam sodales sem, vitae molestie quam urna nec tortor. Vivamus dapibus gravida urna, eu ipsum cursus ut. Duis purus augue, porta eget erat non, feugiat elementum odio. Fusce et suscipit nibh. Pellentesque pellentesque congue sapieut porta. Ut rhoncus risuon tellus molestie finibus. Morbi dictum tincidunt lectus nec aliquam. Suspendisse potenti. Curabitur ac justo sapien. Vivamus vitae rhoncus mauris, nec imperdiet nibh.
      Ut eu odio non metus dictum maximus. Donec gravida dapibus purus eu dictum. Proin lobortis lobortis nisi eget facilisis. Donec sed ultricies purus. Mauris non",
    );

    foreach ($characters as $character) {

      $noWitheSpace = str_replace(" ", "", $character);

      $count = strlen($noWitheSpace);

      echo ("<h4>$count characters</h4>");
      echo ("<p>$character</p>");

    }
    ?>
  </div>


  

  <div class="wordCounter">
    <h4>Word counter</h4>

    <?php

    $words = array(
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus, tellus condimentum posuere venenatis, risus quam sodales sem, vitae molestie quam urna nec tortor."

    );

    foreach ($words as $word) {

      $noWitheSpace = str_replace("word", "", $word);

      $count = str_word_count($noWitheSpace);

      echo ("<h4>$count words</h4>");
      echo ("<p>$word</p>");

    }

    ?>
  </div>



  <footer>
    <p>Powered by Zsolt Szilagyi 2023</p>
  </footer>


</body>

</html>
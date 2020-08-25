
    <?php
    include "admin.php";
    include "../include/head.php";
    include "navadmin.php";
    include_once '../include/config.php';



    ?>

<!-- Add a drink -->
<link rel="stylesheet" href="css/admin.css" />
  </head>
  <body>

<div class="box">
  <h2>Ajouter une Boisson</h2>
    <form name="adder" action='function/add_function.php' method=post enctype='multipart/form-data'>
      <ul>
        <li class=""><p><input type="text" name="nom" placeholder="nom" value=''/></p></li>
        <li class=""><p><input type="text" name="type" placeholder="type" value=''/></p></li>
        <li class=""><p><input type="text" placeholder="taux d'alcool" name="taux_alcool" value=''/></p></li>
        <li class=""><p><input type="text" name="prix" placeholder="prix" value=''/></p></li>
        <li class=""><p><input type="text" name="origine" placeholder="origine" value=''/></p></li>
        <li class=""><p><input type="text" name="note" placeholder="note" value=''/></p></li>
        <li class=""><p><textarea rows=8 name="description" cols='50' placeholder='description' value=''></textarea></p></li>
        <li class=""><p>Image : <input type="file" name="image"/></p></li>
        <li class=""><p><input type="submit" name="add" value="Add a drink"></p></li>
      </ul>
    </form>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

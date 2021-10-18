<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

  
  </style>
</head>

<body>

  <?php
  include('db.php');
  include('select_language.php');
  ?>


  <table>
    <thead>
      <tr>
        <th width="1">No.</th> 
         <th width="1">English</th>
        <th width="1">Quran</th>
      
      </tr>
      <thead>

      <tbody>

        <?php


        $sql = "SELECT Arabic.*, English.* FROM Arabic,English WHERE Arabic.index_arabic=English.index_english ORDER BY index_arabic ASC";

        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {

         

          $index_english = $row["index_english"];
          $sura_english = $row["sura_english"];
          $aya_english = $row["aya_english"];
          $text_english = $row["text_english"];

          $index_arabic = $row["index_arabic"];
          $sura_arabic = $row["sura_arabic"];
          $aya_arabic = $row["aya_arabic"];
          $text_arabic = $row["text_arabic"];
        ?>

          <tr>

            <td><?php echo $index_arabic ?></td>
            <td><?php echo $text_english ?></td>
            <td><?php echo "<div align='right'>" . $text_arabic . "</div>";?></td>
          </tr>
        <?php
        }

        ?>

      </tbody>

  </table>

</body>

</html>
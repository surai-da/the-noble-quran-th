# Quran database

this readme.md file will tell you what to do with your database.

## install sqlite

download sqlite [here](https://www.sqlite.org/download.html). installation tutorial can be found [here](https://www.youtube.com/watch?v=XA3w8tQnYCA&ab_channel=Fraser)

## Next step

1.creating a database file (.db) and create a table with 2-3 columns and insert data into the rows. the file to test if the connection is successful can be found 
  [here](https://github.com/langsari/the-noble-quran/blob/quran-database/dbConTest.php)

2.Inside the file, change the file name to your database file. run it on a browser.

```php
    //change test.db to your database file (.db) name
    $mypdo = new PDO('sqlite:test.db');
```

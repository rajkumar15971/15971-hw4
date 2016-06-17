<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript">

// Database name: mydb
// Version number: 1.0
// Text description: test DB
// Size of database: 2 * 1024 * 1024
var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);

var msg;

// To execute a query you use the database.transaction() function. 
// - This function needs a single argument, which is a function 
//   that takes care of actually executing the query
db.transaction(function (tx) {
  tx.executeSql('CREATE TABLE IF NOT EXISTS LOGS (id unique, log)');
  tx.executeSql('INSERT INTO LOGS (id, log) VALUES (1, "foobar")');
  tx.executeSql('INSERT INTO LOGS (id, log) VALUES (2, "logmsg")');
  msg = '<p>Log message created and row inserted.</p>';
  document.querySelector('#status').innerHTML =  msg;
});

db.transaction(function (tx) {
   tx.executeSql('SELECT * FROM LOGS', [], function (tx, results) {
   var len = results.rows.length, i;
   msg = "<p>Found rows: " + len + "</p>";
   document.querySelector('#status').innerHTML +=  msg;
   for (i = 0; i < len; i++){
     msg = "<p><b>" + results.rows.item(i).log + "</b></p>";
     document.querySelector('#status').innerHTML +=  msg;
   }
 }, null);
});
</script>
 </head>  
<body>
<div class="container">
<form action="action_page.php">
</br>
</br>

     <b>Color  :</b>  <input type="color" name="Color" value="#ffffff">
</br><b>Number :<input type="number" name="points"
   min="0" max="130" step="10" value=" "></br>  
  <input type="submit" name="Save" value="Save">

</form>
</div>

<p><b>Note:</b> type="color" is not supported in Internet Explorer / Edge.</p> 
      
</body>
</html>


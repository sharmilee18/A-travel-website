<body>

<h2>PACKAGES FOR TRAVELLERS</h2>


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}



table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}



</style>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
    filter = input.value.toUpperCase();

  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>








</body>




<?php
$cn=mysql_connect("127.0.0.1","root","");

mysql_select_db("tour",$cn);


$q="select * from package ";
$mq=mysql_query($q,$cn);


echo"<table>";
echo"<tr>";
echo"<th>packages</th>";
echo"<th>status</th>";

echo"</tr>";

while($row=mysql_fetch_array($mq))
{
 echo"<tr>";
 echo"<td>".$row['packages']."</td>";
 echo"<td>".$row['status']."</td>";
 
 
 
 echo"</tr>";
}
?>



<tr>
		<td colspan="6"> <a href='tourhome.html'>LOGOUT</a></td>
	</tr>

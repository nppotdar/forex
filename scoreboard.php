<?php
include 'header.php';
?>




<!-- Left Content Starts Here -->
 <div class="mainbar">
			 <p class="headings"> FOREX Scoreboard: </p>



<table width="100%" border="1" style="border-collapse:collapse" cellpadding="2px">
<tr>
        <th style='background-color: #269900;padding: 2px;'>Rank</th>
        <th style='background-color: #269900;padding: 2px;'>Username</th>
        <th style='background-color: #269900;padding: 2px;'>Dollars</th>
        
        </tr>
	<?php
include("database.php");

$result=mysql_query("SELECT * FROM user_amount ORDER BY amount DESC");
$srno=1;
while($row=mysql_fetch_assoc($result))
{

print "<tr>";
print "<td cellpadding='2' style='background-color: #C6FFB3;padding: 2px 2px 2px;margin: 0px;'>";
print  "<center>";
print  $srno;
print  "</center>";
print "</td>";
print "<td cellpadding='2' style='background-color: #C6FFB3;padding: 2px 2px 2px;margin: 0px;'>";
print  "<center>";
print  htmlentities($row['login']);
print  "</center>";
print "</td>";
print "<td cellpadding='2' align='right'  style='background-color: #C6FFB3;padding: 2px 2px 2px;margin: 0px;'>";
print " ".$row['amount'];
print "</td>";
print "</tr>";

$srno++;
}

?>
</table>



	</div> 
	
<?php
include 'footer.php'
?>	

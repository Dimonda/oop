<?php
$dblocation = "mysql96.1gb.ru";
$dbname = "gb_oop";
$dbuser = "gb_oop";
$dbpasswd = "b4b92bz6nmz";
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) 
{
  echo( "<P>� ��������� ������ ������ ���� ������ ����������, ������� 
            ���������� ����������� �������� ����������.</P>" );
  exit();
}
if (!@mysql_select_db($dbname, $dbcnx)) 
{
  echo( "<P>� ��������� ������ ���� ������ ����������, �������
            ���������� ����������� �������� ����������.</P>" );
  exit();
}
$res = mysql_query("select t,v from s;");
if($res)
{
  // ���������� ������� � ���������
  echo "<table border=1>";
  echo "<tr><td>t</td><td>v</td></tr>";
  // ��� ��� ������ ���������� ��������� �����, ��������� ����
  while($rows = mysql_fetch_array($res))
  {
    echo "<tr><td>".$rows['t']."&nbsp;</td><td>".$rows['v']."&nbsp;</td></tr>";
  }
  echo "</table>";
}
else
{
  echo "<p><b>Error: ".mysql_error()."</b><p>";
  exit();
}
?>
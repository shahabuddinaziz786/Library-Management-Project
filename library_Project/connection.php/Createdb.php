 <?php
 include('connect.php');
 $sql= "
 CREATE TABLE `requestbook` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `bookname` varchar(25) NOT NULL,
  `issuedays` varchar(25) NOT NULL
)";
$query=mysqli_query($conn,$sql);
if($query){
    echo "Table created successful";
}else{
    echo mysqli_error($conn);
}
 ?>
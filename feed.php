
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table of queries</title>
    <style type="text/css">
        *{
            padding: 0;
            margin-left: 20px;
            margin-right: 50px;
            margin-top:20px;
        }
        body {
        font-size: 120%;
        background-image: url("imccc.jpg");
        background-size: cover;
         background-position: center center;
          background-attachment: fixed;
        }
        .header{
            width: 70%;
            margin: 50px auto 0px;
            color: white;
            background: rgb(39, 32, 28);
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
            opacity: 0.8;
        }
        table
        {
            border-collapse=collapse;
            width : 100%;
            color : #black;
            font-family:monospace;
            font-size:18px;
            text-align:left;

        }
        th
        {
            background-color: coral;
            background: #white;

        }
        .chat-btn {
    position: absolute;
    right: -300px;
    bottom: 200px;
    cursor: pointer;
}
 .chat-btn .close {
    display: none;
}

.chat-btn i {
    transition: all 0.9s ease;
}

#check:checked~.chat-btn i {
    display: block;
    pointer-events: auto;
    transform: rotate(180deg);
}

#check:checked~.chat-btn .comment {
    display: none;
}

.chat-btn i {
    font-size: 22px;
    color: #fff !important;
}

.chat-btn {
    margin-bottom: 150px;
    margin-right: 700px;
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 100px;
    background-color: blue;
    color: #fff;
    font-size: 22px;
    border: none;
    background-position: center;
}
        .wrapper {
    box-sizing: border-box;
    background-color: rgb(39, 32, 28);
    position: absolute;
    right: 50px;
    bottom: 100px;
    width: 300px;
    height: 300px;
    border-radius: 5px;
    opacity: 0;
    transition: all 0.4s;
}

#check:checked~.wrapper {
    opacity: 1;
}

.header {
    padding: 13px;
    border-radius: 5px 5px 0px 0px;
    margin-bottom: 10px;
    color: #fff;
}

.chat-form {
    padding: 100px;
   
}

.chat-form input,
textarea,
button {
    margin-bottom: 50px;
    background-color: rgb(209, 206, 204);
    height: 50px;
    cursor: pointer;
    color: #fff;

}

.chat-form textarea {
    resize: none;
}

.form-control:focus,
.btn:focus {
    box-shadow: none;
}

.btn,
.btn:focus,
.btn:hover {
    background-color: rgb(76, 76, 81);
    border: rgb(76, 76, 81);
}

#check {
    display: none !important;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
<form name="view" action="server.php" method="post">
  <h1>Feedback</h1>
  <output type="text"  name="vieww"></output>
 <table>
     <tr>
         <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
          <th>feedback</th>
          <th>suggestions</th>

     </tr>
    
    </div>
    <!-- <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment"> Reply</i> <i class="fa fa-close close"></i> </label>
<div class="wrapper">
<div class="text-center p-2"> <span>Question-id</span> </div>
  	  <input type="text" name="q_id" value="<?php echo $q_id; ?>">
    <div class="text-center p-2"> <span>Reply to the query</span> </div>
    
     <textarea class="form-control"  name="answer" placeholder="Enter answer here " value="<?php echo $q_id; ?>"> </textarea>
      <input name="reply" type="submit" id="reply" value="reply" />
</div> -->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'feedback');
if($conn-> connect_error)
{
    die("connection fail:". $conn ->connect_error);
}
$sql= "SELECT * from `poll`";
$result= $conn-> query($sql);
while($row =$result->fetch_assoc())
{
    echo "<tr><td>", $row["id"],"</td>", "<td>",$row["name"],"</td>","<td>",$row["email"],"</td>" ,
    "<td>",$row["phone"],"</td>","<td>",$row["feedback"],"</td>","<td>",$row["suggestions"],"</td></tr>";
    
}
echo"</table>";
$conn-> close();

?>
 </table>
</div>
                        
    </form>
    
                  
    
</body>
</html>
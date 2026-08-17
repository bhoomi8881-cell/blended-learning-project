<!DOCTYPE html>
<html>
<head>
<title>AI Learning Assistant</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef2f7;
}

.header{
background:#0d47a1;
color:white;
padding:20px;
text-align:center;
font-size:28px;
font-weight:bold;
}

.container{
width:60%;
margin:40px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.2);
}

h2{
color:#0d47a1;
margin-bottom:20px;
}

textarea{
width:100%;
height:120px;
padding:10px;
font-size:16px;
border:1px solid #ccc;
border-radius:5px;
resize:none;
}

button{
margin-top:20px;
padding:12px 25px;
background:#0d47a1;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#1565c0;
}

.answer{
margin-top:30px;
padding:20px;
background:#f5f5f5;
border-left:5px solid #0d47a1;
}

.back{
margin-top:30px;
text-align:center;
}

.back a{
background:#0d47a1;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<div class="header">
🤖 AI Learning Assistant
</div>

<div class="container">

<h2>Ask Your Question</h2>

<form method="POST">

<textarea
name="question"
placeholder="Example: What is AI?"
required></textarea>

<br>

<button type="submit">Ask AI</button>

</form>

<?php

if(isset($_POST['question']))
{

$q=strtolower(trim($_POST['question']));

$reply="Sorry! I don't know the answer yet.";

if(strpos($q,"ai")!==false)
{
$reply="Artificial Intelligence (AI) enables computers to perform tasks that normally require human intelligence such as learning, reasoning and decision making.";
}

elseif(strpos($q,"cloud")!==false)
{
$reply="Cloud Computing provides storage, servers, software and other computing resources over the Internet.";
}

elseif(strpos($q,"python")!==false)
{
$reply="Python is an easy-to-learn programming language widely used for AI, Machine Learning, Web Development and Data Science.";
}

elseif(strpos($q,"java")!==false)
{
$reply="Java is an object-oriented programming language used to build desktop, web and enterprise applications.";
}

elseif(strpos($q,"html")!==false)
{
$reply="HTML is used to create the structure of web pages.";
}

elseif(strpos($q,"css")!==false)
{
$reply="CSS is used to design and style web pages.";
}

elseif(strpos($q,"php")!==false)
{
$reply="PHP is a server-side scripting language used to develop dynamic websites.";
}

elseif(strpos($q,"mysql")!==false)
{
$reply="MySQL is a relational database management system used to store application data.";
}

?>

<div class="answer">

<h3>Your Question</h3>

<p><?php echo htmlspecialchars($_POST['question']); ?></p>

<br>

<h3>AI Answer</h3>

<p><?php echo $reply; ?></p>

</div>

<?php
}
?>

<div class="back">

<a href="dashboard.php">← Back to Dashboard</a>

</div>

</div>

</body>
</html>
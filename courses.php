<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Courses</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f6f9;
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
width:90%;
margin:40px auto;
}

h2{
color:#0d47a1;
margin-bottom:25px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.card{
background:white;
border-radius:12px;
overflow:hidden;
box-shadow:0 4px 10px rgba(0,0,0,.15);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.card img{
width:100%;
height:180px;
object-fit:cover;
}

.card-content{
padding:20px;
}

.card-content h3{
color:#0d47a1;
margin-bottom:10px;
}

.card-content p{
color:#555;
margin-bottom:20px;
line-height:1.5;
}

.btn{
display:inline-block;
padding:10px 18px;
background:#0d47a1;
color:white;
text-decoration:none;
border-radius:5px;
}

.btn:hover{
background:#1565c0;
}

.back{
margin-top:40px;
text-align:center;
}

.back a{
text-decoration:none;
background:#0d47a1;
color:white;
padding:12px 25px;
border-radius:6px;
}

</style>

</head>

<body>

<div class="header">
AI Blended Learning Portal
</div>

<div class="container">

<h2>Available Courses</h2>

<div class="cards">

<div class="card">

<img src="image/ai.jpg">

<div class="card-content">

<h3>Artificial Intelligence</h3>

<p>Learn AI concepts, machine learning, neural networks and practical applications.</p>

<a href="#" class="btn">View Course</a>

</div>

</div>

<div class="card">

<img src="image/cloud.jpg">

<div class="card-content">

<h3>Cloud Computing</h3>

<p>Study AWS, Azure, Google Cloud, virtualization and cloud services.</p>

<a href="#" class="btn">View Course</a>

</div>

</div>

<div class="card">

<img src="image/python.jpg">

<div class="card-content">

<h3>Python Programming</h3>

<p>Master Python programming with projects, data structures and automation.</p>

<a href="#" class="btn">View Course</a>

</div>

</div>

<div class="card">

<img src="image/web.jpg">

<div class="card-content">

<h3>Web Development</h3>

<p>Learn HTML, CSS, JavaScript, PHP and MySQL to build websites.</p>

<a href="#" class="btn">View Course</a>

</div>

</div>

<div class="card">

<img src="image/java.jpg">

<div class="card-content">

<h3>Java Programming</h3>

<p>Understand Java fundamentals, OOP, JDBC, Servlets and JSP.</p>

<a href="#" class="btn">View Course</a>

</div>

</div>

<div class="card">

<img src="image/database.jpg">

<div class="card-content">

<h3>Database Management</h3>

<p>Learn SQL, MySQL, database design, normalization and queries.</p>

<a href="#" class="btn">View Course</a>

</div>

</div>

</div>

<div class="back">

<a href="dashboard.php">← Back to Dashboard</a>

</div>

</div>

</body>
</html>
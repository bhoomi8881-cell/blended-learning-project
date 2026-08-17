<?php
session_start();

if(!isset($_SESSION['faculty']))
{
    header("Location: faculty_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Faculty Dashboard</title>

<style>

body{
margin:0;
font-family:Arial;
background:#eef2f7;
}

.header{
background:#0d47a1;
color:white;
padding:20px;
text-align:center;
font-size:28px;
}

.menu{
width:80%;
margin:40px auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:20px;
}

.card{
background:white;
padding:30px;
text-align:center;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.2);
}

.card a{
text-decoration:none;
color:#0d47a1;
font-size:18px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="header">
Welcome Faculty 👨‍🏫
</div>

<div class="menu">

<div class="card">
<a href="add_course.php">➕ Add Course</a>
</div>

<div class="card">
<a href="upload_material.php">📚 Upload Materials</a>
</div>

<div class="card">
<a href="announcements.php">📢 Announcements</a>
</div>

<div class="card">
<a href="view_students.php">👨‍🎓 View Students</a>
</div>

<div class="card">

<h2>📊 Student Marks</h2>

<a href="add_marks.php">
Add Marks
</a>

</div>
<div class="card">

<h2>📝 Assignments</h2>

<a href="add_assignment.php">

Add Assignment

</a>

</div>

<div class="card">

<div class="icon">📝</div>

<h2>Assignments</h2>

<p>View & Submit Assignments</p>

<a href="assignments.php">Open</a>

</div>

<div class="card">

<h2>📄 Student Submissions</h2>

<a href="view_submissions.php">

View

</a>

</div>

<div class="card">
<a href="faculty_logout.php">🚪 Logout</a>
</div>



<div class="card">
<a href="view_feedback.php">💬 View Feedback</a>
</div>
</div>

</body>
</html>
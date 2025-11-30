<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: /admin/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="/admin/css/admin.css">
</head>

<body>

<div class="admin-topbar">
    <h1>Admin Dashboard</h1>
    <a href="/admin/logout.php" class="logout-btn">Logout</a>
</div>

<div class="admin-container">
    <h2>Welcome back, Admin 👋</h2>
    <p>Manage your workspace, projects, tasks, and more.</p>

   <div id="dashboard">

    <!-- PROJECTS SECTION -->
    <h3>Projects</h3>
    <button class="btn-add" onclick="openProjectModal()">+ Add Project</button>
    <div id="projectList"></div>

    <!-- TASKS SECTION -->
    <h3 style="margin-top:40px;">Tasks</h3>
    <button class="btn-add" onclick="openTaskModal()">+ Add Task</button>
    <div id="taskList"></div>

</div>

<!-- PROJECT MODAL -->
<div id="projectModal" class="modal">
  <div class="modal-inner">
    <h2>Add Project</h2>
    <form id="projectForm">
      <input type="text" name="title" placeholder="Project Title" required>
      <textarea name="description" placeholder="Description (optional)"></textarea>
      <button type="submit">Save Project</button>
    </form>
    <button class="modal-close" onclick="closeProjectModal()">Close</button>
  </div>
</div>

<!-- TASK MODAL -->
<div id="taskModal" class="modal">
  <div class="modal-inner">
    <h2>Add Task</h2>
    <form id="taskForm">
      <input type="text" name="task" placeholder="Task Title" required>
      <button type="submit">Save Task</button>
    </form>
    <button class="modal-close" onclick="closeTaskModal()">Close</button>
  </div>
</div>


<script src="/admin/js/admin.js"></script>

</body>
</html>

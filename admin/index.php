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
    <div class="intro">
        <div>
            <h2>Welcome back, Admin 👋</h2>
            <p>Manage your workspace, projects, tasks, and more.</p>
        </div>
        <div class="quick-links">
            <p class="muted">Quick links</p>
            <a class="pill" href="https://github.com/" target="_blank" rel="noopener">Project GitHub</a>
            <a class="pill" href="/projects">Public Projects</a>
        </div>
    </div>

    <div class="dashboard-grid">
        <section class="panel wide">
            <div class="panel-header">
                <div>
                    <p class="muted">Projects</p>
                    <h3>Active builds</h3>
                </div>
                <button class="btn-add" onclick="openProjectModal()">+ Add Project</button>
            </div>
            <div id="projectList" class="stack"></div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <p class="muted">Deployments</p>
                    <h3>Logs</h3>
                </div>
            </div>
            <div id="logList" class="stack"></div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <p class="muted">Project tasks</p>
                    <h3>Tasks</h3>
                </div>
                <button class="btn-add" onclick="openTaskModal()">+ Add Task</button>
            </div>
            <div id="taskList" class="stack"></div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <p class="muted">Team</p>
                    <h3>Users</h3>
                </div>
            </div>
            <div class="stack" id="userList"></div>
            <form id="userForm" class="inline-form">
                <input type="text" name="name" placeholder="Full name" required>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit">Add User</button>
            </form>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <p class="muted">Public pages</p>
                    <h3>Page Editor</h3>
                </div>
            </div>
            <div id="pageList" class="stack"></div>
            <form id="pageForm" class="inline-form">
                <input type="text" name="title" placeholder="Page title" required>
                <input type="text" name="slug" placeholder="Slug (e.g. /about)" required>
                <button type="submit">Add Page</button>
            </form>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <p class="muted">Assets</p>
                    <h3>Photo Editor</h3>
                </div>
            </div>
            <div class="stack">
                <p class="muted">Prepare uploads, trim hero images, and manage gallery shots.</p>
                <button class="btn-secondary" id="openPhotoEditor">Open Photo Editor</button>
            </div>
        </section>
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

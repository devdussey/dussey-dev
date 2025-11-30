// ---------------------
// Load Projects
// ---------------------
function loadProjects() {
  fetch("/admin/api/get_projects.php")
    .then(res => res.json())
    .then(projects => {
      const container = document.getElementById("projectList");

      if (projects.length === 0) {
        container.innerHTML = "<p>No projects yet.</p>";
        return;
      }

      container.innerHTML = projects.map(p => `
        <div class="project-card">
            <strong>${p.title}</strong><br>
            <small>${p.description || ""}</small>
        </div>
      `).join("");
    });
}

// ---------------------
// Load Tasks
// ---------------------
function loadTasks() {
  fetch("/admin/api/get_tasks.php")
    .then(res => res.json())
    .then(tasks => {
      const container = document.getElementById("taskList");

      if (tasks.length === 0) {
        container.innerHTML = "<p>No tasks yet.</p>";
        return;
      }

      container.innerHTML = tasks.map(t => `
        <div class="task-item">${t.task}</div>
      `).join("");
    });
}

// ---------------------
// Add Project
// ---------------------
document.getElementById("projectForm").addEventListener("submit", e => {
  e.preventDefault();

  const formData = new FormData(e.target);

  fetch("/admin/api/add_project.php", {
    method: "POST",
    body: formData
  }).then(() => {
    closeProjectModal();
    loadProjects();
  });
});

// ---------------------
// Add Task
// ---------------------
document.getElementById("taskForm").addEventListener("submit", e => {
  e.preventDefault();

  const formData = new FormData(e.target);

  fetch("/admin/api/add_task.php", {
    method: "POST",
    body: formData
  }).then(() => {
    closeTaskModal();
    loadTasks();
  });
});

// ---------------------
// Modal Controls
// ---------------------
function openProjectModal() {
  document.getElementById("projectModal").style.display = "flex";
}
function closeProjectModal() {
  document.getElementById("projectModal").style.display = "none";
}

function openTaskModal() {
  document.getElementById("taskModal").style.display = "flex";
}
function closeTaskModal() {
  document.getElementById("taskModal").style.display = "none";
}

// ---------------------
// Initial Load
// ---------------------
loadProjects();
loadTasks();

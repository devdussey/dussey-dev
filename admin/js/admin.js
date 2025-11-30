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

// ---------------------
// Deployment Logs
// ---------------------
const logs = [
  { project: "Portfolio", status: "Success", time: "2 mins ago" },
  { project: "Landing Page", status: "Queued", time: "10 mins ago" },
  { project: "API", status: "Failed", time: "25 mins ago" }
];

function renderLogs() {
  const container = document.getElementById("logList");
  container.innerHTML = logs.map(log => `
    <div class="project-card">
      <div class="log-row">
        <strong>${log.project}</strong>
        <span class="status status-${log.status.toLowerCase()}">${log.status}</span>
      </div>
      <small>${log.time}</small>
    </div>
  `).join(" ") || "<p>No logs yet.</p>";
}

// ---------------------
// Users (client side sample)
// ---------------------
const users = [
  { name: "Admin User", email: "admin@example.com" },
  { name: "Editor", email: "editor@example.com" }
];

function renderUsers() {
  const container = document.getElementById("userList");
  container.innerHTML = users.map((user, index) => `
    <div class="project-card user-row">
      <div>
        <strong>${user.name}</strong><br>
        <small>${user.email}</small>
      </div>
      <button class="btn-link" data-index="${index}">Remove</button>
    </div>
  `).join(" ") || "<p>No users yet.</p>";

  container.querySelectorAll(".btn-link").forEach(btn => {
    btn.addEventListener("click", () => {
      const idx = Number(btn.dataset.index);
      users.splice(idx, 1);
      renderUsers();
    });
  });
}

document.getElementById("userForm").addEventListener("submit", e => {
  e.preventDefault();
  const formData = new FormData(e.target);
  users.push({
    name: formData.get("name"),
    email: formData.get("email")
  });
  e.target.reset();
  renderUsers();
});

// ---------------------
// Page Editor (client side sample)
// ---------------------
const pages = [
  { title: "Home", slug: "/" },
  { title: "About", slug: "/about" },
  { title: "Services", slug: "/services" }
];

function renderPages() {
  const container = document.getElementById("pageList");
  container.innerHTML = pages.map((page, index) => `
    <div class="project-card user-row">
      <div>
        <strong>${page.title}</strong><br>
        <small>${page.slug}</small>
      </div>
      <button class="btn-link" data-index="${index}">Remove</button>
    </div>
  `).join(" ") || "<p>No pages configured.</p>";

  container.querySelectorAll(".btn-link").forEach(btn => {
    btn.addEventListener("click", () => {
      const idx = Number(btn.dataset.index);
      pages.splice(idx, 1);
      renderPages();
    });
  });
}

document.getElementById("pageForm").addEventListener("submit", e => {
  e.preventDefault();
  const formData = new FormData(e.target);
  pages.push({
    title: formData.get("title"),
    slug: formData.get("slug")
  });
  e.target.reset();
  renderPages();
});

// ---------------------
// Photo editor placeholder
// ---------------------
document.getElementById("openPhotoEditor").addEventListener("click", () => {
  alert("Photo editor coming soon! You will be able to crop, resize, and optimize assets.");
});

renderLogs();
renderUsers();
renderPages();

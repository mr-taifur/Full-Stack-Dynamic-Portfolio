<aside class="admin-sidebar">
    <div class="sidebar-header">
        <h2>Admin Panel</h2>
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li><a href="{{ route('dashboard') }}"><span class="icon">🏠</span> <span class="text">Overview</span></a></li>
            <li><a href="{{ url('/admin/users') }}"><span class="icon">👥</span> <span class="text">Users</span></a></li>
            <li><a href="{{ url('/admin/educations') }}"><span class="icon">🎓</span> <span class="text">Education</span></a></li>
            <li><a href="{{ url('/admin/skills') }}"><span class="icon">💼</span> <span class="text">Skills</span></a></li>
            <li><a href="{{ url('/admin/projects') }}"><span class="icon">📁</span> <span class="text">Projects</span></a></li>
            <li><a href="{{ url('/admin/personal-details') }}"><span class="icon">📝</span> <span class="text">Personal Details</span></a></li>
            <li><a href="{{ url('/admin/experiences') }}"><span class="icon">💡</span> <span class="text">Experience</span></a></li>
            <li><a href="{{ url('/admin/achievements') }}"><span class="icon">🏆</span> <span class="text">Achievements</span></a></li>
            <li><a href="{{ url('/admin/messages') }}"><span class="icon">✉️</span> <span class="text">Messages</span></a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button"><span class="icon">🚪</span> <span class="text">Logout</span></button>
                </form>
            </li>
        </ul>
    </nav>
</aside>

<style>
/* Sidebar container */
.admin-sidebar {
    width: 220px;
    background: #1f2937;
    color: #fff;
    height: 100vh;
    position: fixed;
    transition: width 0.3s;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

/* Sidebar header */
.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    font-size: 1.2rem;
    background: #111827;
    font-weight: bold;
}

/* Toggle button for collapse */
.toggle-btn {
    background: none;
    border: none;
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
}

/* Sidebar links */
.sidebar-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-nav ul li {
    margin: 5px 0;
}

.sidebar-nav ul li a,
.logout-button {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 8px;
    transition: background 0.2s;
}

.sidebar-nav ul li a:hover,
.logout-button:hover {
    background: #374151;
}

/* Icons */
.icon {
    margin-right: 12px;
    font-size: 1.3rem;
}

/* Collapsed sidebar */
.admin-sidebar.collapsed {
    width: 60px;
}

.admin-sidebar.collapsed .text {
    display: none;
}
</style>

<script>
function toggleSidebar() {
    document.querySelector('.admin-sidebar').classList.toggle('collapsed');
}
</script>

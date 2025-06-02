<?php
include 'header_1.php';
?>
<style>
    :root {
        /* Light Theme */
        --bg-primary: #ffffff;
        --bg-secondary: #f8f9fa;
        --text-primary: #1a1a1a;
        --text-secondary: #4a4a4a;
        --accent-primary: #4361ee;
        --accent-danger: #ff4d4f;
        --accent-success: #52c41a;
        --accent-warning: #faad14;
        --border-color: #e0e0e0;
        --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    /* Action Cards */
    .action-card {
        background: var(--bg-secondary);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: var(--card-shadow);
    }

    .action-card h2 {
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: var(--text-primary);
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-secondary);
    }

    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        background: var(--bg-primary);
        color: var(--text-primary);
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.2s, opacity 0.2s;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .btn-primary {
        background: var(--accent-primary);
        color: white;
    }

    .btn-danger {
        background: var(--accent-danger);
        color: white;
    }

    .btn-outline {
        background: transparent;
        border: 1px solid var(--accent-primary);
        color: var(--accent-primary);
    }

    /* Machine Grid */
    .machine-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .machine-card {
        background: var(--bg-secondary);
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: var(--card-shadow);
        transition: transform 0.3s;
    }

    .machine-card:hover {
        transform: translateY(-5px);
    }

    .machine-card h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        color: var(--text-primary);
    }

    .machine-card p {
        color: var(--text-secondary);
        margin-bottom: 1rem;
    }

    .status-badge {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .status-up {
        background: rgba(82, 196, 26, 0.2);
        color: var(--accent-success);
    }

    .status-down {
        background: rgba(255, 77, 79, 0.2);
        color: var(--accent-danger);
    }

    /* Table */
    .machine-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    .machine-table th,
    .machine-table td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }

    .machine-table th {
        background: var(--bg-secondary);
        font-weight: 600;
    }

    .machine-table tr:hover {
        background: rgba(67, 97, 238, 0.05);
    }

    /* Pagination */
    .pagination {
        display: flex;
        gap: 0.5rem;
        margin-top: 2rem;
    }

    .page-item {
        list-style: none;
    }

    .page-link {
        padding: 0.5rem 1rem;
        border-radius: 8px;
        background: var(--bg-secondary);
        color: var(--text-primary);
        text-decoration: none;
        transition: all 0.2s;
    }

    .page-link:hover {
        background: var(--accent-primary);
        color: white;
    }

    .page-item.active .page-link {
        background: var(--accent-primary);
        color: white;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .machine-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- Machine Overview -->
<div class="action-card">
    <h2>Location Overview</h2>
    <div class="machine-grid">
        <!-- Location Card -->
        <div class="machine-card">
            <h3>L9</h3>
            <p>200 Machines</p>
            <div>
                <span class="status-badge status-up">137 Up</span>
                <span class="status-badge status-down">63 Down</span>
            </div>
            <a href="https://adlinker.co/ml/index.php?l=9" style="margin-top: 1rem; display: inline-block; color: var(--accent-primary);">View Details →</a>
        </div>
    </div>
</div>

<!-- Machine Table -->
<div class="action-card">
    <h2>Machine Details</h2>
    <input type="text" class="form-control" placeholder="Search machines..." style="margin-bottom: 1rem;">
    <div class="table-responsive">
        <table class="machine-table">
            <thead>
                <tr>
                    <th>Machine Name</th>
                    <th>Version</th>
                    <th>Device Code</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr>
                    <td>M4001</td>
                    <td>05-04-2025-A</td>
                    <td>L9-M4001-T2</td>
                    <td><span class="status-badge status-down">Not Running</span></td>
                    <td>
                        <div style="display: flex; gap: 0.5rem;">
                            <a href="http://localhost/al/run.php?device_code=L9-M4001-T2" class="btn btn-outline" style="padding: 0.5rem;" target="_blank">
                                <i class="fas fa-play"></i> Run
                            </a>
                            <a href="https://adlinker.co/ml/remote_restart.php?write=M4001" class="btn btn-outline" style="padding: 0.5rem;" target="_blank">
                                <i class="fas fa-sync-alt"></i> Restart
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- More rows... -->
            </tbody>
        </table>
    </div>
    <ul class="pagination">
        <li class="page-item active"><a class="page-link" href="?page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="?page=2&l=9">2</a></li>
        <li class="page-item"><a class="page-link" href="?page=3&l=9">3</a></li>
        <!-- More pagination... -->
    </ul>
</div>
</body>

</html>
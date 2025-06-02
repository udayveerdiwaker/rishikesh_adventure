<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine Management Dashboard | 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #eef2ff;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --dark: #1f2937;
            --light: #f9fafb;
            --gray: #6b7280;
            --border: #e5e7eb;
        }


        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
            color: var(--dark);
            line-height: 1.6;
        }

        .dashboard-container {
            max-width: 1800px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-bottom: 2rem;
            background: white;
            overflow: hidden;
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid var(--border);
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-body {
            padding: 1.5rem;
        }

        .form-control {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .btn {
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: #3a56d4;
            border-color: #3a56d4;
        }

        .btn-outline-danger {
            color: var(--danger);
            border-color: var(--danger);
        }

        .btn-outline-danger:hover {
            background-color: var(--danger);
            color: white;
        }

        .btn-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .status-badge {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .badge-up {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .badge-down {
            background-color: #fee2e2;
            color: var(--danger);
        }

        .badge-warning {
            background-color: #fef3c7;
            color: var(--warning);
        }

        .machine-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .machine-table thead th {
            background-color: var(--primary-light);
            color: var(--primary);
            padding: 1rem 1.25rem;
            text-align: left;
            font-weight: 600;
            position: sticky;
            top: 0;
        }

        .machine-table tbody tr {
            transition: all 0.2s;
        }

        .machine-table tbody tr:hover {
            background-color: var(--primary-light);
        }

        .machine-table td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        .location-card {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            border-radius: 12px;
            background: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.2s;
        }

        .location-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .location-name {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .location-stats {
            display: flex;
            gap: 1.5rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .stat-label {
            font-size: 0.85rem;
            color: var(--gray);
        }

        .up-stat {
            color: var(--success);
        }

        .down-stat {
            color: var(--danger);
        }

        .total-stat {
            color: var(--dark);
        }

        /* Alert Banner */
        .alert-banner {
            background: var(--danger);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin: 20px;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 0.9;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.9;
            }
        }

        .quick-actions {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            background-color: white;
            border: 1px solid var(--border);
            color: var(--dark);
            font-weight: 500;
            transition: all 0.2s;
        }

        .action-btn:hover {
            background-color: var(--primary-light);
            color: var(--primary);
            border-color: var(--primary);
        }

        .action-btn i {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .location-stats {
                flex-direction: column;
                gap: 0.5rem;
            }

            .quick-actions {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-container">
        <div class="card">
            <div class="card-header">
                <h2>Machine Operations</h2>
                <div>
                    <a href="instructions.php" class="btn btn-outline-primary" target="_blank">
                        <i class="bi bi-info-circle"></i> Setup Instructions
                    </a>
                </div>
            </div>
            <!-- Alert -->
            <div class="alert-banner ">
                <i class="fas fa-exclamation-triangle"></i>
                <span>Cap Reached for Selenium Machines Today</span>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <form method="post" class="d-flex gap-2 align-items-end">
                            <div class="flex-grow-1">
                                <label for="device_code" class="form-label">Add New Machine</label>
                                <input type="text" class="form-control" id="device_code" name="device_code" placeholder="L5-M9001-T1">
                            </div>
                            <button type="submit" name="newdevice" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Add
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form method="post" class="d-flex gap-2 align-items-end">
                            <div class="flex-grow-1">
                                <label for="remove_device_code" class="form-label">Remove Machine</label>
                                <input type="text" class="form-control" id="remove_device_code" name="device_code" placeholder="L5-M9001-T1">
                            </div>
                            <button type="submit" name="olddevice" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i> Remove
                            </button>
                        </form>
                    </div>
                </div>

                <div class="quick-actions mt-4">
                    <a href="http://localhost/al/run.php?device_code=L10-M6001-T1&fasttest=1" class="action-btn" target="_blank">
                        <i class="bi bi-lightning-charge"></i> Fast Test (With Selenium)
                    </a>
                    <a href="http://localhost/al/run.php?device_code=L10-M6001-T1&fasttest=1&ft_auto=1&ntab=1" class="action-btn" target="_blank">
                        <i class="bi bi-lightning"></i> Fast Test (Without Selenium)
                    </a>
                </div>
            </div>
        </div>
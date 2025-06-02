<?php
include 'header_1.php';
?>
<div class="card">
    <div class="card-header">
        <h2>Location Overview</h2>
        <div class="total-stat">Total Machines: <strong>633</strong> | Up: <strong class="up-stat">259</strong> | Down: <strong class="down-stat">374</strong></div>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <a href="https://adlinker.co/ml/index.php?l=0" class="text-decoration-none">
                    <div class="location-card">
                        <div class="flex-grow-1">
                            <div class="location-name">L0</div>
                            <div class="location-stats">
                                <div class="stat-item">
                                    <div class="stat-value total-stat">1</div>
                                    <div class="stat-label">Total</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value up-stat">0</div>
                                    <div class="stat-label">Up</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value down-stat">1</div>
                                    <div class="stat-label">Down</div>
                                </div>
                            </div>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </div>
                </a>
            </div>

            <!-- Repeat for other locations -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <a href="https://adlinker.co/ml/index.php?l=1" class="text-decoration-none">
                    <div class="location-card">
                        <div class="flex-grow-1">
                            <div class="location-name">L1</div>
                            <div class="location-stats">
                                <div class="stat-item">
                                    <div class="stat-value total-stat">1</div>
                                    <div class="stat-label">Total</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value up-stat">0</div>
                                    <div class="stat-label">Up</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value down-stat">1</div>
                                    <div class="stat-label">Down</div>
                                </div>
                            </div>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <a href="https://adlinker.co/ml/index.php?l=2" class="text-decoration-none">
                    <div class="location-card">
                        <div class="flex-grow-1">
                            <div class="location-name">L2</div>
                            <div class="location-stats">
                                <div class="stat-item">
                                    <div class="stat-value total-stat">38</div>
                                    <div class="stat-label">Total</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value up-stat">0</div>
                                    <div class="stat-label">Up</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value down-stat">38</div>
                                    <div class="stat-label">Down</div>
                                </div>
                            </div>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </div>
                </a>
            </div>

            <!-- More location cards would go here -->

        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Machine Details</h2>
        <div class="d-flex gap-2">
            <input type="text" class="form-control form-control-sm" placeholder="Search machines..." style="max-width: 200px;">
            <button class="btn btn-sm btn-outline-primary">Filter</button>
        </div>
    </div>
    <div class="card-body p-0">
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
                    <!-- Machine rows would be dynamically inserted here -->
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Select a location to view machines</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<x-filament::page>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @push('styles')
        <link rel="stylesheet" href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css">
        <style>
            .gantt-container {
                height: calc(100vh - 12rem);
                width: 100%;
                border-radius: 0.75rem;
                overflow: hidden;
                box-shadow: var(--shadow-lg);
                background: rgb(var(--background-color));
                transition: background-color 0.2s, border-color 0.2s;
                display: flex;
                flex-direction: column;
            }

            #gantt_here {
                width: 100%;
                height: calc(100% - 50px);
                flex: 1;
                overflow: auto;
            }

            .zoom-bar {
                background-color: rgb(var(--background-color));
                padding: 10px;
                border-bottom: 1px solid rgb(var(--border-color));
                transition: background-color 0.2s, border-color 0.2s;
            }

            .zoom-bar .btn {
                background-color: rgb(var(--task-bg-color));
                color: rgb(var(--text-color));
                border: 1px solid rgb(var(--border-color));
                padding: 6px 12px;
                margin: 0 4px;
                border-radius: 0.5rem;
                font-size: 0.875rem;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.2s;
            }

            .zoom-bar .btn:hover {
                background-color: rgb(var(--hover-color));
            }

            .zoom-bar .btn.active {
                background-color: rgb(var(--primary-600));
                color: white;
                border-color: rgb(var(--primary-700));
            }

            /* Light theme */
            :root[data-theme="light"] {
                --background-color: 255, 255, 255;
                --border-color: 229, 231, 235;
                --text-color: 17, 24, 39;
                --grid-color: 249, 250, 251;
                --task-bg-color: 243, 244, 246;
                --hover-color: 243, 244, 246;
                --icon-invert: 0;
            }

            /* Dark theme */
            :root[data-theme="dark"] {
                --background-color: 22, 29, 37;
                --border-color: 55, 65, 81;
                --text-color: 209, 213, 219;
                --grid-color: 31, 41, 55;
                --task-bg-color: 42, 49, 57;
                --hover-color: 51, 59, 67;
                --icon-invert: 1;
            }

            /* Task content text color */
            .gantt_task_content {
                color: white !important;
                font-weight: 500 !important;
                text-shadow: none;
                mix-blend-mode: normal;
            }

            /* Main container backgrounds */
            .gantt_task_area,
            .gantt_container,
            .gantt_layout_cell,
            .gantt_data_area {
                background-color: rgb(var(--background-color)) !important;
            }

            /* Grid headers */
            .gantt_grid_scale,
            .gantt_grid_scale .gantt_grid_head_cell {
                background-color: rgb(var(--task-bg-color)) !important;
                border-color: rgb(var(--border-color)) !important;
            }

            /* Grid cells */
            .gantt_grid div.gantt_grid_data_area div.gantt_cell {
                background-color: rgb(var(--background-color)) !important;
            }

            /* Calendar popup */
            .gantt_cal_light {
                background-color: rgb(var(--background-color)) !important;
                border-color: rgb(var(--border-color)) !important;
                color: rgb(var(--text-color)) !important;
            }

            .gantt_cal_light select,
            .gantt_cal_light input {
                background-color: rgb(var(--task-bg-color)) !important;
                color: rgb(var(--text-color)) !important;
                border-color: rgb(var(--border-color)) !important;
            }

            .gantt_cal_light .gantt_cal_larea {
                border-color: rgb(var(--border-color)) !important;
            }

            /* Modal boxes */
            .gantt_modal_box {
                background-color: rgb(var(--background-color)) !important;
                border-color: rgb(var(--border-color)) !important;
                color: rgb(var(--text-color)) !important;
            }

            .gantt_popup_button {
                background-color: rgb(var(--primary-500)) !important;
                color: white !important;
            }

            /* Icons */
            .gantt_menu_icon {
                filter: invert(var(--icon-invert)) !important;
            }

            /* Calendar buttons and controls */
            .gantt_cal_prev_button,
            .gantt_cal_next_button {
                background-color: rgb(var(--task-bg-color)) !important;
                color: rgb(var(--text-color)) !important;
            }

            .gantt_cal_light .gantt_cal_lsection {
                color: rgb(var(--text-color)) !important;
            }

            /* Task row styles */
            .gantt_task_row {
                background-color: rgb(var(--background-color)) !important;
                border-color: rgb(var(--border-color)) !important;
                transition: background-color 0.2s;
            }

            .gantt_task_row:hover {
                background-color: rgb(var(--primary-100)) !important;
            }

            /* Task line styles with progress bar modifications */
            .gantt_task_line {
                border-radius: 0.5rem;
                transition: all 0.2s ease;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
                border: none !important;
            }

            /* Task status colors based on progress */
            .task-danger {
                background-color: rgb(var(--danger-600)) !important;
            }

            .task-warning {
                background-color: rgb(var(--warning-600)) !important;
            }

            .task-orange {
                background-color: rgb(var(--warning-700)) !important;
            }

            .task-success {
                background-color: rgb(var(--success-600)) !important;
            }

            /* Progress bar styling */
            .gantt_task_progress {
                background: rgb(var(--primary-600)) !important;
                border-radius: 0.5rem;
                position: relative;
                overflow: hidden;
                transition: all 0.3s ease;
            }

            /* Task styling based on progress percentage */
            gantt.templates.task_class = function(start, end, task) {
                if (task.type === "project") return "gantt_project";
                const progress = (task.progress || 0) * 100;
                
                if (progress <= 33) return "task-danger";
                if (progress <= 49) return "task-orange";
                if (progress <= 75) return "task-warning";
                return "task-success";
            };

            /* Links and dependencies */
            .gantt_task_link .gantt_line_wrapper div {
                background-color: rgb(var(--primary-500)) !important;
                height: 2px !important;
            }

            .gantt_task_link .gantt_link_arrow_right {
                border-left-color: rgb(var(--primary-500)) !important;
            }

            .gantt_task_link:hover .gantt_line_wrapper div {
                background-color: rgb(var(--primary-600)) !important;
                box-shadow: 0 0 5px 0 rgb(var(--primary-500)) !important;
                height: 3px !important;
            }

            /* Messages and notifications */
            .gantt_message {
                background-color: rgb(var(--background-color)) !important;
                color: rgb(var(--text-color)) !important;
                border-color: rgb(var(--border-color)) !important;
            }

            /* Split bars and resize handles */
            .gantt_split_bar,
            .gantt_grid_resize_wrap {
                background-color: rgb(var(--border-color)) !important;
            }

            /* Grid styles */
            .gantt_grid_scale,
            .gantt_scale_cell {
                background-color: rgb(var(--task-bg-color)) !important;
                color: rgb(var(--text-color)) !important;
                font-weight: 600;
                border-color: rgb(var(--border-color)) !important;
            }

            .gantt_grid_data .gantt_cell {
                background-color: rgb(var(--background-color)) !important;
                border-color: rgb(var(--border-color)) !important;
                color: rgb(var(--text-color)) !important;
            }

            /* Task area styles */
            .gantt_task_bg {
                background-color: rgb(var(--background-color)) !important;
                margin-bottom: 0 !important;
            }

            .gantt_task_scale {
                background-color: rgb(var(--task-bg-color)) !important;
                color: rgb(var(--text-color)) !important;
                border-color: rgb(var(--border-color)) !important;
            }

            /* Scrollbars */
            .gantt_hor_scroll,
            .gantt_ver_scroll {
                background-color: rgb(var(--background-color)) !important;
            }

            .gantt_ver_scroll > div, .gantt_hor_scroll > div {
                background-color: rgb(var(--primary-400)) !important;
                opacity: 0.8;
                border-radius: 4px;
            }

            .gantt_ver_scroll > div:hover, .gantt_hor_scroll > div:hover {
                background-color: rgb(var(--primary-500)) !important;
                opacity: 1;
            }

            /* Tooltips */
            .gantt_tooltip {
                border-radius: 0.5rem;
                box-shadow: var(--shadow-lg);
                background-color: rgb(var(--background-color)) !important;
                color: rgb(var(--text-color)) !important;
                border: 1px solid rgb(var(--border-color)) !important;
                padding: 0.5rem;
            }

            /* Add this to the style section */
            .gantt_task_critical .gantt_task_progress {
                background-color: rgb(var(--danger-400)) !important;
            }

            .gantt_task_critical .gantt_task_line {
                background-color: rgb(var(--danger-100)) !important;
                border-color: rgb(var(--danger-600)) !important;
            }

            .gantt_critical_link {
                background-color: rgb(var(--danger-500)) !important;
            }

            .gantt_grid_data, .gantt_task_bg {
                min-height: 0 !important;
            }

            /* Add milestone styling */
            .gantt_milestone {
                background-color: rgb(var(--primary-600)) !important;
                border-radius: 50% !important;
                width: 20px !important;
                height: 20px !important;
                margin-left: -10px !important;
                margin-top: -10px !important;
                transform: rotate(45deg) !important;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1) !important;
                border: 2px solid rgb(var(--primary-700)) !important;
                transition: all 0.3s ease !important;
            }

            .gantt_milestone:hover {
                transform: rotate(45deg) scale(1.2) !important;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
            }

            .gantt_milestone .gantt_task_content {
                transform: rotate(-45deg) !important;
                font-size: 0.75rem !important;
                position: absolute !important;
                top: 20px !important;
                width: max-content !important;
                color: rgb(var(--text-color)) !important;
            }

            /* Add status badge styling */
            .status-badge {
                display: inline-flex;
                align-items: center;
                padding: 0.25rem 0.75rem;
                border-radius: 9999px;
                font-size: 0.75rem;
                font-weight: 500;
                line-height: 1;
                white-space: nowrap;
            }

            .status-badge.completed {
                background-color: rgb(var(--success-100));
                color: rgb(var(--success-700));
            }

            .status-badge.in-progress {
                background-color: rgb(var(--warning-100));
                color: rgb(var(--warning-700));
            }

            .status-badge.todo {
                background-color: rgb(var(--primary-100));
                color: rgb(var(--primary-700));
            }

            .status-badge.blocked {
                background-color: rgb(var(--danger-100));
                color: rgb(var(--danger-700));
            }
        </style>
    @endpush

    <div class="gantt-container">
        <div class="zoom-bar">
            <button onclick="zoomIn()" class="btn" title="Zoom In">
                <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/>
                </svg>
            </button>
            <button onclick="zoomOut()" class="btn" title="Zoom Out">
                <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM7 10h6"/>
                </svg>
            </button>
            <button onclick="setScale('hour')" class="btn" title="Hours">Hours</button>
            <button onclick="setScale('day')" class="btn active" title="Days">Days</button>
            <button onclick="setScale('week')" class="btn" title="Weeks">Weeks</button>
            <button onclick="setScale('month')" class="btn" title="Months">Months</button>
            <button onclick="setScale('quarter')" class="btn" title="Quarters">Quarters</button>
            <button onclick="setScale('year')" class="btn" title="Years">Years</button>
            <button onclick="fitToData()" class="btn" title="Fit to Time">
                <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"/>
                </svg>
            </button>
        </div>
        <div id="gantt_here"></div>
    </div>

    @push('scripts')
        <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            // Gantt Configuration
                gantt.plugins({
                    auto_scheduling: true,
                    zoom: true
                });

                // Time scale configurations
                const zoomConfig = {
                    levels: [
                        {
                            name: "hour",
                            scales: [
                                {unit: "day", step: 1, format: "%d %M"},
                                {unit: "hour", step: 1, format: "%H:00"}
                            ],
                            min_column_width: 30,
                            scale_height: 60
                        },
                        {
                            name: "day",
                            scales: [
                                {unit: "month", step: 1, format: "%F"},
                                {unit: "day", step: 1, format: "%j"}
                            ],
                            min_column_width: 40,
                            scale_height: 60
                        },
                        {
                            name: "week",
                            scales: [
                                {unit: "month", step: 1, format: "%F"},
                                {unit: "week", step: 1, format: "Week %W"}
                            ],
                            min_column_width: 80,
                            scale_height: 60
                        },
                        {
                            name: "month",
                            scales: [
                                {unit: "year", step: 1, format: "%Y"},
                                {unit: "month", step: 1, format: "%M"}
                            ],
                            min_column_width: 120,
                            scale_height: 60
                        },
                        {
                            name: "quarter",
                            scales: [
                                {unit: "year", step: 1, format: "%Y"},
                                {unit: "quarter", step: 1, format: "Q%q"}
                            ],
                            min_column_width: 150,
                            scale_height: 60
                        },
                        {
                            name: "year",
                            scales: [
                                {unit: "year", step: 1, format: "%Y"}
                            ],
                            min_column_width: 200,
                            scale_height: 60
                        }
                    ]
                };

                // Initialize zoom
                gantt.ext.zoom.init(zoomConfig);

                // Fit to data function
                window.fitToData = function() {
                    const tasks = gantt.getTaskByTime();
                    if (!tasks || !tasks.length) return;

                    let minDate = tasks[0].start_date;
                    let maxDate = tasks[0].end_date;

                    tasks.forEach(task => {
                        if (task.start_date < minDate) minDate = task.start_date;
                        if (task.end_date > maxDate) maxDate = task.end_date;
                    });

                    // Add some padding (15% on each side)
                    const timespan = maxDate - minDate;
                    const padding = timespan * 0.15;
                    
                    gantt.config.start_date = new Date(minDate.getTime() - padding);
                    gantt.config.end_date = new Date(maxDate.getTime() + padding);
                    
                    // Choose appropriate scale based on timespan
                    const days = Math.ceil((maxDate - minDate) / (1000 * 60 * 60 * 24));
                    
                    if (days <= 2) {
                        setScale('hour');
                    } else if (days <= 14) {
                        setScale('day');
                    } else if (days <= 60) {
                        setScale('week');
                    } else if (days <= 180) {
                        setScale('month');
                    } else if (days <= 730) {
                        setScale('quarter');
                    } else {
                        setScale('year');
                    }

                    gantt.render();
                };

                // Set active zoom level
                window.setScale = function(level) {
                    gantt.ext.zoom.setLevel(level);
                    
                    // Update active button state
                    document.querySelectorAll('.zoom-bar .btn').forEach(btn => {
                        btn.classList.remove('active');
                        if (btn.getAttribute('onclick') === `setScale('${level}')`) {
                            btn.classList.add('active');
                        }
                    });
                };

                // Zoom in/out functions
                window.zoomIn = function() {
                    gantt.ext.zoom.zoomIn();
                    updateActiveButton();
                };

                window.zoomOut = function() {
                    gantt.ext.zoom.zoomOut();
                    updateActiveButton();
                };

                function updateActiveButton() {
                    const currentLevel = gantt.ext.zoom.getCurrentLevel();
                    document.querySelectorAll('.zoom-bar .btn').forEach(btn => {
                        btn.classList.remove('active');
                        if (btn.getAttribute('onclick') === `setScale('${currentLevel}')`) {
                            btn.classList.add('active');
                        }
                    });
                }

                // Basic configuration
            gantt.config.date_format = "%Y-%m-%d %H:%i";
            gantt.config.xml_date = "%Y-%m-%d %H:%i";
                gantt.config.scale_height = 60;
            gantt.config.row_height = 45;
            gantt.config.bar_height = 30;
            gantt.config.grid_width = 350;
            gantt.config.fit_tasks = true;
            gantt.config.show_progress = true;
            gantt.config.drag_links = true;
            gantt.config.drag_progress = true;
            gantt.config.drag_resize = true;
            gantt.config.drag_move = true;
            gantt.config.show_grid = true;
            gantt.config.show_chart = true;

            // Configure columns in the left-side grid
            gantt.config.columns = [
                {
                    name: "text", 
                    label: "Task", 
                    tree: true, 
                    width: 225,
                    template: function(task) {
                        if (task.type === "project") {
                            return `<span style="font-weight: 600;">${task.text}</span>`;
                        }
                        return task.text;
                    }
                },
                {
                    name: "progress",
                    label: "Progress",
                    align: "center",
                    width: 80,
                    template: function(task) {
                    return Math.round(task.progress * 100) + "%";
                    }
                },
                {
                    name: "status",
                    label: "Status",
                    align: "center",
                    width: 100,
                    template: function(task) {
                    const statusMap = {
                            'done': ['completed', 'Completed'],
                            'in_progress': ['in-progress', 'In Progress'],
                            'todo': ['todo', 'To Do'],
                            'blocked': ['blocked', 'Blocked']
                        };
                        const [className, label] = statusMap[task.status] || ['todo', task.status];
                        return `<span class="status-badge ${className}">${label}</span>`;
                    }
                }
            ];

            // Task Templates
            gantt.templates.task_text = function(start, end, task) {
                if (task.type === "milestone") {
                    return "";  // Text will be shown below the diamond
                }
                return `<div class="task-content">${task.text}</div>`;
            };

            // Tooltip template
            gantt.templates.tooltip_text = function(start, end, task) {
                const progress = Math.round(task.progress * 100);
                const statusMap = {
                    'done': 'Completed',
                    'in_progress': 'In Progress',
                    'todo': 'To Do'
                };

                if (task.type === "milestone") {
                    return `
                        <b>🎯 ${task.text}</b><br>
                        Date: ${gantt.templates.tooltip_date_format(start)}<br>
                        Type: Milestone
                    `;
                }

                return `
                    <b>${task.text}</b><br>
                    Start: ${gantt.templates.tooltip_date_format(start)}<br>
                    End: ${gantt.templates.tooltip_date_format(end)}<br>
                    Progress: ${progress}%<br>
                    Status: ${statusMap[task.status] || task.status}
                `;
            };

                // Listen for theme changes
                const observer = new MutationObserver((mutations) => {
                    mutations.forEach((mutation) => {
                        if (mutation.attributeName === 'data-theme' || mutation.attributeName === 'class') {
                            gantt.render(); // Just re-render instead of full reinit
                        }
                    });
                });

                observer.observe(document.documentElement, {
                    attributes: true,
                    attributeFilter: ['data-theme', 'class']
                });

                // Initial theme check and data load
                const initialTheme = document.documentElement.getAttribute('data-theme') || 'light';
                document.documentElement.setAttribute('data-theme', initialTheme);

            // Initialize Gantt
                // Configure the lightbox (task editor)
gantt.config.lightbox.sections = [
    {name: "title", height: 50, map_to: "text", type: "textarea", focus: true},
    {name: "description", height: 70, map_to: "description", type: "textarea"},
    {name: "time", type: "duration", map_to: "auto"},
    {name: "progress", height: 30, type: "select", map_to: "progress", options: [
        {key: 0, label: "0%"},
        {key: 0.1, label: "10%"},
        {key: 0.2, label: "20%"},
        {key: 0.3, label: "30%"},
        {key: 0.4, label: "40%"},
        {key: 0.5, label: "50%"},
        {key: 0.6, label: "60%"},
        {key: 0.7, label: "70%"},
        {key: 0.8, label: "80%"},
        {key: 0.9, label: "90%"},
        {key: 1, label: "100%"}
    ]},
    {name: "status", height: 30, type: "select", map_to: "status", options: [
        {key: "pending", label: "Pending"},
        {key: "in_progress", label: "In Progress"},
        {key: "completed", label: "Completed"}
    ]}
];

// Customize lightbox labels
gantt.locale.labels.section_text = "Task Title";
gantt.locale.labels.section_description = "Description";
gantt.locale.labels.section_time = "Time";
gantt.locale.labels.section_progress = "Progress";
gantt.locale.labels.section_status = "Status";

gantt.init("gantt_here");
                setScale('day'); // Set default scale
                
                // Load data
                async function loadGanttData() {
                try {
                    gantt.message({ type: "loading", text: "Loading projects..." });
                    
                    const response = await fetch('/api/gantt-data', {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    });

                    if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                    const data = await response.json();
                    
                    if (!data || !data.data) throw new Error("Invalid data format");
                    
                        gantt.clearAll(); // Clear existing data
                    gantt.parse({
                        data: data.data.map(task => ({
                            id: task.id,
                            text: task.text,
                            description: task.description,
                            start_date: new Date(task.start_date),
                            end_date: new Date(task.end_date),
                            progress: task.progress || 0,
                            parent: task.parent || 0,
                            type: task.type || "task",
                            status: task.status || "todo",
                            open: task.open !== undefined ? task.open : true
                        }))
                    });
                    
                    gantt.message.hide();
                        fitToData();
                } catch (error) {
                        console.error("Failed to load data:", error);
                    gantt.message({
                        type: "error",
                        text: `Failed to load data: ${error.message}`,
                        expire: -1
                    });
                        
                        // Load sample data as fallback
                        gantt.clearAll(); // Clear existing data
                        gantt.parse({
                            data: [
                                {
                                    id: 1,
                                    text: "Project #1",
                                    start_date: "2024-02-20",
                                    end_date: "2024-03-10",
                                    progress: 0.6,
                                    type: "project",
                                    open: true
                                },
                                {
                                    id: 2,
                                    text: "Task #1",
                                    start_date: "2024-02-20",
                                    end_date: "2024-02-25",
                                    progress: 0.5,
                                    parent: 1,
                                    status: "in_progress"
                                },
                                {
                                    id: 3,
                                    text: "Phase 1 Complete",
                                    start_date: "2024-02-25",
                                    type: "milestone",
                                    parent: 1
                                }
                            ]
                        });
                        fitToData();
                    }
                }

                // Load initial data
                loadGanttData();

            // Update Handling
            gantt.attachEvent("onAfterTaskUpdate", async (id, task) => {
                try {
                    const response = await fetch(`/api/gantt-data/${id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            id: task.id,
                            text: task.text,
                            description: task.description,
                            start_date: gantt.date.date_to_str(gantt.config.date_format)(task.start_date),
                            end_date: gantt.date.date_to_str(gantt.config.date_format)(task.end_date),
                            progress: task.progress || 0,
                            parent: task.parent || 0,
                            type: task.type || "task",
                            status: task.status
                        })
                    });

                    if (!response.ok) {
                        throw new Error('Failed to update task');
                    }

                    // Show success message
                    gantt.message({
                        text: "Task updated successfully",
                        type: "success",
                        expire: 3000
                    });

                } catch (error) {
                    console.error("Update failed:", error);
                    gantt.message({ 
                        type: "error", 
                        text: "Failed to save changes",
                        expire: 5000
                    });
                }
            });

            // Add this in the JavaScript section, right after gantt.plugins configuration
            gantt.config.highlight_critical_path = true;

            // Configure critical tasks styling
            gantt.templates.task_class = function(start, end, task) {
                if (task.type === "project") return "gantt_project";
                
                let classes = [];
                const progress = (task.progress || 0) * 100;
                
                // Add progress-based classes
                if (progress <= 33) classes.push("task-danger");
                else if (progress <= 49) classes.push("task-orange");
                else if (progress <= 75) classes.push("task-warning");
                else classes.push("task-success");
                
                // Add critical path class if task is critical
                if (task.critical) {
                    classes.push("gantt_task_critical");
                }
                
                return classes.join(" ");
            };

            // Add this after the basic configuration section
            gantt.config.duration_unit = "hour";
            gantt.config.work_time = true;
            gantt.config.correct_work_time = true;
            gantt.config.duration_step = 1;

            // Add milestone configuration
            gantt.config.types = {
                task: "task",
                project: "project",
                milestone: "milestone"
            };

            // Configure the lightbox (task editor)
            gantt.config.lightbox.sections = [
                {name: "title", height: 50, map_to: "text", type: "textarea", focus: true},
                {name: "description", height: 70, map_to: "description", type: "textarea"},
                {name: "time", type: "duration", map_to: "auto"},
                {name: "progress", height: 30, type: "select", map_to: "progress", options: [
                    {key: 0, label: "0%"},
                    {key: 0.1, label: "10%"},
                    {key: 0.2, label: "20%"},
                    {key: 0.3, label: "30%"},
                    {key: 0.4, label: "40%"},
                    {key: 0.5, label: "50%"},
                    {key: 0.6, label: "60%"},
                    {key: 0.7, label: "70%"},
                    {key: 0.8, label: "80%"},
                    {key: 0.9, label: "90%"},
                    {key: 1, label: "100%"}
                ]},
                {name: "status", height: 30, type: "select", map_to: "status", options: [
                    {key: "backlog", label: "Backlog"},
                    {key: "todo", label: "To Do"},
                    {key: "in_progress", label: "In Progress"},
                    {key: "review", label: "Review"},
                    {key: "done", label: "Done"}
                ]}
            ];

            // Configure milestone sections without overwriting the main sections
            gantt.config.lightbox.milestone_sections = [
                {name: "title", height: 50, map_to: "text", type: "textarea", focus: true},
                {name: "time", type: "duration", map_to: "auto", single_date: true}
            ];

            // Customize lightbox labels
            gantt.locale.labels.section_text = "Task Title";
            gantt.locale.labels.section_description = "Description";
            gantt.locale.labels.section_time = "Time";
            gantt.locale.labels.section_progress = "Progress";
            gantt.locale.labels.section_status = "Status";
            });
        </script>
    @endpush
</x-filament::page>
@extends('head')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="dashboard">
            <!-- Student Profile Section -->
            <div class="profile-section">
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="{{ asset('pic/profile.png') }}" alt="Student Profile" class="profile-image">
                        <div class="profile-info">
                            <h2>Alibanga, Alexander Ven A.</h2>
                            <p>Grade 7: Section Narra</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- English Language Results -->
            <div class="results-section">
                <div class="results-header">
                    <h2>English Language Test Results</h2>
                </div>
                <div class="charts-container">
                    <div class="reading-passage">
                        <div class="chart-card">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="reading-metrics">
                            <p><strong>125 (WPM) Words Per Minute</strong></p>
                        </div>
                    </div>

                    <div class="reading-passage">
                        <div class="chart-card">
                            <canvas id="myChart1"></canvas>
                        </div>
                        <div class="reading-metrics">
                            <p><strong>Instructional Level</strong></p>
                            <p>7 out of 10 correct answers</p>
                        </div>
                    </div>

                    <div class="reading-passage">
                        <div class="chart-card">
                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class="reading-metrics">
                            <p><strong>Independent Level</strong></p>
                            <p>235 out of 250 words read correctly</p>
                        </div>
                    </div>
                </div>
                <div class="feedback-section">
                    <label for="englishFeedback">Teacher's Feedback:</label>
                    <textarea class="form-control" id="englishFeedback" rows="4" readonly>This is where the teacher's feedback will appear.</textarea>
                </div>
            </div>

            <!-- Filipino Language Results -->
            <div class="results-section">
                <div class="results-header">
                    <h2>Filipino Language Test Results</h2>
                </div>
                <div class="charts-container">
                    <div class="reading-passage">
                        <div class="chart-card">
                            <canvas id="myChart3"></canvas>
                        </div>
                        <div class="reading-metrics">
                            <p><strong>130 (WPM) Words Per Minute</strong></p>
                        </div>
                    </div>

                    <div class="reading-passage">
                        <div class="chart-card">
                            <canvas id="myChart4"></canvas>
                        </div>
                        <div class="reading-metrics">
                            <p><strong>Independent Level</strong></p>
                            <p>8 out of 10 correct answers</p>
                        </div>
                    </div>

                    <div class="reading-passage">
                        <div class="chart-card">
                            <canvas id="myChart5"></canvas>
                        </div>
                        <div class="reading-metrics">
                            <p><strong>Independent Level</strong></p>
                            <p>238 out of 250 words read correctly</p>
                        </div>
                    </div>
                </div>
                <div class="feedback-section">
                    <label for="filipinoFeedback">Teacher's Feedback:</label>
                    <textarea class="form-control" id="filipinoFeedback" rows="4" readonly>This is where the teacher's feedback will appear.</textarea>
                </div>
            </div>

            <!-- Detailed Results Table -->
            <div class="results-section">
                <div class="results-header">
                    <h2>Reading Results</h2>
                </div>

                <div class="results-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Reading Title</th>
                                <th>Date</th>
                                <th>Score</th>
                                <th>Time Spent</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pagbibilang ng mga Oras</td>
                                <td>2024-03-15</td>
                                <td>90%</td>
                                <td>25 mins</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Telling Time</td>
                                <td>2024-03-10</td>
                                <td>85%</td>
                                <td>20 mins</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="results-section">
                <div class="results-header">
                    <h2>Answer Results</h2>
                </div>

                <div class="results-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Question Category</th>
                                <th>Date</th>
                                <th>Score</th>
                                <th>Time Spent</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Filipino Question</td>
                                <td>2024-03-15</td>
                                <td>90%</td>
                                <td>25 mins</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>English Question</td>
                                <td>2024-03-10</td>
                                <td>85%</td>
                                <td>20 mins</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
</div>
        </div>
    </div>

    <style>
        .main-content {
            padding: 20px;
            background-color: #f5f6fa;
        }

        .dashboard {
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile-section {
            margin-bottom: 30px;
        }

        .profile-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-image {
            width: 100px;
            height: 90px;
            border-radius: 10px;
        }

        .profile-info h2 {
            margin: 0;
            color: #2c3e50;
            font-size: 1.5em;
        }

        .profile-info p {
            margin: 5px 0 0;
            color: #7f8c8d;
        }

        .performance-overview {
            margin-bottom: 30px;
        }

        .overview-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .overview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .overview-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .stat-box {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .stat-box i {
            font-size: 2em;
            color: #3498db;
        }

        .stat-content h3 {
            margin: 0;
            font-size: 0.9em;
            color: #7f8c8d;
        }

        .stat-number {
            margin: 5px 0;
            font-size: 1.5em;
            font-weight: bold;
            color: #2c3e50;
        }

        .trend {
            font-size: 0.8em;
        }

        .trend.positive {
            color: #27ae60;
        }

        .trend.negative {
            color: #e74c3c;
        }

        .results-section {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .results-header h2 {
            color: #2c3e50;
            font-size: 1.8em;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #95a5a6;
        }

        .filter-options {
            display: flex;
            gap: 10px;
        }

        .form-select {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: white;
        }

        .charts-container {
            display: flex;
            flex-direction: row;
            gap: 10px;
            padding: 10px 0;
            width: 100%;
        }

        .reading-passage {
            flex: 1;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s;
            min-width: 0;
        }

        .reading-passage:hover {
            transform: translateY(-5px);
        }

        .chart-card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            height: 350px;
            position: relative;
        }

        .chart-card canvas {
            width: 100% !important;
            height: 100% !important;
        }

        .reading-metrics {
            background: white;
            padding: 20px;
            margin: 0 15px 15px 15px;
            border-radius: 8px;
            text-align: center;
        }

        .reading-metrics p {
            margin: 8px 0;
            color: #2c3e50;
            font-size: 1.1em;
        }

        .reading-metrics p:first-child {
            color: #3498db;
            font-size: 1.3em;
            font-weight: 600;
        }

        .reading-metrics p:not(:first-child) {
            color: #7f8c8d;
            font-size: 0.95em;
        }

        .feedback-section {
            margin-top: 20px;
        }

        .feedback-section label {
            display: block;
            margin-bottom: 10px;
            color: #2c3e50;
            font-weight: 500;
        }

        .feedback-section textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f8f9fa;
        }

        .results-table {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #2c3e50;
        }

        .status {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9em;
        }

        .status.completed {
            background: #e8f5e9;
            color: #27ae60;
        }

        .btn-view {
            background: #3498db;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-view:hover {
            background: #2980b9;
        }

        @media (max-width: 768px) {
            .overview-header, .results-header {
                flex-direction: column;
                gap: 15px;
            }

            .filter-options {
                width: 100%;
                flex-direction: column;
            }

            .form-select {
                width: 100%;
            }

            .profile-header {
                flex-direction: column;
                text-align: center;
            }

            .charts-container {
                flex-direction: column;
            }
            .reading-passage {
                flex: 0 0 100%;
            }
        }
    </style>

    <!-- Chart.js Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    font: {
                        size: 14
                    },
                    padding: {
                        bottom: 10
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        font: {
                            size: 11
                        }
                    }
                },
                x: {
                    ticks: {
                        font: {
                            size: 11
                        },
                        maxRotation: 45,
                        minRotation: 45,
                        padding: 5
                    }
                }
            },
            layout: {
                padding: {
                    left: 10,
                    right: 10,
                    top: 10,
                    bottom: 10
                }
            }
        };

        // Reading Speed Chart
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Reading Time', 'Total Words'],
                datasets: [{
                    data: [120, 250],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 99, 132, 0.8)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    title: {
                        display: true,
                        text: 'Reading Speed',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        });

        // Comprehension Chart
        const ctx1 = document.getElementById('myChart1').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Correct Answers', 'Total Questions'],
                datasets: [{
                    data: [7, 10],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    title: {
                        display: true,
                        text: 'Reading Comprehension',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        });

        // Word Reading Chart
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Reading Miscues', 'Correct Reading', 'Total Words'],
                datasets: [{
                    data: [15, 235, 250],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    title: {
                        display: true,
                        text: 'Word Reading',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        });

        // Filipino Reading Speed Chart
        const ctx3 = document.getElementById('myChart3').getContext('2d');
        new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['Reading Time', 'Total Words'],
                datasets: [{
                    data: [115, 250],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 99, 132, 0.8)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    title: {
                        display: true,
                        text: 'Reading Speed',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        });

        // Filipino Comprehension Chart
        const ctx4 = document.getElementById('myChart4').getContext('2d');
        new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Correct Answers', 'Total Questions'],
                datasets: [{
                    data: [8, 10],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    title: {
                        display: true,
                        text: 'Reading Comprehension',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        });

        // Filipino Word Reading Chart
        const ctx5 = document.getElementById('myChart5').getContext('2d');
        new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: ['Reading Miscues', 'Correct Reading', 'Total Words'],
                datasets: [{
                    data: [12, 238, 250],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    title: {
                        display: true,
                        text: 'Word Reading',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        });
    </script>
@endsection
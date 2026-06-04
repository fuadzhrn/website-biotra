

document.addEventListener('DOMContentLoaded', function () {
    const accommodationCanvas = document.getElementById('accommodationChart');
    const mobilityCanvas = document.getElementById('mobilityChart');

    if (accommodationCanvas) {
        const accommodationCtx = accommodationCanvas.getContext('2d');

        new Chart(accommodationCtx, {
            type: 'line',
            data: {
                labels: ['Q1 2025', 'Q2 2025', 'Q3 2025', 'Q4 2025', 'Q1 2026', 'Q2 2026'],
                datasets: [
                    {
                        label: 'Okupansi Hotel & Villa',
                        data: [54, 58, 63, 67, 70, 74],
                        borderColor: '#D6A43A',
                        backgroundColor: 'rgba(214, 164, 58, 0.15)',
                        borderWidth: 3,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBackgroundColor: '#D6A43A',
                        pointBorderColor: '#FFFFFF',
                        pointBorderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#071B35',
                        titleColor: '#FFFFFF',
                        bodyColor: '#FFFFFF',
                        padding: 12,
                        displayColors: false,
                        callbacks: {
                            label: function (context) {
                                return context.parsed.y + '% ilustrasi okupansi';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#6B7280',
                            font: {
                                size: 11,
                                family: 'Montserrat'
                            }
                        }
                    },
                    y: {
                        beginAtZero: false,
                        min: 40,
                        max: 80,
                        grid: {
                            color: 'rgba(107, 114, 128, 0.14)'
                        },
                        ticks: {
                            color: '#6B7280',
                            font: {
                                size: 11,
                                family: 'Montserrat'
                            },
                            callback: function (value) {
                                return value + '%';
                            }
                        }
                    }
                }
            }
        });
    }

    if (mobilityCanvas) {
        const mobilityCtx = mobilityCanvas.getContext('2d');

        new Chart(mobilityCtx, {
            type: 'bar',
            data: {
                labels: ['Q1 2025', 'Q2 2025', 'Q3 2025', 'Q4 2025', 'Q1 2026', 'Q2 2026'],
                datasets: [
                    {
                        label: 'Pertumbuhan Rental Mobil',
                        data: [42, 48, 55, 61, 68, 75],
                        backgroundColor: '#D6A43A',
                        borderRadius: 12,
                        borderSkipped: false,
                        barThickness: 26
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#071B35',
                        titleColor: '#FFFFFF',
                        bodyColor: '#FFFFFF',
                        padding: 12,
                        displayColors: false,
                        callbacks: {
                            label: function (context) {
                                return context.parsed.y + '% ilustrasi pertumbuhan';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#6B7280',
                            font: {
                                size: 11,
                                family: 'Montserrat'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        max: 90,
                        grid: {
                            color: 'rgba(107, 114, 128, 0.14)'
                        },
                        ticks: {
                            color: '#6B7280',
                            font: {
                                size: 11,
                                family: 'Montserrat'
                            },
                            callback: function (value) {
                                return value + '%';
                            }
                        }
                    }
                }
            }
        });
    }
});
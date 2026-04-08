<?php
// Sample portfolio data - you can modify this or connect to a database
$portfolio = [
    'name' => 'John Doe',
    'age' => 25,
    'gender' => 'Male',
    'projects' => [
        [
            'title' => 'E-Commerce Website',
            'description' => 'A full-featured online store with payment integration',
            'technologies' => 'PHP, MySQL, Bootstrap'
        ],
        [
            'title' => 'Task Management App',
            'description' => 'Web application for managing daily tasks and projects',
            'technologies' => 'PHP, HTML, CSS, JavaScript'
        ],
        [
            'title' => 'Blog Platform',
            'description' => 'Content management system for blogging',
            'technologies' => 'PHP, MySQL, HTML5'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $portfolio['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="portfolio_styles.css">
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="profile-info">
                <div class="profile-avatar">
                    <div class="avatar-placeholder"><?php echo strtoupper(substr($portfolio['name'], 0, 1)); ?></div>
                </div>
                <div class="intro">
                    <h1><?php echo $portfolio['name']; ?></h1>
                    <div class="details">
                        <span class="detail-item">
                            <strong>Age:</strong> <?php echo $portfolio['age']; ?> years old
                        </span>
                        <span class="detail-item">
                            <strong>Gender:</strong> <?php echo $portfolio['gender']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <p class="tagline">Web Developer | Creative Problem Solver | Tech Enthusiast</p>
        </header>

        <!-- Projects Section -->
        <section class="projects-section">
            <h2>My Projects</h2>
            <div class="projects-grid">
                <?php foreach ($portfolio['projects'] as $project): ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p class="project-description"><?php echo $project['description']; ?></p>
                        <div class="technologies">
                            <strong>Technologies:</strong> 
                            <span><?php echo $project['technologies']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2026 <?php echo $portfolio['name']; ?>. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

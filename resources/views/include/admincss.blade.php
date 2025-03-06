<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar with Hero Stats</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #sidebar {
            z-index: 50;
        }

        .hero {
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
            background-color: black;
        }

        .sidebar-open {
            margin-left: 16rem; 
        }

        #sidebar {
    position: fixed;
    left: -250px; /* Initially hidden */
    top: 0;
    width: 250px;
    height: 100%;
    background-color: #f3f4f6;
    box-shadow: 2px 0 5px rgba(0,0,0,0.2);
    transition: all 0.3s ease-in-out;
}

#sidebar.active {
    left: 0; /* Slide in when active */
}

#main-container {
    transition: margin-left 0.3s ease-in-out;
    margin-left: 0; /* Default position */
}

#main-container.shift {
    margin-left: 250px; /* Adjust content when sidebar is open */
}

    </style>
</head>
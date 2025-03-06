<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="w-64 bg-gray-200 text-black p-5 flex flex-col h-screen">
            <div class="flex flex-col items-center mt-6">
                <img src="https://businessbuy.in/images/logo.png" alt="Logo" class="w-24 h-auto">
            </div>
            <nav class="mt-6 font-sans">
                <ul class="text-lg font-bold flex flex-col space-y-2 text-center">
                    <li class="w-full p-4 hover:bg-blue-500 hover:rounded-lg transition duration-300 hover:text-white"><a href="#">Commercial Listing</a></li>
                    <li class="w-full p-4 hover:bg-blue-500 hover:rounded-lg transition duration-300 hover:text-white"><a href="#">Business Setup</a></li>
                    <li class="w-full p-4 hover:bg-blue-500 hover:rounded-lg transition duration-300 hover:text-white"><a href="#">Business Valuation</a></li>
                    <li class="w-full p-4 hover:bg-blue-500 hover:rounded-lg transition duration-300 hover:text-white"><a href="#">IT Consultancy</a></li>
                    <li class="w-full p-4 hover:bg-blue-500 hover:rounded-lg transition duration-300 hover:text-white"><a href="#">Business Advisory</a></li>
                    <li class="w-full p-4 hover:bg-blue-500 hover:rounded-lg transition duration-300 hover:text-white"><a href="/admin/categories">Add Business Categories</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col bg-gray-100">
            <!-- Top Navbar -->
            <nav class="bg-white p-4 shadow flex justify-between bg-opacity-10 items-center">
                <button id="menuBtn" class="text-gray-900 text-2xl">&#9776;</button>
                {{-- <button id="darkModeToggle" class="bg-gray-900 text-white px-4 py-2 rounded">Dark Mode</button> --}}

                <div class="relative">
                    <div class="flex space-x-4 items-center">
                        <img src="https://th.bing.com/th/id/OIP.ZoxrkZKREKVwJdH3qLUA7QHaIl?w=152&h=180&c=7&r=0&o=5&pid=1.7" 
                            alt="Profile Image" 
                            class="w-10 h-10 rounded-full border-2 border-white cursor-pointer"
                            id="profileBtn">
                    </div>
        
                    <div id="submenu" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-lg hidden z-50">
                        <ul class="text-gray-700">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Logout</a></li>
                        </ul>
                    </div>
                </div>
                
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const profileBtn = document.getElementById("profileBtn");
                        const submenu = document.getElementById("submenu");
                
                       
                        profileBtn.addEventListener("click", function(event) {
                            event.stopPropagation(); 
                            submenu.classList.toggle("hidden");
                        });
                
                        document.addEventListener("click", function(event) {
                            if (!submenu.contains(event.target) && !profileBtn.contains(event.target)) {
                                submenu.classList.add("hidden");
                            }
                        });
                    });
                </script>
            </nav>
            
            <!-- Dashboard Content -->
            <body class="bg-gray-100">
                <main id="content" class="transition-all duration-300 ease-in-out">
                    <section class="relative hero h-screen flex flex-col items-center justify-center text-center text-white" 
    style="
        background-image: url('https://www.kolostat.com/wp-content/uploads/2020/04/Kolostat-Commercial-HVAC-Services-Office-Building.jpg'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        width: 100%;
        height: 100vh;
    ">
                        
                        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 text-white text-opacity-80 uppercase text-center" 
                        >
                        WELCOME TO ADMIN PANEL
                    </h1>
                    
            
                            <!-- Standardized Date & Time -->
                            <p id="dateTime" class="text-lg font-semibold mt-4 bg-gray-800 bg-opacity-70 px-6 py-3 rounded-lg shadow-md text-white inline-block">
                                Loading...
                            </p>
            
                            <script>
                                function updateDateTime() {
                                    const now = new Date();
                                    const options = { 
                                        weekday: 'long', 
                                        year: 'numeric', 
                                        month: 'long', 
                                        day: 'numeric', 
                                        hour: '2-digit', 
                                        minute: '2-digit', 
                                        second: '2-digit', 
                                        hour12: true 
                                    };
                                    document.getElementById("dateTime").innerText = now.toLocaleString('en-US', options);
                                }
                                setInterval(updateDateTime, 1000);
                                window.onload = updateDateTime;
                            </script>
            
            
                            <!-- Dashboard Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                                
                                <!-- Total Users -->
                                <a href="/signupdetails" class="block">
                                    <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 bg-opacity-70 w-72 mx-auto transition-transform transform hover:scale-105">
                                        <div>
                                            <h3 class="text-gray-500 text-lg font-medium">Total Users</h3>
                                            <p class="text-3xl font-bold text-orange-600">12,345</p>
                                        </div>
                                        <div class="bg-orange-100 p-4 rounded-full">
                                            <i class="fas fa-users text-orange-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </a>
            
                                <!-- Total Businesses -->
                                <a href="businesses.html" class="block">
                                    <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 bg-opacity-70 w-72 mx-auto transition-transform transform hover:scale-105">
                                        <div>
                                            <h3 class="text-gray-500 text-lg font-medium">Total Businesses</h3>
                                            <p class="text-3xl font-bold text-blue-600">678</p>
                                        </div>
                                        <div class="bg-blue-100 p-4 rounded-full">
                                            <i class="fas fa-building text-blue-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </a>
            
                                <!-- Total Revenue -->
                                <a href="revenue.html" class="block">
                                    <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 bg-opacity-70 w-72 mx-auto transition-transform transform hover:scale-105">
                                        <div>
                                            <h3 class="text-gray-500 text-lg font-medium">Total Revenue</h3>
                                            <p class="text-3xl font-bold text-green-600">$1.2M</p>
                                        </div>
                                        <div class="bg-green-100 p-4 rounded-full">
                                            <i class="fas fa-dollar-sign text-green-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </a>
            
                                <a href="/contactus" class="block">
                                    <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 bg-opacity-70 w-72 mx-auto transition-transform transform hover:scale-105">
                                        <div>
                                            <h3 class="text-gray-500 text-lg font-medium">Manage Contacts</h3>
                                            <p class="text-3xl font-bold text-purple-600">3,421</p>
                                        </div>
                                        <div class="bg-purple-100 p-4 rounded-full">
                                            <i class="fas fa-file-alt text-purple-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </a>
            
                                <!-- New Messages -->
                                <a href="messages.html" class="block">
                                    <div class="bg-white shadow-lg rounded-2xl p-6 flex items-center justify-between text-gray-800 bg-opacity-70 w-72 mx-auto transition-transform transform hover:scale-105">
                                        <div>
                                            <h3 class="text-gray-500 text-lg font-medium">New Messages</h3>
                                            <p class="text-3xl font-bold text-red-600">124</p>
                                        </div>
                                        <div class="bg-red-100 p-4 rounded-full">
                                            <i class="fas fa-envelope text-red-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </a>
            
                            </div>
                        </div>
                    </section>
                </main>
        </div>
    </div>
    
    <script>
        // Sidebar Toggle
        document.getElementById('menuBtn').addEventListener('click', function() {
            let sidebar = document.getElementById('sidebar');
            if (sidebar.classList.contains('w-64')) {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-0', 'p-0');
            } else {
                sidebar.classList.remove('w-0', 'p-0');
                sidebar.classList.add('w-64');
            }
        });
        
        // Dark Mode Toggle
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            document.body.classList.toggle('bg-gray-900');
            document.body.classList.toggle('text-white');
        });
    </script>
</body>
</html>

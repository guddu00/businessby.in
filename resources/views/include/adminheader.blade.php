<body class="bg-gray-50  mt-10 ml-10 ">
    <header class="bg-gray-200 shadow-md p-4 flex items-center justify-between fixed top-0 left-0 w-full z-50 text-white">
         <div class="flex items-center space-x-6">
             <button id="menu-btn" class="text-black text-2xl focus:outline-none">&#9776;</button>
             <img src="https://businessbuy.in/images/logo.png" alt="Logo" class="w-24 h-auto">
         </div>
 
         <!-- Profile Dropdown -->
         <div class="relative">
             <div class="flex space-x-4 items-center">
                 <img src="https://th.bing.com/th/id/OIP.ZoxrkZKREKVwJdH3qLUA7QHaIl?w=152&h=180&c=7&r=0&o=5&pid=1.7" 
                     alt="Profile Image" 
                     class="w-10 h-10 rounded-full border-2 border-white cursor-pointer"
                     id="profileBtn">
             </div>
 
             <!-- Profile Menu -->
             <div id="submenu" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-lg hidden z-50">
                 <ul class="text-gray-700">
                     <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a></li>
                     <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a></li>
                     <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a></li>
                 </ul>
             </div>
         </div>
     </header>
 
     <!-- SIDEBAR -->
     <div id="sidebar" class="fixed left-0 top-0 w-64 h-full bg-white text-gray-900 transform -translate-x-full transition-transform duration-300 ease-in-out shadow-lg border-r border-gray-200">
         <button id="close-btn" class="absolute top-4 right-4 text-2xl text-gray-600">&times;</button>
         <div class="flex flex-col items-center mt-6">
             <img src="https://businessbuy.in/images/logo.png" alt="Logo" class="w-24 h-auto">
         </div>
         <nav class="mt-6 font-sans">
             <ul class="text-lg font-medium flex flex-col space-y-2 text-left">
                 <li class="w-full p-4 hover:bg-gray-100 transition duration-300"><a href="#">Commercial Listing</a></li>
                 <li class="w-full p-4 hover:bg-gray-100 transition duration-300"><a href="#">Business Setup</a></li>
                 <li class="w-full p-4 hover:bg-gray-100 transition duration-300"><a href="#">Business Valuation</a></li>
                 <li class="w-full p-4 hover:bg-gray-100 transition duration-300"><a href="#">IT Consultancy</a></li>
                 <li class="w-full p-4 hover:bg-gray-100 transition duration-300"><a href="#">Business Advisory</a></li>
                 <li class="w-full p-4 hover:bg-gray-100 transition duration-300"><a href="/admin/categories">Add Business Categories</a></li>
             </ul>
         </nav>
     </div>
 
     <!-- JAVASCRIPT -->
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             // Profile Dropdown Toggle
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
 
             // Sidebar Toggle
             const menuBtn = document.getElementById("menu-btn");
             const closeBtn = document.getElementById("close-btn");
             const sidebar = document.getElementById("sidebar");
 
             menuBtn.addEventListener("click", function() {
                 sidebar.classList.remove("-translate-x-full");
             });
 
             closeBtn.addEventListener("click", function() {
                 sidebar.classList.add("-translate-x-full");
             });
         });
     </script>
 </body>
 
@include('include.admincss')
@include('include.adminheader')
    <div id="main-content" class="transition-all duration-300 ease-in-out">

        <div class="max-w-6xl mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-700">Signup Information</h2>
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 rounded-lg overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
                            <th class="border p-4">First Name</th>
                            <th class="border p-4">Last Name</th>
                            <th class="border p-4">Email</th>
                            <th class="border p-4">Address</th>
                            <th class="border p-4">Phone Number</th>
                            <th class="border p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-100 transition duration-300">
                            <td class="border p-4">John</td>
                            <td class="border p-4">Doe</td>
                            <td class="border p-4">john@example.com</td>
                            <td class="border p-4">123 Main St</td>
                            <td class="border p-4">(123) 456-7890</td>
                            <td class="border p-4 flex space-x-2">
                                <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition">Edit</button>
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        const menuBtn = document.getElementById("menu-btn");
        const closeBtn = document.getElementById("close-btn");
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("main-content");

        menuBtn.addEventListener("click", () => {
            sidebar.classList.remove("-translate-x-full");
            mainContent.classList.add("sidebar-open");
        });

        closeBtn.addEventListener("click", () => {
            sidebar.classList.add("-translate-x-full");
            mainContent.classList.remove("sidebar-open");
        });
    </script>
</body>
</html>

@include('include.admincss')
@include('include.adminheader')

<div id="main-content" class="transition-all duration-300 ease-in-out p-6 mt-20">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-700">Profile Information</h2>
        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
            <div class="flex flex-col items-center">
                <img src="https://th.bing.com/th/id/OIP.Zvs5IHgOO5kip7A32UwZJgHaHa?rs=1&pid=ImgDetMain" alt="Profile Picture" 
                    class="w-32 h-32 rounded-full border-4 border-orange-600 shadow-md">
            </div>
            <div class="flex-1 space-y-4">
                <div>
                    <label class="text-gray-700 font-semibold">Name</label>
                    <input type="text" class="w-full px-3 py-2 bg-gray-100 rounded-md border border-gray-300 text-gray-900" 
                        value="Kundan Kumar" disabled>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex-1">
                        <label class="text-gray-700 font-semibold">Email</label>
                        <input type="email" class="w-full px-3 py-2 bg-gray-100 rounded-md border border-gray-300 text-gray-900" 
                            value="kundan@example.com" disabled>
                    </div>
                    <button class="px-4 py-2 bg-orange-600 text-white rounded-md shadow-md hover:bg-orange-700">Reset</button>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex-1">
                        <label class="text-gray-700 font-semibold">Password</label>
                        <input type="password" class="w-full px-3 py-2 bg-gray-100 rounded-md border border-gray-300 text-gray-900" 
                            value="********" disabled>
                    </div>
                    <button class="px-4 py-2 bg-orange-600 text-white rounded-md shadow-md hover:bg-orange-700">Reset</button>
                </div>
                <div>
                    <label class="text-gray-700 font-semibold">Contact</label>
                    <input type="text" class="w-full px-3 py-2 bg-gray-100 rounded-md border border-gray-300 text-gray-900" 
                        value="+91 9876543210" disabled>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.adminjs')


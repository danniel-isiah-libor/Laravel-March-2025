<!-- filepath: c:\xampp\htdocs\Laravel Project\Laravel-March-2025\playground\resources\views\login.blade.php -->
<x-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <form action="{{ route('show.login') }}" method="POST" class="w-full max-w-sm bg-white p-6 rounded-lg shadow">
            @csrf
            <h2 class="text-xl font-semibold text-center mb-4 text-gray-800">Login to Your Account</h2>
            
            <div class="mb-4">
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-100 focus:outline-none" placeholder="Email" required>
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-100 focus:outline-none" placeholder="Password" required>
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 focus:ring focus:ring-blue-200 focus:outline-none">
                Login
            </button>
            
            <p class="text-sm text-center text-gray-600 mt-4">
                Don't have an account? <a href="{{ route('show.register') }}" class="text-blue-500 hover:underline">Register</a>
            </p>
        </form>
    </div>
</x-layout>
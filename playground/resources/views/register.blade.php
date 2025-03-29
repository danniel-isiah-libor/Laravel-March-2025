<x-layout>
    <div class="w-full max-w-md p-8 space-y-6 bg-white bg-opacity-90 rounded-3xl shadow-2xl">
        <h2 class="text-3xl font-extrabold text-center text-gray-900">Create an Account</h2>
        <form action="{{ route('register') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text"
                    class="w-full px-4 py-3 mt-1 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Enter your name" name="name">
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email"
                    class="w-full px-4 py-3 mt-1 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Enter your email" required name="email">
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password"
                    class="w-full px-4 py-3 mt-1 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Enter your password" required name="password">
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password"
                    class="w-full px-4 py-3 mt-1 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Confirm your password" required name="password_confirmation">
                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="w-full py-3 text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-500 rounded-xl shadow-md hover:opacity-90 transition">Register</button>
        </form>
        <p class="text-sm text-center text-gray-700">Already have an account? <a href="#"
                class="text-blue-600 hover:underline font-medium">Login</a></p>
    </div>
</x-layout>

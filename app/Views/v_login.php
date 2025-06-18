<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
        <h2 class="text-xl font-bold text-center mb-6">Login Admin</h2>
        <form method="post" action="/login">
            <div class="mb-4">
                <label class="block text-sm">Email</label>
                <input type="email" name="username" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-6">
                <label class="block text-sm">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <button class="w-full bg-teal-600 text-white p-2 rounded hover:bg-teal-700">Login</button>
        </form>

    </div>
</body>

</html>
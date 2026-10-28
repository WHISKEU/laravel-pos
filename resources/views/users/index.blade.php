<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <h1>User Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <h2>User List</h2>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->id }} -
                {{ $user->username }} -
                {{ $user->full_name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
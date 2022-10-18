<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <title>FuegoAmigo</title>
</head>
<body>
    <header>
        <nav>
          <ul>
            <li> 
              <a href="list">Home</a>
            </li>
            <li>
              <a href="admin">Admin</a>
            </li>
            {if !isset($smarty.session.USER_ID)}
            <li>
              <a href="login">Login</a>
            </li>
            {else}
            <li>
              <a href="logout">Logout</a>
            </li>
            {/if}
          </ul>
        </nav>
    </header>
    <main class="container">

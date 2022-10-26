<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/pastel-glyph/64/000000/hand-lighter-without-flame.png">
    <title>FuegoAmigo</title>
</head>
<body>
    <header>
        <nav>
          <ul>
            <li>
              <img class="icon" alt="FuegoAmigo" src="https://img.icons8.com/pastel-glyph/64/000000/hand-lighter-without-flame.png"/>
            </li>
            <li> 
              <a href="list">Home</a>
            </li>
            {if !isset($smarty.session.IS_LOGGED)}
            <li>
              <a href="adminlist">Admin</a>
            </li>
            <li>
              <a href="login">Login</a>
            </li>
            {else}
            <li> 
              <a href="adminlist">Edit rows and categories</a>
            </li>
            <li>
              <a href="logout">Logout</a>
            </li>
            {/if}
          </ul>
        </nav>
    </header>
    <main class="container">

{include file="templates/header.tpl"}
<!--formulario-->
<form action="validate" method="POST">
  <div>
    <label class="formLabel" for="inputEmail4">Email</label>
    <input class="formControl" type="email" id="inputEmail4" name="email">
  </div>
  <div>
    <label class="formLabel" for="inputPassword4">Password</label>
    <input class="formControl" type="password" id="inputPassword4" name="password">
  </div>
  <div>
    <label class="formLabel" for="inputAddress">Name</label>
    <input class="formControl" type="text" id="inputAddress" name="name">
  </div>

  {if $error}
    <div>
      {$error}
    </div>
  {/if}



  <div>
    <button type="submit">Sign in</button>
  </div>
</form>
{include file="templates/footer.tpl"}
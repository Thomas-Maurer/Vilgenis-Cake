<?php
echo $this->Html->div('Header');echo $this->Html->div('row');echo $this->Html->div('headerImage');echo $this->Html->div('panel pull-right ');echo $this->Html->div('loginMenu loginbox');
echo $this->Html->div('Header');
?>
<form class="form-inline" role="form">
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Login</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Login">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default">Connexion</button>
</form>
<!--Fin Header-->
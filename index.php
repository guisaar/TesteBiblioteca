<?php

?>

<!DOCTYPE html>
<html>
<body>

<h2>Fale Conosco</h2>

<form action="/action_page.php">
<fieldset id="dadosUsuario"><legend> Dados Pessoais </legend>
<p><label for="cNome"> Primeiro nome:(<Span>*</Span>)</label>
  <input type="text" name="txtNome" id="cNome" size="20"  maxlength="20"  placeholder="digite seu nome aqui"></p>
  <!-- Size tamanho da caixa   maxlength quanto eu posso armazenar --> 
  
 <p><label for="cSobrnome"> Sobrenome(<Span>*</Span>) </label>
  <input type="text" name="txtSobrenome" id="cSobrnome"  size="60" maxlength="60" placeholder="digite seu sobrenome"></p>
  <p><label for="cEmail" >E-mail:(<Span>*</Span>)  </label>
  <input type="email"name="txtEmail" id="cEmail"  size="40" maxlength="40" placeholder="fulano@mail.com"></p>
  <label for="cTelefone"> Telefone:</label>
  <input type="text" name="txtTelefone" id="cTelefone"  size="13" maxlength="13" placeholder="(DD)999999999">
  <p><label for="cAssunto"> Assunto(<Span>*</Span>)</label><br>
  <Select name="cxsAssunto" id="cAssunto"> 
  <option value="">Escolha um assunto</option>
   <option value="duvida">Dúvida</option>
   <option value="sugestao">Sugestão</option>
   </Select></p>
   <fieldset id="cSexo"><legend>Sexo</legend>
   <input type="radio" name="radSexo" id="cMasc"  checked/><label for="cMasc">Masculino</label><br>
   <input type="radio" name="radSexo" id="cFem"  /><label for="cFem">Feminino</label><br>
  </fieldset>
  
  
  <p><input type="submit" value="Ok"></p>
    </fieldset>
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>


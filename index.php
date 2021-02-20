<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>

    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <!-- é do bulma, centraliza o formulário no meio -->
                <div class="column is-half"> <!-- sempre criar o formulário e botões dentro desta classe de column --> 
                    <h1 class="title has-text-centered">Validação de Formulário com Javascript</h1>

                    <form action="enviar.php" method="GET" onsubmit="return valida_form(this)"> <!-- quando clicar no btn de enviar, já é redirecionado para o enviar.php -->

                        <div class="field">
                            <label class="label">Nome</label>
                            <div class="control">
                                <input name="nome" id="nome" class="input" type="text" placeholder="Seu nome">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">E-mail</label>
                            <div class="control">
                                <input name="email" id="email" class="input" placeholder="Seu e-mail">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Assunto</label>
                            <div class="control">
                                <div class="select is-fullwidth"> <!-- classe para deixar o option com o mesmo tamanho dos inputs -->
                                    <select name="assunto" id="assunto">
                                        <option value="">Selecione uma opção</option>
                                        <option>Reportar erro</option>
                                        <option>Anúncios</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Mensagem</label>
                            <div class="control">
                                <textarea name="mensagem" id="mensagem" placeholder="Deixe sua mensagem" 
                                class="textarea" maxlength="2000"></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped"> <!-- se tiver vários botões, alinha todos sem dar quebra -->
                            <div class="control">
                                <button class="button is-primary is-normal" type="submit">Enviar</button>
                                <button class="button is-info is-normal" type="reset">Limpar</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </section>

    
    
</body>
<script type="text/javascript" language="javascript">
    function null_or_empty(str) {
        var v = document.getElementById(str).value;
        return v == null || v == "";
    }
    
    function valida_form() {
        if (null_or_empty("nome")
                && null_or_empty("email")
                && null_or_empty("assunto")
                && null_or_empty("mensagem"))               
                                   
        {
            alert('Informe um campo para envio.');
            return false;
        }
        return true;
    }
    </script>
</html>
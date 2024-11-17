<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar E-mail</title>
</head>
<body>
    <form id="Form1" name="form1" method="post" action="enviarEmail.php">
        <table while="500" border="0" align="cnter" callpadding="0">
            <tr>
                <td align="right">Nome:</td>
                <td>
                    <input type="text" name="nome" id="nome">
                </td>
            </tr>
            <tr>
                <td align="right">Assunto:</td>
                <td>
                    <input type="text" name="assunto" id="assunto">
                </td>
            </tr>
            <tr>
                <td align="right">Mensagem:</td>
                <td>
                    <textarea name="mensagem" id="mansegem" cols="45" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
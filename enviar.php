<title>enviando...</title>
<?
$nome      = $_POST["nome"];
$email   = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //função para validar a variável $email no script todo

$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT'];       //função para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a função date

//aqui envia o e-mail para você
mail ("seu@email.com",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nE-mail: $email\nMensagem: $mensagem",
      "From: $email"
     );

//aqui são as configurações para enviar o e-mail para o visitante
$site   = "digite aqui o nome do seu site";                    //o e-mail que aparecerá na caixa postal do visitante
$titulo = "digite aqui o titulo da mensagem de confirmação do envio";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, obrigado por entrar em contato conosco, muito em breve eu estarei entrando em contato com vc.";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
echo "";
echo "";
?>
<script>
alert("Mensagem enviada com sucesso")
</script>
<script>
location.href=("sucesso.html")
</script>

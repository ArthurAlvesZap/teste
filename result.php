<html>
<H1><head>PRONTO!</head></H1>
<title>PRONTO!</title>
<meta name="viewport" content=" width=device-width, initial-scale=1.0">
<style>

    head{

        color:seagreen;
    }
    h1{
        align:center;
        color:seagreen;
        text-align:center;
        font-family: 'Montserrat', sans-serif;

    }
    html{
        background:#f0f0f0;
        padding:20px;
    }

    body {
        width: 250px;
        margin: 0 auto;
    }

    .push_button {
        position: relative;
        width:220px;
        height:40px;
        text-align:center;
        color:#FFF;
        text-decoration:none;
        line-height:43px;
        font-family:'Montserrat', Helvetica;
        display: block;
        margin: 30px;
    }
    .push_button:before {
        background:#f0f0f0;
        background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#D0D0D0), to(#f0f0f0));

        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;

        -webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
        -moz-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
        box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;

        position: absolute;
        content: "";
        left: -6px; right: -6px;
        top: -6px; bottom: -10px;
        z-index: -1;
    }

    .push_button:active {
        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset;
        top:5px;
    }
    .push_button:active:before{
        top: -11px;
        bottom: -5px;
        content: "";
    }

    .red {
        text-shadow:-1px -1px 0 #A84155;
        background: #D25068;
        border:1px solid #D25068;

        background-image:-webkit-linear-gradient(top, #F66C7B, #D25068);
        background-image:-moz-linear-gradient(top, #F66C7B, #D25068);
        background-image:-ms-linear-gradient(top, #F66C7B, #D25068);
        background-image:-o-linear-gradient(top, #F66C7B, #D25068);
        background-image:linear-gradient(to bottom, #F66C7B, #D25068);

        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;

        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
        -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
        box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
    }

    .red:hover {
        background: #F66C7B;
        background-image:-webkit-linear-gradient(top, #D25068, #F66C7B);
        background-image:-moz-linear-gradient(top, #D25068, #F66C7B);
        background-image:-ms-linear-gradient(top, #D25068, #F66C7B);
        background-image:-o-linear-gradient(top, #D25068, #F66C7B);
        background-image:linear-gradient(top, #D25068, #F66C7B);
    }

    .blue {
        text-shadow:-1px -1px 0 #2C7982;
        background: #3EACBA;
        border:1px solid #379AA4;
        background-image:-webkit-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:-moz-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:-ms-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:-o-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:linear-gradient(top, #48C6D4, #3EACBA);

        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;

        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
        -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
        box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
    }

    .blue:hover {
        background: #48C6D4;
        background-image:-webkit-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:-moz-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:-ms-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:-o-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:linear-gradient(top, #3EACBA, #48C6D4);
    }
    p{
        color:#1a1a1a;
        font-family: Montserrat, sans-serif;
    }
    h2{
        font-family: 'Montserrat', sans-serif;
        color: #1a1a1a;
        width:100%;
        text-align: center;
        justify-content: center;
    }
    h1{}

</style>
<body>
<?php
$ans = $_POST['question-2-answers'];
?>

<h2>JÁ ENCONTRAMOS O PACOTE PERFEITO PARA ECONOMIA DE ENERGIA. SEGUNDOS NOSSOS ESPECIALISTAS, O MELHOR PACOTE PARA ECONOMIZAR É ESSE:</h2>
<strong><h1>↓</h1></strong>
<a class="push_button blue" href="<?=$ans; ?>">QUERO ECONOMIZAR</a>
</body>
<title><h1>PRONTO!</h1></title>

</body>
</html>


<?php
$ebilling = new PDO("sqlsrv:Server=SQL5045.site4now.net; database=DB_A57934_arthurcontacts", "DB_A57934_arthurcontacts_admin", "root1234");

$stmt = $ebilling->prepare("INSERT INTO tb_contacts (celular, tamanho, cidade, valor, desconto) VALUES (:CELULAR, :TAMANHO, :CIDADE, :VALOR, :DESCONTO)");

$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$valor = $_POST['question-1-answers'];
$tamanho = $_POST['question-2-answers'];
$desconto = $_POST['question-3-answers'];


$stmt ->bindParam(":CELULAR", $celular);
$stmt ->bindParam(":CIDADE", $cidade);
$stmt ->bindParam(":TAMANHO", $tamanho);
$stmt ->bindParam(":VALOR", $valor);
$stmt ->bindParam(":DESCONTO", $desconto);

$stmt -> execute();
?>



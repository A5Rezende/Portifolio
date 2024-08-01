<?php include("includes/head.php"); ?>
<?php include("includes/nav.php") ?>


<link rel="stylesheet" href="../assets/css/contatoStyle.css">

<div class="container">
    <form autocomplete="off">
        <h1>Entre em contato</h1>
        <div class="row">
            <div class="col">
                <input type="text" id="firstName" placeholder="Nome" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="email" id="email" placeholder="Email" required>
            </div>
            <div class="col">
                <input type="text" id="tel" placeholder="Celular" required>
            </div>
        </div>
        <div class="row">
            <h4>Assunto</h4>
            <textarea required></textarea>
        </div>
        <input type="submit" value="Enviar" id="button">
    </form>
</div>

<?php include("includes/footer.php") ?>
<?php include("includes/foot.php") ?>
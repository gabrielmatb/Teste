<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a onclick="JavaScript:location.href='Login/logout.php'">Sair</a></li>
</ul>
<nav>
    <div class="nav-wrapper indigo darken-4">
        <a href="#!" class="brand-logo">Internet</a>
        <ul class="right hide-on-med-and-down">
            <li><?php if($_SESSION['nome'] == "Admin"){ ?></li>
            <li><a href="listarRede.php">Rede</a></li>
            <li><a href="listarRoteador.php">Roteador</a></li>
            <?php
            }
            ?>
            <li><a href="listarRoteadorRede.php">Movimentação</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $_SESSION['nome'];?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<div class='navbar navbar-inverse navbar-fixed-top' id='top-menu'>
<div class='navbar-inner'>
<div class='container'>
<button class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse' type='button'>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</button>
<a class='brand' href='<?php echo url_for('intro/index')?>'><i class="icon-leaf icon-white hidden-phone"></i>camb!ofac!l</a>
<div class='nav-collapse collapse'>
<ul class='nav'>
<li class='hidden-phone'>
<a href='<?php echo url_for('intro/index')?>'><i class="icon-home"></i>Inicio</a>
</li>
<li>
<a href='<?php echo url_for('buscarArticulos/index')?>'><i class="icon-list"></i>Articulos</a>
</li>
<li>
<a href='<?php echo url_for('institucionesBeneficencia/index')?>'><i class="icon-list"></i>Donaciones</a>
</li>
<li>
<a href='<?php echo url_for('administracionMensajes/index')?>'><i class="icon-envelope"></i>Mensajes</a>
</li>
</ul>
<ul class='nav pull-right hidden-phone'>
<li>
<a href='<?php echo url_for('verTrueques/index')?>'>
<i class='icon-resize-full icon-white hidden-phone'></i>
Intercambios
</a>
</li>
<li>
<a href='<?php echo url_for('anuncios/new')?>'>
<i class='icon-edit icon-white hidden-phone'></i>
Anuncios
</a>
</li>

<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
<i class="icon-user icon-white hidden-phone"></i>Mi cuenta
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li>
    <p>&nbsp;&nbsp;
        <a href="<?php echo url_for('cuenta/index')?>" title="<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?>">
            <?php foreach ($fanuncioss as $fanuncios): ?>
                 <a href="<?php echo url_for('cuenta/index')?>" title="<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?>" class="avatar-sm-container"><img src="/uploads/fotos/s_<?php echo $fanuncios['foto']?>" alt="<?php echo $fanuncios['foto'] ?>" class="img-rounded user-avatar-sm" width="40" height="40"/></a>
            <?php endforeach; ?>
        </a>
        &nbsp;<strong><em><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></em></strong>
    </p>
</li>
<li>
<a href="<?php echo url_for('anuncios/new')?>" title=""><i class="icon-tasks"></i> Crear nuevo anuncio</a>
</li>
<li>
<a href="<?php echo url_for('cuenta/index')?>" title=""><i class="icon-wrench"></i> Configurar cuenta</a>
</li>
<li>
<a href="<?php echo url_for('administracionMensajes/index') ?>" title=""><i class="icon-envelope"></i> Mensajes</a>
</li>
<li class="divider"></li>
<li>
<a href="<?php echo url_for('http://localhost:8687/frontend_dev.php/logout')?>" title=""><i class="icon-off"></i> Salir</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>

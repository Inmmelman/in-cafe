<div class="masthead">
    <ul class="nav nav-pills pull-right">
        <?php if (!empty($current_user)) :?>
            <li><img width="50" src="<?php echo $current_user->social->avatar ?>"></li>
        <?php endif; ?>
        <li <?php echo check_class('home'); ?>><a href="<?php echo site_url(); ?>"><?php e( lang('bf_home') ); ?></a></li>
        <?php if (empty($current_user)) :?>
            <li><a href="<?php echo site_url(LOGIN_URL); ?>">Авторизация</a></li>
            <li><a href="<?php echo site_url(REGISTER_URL) ?>" >Регистрация</a></li>
        <?php else: ?>

            <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('/users/profile'); ?>"> <?php e(lang('bf_user_settings')); ?> </a></li>
            <li><a href="<?php echo site_url('/logout') ?>"><?php e( lang('bf_action_logout')); ?></a></li>
        <?php endif; ?>
    </ul>

    <h3 class="muted"><?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Bonfire'; ?></h3>
</div>

<hr />
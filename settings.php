<?php if ($_POST['submit']) {
    update_option('wpcm_brazil_conect_allowed_users', sanitize_text_field($_POST['allowed_users']));
    echo '<div class="updated"><p>Configurações salvas.</p></div>';
} ?>

<div class="wrap">
    <h2>Configurações do WPCM Brazil Conect</h2>
    <form method="post" action="">
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Usuários Permitidos</th>
                <td><input type="text" name="allowed_users" value="<?php echo esc_attr(get_option('wpcm_brazil_conect_allowed_users')); ?>" class="regular-text" />
                <p class="description">Insira os logins dos usuários permitidos, separados por vírgula (,).</p></td>
            </tr>
        </table>
        <?php submit_button('Salvar Configurações'); ?>
    </form>
</div>

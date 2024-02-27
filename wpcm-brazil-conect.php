<?php
/**
 * Plugin Name: WPCM Brazil Conect
 * Description: Restringe o acesso ao admin baseado na lista de usuários permitidos e bloqueia redirecionamentos não permitidos.
 * Version: 1.3
 * Author: Daniel Oliveira da Paixao
 */

class WPCMBrazilConect {
    public function __construct() {
        register_activation_hook(__FILE__, [$this, 'install']);
        add_action('admin_menu', [$this, 'add_admin_menu']);
        add_action('init', [$this, 'restrict_wp_admin_access']);
        add_action('wp_enqueue_scripts', [$this, 'wpcm_noredirect_url_enqueue_script']);
    }

    public function install() {
        add_option('wpcm_brazil_conect_allowed_users', '');
    }

    public function add_admin_menu() {
        add_menu_page('WPCM Brazil Conect', 'WPCM Brazil Conect', 'manage_options', 'wpcm-brazil-conect', [$this, 'settings_page'], 'dashicons-admin-site-alt3');
    }

    public function settings_page() {
        require_once('settings.php');
    }

    public function restrict_wp_admin_access() {
        if (is_admin() && !defined('DOING_AJAX')) {
            $allowed_users = explode(',', get_option('wpcm_brazil_conect_allowed_users'));
            $current_user = wp_get_current_user();

            if (!in_array($current_user->user_login, $allowed_users)) {
                wp_redirect(site_url('/saida.php'));
                exit;
            }
        }
    }

    public function wpcm_noredirect_url_enqueue_script() {
        // Inclui o arquivo com a lista de domínios permitidos
        $allowedDomains = get_option('wpcm_brazil_conect_allowed_domains', []);
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var allowedDomains = <?php echo json_encode($allowedDomains); ?>;
            document.addEventListener('click', function(e) {
                var target = e.target.closest('a');
                if (target) {
                    var destinationURL = new URL(target.href);
                    var domain = destinationURL.hostname;
                    if (!allowedDomains.includes(domain)) {
                        e.preventDefault();
                        alert('Redirecionamento bloqueado por motivos de segurança.');
                    }
                }
            });
        });
        </script>
        <?php
    }
}

new WPCMBrazilConect();

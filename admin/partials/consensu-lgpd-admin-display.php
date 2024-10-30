<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://integration.consensu.io
 * @since      1.0.0
 *
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/admin/partials
 * 
 */

?>

<div class="wrap">
    <h2><?php _e('LGPD Consensu.IO Plugin', 'consensu-lgpd') ?>
        <small>(v<?php echo CONSENSU_LGPD_VERSION; ?>)</small>
    </h2>


    <?php if( isset($_GET['settings-updated']) ) { ?>
<div id=”message” class=”updated”>
<p><strong><?php _e('Settings saved.') ?></strong></p>
</div>
<?php } ?>

    <form method="post" id="consensu_form" novalidate>
    <input type="hidden" name="consensu_form" value="true"/>
        <div>
            <section id="c-key">
                <table class="form-table">
                    <tr>
                        <th scope="row"><?php _e('Chave de Identificação (KEY)', CONSENSU_LGPD_OPTION_NAME) ?> :</th>
                        <td>
                            <input type="text" size="100" placeholder="" name="consensu_options[client_key]" value="<?php echo esc_attr($options['client_key']); ?>">
                            <a target="_blank" href="https://app.consensu.io/sites"><i class="dashicons-before dashicons-external"></i></a>
                            <br>
                            <p class="description"><?php _e('Insira no campo acima a sua Key - Ex:', CONSENSU_LGPD_OPTION_NAME) ?>
                                ("<code>d41d8cd98f00b204e9800998ecf8427e.1d8cd98f00b204e9800998ecf8427</code>")</p>
                        </td>
                    </tr>
                </table>
            </section>
           
            <section id="c-troubleshoot" class="tab-content">
                <table class="form-table">
                    <tr>
                        <th scope="row"><?php _e('Debug mode', CONSENSU_LGPD_OPTION_NAME) ?> :</th>
                        <td><label><input type="checkbox" name="consensu_options[debug_mode]"
                                          value="1" <?php checked($options['debug_mode'], 1) ?>><?php _e('Habilitar modo debug para administradores', CONSENSU_LGPD_OPTION_NAME) ?>
                                </label>

                            <p class="description"><?php _e("Deve ser usado apenas temporariamente ou durante o desenvolvimento, não se esqueça de desativá-lo na produção", CONSENSU_LGPD_OPTION_NAME) ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><?php _e('Debug database options', CONSENSU_LGPD_OPTION_NAME) ?> :</th>
                        <td>
                            <pre class="db-dump"><?php print_r($options); ?></pre>
                        </td>
                    </tr>
                </table>
            </section>
        </div> 
        <?php submit_button() ?>
    </form>
    <hr>
    <p>
        <?php _e('Desenvolvido com muita dedicação e ❤️ especialmente para sua empresa / website.', CONSENSU_LGPD_OPTION_NAME) ?> | <a target="_blank" href="https://consensu.io">Consensu.io</a> |
        ★ <?php _e('Rate this on', CONSENSU_LGPD_OPTION_NAME) ?>
        <a href="https://wordpress.org/support/plugin/consensu-io/reviews/?filter=5" target="_blank"><?php _e('WordPress') ?></a>
    </p>
</div> <!-- .wrap-->

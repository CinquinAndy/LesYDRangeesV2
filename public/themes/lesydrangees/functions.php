<?php

use App\Blocs\BlocActivite;
use App\Blocs\BlocArticle;
use App\Blocs\BlocHero;
use App\Blocs\BlocPolitiqueConfidentialite;
use App\Blocs\BlocPrestation;

use Mailgun\Mailgun;


// call api func
function callAPI($token)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('secret' => env('CAPCHA'), 'response' => $token)
    ));

    return curl_exec($curl);
}

function traitement_formulaire_contact()
{
    unset($_GET['error'], $_GET['fine']);
    if (isset($_POST['envoyer-message']) && isset($_POST['message-verif'])) {
        $string_exp = "/^[A-Za-z0-9 .'-]+$/";
        $email_to = "les.yd.rangees@gmail.com";
        $email_subject = "lesydrangees.com - Mail de contact";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $phone_exp = '/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/';

        if (wp_verify_nonce($_POST['message-verif'], 'envoyer-message')) {
            // On vérifie que le champ "Pot de miel" est vide
            if (isset($_POST['raison']) && empty($_POST['raison'])) {
                if ($_POST['g-recaptcha-response'] !== "") {
                    $make_call = callAPI($_POST['g-recaptcha-response']);
                    $response = json_decode($make_call);
                    if ($response->success === false) {
                        $url = add_query_arg('erreur', 'token-invalide', wp_get_referer());
                        wp_safe_redirect($url);
                        exit();
                    } else {
                        if ($_POST['nom'] != "") {
                            $name = trim($_POST['nom']);
                            $name = strip_tags($name);
                            $name = filter_var($name, FILTER_SANITIZE_STRING);
                            $name = htmlspecialchars($name);

                            if (!preg_match($string_exp, $name)) {
                                $url = add_query_arg('erreur', 'nom-invalide', wp_get_referer());
                                wp_safe_redirect($url);
                                exit();
                            }
                        }
                        if ($_POST['prenom'] != "") {
                            $prenom = trim($_POST['prenom']);
                            $prenom = strip_tags($prenom);
                            $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
                            $prenom = htmlspecialchars($prenom);

                            if (!preg_match($string_exp, $prenom)) {
                                $url = add_query_arg('erreur', 'prenom-invalide', wp_get_referer());
                                wp_safe_redirect($url);
                                exit();
                            }
                        }
                        if ($_POST['mail'] != "") {
                            $mail = trim($_POST['mail']);
                            $mail = filter_var($mail, FILTER_SANITIZE_STRING);
                            $mail = htmlspecialchars($mail);

                            if (!preg_match($email_exp, $mail)) {
                                $url = add_query_arg('erreur', 'mail-invalide', wp_get_referer());
                                wp_safe_redirect($url);
                                exit();
                            }
                        }
                        if ($_POST['telephone'] != "") {
                            $tel = trim($_POST['telephone']);
                            $tel = filter_var($tel, FILTER_SANITIZE_NUMBER_INT);
                            $tel = htmlspecialchars($tel);

                            if (!preg_match($phone_exp, $tel)) {
                                $url = add_query_arg('erreur', 'tel-invalide', wp_get_referer());
                                wp_safe_redirect($url);
                                exit();
                            }
                        }
                        if ($_POST['ville'] != "") {
                            $ville = trim($_POST['ville']);
                            $ville = strip_tags($ville);
                            $ville = filter_var($ville, FILTER_SANITIZE_STRING);
                            $ville = htmlspecialchars($ville);

                            if (!preg_match($string_exp, $ville)) {
                                $url = add_query_arg('erreur', 'ville-invalide', wp_get_referer());
                                wp_safe_redirect($url);
                                exit();
                            }
                        }
                        if ($_POST['message'] != "") {
                            $message = trim($_POST['message']);
                            $message = strip_tags($message);
                            $message = htmlspecialchars($message);
                            $message = filter_var($message, FILTER_SANITIZE_STRING);

                            if (!preg_match($string_exp, $prenom)) {
                                $url = add_query_arg('erreur', 'message-invalide', wp_get_referer());
                                wp_safe_redirect($url);
                                exit();
                            }
                        }

                        $email_message = "
                            <html>
                            <body>
                            <div style = 'overflow: hidden;' >
                            <font size = '-1' >
                            <u ></u >
                            <div style = 'margin:0;padding:10px 0' bgcolor = '#ffffff' marginwidth = '0' marginheight = '0' >
                            <br >
                            <table border = '0' width = '100%' height = '100%' cellpadding = '0' cellspacing = '0' bgcolor = '#ffffff' >
                            <tbody ><tr > <td align = 'center' valign = 'top' bgcolor = '#ffffff' style = 'background-color:#ffffff' >
                            <table border = '0' width = '600' cellpadding = '0' cellspacing = '0' bgcolor = '#ffffff' > <tbody ><tr >
                            <td bgcolor = '#ffffff' style = 'background-color:#ffffff;padding-left:30px;padding-right:30px;font-size:14px;line-height:20px;font-family:Helvetica,sans-serif;color:#333' >
                            <div style = 'text-align:center;margin-bottom:10px;margin-top:20px' >
                            <img alt = ' ' height = '60' width = '250' style = 'height:60px;width:250px'
                            src = 'https://lesydrangees.com/themes/lesydrangees/assets/images/logo.svg' >
                            </a >
                            </div >
                            Récapitulatif du mail en provenance de https://lesydrangees.com/ :
                            <br ><br >
                            Nom / Prénom : " . $name . "
                            <br>
                            Ville : " . $ville . "
                            <br>
                            mail : <a style = 'font-style:italic;color:#627BDF'
                            href = 'mailto:" . $mail . "'>
                            " . $mail . "
                            </a >
                            <br>
                            Tél : " . $tel . "
                            <br>
                            <br>
                            Message :
                            <br>
                            <div style = 'text-align:center' >
                            <font color = '#888888' >
                            " . $message . "
                            <br></font>
                            <br>
                            <br>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            <br>
                            <br>
                            </div>
                            </font>
                            </div>
                            </body>
                            </html>";


                        $secret_mail_private = env("WP_MAILGUN_PRIVATE", "");
                        $secret_mail_public = env("WP_MAILGUN_PUBLIC", "");
                        $secret_mail_webhook = env("WP_MAILGUN_WEBHOOK", "");

                        $mg = Mailgun::create($secret_mail_private, 'https://api.mailgun.net');

                        // Now, compose and send your message.
                        // $mg->messages()->send($domain, $params);
                        $mg->messages()->send('sandbox4a143b58cf0a4ccdbfff1e1f410de28d.mailgun.org', [
                            'from' => 'postmaster@sandbox4a143b58cf0a4ccdbfff1e1f410de28d.mailgun.org',
                            'to' => 'les.yd.rangees@gmail.com',
                            'subject' => 'Message de ' . $name . ' depuis le site lesydrangees.com',
                            'text' => $email_message
                        ]);

                        $url = add_query_arg('fine', 'message-valide', wp_get_referer());
                        wp_safe_redirect($url);
                        exit();
                    }
                }
            }
            // Si le champ anti bot n'était pas vide
            $url = add_query_arg('erreur', 'message-invalide', wp_get_referer());
            wp_safe_redirect($url);
            exit();
        }
    }
}

add_action('template_redirect', 'traitement_formulaire_contact');

// adding css | js
function lesydrangees_enqueue_styles_scripts()
{
    $dependencies = [];
    if (!is_home() && !is_single()) {
        wp_register_style('nav', get_template_directory_uri() . '/assets/css/nav.css');
        $dependencies[] = 'nav';
    }
    wp_register_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    $dependencies[] = 'footer';
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
    $dependencies[] = 'style';
    wp_register_style('text_gradient', get_template_directory_uri() . '/assets/css/text_gradient.css');
    $dependencies[] = 'text_gradient';
    wp_register_style('menu_icon', get_template_directory_uri() . '/assets/css/menu_icon.css');
    $dependencies[] = 'menu_icon';

    if (!is_page('contact')) {
        wp_register_style('aos', get_template_directory_uri() . '/assets/css/aos.css');
        $dependencies[] = 'aos';
        wp_enqueue_script('lesydrangees-script-aos', get_template_directory_uri() . '/assets/js/aos.js', 'lesydrangees-script-aos', '1', true);
    }

    if (is_front_page()) {
        wp_register_style('accueil', get_template_directory_uri() . '/assets/css/landing.css');
        $dependencies[] = 'accueil';
        wp_enqueue_script('lesydrangees-script-home', get_template_directory_uri() . '/assets/js/main.js', 'lesydrangees-script-aos', '1', true);
    } else if (is_home() || is_single()) {
        if (is_home()) {
            wp_register_style('blog_general', get_template_directory_uri() . '/assets/css/blog_general.css');
            $dependencies[] = 'blog_general';
        }
        // article ou blog
        wp_register_style('blog', get_template_directory_uri() . '/assets/css/blog.css');
        $dependencies[] = 'blog';
        wp_register_style('nav_blog', get_template_directory_uri() . '/assets/css/nav_blog.css');
        $dependencies[] = 'nav_blog';
        wp_enqueue_script('lesydrangees-script-blog', get_template_directory_uri() . '/assets/js/main_blog.js', 'lesydrangees-script-aos', '1', true);
    } else if (is_page('notre-activite')) {
        wp_register_style('activity', get_template_directory_uri() . '/assets/css/activity.css');
        $dependencies[] = 'activity';
        wp_enqueue_script('lesydrangees-script-activity', get_template_directory_uri() . '/assets/js/main_activity.js', 'lesydrangees-script-aos', '1', true);
    } else if (is_page('contact')) {
        wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css');
        $dependencies[] = 'contact';
        wp_enqueue_script('lesydrangees-script-contact', get_template_directory_uri() . '/assets/js/main_contact.js', 'lesydrangees-script-aos', '1', true);
    } else if (is_page('nos-prestations')) {
        wp_register_style('accueil', get_template_directory_uri() . '/assets/css/landing.css');
        wp_register_style('prestation', get_template_directory_uri() . '/assets/css/prestation.css');
        $dependencies[] = 'prestation';
        wp_enqueue_script('lesydrangees-script-prestation', get_template_directory_uri() . '/assets/js/main_prestation.js', 'lesydrangees-script-aos', '1', true);
    } else if (is_page("politique-de-confidentialite")) {
        wp_enqueue_script('lesydrangees-script-politique_confidentialite', get_template_directory_uri() . '/assets/js/main_mentions_legales.js', 'lesydrangees-script-aos', '1', true);
    }

    wp_enqueue_style('lesydrangees-style', get_stylesheet_uri(), $dependencies);

    if (!is_admin()) {
        // optimisation
        wp_dequeue_style('wp-block-library');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');

        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');

        wp_deregister_script('wp-embed');
        wp_deregister_script('wp-emoji');
        wp_deregister_script('jquery');  // Bonus: remove jquery too if it's not required
    }
}

function add_css_wp_edit()
{
// add visual style on admin page - loading all style & scripts
    wp_enqueue_style('app', get_theme_file_uri('assets/app.css'), ['wp-edit-blocks']);
    wp_enqueue_style('nav', get_theme_file_uri('assets/css/nav.css'), ['wp-edit-blocks']);
    wp_enqueue_style('footer', get_theme_file_uri('assets/css/footer.css'), ['wp-edit-blocks']);
    wp_enqueue_style('style', get_theme_file_uri('assets/css/style.css'), ['wp-edit-blocks']);
    wp_enqueue_style('text_gradient', get_theme_file_uri('assets/css/text_gradient.css'), ['wp-edit-blocks']);
    wp_enqueue_style('menu_icon', get_theme_file_uri('assets/css/menu_icon.css'), ['wp-edit-blocks']);
    wp_enqueue_style('accueil', get_theme_file_uri('assets/css/landing.css'), ['wp-edit-blocks']);

    wp_enqueue_script('lesydrangees-script-home', get_template_directory_uri() . '/assets/js/main.js', '', '1', true);
    wp_enqueue_style('blog', get_theme_file_uri('assets/css/blog.css'), ['wp-edit-blocks']);
    wp_enqueue_style('nav_blog', get_theme_file_uri('assets/css/nav_blog.css'), ['wp-edit-blocks']);
    wp_enqueue_script('lesydrangees-script-blog', get_template_directory_uri() . '/assets/js/main_blog.js', '', '1', true);
    wp_enqueue_style('activity', get_theme_file_uri('assets/css/activity.css'), ['wp-edit-blocks']);
    wp_enqueue_style('pure_slider', get_theme_file_uri('assets/css/pure_slider.css'), ['wp-edit-blocks']);
    wp_enqueue_script('lesydrangees-script-activity', get_template_directory_uri() . '/assets/js/main_activity.js', '', '1', true);
    wp_enqueue_style('contact', get_theme_file_uri('assets/css/contact.css'), ['wp-edit-blocks']);
    wp_enqueue_script('lesydrangees-script-contact', get_template_directory_uri() . '/assets/js/main_contact.js', '', '1', true);
    wp_enqueue_style('prestation', get_theme_file_uri('assets/css/prestation.css'), ['wp-edit-blocks']);
    wp_enqueue_script('lesydrangees-script-prestation', get_template_directory_uri() . '/assets/js/main_prestation.js', '', '1', true);
}

add_action('enqueue_block_editor_assets', 'add_css_wp_edit');

add_action('wp_enqueue_scripts', 'lesydrangees_enqueue_styles_scripts');

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu('lesydrangees_menu', 'menu personnalisée pour lesydrangees');
    add_theme_support('editor-styles');
});


add_filter('block_categories_all', function (array $categories) {
    return array_merge(
        $categories,
        [
            [
                'slug' => 'lesydrangees',
                'title' => 'Les YD Rangées',
            ],
        ]
    );
}, 10, 1);


BlocHero::register();
BlocActivite::register();
BlocPrestation::register();
BlocArticle::register();
BlocPolitiqueConfidentialite::register();

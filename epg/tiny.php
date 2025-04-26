<?php
//Default Configuration
$CONFIG = '{"lang":"en","error_reporting":false,"show_hidden":false,"hide_Cols":false,"theme":"light"}';

/**
 * H3K ~ Tiny File Manager V2.6
 * @author CCP Programmers
 * @github https://github.com/prasathmani/tinyfilemanager
 * @link https://tinyfilemanager.github.io
 */

//TFM version
define('VERSION', '2.6');

//Application Title
define('APP_TITLE', 'Tiny File Manager');

// --- EDIT BELOW CONFIGURATION CAREFULLY ---

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'kof97zip' => '$2y$10$9PWx8bz/6PN.OfaPHy9NFO8Z5QtTHwYvVW7SKkq.CJreUClImZ45m',//kof97zip,kof97boss
);

// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
    'user'
);

// Global readonly, including when auth is not being used
$global_readonly = false;

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$directories_users = array();

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
$default_timezone = 'Etc/UTC'; // UTC

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
//make sure update $root_url in next section
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
// $_SERVER['HTTP_HOST'].'/folder'
$http_host = $_SERVER['HTTP_HOST'];

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/function.date.php
$datetime_format = 'm/d/Y g:i A';

// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
$path_display_mode = 'full';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = '';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = '';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', '/path/to/folder', ...)
$exclude_items = array();

// Online office Docs Viewer
// Available rules are 'google', 'microsoft' or false
// Google => View documents using Google Docs Viewer
// Microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'google';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;

// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$max_upload_size_bytes = 5000000000; // size 5,000,000,000 bytes (~5GB)

// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$upload_chunk_size_bytes = 2000000; // chunk size 2,000,000 bytes (~2MB)

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

// if User has the external config file, try to use it to override the default config above [config.php]
// sample config - https://tinyfilemanager.github.io/config-sample.txt
$config_file = __DIR__ . '/config.php';
if (is_readable($config_file)) {
    @include($config_file);
}

// External CDN resources that can be used in the HTML (replace for GDPR compliance)
$external = array(
    'css-bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">',
    'css-dropzone' => '<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">',
    'css-font-awesome' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">',
    'css-highlightjs' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/' . $highlightjs_style . '.min.css">',
    'js-ace' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ace.js"></script>',
    'js-bootstrap' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>',
    'js-dropzone' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>',
    'js-jquery' => '<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>',
    'js-jquery-datatables' => '<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>',
    'js-highlightjs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>',
    'pre-jsdelivr' => '<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>',
    'pre-cloudflare' => '<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>'
);

// --- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL ---

// max upload file size
define('MAX_UPLOAD_SIZE', $max_upload_size_bytes);

// upload chunk size
define('UPLOAD_CHUNK_SIZE', $upload_chunk_size_bytes);

// private key and session name to store to the session
if (!defined('FM_SESSION_ID')) {
    define('FM_SESSION_ID', 'filemanager');
}

// Configuration
$cfg = new FM_Config();

// Default language
$lang = isset($cfg->data['lang']) ? $cfg->data['lang'] : 'en';

// Show or hide files and folders that starts with a dot
$show_hidden_files = isset($cfg->data['show_hidden']) ? $cfg->data['show_hidden'] : true;

// PHP error reporting - false = Turns off Errors, true = Turns on Errors
$report_errors = isset($cfg->data['error_reporting']) ? $cfg->data['error_reporting'] : true;

// Hide Permissions and Owner cols in file-listing
$hide_Cols = isset($cfg->data['hide_Cols']) ? $cfg->data['hide_Cols'] : true;

// Theme
$theme = isset($cfg->data['theme']) ? $cfg->data['theme'] : 'light';

define('FM_THEME', $theme);

//available languages
$lang_list = array(
    'en' => 'English'
);

if ($report_errors == true) {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 1);
} else {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
}

// if fm included
if (defined('FM_EMBED')) {
    $use_auth = false;
    $sticky_navbar = false;
} else {
    @set_time_limit(600);

    date_default_timezone_set($default_timezone);

    ini_set('default_charset', 'UTF-8');
    if (version_compare(PHP_VERSION, '5.6.0', '<') && function_exists('mb_internal_encoding')) {
        mb_internal_encoding('UTF-8');
    }
    if (function_exists('mb_regex_encoding')) {
        mb_regex_encoding('UTF-8');
    }

    session_cache_limiter('nocache'); // Prevent logout issue after page was cached
    session_name(FM_SESSION_ID);
    function session_error_handling_function($code, $msg, $file, $line)
    {
        // Permission denied for default session, try to create a new one
        if ($code == 2) {
            session_abort();
            session_id(session_create_id());
            @session_start();
        }
    }
    set_error_handler('session_error_handling_function');
    session_start();
    restore_error_handler();
}

//Generating CSRF Token
if (empty($_SESSION['token'])) {
    if (function_exists('random_bytes')) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}

if (empty($auth_users)) {
    $use_auth = false;
}

$is_https = isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)
    || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https';

// update $root_url based on user specific directories
if (isset($_SESSION[FM_SESSION_ID]['logged']) && !empty($directories_users[$_SESSION[FM_SESSION_ID]['logged']])) {
    $wd = fm_clean_path(dirname($_SERVER['PHP_SELF']));
    $root_url =  $root_url . $wd . DIRECTORY_SEPARATOR . $directories_users[$_SESSION[FM_SESSION_ID]['logged']];
}
// clean $root_url
$root_url = fm_clean_path($root_url);

// abs path for site
defined('FM_ROOT_URL') || define('FM_ROOT_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . (!empty($root_url) ? '/' . $root_url : ''));
defined('FM_SELF_URL') || define('FM_SELF_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . $_SERVER['PHP_SELF']);

// logout
if (isset($_GET['logout'])) {
    unset($_SESSION[FM_SESSION_ID]['logged']);
    unset($_SESSION['token']);
    fm_redirect(FM_SELF_URL);
}

// Validate connection IP
if ($ip_ruleset != 'OFF') {
    function getClientIP()
    {
        if (array_key_exists('HTTP_CF_CONNECTING_IP', $_SERVER)) {
            return  $_SERVER["HTTP_CF_CONNECTING_IP"];
        } else if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            return  $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER['REMOTE_ADDR'];
        } else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        return '';
    }

    $clientIp = getClientIP();
    $proceed = false;
    $whitelisted = in_array($clientIp, $ip_whitelist);
    $blacklisted = in_array($clientIp, $ip_blacklist);

    if ($ip_ruleset == 'AND') {
        if ($whitelisted == true && $blacklisted == false) {
            $proceed = true;
        }
    } else
    if ($ip_ruleset == 'OR') {
        if ($whitelisted == true || $blacklisted == false) {
            $proceed = true;
        }
    }

    if ($proceed == false) {
        trigger_error('User connection denied from: ' . $clientIp, E_USER_WARNING);

        if ($ip_silent == false) {
            fm_set_msg(lng('Access denied. IP restriction applicable'), 'error');
            fm_show_header_login();
            fm_show_message();
        }
        exit();
    }
}

// Checking if the user is logged in or not. If not, it will show the login form.
if ($use_auth) {
    if (isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']])) {
        // Logged
    } elseif (isset($_POST['fm_usr'], $_POST['fm_pwd'], $_POST['token'])) {
        // Logging In
        sleep(1);
        if (function_exists('password_verify')) {
            if (isset($auth_users[$_POST['fm_usr']]) && isset($_POST['fm_pwd']) && password_verify($_POST['fm_pwd'], $auth_users[$_POST['fm_usr']]) && verifyToken($_POST['token'])) {
                $_SESSION[FM_SESSION_ID]['logged'] = $_POST['fm_usr'];
                fm_set_msg(lng('You are logged in'));
                fm_redirect(FM_SELF_URL);
            } else {
                unset($_SESSION[FM_SESSION_ID]['logged']);
                fm_set_msg(lng('Login failed. Invalid username or password'), 'error');
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg(lng('password_hash not supported, Upgrade PHP version'), 'error');;
        }
    } else {
        // Form
        unset($_SESSION[FM_SESSION_ID]['logged']);
        fm_show_header_login();
?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center align-content-center h-100vh">
                    <div class="card-wrapper">
                        <div class="card fat" data-bs-theme="<?php echo FM_THEME; ?>">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                        <div class="brand">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" M1008 width="100%" height="80px" viewBox="0 0 238.000000 140.000000" aria-label="H3K Tiny File Manager">
                                                <g transform="translate(0.000000,140.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                    <path d="M160 700 l0 -600 110 0 110 0 0 260 0 260 70 0 70 0 0 -260 0 -260 110 0 110 0 0 600 0 600 -110 0 -110 0 0 -260 0 -260 -70 0 -70 0 0 260 0 260 -110 0 -110 0 0 -600z" />
                                                    <path fill="#003500" d="M1008 1227 l-108 -72 0 -117 0 -118 110 0 110 0 0 110 0 110 70 0 70 0 0 -180 0 -180 -125 0 c-69 0 -125 -3 -125 -6 0 -3 23 -39 52 -80 l52 -74 73 0 73 0 0 -185 0 -185 -70 0 -70 0 0 115 0 115 -110 0 -110 0 0 -190 0 -190 181 0 181 0 109 73 108 72 1 181 0 181 -69 48 -68 49 68 50 69 49 0 249 0 248 -182 -1 -183 0 -107 -72z" />
                                                    <path d="M1640 700 l0 -600 110 0 110 0 0 208 0 208 35 34 35 34 35 -34 35 -34 0 -208 0 -208 110 0 110 0 0 212 0 213 -87 87 -88 88 88 88 87 87 0 213 0 212 -110 0 -110 0 0 -208 0 -208 -70 -69 -70 -69 0 277 0 277 -110 0 -110 0 0 -600z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="card-title"><?php echo APP_TITLE; ?></h1>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="fm_usr" class="pb-2"><?php echo lng('Username'); ?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fm_pwd" class="pb-2"><?php echo lng('Password'); ?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="mb-3">
                                        <?php fm_show_message(); ?>
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?php echo lng('Login'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            &mdash;&mdash; &copy;
                            <a href="https://tinyfilemanager.github.io/" target="_blank" class="text-decoration-none text-muted" data-version="<?php echo VERSION; ?>">CCP Programmers</a> &mdash;&mdash;
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
        fm_show_footer_login();
        exit;
    }
}

// update root path
if ($use_auth && isset($_SESSION[FM_SESSION_ID]['logged'])) {
    $root_path = isset($directories_users[$_SESSION[FM_SESSION_ID]['logged']]) ? $directories_users[$_SESSION[FM_SESSION_ID]['logged']] : $root_path;
}

// clean and check $root_path
$root_path = rtrim($root_path, '\\/');
$root_path = str_replace('\\', '/', $root_path);
if (!@is_dir($root_path)) {
    echo "<h1>" . lng('Root path') . " \"{$root_path}\" " . lng('not found!') . " </h1>";
    exit;
}

defined('FM_SHOW_HIDDEN') || define('FM_SHOW_HIDDEN', $show_hidden_files);
defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $root_path);
defined('FM_LANG') || define('FM_LANG', $lang);
defined('FM_FILE_EXTENSION') || define('FM_FILE_EXTENSION', $allowed_file_extensions);
defined('FM_UPLOAD_EXTENSION') || define('FM_UPLOAD_EXTENSION', $allowed_upload_extensions);
defined('FM_EXCLUDE_ITEMS') || define('FM_EXCLUDE_ITEMS', (version_compare(PHP_VERSION, '7.0.0', '<') ? serialize($exclude_items) : $exclude_items));
defined('FM_DOC_VIEWER') || define('FM_DOC_VIEWER', $online_viewer);
define('FM_READONLY', $global_readonly || ($use_auth && !empty($readonly_users) && isset($_SESSION[FM_SESSION_ID]['logged']) && in_array($_SESSION[FM_SESSION_ID]['logged'], $readonly_users)));
define('FM_IS_WIN', DIRECTORY_SEPARATOR == '\\');

// always use ?p=
if (!isset($_GET['p']) && empty($_FILES)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get path
$p = isset($_GET['p']) ? $_GET['p'] : (isset($_POST['p']) ? $_POST['p'] : '');

// clean path
$p = fm_clean_path($p);

// for ajax request - save
$input = file_get_contents('php://input');
$_POST = (strpos($input, 'ajax') != FALSE && strpos($input, 'save') != FALSE) ? json_decode($input, true) : $_POST;

// instead globals vars
define('FM_PATH', $p);
define('FM_USE_AUTH', $use_auth);
define('FM_EDIT_FILE', $edit_files);
defined('FM_ICONV_INPUT_ENC') || define('FM_ICONV_INPUT_ENC', $iconv_input_encoding);
defined('FM_USE_HIGHLIGHTJS') || define('FM_USE_HIGHLIGHTJS', $use_highlightjs);
defined('FM_HIGHLIGHTJS_STYLE') || define('FM_HIGHLIGHTJS_STYLE', $highlightjs_style);
defined('FM_DATETIME_FORMAT') || define('FM_DATETIME_FORMAT', $datetime_format);

unset($p, $use_auth, $iconv_input_encoding, $use_highlightjs, $highlightjs_style);

/*************************** ACTIONS ***************************/

// Handle all AJAX Request
if ((isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']]) || !FM_USE_AUTH) && isset($_POST['ajax'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        header('HTTP/1.0 401 Unauthorized');
        die("Invalid Token.");
    }

    //search : get list of files from the current folder
    if (isset($_POST['type']) && $_POST['type'] == "search") {
        $dir = $_POST['path'] == "." ? '' : $_POST['path'];
        $response = scan(fm_clean_path($dir), $_POST['content']);
        echo json_encode($response);
        exit();
    }

    // save editor file
    if (isset($_POST['type']) && $_POST['type'] == "save") {
        // get current path
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        // check path
        if (!is_dir($path)) {
            fm_redirect(FM_SELF_URL . '?p=');
        }
        $file = $_GET['edit'];
        $file = fm_clean_path($file);
        $file = str_replace('/', '', $file);
        if ($file == '' || !is_file($path . '/' . $file)) {
            fm_set_msg(lng('File not found'), 'error');
            $FM_PATH = FM_PATH;
            fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
        }
        header('X-XSS-Protection:0');
        $file_path = $path . '/' . $file;

        $writedata = $_POST['content'];
        $fd = fopen($file_path, "w");
        $write_results = @fwrite($fd, $writedata);
        fclose($fd);
        if ($write_results === false) {
            header("HTTP/1.1 500 Internal Server Error");
            die("Could Not Write File! - Check Permissions / Ownership");
        }
        die(true);
    }

    // backup files
    if (isset($_POST['type']) && $_POST['type'] == "backup" && !empty($_POST['file'])) {
        $fileName = fm_clean_path($_POST['file']);
        $fullPath = FM_ROOT_PATH . '/';
        if (!empty($_POST['path'])) {
            $relativeDirPath = fm_clean_path($_POST['path']);
            $fullPath .= "{$relativeDirPath}/";
        }
        $date = date("dMy-His");
        $newFileName = "{$fileName}-{$date}.bak";
        $fullyQualifiedFileName = $fullPath . $fileName;
        try {
            if (!file_exists($fullyQualifiedFileName)) {
                throw new Exception("File {$fileName} not found");
            }
            if (copy($fullyQualifiedFileName, $fullPath . $newFileName)) {
                echo "Backup {$newFileName} created";
            } else {
                throw new Exception("Could not copy file {$fileName}");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    // Save Config
    if (isset($_POST['type']) && $_POST['type'] == "settings") {
        global $cfg, $lang, $report_errors, $show_hidden_files, $lang_list, $hide_Cols, $theme;
        $newLng = $_POST['js-language'];
        fm_get_translations([]);
        if (!array_key_exists($newLng, $lang_list)) {
            $newLng = 'en';
        }

        $erp = isset($_POST['js-error-report']) && $_POST['js-error-report'] == "true" ? true : false;
        $shf = isset($_POST['js-show-hidden']) && $_POST['js-show-hidden'] == "true" ? true : false;
        $hco = isset($_POST['js-hide-cols']) && $_POST['js-hide-cols'] == "true" ? true : false;
        $te3 = $_POST['js-theme-3'];

        if ($cfg->data['lang'] != $newLng) {
            $cfg->data['lang'] = $newLng;
            $lang = $newLng;
        }
        if ($cfg->data['error_reporting'] != $erp) {
            $cfg->data['error_reporting'] = $erp;
            $report_errors = $erp;
        }
        if ($cfg->data['show_hidden'] != $shf) {
            $cfg->data['show_hidden'] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data['show_hidden'] != $shf) {
            $cfg->data['show_hidden'] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data['hide_Cols'] != $hco) {
            $cfg->data['hide_Cols'] = $hco;
            $hide_Cols = $hco;
        }
        if ($cfg->data['theme'] != $te3) {
            $cfg->data['theme'] = $te3;
            $theme = $te3;
        }
        $cfg->save();
        echo true;
    }

    // new password hash
    if (isset($_POST['type']) && $_POST['type'] == "pwdhash") {
        $res = isset($_POST['inputPassword2']) && !empty($_POST['inputPassword2']) ? password_hash($_POST['inputPassword2'], PASSWORD_DEFAULT) : '';
        echo $res;
    }

    //upload using url
    if (isset($_POST['type']) && $_POST['type'] == "upload" && !empty($_REQUEST["uploadurl"])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }

        function event_callback($message)
        {
            global $callback;
            echo json_encode($message);
        }

        function get_file_path()
        {
            global $path, $fileinfo, $temp_file;
            return $path . "/" . basename($fileinfo->name);
        }

        $url = !empty($_REQUEST["uploadurl"]) && preg_match("|^http(s)?://.+$|", stripslashes($_REQUEST["uploadurl"])) ? stripslashes($_REQUEST["uploadurl"]) : null;

        //prevent 127.* domain and known ports
        $domain = parse_url($url, PHP_URL_HOST);
        $port = parse_url($url, PHP_URL_PORT);
        $knownPorts = [22, 23, 25, 3306];

        if (preg_match("/^localhost$|^127(?:\.[0-9]+){0,2}\.[0-9]+$|^(?:0*\:)*?:?0*1$/i", $domain) || in_array($port, $knownPorts)) {
            $err = array("message" => "URL is not allowed");
            event_callback(array("fail" => $err));
            exit();
        }

        $use_curl = false;
        $temp_file = tempnam(sys_get_temp_dir(), "upload-");
        $fileinfo = new stdClass();
        $fileinfo->name = trim(urldecode(basename($url)), ".\x00..\x20");

        $allowed = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
        $ext = strtolower(pathinfo($fileinfo->name, PATHINFO_EXTENSION));
        $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

        $err = false;

        if (!$isFileAllowed) {
            $err = array("message" => "File extension is not allowed");
            event_callback(array("fail" => $err));
            exit();
        }

        if (!$url) {
            $success = false;
        } else if ($use_curl) {
            @$fp = fopen($temp_file, "w");
            @$ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOPROGRESS, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            @$success = curl_exec($ch);
            $curl_info = curl_getinfo($ch);
            if (!$success) {
                $err = array("message" => curl_error($ch));
            }
            @curl_close($ch);
            fclose($fp);
            $fileinfo->size = $curl_info["size_download"];
            $fileinfo->type = $curl_info["content_type"];
        } else {
            $ctx = stream_context_create();
            @$success = copy($url, $temp_file, $ctx);
            if (!$success) {
                $err = error_get_last();
            }
        }

        if ($success) {
            $success = rename($temp_file, strtok(get_file_path(), '?'));
        }

        if ($success) {
            event_callback(array("done" => $fileinfo));
        } else {
            unlink($temp_file);
            if (!$err) {
                $err = array("message" => "Invalid url parameter");
            }
            event_callback(array("fail" => $err));
        }
    }
    exit();
}

// Delete file / folder
if (isset($_GET['del'], $_POST['token']) && !FM_READONLY) {
    $del = str_replace('/', '', fm_clean_path($_GET['del']));
    if ($del != '' && $del != '..' && $del != '.' && verifyToken($_POST['token'])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        $is_dir = is_dir($path . '/' . $del);
        if (fm_rdelete($path . '/' . $del)) {
            $msg = $is_dir ? lng('Folder') . ' <b>%s</b> ' . lng('Deleted') : lng('File') . ' <b>%s</b> ' . lng('Deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)));
        } else {
            $msg = $is_dir ? lng('Folder') . ' <b>%s</b> ' . lng('not deleted') : lng('File') . ' <b>%s</b> ' . lng('not deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid file or folder name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Create a new file/folder
if (isset($_POST['newfilename'], $_POST['newfile'], $_POST['token']) && !FM_READONLY) {
    $type = urldecode($_POST['newfile']);
    $new = str_replace('/', '', fm_clean_path(strip_tags($_POST['newfilename'])));
    if (fm_isvalid_filename($new) && $new != '' && $new != '..' && $new != '.' && verifyToken($_POST['token'])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        if ($type == "file") {
            if (!file_exists($path . '/' . $new)) {
                if (fm_is_valid_ext($new)) {
                    @fopen($path . '/' . $new, 'w') or die('Cannot open file:  ' . $new);
                    fm_set_msg(sprintf(lng('File') . ' <b>%s</b> ' . lng('Created'), fm_enc($new)));
                } else {
                    fm_set_msg(lng('File extension is not allowed'), 'error');
                }
            } else {
                fm_set_msg(sprintf(lng('File') . ' <b>%s</b> ' . lng('already exists'), fm_enc($new)), 'alert');
            }
        } else {
            if (fm_mkdir($path . '/' . $new, false) === true) {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('Created'), $new));
            } elseif (fm_mkdir($path . '/' . $new, false) === $path . '/' . $new) {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('already exists'), fm_enc($new)), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('not created'), fm_enc($new)), 'error');
            }
        }
    } else {
        fm_set_msg(lng('Invalid characters in file or folder name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Copy folder / file
if (isset($_GET['copy'], $_GET['finish']) && !FM_READONLY) {
    // from
    $copy = urldecode($_GET['copy']);
    $copy = fm_clean_path($copy);
    // empty path
    if ($copy == '') {
        fm_set_msg(lng('Source path not defined'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
    // abs path from
    $from = FM_ROOT_PATH . '/' . $copy;
    // abs path to
    $dest = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $dest .= '/' . FM_PATH;
    }
    $dest .= '/' . basename($from);
    // move?
    $move = isset($_GET['move']);
    $move = fm_clean_path(urldecode($move));
    // copy/move/duplicate
    if ($from != $dest) {
        $msg_from = trim(FM_PATH . '/' . basename($from), '/');
        if ($move) { // Move and to != from so just perform move
            $rename = fm_rename($from, $dest);
            if ($rename) {
                fm_set_msg(sprintf(lng('Moved from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
            } elseif ($rename === null) {
                fm_set_msg(lng('File or folder with this path already exists'), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Error while moving from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        } else { // Not move and to != from so copy with original name
            if (fm_rcopy($from, $dest)) {
                fm_set_msg(sprintf(lng('Copied from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
            } else {
                fm_set_msg(sprintf(lng('Error while copying from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        }
    } else {
        if (!$move) { //Not move and to = from so duplicate
            $msg_from = trim(FM_PATH . '/' . basename($from), '/');
            $fn_parts = pathinfo($from);
            $extension_suffix = '';
            if (!is_dir($from)) {
                $extension_suffix = '.' . $fn_parts['extension'];
            }
            //Create new name for duplicate
            $fn_duplicate = $fn_parts['dirname'] . '/' . $fn_parts['filename'] . '-' . date('YmdHis') . $extension_suffix;
            $loop_count = 0;
            $max_loop = 1000;
            // Check if a file with the duplicate name already exists, if so, make new name (edge case...)
            while (file_exists($fn_duplicate) & $loop_count < $max_loop) {
                $fn_parts = pathinfo($fn_duplicate);
                $fn_duplicate = $fn_parts['dirname'] . '/' . $fn_parts['filename'] . '-copy' . $extension_suffix;
                $loop_count++;
            }
            if (fm_rcopy($from, $fn_duplicate, False)) {
                fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($fn_duplicate)));
            } else {
                fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($fn_duplicate)), 'error');
            }
        } else {
            fm_set_msg(lng('Paths must be not equal'), 'alert');
        }
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Mass copy files/ folders
if (isset($_POST['file'], $_POST['copy_to'], $_POST['finish'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng('Invalid Token.'), 'error');
    }

    // from
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // to
    $copy_to_path = FM_ROOT_PATH;
    $copy_to = fm_clean_path($_POST['copy_to']);
    if ($copy_to != '') {
        $copy_to_path .= '/' . $copy_to;
    }
    if ($path == $copy_to_path) {
        fm_set_msg(lng('Paths must be not equal'), 'alert');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
    if (!is_dir($copy_to_path)) {
        if (!fm_mkdir($copy_to_path, true)) {
            fm_set_msg('Unable to create destination folder', 'error');
            $FM_PATH = FM_PATH;
            fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
        }
    }
    // move?
    $move = isset($_POST['move']);
    // copy/move
    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                $f = fm_clean_path($f);
                // abs path from
                $from = $path . '/' . $f;
                // abs path to
                $dest = $copy_to_path . '/' . $f;
                // do
                if ($move) {
                    $rename = fm_rename($from, $dest);
                    if ($rename === false) {
                        $errors++;
                    }
                } else {
                    if (!fm_rcopy($from, $dest)) {
                        $errors++;
                    }
                }
            }
        }
        if ($errors == 0) {
            $msg = $move ? 'Selected files and folders moved' : 'Selected files and folders copied';
            fm_set_msg($msg);
        } else {
            $msg = $move ? 'Error while moving items' : 'Error while copying items';
            fm_set_msg($msg, 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Rename
if (isset($_POST['rename_from'], $_POST['rename_to'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg("Invalid Token.", 'error');
    }
    // old name
    $old = urldecode($_POST['rename_from']);
    $old = fm_clean_path($old);
    $old = str_replace('/', '', $old);
    // new name
    $new = urldecode($_POST['rename_to']);
    $new = fm_clean_path(strip_tags($new));
    $new = str_replace('/', '', $new);
    // path
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // rename
    if (fm_isvalid_filename($new) && $old != '' && $new != '') {
        if (fm_rename($path . '/' . $old, $path . '/' . $new)) {
            fm_set_msg(sprintf(lng('Renamed from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($old), fm_enc($new)));
        } else {
            fm_set_msg(sprintf(lng('Error while renaming from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($old), fm_enc($new)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid characters in file name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Download
if (isset($_GET['dl'], $_POST['token'])) {
    // Verify the token to ensure it's valid
    if (!verifyToken($_POST['token'])) {
        fm_set_msg("Invalid Token.", 'error');
        exit;
    }

    // Clean the download file path
    $dl = urldecode($_GET['dl']);
    $dl = fm_clean_path($dl);
    $dl = str_replace('/', '', $dl); // Prevent directory traversal attacks

    // Define the file path
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    // Check if the file exists and is valid
    if ($dl != '' && is_file($path . '/' . $dl)) {
        // Close the session to prevent session locking
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        // Call the download function
        fm_download_file($path . '/' . $dl, $dl, 1024); // Download with a buffer size of 1024 bytes
        exit;
    } else {
        // Handle the case where the file is not found
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
}

// Upload
if (!empty($_FILES) && !FM_READONLY) {
    if (isset($_POST['token'])) {
        if (!verifyToken($_POST['token'])) {
            $response = array('status' => 'error', 'info' => "Invalid Token.");
            echo json_encode($response);
            exit();
        }
    } else {
        $response = array('status' => 'error', 'info' => "Token Missing.");
        echo json_encode($response);
        exit();
    }

    $chunkIndex = $_POST['dzchunkindex'];
    $chunkTotal = $_POST['dztotalchunkcount'];
    $fullPathInput = fm_clean_path($_REQUEST['fullpath']);

    $f = $_FILES;
    $path = FM_ROOT_PATH;
    $ds = DIRECTORY_SEPARATOR;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $errors = 0;
    $uploads = 0;
    $allowed = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
    $response = array(
        'status' => 'error',
        'info'   => 'Oops! Try again'
    );

    $filename = $f['file']['name'];
    $tmp_name = $f['file']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($filename, PATHINFO_EXTENSION)) : '';
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    if (!fm_isvalid_filename($filename) && !fm_isvalid_filename($fullPathInput)) {
        $response = array(
            'status'    => 'error',
            'info'      => "Invalid File name!",
        );
        echo json_encode($response);
        exit();
    }

    $targetPath = $path . $ds;
    if (is_writable($targetPath)) {
        $fullPath = $path . '/' . $fullPathInput;
        $folder = substr($fullPath, 0, strrpos($fullPath, "/"));

        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0777, true);
            umask($old);
        }

        if (empty($f['file']['error']) && !empty($tmp_name) && $tmp_name != 'none' && $isFileAllowed) {
            if ($chunkTotal) {
                $out = @fopen("{$fullPath}.part", $chunkIndex == 0 ? "wb" : "ab");
                if ($out) {
                    $in = @fopen($tmp_name, "rb");
                    if ($in) {
                        if (PHP_VERSION_ID < 80009) {
                            // workaround https://bugs.php.net/bug.php?id=81145
                            do {
                                for (;;) {
                                    $buff = fread($in, 4096);
                                    if ($buff === false || $buff === '') {
                                        break;
                                    }
                                    fwrite($out, $buff);
                                }
                            } while (!feof($in));
                        } else {
                            stream_copy_to_stream($in, $out);
                        }
                        $response = array(
                            'status'    => 'success',
                            'info' => "file upload successful"
                        );
                    } else {
                        $response = array(
                            'status'    => 'error',
                            'info' => "failed to open output stream",
                            'errorDetails' => error_get_last()
                        );
                    }
                    @fclose($in);
                    @fclose($out);
                    @unlink($tmp_name);

                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $response = array(
                        'status'    => 'error',
                        'info' => "failed to open output stream"
                    );
                }

                if ($chunkIndex == $chunkTotal - 1) {
                    if (file_exists($fullPath)) {
                        $ext_1 = $ext ? '.' . $ext : '';
                        $fullPathTarget = $path . '/' . basename($fullPathInput, $ext_1) . '_' . date('ymdHis') . $ext_1;
                    } else {
                        $fullPathTarget = $fullPath;
                    }
                    rename("{$fullPath}.part", $fullPathTarget);
                }
            } else if (move_uploaded_file($tmp_name, $fullPath)) {
                // Be sure that the file has been uploaded
                if (file_exists($fullPath)) {
                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file.'
                    );
                }
            } else {
                $response = array(
                    'status'    => 'error',
                    'info'      => "Error while uploading files. Uploaded files $uploads",
                );
            }
        }
    } else {
        $response = array(
            'status' => 'error',
            'info'   => 'The specified folder for upload isn\'t writeable.'
        );
    }
    // Return the response
    echo json_encode($response);
    exit();
}

// Mass deleting
if (isset($_POST['group'], $_POST['delete'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                $new_path = $path . '/' . $f;
                if (!fm_rdelete($new_path)) {
                    $errors++;
                }
            }
        }
        if ($errors == 0) {
            fm_set_msg(lng('Selected files and folder deleted'));
        } else {
            fm_set_msg(lng('Error while deleting items'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Pack files zip, tar
if (isset($_POST['group'], $_POST['token']) && (isset($_POST['zip']) || isset($_POST['tar'])) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $path = FM_ROOT_PATH;
    $ext = 'zip';
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    //set pack type
    $ext = isset($_POST['tar']) ? 'tar' : 'zip';

    if (($ext == "zip" && !class_exists('ZipArchive')) || ($ext == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    $files = $_POST['file'];
    $sanitized_files = array();

    // clean path
    foreach ($files as $file) {
        array_push($sanitized_files, fm_clean_path($file));
    }

    $files = $sanitized_files;

    if (!empty($files)) {
        chdir($path);

        if (count($files) == 1) {
            $one_file = reset($files);
            $one_file = basename($one_file);
            $zipname = $one_file . '_' . date('ymd_His') . '.' . $ext;
        } else {
            $zipname = 'archive_' . date('ymd_His') . '.' . $ext;
        }

        if ($ext == 'zip') {
            $zipper = new FM_Zipper();
            $res = $zipper->create($zipname, $files);
        } elseif ($ext == 'tar') {
            $tar = new FM_Zipper_Tar();
            $res = $tar->create($zipname, $files);
        }

        if ($res) {
            fm_set_msg(sprintf(lng('Archive') . ' <b>%s</b> ' . lng('Created'), fm_enc($zipname)));
        } else {
            fm_set_msg(lng('Archive not created'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Unpack zip, tar
if (isset($_POST['unzip'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $unzip = urldecode($_POST['unzip']);
    $unzip = fm_clean_path($unzip);
    $unzip = str_replace('/', '', $unzip);
    $isValid = false;

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    if ($unzip != '' && is_file($path . '/' . $unzip)) {
        $zip_path = $path . '/' . $unzip;
        $ext = pathinfo($zip_path, PATHINFO_EXTENSION);
        $isValid = true;
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }

    if (($ext == "zip" && !class_exists('ZipArchive')) || ($ext == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    if ($isValid) {
        //to folder
        $tofolder = '';
        if (isset($_POST['tofolder'])) {
            $tofolder = pathinfo($zip_path, PATHINFO_FILENAME);
            if (fm_mkdir($path . '/' . $tofolder, true)) {
                $path .= '/' . $tofolder;
            }
        }

        if ($ext == "zip") {
            $zipper = new FM_Zipper();
            $res = $zipper->unzip($zip_path, $path);
        } elseif ($ext == "tar") {
            try {
                $gzipper = new PharData($zip_path);
                if (@$gzipper->extractTo($path, null, true)) {
                    $res = true;
                } else {
                    $res = false;
                }
            } catch (Exception $e) {
                //TODO:: need to handle the error
                $res = true;
            }
        }

        if ($res) {
            fm_set_msg(lng('Archive unpacked'));
        } else {
            fm_set_msg(lng('Archive not unpacked'), 'error');
        }
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Change Perms (not for Windows)
if (isset($_POST['chmod'], $_POST['token']) && !FM_READONLY && !FM_IS_WIN) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $file = $_POST['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    $mode = 0;
    if (!empty($_POST['ur'])) {
        $mode |= 0400;
    }
    if (!empty($_POST['uw'])) {
        $mode |= 0200;
    }
    if (!empty($_POST['ux'])) {
        $mode |= 0100;
    }
    if (!empty($_POST['gr'])) {
        $mode |= 0040;
    }
    if (!empty($_POST['gw'])) {
        $mode |= 0020;
    }
    if (!empty($_POST['gx'])) {
        $mode |= 0010;
    }
    if (!empty($_POST['or'])) {
        $mode |= 0004;
    }
    if (!empty($_POST['ow'])) {
        $mode |= 0002;
    }
    if (!empty($_POST['ox'])) {
        $mode |= 0001;
    }

    if (@chmod($path . '/' . $file, $mode)) {
        fm_set_msg(lng('Permissions changed'));
    } else {
        fm_set_msg(lng('Permissions not changed'), 'error');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

/*************************** ACTIONS ***************************/

// get current path
$path = FM_ROOT_PATH;
if (FM_PATH != '') {
    $path .= '/' . FM_PATH;
}

// check path
if (!is_dir($path)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get parent folder
$parent = fm_get_parent_path(FM_PATH);

$objects = is_readable($path) ? scandir($path) : array();
$folders = array();
$files = array();
$current_path = array_slice(explode("/", $path), -1)[0];
if (is_array($objects) && fm_is_exclude_items($current_path, $path)) {
    foreach ($objects as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($file, 0, 1) === '.') {
            continue;
        }
        $new_path = $path . '/' . $file;
        if (@is_file($new_path) && fm_is_exclude_items($file, $new_path)) {
            $files[] = $file;
        } elseif (@is_dir($new_path) && $file != '.' && $file != '..' && fm_is_exclude_items($file, $new_path)) {
            $folders[] = $file;
        }
    }
}

if (!empty($files)) {
    natcasesort($files);
}
if (!empty($folders)) {
    natcasesort($folders);
}

// upload form
if (isset($_GET['upload']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    //get the allowed file extensions
    function getUploadExt()
    {
        $extArr = explode(',', FM_UPLOAD_EXTENSION);
        if (FM_UPLOAD_EXTENSION && $extArr) {
            array_walk($extArr, function (&$x) {
                $x = ".$x";
            });
            return implode(',', $extArr);
        }
        return '';
    }
    ?>
    <?php print_external('css-dropzone'); ?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper" data-bs-theme="<?php echo FM_THEME; ?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lng('UploadingFiles') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> <?php echo lng('Upload from URL') ?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back') ?></a>
                    <strong><?php echo lng('DestinationFolder') ?></strong>: <?php echo fm_enc(fm_convert_win(FM_PATH)) ?>
                </p>

                <form action="<?php echo htmlspecialchars(FM_SELF_URL) . '?p=' . fm_enc(FM_PATH) ?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php echo lng('Upload') ?></button>
                        <div class="lds-facebook">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php print_external('js-dropzone'); ?>
    <script>
        Dropzone.options.fileUploader = {
            chunking: true,
            chunkSize: <?php echo UPLOAD_CHUNK_SIZE; ?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php echo MAX_UPLOAD_SIZE; ?>",
            acceptedFiles: "<?php echo getUploadExt() ?>",
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function(res) {
                    try {
                        let _response = JSON.parse(res.xhr.response);

                        if (_response.status == "error") {
                            toast(_response.info);
                        }
                    } catch (e) {
                        toast("Error: Invalid JSON response");
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
<?php
    fm_show_footer();
    exit;
}

// copy form POST
if (isset($_POST['copy']) && !FM_READONLY) {
    $copy_files = isset($_POST['file']) ? $_POST['file'] : null;
    if (!is_array($copy_files) || empty($copy_files)) {
        fm_set_msg(lng('Nothing selected'), 'alert');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
?>
    <div class="path">
        <div class="card" data-bs-theme="<?php echo FM_THEME; ?>">
            <div class="card-header">
                <h6><?php echo lng('Copying') ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php
                    foreach ($copy_files as $cf) {
                        echo '<input type="hidden" name="file[]" value="' . fm_enc($cf) . '">' . PHP_EOL;
                    }
                    ?>
                    <p class="break-word"><strong><?php echo lng('Files') ?></strong>: <b><?php echo implode('</b>, <b>', $copy_files) ?></b></p>
                    <p class="break-word"><strong><?php echo lng('SourceFolder') ?></strong>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?><br>
                        <label for="inp_copy_to"><strong><?php echo lng('DestinationFolder') ?></strong>:</label>
                        <?php echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php echo fm_enc(FM_PATH) ?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input">
                        <label for="js-move-files" class="custom-control-label ms-2"><?php echo lng('Move') ?></label>
                    </p>
                    <p>
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-danger"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Copy') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// copy form
if (isset($_GET['copy']) && !isset($_GET['finish']) && !FM_READONLY) {
    $copy = $_GET['copy'];
    $copy = fm_clean_path($copy);
    if ($copy == '' || !file_exists(FM_ROOT_PATH . '/' . $copy)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . $copy)) ?><br>
            <strong>Destination folder:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?>
        </p>
        <p>
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="text-danger"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php echo lng('Select folder') ?></i></p>
        <ul class="folders break-word">
            <?php
            if ($parent !== false) {
            ?>
                <li><a href="?p=<?php echo urlencode($parent) ?>&amp;copy=<?php echo urlencode($copy) ?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
            <?php
            }
            foreach ($folders as $f) {
            ?>
                <li>
                    <a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>&amp;copy=<?php echo urlencode($copy) ?>"><i class="fa fa-folder-o"></i> <?php echo fm_convert_win($f) ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
<?php
    fm_show_footer();
    exit;
}

if (isset($_GET['settings']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $cfg, $lang, $lang_list;
?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-cog"></i> <?php echo lng('Settings') ?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel') ?></a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php echo lng('Language') ?></label>
                        <div class="col-sm-5">
                            <select class="form-select" id="js-language" name="js-language">
                                <?php
                                function getSelected($l)
                                {
                                    global $lang;
                                    return ($lang == $l) ? 'selected' : '';
                                }
                                foreach ($lang_list as $k => $v) {
                                    echo "<option value='$k' " . getSelected($k) . ">$v</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row ">
                        <label for="js-error-report" class="col-sm-3 col-form-label"><?php echo lng('ErrorReporting') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php echo $report_errors ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-show-hidden" class="col-sm-3 col-form-label"><?php echo lng('ShowHiddenFiles') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php echo $show_hidden_files ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-hide-cols" class="col-sm-3 col-form-label"><?php echo lng('HideColumns') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php echo $hide_Cols ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-3-1" class="col-sm-3 col-form-label"><?php echo lng('Theme') ?></label>
                        <div class="col-sm-5">
                            <select class="form-select w-100 text-capitalize" id="js-3-0" name="js-theme-3">
                                <option value='light' <?php if ($theme == "light") {
                                                            echo "selected";
                                                        } ?>>
                                    <?php echo lng('light') ?>
                                </option>
                                <option value='dark' <?php if ($theme == "dark") {
                                                            echo "selected";
                                                        } ?>>
                                    <?php echo lng('dark') ?>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php echo lng('Save'); ?></button>
                        </div>
                    </div>

                    <small class="text-body-secondary">* <?php echo lng('Sometimes the save action may not work on the first try, so please attempt it again') ?>.</span>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

if (isset($_GET['help'])) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $cfg, $lang;
?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-exclamation-circle"></i> <?php echo lng('Help') ?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel') ?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>
                        <h3><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" class="app-v-title"> Tiny File Manager <?php echo VERSION; ?></a></h3>
                        </p>
                        <p>Author: PRAŚATH MANİ</p>
                        <p>Mail Us: <a href="mailto:ccpprogrammers@gmail.com">ccpprogrammers [at] gmail [dot] com</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/wiki" target="_blank"><i class="fa fa-question-circle"></i> <?php echo lng('Help Documents') ?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank"><i class="fa fa-bug"></i> <?php echo lng('Report Issue') ?></a></li>
                                <?php if (!FM_READONLY) { ?>
                                    <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa fa-lock"></i> <?php echo lng('Generate new password hash') ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php echo lng('Generate new password hash') ?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php echo lng('Password') ?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="<?php echo lng('Password') ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php echo lng('Generate') ?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// file viewer
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || !fm_is_exclude_items($file, $path . '/' . $file)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize_raw = fm_get_size($file_path);
    $filesize = fm_get_filesize($filesize_raw);

    $is_zip = false;
    $is_gzip = false;
    $is_image = false;
    $is_audio = false;
    $is_video = false;
    $is_text = false;
    $is_onlineViewer = false;

    $view_title = 'File';
    $filenames = false; // for zip
    $content = ''; // for text
    $online_viewer = strtolower(FM_DOC_VIEWER);

    if ($online_viewer && $online_viewer !== 'false' && in_array($ext, fm_get_onlineViewer_exts())) {
        $is_onlineViewer = true;
    } elseif ($ext == 'zip' || $ext == 'tar') {
        $is_zip = true;
        $view_title = 'Archive';
        $filenames = fm_get_zif_info($file_path, $ext);
    } elseif (in_array($ext, fm_get_image_exts())) {
        $is_image = true;
        $view_title = 'Image';
    } elseif (in_array($ext, fm_get_audio_exts())) {
        $is_audio = true;
        $view_title = 'Audio';
    } elseif (in_array($ext, fm_get_video_exts())) {
        $is_video = true;
        $view_title = 'Video';
    } elseif (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    }

?>
    <div class="row">
        <div class="col-12">
            <ul class="list-group w-50 my-3" data-bs-theme="<?php echo FM_THEME; ?>">
                <li class="list-group-item active" aria-current="true"><strong><?php echo lng($view_title) ?>:</strong> <?php echo fm_enc(fm_convert_win($file)) ?></li>
                <?php $display_path = fm_get_display_path($file_path); ?>
                <li class="list-group-item"><strong><?php echo $display_path['label']; ?>:</strong> <?php echo $display_path['path']; ?></li>
                <li class="list-group-item"><strong><?php echo lng('Date Modified') ?>:</strong> <?php echo date(FM_DATETIME_FORMAT, filemtime($file_path)); ?></li>
                <li class="list-group-item"><strong><?php echo lng('File size') ?>:</strong> <?php echo ($filesize_raw <= 1000) ? "$filesize_raw bytes" : $filesize; ?></li>
                <li class="list-group-item"><strong><?php echo lng('MIME-type') ?>:</strong> <?php echo $mime_type ?></li>
                <?php
                // ZIP info
                if (($is_zip || $is_gzip) && $filenames !== false) {
                    $total_files = 0;
                    $total_comp = 0;
                    $total_uncomp = 0;
                    foreach ($filenames as $fn) {
                        if (!$fn['folder']) {
                            $total_files++;
                        }
                        $total_comp += $fn['compressed_size'];
                        $total_uncomp += $fn['filesize'];
                    }
                ?>
                    <li class="list-group-item"><?php echo lng('Files in archive') ?>: <?php echo $total_files ?></li>
                    <li class="list-group-item"><?php echo lng('Total size') ?>: <?php echo fm_get_filesize($total_uncomp) ?></li>
                    <li class="list-group-item"> <?php echo lng('Size in archive') ?>: <?php echo fm_get_filesize($total_comp) ?></li>
                    <li class="list-group-item"><?php echo lng('Compression') ?>: <?php echo round(($total_comp / max($total_uncomp, 1)) * 100) ?>%</li>
                <?php
                }
                // Image info
                if ($is_image) {
                    $image_size = getimagesize($file_path);
                    echo '<li class="list-group-item"><strong>' . lng('Image size') . ':</strong> ' . (isset($image_size[0]) ? $image_size[0] : '0') . ' x ' . (isset($image_size[1]) ? $image_size[1] : '0') . '</li>';
                }
                // Text info
                if ($is_text) {
                    $is_utf8 = fm_is_utf8($content);
                    if (function_exists('iconv')) {
                        if (!$is_utf8) {
                            $content = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $content);
                        }
                    }
                    echo '<li class="list-group-item"><strong>' . lng('Charset') . ':</strong> ' . ($is_utf8 ? 'utf-8' : '8 bit') . '</li>';
                }
                ?>
            </ul>
            <div class="btn-group btn-group-sm flex-wrap" role="group">
                <form method="post" class="d-inline mb-0 btn btn-outline-primary" action="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($file) ?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <button type="submit" class="btn btn-link btn-sm text-decoration-none fw-bold p-0"><i class="fa fa-cloud-download"></i> <?php echo lng('Download') ?></button> &nbsp;
                </form>
                <?php if (!FM_READONLY): ?>
                    <a class="fw-bold btn btn-outline-primary" title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($file) ?>" onclick="confirmDailog(event, 1209, '<?php echo lng('Delete') . ' ' . lng('File'); ?>','<?php echo urlencode($file); ?>', this.href);"> <i class="fa fa-trash"></i> Delete</a>
                <?php endif; ?>
                <a class="fw-bold btn btn-outline-primary" href="<?php echo fm_enc($file_url) ?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php echo lng('Open') ?></a></b>
                <?php
                // ZIP actions
                if (!FM_READONLY && ($is_zip || $is_gzip) && $filenames !== false) {
                    $zip_name = pathinfo($file_path, PATHINFO_FILENAME);
                ?>
                    <form method="post" class="d-inline btn btn-outline-primary mb-0">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0 border-0" style="font-size: 14px;"><i class="fa fa-check-circle"></i> <?php echo lng('UnZip') ?></button>
                    </form>
                    <form method="post" class="d-inline btn btn-outline-primary mb-0">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="UnZip to <?php echo fm_enc($zip_name) ?>"><i class="fa fa-check-circle"></i> <?php echo lng('UnZipToFolder') ?></button>
                    </form>
                <?php
                }
                if ($is_text && !FM_READONLY) {
                ?>
                    <a class="fw-bold btn btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>" class="edit-file">
                        <i class="fa fa-pencil-square"></i> <?php echo lng('Edit') ?>
                    </a>
                    <a class="fw-bold btn btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&env=ace"
                        class="edit-file"><i class="fa fa-pencil-square"></i> <?php echo lng('AdvancedEditor') ?>
                    </a>
                <?php } ?>
                <a class="fw-bold btn btn-outline-primary" href="?p=<?php echo urlencode(FM_PATH) ?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back') ?></a>
            </div>
            <div class="row mt-3">
                <?php
                if ($is_onlineViewer) {
                    if ($online_viewer == 'google') {
                        echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url=' . fm_enc($file_url) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                    } else if ($online_viewer == 'microsoft') {
                        echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src=' . fm_enc($file_url) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                    }
                } elseif ($is_zip) {
                    // ZIP content
                    if ($filenames !== false) {
                        echo '<code class="maxheight">';
                        foreach ($filenames as $fn) {
                            if ($fn['folder']) {
                                echo '<b>' . fm_enc($fn['name']) . '</b><br>';
                            } else {
                                echo $fn['name'] . ' (' . fm_get_filesize($fn['filesize']) . ')<br>';
                            }
                        }
                        echo '</code>';
                    } else {
                        echo '<p>' . lng('Error while fetching archive info') . '</p>';
                    }
                } elseif ($is_image) {
                    // Image content
                    if (in_array($ext, array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))) {
                        echo '<p><input type="checkbox" id="preview-img-zoomCheck"><label for="preview-img-zoomCheck"><img src="' . fm_enc($file_url) . '" alt="image" class="preview-img"></label></p>';
                    }
                } elseif ($is_audio) {
                    // Audio content
                    echo '<p><audio src="' . fm_enc($file_url) . '" controls preload="metadata"></audio></p>';
                } elseif ($is_video) {
                    // Video content
                    echo '<div class="preview-video"><video src="' . fm_enc($file_url) . '" width="640" height="360" controls preload="metadata"></video></div>';
                } elseif ($is_text) {
                    if (FM_USE_HIGHLIGHTJS) {
                        // highlight
                        $hljs_classes = array(
                            'shtml' => 'xml',
                            'htaccess' => 'apache',
                            'phtml' => 'php',
                            'lock' => 'json',
                            'svg' => 'xml',
                        );
                        $hljs_class = isset($hljs_classes[$ext]) ? 'lang-' . $hljs_classes[$ext] : 'lang-' . $ext;
                        if (empty($ext) || in_array(strtolower($file), fm_get_text_names()) || preg_match('#\.min\.(css|js)$#i', $file)) {
                            $hljs_class = 'nohighlight';
                        }
                        $content = '<pre class="with-hljs"><code class="' . $hljs_class . '">' . fm_enc($content) . '</code></pre>';
                    } elseif (in_array($ext, array('php', 'php4', 'php5', 'phtml', 'phps'))) {
                        // php highlight
                        $content = highlight_string($content, true);
                    } else {
                        $content = '<pre>' . fm_enc($content) . '</pre>';
                    }
                    echo $content;
                }
                ?>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// file editor
if (isset($_GET['edit']) && !FM_READONLY) {
    $file = $_GET['edit'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || !fm_is_exclude_items($file, $path . '/' . $file)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
    $editFile = ' : <i><b>' . $file . '</b></i>';
    header('X-XSS-Protection:0');
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;

    // normal editer
    $isNormalEditor = true;
    if (isset($_GET['env'])) {
        if ($_GET['env'] == "ace") {
            $isNormalEditor = false;
        }
    }

    // Save File
    if (isset($_POST['savedata'])) {
        $writedata = $_POST['savedata'];
        $fd = fopen($file_path, "w");
        @fwrite($fd, $writedata);
        fclose($fd);
        fm_set_msg(lng('File Saved Successfully'));
    }

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize = filesize($file_path);
    $is_text = false;
    $content = ''; // for text

    if (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    }

?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php if (!$isNormalEditor) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php echo lng('Fullscreen') ?>"><i class="fa fa-expand" title="<?php echo lng('Fullscreen') ?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php echo lng('Search') ?>"><i class="fa fa-search" title="<?php echo lng('Search') ?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php echo lng('Undo') ?>"><i class="fa fa-undo" title="<?php echo lng('Undo') ?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php echo lng('Redo') ?>"><i class="fa fa-repeat" title="<?php echo lng('Redo') ?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php echo lng('Word Wrap') ?>"><i class="fa fa-text-width" title="<?php echo lng('Word Wrap') ?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php echo lng('Select Document Type') ?>" class="btn-outline-secondary border-start-0 d-none d-md-block">
                                <option>-- <?php echo lng('Select Mode') ?> --</option>
                            </select>
                            <select id="js-ace-theme" data-type="theme" title="<?php echo lng('Select Theme') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block">
                                <option>-- <?php echo lng('Select Theme') ?> --</option>
                            </select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php echo lng('Select Font Size') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block">
                                <option>-- <?php echo lng('Select Font Size') ?> --</option>
                            </select>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <div class="btn-group">
                    <a title=" <?php echo lng('Back') ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php echo urlencode($file) ?>"><i class="fa fa-reply-all"></i> <?php echo lng('Back') ?></a>
                    <a title="<?php echo lng('BackUp') ?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php echo urlencode(trim(FM_PATH)) ?>','<?php echo urlencode($file) ?>')"><i class="fa fa-database"></i> <?php echo lng('BackUp') ?></a>
                    <?php if ($is_text) { ?>
                        <?php if ($isNormalEditor) { ?>
                            <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php echo lng('AdvancedEditor') ?></a>
                            <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                            </button>
                        <?php } else { ?>
                            <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>"><i class="fa fa-text-height"></i> <?php echo lng('NormalEditor') ?></a>
                            <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save') ?>
                            </button>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        if ($is_text && $isNormalEditor) {
            echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%;">' . htmlspecialchars($content) . '</textarea>';
            echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';
        } elseif ($is_text) {
            echo '<div id="editor" contenteditable="true">' . htmlspecialchars($content) . '</div>';
        } else {
            fm_set_msg(lng('FILE EXTENSION HAS NOT SUPPORTED'), 'error');
        }
        ?>
    </div>
<?php
    fm_show_footer();
    exit;
}

// chmod (not for Windows)
if (isset($_GET['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $file = $_GET['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file;
    $file_path = $path . '/' . $file;

    $mode = fileperms($path . '/' . $file);
?>
    <div class="path">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header">
                <?php echo lng('ChangePermissions') ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php $display_path = fm_get_display_path($file_path); ?>
                    <?php echo $display_path['label']; ?>: <?php echo $display_path['path']; ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php echo fm_enc($file) ?>">

                    <table class="table compact-table" data-bs-theme="<?php echo FM_THEME; ?>">
                        <tr>
                            <td></td>
                            <td><b><?php echo lng('Owner') ?></b></td>
                            <td><b><?php echo lng('Group') ?></b></td>
                            <td><b><?php echo lng('Other') ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Read') ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1" <?php echo ($mode & 00400) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1" <?php echo ($mode & 00040) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1" <?php echo ($mode & 00004) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Write') ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1" <?php echo ($mode & 00200) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1" <?php echo ($mode & 00020) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1" <?php echo ($mode & 00002) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Execute') ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1" <?php echo ($mode & 00100) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1" <?php echo ($mode & 00010) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1" <?php echo ($mode & 00001) ? ' checked' : '' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Change') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// --- TINYFILEMANAGER MAIN ---
fm_show_header(); // HEADER
fm_show_nav_path(FM_PATH); // current path

// show alert messages
fm_show_message();

$num_files = count($files);
$num_folders = count($folders);
$all_files_size = 0;
?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm" id="main-table" data-bs-theme="<?php echo FM_THEME; ?>">
            <thead class="thead-white">
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <th style="width:3%" class="custom-checkbox-header">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                                <label class="custom-control-label" for="js-select-all-items"></label>
                            </div>
                        </th><?php endif; ?>
                    <th><?php echo lng('Name') ?></th>
                    <th><?php echo lng('Size') ?></th>
                    <th><?php echo lng('Modified') ?></th>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <th><?php echo lng('Perms') ?></th>
                        <th><?php echo lng('Owner') ?></th><?php endif; ?>
                    <th><?php echo lng('Actions') ?></th>
                </tr>
            </thead>
            <?php
            // link to parent folder
            if ($parent !== false) {
            ?>
                <tr><?php if (!FM_READONLY): ?>
                        <td class="nosort"></td><?php endif; ?>
                    <td class="border-0" data-sort><a href="?p=<?php echo urlencode($parent) ?>"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php } ?>
                </tr>
            <?php
            }
            $ii = 3399;
            foreach ($folders as $f) {
                $is_link = is_link($path . '/' . $f);
                $img = $is_link ? 'icon-link_folder' : 'fa fa-folder-o';
                $modif_raw = filemtime($path . '/' . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("F d Y H:i:s.", $modif_raw));
                $filesize_raw = "";
                $filesize = lng('Folder');
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                $owner = array('name' => '?'); 
                $group = array('name' => '?');
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    try {
                        $owner_id = fileowner($path . '/' . $f);
                        if ($owner_id != 0) {
                            $owner_info = posix_getpwuid($owner_id);
                            if ($owner_info) {
                                $owner =  $owner_info;
                            }
                        }
                        $group_id = filegroup($path . '/' . $f);
                        $group_info = posix_getgrgid($group_id);
                        if ($group_info) {
                            $group =  $group_info;
                        }
                    } catch (Exception $e) {
                        error_log("exception:" . $e->getMessage());
                    }
                }
            ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $ii ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                                <label class="custom-control-label" for="<?php echo $ii ?>"></label>
                            </div>
                        </td>
                    <?php endif; ?>
                    <td data-sort=<?php echo fm_convert_win(fm_enc($f)) ?>>
                        <div class="filename">
                            <a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="<?php echo $img ?>"></i> <?php echo fm_convert_win(fm_enc($f)) ?></a>
                            <?php echo ($is_link ? ' &rarr; <i>' . readlink($path . '/' . $f) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="a-<?php echo str_pad($filesize_raw, 18, "0", STR_PAD_LEFT); ?>">
                        <?php echo $filesize; ?>
                    </td>
                    <td data-order="a-<?php echo $date_sorting; ?>"><?php echo $modif ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td>
                            <?php if (!FM_READONLY): ?><a title="Change Permissions" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>"><?php echo $perms ?></a><?php else: ?><?php echo $perms ?><?php endif; ?>
                        </td>
                        <td>
                            <?php echo $owner['name'] . ':' . $group['name'] ?>
                        </td>
                    <?php endif; ?>
                    <td class="inline-actions"><?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="confirmDailog(event, '1028','<?php echo lng('Delete') . ' ' . lng('Folder'); ?>','<?php echo urlencode($f) ?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('CopyTo') ?>..." href="?p=&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f . '/') ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
            <?php
                flush();
                $ii++;
            }
            $ik = 8002;
            foreach ($files as $f) {
                $is_link = is_link($path . '/' . $f);
                $img = $is_link ? 'fa fa-file-text-o' : fm_get_file_icon_class($path . '/' . $f);
                $modif_raw = filemtime($path . '/' . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("F d Y H:i:s.", $modif_raw));
                $filesize_raw = fm_get_size($path . '/' . $f);
                $filesize = fm_get_filesize($filesize_raw);
                $filelink = '?p=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($f);
                $all_files_size += $filesize_raw;
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                $owner = array('name' => '?'); 
                $group = array('name' => '?');
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    try {
                        $owner_id = fileowner($path . '/' . $f);
                        if ($owner_id != 0) {
                            $owner_info = posix_getpwuid($owner_id);
                            if ($owner_info) {
                                $owner =  $owner_info;
                            }
                        }
                        $group_id = filegroup($path . '/' . $f);
                        $group_info = posix_getgrgid($group_id);
                        if ($group_info) {
                            $group =  $group_info;
                        }
                    } catch (Exception $e) {
                        error_log("exception:" . $e->getMessage());
                    }
                }
            ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $ik ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                                <label class="custom-control-label" for="<?php echo $ik ?>"></label>
                            </div>
                        </td><?php endif; ?>
                    <td data-sort=<?php echo fm_enc($f) ?>>
                        <div class="filename">
                            <?php
                            if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))): ?>
                                <?php $imagePreview = fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f); ?>
                                <a href="<?php echo $filelink ?>" data-preview-image="<?php echo $imagePreview ?>" title="<?php echo fm_enc($f) ?>">
                                <?php else: ?>
                                    <a href="<?php echo $filelink ?>" title="<?php echo $f ?>">
                                    <?php endif; ?>
                                    <i class="<?php echo $img ?>"></i> <?php echo fm_convert_win(fm_enc($f)) ?>
                                    </a>
                                    <?php echo ($is_link ? ' &rarr; <i>' . readlink($path . '/' . $f) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="b-<?php echo str_pad($filesize_raw, 18, "0", STR_PAD_LEFT); ?>"><span title="<?php printf('%s bytes', $filesize_raw) ?>">
                            <?php echo $filesize; ?>
                        </span></td>
                    <td data-order="b-<?php echo $date_sorting; ?>"><?php echo $modif ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td><?php if (!FM_READONLY): ?><a title="<?php echo 'Change Permissions' ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>"><?php echo $perms ?></a><?php else: ?><?php echo $perms ?><?php endif; ?>
                        </td>
                        <td><?php echo fm_enc($owner['name'] . ':' . $group['name']) ?></td>
                    <?php endif; ?>
                    <td class="inline-actions">
                        <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="confirmDailog(event, 1209, '<?php echo lng('Delete') . ' ' . lng('File'); ?>','<?php echo urlencode($f); ?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php echo lng('CopyTo') ?>..."
                                href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="fa fa-files-o"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f) ?>" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php echo lng('Download') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($f) ?>" onclick="confirmDailog(event, 1211, '<?php echo lng('Download'); ?>','<?php echo urlencode($f); ?>', this.href);"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
            <?php
                flush();
                $ik++;
            }

            if (empty($folders) && empty($files)) { ?>
                <tfoot>
                    <tr><?php if (!FM_READONLY): ?>
                            <td></td><?php endif; ?>
                        <td colspan="<?php echo (!FM_IS_WIN && !$hide_Cols) ? '6' : '4' ?>"><em><?php echo lng('Folder is empty') ?></em></td>
                    </tr>
                </tfoot>
            <?php
            } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray fs-7" colspan="<?php echo (!FM_IS_WIN && !$hide_Cols) ? (FM_READONLY ? '6' : '7') : (FM_READONLY ? '4' : '5') ?>">
                            <?php echo lng('FullSize') . ': <span class="badge text-bg-light border-radius-0">' . fm_get_filesize($all_files_size) . '</span>' ?>
                            <?php echo lng('File') . ': <span class="badge text-bg-light border-radius-0">' . $num_files . '</span>' ?>
                            <?php echo lng('Folder') . ': <span class="badge text-bg-light border-radius-0">' . $num_folders . '</span>' ?>
                        </td>
                    </tr>
                </tfoot>
            <?php } ?>
        </table>
    </div>

    <div class="row">
        <?php if (!FM_READONLY): ?>
            <div class="col-xs-12 col-sm-9">
                <div class="btn-group flex-wrap" data-toggle="buttons" role="toolbar">
                    <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php echo lng('SelectAll') ?> </a>
                    <a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php echo lng('UnSelectAll') ?> </a>
                    <a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php echo lng('InvertSelection') ?> </a>
                    <input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo lng('Delete selected files and folders?'); ?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php echo lng('Delete') ?> </a>
                    <input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo lng('Zip') ?> </a>
                    <input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo lng('Tar') ?> </a>
                    <input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php echo lng('Copy') ?> </a>
                </div>
            </div>
            <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION; ?></a></div>
        <?php else: ?>
            <div class="col-12"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION; ?></a></div>
        <?php endif; ?>
    </div>
</form>

<?php
fm_show_footer();

// --- END HTML ---

// Functions

/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */
function print_external($key)
{
    global $external;

    if (!array_key_exists($key, $external)) {
        // throw new Exception('Key missing in external: ' . key);
        echo "<!-- EXTERNAL: MISSING KEY $key -->";
        return;
    }

    echo "$external[$key]";
}

/**
 * Verify CSRF TOKEN and remove after certified
 * @param string $token
 * @return bool
 */
function verifyToken($token)
{
    if (hash_equals($_SESSION['token'], $token)) {
        return true;
    }
    return false;
}

/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */
function fm_rdelete($path)
{
    if (is_link($path)) {
        return unlink($path);
    } elseif (is_dir($path)) {
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rdelete($path . '/' . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return ($ok) ? rmdir($path) : false;
    } elseif (is_file($path)) {
        return unlink($path);
    }
    return false;
}

/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */
function fm_rchmod($path, $filemode, $dirmode)
{
    if (is_dir($path)) {
        if (!chmod($path, $dirmode)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rchmod($path . '/' . $file, $filemode, $dirmode)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($path)) {
        return true;
    } elseif (is_file($path)) {
        return chmod($path, $filemode);
    }
    return false;
}

/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */
function fm_is_valid_ext($filename)
{
    $allowed = (FM_FILE_EXTENSION) ? explode(',', FM_FILE_EXTENSION) : false;

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    return ($isFileAllowed) ? true : false;
}

/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */
function fm_rename($old, $new)
{
    $isFileAllowed = fm_is_valid_ext($new);

    if (!is_dir($old)) {
        if (!$isFileAllowed) return false;
    }

    return (!file_exists($new) && file_exists($old)) ? rename($old, $new) : null;
}

/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */
function fm_rcopy($path, $dest, $upd = true, $force = true)
{
    if (!is_dir($path) && !is_file($path)) {
        return false;
    }

    if (is_dir($path)) {
        if (!fm_mkdir($dest, $force)) {
            return false;
        }

        $objects = array_diff(scandir($path), ['.', '..']);

        foreach ($objects as $file) {
            if (!fm_rcopy("$path/$file", "$dest/$file", $upd, $force)) {
                return false;
            }
        }

        return true;
    }

    // Handle file copying
    return fm_copy($path, $dest, $upd);
}


/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */
function fm_mkdir($dir, $force)
{
    if (file_exists($dir)) {
        if (is_dir($dir)) {
            return $dir;
        } elseif (!$force) {
            return false;
        }
        unlink($dir);
    }
    return mkdir($dir, 0777, true);
}

/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */
function fm_copy($f1, $f2, $upd)
{
    $time1 = filemtime($f1);
    if (file_exists($f2)) {
        $time2 = filemtime($f2);
        if ($time2 >= $time1 && $upd) {
            return false;
        }
    }
    $ok = copy($f1, $f2);
    if ($ok) {
        touch($f2, $time1);
    }
    return $ok;
}

/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */
function fm_get_mime_type($file_path)
{
    if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file_path);
        finfo_close($finfo);
        return $mime;
    } elseif (function_exists('mime_content_type')) {
        return mime_content_type($file_path);
    } elseif (!stristr(ini_get('disable_functions'), 'shell_exec')) {
        $file = escapeshellarg($file_path);
        $mime = shell_exec('file -bi ' . $file);
        return $mime;
    } else {
        return '--';
    }
}

/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */
function fm_redirect($url, $code = 302)
{
    header('Location: ' . $url, true, $code);
    exit;
}

/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */
function get_absolute_path($path)
{
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}

/**
 * Clean path
 * @param string $path
 * @return string
 */
function fm_clean_path($path, $trim = true)
{
    $path = $trim ? trim($path) : $path;
    $path = trim($path, '\\/');
    $path = str_replace(array('../', '..\\'), '', $path);
    $path =  get_absolute_path($path);
    if ($path == '..') {
        $path = '';
    }
    return str_replace('\\', '/', $path);
}

/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */
function fm_get_parent_path($path)
{
    $path = fm_clean_path($path);
    if ($path != '') {
        $array = explode('/', $path);
        if (count($array) > 1) {
            $array = array_slice($array, 0, -1);
            return implode('/', $array);
        }
        return '';
    }
    return false;
}

function fm_get_display_path($file_path)
{
    global $path_display_mode, $root_path, $root_url;
    switch ($path_display_mode) {
        case 'relative':
            return array(
                'label' => 'Path',
                'path' => fm_enc(fm_convert_win(str_replace($root_path, '', $file_path)))
            );
        case 'host':
            $relative_path = str_replace($root_path, '', $file_path);
            return array(
                'label' => 'Host Path',
                'path' => fm_enc(fm_convert_win('/' . $root_url . '/' . ltrim(str_replace('\\', '/', $relative_path), '/')))
            );
        case 'full':
        default:
            return array(
                'label' => 'Full Path',
                'path' => fm_enc(fm_convert_win($file_path))
            );
    }
}

/**
 * Check file is in exclude list
 * @param string $name The name of the file/folder
 * @param string $path The full path of the file/folder
 * @return bool
 */
function fm_is_exclude_items($name, $path)
{
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    if (isset($exclude_items) and sizeof($exclude_items)) {
        unset($exclude_items);
    }

    $exclude_items = FM_EXCLUDE_ITEMS;
    if (version_compare(PHP_VERSION, '7.0.0', '<')) {
        $exclude_items = unserialize($exclude_items);
    }
    if (!in_array($name, $exclude_items) && !in_array("*.$ext", $exclude_items) && !in_array($path, $exclude_items)) {
        return true;
    }
    return false;
}

/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */
function fm_get_translations($tr)
{
    try {
        $content = trr();
        if ($content !== FALSE) {
            $lng = json_decode($content, TRUE);
            global $lang_list;
            foreach ($lng["language"] as $key => $value) {
                $code = $value["code"];
                $lang_list[$code] = $value["name"];
                if ($tr)
                    $tr[$code] = $value["translation"];
            }
            return $tr;
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function trr(){
$data = 'ewogICJhcHBOYW1lIjogIlRpbnkgRmlsZSBNYW5hZ2VyIiwKICAidmVyc2lvbiI6ICIyLjYiLAogICJsYW5ndWFnZSI6IFsKICAgIHsKICAgICAgIm5hbWUiOiAiUm9tw6JuxIMiLAogICAgICAiY29kZSI6ICJybyIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQXBwTmFtZSI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFwcFRpdGxlIjogIlRpdGx1IGFwbGljYcibaWUiLAogICAgICAgICJMb2dpbiI6ICJBdXRlbnRpZmljYXJlIiwKICAgICAgICAiVXNlcm5hbWUiOiAiTnVtZSB1dGlsaXphdG9yIiwKICAgICAgICAiUGFzc3dvcmQiOiAiUGFyb2zEgyIsCiAgICAgICAgIkxvZ291dCI6ICJJZciZaXJlIiwKICAgICAgICAiTW92ZSI6ICJNdXTEgyIsCiAgICAgICAgIkNvcHkiOiAiQ29waWF6xIMiLAogICAgICAgICJTYXZlIjogIlNhbHZlYXrEgyIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJTZWxlY3RlYXrEgyB0b3QiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJEZXNlbGVjdGVhesSDIHRvdCIsCiAgICAgICAgIkZpbGUiOiAiRmnImWllciIsCiAgICAgICAgIkJhY2siOiAiw45uYXBvaSIsCiAgICAgICAgIlNpemUiOiAiRGltZW5zaXVuZSIsCiAgICAgICAgIlBlcm1zIjogIlBlcm1pc2l1bmkiLAogICAgICAgICJNb2RpZmllZCI6ICJNb2RpZmljYXQiLAogICAgICAgICJPd25lciI6ICJQcm9wcmlldGFyIiwKICAgICAgICAiU2VhcmNoIjogIkNhdXTEgyIsCiAgICAgICAgIk5ld0l0ZW0iOiAiTm91IiwKICAgICAgICAiRm9sZGVyIjogIkRvc2FyIiwKICAgICAgICAiRGVsZXRlIjogIsiYdGVyZ2UiLAogICAgICAgICJSZW5hbWUiOiAiUmVkZW51bWXImXRlIiwKICAgICAgICAiQ29weVRvIjogIkNvcGlhesSDIMOubiIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiTGVnxIN0dXLEgyBkaXJlY3TEgyIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIlNlIMOubmNhcmPEgyBmaciZaWVyZSIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIlNjaGltYsSDIHBlcm1pc2l1bmlsZSIsCiAgICAgICAgIkNvcHlpbmciOiAiU2UgY29waWF6xIMiLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIkNyZWVhesSDIGVsZW1lbnQgbm91IiwKICAgICAgICAiTmFtZSI6ICJEZW51bWlyZSIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIlJlZGFjdG9yIGF2YW5zYXQiLAogICAgICAgICJSZW1lbWJlck1lIjogIsiaaW5lLW3EgyBtaW50ZSIsCiAgICAgICAgIkFjdGlvbnMiOiAiQWPIm2l1bmkiLAogICAgICAgICJVcGxvYWQiOiAiw45uY2FyY8SDIiwKICAgICAgICAiQ2FuY2VsIjogIkFudWxlYXrEgyIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICJJbnZlcnNlYXrEgyBzZWxlY8ibaWEiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICJEb3NhciBkZXN0aW5hyJtpZSIsCiAgICAgICAgIkl0ZW1UeXBlIjogIlRpcCBlbGVtZW50IiwKICAgICAgICAiSXRlbU5hbWUiOiAiRGVudW1pcmUgZWxlbWVudCIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICJDcmVlYXrEgyBhY3VtIiwKICAgICAgICAiRG93bmxvYWQiOiAiRGVzY2FyY8SDIiwKICAgICAgICAiT3BlbiI6ICJEZXNjaGlkZSIsCiAgICAgICAgIlVuWmlwIjogIkRlY29tcHJpbcSDIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICJEZWNvbXByaW3EgyDDrm4gZG9zYXIiLAogICAgICAgICJFZGl0IjogIk1vZGlmaWPEgyIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJSZWRhY3RvciBzdGFuZGFyZCIsCiAgICAgICAgIkJhY2tVcCI6ICJDb3BpZSBkZSByZXplcnbEgyIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICJEb3NhciBzdXJzxIMiLAogICAgICAgICJGaWxlcyI6ICJGaciZaWVyZSIsCiAgICAgICAgIkNoYW5nZSI6ICJTY2hpbWLEgyIsCiAgICAgICAgIlNldHRpbmdzIjogIkNvbmZpZ3VyxINyaSIsCiAgICAgICAgIkxhbmd1YWdlIjogIkxpbWJhIiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICJNZW1vcmllIHV0aWxpemF0xIMiLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIkRpbWVuc2l1bmUgcGFydGnIm2llIiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAiUmFwb3J0YXJlIGVyb3JpIiwKICAgICAgICAiU2hvd0hpZGRlbkZpbGVzIjogIkFyYXTEgyBmaciZaWVyZSBhc2N1bnNlIiwKICAgICAgICAiRnVsbCBzaXplIjogIkRpbWVuc2l1bmUgdG90YWzEgyIsCiAgICAgICAgIkhlbHAiOiAiQWp1dG9yIiwKICAgICAgICAiRnJlZSBvZiI6ICJMaWJlciBkaW4iLAogICAgICAgICJQcmV2aWV3IjogIlByZXZpenVhbGl6ZWF6xIMiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICJEb2N1bWVudGHIm2llIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIlJhcG9ydGVhesSDIGRlZmVjdCIsCiAgICAgICAgIkdlbmVyYXRlIjogIkdlbmVyZWF6xIMiLAogICAgICAgICJGdWxsU2l6ZSI6ICJEaW1lbnNpdW5lIGNvbXBsZXTEgyIsCiAgICAgICAgIkZyZWVPZiI6ICJMaWJlciBkaW4iLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIkNhbGN1bGVhesSDIGRpbWVuc2l1bmVhIGRvc2FydWx1aSIsCiAgICAgICAgIlByb2Nlc3NJRCI6ICJJZC4gcHJvY2VzIiwKICAgICAgICAiQ3JlYXRlZCI6ICJDcmVhdCIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogIkFzY3VuZGUgY29sb2FuZWxlIiwKICAgICAgICAiRm9sZGVyIGlzIGVtcHR5IjogIkRvc2FydWwgZXN0ZSBnb2wiLAogICAgICAgICJDaGVjayBMYXRlc3QgVmVyc2lvbiI6ICJWZXJpZmljxIMgdWx0aW1hIHZlcnNpdW5lIiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAiR2VuZXJlYXrEgyBoYXNoIG5vdSBwYXJvbMSDIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiU3VudGXIm2kgYXV0ZW50aWZpY2F0IiwKICAgICAgICAiTG9naW4gZmFpbGVkLiBJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIjogIkF1dGVudGlmaWNhcmUgZciZdWF0xIMuIFV0aWxpemF0b3Igc2F1IHBhcm9sxIMgaW5jb3JlY3RlIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogIkdlbmVyYXJlIGhhc2ggcGFyb2zEgyBuZXN1cG9ydGF0xIMsIGFjdHVhbGl6YcibaSB2ZXJzaXVuZWEgZGUgUEhQIiwKICAgICAgICAiVGhlbWUiOiAiVGVtYXRpY8SDIiwKICAgICAgICAiZGFyayI6ICLDjm50dW5lY2F0xIMiLAogICAgICAgICJsaWdodCI6ICJMdW1pbm9hc8SDIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJIdW5nYXJpYW4iLAogICAgICAiY29kZSI6ICJodSIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQXBwTmFtZSI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFwcFRpdGxlIjogIkbDoWpsIGtlemVsxZEiLAogICAgICAgICJMb2dpbiI6ICJCZWplbGVudGtlesOpcyIsCiAgICAgICAgIlVzZXJuYW1lIjogIkZlbGhhc3puw6Fsw7NpIG7DqXYiLAogICAgICAgICJQYXNzd29yZCI6ICJKZWxzesOzIiwKICAgICAgICAiTG9nb3V0IjogIktpamVsZW50a2V6w6lzIiwKICAgICAgICAiTW92ZSI6ICJNb3pnYXTDoXMiLAogICAgICAgICJDb3B5IjogIk3DoXNvbMOhcyIsCiAgICAgICAgIlNhdmUiOiAiTWVudMOpcyIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJNaW5kZXQga2lqZWzDtmwiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJLaWplbMO2bMOpc3QgbWVnc3rDvG50ZXQiLAogICAgICAgICJGaWxlIjogIkbDoWpsIiwKICAgICAgICAiQmFjayI6ICJWaXNzemEiLAogICAgICAgICJTaXplIjogIk3DqXJldCIsCiAgICAgICAgIlBlcm1zIjogIkpvZ29rIiwKICAgICAgICAiTW9kaWZpZWQiOiAiTcOzZG9zw610w6FzIiwKICAgICAgICAiT3duZXIiOiAiVHVsYWpkb25vcyIsCiAgICAgICAgIlNlYXJjaCI6ICJLZXJlc8OpcyIsCiAgICAgICAgIk5ld0l0ZW0iOiAiw5pqIiwKICAgICAgICAiRm9sZGVyIjogIkvDtm55dnTDoXIiLAogICAgICAgICJEZWxldGUiOiAiVMO2cmzDqXMiLAogICAgICAgICJSZW5hbWUiOiAiw4F0bmV2ZXrDqXMiLAogICAgICAgICJDb3B5VG8iOiAiTcOhc29sw6FzIGlkZSIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiS8O2enZldGxlbiBsaW5rIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiRsOhamxvayBmZWx0w7ZsdMOpc2UiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICJKb2dvc3VsdHPDoWdvayBtw7Nkb3PDrXTDoXNhIiwKICAgICAgICAiQ29weWluZyI6ICJNw6Fzb2zDoXMiLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIsOaaiBsw6l0cmVob3rDoXNhIiwKICAgICAgICAiTmFtZSI6ICJOw6l2IiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAiSGFsYWTDsyBzemVya2VzenTFkSIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAiRW1sw6lrZXp6ZW4gcsOhbSIsCiAgICAgICAgIkFjdGlvbnMiOiAiTcWxdmVsZXRlayIsCiAgICAgICAgIlVwbG9hZCI6ICJGZWx0w7ZsdMOpcyIsCiAgICAgICAgIkNhbmNlbCI6ICJNw6lnc2VtIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogIktpamVsw7ZsdMOpcyBtZWdmb3Jkw610w6FzYSIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIkPDqWxtYXBwYSIsCiAgICAgICAgIkl0ZW1UeXBlIjogIkVsZW0gdMOtcHVzIiwKICAgICAgICAiSXRlbU5hbWUiOiAiRWxlbSBuw6l2IiwKICAgICAgICAiQ3JlYXRlTm93IjogIkVsa8Opc3rDrXQiLAogICAgICAgICJEb3dubG9hZCI6ICJMZXTDtmx0w6lzIiwKICAgICAgICAiT3BlbiI6ICJNZWdueWl0w6FzIiwKICAgICAgICAiVW5aaXAiOiAiS2l0w7Ztw7Zyw610w6lzIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICJLaXTDtm3DtnLDrXTDoXMgYWRvdHQgbWFwcMOhYmEiLAogICAgICAgICJFZGl0IjogIlN6ZXJrZXN6dMOpcyIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJBbGFwIHN6ZXJrZXN6dMWRIiwKICAgICAgICAiQmFja1VwIjogIkJpenRvbnPDoWdpIG1lbnTDqXMiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiRm9ycsOhcyBrw7ZueXZ0w6FyIiwKICAgICAgICAiRmlsZXMiOiAiU3rFsXLFkSIsCiAgICAgICAgIkNoYW5nZSI6ICJNw7Nkb3PDrXTDoXMiLAogICAgICAgICJTZXR0aW5ncyI6ICJCZcOhbGzDrXTDoXNvayIsCiAgICAgICAgIkxhbmd1YWdlIjogIk55ZWx2IiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICJIYXN6bsOhbHQgbWVtw7NyaWEiLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIlBhcnRpY2nDsyBtw6lyZXRlIiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAiSGliYWJlamVsbnTDqXMiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAiUmVqdGV0dCBmw6FqbG9rIG1lZ2plbGVuw610w6lzZSIsCiAgICAgICAgIkZ1bGwgc2l6ZSI6ICJUZWxqZXMgbcOpcmV0IiwKICAgICAgICAiSGVscCI6ICJTZWfDrXRzw6lnIiwKICAgICAgICAiRnJlZSBvZiI6ICJlYmLFkWwgc3phYmFmIiwKICAgICAgICAiUHJldmlldyI6ICJFbMWRbsOpemV0IiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAiU8O6Z8OzIGRva3VtZW50dW0iLAogICAgICAgICJSZXBvcnQgSXNzdWUiOiAiUHJvYmzDqW1hIGplbGVudMOpc2UiLAogICAgICAgICJHZW5lcmF0ZSI6ICJHZW5lcsOhbMOhcyIsCiAgICAgICAgIkZ1bGxTaXplIjogIlRlbGplcyBtw6lyZXQiLAogICAgICAgICJGcmVlT2YiOiAiZWJixZFsIHN6YWJhZCIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAiQmVjc8O8bHQgbWFwcGEgbcOpcmV0IiwKICAgICAgICAiUHJvY2Vzc0lEIjogIkZvbHlhbWF0IGF6b25vc8OtdMOzIiwKICAgICAgICAiQ3JlYXRlZCI6ICJLw6lzesOtdMOpcyIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogIk9zemxvcG9rIGVscmVqdMOpc2UiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAiQSBtYXBwYSDDvHJlcyIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIsOaaiB2ZXJ6acOzIGVsbGVuxZFyesOpc2UiLAogICAgICAgICJHZW5lcmF0ZSBuZXcgcGFzc3dvcmQgaGFzaCI6ICLDmmogamVsc3rDsyBoYXNoIGzDqXRyZWhvesOhc2EiLAogICAgICAgICJZb3UgYXJlIGxvZ2dlZCBpbiI6ICLDlm4gc2lrZXJlc2VuIGJlamVsZW50a2V6ZXR0IiwKICAgICAgICAiTG9naW4gZmFpbGVkLiBJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIjogIlNpa2VydGVsZW4gYmVqZWxlbnRrZXrDqXMuIEhpYsOhcyBmZWxoYXN6bsOhbMOzaSBuw6l2IHZhZ3kgamVsc3rDsy4iLAogICAgICAgICJwYXNzd29yZF9oYXNoIG5vdCBzdXBwb3J0ZWQsIFVwZ3JhZGUgUEhQIHZlcnNpb24iOiAicGFzc3dvcmRfaGFzaCBlYmJlbiBhIFBIUCB2ZXJ6acOzYmFuIG5lbSB0w6Ftb2dhdG90dCIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiTm9yc2siLAogICAgICAiY29kZSI6ICJubyIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQXBwTmFtZSI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFwcFRpdGxlIjogIkZpbCBiZWhhbmRsZXIiLAogICAgICAgICJMb2dpbiI6ICJMb2dnIGlubiIsCiAgICAgICAgIlVzZXJuYW1lIjogIkJydWtlcm5hdm4iLAogICAgICAgICJQYXNzd29yZCI6ICJQYXNzb3JkIiwKICAgICAgICAiTG9nb3V0IjogIkxvZ2cgdXQiLAogICAgICAgICJNb3ZlIjogIkZseXR0IiwKICAgICAgICAiQ29weSI6ICJLb3BpZXIiLAogICAgICAgICJTYXZlIjogIkxhZ3JlIiwKICAgICAgICAiU2VsZWN0QWxsIjogIlZlbGcgYWx0IiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiQXYgdmVsZyBhbHQiLAogICAgICAgICJGaWxlIjogIkZpbCIsCiAgICAgICAgIkJhY2siOiAiVGlsYmFrZSIsCiAgICAgICAgIlNpemUiOiAiU3TDuHJlbHNlIiwKICAgICAgICAiUGVybXMiOiAiVXByYXduaWVuaWEiLAogICAgICAgICJNb2RpZmllZCI6ICJFbmRyZXQiLAogICAgICAgICJPd25lciI6ICJFaWVyIiwKICAgICAgICAiU2VhcmNoIjogIlPDuGsiLAogICAgICAgICJOZXdJdGVtIjogIk55IiwKICAgICAgICAiRm9sZGVyIjogIk1hcHBlIiwKICAgICAgICAiRGVsZXRlIjogIlNsZXR0IiwKICAgICAgICAiUmVuYW1lIjogIkdpIG55dHQgbmF2biIsCiAgICAgICAgIkNvcHlUbyI6ICJLb3BpZXIgdGlsIiwKICAgICAgICAiRGlyZWN0TGluayI6ICJEaXJla3RlbGluayIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIkxhc3RlciBvcHAgZmlsZXIiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICJFbmRyZSByZXR0aWdoZXRlciIsCiAgICAgICAgIkNvcHlpbmciOiAiS29waWVyZXIiLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIkxhZyBueSIsCiAgICAgICAgIk5hbWUiOiAiTmF2biIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIkF2YW5zZXJ0IFRla3N0YmVoYW5kbGVyIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJIdXNrIG1lZyIsCiAgICAgICAgIkFjdGlvbnMiOiAiSGFuZGxpbmdlciIsCiAgICAgICAgIlVwbG9hZCI6ICJMYXN0IG9wcCIsCiAgICAgICAgIkNhbmNlbCI6ICJBdmJyeXQiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiSW52ZXJ0ZXIgdmFsZ3RlIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiTcOlbG1hcHBlIiwKICAgICAgICAiSXRlbVR5cGUiOiAiRmlsdHlwZSIsCiAgICAgICAgIkl0ZW1OYW1lIjogIkZpbG5hdm4iLAogICAgICAgICJDcmVhdGVOb3ciOiAiTGFnIG7DpSIsCiAgICAgICAgIkRvd25sb2FkIjogIkxhc3QgbmVkIiwKICAgICAgICAiT3BlbiI6ICLDhXBuZSIsCiAgICAgICAgIlVuWmlwIjogIlBha2sgdXQiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIlBha2sgdXQgdGlsIG1hcHBlIiwKICAgICAgICAiRWRpdCI6ICJFbmRyZSIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJOb3JtYWwgVGVrc3RiZWhhbmRsZXIiLAogICAgICAgICJCYWNrVXAiOiAiU2lra2VyaGV0c2tvcGllciIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICJLaWxkZW1hcHBlIiwKICAgICAgICAiRmlsZXMiOiAiRmlsZXIiLAogICAgICAgICJDaGFuZ2UiOiAiRW5kcmUiLAogICAgICAgICJTZXR0aW5ncyI6ICJJbnN0aWxsaW5nZXIiLAogICAgICAgICJMYW5ndWFnZSI6ICJTcHLDpWsiLAogICAgICAgICJNZW1vcnlVc2VkIjogIk1pbm5lIGJydWt0IiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICJQYXJ0aXRpb25zIHN0w7hycmVsc2UiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICJFcnJvciByYXBvcnRlcmluZyIsCiAgICAgICAgIlNob3dIaWRkZW5GaWxlcyI6ICJWaXMgc2tqdWx0ZSBmaWxlciIsCiAgICAgICAgIkZ1bGwgc2l6ZSI6ICJNYXBwZSBzdMO4cmVsc2UiLAogICAgICAgICJIZWxwIjogIkhqZWxwIiwKICAgICAgICAiRnJlZSBvZiI6ICJMZWRpZyBhdiIsCiAgICAgICAgIlByZXZpZXciOiAiRm9yaMOlbmRzdmlzbmluZyIsCiAgICAgICAgIkhlbHAgRG9jdW1lbnRzIjogIkhlbHAgZG9rdW1lbnRlciIsCiAgICAgICAgIlJlcG9ydCBJc3N1ZSI6ICJSYXBvcnRlciBwcm9ibGVtIiwKICAgICAgICAiR2VuZXJhdGUiOiAiR2VuZXJlciIsCiAgICAgICAgIkZ1bGxTaXplIjogIk1hcHBlIHN0w7hyZWxzZSIsCiAgICAgICAgIkZyZWVPZiI6ICJsZWRpZyBhdiIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAiS2Fsa3VsZXIgbWFwcGVzdMO4cmVsc2UiLAogICAgICAgICJQcm9jZXNzSUQiOiAiUHJvc2VzcyBJRCIsCiAgICAgICAgIkNyZWF0ZWQiOiAiT3BwcmV0dGV0IiwKICAgICAgICAiSGlkZUNvbHVtbnMiOiAiU2tqdWwgdGlsZ2FuZ2VyL2VpZXIga29sb25uZXIiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAiTWFwcGVuIGVyIHRvbSIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIlNlIGV0dGVyIG9wcGRhdGVyaW5nZXIiLAogICAgICAgICJHZW5lcmF0ZSBuZXcgcGFzc3dvcmQgaGFzaCI6ICJHZW5lcmVyIGVuIG55IHBhc3NvcmQgaGFzaCIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIkR1IGVyIGlubmxvZ2dldCIsCiAgICAgICAgIkxvZ2luIGZhaWxlZC4gSW52YWxpZCB1c2VybmFtZSBvciBwYXNzd29yZCI6ICJJbm5sb2dnaW5nIGZlaWxldC4gRmVpbCBicnVrZXJuYXZuIGVsbGVyIHBhc3NvcmQiLAogICAgICAgICJwYXNzd29yZF9oYXNoIG5vdCBzdXBwb3J0ZWQsIFVwZ3JhZGUgUEhQIHZlcnNpb24iOiAicGFzc3dvcmRfaGFzaCBlciBpa2tlIHN0w7h0dGV0LCB2ZW5saWdzdCBvcHBkYXRlciBQSFAgdmVyc2pvbmVuIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICLZgdin2LHYs9uMIiwKICAgICAgImNvZGUiOiAiRmEiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIlRpbnkgRmlsZSBNYW5hZ2VyIjogItmF2K/bjNix24zYqiDZgdin24zZhCDaqdmI2obaqSIsCiAgICAgICAgIkZpbGUgTWFuYWdlciI6ICLZhdiv24zYsduM2Kog2YHYp9uM2YQiLAogICAgICAgICJTaWduIGluIjogItmI2LHZiNivIiwKICAgICAgICAiVXNlcm5hbWUiOiAi2YbYp9mFINqp2KfYsdio2LHbjCIsCiAgICAgICAgIlBhc3N3b3JkIjogItqv2LDYsdmI2KfamNmHIiwKICAgICAgICAiU2lnbiBPdXQiOiAi2K7YsdmI2KwiLAogICAgICAgICJNb3ZlIjogItis2KfYqNis2KfbjNuMIiwKICAgICAgICAiQ29weSI6ICLaqdm+24wiLAogICAgICAgICJTYXZlIjogItiw2K7bjNix2YciLAogICAgICAgICJTZWxlY3QgYWxsIjogItin2YbYqtiu2KfYqCDZh9mF2YciLAogICAgICAgICJVbnNlbGVjdCBhbGwiOiAi2KfZhtiq2K7Yp9ioINmG2qnYsdiv2YYg2YfZhdmHIiwKICAgICAgICAiRmlsZSI6ICLZgdin24zZhCIsCiAgICAgICAgIkJhY2siOiAi2KjYsdqv2LTYqiIsCiAgICAgICAgIlNpemUiOiAi2K3YrNmFIiwKICAgICAgICAiUGVybXMiOiAi2K/Ys9iq2LHYs9uMIiwKICAgICAgICAiTW9kaWZpZWQiOiAi2YjbjNix2KfbjNi0INi02K/ZhyIsCiAgICAgICAgIk93bmVyIjogItmF2KfZhNqpIiwKICAgICAgICAiU2VhcmNoIjogItis2LPYqtis2YgiLAogICAgICAgICJOZXcgSXRlbSI6ICLYp9mB2LLZiNiv2YYiLAogICAgICAgICJGb2xkZXIiOiAi2b7ZiNi02YciLAogICAgICAgICJEZWxldGUiOiAi2K3YsNmBIiwKICAgICAgICAiUmVuYW1lIjogItiq2LrbjNuM2LEg2YbYp9mFIiwKICAgICAgICAiQ29weSB0byI6ICLaqdm+24wg2K/YsSIsCiAgICAgICAgIkRpcmVjdCBsaW5rIjogItmE24zZhtqpINmF2LPYqtmC24zZhSIsCiAgICAgICAgIlVwbG9hZCBGaWxlcyI6ICLYp9m+2YTZiNivINmB2KfbjNmEINmH2KciLAogICAgICAgICJDaGFuZ2UgUGVybWlzc2lvbnMiOiAi2KrYutuM24zYsSDYr9iz2KrYsdiz24wiLAogICAgICAgICJDb3B5aW5nIjogItqp2b7bjCDaqdix2K/ZhiIsCiAgICAgICAgIkNyZWF0ZSBOZXcgSXRlbSI6ICLYp9mB2LLZiNiv2YYiLAogICAgICAgICJOYW1lIjogItmG2KfZhSIsCiAgICAgICAgIkFkdmFuY2VkIEVkaXRvciI6ICLZiNuM2LHYp9uM2LTar9ixINm+24zYtNix2YHYqtmHIiwKICAgICAgICAiUmVtZW1iZXIgTWUiOiAi2YXYsdinINio2Ycg2K7Yp9i32LEg2K/Yp9i02KrZhyDYqNin2LRlIiwKICAgICAgICAiQWN0aW9ucyI6ICLYp9qp2LTZhiIsCiAgICAgICAgIlVwbG9hZCI6ICLYotm+2YTZiNivIiwKICAgICAgICAiQ2FuY2VsIjogItin2YbYtdix2KfZgSIsCiAgICAgICAgIkludmVydCBTZWxlY3Rpb24iOiAi2YXYudqp2YjYsyDaqdix2K/ZhiDYp9mG2KrYrtin2Kgg2YfYpyIsCiAgICAgICAgIkRlc3RpbmF0aW9uIEZvbGRlciI6ICLZvtmI2LTZhyDZhdmC2LXYryIsCiAgICAgICAgIkl0ZW0gVHlwZSI6ICLZhtmI2Lkg2YXZiNix2K8iLAogICAgICAgICJJdGVtIE5hbWUiOiAi2YbYp9mFINmF2YjYsdivIiwKICAgICAgICAiQ3JlYXRlIE5vdyI6ICLYp9uM2KzYp9ivINiv2LEg2KfZhNin2YYiLAogICAgICAgICJEb3dubG9hZCI6ICLYr9in2YbZhNmI2K8iLAogICAgICAgICJPcGVuIjogItio2KfYsiDaqdix2K/ZhiIsCiAgICAgICAgIlVuWmlwIjogIlVuWmlwIiwKICAgICAgICAiVW5aaXAgdG8gZm9sZGVyIjogItiu2KfYsdisINqp2LHYr9mGINin2LIg2K3Yp9mE2Kog2YHYtNix2K/ZhyIsCiAgICAgICAgIkVkaXQiOiAi2YjbjNix2KfbjNi0IiwKICAgICAgICAiTm9ybWFsIEVkaXRvciI6ICLZiNuM2LHYp9uM2LQg2YXYudmF2YjZhNuMIiwKICAgICAgICAiQmFjayBVcCI6ICLYqNix2q/YtNiqINio2KfZhNinIiwKICAgICAgICAiU291cmNlIEZvbGRlciI6ICLZhdmG2KjZhyDZvtmI2LTZhyIsCiAgICAgICAgIkZpbGVzIjogItmB2KfbjNmEINmH2KciLAogICAgICAgICJDaGFuZ2UiOiAi2KrYutuM24zYsSIsCiAgICAgICAgIlNldHRpbmdzIjogItiq2YbYuNuM2YXYp9iqIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAi2LLYqNin2YYiLAogICAgICAgICJNZW1vcnkgdXNlZCI6ICLYrdin2YHYuNmHINin2LPYqtmB2KfYr9mHINi02K/ZhyIsCiAgICAgICAgIlBhcnRpdGlvbiBzaXplIjogItit2KzZhSDZvtin2LHYqtuM2LTZhiIsCiAgICAgICAgIkVycm9yIFJlcG9ydGluZyI6ICLar9iy2KfYsdi0INiu2LfYpyIsCiAgICAgICAgIlNob3cgSGlkZGVuIEZpbGVzIjogItmG2YXYp9uM2LQg2YHYp9uM2YQg2YfYp9uMINmF2K7ZgduMIiwKICAgICAgICAiRnVsbCBzaXplIjogItmB2LbYpyDZvtixINin2LPYqiIsCiAgICAgICAgIkhlbHAiOiAi2LHYp9mH2YbZhdinIiwKICAgICAgICAiRnJlZSBvZiI6ICLYrtin2YTbjNuMINin2LIiLAogICAgICAgICJQcmV2aWV3IjogItm+24zYtNmG2YXYp9uM2LQiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICLZhdiz2KrZhtiv2KfYqiDaqdmF2qnbjCIsCiAgICAgICAgIlJlcG9ydCBJc3N1ZSI6ICLar9iy2KfYsdi0INmF2LTaqdmEIiwKICAgICAgICAiR2VuZXJhdGUiOiAi2KfbjNis2KfYryIsCiAgICAgICAgIkZ1bGwgU2l6ZSI6ICLYqtmF2KfZhSDYrdis2YUiLAogICAgICAgICJmcmVlIG9mIjogItiu2KfZhNuMINin2LIiLAogICAgICAgICJDYWxjdWxhdGUgZm9sZGVyIHNpemUiOiAi2YXYrdin2LPYqNmHINit2KzZhSDZvtmI2LTZhyIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogItio2LHYsdiz24wg2KLYrtix24zZhiDZhtiz2K7ZhyIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogItin24zYrNin2K8g2q/YsNix2YjYp9qY2Ycg2KzYr9uM2K8iLAogICAgICAgICJIaWRlIFBlcm1zL093bmVyIGNvbHVtbnMiOiAi2YXYrtmB24wg2qnYsdiv2YYg2LPYqtmI2YYg2YfYp9uMINiv2LPYqtix2LPbjCDZiCDZhdin2YTaqSIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAi0KDRg9GB0YHQutC40LkiLAogICAgICAiY29kZSI6ICJydSIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQWNjZXNzIGRlbmllZC4gSVAgcmVzdHJpY3Rpb24gYXBwbGljYWJsZSI6ICLQlNC+0YHRgtGD0L8g0YEg0LTQsNC90L3QvtCz0L4gSVAg0LfQsNC/0YDQtdGJ0ZHQvSIsCiAgICAgICAgIkFjdGlvbnMiOiAi0JTQtdC50YHRgtCy0LjRjyIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogItCj0LvRg9GH0YjQtdC90L3Ri9C5INGA0LXQtNCw0LrRgtC+0YAiLAogICAgICAgICJBZHZhbmNlZCBTZWFyY2giOiAi0KDQsNGB0YjQuNGA0LXQvdC90YvQuSDQv9C+0LjRgdC6IiwKICAgICAgICAiYWxyZWFkeSBleGlzdHMiOiAi0YPQttC1INGB0YPRidC10YHRgtCy0YPQtdGCIiwKICAgICAgICAiQXBwTmFtZSI6ICLQpNCw0LnQu9C+0LLRi9C5INC80LXQvdC10LTQttC10YAiLAogICAgICAgICJBcHBUaXRsZSI6ICLQpNCw0LnQu9C+0LLRi9C5INC80LXQvdC10LTQttC10YAiLAogICAgICAgICJBcmNoaXZlIjogItCQ0YDRhdC40LIiLAogICAgICAgICJBcmNoaXZlIG5vdCBjcmVhdGVkIjogItCQ0YDRhdC40LIg0L3QtSDRgdC+0LfQtNCw0L0iLAogICAgICAgICJBcmNoaXZlIG5vdCB1bnBhY2tlZCI6ICLQkNGA0YXQuNCyINC90LUg0YDQsNGB0L/QsNC60L7QstCw0L0iLAogICAgICAgICJBcmNoaXZlIHVucGFja2VkIjogItCQ0YDRhdC40LIg0YDQsNGB0L/QsNC60L7QstCw0L0iLAogICAgICAgICJCYWNrIjogItCS0LXRgNC90YPRgtGM0YHRjyIsCiAgICAgICAgIkJhY2tVcCI6ICLQoNC10LfQtdGA0LLQvdCw0Y8g0LrQvtC/0LjRjyIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAi0KHRh9C40YLQsNGC0Ywg0YDQsNC30LzQtdGAINC/0LDQv9C60LgiLAogICAgICAgICJDYW5jZWwiOiAi0J7RgtC80LXQvdCwIiwKICAgICAgICAiQ2hhbmdlIjogItCY0LfQvNC10L3QtdC90LjRjyIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogItCY0LfQvNC10L3QuNGC0Ywg0L/RgNCw0LLQsCIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogItCf0YDQvtCy0LXRgNC40YLRjCDQv9C+0YHQu9C10LTQvdGO0Y4g0LLQtdGA0YHQuNGOIiwKICAgICAgICAiQ29waWVkIGZyb20iOiAi0KHQutC+0L/QuNGA0L7QstCw0L0o0LApIiwKICAgICAgICAiQ29weSI6ICLQmtC+0L/QuNGA0L7QstCw0YLRjCIsCiAgICAgICAgIkNvcHlpbmciOiAi0JrQvtC/0LjRgNC+0LLQsNGC0YwiLAogICAgICAgICJDb3B5VG8iOiAi0KHQutC+0L/QuNGA0L7QstCw0YLRjCDQsiIsCiAgICAgICAgIkNyZWF0ZSBhcmNoaXZlPyI6ICLQodC+0LfQtNCw0YLRjCDQsNGA0YXQuNCyPyIsCiAgICAgICAgIkNyZWF0ZWQiOiAi0KHQvtC30LTQsNC9KNCwKSIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAi0KHQvtC30LTQsNGC0Ywg0L3QvtCy0YvQuSIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICLQodC+0LfQtNCw0YLRjCDRgdC10LnRh9Cw0YEiLAogICAgICAgICJkYXJrIjogItGC0ZHQvNC90LDRjyIsCiAgICAgICAgIkRlbGV0ZSI6ICLQo9C00LDQu9C40YLRjCIsCiAgICAgICAgIkRlbGV0ZWQiOiAi0YPQtNCw0LvRkdC9KNC10L3QsCkiLAogICAgICAgICJEZWxldGUgc2VsZWN0ZWQgZmlsZXMgYW5kIGZvbGRlcnM/IjogItCj0LTQsNC70LjRgtGMINCy0YvQsdGA0LDQvdC90YvQtSDRhNCw0LnQu9GLINC4INC/0LDQv9C60Lg/IiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAi0J/QsNC/0LrQsCDQvdCw0LfQvdCw0YfQtdC90LjRjyIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAi0KHRgdGL0LvQutCwIiwKICAgICAgICAiRG93bmxvYWQiOiAi0JfQsNCz0YDRg9C30LrQsCIsCiAgICAgICAgIkVkaXQiOiAi0KDQtdC00LDQutGC0LjRgNC+0LLQsNGC0YwiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICLQodC+0L7QsdGJ0LXQvdC40Y8g0L7QsSDQvtGI0LjQsdC60LDRhSIsCiAgICAgICAgIkVycm9yIHdoaWxlIGNvcHlpbmcgZnJvbSI6ICLQntGI0LjQsdC60LAg0L/RgNC4INC60L7Qv9C40YDQvtCy0LDQvdC40LgiLAogICAgICAgICJFcnJvciB3aGlsZSBkZWxldGluZyBpdGVtcyI6ICLQntGI0LjQsdC60LAg0L/RgNC4INGD0LTQsNC70LXQvdC40Lgg0Y3Qu9C10LzQtdC90YLQvtCyIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZmV0Y2hpbmcgYXJjaGl2ZSBpbmZvIjogItCe0YjQuNCx0LrQsCDQv9GA0Lgg0LjQt9Cy0LvQtdGH0LXQvdC40Lgg0LjQvdGE0L7RgNC80LDRhtC40Lgg0LjQtyDQsNGA0YXQuNCy0LAiLAogICAgICAgICJFcnJvciB3aGlsZSBtb3ZpbmcgZnJvbSI6ICLQntGI0LjQsdC60LAg0L/RgNC4INC/0LXRgNC10LzQtdGJ0LXQvdC40LgiLAogICAgICAgICJFcnJvciB3aGlsZSByZW5hbWluZyBmcm9tIjogItCe0YjQuNCx0LrQsCDQv9GA0Lgg0L/QtdGA0LXQuNC80LXQvdC+0LLQsNC90LjQuCIsCiAgICAgICAgIkV4ZWN1dGUiOiAi0JjRgdC/0L7Qu9C90LXQvdC40LUiLAogICAgICAgICJGaWxlIjogItCk0LDQudC7IiwKICAgICAgICAiRmlsZSBleHRlbnNpb24gaXMgbm90IGFsbG93ZWQiOiAi0JfQsNC/0YDQtdGJ0ZHQvdC90L7QtSDRgNCw0YHRiNC40YDQtdC90LjQtSDRhNCw0LnQu9CwIiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAi0KTQsNC50Lsg0L3QtSDQvdCw0LnQtNC10L0iLAogICAgICAgICJGaWxlIG9yIGZvbGRlciB3aXRoIHRoaXMgcGF0aCBhbHJlYWR5IGV4aXN0cyI6ICLQpNCw0LnQuyDQuNC70Lgg0L/QsNC/0LrQsCDRgSDRjdGC0LjQvCDQv9GD0YLQtdC8INGD0LbQtSDRgdGD0YnQtdGB0YLQstGD0LXRgiIsCiAgICAgICAgIkZpbGUgU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogItCk0LDQudC7INGB0L7RhdGA0LDQvdGR0L0iLAogICAgICAgICJGaWxlcyI6ICLQpNCw0LnQu9GLIiwKICAgICAgICAiRm9sZGVyIjogItCf0LDQv9C60LAiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAi0J/QsNC/0LrQsCDQv9GD0YHRgtCwIiwKICAgICAgICAiRnJlZU9mIjogItGB0LLQvtCx0L7QtNC90L4g0LjQtyIsCiAgICAgICAgIkZ1bGxTaXplIjogItCg0LDQt9C80LXRgCDRhNCw0LnQu9C+0LIg0LIg0L/QsNC/0LrQtSIsCiAgICAgICAgIkdlbmVyYXRlIjogItCh0LPQtdC90LXRgNC40YDQvtCy0LDRgtGMIiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAi0KHQs9C10L3QtdGA0LjRgNC+0LLQsNGC0Ywg0YXQtdGIINC90L7QstC+0LPQviDQv9Cw0YDQvtC70Y8iLAogICAgICAgICJHcm91cCI6ICLQk9GA0YPQv9C/0LAiLAogICAgICAgICJIZWxwIjogItCf0L7QvNC+0YnRjCIsCiAgICAgICAgIkhlbHAgRG9jdW1lbnRzIjogItCh0L/RgNCw0LLQvtGH0L3QsNGPINC00L7QutGD0LzQtdC90YLQsNGG0LjRjyIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogItCh0LrRgNGL0YLRjCDRgdGC0L7Qu9Cx0YbRiyDQv9GA0LDQstCwINC00L7RgdGD0L/QsCDQuCDQstC70LDQtNC10LvQtdGGIiwKICAgICAgICAiSW52YWxpZCBjaGFyYWN0ZXJzIGluIGZpbGUgbmFtZSI6ICLQndC10LTQvtC/0YPRgdGC0LjQvNGL0LUg0YHQuNC80LLQvtC70Ysg0LIg0LjQvNC10L3QuCDRhNCw0LnQu9CwIiwKICAgICAgICAiSW52YWxpZCBjaGFyYWN0ZXJzIGluIGZpbGUgb3IgZm9sZGVyIG5hbWUiOiAi0J3QtdC00L7Qv9GD0YHRgtC40LzRi9C1INGB0LjQvNCy0L7Qu9GLINCyINC40LzQtdC90Lgg0YTQsNC50LvQsCDQuNC70Lgg0L/QsNC/0LrQuCIsCiAgICAgICAgIkludmFsaWQgZmlsZSBvciBmb2xkZXIgbmFtZSI6ICLQndC10LrQvtGA0YDQtdC60YLQvdC+0LUg0LjQvNGPINC/0LDQv9C60Lgg0LjQu9C4INGE0LDQudC70LAiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAi0J7QsdGA0LDRgtC90LDRjyDQstGL0LHQvtGA0LrQsCIsCiAgICAgICAgIkl0ZW1OYW1lIjogItCY0LzRjyDRjdC70LXQvNC10L3RgtCwIiwKICAgICAgICAiSXRlbVR5cGUiOiAi0KLQuNC/INGN0LvQtdC80LXQvdGC0LAiLAogICAgICAgICJMYW5ndWFnZSI6ICLQr9C30YvQuiIsCiAgICAgICAgIkxvZ2luIjogItCS0L7QudGC0LgiLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAi0J3QtSDRg9C00LDQu9C+0YHRjCDQstC+0LnRgtC4LiDQm9C+0LPQuNC9INC40LvQuCDQv9Cw0YDQvtC70Ywg0L3QtdCy0LXRgNC90YsiLAogICAgICAgICJsaWdodCI6ICLRgdCy0LXRgtC70LDRjyIsCiAgICAgICAgIkxvZ291dCI6ICLQktGL0LnRgtC4IiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICLQmNGB0L/QvtC70YzQt9GD0LXQvNCw0Y8g0L/QsNC80Y/RgtGMIiwKICAgICAgICAiTW9kaWZpZWQiOiAi0J7QsdC90L7QstC70LXQvdC40LUiLAogICAgICAgICJNb3ZlIjogItCf0LXRgNC10LzQtdGB0YLQuNGC0YwiLAogICAgICAgICJNb3ZlZCBmcm9tIjogItC/0LXRgNC10LzQtdGJ0ZHQvSjQtdC90LApIiwKICAgICAgICAiTmFtZSI6ICLQmNC80Y8iLAogICAgICAgICJOZXdJdGVtIjogItCh0L7Qt9C00LDRgtGMIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogItCh0YLQsNC90LTQsNGA0YLQvdGL0Lkg0YDQtdC00LDQutGC0L7RgCIsCiAgICAgICAgIm5vdCBmb3VuZCEiOiAi0L3QtSDQvdCw0LnQtNC10L3QviEiLAogICAgICAgICJOb3RoaW5nIHNlbGVjdGVkIjogItCd0LjRh9C10LPQviDQvdC1INCy0YvQsdGA0LDQvdC+IiwKICAgICAgICAiT3BlbiI6ICLQntGC0LrRgNGL0YLRjCIsCiAgICAgICAgIk9wZXJhdGlvbnMgd2l0aCBhcmNoaXZlcyBhcmUgbm90IGF2YWlsYWJsZSI6ICLQntC/0LXRgNCw0YbQuNC4INGBINCw0YDRhdC40LLQsNC80Lgg0L3QtdC00L7RgdGC0YPQv9C90YsiLAogICAgICAgICJPdGhlciI6ICLQlNGA0YPQs9C40LUiLAogICAgICAgICJPd25lciI6ICLQktC70LDQtNC10LvQtdGGIiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICLQoNCw0LfQvNC10YAg0YDQsNC30LTQtdC70LAiLAogICAgICAgICJQYXNzd29yZCI6ICLQn9Cw0YDQvtC70YwiLAogICAgICAgICJwYXNzd29yZF9oYXNoIG5vdCBzdXBwb3J0ZWQsIFVwZ3JhZGUgUEhQIHZlcnNpb24iOiAicGFzc3dvcmRfaGFzaCDQvdC1INC/0L7QtNC00LXRgNC20LjQstCw0LXRgtGB0Y8sINC+0LHQvdC+0LLQuNGC0LUg0LLQtdGA0YHQuNGOIFBIUCIsCiAgICAgICAgIlBhdGhzIG11c3QgYmUgbm90IGVxdWFsIjogItCf0YPRgtC4INC00L7Qu9C20L3RiyDQsdGL0YLRjCDRgNCw0LfQvdGL0LzQuCIsCiAgICAgICAgIlBlcm1zIjogItCf0YDQsNCy0LAg0LTQvtGB0YLRg9C/0LAiLAogICAgICAgICJQZXJtaXNzaW9ucyBjaGFuZ2VkIjogItCf0YDQsNCy0LAg0LTQvtGB0YLRg9C/0LAg0LjQt9C80LXQvdC10L3RiyIsCiAgICAgICAgIlBlcm1pc3Npb25zIG5vdCBjaGFuZ2VkIjogItCf0YDQsNCy0LAg0LTQvtGB0YLRg9C/0LAg0L3QtSDQuNC30LzQtdC90LXQvdGLIiwKICAgICAgICAiUHJldmlldyI6ICLQn9GA0L7RgdC80L7RgtGAIiwKICAgICAgICAiUmVhZCI6ICLQp9GC0LXQvdC40LUiLAogICAgICAgICJSZW1lbWJlck1lIjogItCX0LDQv9C+0LzQvdC40YLRjCDQvNC10L3RjyIsCiAgICAgICAgIlJlbmFtZSI6ICLQn9C10YDQtdC40LzQtdC90L7QstCw0YLRjCIsCiAgICAgICAgIlJlbmFtZWQgZnJvbSI6ICLQn9C10YDQtdC40LzQtdC90L7QstCw0L0o0LApIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogItCh0L7QvtCx0YnQuNGC0Ywg0L4g0L/RgNC+0LHQu9C10LzQtSIsCiAgICAgICAgIlJvb3QgcGF0aCI6ICLQn9GD0YLRjCDQtNC+INC60L7RgNC90Y8iLAogICAgICAgICJTYXZlIjogItCh0L7RhdGA0LDQvdC40YLRjCIsCiAgICAgICAgIlNhdmVkIFN1Y2Nlc3NmdWxseSI6ICLQodC+0YXRgNCw0L3QtdC90L4iLAogICAgICAgICJTZWFyY2giOiAi0J/QvtC40YHQuiIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICLQktGL0LHRgNCw0YLRjCDQstGB0ZEiLAogICAgICAgICJTZWxlY3RlZCBmaWxlcyBhbmQgZm9sZGVyIGRlbGV0ZWQiOiAi0JLRi9Cx0YDQsNC90L3Ri9C1INGE0LDQudC70Lgg0Lgg0L/QsNC/0LrQuCDRg9C00LDQu9C10L3RiyIsCiAgICAgICAgIlNlbGVjdCBmb2xkZXIiOiAi0JLRi9Cx0LXRgNC40YLQtSDQv9Cw0L/QutGDIiwKICAgICAgICAiU2V0dGluZ3MiOiAi0KHQstC+0LnRgdGC0LLQsCIsCiAgICAgICAgIlNob3dIaWRkZW5GaWxlcyI6ICLQn9C+0LrQsNC3INGB0LrRgNGL0YLRi9GFINGE0LDQudC70L7QsiIsCiAgICAgICAgIlNpemUiOiAi0KDQsNC30LzQtdGAIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogItCY0YHRhdC+0LTQvdCw0Y8g0L/QsNC/0LrQsCIsCiAgICAgICAgIlNvdXJjZSBwYXRoIG5vdCBkZWZpbmVkIjogItCf0YPRgtGMINC6INC40YHRgtC+0YfQvdC40LrRgyDQvdC1INC+0L/RgNC10LTQtdC70ZHQvSIsCiAgICAgICAgIlRoZW1lIjogItCi0LXQvNCwIiwKICAgICAgICAidG8iOiAi0LIiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICLQntGC0LzQtdC90LjRgtGMINCy0YvQsdC+0YAiLAogICAgICAgICJVblppcCI6ICLQoNCw0LfQsNGA0YXQuNCy0LjRgNC+0LLQsNGC0YwiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogItCg0LDQt9Cw0YDRhdC40LLQuNGA0L7QstCw0YLRjCDQsiDQv9Cw0L/QutGDIiwKICAgICAgICAiVXBsb2FkIjogItCX0LDQs9GA0YPQt9C40YLRjCIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogItCX0LDQs9GA0YPQt9C60LAg0YTQsNC50LvQvtCyIiwKICAgICAgICAiVXNlcm5hbWUiOiAi0J/QvtC70YzQt9C+0LLQsNGC0LXQu9GMIiwKICAgICAgICAiV3JpdGUiOiAi0JfQsNC/0LjRgdGMIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAi0JLRiyDQstC+0YjQu9C4INCyINGB0LjRgdGC0LXQvNGDIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJJdGFsaWFubyIsCiAgICAgICJjb2RlIjogIml0IiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBY2Nlc3MgZGVuaWVkLiBJUCByZXN0cmljdGlvbiBhcHBsaWNhYmxlIjogIkFjY2Vzc28gbmVnYXRvLiBBcHBsaWNhdGUgcmVzdHJpemlvbmkgaW4gYmFzZSBhbGwnaW5kaXJpenpvIElQIiwKICAgICAgICAiQWN0aW9ucyI6ICJBemlvbmkiLAogICAgICAgICJBZHZhbmNlZCBTZWFyY2giOiAiUmljZXJjYSBhdmFuemF0YSIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIkVkaXRvciBhdmFuemF0byIsCiAgICAgICAgImFscmVhZHkgZXhpc3RzIjogImdpw6AgZXNpc3RlbnRlIiwKICAgICAgICAiQXBwTmFtZSI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFwcFRpdGxlIjogIkZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFyY2hpdmUgbm90IGNyZWF0ZWQiOiAiQXJjaGl2aW8gbm9uIGNyZWF0byIsCiAgICAgICAgIkFyY2hpdmUgbm90IHVucGFja2VkIjogIkFyY2hpdmlvIG5vbiBkZWNvbXByZXNzbyIsCiAgICAgICAgIkFyY2hpdmUgdW5wYWNrZWQiOiAiQXJjaGl2aW8gZGVjb21wcmVzc28iLAogICAgICAgICJBcmNoaXZlIjogIkFyY2hpdmlvIiwKICAgICAgICAiQmFjayI6ICJJbmRpZXRybyIsCiAgICAgICAgIkJhY2tVcCI6ICJCYWNrdXAiLAogICAgICAgICJDYW5jZWwiOiAiQW5udWxsYSIsCiAgICAgICAgIkNhbm5vdCBvcGVuIGZpbGUhIEFib3J0aW5nIGRvd25sb2FkIjogIkltcG9zc2liaWxlIGFwcmlyZSBpbCBmaWxlISBEb3dubG9hZCBhbm51bGxhdG8iLAogICAgICAgICJDaGFuZ2UiOiAiTW9kaWZpY2EiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICJNb2RpZmljYSBwZXJtZXNzaSIsCiAgICAgICAgIkNvcGllZCBmcm9tIjogIkNvcGlhdG8gZGEiLAogICAgICAgICJDb3B5IjogIkNvcGlhIiwKICAgICAgICAiQ29weWluZyI6ICJDb3BpYSBpbiBjb3JzbyIsCiAgICAgICAgIkNvcHlUbyI6ICJDb3BpYSBzdSIsCiAgICAgICAgIkNyZWF0ZSBhcmNoaXZlPyI6ICJDcmVhcmUgdW4gYXJjaGl2aW8iLAogICAgICAgICJDcmVhdGVkIjogIkNyZWF0byIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiTnVvdm8gZWxlbWVudG8iLAogICAgICAgICJDcmVhdGVOb3ciOiAiQ3JlYSIsCiAgICAgICAgImRhcmsiOiAic2N1cm8iLAogICAgICAgICJEZWxldGUgc2VsZWN0ZWQgZmlsZXMgYW5kIGZvbGRlcnM/IjogIkVsaW1pbmFyZSBpIGZpbGUgZSBsZSBjYXJ0ZWxsZSBzZWxlemlvbmF0aT8iLAogICAgICAgICJEZWxldGUiOiAiRWxpbWluYSIsCiAgICAgICAgIkRlbGV0ZWQiOiAiRWxpbWluYXRvIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiQ2FydGVsbGEgZGkgZGVzdGluYXppb25lIiwKICAgICAgICAiRGlyZWN0TGluayI6ICJMaW5rIGRpcmV0dG8iLAogICAgICAgICJEb3dubG9hZCI6ICJTY2FyaWNhIiwKICAgICAgICAiRWRpdCI6ICJNb2RpZmljYSIsCiAgICAgICAgIkVycm9yIHdoaWxlIGNvcHlpbmcgZnJvbSI6ICJFcnJvcmUgZHVyYW50ZSBsYSBjb3BpYSBkYSIsCiAgICAgICAgIkVycm9yIHdoaWxlIGRlbGV0aW5nIGl0ZW1zIjogIkVycm9yZSBkdXJhbnRlIGwnZWxpbWluYXppb25lIGRlZ2xpIGVsZW1lbnRpIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZmV0Y2hpbmcgYXJjaGl2ZSBpbmZvIjogIkVycm9yZSBkdXJhbnRlIGlsIHJlY3VwZXJvIGRlbGxlIGluZm9ybWF6aW9uaSBzdWxsJ2FyY2hpdmlvIiwKICAgICAgICAiRXJyb3Igd2hpbGUgbW92aW5nIGZyb20iOiAiRXJyb3JlIGR1cmFudGUgbG8gc3Bvc3RhbWVudG8gZGEiLAogICAgICAgICJFcnJvciB3aGlsZSByZW5hbWluZyBmcm9tIjogIkVycm9yZSBkdXJhbnRlIGxhIHJpZGVub21pbmF6aW9uZSBkYSIsCiAgICAgICAgIkVycm9yUmVwb3J0aW5nIjogIlNlZ25hbGEgZXJyb3JpIiwKICAgICAgICAiRXhlY3V0ZSI6ICJFc2VndWkiLAogICAgICAgICJGSUxFIEVYVEVOU0lPTiBIQVMgTk9UIFNVUFBPUlRFRCI6ICJJTCBGSUxFIEhBIFVOJ0VTVEVOU0lPTkUgTk9OIFNVUFBPUlRBVEEiLAogICAgICAgICJGaWxlIGV4dGVuc2lvbiBpcyBub3QgYWxsb3dlZCI6ICJMJ2VzdGVuc2lvbmUgZGVsIGZpbGUgbm9uIMOoIGF1dG9yaXp6YXRhIiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAiSW1wb3NzaWJpbGUgdHJvdmFyZSBpbCBmaWxlIiwKICAgICAgICAiRmlsZSBvciBmb2xkZXIgd2l0aCB0aGlzIHBhdGggYWxyZWFkeSBleGlzdHMiOiAiRXNpc3RlIGdpw6AgdW4gZmlsZSBvIHVuYSBjYXJ0ZWxsYSBjb24gcXVlc3RvIHBlcmNvcnNvIiwKICAgICAgICAiRmlsZSBTYXZlZCBTdWNjZXNzZnVsbHkiOiAiRmlsZSBzYWx2YXRvIGNvcnJldHRhbWVudGUiLAogICAgICAgICJGaWxlIjogIkZpbGUiLAogICAgICAgICJGaWxlcyI6ICJGaWxlIiwKICAgICAgICAiRmlsdGVyIjogIkZpbHRybyIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICJMYSBjYXJ0ZWxsYSDDqCB2dW90YSIsCiAgICAgICAgIkZvbGRlciI6ICJDYXJ0ZWxsYSIsCiAgICAgICAgIkZ1bGxTaXplIjogIkRpbWVuc2lvbmUgdG90YWxlIiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAiR2VuZXJhIHVuIG51b3ZvIGhhc2ggZGVsbGEgcGFzc3dvcmQiLAogICAgICAgICJHZW5lcmF0ZSI6ICJHZW5lcmEiLAogICAgICAgICJHcm91cCI6ICJHcnVwcG8iLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICJEb2N1bWVudGF6aW9uZSIsCiAgICAgICAgIkhlbHAiOiAiQWl1dG8iLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICJOYXNjb25kaSBsZSBjb2xvbm5lIGRlaSBwZXJtZXNzaSBlIGRlbCBwcm9wcmlldGFyaW8iLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBuYW1lIjogIkNhcmF0dGVyaSBub24gdmFsaWRpIG5lbCBub21lIGRlbCBmaWxlIiwKICAgICAgICAiSW52YWxpZCBjaGFyYWN0ZXJzIGluIGZpbGUgb3IgZm9sZGVyIG5hbWUiOiAiQ2FyYXR0ZXJpIG5vbiB2YWxpZGkgbmVsIG5vbWUgZGVsIGZpbGUgbyBkZWxsYSBjYXJ0ZWxsYSIsCiAgICAgICAgIkludmFsaWQgZmlsZSBvciBmb2xkZXIgbmFtZSI6ICJOb21lIGRpIGZpbGUgbyBjYXJ0ZWxsYSBub24gdmFsaWRvIiwKICAgICAgICAiSW52YWxpZCBUb2tlbi4iOiAiVG9rZW4gbm9uIHZhbGlkby4iLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiSW52ZXJ0aSBzZWxlemlvbmUiLAogICAgICAgICJJdGVtTmFtZSI6ICJOb21lIGVsZW1lbnRvIiwKICAgICAgICAiSXRlbVR5cGUiOiAiVGlwbyBlbGVtZW50byIsCiAgICAgICAgIkxhbmd1YWdlIjogIkxpbmd1YSIsCiAgICAgICAgImxpZ2h0IjogImNoaWFybyIsCiAgICAgICAgIkxvZ2luIGZhaWxlZC4gSW52YWxpZCB1c2VybmFtZSBvciBwYXNzd29yZCI6ICJBY2Nlc3NvIGZhbGxpdG8uIE5vbWUgdXRlbnRlIGUvbyBwYXNzd29yZCBub24gdmFsaWRpIiwKICAgICAgICAiTG9naW4iOiAiQWNjZWRpIiwKICAgICAgICAiTG9nb3V0IjogIkRpc2Nvbm5ldHRpdGkiLAogICAgICAgICJNb2RpZmllZCI6ICJVbHRpbWEgbW9kaWZpY2EiLAogICAgICAgICJNb3ZlIjogIlNwb3N0YSIsCiAgICAgICAgIk1vdmVkIGZyb20iOiAiU3Bvc3RhdG8gZGEiLAogICAgICAgICJOYW1lIjogIk5vbWUiLAogICAgICAgICJOZXdJdGVtIjogIk51b3ZvIGVsZW1lbnRvIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIkVkaXRvciBub3JtYWxlIiwKICAgICAgICAibm90IGNyZWF0ZWQiOiAibm9uIGNyZWF0byIsCiAgICAgICAgIm5vdCBkZWxldGVkIjogIm5vdCBlbGltaW5hdG8iLAogICAgICAgICJub3QgZm91bmQhIjogIm5vdCB0cm92YXRvISIsCiAgICAgICAgIk5vdGhpbmcgc2VsZWN0ZWQiOiAiTmVzc3VuYSBzZWxlemlvbmUiLAogICAgICAgICJPcGVuIjogIkFwcmkiLAogICAgICAgICJPcGVyYXRpb25zIHdpdGggYXJjaGl2ZXMgYXJlIG5vdCBhdmFpbGFibGUiOiAiTGUgb3BlcmF6aW9uaSBzdWdsaSBhcmNoaXZpIG5vbiBzb25vIGRpc3BvbmliaWxpIiwKICAgICAgICAiT3RoZXIiOiAiQWx0cm8iLAogICAgICAgICJPd25lciI6ICJQcm9wcmlldGFyaW8iLAogICAgICAgICJQYXNzd29yZCI6ICJQYXNzd29yZCIsCiAgICAgICAgInBhc3N3b3JkX2hhc2ggbm90IHN1cHBvcnRlZCwgVXBncmFkZSBQSFAgdmVyc2lvbiI6ICJwYXNzd29yZF9oYXNoIG5vdCBzdXBwb3J0YXRhLCBhZ2dpb3JuYSBsYSB2ZXJzaW9uZSBkaSBQSFAiLAogICAgICAgICJQYXRocyBtdXN0IGJlIG5vdCBlcXVhbCI6ICJJIHBlcmNvcnNpIGRldm9ubyBlc3NlcmUgZGlmZmVyZW50aSIsCiAgICAgICAgIlBlcm1pc3Npb25zIGNoYW5nZWQiOiAiUGVybWVzc2kgbW9kaWZpY2F0aSIsCiAgICAgICAgIlBlcm1pc3Npb25zIG5vdCBjaGFuZ2VkIjogIlBlcm1lc3NpIG5vbiBtb2RpZmljYXRpIiwKICAgICAgICAiUGVybXMiOiAiUGVybWVzc2kiLAogICAgICAgICJSZWFkIjogIkxlZ2dpIiwKICAgICAgICAiUmVuYW1lIjogIlJpbm9taW5hIiwKICAgICAgICAiUmVuYW1lZCBmcm9tIjogIlJpbm9taW5hdG8gZGEiLAogICAgICAgICJSZXBvcnQgSXNzdWUiOiAiU2VnbmFsYSB1biBwcm9ibGVtYSIsCiAgICAgICAgIlJvb3QgcGF0aCI6ICJQZXJjb3JzbyByYWRpY2UiLAogICAgICAgICJTYXZlIjogIlNhbHZhIiwKICAgICAgICAiU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIlNhbHZhdG8gY29ycmV0dGFtZW50ZSIsCiAgICAgICAgIlNlYXJjaCBmaWxlIGluIGZvbGRlciBhbmQgc3ViZm9sZGVycy4uLiI6ICJDZXJjYSBmaWxlIG5lbGxhIGNhcnRlbGxhIGUgbmVsbGUgc290dG8tY2FydGVsbGUuLi4iLAogICAgICAgICJTZWFyY2giOiAiQ2VyY2EiLAogICAgICAgICJTZWxlY3QgZm9sZGVyIjogIlNlbGV6aW9uYSBjYXJ0ZWxsYSIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJTZWxlemlvbmEgdHV0dG8iLAogICAgICAgICJTZWxlY3RlZCBmaWxlcyBhbmQgZm9sZGVyIGRlbGV0ZWQiOiAiSSBmaWxlIGUgbGUgY2FydGVsbGUgc2VsZXppb25hdGkgc29ubyBzdGF0aSBlbGltaW5hdGkiLAogICAgICAgICJTZXR0aW5ncyI6ICJJbXBvc3RhemlvbmkiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAiTW9zdHJhIGZpbGUgbmFzY29zdGkiLAogICAgICAgICJTaXplIjogIkRpbWVuc2lvbmUiLAogICAgICAgICJTb3VyY2UgcGF0aCBub3QgZGVmaW5lZCI6ICJQZXJjb3JzbyBzb3JnZW50ZSBub24gZGVmaW5pdG8iLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiQ2FydGVsbGEgZGkgb3JpZ2luZSIsCiAgICAgICAgIlRhciI6ICJUYXIiLAogICAgICAgICJUaGVtZSI6ICJUZW1hIiwKICAgICAgICAidG8iOiAiYSIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIkRlc2VsZXppb25hIHR1dHRvIiwKICAgICAgICAiVW5aaXAiOiAiRGVjb21wcmltaSIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiRGVjb21wcmltaSBpbiB1bmEgY2FydGVsbGEiLAogICAgICAgICJVcGxvYWQiOiAiQ2FyaWNhIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiQ2FyaWNhbWVudG8gZmlsZSIsCiAgICAgICAgIlVzZXJuYW1lIjogIk5vbWUgdXRlbnRlIiwKICAgICAgICAiV3JpdGUiOiAiU2NyaXZpIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiQWNjZXNzbyBlZmZldHR1YXRvIiwKICAgICAgICAiWmVybyBieXRlIGZpbGUhIEFib3J0aW5nIGRvd25sb2FkIjogIkZpbGUgY29uIHplcm8gYnl0ZSEgRG93bmxvYWQgYW5udWxsYXRvIiwKICAgICAgICAiWmlwIjogIlppcCIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiRnJhbsOnYWlzIiwKICAgICAgImNvZGUiOiAiZnIiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFjdGlvbnMiOiAiQWN0aW9ucyIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIkVkaXRldXIgYXZhbmPDqSIsCiAgICAgICAgIkFkdmFuY2VkIFNlYXJjaCI6ICJSZWNoZXJjaGUgYXZhbmPDqWUiLAogICAgICAgICJBcHBOYW1lIjogIlRpbnkgRmlsZSBNYW5hZ2VyIiwKICAgICAgICAiQXBwVGl0bGUiOiAiR2VzdGlvbm5haXJlIGRlIGZpY2hpZXJzIiwKICAgICAgICAiQmFjayI6ICJSZXRvdXIiLAogICAgICAgICJCYWNrVXAiOiAiU2F1dmVnYXJkZXIiLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIkNhbGN1bGVyIGxhIHRhaWxsZSBkZXMgZG9zc2llcnMiLAogICAgICAgICJDYW5jZWwiOiAiQW5udWxlciIsCiAgICAgICAgIkNoYW5nZSI6ICJNb2RpZmllciIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIk1vZGlmaWVyIGxlcyBwZXJtaXNzaW9ucyIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIlbDqXJpZmllciBsZXMgbWlzZXMgw6Agam91ciIsCiAgICAgICAgIkNvcHkiOiAiQ29waWVyIiwKICAgICAgICAiQ29weWluZyI6ICJDb3BpZSBlbiBjb3VycyIsCiAgICAgICAgIkNvcHlUbyI6ICJDb3BpZXIgdmVycyIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiQ3LDqWVyIHVuIG5vdXZlYXUgZmljaGllciIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICJDcsOpZXIiLAogICAgICAgICJEZWxldGUiOiAiU3VwcHJpbWVyIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiRG9zc2llciBkZSBkZXN0aW5hdGlvbiIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiTGllbiBkaXJlY3QiLAogICAgICAgICJEb3dubG9hZCI6ICJUw6lsw6ljaGFyZ2VyIiwKICAgICAgICAiRWRpdCI6ICJFZGl0ZXIiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICJSYXBwb3J0IGQnZXJyZXVycyIsCiAgICAgICAgIkZpbGUiOiAiRmljaGllciIsCiAgICAgICAgIkZpbGVzIjogIkZpY2hpZXJzIiwKICAgICAgICAiRmlsdGVyIjogIkZpbHRyZXIiLAogICAgICAgICJGb2xkZXIiOiAiRG9zc2llciIsCiAgICAgICAgIkZyZWUgb2YiOiAibGlicmVzIHN1ciIsCiAgICAgICAgIkZyZWVPZiI6ICJFc3BhY2UgbGlicmUgOiAiLAogICAgICAgICJGdWxsIHNpemUiOiAiVGFpbGxlIHRvdGFsZSIsCiAgICAgICAgIkdlbmVyYXRlIjogIkfDqW7DqXJlciIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIkfDqW7DqXJlciB1biBtb3QgZGUgcGFzc2UgaGFjaMOpIiwKICAgICAgICAiSGVscCI6ICJBaWRlIiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAiRG9jdW1lbnRhdGlvbiIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogIk1hc3F1ZXIgbGVzIGNvbG9ubmVzIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogIkludmVyc2VyIGxhIHPDqWxlY3Rpb24iLAogICAgICAgICJJdGVtTmFtZSI6ICJOb20gZGUgbCfDqWzDqW1lbnQiLAogICAgICAgICJJdGVtVHlwZSI6ICJUeXBlIGQnw6lsZW1lbnQiLAogICAgICAgICJMYW5ndWFnZSI6ICJMYW5ndWUiLAogICAgICAgICJMb2dpbiI6ICJDb25uZXhpb24iLAogICAgICAgICJMb2dvdXQiOiAiRMOpY29ubmV4aW9uIiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICJNw6ltb2lyZSB1dGlsaXPDqWUiLAogICAgICAgICJNb2RpZmllZCI6ICJNb2RpZmnDqSBsZSIsCiAgICAgICAgIk1vdmUiOiAiRMOpcGxhY2VyIiwKICAgICAgICAiTmFtZSI6ICJOb20iLAogICAgICAgICJOZXdJdGVtIjogIk5vdXZlbCDDqWzDqW1lbnQiLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAiw4lkaXRldXIgbm9ybWFsIiwKICAgICAgICAiT3BlbiI6ICJPdXZyaXIiLAogICAgICAgICJPd25lciI6ICJQcm9wcmnDqXRhaXJlIiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICJUYWlsbGUgZGUgbGEgcGFydGl0aW9uIiwKICAgICAgICAiUGFzc3dvcmQiOiAiTW90IGRlIHBhc3NlIiwKICAgICAgICAiUGVybXMiOiAiUGVybWlzc2lvbnMiLAogICAgICAgICJQcm9jZXNzSUQiOiAiSWRlbnRpZmlhbnQgcHJvY2Vzc3VzIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJTZSBzb3V2ZW5pciBkZSBtb2kiLAogICAgICAgICJSZW5hbWUiOiAiUmVub21tZXIiLAogICAgICAgICJTYXZlIjogIlNhdXZlZ2FyZGVyIiwKICAgICAgICAiU2VhcmNoIjogIlJlY2hlcmNoZSIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJUb3V0IHPDqWxlY3Rpb25uZXIiLAogICAgICAgICJTZXR0aW5ncyI6ICJSw6lnbGFnZXMiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAiQWZmaWNoZXIgbGVzIGZpY2hpZXJzIG1hc3F1w6lzIiwKICAgICAgICAiU2l6ZSI6ICJUYWlsbGUiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiRG9zc2llciBzb3VyY2UiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJUb3V0IGTDqXNlbGVjdGlvbm5lciIsCiAgICAgICAgIlVwbG9hZCI6ICJFbnZveWVyIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiVMOpbMOpdmVyc2VyIGRlcyBmaWNoaWVycyIsCiAgICAgICAgIlVzZXJuYW1lIjogIlV0aWxpc2F0ZXVyIiwKICAgICAgICAiVW5aaXAiOiAiRMOpY29tcHJlc3NlciIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiRMOpY29tcHJlc3NlciBkYW5zIHVuIGRvc3NpZXIiLAogICAgICAgICJZb3UgYXJlIGxvZ2dlZCBpbiI6ICJWb3VzIMOqdGVzIGF1dGhlbnRpZmnDqShlKSIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiRXNwYcOxb2wiLAogICAgICAiY29kZSI6ICJlcyIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQXBwTmFtZSI6ICJQZXF1ZcOxbyBBZG1pbmlzdHJhZG9yIGRlIEFyY2hpdm9zIiwKICAgICAgICAiQXBwVGl0bGUiOiAiQWRtaW5pc3RyYWRvciBkZSBBcmNoaXZvcyIsCiAgICAgICAgIkxvZ2luIjogIkluaWNpYXIgU2VzacOzbiIsCiAgICAgICAgIlVzZXJuYW1lIjogIk5vbWJyZSBkZSBVc3VhcmlvIiwKICAgICAgICAiUGFzc3dvcmQiOiAiQ29udHJhc2XDsWEiLAogICAgICAgICJMb2dvdXQiOiAiRGVzY29uZWN0YXJzZSIsCiAgICAgICAgIk1vdmUiOiAiTW92ZXIiLAogICAgICAgICJDb3B5IjogIkNvcGlhciIsCiAgICAgICAgIlNhdmUiOiAiR3VhcmRhciIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJTZWxlY2Npb25hciBUb2RvIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiRGVzZWxlY2Npb25hciBUb2RvIiwKICAgICAgICAiRmlsZSI6ICJBcmNoaXZvIiwKICAgICAgICAiQmFjayI6ICJBdHLDoXMiLAogICAgICAgICJTaXplIjogIlRhbWHDsW8iLAogICAgICAgICJQZXJtcyI6ICJQZXJtaXNvcyIsCiAgICAgICAgIk1vZGlmaWVkIjogIk1vZGlmaWNhZG8iLAogICAgICAgICJPd25lciI6ICJQcm9waWV0YXJpbyIsCiAgICAgICAgIlNlYXJjaCI6ICJCdXNjYXIiLAogICAgICAgICJOZXdJdGVtIjogIk51ZXZvIMONdGVtIiwKICAgICAgICAiRm9sZGVyIjogIkNhcnBldGEiLAogICAgICAgICJEZWxldGUiOiAiQm9ycmFyIiwKICAgICAgICAiUmVuYW1lIjogIkNhbWJpYXIgTm9tYnJlIiwKICAgICAgICAiQ29weVRvIjogIkNvcGlhciBlbiIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiTGluayBEaXJlY3RvIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiU3ViaXIgQXJjaGl2b3MiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICJDYW1iaWFyIFBlcm1pc29zIiwKICAgICAgICAiQ29weWluZyI6ICJDb3BpYW5kbyIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiQ3JlYXIgbnVldm8gSXRlbSIsCiAgICAgICAgIk5hbWUiOiAiTm9tYnJlIiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAiRWRpdG9yIEF2YW56YWRvIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJSZWN1w6lyZGFtZSIsCiAgICAgICAgIkFjdGlvbnMiOiAiQWNjaW9uZXMiLAogICAgICAgICJVcGxvYWQiOiAiU3ViaXIiLAogICAgICAgICJDYW5jZWwiOiAiQ2FuY2VsYXIiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiSW52ZXJ0aXIgU2VsZWNjacOzbiIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIkNhcnBldGEgRGVzdGlubyIsCiAgICAgICAgIkl0ZW1UeXBlIjogIlRpcG8gZGUgw410ZW0iLAogICAgICAgICJJdGVtTmFtZSI6ICJOb21icmUgZGVsIMONdGVtIiwKICAgICAgICAiQ3JlYXRlTm93IjogIkNyZWFyIiwKICAgICAgICAiRG93bmxvYWQiOiAiRGVzY2FyZ2FyIiwKICAgICAgICAiT3BlbiI6ICJBYnJpciIsCiAgICAgICAgIlVuWmlwIjogIkRlc2NvbXByaW1pciIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiRGVzY29tcHJpbWlyIGVuIENhcnBldGEiLAogICAgICAgICJFZGl0IjogIkVkaXRhciIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJFZGl0b3IgTm9ybWFsIiwKICAgICAgICAiQmFja1VwIjogIkNvcGlhIGRlIFNlZ3VyaWRhZCIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICJDYXJwZXRhIEFjdHVhbCIsCiAgICAgICAgIkZpbGVzIjogIkFyY2hpdm9zIiwKICAgICAgICAiQ2hhbmdlIjogIkNhbWJpYXIiLAogICAgICAgICJTZXR0aW5ncyI6ICJQcmVmZXJlbmNpYXMiLAogICAgICAgICJMYW5ndWFnZSI6ICJMZW5ndWFqZSIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiR2FsZWdvIiwKICAgICAgImNvZGUiOiAiZ2wiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiUGVxdWVubyBBZG1pbmlzdHJhZG9yIGRlIEFycXVpdm9zIiwKICAgICAgICAiQXBwVGl0bGUiOiAiQWRtaW5pc3RyYWRvciBkZSBBcnF1aXZvcyIsCiAgICAgICAgIkxvZ2luIjogIkluaWNpYXIgU2VzacOzbiIsCiAgICAgICAgIlVzZXJuYW1lIjogIk5vbWUgZGUgVXN1YXJpbyIsCiAgICAgICAgIlBhc3N3b3JkIjogIkNvbnRyYXNpbmFsIiwKICAgICAgICAiTG9nb3V0IjogIkRlc2NvbmVjdGFyc2UiLAogICAgICAgICJNb3ZlIjogIk1vdmVyIiwKICAgICAgICAiQ29weSI6ICJDb3BpYXIiLAogICAgICAgICJTYXZlIjogIkdhcmRhciIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJTZWxlY2Npb25hciBUb2RvIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiRGVzLXNlbGVjY2lvbmFyIFRvZG8iLAogICAgICAgICJGaWxlIjogIkFycXVpdm8iLAogICAgICAgICJCYWNrIjogIkF0csOhcyIsCiAgICAgICAgIlNpemUiOiAiVGFtYcOxbyIsCiAgICAgICAgIlBlcm1zIjogIlBlcm1pc29zIiwKICAgICAgICAiTW9kaWZpZWQiOiAiTW9kaWZpY2FkbyIsCiAgICAgICAgIk93bmVyIjogIlByb3BpZXRhcmlvIiwKICAgICAgICAiU2VhcmNoIjogIkJ1c2NhciIsCiAgICAgICAgIk5ld0l0ZW0iOiAiTm92byBFbGVtZW50byIsCiAgICAgICAgIkZvbGRlciI6ICJDYXJ0YWZvbCIsCiAgICAgICAgIkRlbGV0ZSI6ICJCb3JyYXIiLAogICAgICAgICJSZW5hbWUiOiAiUmVub21lYXIiLAogICAgICAgICJDb3B5VG8iOiAiQ29waWFyIGVuIiwKICAgICAgICAiRGlyZWN0TGluayI6ICJFbmxhY2UgRGlyZWN0byIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIlN1YmlyIEFycXVpdm9zIiwKICAgICAgICAiQ2hhbmdlUGVybWlzc2lvbnMiOiAiQ2FtYmlhciBQZXJtaXNvcyIsCiAgICAgICAgIkNvcHlpbmciOiAiQ29waWFuZG8iLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIkNyZWFyIG5vdm8gRWxlbWVudG8iLAogICAgICAgICJOYW1lIjogIk5vbWUiLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJFZGl0b3IgQXZhbnphZG8iLAogICAgICAgICJSZW1lbWJlck1lIjogIkzDqW1icmFtZSIsCiAgICAgICAgIkFjdGlvbnMiOiAiQWNjacOzbnMiLAogICAgICAgICJVcGxvYWQiOiAiU3ViaXIiLAogICAgICAgICJDYW5jZWwiOiAiQ2FuY2VsYXIiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiSW52ZXJ0aXIgU2VsZWNjacOzbiIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIkNhcnRhZm9sIERlc3Rpbm8iLAogICAgICAgICJJdGVtVHlwZSI6ICJUaXBvIGRlIEVsZW1lbnRvIiwKICAgICAgICAiSXRlbU5hbWUiOiAiTm9tZSBkbyBFbGVtZW50byIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICJDcmVhciIsCiAgICAgICAgIkRvd25sb2FkIjogIkRlc2NhcmdhciIsCiAgICAgICAgIk9wZW4iOiAiQWJyaXIiLAogICAgICAgICJVblppcCI6ICJEZXNjb21wcmltaXIiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIkRlc2NvbXByaW1pciBubyBDYXJ0YWZvbCIsCiAgICAgICAgIkVkaXQiOiAiRWRpdGFyIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIkVkaXRvciBOb3JtYWwiLAogICAgICAgICJCYWNrVXAiOiAiQ29waWEgZGUgU2VndXJpZGFkZSIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICJDYXJ0YWZvbCBBY3R1YWwiLAogICAgICAgICJGaWxlcyI6ICJBcnF1aXZvcyIsCiAgICAgICAgIkNoYW5nZSI6ICJDYW1iaWFyIiwKICAgICAgICAiU2V0dGluZ3MiOiAiUHJlZmVyZW5jaWFzIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAiTGluZ3VheGUiCiAgICAgIH0KICAgIH0sCiAgICB7CiAgICAgICJuYW1lIjogIkNhdGFsw6AiLAogICAgICAiY29kZSI6ICJjYSIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQXBwTmFtZSI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFwcFRpdGxlIjogIkFkbWluaXN0cmFkb3IgZCdBcnhpdXMiLAogICAgICAgICJMb2dpbiI6ICJJbmljaWFyIFNlc3Npw7MiLAogICAgICAgICJVc2VybmFtZSI6ICJOb20gZCdVc3VhcmkiLAogICAgICAgICJQYXNzd29yZCI6ICJDb250cmFzZW55YSIsCiAgICAgICAgIkxvZ291dCI6ICJEZXNjb25uZWN0YXItc2UiLAogICAgICAgICJNb3ZlIjogIk1vdXJlIiwKICAgICAgICAiQ29weSI6ICJDb3BpYXIiLAogICAgICAgICJTYXZlIjogIkRlc2FyIiwKICAgICAgICAiU2VsZWN0QWxsIjogIlNlbGVjY2lvbmFyIFRvdCIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIkRlc2VsZWNjaW9uYXIgVG90IiwKICAgICAgICAiRmlsZSI6ICJBcnhpdSIsCiAgICAgICAgIkJhY2siOiAiRW5yZXJlIiwKICAgICAgICAiU2l6ZSI6ICJNaWRhIiwKICAgICAgICAiUGVybXMiOiAiUGVybWlzb3MiLAogICAgICAgICJNb2RpZmllZCI6ICJNb2RpZmljYXQiLAogICAgICAgICJPd25lciI6ICJQcm9waWV0YXJpIiwKICAgICAgICAiU2VhcmNoIjogIkNlcmNhciIsCiAgICAgICAgIk5ld0l0ZW0iOiAiTm91IMONdGVtIiwKICAgICAgICAiRm9sZGVyIjogIkNhcnBldGEiLAogICAgICAgICJEZWxldGUiOiAiRXNib3JyYXIiLAogICAgICAgICJSZW5hbWUiOiAiQ2FudmlhciBOb20iLAogICAgICAgICJDb3B5VG8iOiAiQ29waWFyIGEiLAogICAgICAgICJEaXJlY3RMaW5rIjogIkVubGxhw6cgRGlyZWN0ZSIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIlB1amFyIEFyeGl1cyIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIkNhbnZpYXIgUGVybWlzb3MiLAogICAgICAgICJDb3B5aW5nIjogIkNvcGlhbnQiLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIkNyZWFyIHVuIE5vdSDDjXRlbSIsCiAgICAgICAgIk5hbWUiOiAiTm9tIiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAiRWRpdG9yIEF2YW7Dp2F0IiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJSZWNvcmRhJ20iLAogICAgICAgICJBY3Rpb25zIjogIkFjY2lvbnMiLAogICAgICAgICJVcGxvYWQiOiAiUHVqYXIiLAogICAgICAgICJDYW5jZWwiOiAiQ2FuY2VswrdsYXIiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiSW52ZXJ0aXIgU2VsZWNjacOzIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiQ2FycGV0YSBEZXN0w60iLAogICAgICAgICJJdGVtVHlwZSI6ICJUaXB1cyBkJ8ONdGVtIiwKICAgICAgICAiSXRlbU5hbWUiOiAiTm9tIGRlIGwnw410ZW0iLAogICAgICAgICJDcmVhdGVOb3ciOiAiQ3JlYXIiLAogICAgICAgICJEb3dubG9hZCI6ICJEZXNjYXJyZWdhciIsCiAgICAgICAgIk9wZW4iOiAiT2JyaXIiLAogICAgICAgICJVblppcCI6ICJEZXNjb21wcmltaXIiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIkRlc2NvbXByaW1pciBhIENhcnBldGEiLAogICAgICAgICJFZGl0IjogIkVkaXRhciIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJFZGl0b3IgTm9ybWFsIiwKICAgICAgICAiQmFja1VwIjogIkPDsnBpYSBkZSBTZWd1cmV0YXQiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiQ2FycGV0YSBBY3R1YWwiLAogICAgICAgICJGaWxlcyI6ICJBcnhpdXMiLAogICAgICAgICJDaGFuZ2UiOiAiQ2FudmlhciIsCiAgICAgICAgIlNldHRpbmdzIjogIlByZWZlcsOobmNpZXMiLAogICAgICAgICJMYW5ndWFnZSI6ICJJZGlvbWEiLAogICAgICAgICJNZW1vcnlVc2VkIjogIk1lbcOycmlhIHVzYWRhIiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICJNaWRhIGRlIGxhIHBhcnRpY2nDsyIsCiAgICAgICAgIkVycm9yUmVwb3J0aW5nIjogIkluZm9ybWUgZCdlcnJvcnMiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAiTW9zdHJhIEZpdHhlcnMgT2N1bHRzIiwKICAgICAgICAiRnVsbCBzaXplIjogIk1pZGEgc2VuY2VyYSIsCiAgICAgICAgIkhlbHAiOiAiQWp1ZGEiLAogICAgICAgICJGcmVlIG9mIjogIkxsaXVyZSBkZSIsCiAgICAgICAgIlByZXZpZXciOiAiUHJldmlzdWFsaXR6YXIiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICJEb2N1bWVudHMgZCdhanVkYSIsCiAgICAgICAgIlJlcG9ydCBJc3N1ZSI6ICJJbmZvcm1lIGRlbCBwcm9ibGVtYSIsCiAgICAgICAgIkdlbmVyYXRlIjogIkdlbmVyYXIiLAogICAgICAgICJGdWxsU2l6ZSI6ICJNaWRhIFRvdGFsIiwKICAgICAgICAiRnJlZU9mIjogImxsaXVyZSBkZSIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAiQ2FsY3VsYXIgbWlkYSBkZSBsYSBjYXJwZXRhIiwKICAgICAgICAiUHJvY2Vzc0lEIjogIlByb2PDqXMgSUQiLAogICAgICAgICJDcmVhdGVkIjogIkNyZWF0IiwKICAgICAgICAiSGlkZUNvbHVtbnMiOiAiQW1hZ2FyIFBlcm1pc29zL1Byb3BpZXRhcmkgY29sdW1uZXMiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAiTGEgY2FycGV0YSDDqXMgYnVpZGEiLAogICAgICAgICJDaGVjayBMYXRlc3QgVmVyc2lvbiI6ICJDb21wcm92YSBsJ8O6bHRpbWEgdmVyc2nDsyIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIkNyZWFyIHVuYSBub3UgaGFzaCBkZSBjb250cmFzZW55YSIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIkVzdMOgcyBhdXRlbnRpY2F0IiwKICAgICAgICAiTG9naW4gZmFpbGVkLiBJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIjogIkVycm9yIGQnaW5pY2kgZGUgc2Vzc2nDsy4gRWwgbm9tIGQndXN1YXJpIG8gY29udHJhc2VueWEgc8OzbiBpbmNvcnJlY3RlcyIsCiAgICAgICAgInBhc3N3b3JkX2hhc2ggbm90IHN1cHBvcnRlZCwgVXBncmFkZSBQSFAgdmVyc2lvbiI6ICJubyDDqXMgY29tcGF0aWJsZSBwYXNzd29yZF9oYXNoLiBBY3R1YWxpdHphIGxhIHZlcnNpw7MgZGUgUEhQIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJEZXV0c2NoIiwKICAgICAgImNvZGUiOiAiZGUiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICJEYXRlaW1hbmFnZXIiLAogICAgICAgICJMb2dpbiI6ICJFaW5sb2dnZW4iLAogICAgICAgICJVc2VybmFtZSI6ICJCZW51dHplcm5hbWUiLAogICAgICAgICJQYXNzd29yZCI6ICJQYXNzd29ydCIsCiAgICAgICAgIkxvZ291dCI6ICJBdXNsb2dnZW4iLAogICAgICAgICJNb3ZlIjogIlZlcnNjaGllYmVuIiwKICAgICAgICAiQ29weSI6ICJLb3BpZXJlbiIsCiAgICAgICAgIlNhdmUiOiAiU3BlaWNoZXJuIiwKICAgICAgICAiU2VsZWN0QWxsIjogIkFsbGVzIGF1c3fDpGhsZW4iLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJBbGxlcyBhYnfDpGhsZW4iLAogICAgICAgICJGaWxlIjogIkRhdGVpIiwKICAgICAgICAiQmFjayI6ICJadXLDvGNrIiwKICAgICAgICAiU2l6ZSI6ICJHcsO2w59lIiwKICAgICAgICAiUGVybXMiOiAiQmVyZWNodGlndW5nZW4iLAogICAgICAgICJNb2RpZmllZCI6ICJHZcOkbmRlcnQiLAogICAgICAgICJPd25lciI6ICJFaWdlbnTDvG1lciIsCiAgICAgICAgIlNlYXJjaCI6ICJTdWNoYmVncmlmZiBlaW5nZWJlbiIsCiAgICAgICAgIk5ld0l0ZW0iOiAiTmV1ZXMgRWxlbWVudCIsCiAgICAgICAgIkZvbGRlciI6ICJPcmRuZXIiLAogICAgICAgICJEZWxldGUiOiAiTMO2c2NoZW4iLAogICAgICAgICJSZW5hbWUiOiAiVW1iZW5lbm5lbiIsCiAgICAgICAgIkNvcHlUbyI6ICJLb3BpZXJlbiBuYWNoIiwKICAgICAgICAiRGlyZWN0TGluayI6ICJEaXJla3RsaW5rIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiRGF0ZWllbiBob2NobGFkZW4iLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICJCZXJlY2h0aWd1bmdlbiDDpG5kZXJuIiwKICAgICAgICAiQ29weWluZyI6ICJLb3BpZXJlbiIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiTmV1ZXMgRWxlbWVudCBlcnN0ZWxsZW4iLAogICAgICAgICJOYW1lIjogIk5hbWUiLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJFcndlaXRlcnRlciBFZGl0b3IiLAogICAgICAgICJSZW1lbWJlck1lIjogIkVpbmdlbG9nZ3QgYmxlaWJlbiIsCiAgICAgICAgIkFjdGlvbnMiOiAiQWt0aW9uZW4iLAogICAgICAgICJVcGxvYWQiOiAiSG9jaGxhZGVuIiwKICAgICAgICAiQ2FuY2VsIjogIkFiYnJlY2hlbiIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICJBdXN3YWhsIHVta2VocmVuIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiWmllbG9yZG5lciIsCiAgICAgICAgIkl0ZW1UeXBlIjogIkRhdGVpdHlwIiwKICAgICAgICAiSXRlbU5hbWUiOiAiRGF0ZWluYW1lIiwKICAgICAgICAiQ3JlYXRlTm93IjogIkpldHp0IGVyc3RlbGxlbiIsCiAgICAgICAgIkRvd25sb2FkIjogIkRvd25sb2FkIiwKICAgICAgICAiT3BlbiI6ICLDlmZmbmVuIiwKICAgICAgICAiVW5aaXAiOiAiRW50cGFja2VuIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICJFbnRwYWNrZW4gaW0gT3JkbmVyIiwKICAgICAgICAiRWRpdCI6ICJCZWFyYmVpdGVuIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIlN0YW5kYXJkLUVkaXRvciIsCiAgICAgICAgIkJhY2tVcCI6ICJCYWNrdXAiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiUXVlbGxvcmRuZXIiLAogICAgICAgICJGaWxlcyI6ICJEYXRlaWVuIiwKICAgICAgICAiQ2hhbmdlIjogIsOEbmRlcm4iLAogICAgICAgICJTZXR0aW5ncyI6ICJFaW5zdGVsbHVuZ2VuIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAiU3ByYWNoZSIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICJPcmRuZXIgaXN0IGxlZXIiLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIlBhcnRpdGlvbnNncsO2w59lIiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAiRmVobGVyLUJlcmljaHRlcnN0YXR0dW5nIiwKICAgICAgICAiU2hvd0hpZGRlbkZpbGVzIjogIlZlcnN0ZWNrdGUgRGF0ZWllbiBhbnplaWdlbiIsCiAgICAgICAgIkZ1bGwgc2l6ZSI6ICJHZXNhbXRncsO2w59lIiwKICAgICAgICAiSGVscCI6ICJIaWxmZSIsCiAgICAgICAgIkZyZWUgb2YiOiAiRnJlaSB2b24iLAogICAgICAgICJQcmV2aWV3IjogIlZvcnNjaGF1IiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAiSGlsZmUgYW56ZWlnZW4gKEVuZ2xpc2NoKSIsCiAgICAgICAgIlJlcG9ydCBJc3N1ZSI6ICJQcm9ibGVtIG1lbGRlbiIsCiAgICAgICAgIkdlbmVyYXRlIjogIkVyemV1Z2VuIiwKICAgICAgICAiRnVsbFNpemUiOiAiR2VzYW10Z3LDtsOfZSIsCiAgICAgICAgIkZyZWVPZiI6ICJmcmVpIHZvbiIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAiT3JkbmVyZ3LDtsOfZSBiZXJlY2huZW4iLAogICAgICAgICJQcm9jZXNzSUQiOiAiUHJvemVzcy1JRCIsCiAgICAgICAgIkNyZWF0ZWQiOiAiRXJzdGVsbHQiLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICJTcGFsdGVuIEJlcmVjaHRpZ3VuZ2VuIC8gQmVzaXR6ZXIgdmVyc3RlY2tlbiIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIlBhc3N3b3JkLUhhc2ggbmV1IGVyemV1Z2VuIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAiQXVmIG5ldWUgVmVyc2lvbiDDvGJlcnByw7xmZW4iLAogICAgICAgICJZb3UgYXJlIGxvZ2dlZCBpbiI6ICJEdSBiaXN0IGVpbmdlbG9nZ3QuIiwKICAgICAgICAiTG9naW4gZmFpbGVkLiBJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIjogIkxvZ2luIGZlaGxnZXNjaGxhZ2VuLiBGYWxzY2hlciBCZW51dHplcm5hbWUgb2RlciBQYXNzd29ydC4iLAogICAgICAgICJwYXNzd29yZF9oYXNoIG5vdCBzdXBwb3J0ZWQsIFVwZ3JhZGUgUEhQIHZlcnNpb24iOiAicGFzc3dvcmRfaGFzaCB3aXJkIG5pY2h0IHVudGVyc3TDvHR6dCwgYWt0dWFsaXNpZXJlIGRpZSBQSFAtVmVyc2lvbiIsCiAgICAgICAgIkFkdmFuY2VkIFNlYXJjaCI6ICJFcndlaXRlcnRlIFN1Y2hlIiwKICAgICAgICAiRXJyb3Igd2hpbGUgY29weWluZyBmcm9tIjogIkZlaGxlciBiZWltIEtvcGllcmVuIGF1cyIsCiAgICAgICAgIk5vdGhpbmcgc2VsZWN0ZWQiOiAiTmljaHRzIGF1c2dld8OkaGx0IiwKICAgICAgICAiUGF0aHMgbXVzdCBiZSBub3QgZXF1YWwiOiAiUXVlbGwtIHVuZCBaaWVscGZhZCBkw7xyZmVuIG5pY2h0IGlkZW50aXNjaCBzZWluIiwKICAgICAgICAiUmVuYW1lZCBmcm9tIjogIlVtYmVuYW5udCB2b24iLAogICAgICAgICJBcmNoaXZlIG5vdCB1bnBhY2tlZCI6ICJBcmNoaXYgbmljaHQgZW50cGFja3QiLAogICAgICAgICJEZWxldGVkIjogIkdlbMO2c2NodCIsCiAgICAgICAgIkFyY2hpdmUgbm90IGNyZWF0ZWQiOiAiQXJjaGl2IG5pY2h0IGVyc3RlbGx0IiwKICAgICAgICAiQ29waWVkIGZyb20iOiAiS29waWVydCBhdXMiLAogICAgICAgICJQZXJtaXNzaW9ucyBjaGFuZ2VkIjogIkJlcmVjaHRpZ3VuZ2VuIGdlw6RuZGVydCIsCiAgICAgICAgInRvIjogIm5hY2giLAogICAgICAgICJTYXZlZCBTdWNjZXNzZnVsbHkiOiAiRXJmb2xncmVpY2ggZ2VzcGVpY2hlcnQiLAogICAgICAgICJub3QgZm91bmQhIjogIm5pY2h0IGdlZnVuZGVuISIsCiAgICAgICAgIkZpbGUgU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIkRhdGVpIGVyZm9sZ3JlaWNoIGdlc3BlaWNoZXJ0IiwKICAgICAgICAiQXJjaGl2ZSI6ICJBcmNoaXYiLAogICAgICAgICJQZXJtaXNzaW9ucyBub3QgY2hhbmdlZCI6ICJCZXJlY2h0aWd1bmdlbiBuaWNodCBnZcOkbmRlcnQiLAogICAgICAgICJTZWxlY3QgZm9sZGVyIjogIk9yZG5lciBhdXN3w6RobGVuIiwKICAgICAgICAiU291cmNlIHBhdGggbm90IGRlZmluZWQiOiAiUXVlbGxwZmFkIG5pY2h0IGRlZmluaWVydCIsCiAgICAgICAgImFscmVhZHkgZXhpc3RzIjogImV4aXN0aWVydCBiZXJlaXRzIiwKICAgICAgICAiRXJyb3Igd2hpbGUgbW92aW5nIGZyb20iOiAiRmVobGVyIGJlaW0gVmVyc2NoaWViZW4gYXVzIiwKICAgICAgICAiQ3JlYXRlIGFyY2hpdmU/IjogIkFyY2hpdiBlcnN0ZWxsZW4/IiwKICAgICAgICAiSW52YWxpZCBmaWxlIG9yIGZvbGRlciBuYW1lIjogIlVuZ8O8bHRpZ2VyIERhdGVpLSBvZGVyIE9yZG5lcm5hbWUiLAogICAgICAgICJBcmNoaXZlIHVucGFja2VkIjogIkFyY2hpdmUgZW50cGFja3QiLAogICAgICAgICJGaWxlIGV4dGVuc2lvbiBpcyBub3QgYWxsb3dlZCI6ICJEYXRlaXR5cCBuaWNodCBlcmxhdWJ0IiwKICAgICAgICAiUm9vdCBwYXRoIjogIlF1ZWxsdmVyemVpY2huaXMiLAogICAgICAgICJFcnJvciB3aGlsZSByZW5hbWluZyBmcm9tIjogIkZlaGxlciBiZWltIFVtYmVuZW5uZW4gdm9uIiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAiRGF0ZWkgbmljaHQgZ2VmdW5kZW4iLAogICAgICAgICJFcnJvciB3aGlsZSBkZWxldGluZyBpdGVtcyI6ICJGZWhsZXIgYmVpbSBMw7ZzY2hlbiBkZXIgT2JqZWt0ZSIsCiAgICAgICAgIkludmFsaWQgY2hhcmFjdGVycyBpbiBmaWxlIG5hbWUiOiAiVW56dWzDpHNzaWdlIFplaWNoZW4gaW0gRGF0ZWluYW1lbiIsCiAgICAgICAgIkZJTEUgRVhURU5TSU9OIEhBUyBOT1QgU1VQUE9SVEVEIjogIkRBVEVJVFlQIE5JQ0hUIFVOVEVSU1TDnFRaVCIsCiAgICAgICAgIlNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXIgZGVsZXRlZCI6ICJBdXNnZXfDpGhsdGUgRGF0ZWllbiB1bmQgT3JkbmVyIGdlbMO2c2NodCIsCiAgICAgICAgIkVycm9yIHdoaWxlIGZldGNoaW5nIGFyY2hpdmUgaW5mbyI6ICJGZWhsZXIgYmVpbSBBYnJ1ZmVuIGRlciBBcmNoaXYtSW5mb3JtYXRpb25lbiIsCiAgICAgICAgIkRlbGV0ZSBzZWxlY3RlZCBmaWxlcyBhbmQgZm9sZGVycz8iOiAiQXVzZ2V3w6RobHRlIERhdGVpZW4gdW5kIE9yZG5lciBsw7ZzY2hlbj8iLAogICAgICAgICJTZWFyY2ggZmlsZSBpbiBmb2xkZXIgYW5kIHN1YmZvbGRlcnMuLi4iOiAiU3VjaGVuIGluIE9yZG5lcm4gdW5kIFVudGVyb3JkbmVybi4uLiIsCiAgICAgICAgIkFjY2VzcyBkZW5pZWQuIElQIHJlc3RyaWN0aW9uIGFwcGxpY2FibGUiOiAiWnVncmlmZiB2ZXJ3ZWlnZXJ0IC0gSVAtQmVzY2hyw6Rua3VuZy4iLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBvciBmb2xkZXIgbmFtZSI6ICJVbnp1bMOkc3NpZ2UgWmVpY2hlbiBpbSBEYXRlaS0gb2RlciBPcmRuZXJuYW1lbiIsCiAgICAgICAgIk9wZXJhdGlvbnMgd2l0aCBhcmNoaXZlcyBhcmUgbm90IGF2YWlsYWJsZSI6ICJBcmNoaXYtRnVua3Rpb25lbiBuaWNodCB2ZXJmw7xnYmFyIiwKICAgICAgICAiRmlsZSBvciBmb2xkZXIgd2l0aCB0aGlzIHBhdGggYWxyZWFkeSBleGlzdHMiOiAiRGF0ZWkgb2RlciBPcmRuZXIgbWl0IGRpZXNlbSBQZmFkIGV4aXN0aWVydCBiZXJlaXRzIiwKICAgICAgICAiTW92ZWQgZnJvbSI6ICJWZXJzY2hvYmVuIGF1cyIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAi4Lig4Liy4Lip4Liy4LmE4LiX4LiiIiwKICAgICAgImNvZGUiOiAidGgiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICLguJXguLHguKfguIjguLHguJTguIHguLLguKPguYTguJ/guKXguYwiLAogICAgICAgICJMb2dpbiI6ICLguYDguILguYnguLLguKrguLnguYjguKPguLDguJrguJoiLAogICAgICAgICJVc2VybmFtZSI6ICLguIrguLfguYjguK3guJzguLnguYnguYPguIrguYnguIfguLLguJkiLAogICAgICAgICJQYXNzd29yZCI6ICLguKPguKvguLHguKrguJzguYjguLLguJkiLAogICAgICAgICJMb2dvdXQiOiAi4Lit4Lit4LiB4LiI4Liy4LiB4Lij4Liw4Lia4LiaIiwKICAgICAgICAiTW92ZSI6ICLguKLguYnguLLguKIiLAogICAgICAgICJDb3B5IjogIuC4hOC4seC4lOC4peC4reC4gSIsCiAgICAgICAgIlNhdmUiOiAi4Lia4Lix4LiZ4LiX4Li24LiBIiwKICAgICAgICAiU2VsZWN0QWxsIjogIuC5gOC4peC4t+C4reC4geC4l+C5ieC4h+C4q+C4oeC4lCIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIuC5hOC4oeC5iOC5gOC4peC4t+C4reC4geC4l+C4seC5ieC4h+C4q+C4oeC4lCIsCiAgICAgICAgIkZpbGUiOiAi4LmE4Lif4Lil4LmMIiwKICAgICAgICAiQmFjayI6ICLguIHguKXguLHguJoiLAogICAgICAgICJTaXplIjogIuC4guC4meC4suC4lCIsCiAgICAgICAgIlBlcm1zIjogIuC4o+C4q+C4seC4quC4quC4tOC4l+C4mOC4tOC5jCIsCiAgICAgICAgIk1vZGlmaWVkIjogIuC5geC4geC5ieC5hOC4guC4peC5iOC4suC4quC4uOC4lOC5gOC4oeC4t+C5iOC4rSIsCiAgICAgICAgIk93bmVyIjogIuC5gOC4iOC5ieC4suC4guC4reC4hyIsCiAgICAgICAgIlNlYXJjaCI6ICLguITguYnguJnguKvguLIiLAogICAgICAgICJOZXdJdGVtIjogIuC4quC4o+C5ieC4suC4h+C5g+C4q+C4oeC5iCIsCiAgICAgICAgIkZvbGRlciI6ICLguYLguJ/guKXguYDguJTguK3guKPguYwiLAogICAgICAgICJEZWxldGUiOiAi4Lil4LiaIiwKICAgICAgICAiUmVuYW1lIjogIuC5gOC4m+C4peC4teC5iOC4ouC4meC4iuC4t+C5iOC4rSIsCiAgICAgICAgIkNvcHlUbyI6ICLguITguLHguJTguKXguK3guIHguYTguJvguKLguLHguIciLAogICAgICAgICJEaXJlY3RMaW5rIjogIuC5hOC4m+C4ouC4seC4h+C4peC4tOC5ieC4h+C4geC5jOC4meC4seC5ieC4mSIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIuC4reC4seC4nuC5guC4q+C4peC4lCIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIuC5gOC4m+C4peC4teC5iOC4ouC4meC4quC4tOC4l+C4mOC4tOC5jCIsCiAgICAgICAgIkNvcHlpbmciOiAi4LiB4Liz4Lil4Lix4LiH4Lii4LmJ4Liy4Lii4LiC4LmJ4Lit4Lih4Li54LilIiwKICAgICAgICAiQ3JlYXRlTmV3SXRlbSI6ICLguKrguKPguYnguLLguIfguYTguJ/guKXguYzguYPguKvguKHguYgiLAogICAgICAgICJOYW1lIjogIuC4iuC4t+C5iOC4rSIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIuC5geC4geC5ieC5hOC4guC4guC4seC5ieC4meC4quC4ueC4hyIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAi4LiI4LiU4LiI4Liz4LiJ4Lix4LiZ4LmE4Lin4LmJIiwKICAgICAgICAiQWN0aW9ucyI6ICLguIHguLLguKPguJfguLPguIfguLLguJkiLAogICAgICAgICJVcGxvYWQiOiAi4Lit4Lix4Lie4LmC4Lir4Lil4LiUIiwKICAgICAgICAiQ2FuY2VsIjogIuC4ouC4geC5gOC4peC4tOC4gSIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICLguYDguJvguKXguLXguYjguKLguJnguILguYnguK3guKHguLnguKUiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICLguYLguJ/guKXguYDguJTguK3guKPguYzguJvguKXguLLguKLguJfguLLguIciLAogICAgICAgICJJdGVtVHlwZSI6ICLguILguYnguK3guKHguLnguKXguJvguKPguLDguYDguKDguJciLAogICAgICAgICJJdGVtTmFtZSI6ICLguIrguLfguYjguK3guYTguJ/guKXguYwiLAogICAgICAgICJDcmVhdGVOb3ciOiAi4Liq4Lij4LmJ4Liy4LiH4LiV4Lit4LiZ4LiZ4Li14LmJIiwKICAgICAgICAiRG93bmxvYWQiOiAi4LiU4Liy4Lin4LmC4Lir4Lil4LiUIiwKICAgICAgICAiT3BlbiI6ICLguYDguJvguLTguJQiLAogICAgICAgICJVblppcCI6ICLguYHguJXguIEgWmlwIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICLguYHguJXguIHguYTguJ/guKXguYzguYPguJnguYLguJ/guYDguJTguK3guKPguYzguJnguLXguYkiLAogICAgICAgICJFZGl0IjogIuC5geC4geC5ieC5hOC4giIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICLguYHguIHguYnguYTguILguJvguIHguJXguLQiLAogICAgICAgICJCYWNrVXAiOiAi4Liq4Liz4Lij4Lit4LiH4LiC4LmJ4Lit4Lih4Li54LilIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIuC5guC4n+C4peC5gOC4lOC4reC4o+C5jOC4leC5ieC4meC4l+C4suC4hyIsCiAgICAgICAgIkZpbGVzIjogIuC5hOC4n+C4peC5jCIsCiAgICAgICAgIkNoYW5nZSI6ICLguYDguJvguKXguLXguYjguKLguJkiLAogICAgICAgICJTZXR0aW5ncyI6ICLguIHguLLguKPguJXguLHguYnguIfguITguYjguLIiLAogICAgICAgICJMYW5ndWFnZSI6ICLguKDguLLguKnguLIiCiAgICAgIH0KICAgIH0sCiAgICB7CiAgICAgICJuYW1lIjogIueugOS9k+S4reaWhyIsCiAgICAgICJjb2RlIjogInpoLUNOIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBcHBOYW1lIjogIuaWh+S7tueuoeeQhuWZqCIsCiAgICAgICAgIkFwcFRpdGxlIjogIuaWh+S7tueuoeeQhuWZqCIsCiAgICAgICAgIkxvZ2luIjogIueZu+W9lSIsCiAgICAgICAgIlVzZXJuYW1lIjogIui0puWPtyIsCiAgICAgICAgIlBhc3N3b3JkIjogIuWvhueggSIsCiAgICAgICAgIkxvZ291dCI6ICLpgIDlh7oiLAogICAgICAgICJNb3ZlIjogIuenu+WKqCIsCiAgICAgICAgIkNvcHkiOiAi5aSN5Yi2IiwKICAgICAgICAiU2F2ZSI6ICLkv53lrZgiLAogICAgICAgICJTZWxlY3RBbGwiOiAi5YWo6YCJIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAi5Y+W5raI5YWo6YCJIiwKICAgICAgICAiRmlsZSI6ICLmlofku7YiLAogICAgICAgICJCYWNrIjogIuWPlua2iCIsCiAgICAgICAgIlNpemUiOiAi5aSn5bCPIiwKICAgICAgICAiUGVybXMiOiAi5p2D6ZmQIiwKICAgICAgICAiTW9kaWZpZWQiOiAi5L+u5pS55pe26Ze0IiwKICAgICAgICAiT3duZXIiOiAi5oul5pyJ6ICFIiwKICAgICAgICAiU2VhcmNoIjogIuafpeaJviIsCiAgICAgICAgIk5ld0l0ZW0iOiAi5Yib5bu65paw5paH5Lu2L+aWh+S7tuWkuSIsCiAgICAgICAgIkZvbGRlciI6ICLmlofku7blpLkiLAogICAgICAgICJEZWxldGUiOiAi5Yig6ZmkIiwKICAgICAgICAiQ29weVRvIjogIuWkjeWItuWIsCIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAi55u06ZO+IiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAi5LiK5LygIiwKICAgICAgICAiQ2hhbmdlUGVybWlzc2lvbnMiOiAi5L+u5pS55p2D6ZmQIiwKICAgICAgICAiQ29weWluZyI6ICLlpI3liLbkuK0iLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIuWIm+W7uuaWsOaWh+S7tiIsCiAgICAgICAgIk5hbWUiOiAi5paH5Lu25ZCNIiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAi6auY57qn57yW6L6R5ZmoIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICLorrDkvY/nmbvlvZXkv6Hmga8iLAogICAgICAgICJBY3Rpb25zIjogIuaJp+ihjOaTjeS9nCIsCiAgICAgICAgIlVwbG9hZCI6ICLkuIrkvKAiLAogICAgICAgICJDYW5jZWwiOiAi5Y+W5raIIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogIuWPjeWQkemAieaLqSIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIuebruagh+aWh+S7tuWkuSIsCiAgICAgICAgIkl0ZW1UeXBlIjogIuaWh+S7tuexu+WeiyIsCiAgICAgICAgIkl0ZW1OYW1lIjogIuWIm+W7uuWQjeensCIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICLliJvlu7oiLAogICAgICAgICJEb3dubG9hZCI6ICLkuIvovb0iLAogICAgICAgICJVblppcCI6ICLop6PljovnvKkiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIuino+WOi+iHs+ebruagh+aWh+S7tuWkuSIsCiAgICAgICAgIkVkaXQiOiAi57yW6L6RIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIue8lui+keWZqCIsCiAgICAgICAgIkJhY2tVcCI6ICLlpIfku70iLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAi5rqQ5paH5Lu25aS5IiwKICAgICAgICAiRmlsZXMiOiAi5paH5Lu2IiwKICAgICAgICAiQ2hhbmdlIjogIuS/ruaUuSIsCiAgICAgICAgIlNldHRpbmdzIjogIuiuvue9riIsCiAgICAgICAgIkxhbmd1YWdlIjogIuivreiogCIsCiAgICAgICAgIk9wZW4iOiAi5omT5byAIiwKICAgICAgICAiR3JvdXAiOiAi55So5oi357uEIiwKICAgICAgICAiT3RoZXIiOiAi5YW25a6D55So5oi3IiwKICAgICAgICAiUmVhZCI6ICLor7vlj5bmnYPpmZAiLAogICAgICAgICJXcml0ZSI6ICLlhpnlhaXmnYPpmZAiLAogICAgICAgICJFeGVjdXRlIjogIuaJp+ihjOadg+mZkCIsCiAgICAgICAgIlJlbmFtZSI6ICLph43lkb3lkI0iLAogICAgICAgICJlbmFibGUiOiAi5ZCv55SoIiwKICAgICAgICAiZGlzYWJsZSI6ICLnpoHnlKgiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICLkuIrkvKDplJnor6/miqXlkYoiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAi5pi+56S66ZqQ6JeP5paH5Lu2IiwKICAgICAgICAiSGVscCI6ICLluK7liqkiLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICLpmpDol4/mnYPpmZAm5oul5pyJ6ICFIiwKICAgICAgICAiQ2FsY3VsYXRlRm9sZGVyU2l6ZSI6ICLmmL7npLrmlofku7blpLnlpKflsI8iLAogICAgICAgICJGdWxsU2l6ZSI6ICLmiYDmnInmlofku7blpKflsI8iLAogICAgICAgICJNZW1vcnlVc2VkIjogIuS9v+eUqOWGheWtmCIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAi5Y+v55So56m66Ze0IiwKICAgICAgICAiRnJlZU9mIjogIuejgeebmOWkp+WwjyIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIuajgOafpeabtOaWsCIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIueUn+aIkOaWsOeahGhhc2jlr4bnoIEiLAogICAgICAgICJSZXBvcnQgSXNzdWUiOiAi5oql5ZGK6Zeu6aKYIiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAi5biu5Yqp5paH5qGjIiwKICAgICAgICAiR2VuZXJhdGUiOiAi55Sf5oiQIiwKICAgICAgICAiUmVuYW1lZCBmcm9tIjogIueUn+aIkCIsCiAgICAgICAgIlByZXZpZXciOiAi6aKE6KeIIiwKICAgICAgICAiQWNjZXNzIGRlbmllZC4gSVAgcmVzdHJpY3Rpb24gYXBwbGljYWJsZSI6ICLorr/pl67ooqvmi5Lnu53jgILpgILnlKjnmoRJUOmZkOWItiIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIuaCqOW3sueZu+W9lSIsCiAgICAgICAgIkxvZ2luIGZhaWxlZC4gSW52YWxpZCB1c2VybmFtZSBvciBwYXNzd29yZCI6ICLnmbvlvZXlpLHotKXjgILnlKjmiLflkI3miJblr4bnoIHml6DmlYgiLAogICAgICAgICJwYXNzd29yZF9oYXNoIG5vdCBzdXBwb3J0ZWQsIFVwZ3JhZGUgUEhQIHZlcnNpb24iOiAi5LiN5pSv5oyBcGFzc3dvcmRfaGFzaCzor7fljYfnuqdQSFDniYjmnKwiLAogICAgICAgICJSb290IHBhdGgiOiAi5qC56Lev5b6EIiwKICAgICAgICAibm90IGZvdW5kISI6ICLmsqHmnInmib7liLDvvIEiLAogICAgICAgICJGaWxlIG5vdCBmb3VuZCI6ICLmib7kuI3liLDmlofku7YiLAogICAgICAgICJEZWxldGVkIjogIuWIoOmZpCIsCiAgICAgICAgIm5vdCBkZWxldGVkIjogIuacquWIoOmZpCIsCiAgICAgICAgIkludmFsaWQgZmlsZSBvciBmb2xkZXIgbmFtZSI6ICLml6DmlYjnmoTmlofku7bmiJbmlofku7blpLnlkI0iLAogICAgICAgICJDcmVhdGVkIjogIuW3suWIm+W7uiIsCiAgICAgICAgIkZpbGUgZXh0ZW5zaW9uIGlzIG5vdCBhbGxvd2VkIjogIuS4jeWFgeiuuOaWh+S7tuaJqeWxleWQjSIsCiAgICAgICAgImFscmVhZHkgZXhpc3RzIjogIuW3sue7j+WtmOWcqCIsCiAgICAgICAgIm5vdCBjcmVhdGVkIjogIuacquWIm+W7uiIsCiAgICAgICAgIkludmFsaWQgY2hhcmFjdGVycyBpbiBmaWxlIG9yIGZvbGRlciBuYW1lIjogIuaWh+S7tuaIluaWh+S7tuWkueWQjeensOS4reeahOaXoOaViOWtl+espiIsCiAgICAgICAgIlNvdXJjZSBwYXRoIG5vdCBkZWZpbmVkIjogIuacquWumuS5iea6kOi3r+W+hCIsCiAgICAgICAgIk1vdmVkIGZyb20iOiAi56e75Yqo6IeqIiwKICAgICAgICAidG8iOiAi6IezIiwKICAgICAgICAiRmlsZSBvciBmb2xkZXIgd2l0aCB0aGlzIHBhdGggYWxyZWFkeSBleGlzdHMiOiAi5YW35pyJ5q2k6Lev5b6E55qE5paH5Lu25oiW5paH5Lu25aS55bey5a2Y5ZyoIiwKICAgICAgICAiRXJyb3Igd2hpbGUgbW92aW5nIGZyb20iOiAi56e75Yqo5pe25Ye66ZSZIiwKICAgICAgICAiQ29waWVkIGZyb20iOiAi5aSN5Yi26IeqIiwKICAgICAgICAiRXJyb3Igd2hpbGUgY29weWluZyBmcm9tIjogIuWkjeWItuaXtuWHuumUmSIsCiAgICAgICAgIlBhdGhzIG11c3QgYmUgbm90IGVxdWFsIjogIui3r+W+hOW/hemhu+S4jeebuOetiSIsCiAgICAgICAgIk5vdGhpbmcgc2VsZWN0ZWQiOiAi5pyq6YCJ5oup5Lu75L2V5YaF5a65IiwKICAgICAgICAiRXJyb3Igd2hpbGUgcmVuYW1pbmcgZnJvbSI6ICLph43lkb3lkI3ml7blh7rplJkiLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBuYW1lIjogIuaWh+S7tuWQjeS4reeahOaXoOaViOWtl+espiIsCiAgICAgICAgIkludmFsaWQgVG9rZW4uIjogIuaXoOaViOS7pOeJjOOAgiIsCiAgICAgICAgIlNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXIgZGVsZXRlZCI6ICLlt7LliKDpmaTpgInlrprnmoTmlofku7blkozmlofku7blpLkiLAogICAgICAgICJFcnJvciB3aGlsZSBkZWxldGluZyBpdGVtcyI6ICLliKDpmaTpobnnm67ml7blh7rplJkiLAogICAgICAgICJPcGVyYXRpb25zIHdpdGggYXJjaGl2ZXMgYXJlIG5vdCBhdmFpbGFibGUiOiAi5a2Y5qGj5pON5L2c5LiN5Y+v55SoIiwKICAgICAgICAiQXJjaGl2ZSI6ICLlrZjmoaMiLAogICAgICAgICJBcmNoaXZlIG5vdCBjcmVhdGVkIjogIuacquWIm+W7uuWtmOahoyIsCiAgICAgICAgIkFyY2hpdmUgdW5wYWNrZWQiOiAi5a2Y5qGj5pyq5omT5YyFIiwKICAgICAgICAiQXJjaGl2ZSBub3QgdW5wYWNrZWQiOiAi5a2Y5qGj5pyq5omT5byAIiwKICAgICAgICAiUGVybWlzc2lvbnMgY2hhbmdlZCI6ICLmnYPpmZDlt7Lmm7TmlLkiLAogICAgICAgICJQZXJtaXNzaW9ucyBub3QgY2hhbmdlZCI6ICLmnYPpmZDmnKrmm7TmlLkiLAogICAgICAgICJTZWxlY3QgZm9sZGVyIjogIumAieaLqeaWh+S7tuWkuSIsCiAgICAgICAgIlRoZW1lIjogIuS4u+mimCIsCiAgICAgICAgImxpZ2h0IjogIua1heiJsiIsCiAgICAgICAgImRhcmsiOiAi5rex6ImyIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZmV0Y2hpbmcgYXJjaGl2ZSBpbmZvIjogIuiOt+WPluWtmOaho+S/oeaBr+aXtuWHuumUmSIsCiAgICAgICAgIkZpbGUgU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIuaWh+S7tuS/neWtmOaIkOWKnyIsCiAgICAgICAgIkZJTEUgRVhURU5TSU9OIEhBUyBOT1QgU1VQUE9SVEVEIjogIuaWh+S7tuaJqeWxleWQjeS4jeWPl+aUr+aMgSIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICLmlofku7blpLnkuLrnqboiLAogICAgICAgICJEZWxldGUgc2VsZWN0ZWQgZmlsZXMgYW5kIGZvbGRlcnM/IjogIuaYr+WQpuWIoOmZpOmAieWumueahOaWh+S7tuWSjOaWh+S7tuWkue+8nyIsCiAgICAgICAgIkNyZWF0ZSBhcmNoaXZlPyI6ICLliJvlu7rlrZjmoaPvvJ8iLAogICAgICAgICJaaXAiOiAiWmlwIiwKICAgICAgICAiVGFyIjogIlRhciIsCiAgICAgICAgIlplcm8gYnl0ZSBmaWxlISBBYm9ydGluZyBkb3dubG9hZCI6ICLpm7blrZfoioLmlofku7bvvIHmraPlnKjkuK3mraLkuIvovb0iLAogICAgICAgICJDYW5ub3Qgb3BlbiBmaWxlISBBYm9ydGluZyBkb3dubG9hZCI6ICLml6Dms5XmiZPlvIDmlofku7bvvIHmraPlnKjkuK3mraLkuIvovb0iLAogICAgICAgICJGaWx0ZXIiOiAi6L+H5ruk5ZmoIiwKICAgICAgICAiQWR2YW5jZWQgU2VhcmNoIjogIumrmOe6p+aQnOe0oiIsCiAgICAgICAgIlNlYXJjaCBmaWxlIGluIGZvbGRlciBhbmQgc3ViZm9sZGVycy4uLiI6ICLlnKjmlofku7blpLnlkozlrZDmlofku7blpLnkuK3mkJzntKLmlofku7bigKYiLAogICAgICAgICJBcmUgeW91IHN1cmUgd2FudCB0byI6ICLkvaDnoa7lrpropoEiLAogICAgICAgICJPa2F5IjogIuehruWumiIsCiAgICAgICAgImEgZmlsZXMiOiAi5LiA5Liq5paH5Lu2IiwKICAgICAgICAiRW50ZXIgaGVyZS4uLiI6ICLlnKjmraTlpITovpPlhaUuLi4iLAogICAgICAgICJFbnRlciBuZXcgZmlsZSBuYW1lIjogIui+k+WFpeaWsOaWh+S7tuWQjSIsCiAgICAgICAgIkZ1bGwgcGF0aCI6ICLlrozmlbTot6/lvoQiLAogICAgICAgICJGaWxlIHNpemUiOiAi5paH5Lu25aSn5bCPIiwKICAgICAgICAiTUlNRS10eXBlIjogIk1JTUXnsbvlnosiLAogICAgICAgICJJbWFnZSBzaXplcyI6ICLlm77lg4/lpKflsI8iLAogICAgICAgICJDaGFyc2V0IjogIue8lueggeagvOW8jyIsCiAgICAgICAgIkltYWdlIjogIuWbvueJhyIsCiAgICAgICAgIkF1ZGlvIjogIumfs+mikSIsCiAgICAgICAgIlZpZGVvIjogIuinhumikSIsCiAgICAgICAgIlVwbG9hZCBmcm9tIFVSTCI6ICLku45VUkzkuIrkvKAiLAogICAgICAgICJGaWxlcyBpbiBhcmNoaXZlIjogIuaho+ahiOaWh+S7tiIsCiAgICAgICAgIlRvdGFsIHNpemUiOiAi5oC75aSn5bCPIiwKICAgICAgICAiQ29tcHJlc3Npb24iOiAi5Y6L57ypIiwKICAgICAgICAiU2l6ZSBpbiBhcmNoaXZlIjogIuWtmOaho+S4reeahOWkp+WwjyIsCiAgICAgICAgIkludmFsaWQgVG9rZW4uIjogIuaXoOaViOS7pOeJjCIsCiAgICAgICAgIkZ1bGxzY3JlZW4iOiAi5YWo5bGPIiwKICAgICAgICAiU2VhcmNoIjogIuaQnOe0oiIsCiAgICAgICAgIldvcmQgV3JhcCI6ICLoh6rliqjmjaLooYwiLAogICAgICAgICJVbmRvIjogIuaSpOa2iCIsCiAgICAgICAgIlJlZG8iOiAi5oGi5aSNIiwKICAgICAgICAiU2VsZWN0IERvY3VtZW50IFR5cGUiOiAi6YCJ5oup5paH5qGj57G75Z6LIiwKICAgICAgICAiU2VsZWN0IE1vZGUiOiAi6YCJ5oup5qih5byPIiwKICAgICAgICAiU2VsZWN0IFRoZW1lIjogIumAieaLqeS4u+mimCIsCiAgICAgICAgIlNlbGVjdCBGb250IFNpemUiOiAi6YCJ5oup5a2X5L2T5aSn5bCPIiwKICAgICAgICAiQXJlIHlvdSBzdXJlIHdhbnQgdG8gcmVuYW1lPyI6ICLmmK/lkKbnoa7lrp7opoHph43lkb3lkI0/IgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICLkuK3mloco57mB6auUKSIsCiAgICAgICJjb2RlIjogInpoLVRXIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBcHBOYW1lIjogIuaqlOahiOeuoeeQhuWZqCIsCiAgICAgICAgIkFwcFRpdGxlIjogIuaqlOahiOeuoeeQhuWZqCIsCiAgICAgICAgIkxvZ2luIjogIueZu+WFpSIsCiAgICAgICAgIlVzZXJuYW1lIjogIuW4s+iZnyIsCiAgICAgICAgIlBhc3N3b3JkIjogIuWvhueivCIsCiAgICAgICAgIkxvZ291dCI6ICLnmbvlh7oiLAogICAgICAgICJNb3ZlIjogIuenu+WLlSIsCiAgICAgICAgIkNvcHkiOiAi6KSH6KO9IiwKICAgICAgICAiU2F2ZSI6ICLlhLLlrZgiLAogICAgICAgICJTZWxlY3RBbGwiOiAi6YG45pOH5YWo6YOoIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAi5Y+W5raI6YG45pOH5YWo6YOoIiwKICAgICAgICAiRmlsZSI6ICLmqpTmoYgiLAogICAgICAgICJCYWNrIjogIui/lOWbniIsCiAgICAgICAgIlNpemUiOiAi5aSn5bCPIiwKICAgICAgICAiUGVybXMiOiAi5qyK6ZmQIiwKICAgICAgICAiTW9kaWZpZWQiOiAi5L+u5pS55pmC6ZaTIiwKICAgICAgICAiT3duZXIiOiAi5pOB5pyJ6ICFIiwKICAgICAgICAiU2VhcmNoIjogIuaQnOWwiyIsCiAgICAgICAgIk5ld0l0ZW0iOiAi5bu656uL5paw5qqU5qGI5oiW6LOH5paZ5aS+IiwKICAgICAgICAiRm9sZGVyIjogIuizh+aWmeWkviIsCiAgICAgICAgIkRlbGV0ZSI6ICLliKrpmaQiLAogICAgICAgICJDb3B5VG8iOiAi6KSH6KO95YiwIiwKICAgICAgICAiRGlyZWN0TGluayI6ICLnm7TmjqXpgKPntZAiLAogICAgICAgICJVcGxvYWRpbmdGaWxlcyI6ICLkuIrlgrPmqpTmoYgiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICLorormm7TmrIrpmZAiLAogICAgICAgICJDb3B5aW5nIjogIuikh+ijvSIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAi5bu656uL5paw5qqU5qGIIiwKICAgICAgICAiTmFtZSI6ICLmqpTlkI0iLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICLpgLLpmo7nt6jovK8iLAogICAgICAgICJSZW1lbWJlck1lIjogIuiomOS9j+aIkSIsCiAgICAgICAgIkFjdGlvbnMiOiAi5YuV5L2cIiwKICAgICAgICAiVXBsb2FkIjogIuS4iuWCsyIsCiAgICAgICAgIkNhbmNlbCI6ICLlj5bmtogiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAi6YG45pOH5Y+N6L2JIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAi55uu5qiZ6LOH5paZ5aS+IiwKICAgICAgICAiSXRlbVR5cGUiOiAi5qqU5qGI6aGe5Z6LIiwKICAgICAgICAiSXRlbU5hbWUiOiAi5qqU5qGI5qqU5ZCNIiwKICAgICAgICAiQ3JlYXRlTm93IjogIuW7uueriyIsCiAgICAgICAgIkRvd25sb2FkIjogIuS4i+i8iSIsCiAgICAgICAgIlVuWmlwIjogIuino+Wjk+e4riIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAi6Kej5aOT57iu6Iez6LOH5paZ5aS+IiwKICAgICAgICAiRWRpdCI6ICLnt6jovK8iLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAi5pmu6YCa57eo6LyvIiwKICAgICAgICAiQmFja1VwIjogIuS4iuWCsyIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICLkvobmupDos4fmlpnlpL4iLAogICAgICAgICJGaWxlcyI6ICLmqpTmoYgiLAogICAgICAgICJDaGFuZ2UiOiAi6K6K5pu0IiwKICAgICAgICAiU2V0dGluZ3MiOiAi6Kit5a6aIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAi6Kqe6KiAIiwKICAgICAgICAiT3BlbiI6ICLplovllZ8iLAogICAgICAgICJHcm91cCI6ICLnvqTntYQiLAogICAgICAgICJPdGhlciI6ICLlhbbku5YiLAogICAgICAgICJSZWFkIjogIuiugOWPliIsCiAgICAgICAgIldyaXRlIjogIuWvq+WFpSIsCiAgICAgICAgIkV4ZWN1dGUiOiAi5Z+36KGMIiwKICAgICAgICAiUmVuYW1lIjogIumHjeaWsOWRveWQjSIsCiAgICAgICAgImVuYWJsZSI6ICLplovllZ8iLAogICAgICAgICJkaXNhYmxlIjogIumXnOmWiSIsCiAgICAgICAgIkVycm9yUmVwb3J0aW5nIjogIumMr+iqpOWgseWRiiIsCiAgICAgICAgIkhlbHAiOiAi5bmr5YqpIiwKICAgICAgICAiU2hvd0hpZGRlbkZpbGVzIjogIumhr+ekuumaseiXj+eahOaqlOahiCIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogIuS4jemhr+ekuuasiumZkOS7peWPiuaTgeacieiAhSIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAi6aGv56S66LOH5paZ5aS+5aSn5bCPIiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAi5bmr5Yqp5paH5Lu2IiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIuWbnuWgseWVj+mhjCIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIuaqouafpeacgOaWsOeJiOacrCIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIuW7uueri+aWsOeahOWvhueivCBIYXNoIOWHveaVuCIsCiAgICAgICAgIkdlbmVyYXRlIjogIuW7uueriyIsCiAgICAgICAgIkZ1bGxTaXplIjogIuaJgOacieaqlOahiOWuuemHjyIsCiAgICAgICAgIk1lbW9yeVVzZWQiOiAi5L2/55So55qE6KiY5oa26auU5aSn5bCPIiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICLlianppJjlj6/nlKjnqbrplpMiLAogICAgICAgICJGcmVlT2YiOiAi56Gs56Kf5a656YePOiIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiQmFoYXNhIEluZG9uZXNpYSIsCiAgICAgICJjb2RlIjogImlkIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBcHBOYW1lIjogIlRpbnkgRmlsZSBNYW5hZ2VyIiwKICAgICAgICAiQXBwVGl0bGUiOiAiUGVuZ2Vsb2xhIEJlcmthcyIsCiAgICAgICAgIkxvZ2luIjogIk1hc3VrIiwKICAgICAgICAiVXNlcm5hbWUiOiAiTmFtYSBwZW5nZ3VuYSIsCiAgICAgICAgIlBhc3N3b3JkIjogIkthdGEgc2FuZGkiLAogICAgICAgICJMb2dvdXQiOiAiS2VsdWFyIiwKICAgICAgICAiTW92ZSI6ICJQaW5kYWgiLAogICAgICAgICJDb3B5IjogIlNhbGluIiwKICAgICAgICAiU2F2ZSI6ICJTaW1wYW4iLAogICAgICAgICJTZWxlY3RBbGwiOiAiVGFuZGFpIHNlbXVhIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiVXJ1bmdrYW4gdGFuZGFpIiwKICAgICAgICAiRmlsZSI6ICJCZXJrYXMiLAogICAgICAgICJCYWNrIjogIktlbWJhbGkiLAogICAgICAgICJTaXplIjogIlVrdXJhbiIsCiAgICAgICAgIlBlcm1zIjogIkhhayBha3NlcyIsCiAgICAgICAgIk1vZGlmaWVkIjogIlRlcmFraGlyIGRpdWJhaCIsCiAgICAgICAgIk93bmVyIjogIlBlbWlsaWsiLAogICAgICAgICJTZWFyY2giOiAiQ2FyaSIsCiAgICAgICAgIk5ld0l0ZW0iOiAiSXRlbSBiYXJ1IiwKICAgICAgICAiRm9sZGVyIjogIkZvbGRlciIsCiAgICAgICAgIkRlbGV0ZSI6ICJIYXB1cyIsCiAgICAgICAgIlJlbmFtZSI6ICJHYW50aSBuYW1hIiwKICAgICAgICAiQ29weVRvIjogIlNhbGluIGtlIiwKICAgICAgICAiRGlyZWN0TGluayI6ICJUYXV0YW4gbGFuZ3N1bmciLAogICAgICAgICJVcGxvYWRpbmdGaWxlcyI6ICJNZW5ndW5nZ2FoIGJlcmthcyIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIlViYWggaGFrIGFrc2VzIiwKICAgICAgICAiQ29weWluZyI6ICJNZW55YWxpbiIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiQnVhdCBpdGVtIGJhcnUiLAogICAgICAgICJOYW1lIjogIk5hbWEiLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJFZGl0b3IgdGluZ2thdCBsYW5qdXQiLAogICAgICAgICJSZW1lbWJlck1lIjogIkluZ2F0IHNheWEiLAogICAgICAgICJBY3Rpb25zIjogIkFrc2kiLAogICAgICAgICJVcGxvYWQiOiAiVW5nZ2FoIiwKICAgICAgICAiQ2FuY2VsIjogIlVydW5na2FuIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogIlRhbmRhaSBzZWJhbGlrbnlhIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiRm9sZGVyIHR1anVhbiIsCiAgICAgICAgIkl0ZW1UeXBlIjogIlRpcGUgaXRlbSIsCiAgICAgICAgIkl0ZW1OYW1lIjogIk5hbWEgaXRlbSIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICJCdWF0IHNla2FyYW5nIiwKICAgICAgICAiRG93bmxvYWQiOiAiVW5kdWgiLAogICAgICAgICJPcGVuIjogIkJ1a2EiLAogICAgICAgICJVblppcCI6ICJVblppcCIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiVW5aaXAga2UgZm9sZGVyIiwKICAgICAgICAiRWRpdCI6ICJFZGl0IiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIkVkaXRvciBub3JtYWwiLAogICAgICAgICJCYWNrVXAiOiAiQ2FkYW5na2FuIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIkZvbGRlciBhc2FsIiwKICAgICAgICAiRmlsZXMiOiAiQmVya2FzLWJlcmthcyIsCiAgICAgICAgIkNoYW5nZSI6ICJVYmFoIiwKICAgICAgICAiU2V0dGluZ3MiOiAiU2V0ZWxhbiIsCiAgICAgICAgIkxhbmd1YWdlIjogIkJhaGFzYSIsCiAgICAgICAgIk1lbW9yeVVzZWQiOiAiTWVtb3JpIGRpZ3VuYWthbiIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAiVWt1cmFuIHBhcnRpc2kiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICJQZWxhcG9yYW4ga2VzYWxhaGFuIiwKICAgICAgICAiU2hvd0hpZGRlbkZpbGVzIjogIlRhbXBpbGthbiBiZXJrYXMgdGVyc2VtYnVueWkiLAogICAgICAgICJGdWxsIHNpemUiOiAiVG90YWwgdWt1cmFuIiwKICAgICAgICAiSGVscCI6ICJCYW50dWFuIiwKICAgICAgICAiRnJlZSBvZiI6ICJkYXJpIiwKICAgICAgICAiUHJldmlldyI6ICJQcmF0aW5qYXUiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICJEb2t1bWVuIGJhbnR1YW4iLAogICAgICAgICJSZXBvcnQgSXNzdWUiOiAiTGFwb3JrYW4gbWFzYWxhaCIsCiAgICAgICAgIkdlbmVyYXRlIjogIkhhc2lsa2FuIiwKICAgICAgICAiRnVsbFNpemUiOiAiVG90YWwgdWt1cmFuIiwKICAgICAgICAiRnJlZU9mIjogImRhcmkiLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIkthbGt1bGFzaSB1a3VyYW4gZm9sZXIiLAogICAgICAgICJQcm9jZXNzSUQiOiAiSUQgcHJvc2VzIiwKICAgICAgICAiQ3JlYXRlZCI6ICJEaWJ1YXQiLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICJTZW1idW55aWthbiBrb2xvbSBoYWsgYWtzZXMvcGVtaWxpayIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICJGb2xkZXIga29zb25nIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAiUGVyaWtzYSB2ZXJzaSB0ZXJiYXJ1IiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAiQnVhdCBoYXNoIGthdGEgc2FuZGkgYmFydSIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIkFuZGEgc3VkYWggbWFzdWsiLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAiR2FnYWwgbWFzdWsuIE5hbWEgcGVuZ2d1bmEgYXRhdSBrYXRhIHNhbmRpIHRpZGFrIHZhbGlkIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogIlRpZGFrIG1lbmR1a3VuZyBwYXNzd29yZF9oYXNoLCBQZXJiYXJ1aSB2ZXJzaSBQSFAiLAogICAgICAgICJUaGVtZSI6ICJUZW1hIiwKICAgICAgICAiZGFyayI6ICJHZWxhcCIsCiAgICAgICAgImxpZ2h0IjogIlRlcmFuZyIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAizpXOu867zrfOvc65zrrOrCIsCiAgICAgICJjb2RlIjogImdyIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBcHBOYW1lIjogIlRpbnkgRmlsZSBNYW5hZ2VyIiwKICAgICAgICAiQXBwVGl0bGUiOiAiRmlsZSBNYW5hZ2VyIiwKICAgICAgICAiTG9naW4iOiAizpXOr8+Dzr/OtM6/z4IiLAogICAgICAgICJVc2VybmFtZSI6ICJVc2VybmFtZSIsCiAgICAgICAgIlBhc3N3b3JkIjogIlBhc3N3b3JkIiwKICAgICAgICAiTG9nb3V0IjogIs6Rz4DOv8+Dz43Ovc60zrXPg863IiwKICAgICAgICAiTW92ZSI6ICLOnM61z4TOsc66zq/Ovc+DzrciLAogICAgICAgICJDb3B5IjogIs6Rzr3PhM65zrPPgc6xz4bOriIsCiAgICAgICAgIlNhdmUiOiAizpHPgM6/zrjOrs66zrXPhc+DzrciLAogICAgICAgICJTZWxlY3RBbGwiOiAizpXPgM65zrvOv86zzq4gz4zOu8+Jzr0iLAogICAgICAgICJVblNlbGVjdEFsbCI6ICLOkc+Azr/Otc+AzrnOu86/zrPOriDPjM67z4nOvSIsCiAgICAgICAgIkZpbGUiOiAizpHPgc+HzrXOr86/IiwKICAgICAgICAiQmFjayI6ICLOoM6vz4PPiSIsCiAgICAgICAgIlNpemUiOiAizpzOrc6zzrXOuM6/z4IiLAogICAgICAgICJQZXJtcyI6ICLOhs60zrXOuc61z4IiLAogICAgICAgICJNb2RpZmllZCI6ICLOpM+Bzr/PgM6/z4DOv865zrfOvM6tzr3OvyIsCiAgICAgICAgIk93bmVyIjogIs6ZzrTOuc6/zrrPhM6uz4TOt8+CIiwKICAgICAgICAiU2VhcmNoIjogIs6Rzr3Osc62zq7PhM63z4POtyIsCiAgICAgICAgIk5ld0l0ZW0iOiAizp3Orc6/IM6Rzr3PhM65zrrOtc6vzrzOtc69zr8iLAogICAgICAgICJGb2xkZXIiOiAizqbOrM66zrXOu86/z4IiLAogICAgICAgICJEZWxldGUiOiAizpTOuc6xzrPPgc6xz4bOriIsCiAgICAgICAgIlJlbmFtZSI6ICLOnM61z4TOv869zr/OvM6xz4POr86xIiwKICAgICAgICAiQ29weVRvIjogIs6Rzr3PhM65zrPPgc6xz4bOriDPg861IiwKICAgICAgICAiRGlyZWN0TGluayI6ICJEaXJlY3QgTGluayIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIs6Rzr3Orc6yzrHPg868zrEgzrHPgc+HzrXOr8+Jzr0iLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICLOkc67zrvOsc6zzq4gzrHOtM61zrnPjs69IiwKICAgICAgICAiQ29weWluZyI6ICLOkc69z4TOuc6zz4HOsc+Gzq4gz4POtSDOtc6+zq3Ou865zr7OtyIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAizpTOt868zrnOv8+Fz4HOs86vzrEgzr3Orc6/z4UgzrHOvc+EzrnOus61zrnOvM6tzr3Ov8+FIiwKICAgICAgICAiTmFtZSI6ICLOjM69zr/OvM6xIiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAiRWRpdG9yIM6zzrnOsSDPgM+Bzr/Ph8+Jz4HOt868zq3Ovc6/z4XPgiIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAizpjPhc68zq7Pg86/z4UgzrzOtSIsCiAgICAgICAgIkFjdGlvbnMiOiAizpXOvc6tz4HOs861zrnOtc+CIiwKICAgICAgICAiVXBsb2FkIjogIs6Rzr3Orc6yzrHPg868zrEiLAogICAgICAgICJDYW5jZWwiOiAizpHOus+Nz4HPic+DzrciLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAizpHOvc6xzq/Pgc61z4POtyDOtc+AzrnOu86/zrPOrs+CIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAizqbOrM66zrXOu86/z4Igz4DPgc6/zr/Pgc65z4POvM6/z40iLAogICAgICAgICJJdGVtVHlwZSI6ICLOpM+Nz4DOv8+CIM6xzr3PhM65zrrOtc65zrzOrc69zr/PhSIsCiAgICAgICAgIkl0ZW1OYW1lIjogIs6Mzr3Ov868zrEgzrHOvc+EzrnOus61zrnOvM6tzr3Ov8+FIiwKICAgICAgICAiQ3JlYXRlTm93IjogIs6UzrfOvM65zr/Pjc+BzrPOt8+DzrUgz4TPjs+BzrEiLAogICAgICAgICJEb3dubG9hZCI6ICJEb3dubG9hZCIsCiAgICAgICAgIk9wZW4iOiAizobOvc6/zrnOvs61IiwKICAgICAgICAiVW5aaXAiOiAizpHPgM6/z4PPhc68z4DOr861z4POtyIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAizpHPgM6/z4PPhc68z4DOr861z4POtyDPg861IM+GzqzOus61zrvOvyIsCiAgICAgICAgIkVkaXQiOiAizpXPgM61zr7Otc+BzrPOsc+Dzq/OsSIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICLOks6xz4POuc66z4zPgiBlZGl0b3IiLAogICAgICAgICJCYWNrVXAiOiAiQmFjay1VcCIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICLOoM63zrPOriIsCiAgICAgICAgIkZpbGVzIjogIs6Rz4HPh861zq/OsSIsCiAgICAgICAgIkNoYW5nZSI6ICLOpM+Bzr/PgM6/z4DOv86vzrfPg861IiwKICAgICAgICAiU2V0dGluZ3MiOiAizqHPhc64zrzOr8+DzrXOuc+CIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAizpPOu8+Oz4PPg86xIiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICLOlyDOvM69zq7OvM63IM+Hz4HOt8+DzrnOvM6/z4DOv865zrXOr8+EzrHOuSIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAizpzOrc6zzrXOuM6/z4IgcGFydGl0aW9uIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJQb3J0dWd1w6pzIiwKICAgICAgImNvZGUiOiAicHQiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiR2VyZW5jaWFkb3IgZGUgYXJxdWl2b3MgVGlueSIsCiAgICAgICAgIkFwcFRpdGxlIjogIkdlcmVuY2lhZG9yIGRlIGFycXVpdm9zIiwKICAgICAgICAiTG9naW4iOiAiSW5pY2lhciBTZXNzw6NvIiwKICAgICAgICAiVXNlcm5hbWUiOiAiTm9tZSBkZSB1c3XDoXJpbyIsCiAgICAgICAgIlBhc3N3b3JkIjogIlNlbmhhIiwKICAgICAgICAiTG9nb3V0IjogIlNhaXIiLAogICAgICAgICJNb3ZlIjogIk1vdmVyIiwKICAgICAgICAiQ29weSI6ICJDb3BpYXIiLAogICAgICAgICJTYXZlIjogIlNhbHZhciIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJTZWxlY2lvbmFyIHR1ZG8iLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJEZXNtYXJjYXIgdHVkbyIsCiAgICAgICAgIkZpbGUiOiAiQXJxdWl2byIsCiAgICAgICAgIkJhY2siOiAiVm9sdGFyIiwKICAgICAgICAiU2l6ZSI6ICJUYW1hbmhvIiwKICAgICAgICAiUGVybXMiOiAiUGVybWlzc8O1ZXMiLAogICAgICAgICJNb2RpZmllZCI6ICJNb2RpZmljYWRvIiwKICAgICAgICAiT3duZXIiOiAiUHJvcHJpZXTDoXJpbyIsCiAgICAgICAgIlNlYXJjaCI6ICJCdXNjYXIiLAogICAgICAgICJOZXdJdGVtIjogIk5vdm8gSXRlbSIsCiAgICAgICAgIkZvbGRlciI6ICJQYXN0YSIsCiAgICAgICAgIkRlbGV0ZSI6ICJFeGNsdWlyIiwKICAgICAgICAiUmVuYW1lIjogIlJlbm9tZWFyIiwKICAgICAgICAiQ29weVRvIjogIkNvcGlhciBlbSIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiTGluayBkaXJldG8iLAogICAgICAgICJVcGxvYWRpbmdGaWxlcyI6ICJVcGxvYWQgZGUgYXJxdWl2b3MiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICJBbHRlcmFyIHBlcm1pc3PDtWVzIiwKICAgICAgICAiQ29weWluZyI6ICJDb3BpYW5kbyIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiQ3JpYXIgbm92byBpdGVtIiwKICAgICAgICAiTmFtZSI6ICJOb21lIiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAiRWRpdG9yIEF2YW7Dp2FkbyIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAiTGVtYnJhIGRlIG1pbSIsCiAgICAgICAgIkFjdGlvbnMiOiAiQcOnw7VlcyIsCiAgICAgICAgIlVwbG9hZCI6ICJVcGxvYWQiLAogICAgICAgICJDYW5jZWwiOiAiQ2FuY2VsYXIiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiU2VsZcOnw6NvIHJldmVyc2EiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICJQYXN0YSBkZSBkZXN0aW5vIiwKICAgICAgICAiSXRlbVR5cGUiOiAiVGlwbyBkZSBJdGVtIiwKICAgICAgICAiSXRlbU5hbWUiOiAiTm9tZSBkbyBpdGVtIiwKICAgICAgICAiQ3JlYXRlTm93IjogIkNyaWFyIiwKICAgICAgICAiRG93bmxvYWQiOiAiQmFpeGFyIiwKICAgICAgICAiT3BlbiI6ICJBYnJpciIsCiAgICAgICAgIlVuWmlwIjogIkRlc2NvbXBhY3RhciBvcyBhcnF1aXZvcyIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiRGVzY29tcGFjdGFyIG5hIHBhc3RhIiwKICAgICAgICAiRWRpdCI6ICJFZGl0YXIiLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAiRWRpdG9yIE5vcm1hbCIsCiAgICAgICAgIkJhY2tVcCI6ICJDb3BpYSBkZSBzZWd1cmFuw6dhIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIlBhc3RhIGF0dWFsIiwKICAgICAgICAiRmlsZXMiOiAiQXJxdWl2b3MiLAogICAgICAgICJDaGFuZ2UiOiAiQWx0ZXJhciIsCiAgICAgICAgIlNldHRpbmdzIjogIlByZWZlcsOqbmNpYXMiLAogICAgICAgICJMYW5ndWFnZSI6ICJJZGlvbWEiLAogICAgICAgICJQcmV2aWV3IjogIlZpc3VhbGl6YXIiLAogICAgICAgICJNZW1vcnlVc2VkIjogIk1lbcOzcmlhIHVzYWRhIiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICJUYW1hbmhvIGRhIHBhcnRpw6fDo28iLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICJSZWxhdMOzcmlvIGRlIGVycm9zIiwKICAgICAgICAiU2hvd0hpZGRlbkZpbGVzIjogIk1vc3RyYXIgYXJxdWl2b3Mgb2N1bHRvcyIsCiAgICAgICAgIkdyb3VwIjogIkdydXBvIiwKICAgICAgICAiT3RoZXIiOiAiT3V0cm9zIiwKICAgICAgICAiUmVhZCI6ICJMZXIiLAogICAgICAgICJXcml0ZSI6ICJFc2NyZXZlciIsCiAgICAgICAgIkV4ZWN1dGUiOiAiRXhlY3V0YXIiLAogICAgICAgICJlbmFibGUiOiAiaGFiaWxpdGFyIiwKICAgICAgICAiZGlzYWJsZSI6ICJkZXNhdGl2YXIiLAogICAgICAgICJGcmVlT2YiOiAiTGl2cmUgZGUiLAogICAgICAgICJGcmVlIE9mIjogIkxpdnJlIGRlIiwKICAgICAgICAiRnVsbFNpemUiOiAidGFtYW5obyBjb21wbGV0byIsCiAgICAgICAgIkhlbHAiOiAiQWp1ZGEgLyBTdXBvcnRlIiwKICAgICAgICAiR2VuZXJhdGUiOiAiR2VyYXIiLAogICAgICAgICJSZXBvcnQgSXNzdWUiOiAiSW5mb3JtYXIgcHJvYmxlbWEiLAogICAgICAgICJHZW5lcmF0ZSBuZXcgcGFzc3dvcmQgaGFzaCI6ICJHZXJhciBub3ZhIGhhc2ggZGUgc2VuaGEiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICJEb2N1bWVudG9zIGRlIEFqdWRhIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAiVmVyaWZpcXVlIGEgw7psdGltYSB2ZXJzw6NvIiwKICAgICAgICAiSGlkZUNvbHVtbnMiOiAiT2N1bHRhciBjb2x1bmFzIFBlcm1zIC8gT3duZXIiLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIkNhbGN1bGFyIG8gdGFtYW5obyBkYSBwYXN0YSIsCiAgICAgICAgIkFkdmFuY2VkIFNlYXJjaCI6ICJCdXNjYSBBdmFuw6dhZGEiLAogICAgICAgICJOb3RoaW5nIHNlbGVjdGVkIjogIk5hZGEgc2VsZWNpb25hZG8iLAogICAgICAgICJSZW5hbWVkIGZyb20iOiAiUmVub21lYWRvIGRlIiwKICAgICAgICAiRGVsZXRlZCI6ICJFeGNsdcOtZG8iLAogICAgICAgICJDb3BpZWQgZnJvbSI6ICJDb3BpYWRvIGRlIiwKICAgICAgICAidG8iOiAiUGFyYSIsCiAgICAgICAgIk5vdCBmb3VuZCI6ICJOw6NvIGVuY29udHJhZG8iLAogICAgICAgICJBcmNoaXZlIjogIkFycXVpdm8iLAogICAgICAgICJTZWxlY3QgZm9sZGVyIjogIlNlbGVjaW9uZSB1bWEgcGFzdGEiLAogICAgICAgICJhbHJlYWR5IGV4aXN0cyI6ICJqw6EgZXhpc3RlIiwKICAgICAgICAiQ3JlYXRlIGFyY2hpdmU/IjogIkNyaWFyIGFycXVpdm8/IiwKICAgICAgICAiQXJjaGl2ZSB1bnBhY2tlZCI6ICJBcnF1aXZvIGRlc2NvbXBhY3RhZG8iLAogICAgICAgICJSb290IHBhdGgiOiAiQ2FtaW5obyByYWl6IiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAiQXJxdWl2byBuw6NvIGVuY29udHJhZG8iLAogICAgICAgICJFcnJvciB3aGlsZSBjb3B5aW5nIGZybyI6ICJFcnJvIGFvIGNvcGlhciBwYXJhIGzDoSIsCiAgICAgICAgIlBhdGhzIG11c3QgYmUgbm90IGVxdWFsIjogIk9zIGNhbWluaG9zIG7Do28gZGV2ZW0gc2VyIGlndWFpcyIsCiAgICAgICAgIkFyY2hpdmUgbm90IHVucGFja2VkIjogIkFycXVpdm8gbsOjbyBkZXNjb21wYWN0YWRvIiwKICAgICAgICAiQXJjaGl2ZSBub3QgY3JlYXRlZCI6ICJBcnF1aXZvIG7Do28gY3JpYWRvIiwKICAgICAgICAiUGVybWlzc2lvbnMgY2hhbmdlZCI6ICJQZXJtaXNzw7VlcyBhbHRlcmFkYXMiLAogICAgICAgICJTYXZlZCBTdWNjZXNzZnVsbHkiOiAiU2Fsdm8gY29tIHN1Y2Vzc28gIiwKICAgICAgICAiRmlsZSBTYXZlZCBTdWNjZXNzZnVsbHkiOiAiQXJxdWl2byBzYWx2byBjb20gc3VjZXNzbyAiLAogICAgICAgICJQZXJtaXNzaW9ucyBub3QgY2hhbmdlZCI6ICJQZXJtaXNzw7VlcyBuw6NvIGFsdGVyYWRhcyIsCiAgICAgICAgIlNvdXJjZSBwYXRoIG5vdCBkZWZpbmVkIjogIkNhbWluaG8gZGUgb3JpZ2VtIG7Do28gZGVmaW5pZG8iLAogICAgICAgICJFcnJvciB3aGlsZSBtb3ZpbmcgZnJvbSI6ICJFcnJvIGFvIG11ZGFyIGRlIiwKICAgICAgICAiSW52YWxpZCBmaWxlIG9yIGZvbGRlciBuYW1lIjogIk5vbWUgZGUgYXJxdWl2byBvdSBwYXN0YSBpbnbDoWxpZG8iLAogICAgICAgICJGaWxlIGV4dGVuc2lvbiBpcyBub3QgYWxsb3dlZCI6ICJBIGV4dGVuc8OjbyBkbyBhcnF1aXZvIG7Do28gw6kgcGVybWl0aWRhIiwKICAgICAgICAiRXJyb3Igd2hpbGUgcmVuYW1pbmcgZnJvbSI6ICJFcnJvIGFvIHJlbm9tZWFyIGRlIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZGVsZXRpbmcgaXRlbXMiOiAiRXJybyBhbyBleGNsdWlyIGl0ZW5zIiwKICAgICAgICAiSW52YWxpZCBjaGFyYWN0ZXJzIGluIGZpbGUgbmFtZSI6ICJDYXJhY3RlcmVzIGludsOhbGlkb3Mgbm8gbm9tZSBkbyBhcnF1aXZvIiwKICAgICAgICAiRklMRSBFWFRFTlNJT04gSEFTIE5PVCBTVVBQT1JURUQiOiAiQSBFWFRFTlPDg08gREUgQVJRVUlWTyBOw4NPIMOJIFNVUE9SVEFEQSIsCiAgICAgICAgIlNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXIgZGVsZXRlZCI6ICJBcnF1aXZvcyBlIHBhc3RhcyBzZWxlY2lvbmFkb3MgZXhjbHXDrWRvcyIsCiAgICAgICAgIkVycm9yIHdoaWxlIGZldGNoaW5nIGFyY2hpdmUgaW5mbyI6ICJFcnJvIGFvIG9idGVyIGluZm9ybWHDp8O1ZXMgZG8gYXJxdWl2byIsCiAgICAgICAgIkRlbGV0ZSBzZWxlY3RlZCBmaWxlcyBhbmQgZm9sZGVycz8iOiAiRXhjbHVpciBhcnF1aXZvcyBlIHBhc3RhcyBzZWxlY2lvbmFkb3M/IiwKICAgICAgICAiU2VhcmNoIGZpbGUgaW4gZm9sZGVyIGFuZCBzdWJmb2xkZXJzLi4uIjogIlBlc3F1aXNhciBhcnF1aXZvIG5hIHBhc3RhIGUgbmFzIHN1YnBhc3RhcyAuLi4iLAogICAgICAgICJBY2Nlc3MgZGVuaWVkLiBJUCByZXN0cmljdGlvbiBhcHBsaWNhYmxlIjogIkFjZXNzbyBuZWdhZG8uIFJlc3RyacOnw6NvIGRlIElQIGFwbGljw6F2ZWwiLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBvciBmb2xkZXIgbmFtZSI6ICJDYXJhY3RlcmVzIGludsOhbGlkb3Mgbm8gbm9tZSBkbyBhcnF1aXZvIG91IHBhc3RhIiwKICAgICAgICAiT3BlcmF0aW9ucyB3aXRoIGFyY2hpdmVzIGFyZSBub3QgYXZhaWxhYmxlIjogIk9wZXJhw6fDtWVzIGNvbSBhcnF1aXZvcyBuw6NvIGVzdMOjbyBkaXNwb27DrXZlaXMiLAogICAgICAgICJGaWxlIG9yIGZvbGRlciB3aXRoIHRoaXMgcGF0aCBhbHJlYWR5IGV4aXN0cyI6ICJPIGFycXVpdm8gb3UgcGFzdGEgY29tIGVzdGUgY2FtaW5obyBqw6EgZXhpc3RlIiwKICAgICAgICAiRm9sZGVyIGlzIGVtcHR5IjogIkEgcGFzdGEgZXN0w6EgdmF6aWEiLAogICAgICAgICJNb3ZlZCBmcm9tIjogIk1vdmlkbyBkZSIsCiAgICAgICAgIkNyZWF0ZWQiOiAiQ3JpYWRvIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiVm9jw6ogZXN0w6EgbG9nYWRvIiwKICAgICAgICAiTG9naW4gZmFpbGVkLiBJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIjogIkZhbGhhIG5hIGF1dGVudGljYcOnw6NvLiBub21lIGRlIHVzdcOhcmlvIG91IHNlbmhhIGludsOhbGlkb3MiLAogICAgICAgICJBcmUgeW91IHN1cmUgd2FudCB0byByZW5hbWU/IjogIlRlbSBjZXJ0ZXphIGRlIHF1ZSBkZXNlamEgcmVub21lYXI/IiwKICAgICAgICAiQXJlIHlvdSBzdXJlIHdhbnQgdG8iOiAiVGVtIGNlcnRlemEgZGUgcXVlIGRlc2VqYSIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiUG9sc2tpIiwKICAgICAgImNvZGUiOiAicGwiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICJNZW5lZMW8ZXIgcGxpa8OzdyIsCiAgICAgICAgIkxvZ2luIjogIkxvZ2luIiwKICAgICAgICAiVXNlcm5hbWUiOiAiTmF6d2EgVcW8eXRrb3duaWthIiwKICAgICAgICAiUGFzc3dvcmQiOiAiSGFzxYJvIiwKICAgICAgICAiTG9nb3V0IjogIld5bG9ndWoiLAogICAgICAgICJNb3ZlIjogIlByemVuaWXFmyIsCiAgICAgICAgIkNvcHkiOiAiS29waXVqIiwKICAgICAgICAiU2F2ZSI6ICJaYXBpc3oiLAogICAgICAgICJTZWxlY3RBbGwiOiAiWmF6bmFjeiB3c3p5c3RrbyIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIk9kem5hY3ogd3N6eXN0a28iLAogICAgICAgICJGaWxlIjogIlBsaWsiLAogICAgICAgICJCYWNrIjogIkNvZm5paiIsCiAgICAgICAgIlNpemUiOiAiUm96bWlhciIsCiAgICAgICAgIlBlcm1zIjogIlVwcmF3bmllbmlhIiwKICAgICAgICAiTW9kaWZpZWQiOiAiWm1vZHlmaWtvd2FubyIsCiAgICAgICAgIk93bmVyIjogIlfFgmHFm2NpY2llbCIsCiAgICAgICAgIlNlYXJjaCI6ICJTenVrYWoiLAogICAgICAgICJOZXdJdGVtIjogIk5vd3kgcGxpayIsCiAgICAgICAgIkZvbGRlciI6ICJGb2xkZXIiLAogICAgICAgICJEZWxldGUiOiAiVXN1xYQiLAogICAgICAgICJSZW5hbWUiOiAiWm1pZcWEIG5henfEmSIsCiAgICAgICAgIkNvcHlUbyI6ICJLb3BpdWogZG8iLAogICAgICAgICJEaXJlY3RMaW5rIjogIkxpbmsgYmV6cG/Fm3JlZG5pIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiV3lzecWCYW5pZSBwbGlrw7N3IiwKICAgICAgICAiQ2hhbmdlUGVybWlzc2lvbnMiOiAiWm1pZcWEIHVwcmF3bmllbmlhIiwKICAgICAgICAiQ29weWluZyI6ICJLb3Bpb3dhbmllIiwKICAgICAgICAiQ3JlYXRlTmV3SXRlbSI6ICJVdHfDs3J6IG5vd3kgcGxpayIsCiAgICAgICAgIk5hbWUiOiAiTmF6d2EiLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJaYWF3YW5zb3dhbnkgZWR5dG9yIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJQYW1pxJl0YWogbW5pZSIsCiAgICAgICAgIkFjdGlvbnMiOiAiQWtjamUiLAogICAgICAgICJVcGxvYWQiOiAiV3nFm2xpaiIsCiAgICAgICAgIkNhbmNlbCI6ICJBbnVsdWoiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiT2R3csOzxIcgemF6bmFjemVuaWUiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICJGb2xkZXIgZG9jZWxvd3kiLAogICAgICAgICJJdGVtVHlwZSI6ICJUeXAgcGxpa3UiLAogICAgICAgICJJdGVtTmFtZSI6ICJOYXp3YSBwbGlrdSIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICJVdHfDs3J6IG5vd3kiLAogICAgICAgICJEb3dubG9hZCI6ICJQb2JpZXJ6IiwKICAgICAgICAiT3BlbiI6ICJPdHfDs3J6IiwKICAgICAgICAiVW5aaXAiOiAiUm96cGFrdWoiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIlJvenBha3VqIGRvIiwKICAgICAgICAiRWRpdCI6ICJFZHl0dWoiLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAiRWR5dHVqIG5vcm1hbG5pZSIsCiAgICAgICAgIkJhY2tVcCI6ICJLb3BpYSB6YXBhc293YSIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICJGb2xkZXIgxbpyw7NkxYJvd3kiLAogICAgICAgICJGaWxlcyI6ICJQbGlraSIsCiAgICAgICAgIkNoYW5nZSI6ICJabWllxYQiLAogICAgICAgICJTZXR0aW5ncyI6ICJVc3Rhd2llbmlhIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAiSsSZenlrIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJUaeG6v25nIFZp4buHdCIsCiAgICAgICJjb2RlIjogInZpIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBcHBOYW1lIjogIlRyw6xuaCBxdeG6o24gbMOtIHThu4dwIFRpbnkiLAogICAgICAgICJBcHBUaXRsZSI6ICJRdeG6o24gbMO9IHThu4dwIiwKICAgICAgICAiTG9naW4iOiAixJDEg25nIG5o4bqtcCIsCiAgICAgICAgIlVzZXJuYW1lIjogIlTDqm4gxJHEg25nIG5o4bqtcCIsCiAgICAgICAgIlBhc3N3b3JkIjogIk3huq10IGto4bqpdSIsCiAgICAgICAgIkxvZ291dCI6ICLEkMSDbmcgeHXhuqV0IiwKICAgICAgICAiTW92ZSI6ICJEaSBjaHV54buDbiIsCiAgICAgICAgIkNvcHkiOiAiU2FvIGNow6lwIiwKICAgICAgICAiU2F2ZSI6ICJMxrB1IiwKICAgICAgICAiU2VsZWN0QWxsIjogIkNo4buNbiB04bqldCBj4bqjIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiSOG7p3kgY2jhu41uIHThuqV0IGPhuqMiLAogICAgICAgICJGaWxlIjogIlThu4dwIHRpbiIsCiAgICAgICAgIkJhY2siOiAiVHLhu58gduG7gSIsCiAgICAgICAgIlNpemUiOiAiS8OtY2ggY+G7oSIsCiAgICAgICAgIlBlcm1zIjogIlF1eeG7gW4iLAogICAgICAgICJNb2RpZmllZCI6ICJT4butYSDEkeG7lWkgbOG6p24gY3Xhu5FpIiwKICAgICAgICAiU2VhcmNoIjogIlTDrG0ga2nhur9tIiwKICAgICAgICAiTmV3SXRlbSI6ICJU4bqhbyBt4bubaSIsCiAgICAgICAgIkZvbGRlciI6ICJUaMawIG3hu6VjIiwKICAgICAgICAiRGVsZXRlIjogIljDs2EiLAogICAgICAgICJSZW5hbWUiOiAixJDhu5VpIHTDqm4iLAogICAgICAgICJDb3B5VG8iOiAiU2FvIGNow6lwIMSR4bq/biIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAixJDGsOG7nW5nIGThuqtuIFVSTCIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIlThuqNpIGzDqm4gZmlsZSIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIlRoYXkgxJHhu5VpIHF1eeG7gW4iLAogICAgICAgICJDb3B5aW5nIjogIlNhbyBjaMOpcCIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiVOG6oW8gbeG7m2kiLAogICAgICAgICJOYW1lIjogIlTDqm4iLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJDaOG7iW5oIHPhu61hIG7Dom5nIGNhbyIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAiR2hpIG5o4bubIMSRxINuZyBuaOG6rXAiLAogICAgICAgICJBY3Rpb25zIjogIlTDuXkgQ2jhu41uIiwKICAgICAgICAiVXBsb2FkIjogIlThuqNpIGzDqm4iLAogICAgICAgICJDYW5jZWwiOiAiSOG7p3kiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAixJDhuqNvIG5nxrDhu6NjIHbDuW5nIGNo4buNbiIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIsSQ4bq/biIsCiAgICAgICAgIkl0ZW1UeXBlIjogIlThuqFvIG3hu5tpIiwKICAgICAgICAiSXRlbU5hbWUiOiAiVMOqbiB04buHcC90aMawIG3hu6VjIiwKICAgICAgICAiQ3JlYXRlTm93IjogIlThuqFvIiwKICAgICAgICAiRG93bmxvYWQiOiAiVOG6o2kgeHXhu5FuZyIsCiAgICAgICAgIk9wZW4iOiAiTeG7nyIsCiAgICAgICAgIlVuWmlwIjogIkdp4bqjaSBuw6luIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICJHaeG6o2kgbsOpbiDEkeG6v24gdGjGsCBt4bulYyIsCiAgICAgICAgIkVkaXQiOiAiQ2jhu4luaCBz4butYSIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJDaOG7iW5oIHPhu61hIHRow7RuZyB0aMaw4budbmciLAogICAgICAgICJCYWNrVXAiOiAiU2FvIGzGsHUiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiVOG7qyIsCiAgICAgICAgIkZpbGVzIjogIlThu4dwIHRpbiIsCiAgICAgICAgIkNoYW5nZSI6ICJUaGF5IMSR4buVaSIsCiAgICAgICAgIlNldHRpbmdzIjogIkPDoGkgxJHhurd0IiwKICAgICAgICAiTGFuZ3VhZ2UiOiAiTmfDtG4gbmfhu68iLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIkPDsm4gdHLhu5FuZyIsCiAgICAgICAgIkFkdmFuY2VkIFNlYXJjaCI6ICJUw6xtIGtp4bq/bSBuw6JuZyBjYW8iLAogICAgICAgICJGdWxsIHNpemUiOiAixJDDoyBkw7luZyIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICJUaMawIG3hu7FjIHLhu5duZyIsCiAgICAgICAgIlNlYXJjaCBmaWxlIGluIGZvbGRlciBhbmQgc3ViZm9sZGVycy4uLiI6ICJUw6xtIGZpbGUgdG/DoG4gdGjGsCBt4bulYy4uLiIsCiAgICAgICAgIkhlbHAiOiAiVHLhu6MgZ8O6cCIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIsSQxINuZyBuaOG6rXAgdGjDoG5oIGPDtG5nIiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAiQsOhbyBjw6FvIGzhu5dpIiwKICAgICAgICAiU2hvd0hpZGRlbkZpbGVzIjogIkhp4buDbiB0aOG7iyBmaWxlIOG6qW4iLAogICAgICAgICJQcmV2aWV3IjogIlhlbSIsCiAgICAgICAgIkhlbHAgRG9jdW1lbnRzIjogIkjGsOG7m25nIGThuqtuIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIkLDoW8gY8OhbyBs4buXaSIsCiAgICAgICAgIkdlbmVyYXRlIjogIlThuqFvIiwKICAgICAgICAiRnVsbFNpemUiOiAiVOG7lW5nIGR1bmcgbMaw4bujbmciLAogICAgICAgICJGcmVlT2YiOiAidHJvbmcgdOG7lW5nIHPhu5EiLAogICAgICAgICJDYWxjdWxhdGUgZm9sZGVyIHNpemUiOiAiS8OtY2ggdGjGsOG7m2MgdGjGsCBt4bulYyIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIktp4buDbSB0cmEgcGhpw6puIGLhuqNuIG3hu5tpIiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAiVHLDrG5oIHThuqFvIG3huq10IGto4bqpdSBtw6MgaGFzaCIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogIuG6qG4gY+G7mXQgcXV54buBbi9jaOG7pyBz4buhIGjhu691IiwKICAgICAgICAiT3duZXIiOiAiQ2jhu6cgc+G7nyBo4buvdS9Pd25lciIsCiAgICAgICAgIkdyb3VwIjogIk5ow7NtL0dyb3VwIiwKICAgICAgICAiT3RoZXIiOiAiS2jDoWMvT3RoZXIiLAogICAgICAgICJSZWFkIjogIsSQ4buNYyIsCiAgICAgICAgIldyaXRlIjogIkdoaSIsCiAgICAgICAgIkV4ZWN1dGUiOiAiVGjhu7FjIHRoaSIsCiAgICAgICAgImVuYWJsZSI6ICJC4bqtdCIsCiAgICAgICAgImRpc2FibGUiOiAiVOG6r3QiLAogICAgICAgICJGcmVlIE9mIjogInRyb25nIHThu5VuZyBz4buRIiwKICAgICAgICAiQ2FsY3VsYXRlRm9sZGVyU2l6ZSI6ICJUw61uaCB0b8OhbiBrw61jaCB0aMaw4bubYyB0aMawIG3hu6VjIiwKICAgICAgICAiTm90aGluZyBzZWxlY3RlZCI6ICJLaMO0bmcgY8OzIGfDrCDEkcaw4bujYyBjaOG7jW4iLAogICAgICAgICJSZW5hbWVkIGZyb20iOiAixJDDoyDEkeG7lWkgdMOqbiB04burIiwKICAgICAgICAiRGVsZXRlZCI6ICLEkcOjIMSRxrDhu6NjIHjDs2EiLAogICAgICAgICJDb3BpZWQgZnJvbSI6ICLEkMaw4bujYyBzYW8gY2jDqXAgdOG7qyIsCiAgICAgICAgInRvIjogInNhbmciLAogICAgICAgICJOb3QgZm91bmQiOiAiS2jDtG5nIHTDrG0gdGjhuqV5IiwKICAgICAgICAiQXJjaGl2ZSI6ICJMxrB1IHRy4buvIiwKICAgICAgICAiU2VsZWN0IGZvbGRlciI6ICJDaOG7jW4gdGjGsCBt4bulYyIsCiAgICAgICAgImFscmVhZHkgZXhpc3RzIjogIsSRw6MgdOG7k24gdOG6oWkiLAogICAgICAgICJDcmVhdGUgYXJjaGl2ZT8iOiAiVOG6oW8ga2hvIGzGsHUgdHLhu68/IiwKICAgICAgICAiQXJjaGl2ZSB1bnBhY2tlZCI6ICJMxrB1IHRy4buvIMSRw6MgxJHGsOG7o2MgZ2nhuqNpIG7DqW4iLAogICAgICAgICJSb290IHBhdGgiOiAixJDGsOG7nW5nIGThuqtuIGfhu5FjIiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAiS2jDtG5nIHTDrG0gdGjhuqV5IHThu4dwIiwKICAgICAgICAiRXJyb3Igd2hpbGUgY29weWluZyBmcm9tIjogIkzhu5dpIGtoaSBzYW8gY2jDqXAgdOG7qyIsCiAgICAgICAgIlBhdGhzIG11c3QgYmUgbm90IGVxdWFsIjogIsSQxrDhu51uZyBk4bqrbiBraMO0bmcgxJHGsOG7o2MgZ2nhu5FuZyBuaGF1IiwKICAgICAgICAiQXJjaGl2ZSBub3QgdW5wYWNrZWQiOiAiTMawdSB0cuG7ryBjaMawYSDEkcaw4bujYyBnaeG6o2kgbsOpbiIsCiAgICAgICAgIkFyY2hpdmUgbm90IGNyZWF0ZWQiOiAiQuG6o24gbMawdSB0cuG7ryBjaMawYSDEkcaw4bujYyB04bqhbyIsCiAgICAgICAgIlBlcm1pc3Npb25zIGNoYW5nZWQiOiAixJDDoyB0aGF5IMSR4buVaSBxdXnhu4FuIiwKICAgICAgICAiU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIlRow6BuaCBjw7RuZyAiLAogICAgICAgICJGaWxlIFNhdmVkIFN1Y2Nlc3NmdWxseSI6ICJUaMOgbmggY8O0bmcgIiwKICAgICAgICAiUGVybWlzc2lvbnMgbm90IGNoYW5nZWQiOiAiUXV54buBbiBraMO0bmcgxJHGsOG7o2MgdGhheSDEkeG7lWkiLAogICAgICAgICJTb3VyY2UgcGF0aCBub3QgZGVmaW5lZCI6ICLEkMaw4budbmcgZOG6q24gbmd14buTbiBraMO0bmcgxJHGsOG7o2MgeMOhYyDEkeG7i25oIiwKICAgICAgICAiRXJyb3Igd2hpbGUgbW92aW5nIGZyb20iOiAiTOG7l2kga2hpIGRpIGNodXnhu4NuIHThu6siLAogICAgICAgICJJbnZhbGlkIGZpbGUgb3IgZm9sZGVyIG5hbWUiOiAiVMOqbiB04buHcCBob+G6t2MgdGjGsCBt4bulYyBraMO0bmcgaOG7o3AgbOG7hyIsCiAgICAgICAgIkZpbGUgZXh0ZW5zaW9uIGlzIG5vdCBhbGxvd2VkIjogIsSQ4buLbmggZOG6oW5nIGtow7RuZyDEkcaw4bujYyBo4buXIHRy4bujIiwKICAgICAgICAiRXJyb3Igd2hpbGUgcmVuYW1pbmcgZnJvbSI6ICJM4buXaSBraGkgxJHhu5VpIHTDqm4gdOG7qyIsCiAgICAgICAgIkVycm9yIHdoaWxlIGRlbGV0aW5nIGl0ZW1zIjogIkzhu5dpIGtoaSB4w7NhIGPDoWMgbeG7pWMiLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBuYW1lIjogIkvDvSB04buxIGtow7RuZyBo4bujcCBs4buHIiwKICAgICAgICAiRklMRSBFWFRFTlNJT04gSEFTIE5PVCBTVVBQT1JURUQiOiAixJDhu4pOSCBE4bqgTkcgS0jDlE5HIMSQxq/hu6JDIEjhu5YgVFLhu6IiLAogICAgICAgICJTZWxlY3RlZCBmaWxlcyBhbmQgZm9sZGVyIGRlbGV0ZWQiOiAixJDDoyB4w7NhIGPDoWMgdOG7h3AgdsOgIHRoxrAgbeG7pWMgxJHGsOG7o2MgY2jhu41uIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZmV0Y2hpbmcgYXJjaGl2ZSBpbmZvIjogIkzhu5dpIiwKICAgICAgICAiRGVsZXRlIHNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXJzPyI6ICJYw7NhIGPDoWMgdOG7h3AgdsOgIHRoxrAgbeG7pWMgxJHDoyBjaOG7jW4/IiwKICAgICAgICAiQWNjZXNzIGRlbmllZC4gSVAgcmVzdHJpY3Rpb24gYXBwbGljYWJsZSI6ICJU4burIGNo4buRaSBxdXnhu4FuIHRydXkgY+G6rXAiLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBvciBmb2xkZXIgbmFtZSI6ICJLw70gdOG7sSBraMO0bmcgaOG7o3AgbOG7hyIsCiAgICAgICAgIk9wZXJhdGlvbnMgd2l0aCBhcmNoaXZlcyBhcmUgbm90IGF2YWlsYWJsZSI6ICJLaMO0bmcga2jhuqMgZOG7pW5nIiwKICAgICAgICAiRmlsZSBvciBmb2xkZXIgd2l0aCB0aGlzIHBhdGggYWxyZWFkeSBleGlzdHMiOiAiVOG7h3AgaG/hurdjIHRoxrAgbeG7pWMgxJHDoyB04buTbiB04bqhaSIsCiAgICAgICAgIk1vdmVkIGZyb20iOiAiQ2h1eeG7g24gdOG7qyIsCiAgICAgICAgIkNyZWF0ZWQiOiAixJHDoyB04bqhbyIsCiAgICAgICAgIkxvZ2luIGZhaWxlZC4gSW52YWxpZCB1c2VybmFtZSBvciBwYXNzd29yZCI6ICJLaMO0bmcgdMOsbSB0aOG6pXkgbmfGsOG7nWkgZMO5bmciLAogICAgICAgICJUaGVtZSI6ICJDaOG7pyDEkeG7gSIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiSGVicmV3IiwKICAgICAgImNvZGUiOiAiaGUiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAi16HXmdeZ16gg16fXkdem15nXnSAtINeY15nXoNeZIiwKICAgICAgICAiQXBwVGl0bGUiOiAi16HXmdeZ16gg16fXkdem15nXnSIsCiAgICAgICAgIkxvZ2luIjogIteU16rXl9eR16giLAogICAgICAgICJVc2VybmFtZSI6ICLXqdedINee16nXqtee16kiLAogICAgICAgICJQYXNzd29yZCI6ICLXodeZ16HXnteUIiwKICAgICAgICAiTG9nb3V0IjogIteU16rXoNeq16ciLAogICAgICAgICJNb3ZlIjogIteU16LXkdeoIiwKICAgICAgICAiQ29weSI6ICLXlNei16rXpyIsCiAgICAgICAgIlNhdmUiOiAi16nXnteV16giLAogICAgICAgICJTZWxlY3RBbGwiOiAi15HXl9eoINeU15vXnCIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIteR15jXnCDXkdeX15nXqNeUINee15TXm9ecIiwKICAgICAgICAiRmlsZSI6ICLXp9eV15HXpSIsCiAgICAgICAgIkJhY2siOiAi15fXlteV16giLAogICAgICAgICJTaXplIjogIteS15XXk9ecIiwKICAgICAgICAiUGVybXMiOiAi15TXqNep15DXldeqIiwKICAgICAgICAiTW9kaWZpZWQiOiAi16LXldeT15vXnyDXkdeq15DXqNeZ15oiLAogICAgICAgICJPd25lciI6ICLXkdei15zXmdedIiwKICAgICAgICAiU2VhcmNoIjogIteX15nXpNeV16kiLAogICAgICAgICJOZXdJdGVtIjogIteX15PXqSIsCiAgICAgICAgIkZvbGRlciI6ICLXqteZ16fXmdeZ15QiLAogICAgICAgICJEZWxldGUiOiAi157Xl9enIiwKICAgICAgICAiUmVuYW1lIjogItep16DXlCDXqdedIiwKICAgICAgICAiQ29weVRvIjogIteU16LXqtenINecIiwKICAgICAgICAiRGlyZWN0TGluayI6ICLXp9eZ16nXldeoINeZ16nXmdeoIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAi157Xotec15Qg16fXkdem15nXnSIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogItep16DXlCDXlNeo16nXkNeV16oiLAogICAgICAgICJDb3B5aW5nIjogIteU16LXldeq16ciLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogItem15XXqCDXpNeo15nXmCDXl9eT16kiLAogICAgICAgICJOYW1lIjogItep150iLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICLXoteV16jXmiDXnteq16fXk9edIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICLXlteb15XXqCDXkNeV16rXmSIsCiAgICAgICAgIkFjdGlvbnMiOiAi16TXoteV15zXldeqIiwKICAgICAgICAiVXBsb2FkIjogIteU16LXnNeUIiwKICAgICAgICAiQ2FuY2VsIjogIteR15nXmNeV15wiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAi15TXpNeV15og15DXqiDXlNeR15fXmdeo15QiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICLXqteZ16fXmdeZ16og15nXoteTIiwKICAgICAgICAiSXRlbVR5cGUiOiAi16HXldeSINek16jXmdeYIiwKICAgICAgICAiSXRlbU5hbWUiOiAi16nXnSDXlNek16jXmdeYIiwKICAgICAgICAiQ3JlYXRlTm93IjogItem15XXqCDXoteb16nXmdeVIiwKICAgICAgICAiRG93bmxvYWQiOiAi15TXldeo15MiLAogICAgICAgICJPcGVuIjogItek16rXlyIsCiAgICAgICAgIlVuWmlwIjogIteX15nXnNeV16UiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIteX15zXpSDXnNeq15nXp9eZ15nXlCIsCiAgICAgICAgIkVkaXQiOiAi16LXqNeV15oiLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAi16LXldeo15og16jXkteZ15wiLAogICAgICAgICJCYWNrVXAiOiAi15LXmdeR15XXmSIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICLXqten15nXmdeqINee16fXldeoIiwKICAgICAgICAiRmlsZXMiOiAi16fXkdem15nXnSIsCiAgICAgICAgIkNoYW5nZSI6ICLXqdeg15QiLAogICAgICAgICJTZXR0aW5ncyI6ICLXlNeS15PXqNeV16oiLAogICAgICAgICJMYW5ndWFnZSI6ICLXqdek15QiLAogICAgICAgICJNZW1vcnlVc2VkIjogIteW15nXm9eo15XXnyDXkdep15nXnteV16kiLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIteS15XXk9ecINee15fXmdem15QiCiAgICAgIH0KICAgIH0sCiAgICB7CiAgICAgICJuYW1lIjogItin2YTYudix2KjZitipIiwKICAgICAgImNvZGUiOiAiQXIiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAi2YXYr9mK2LEg2KfZhNmF2YTZgdin2Kog2KfZhNi12LrZitixIiwKICAgICAgICAiQXBwVGl0bGUiOiAi2YXYr9mK2LEg2KfZhNmF2YTZgdin2KoiLAogICAgICAgICJMb2dpbiI6ICLYr9iu2YjZhCIsCiAgICAgICAgIlVzZXJuYW1lIjogItin2LPZhSDYp9mE2YXYs9iq2K7Yr9mFIiwKICAgICAgICAiUGFzc3dvcmQiOiAi2YPZhNmF2Kkg2KfZhNmF2LHZiNixIiwKICAgICAgICAiTG9nb3V0IjogItiu2LHZiNisIiwKICAgICAgICAiTW92ZSI6ICLZhtmC2YQiLAogICAgICAgICJDb3B5IjogItmG2LPYriIsCiAgICAgICAgIlNhdmUiOiAi2K3Zgdi4IiwKICAgICAgICAiU2VsZWN0QWxsIjogItiq2K3Yr9mK2K8g2KfZhNmD2YQiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICLYp9mE2LrYp9ihINiq2K3Yr9mK2K8g2KfZhNmD2YQiLAogICAgICAgICJGaWxlIjogItmF2YTZgSIsCiAgICAgICAgIkJhY2siOiAi2LHYrNmI2LkiLAogICAgICAgICJTaXplIjogItit2KzZhSIsCiAgICAgICAgIlBlcm1zIjogIti12YTYp9it2YrYp9iqIiwKICAgICAgICAiTW9kaWZpZWQiOiAi2LnYr9mEINio2YAiLAogICAgICAgICJPd25lciI6ICLYp9mE2YXYp9mE2YMiLAogICAgICAgICJTZWFyY2giOiAi2KjYrdirIiwKICAgICAgICAiTmV3SXRlbSI6ICLYudmG2LXYsSDYrNiv2YrYryIsCiAgICAgICAgIkZvbGRlciI6ICLZhdis2YTYryIsCiAgICAgICAgIkRlbGV0ZSI6ICLYrdiw2YEiLAogICAgICAgICJSZW5hbWUiOiAi2KrYs9mF2YrYqSIsCiAgICAgICAgIkNvcHlUbyI6ICLZhtiz2K4g2KfZhNmJIiwKICAgICAgICAiRGlyZWN0TGluayI6ICLYsdin2KjYtyDZhdio2KfYtNixIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAi2LHZgdi5INmF2YTZgdin2KoiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICLYqti62YrZitixINin2YTYtdmE2KfYrdmK2KfYqiIsCiAgICAgICAgIkNvcHlpbmciOiAi2KzYp9ix2Yog2KfZhNmG2LPYriIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAi2KfZhti02KfYoSDYudmG2LXYsSDYrNiv2YrYryIsCiAgICAgICAgIk5hbWUiOiAi2KfYs9mFIiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAi2YXYrdix2LEg2YXYqtmC2K/ZhSIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAi2KrYsNmD2LHZhtmKIiwKICAgICAgICAiQWN0aW9ucyI6ICLYudmF2YTZitin2KoiLAogICAgICAgICJVcGxvYWQiOiAi2LHZgdi5IiwKICAgICAgICAiQ2FuY2VsIjogItin2YTYutin2KEiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAi2LnZg9izINin2YTYqtit2K/ZitivIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAi2YXYrNmE2K8iLAogICAgICAgICJJdGVtVHlwZSI6ICLZhtmI2Lkg2KfZhNi52YbYtdixIiwKICAgICAgICAiSXRlbU5hbWUiOiAi2KfYs9mFINin2YTYudmG2LXYsSIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICLYp9mG2LTYoyDYp9mE2KLZhiIsCiAgICAgICAgIkRvd25sb2FkIjogItiq2K3ZhdmK2YQiLAogICAgICAgICJPcGVuIjogItmB2KrYrSIsCiAgICAgICAgIlVuWmlwIjogItmB2YMg2KfZhNi22LrYtyIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAi2YHZgyDYp9mE2LXYuti3INmE2YXZhNmBIiwKICAgICAgICAiRWRpdCI6ICLZhtit2LHZitixIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogItmF2K3YsdixINi52KfYr9mKIiwKICAgICAgICAiQmFja1VwIjogItmG2LPYrtipINin2K3YqtmK2KfYt9mK2KkiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAi2YXYrNmE2K8g2KfZhNmF2LXYr9ixIiwKICAgICAgICAiRmlsZXMiOiAi2YXZhNmB2KfYqiIsCiAgICAgICAgIkNoYW5nZSI6ICLYqti62YrZitixIiwKICAgICAgICAiU2V0dGluZ3MiOiAi2KfYudiv2KfYr9in2KoiLAogICAgICAgICJMYW5ndWFnZSI6ICLZhNi62KkiLAogICAgICAgICJNZW1vcnlVc2VkIjogItin2YTYsNin2YPYsdipINin2YTZhdiz2KrYrtiv2YXYqSIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAi2K3YrNmFINin2YTZgtiz2YUiLAogICAgICAgICJGcmVlIG9mIjogItmF2LPYp9it2Kkg2YHYp9ix2LrYqSDZhdmGICIsCiAgICAgICAgIlByZXZpZXciOiAi2LnYsdi2IiwKICAgICAgICAiRnVsbCBzaXplIjogItin2YTYrdis2YUg2KfZhNmD2YTZiiIsCiAgICAgICAgIkVycm9yUmVwb3J0aW5nIjogItin2YTYqtio2YTZiti6INio2KfYrti32KfYoSIsCiAgICAgICAgIlNob3dIaWRkZW5GaWxlcyI6ICLYp9i42YfYp9ixINin2YTZhdmE2YHYp9iqINin2YTZhdiu2YHZitipIiwKICAgICAgICAiSGVscCI6ICLZhdiz2KfYudiv2KkiLAogICAgICAgICJHZW5lcmF0ZSI6ICLYqtmI2YTZitivIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogItin2YTYqtio2YTZiti6INio2YXYtNmD2YTYqSIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogItiq2YjZhNmK2K8g2YfYp9i0INmE2YPZhNmF2Kkg2KfZhNmF2LHZiNixIiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAi2YjYq9in2KbZgiDYp9mE2YXYs9in2LnYr9ipIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAi2KrZgdmC2K8g2KLYrtixINin2YTYp9i12K/Yp9ix2KfYqiIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAixIxlc2t5IiwKICAgICAgImNvZGUiOiAiY3oiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICJGaWxlIE1hbmFnZXIiLAogICAgICAgICJMb2dpbiI6ICJQxZlpaGzDoXNpdCIsCiAgICAgICAgIlVzZXJuYW1lIjogIlDFmWlobGHFoW92YWPDrSBqbcOpbm8iLAogICAgICAgICJQYXNzd29yZCI6ICJIZXNsbyIsCiAgICAgICAgIkxvZ291dCI6ICJPZGhsw6FzaXQiLAogICAgICAgICJNb3ZlIjogIlDFmWVzdW5vdXQiLAogICAgICAgICJDb3B5IjogIktvcMOtcm92YXQiLAogICAgICAgICJTYXZlIjogIlVsb8W+aXQiLAogICAgICAgICJTZWxlY3RBbGwiOiAiVnlicmF0IHbFoWUiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJPZGVicmF0IHbFoWUiLAogICAgICAgICJGaWxlIjogIlNvdWJvciIsCiAgICAgICAgIkJhY2siOiAiWnDEm3QiLAogICAgICAgICJTaXplIjogIlZlbGlrb3N0IiwKICAgICAgICAiUGVybXMiOiAiT3Byw6F2bsSbbsOtIiwKICAgICAgICAiTW9kaWZpZWQiOiAiWm3Em27Em25vIiwKICAgICAgICAiT3duZXIiOiAiVmxhc3Ruw61rIiwKICAgICAgICAiU2VhcmNoIjogIkhsZWRhdCIsCiAgICAgICAgIk5ld0l0ZW0iOiAiTm92w6EgcG9sb8W+a2EiLAogICAgICAgICJGb2xkZXIiOiAiU2xvxb5rYSIsCiAgICAgICAgIkRlbGV0ZSI6ICJTbWF6YXQiLAogICAgICAgICJSZW5hbWUiOiAiUMWZZWptZW5vdmF0IiwKICAgICAgICAiQ29weVRvIjogIktvcMOtcm92YXQgZG8iLAogICAgICAgICJEaXJlY3RMaW5rIjogIlDFmcOtbcO9IG9ka2F6IiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiTmFocsOhdCBzb3Vib3J5IiwKICAgICAgICAiQ2hhbmdlUGVybWlzc2lvbnMiOiAiWm3Em25pdCBvcHLDoXZuxJtuw60iLAogICAgICAgICJDb3B5aW5nIjogIktvcMOtcm92w6Fuw60iLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIlZ5dHZvxZkgbm92b3UgcG9sb8W+a3UiLAogICAgICAgICJOYW1lIjogIk7DoXpldiIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIlZ5bGVwxaFlbsO9IGVkaXRvciIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAiUGFtYXR1aiBzaSBtbsSbIiwKICAgICAgICAiQWN0aW9ucyI6ICJBa2NlIiwKICAgICAgICAiVXBsb2FkIjogIk5haHLDoXQiLAogICAgICAgICJDYW5jZWwiOiAiWnJ1xaFpdCIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICJPYnJhxaUgdsO9YsSbciIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIktvbmXEjW7DoSBzbG/FvmthIiwKICAgICAgICAiSXRlbVR5cGUiOiAiVHlwIHBvbG/Fvmt5IiwKICAgICAgICAiSXRlbU5hbWUiOiAiTsOhemV2IHBvbG/Fvmt5IiwKICAgICAgICAiQ3JlYXRlTm93IjogIlZ5dHZvxZlpdCIsCiAgICAgICAgIkRvd25sb2FkIjogIlN0w6Fobm91dCIsCiAgICAgICAgIk9wZW4iOiAiT3RldsWZw610IiwKICAgICAgICAiVW5aaXAiOiAiUm96YmFsaXQiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIlJvemJhbGl0IGRvIiwKICAgICAgICAiRWRpdCI6ICJVcHJhdml0IiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIkVkaXRvciIsCiAgICAgICAgIkJhY2tVcCI6ICJaw6Fsb2hhIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIlpkcm9qb3bDoSBzbG/FvmthIiwKICAgICAgICAiRmlsZXMiOiAiU291Ym9yeSIsCiAgICAgICAgIkNoYW5nZSI6ICJabcSbbml0IiwKICAgICAgICAiU2V0dGluZ3MiOiAiTmFzdGF2ZW7DrSIsCiAgICAgICAgIkxhbmd1YWdlIjogIkphenlrIiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICJWeXXFvml0w6EgcGFtxJvFpSIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAiVmVsaWtvc3Qgb2Rkw61sdSIsCiAgICAgICAgIkVycm9yUmVwb3J0aW5nIjogIkhsw6HFoWVuw60gY2h5YiIsCiAgICAgICAgIlNob3dIaWRkZW5GaWxlcyI6ICJab2JyYXppdCBza3J5dMOpIHNvdWJvcnkiLAogICAgICAgICJQcmV2aWV3IjogIk7DoWhsZWQiLAogICAgICAgICJIZWxwIjogIk7DoXBvdsSbZGEiLAogICAgICAgICJGdWxsU2l6ZSI6ICJDZWxrb3bDoSB2ZWxpa29zdCIsCiAgICAgICAgIkZyZWVPZiI6ICJ2b2xuw6kgeiIsCiAgICAgICAgIkhlbHAgRG9jdW1lbnRzIjogIkRva3VtZW50YWNlIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIk5haGzDoXNpdCBjaHlidSIsCiAgICAgICAgIkdlbmVyYXRlIjogIkdlbmVyb3ZhdCIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAiUG/EjcOtdGF0IHZlbGlrb3N0aSBzbG/FvmVrIiwKICAgICAgICAiUHJvY2Vzc0lEIjogIklEIHByb2Nlc3UiLAogICAgICAgICJDcmVhdGVkIjogIlZ5dHZvxZllbm8iLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICJTa3LDvXQgc2xvdXBjZSBvcHLDoXZuxJtuw60gYSB2bGFzdG7DrWthIiwKICAgICAgICAiRm9sZGVyIGlzIGVtcHR5IjogIlNsb8W+a2EgamUgcHLDoXpkbsOhIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAiVnlobGVkYXQgYWt0dWFsaXphY2UiLAogICAgICAgICJHZW5lcmF0ZSBuZXcgcGFzc3dvcmQgaGFzaCI6ICJWeWdlbmVyb3ZhdCBub3bDvSBoYXNoIGhlc2xhIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiSnN0ZSBwxZlpaGzDocWhZW4oYSkiLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAiQ2h5YmEgcMWZaWhsw6HFoWVuw606IMWhcGF0bsSbIHphZGFuw6kgaGVzbG8gbmVibyB1xb5pdmF0ZWxza8OpIGptw6lubyIsCiAgICAgICAgInBhc3N3b3JkX2hhc2ggbm90IHN1cHBvcnRlZCwgVXBncmFkZSBQSFAgdmVyc2lvbiI6ICJGdW5rY2UgcGFzc3dvcmRfaGFzaCBuZW7DrSBkb3N0dXBuw6EsIGFrdHVhbGl6dWp0ZSBQSFAgbmEgbm92xJtqxaHDrSB2ZXJ6aSIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiVMO8cmvDp2UiLAogICAgICAiY29kZSI6ICJ0ciIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiVGlueSBGaWxlIE1hbmFnZXIiOiAiVGlueSBEb3N5YSBZw7ZuZXRpY2lzaSIsCiAgICAgICAgIkZpbGUgTWFuYWdlciI6ICJEb3N5YSBZw7ZuZXRpY2lzaSIsCiAgICAgICAgIlNpZ24gaW4iOiAiR2lyacWfIFlhcCIsCiAgICAgICAgIlVzZXJuYW1lIjogIkt1bGxhbsSxY8SxIGFkxLEiLAogICAgICAgICJQYXNzd29yZCI6ICJQYXJvbGEiLAogICAgICAgICJTaWduIE91dCI6ICLDh8Sxa8SxxZ8gWWFwIiwKICAgICAgICAiTW92ZSI6ICJUYcWfxLEiLAogICAgICAgICJDb3B5IjogIktvcHlhbGEiLAogICAgICAgICJTYXZlIjogIktheWRldCIsCiAgICAgICAgIlNlbGVjdCBhbGwiOiAiSGVwc2luaSBTZcOnIiwKICAgICAgICAiVW5zZWxlY3QgYWxsIjogIkhlcHNpbmkgQsSxcmFrIiwKICAgICAgICAiRmlsZSI6ICJEb3N5YSIsCiAgICAgICAgIkJhY2siOiAiR2VyaSIsCiAgICAgICAgIlNpemUiOiAiQm95dXQiLAogICAgICAgICJQZXJtcyI6ICLEsHppbmxlciIsCiAgICAgICAgIk1vZGlmaWVkIjogIlNvbiBEw7x6ZW5sZW1lIiwKICAgICAgICAiT3duZXIiOiAiU2FoaWJpIiwKICAgICAgICAiU2VhcmNoIjogIkFyYW1hIiwKICAgICAgICAiTmV3IEl0ZW0iOiAiWWVuaSBEb3N5YSIsCiAgICAgICAgIkZvbGRlciI6ICJLbGFzw7ZyIiwKICAgICAgICAiRGVsZXRlIjogIlNpbCIsCiAgICAgICAgIlJlbmFtZSI6ICJZZW5pZGVuIEFkbGFuZMSxciIsCiAgICAgICAgIkNvcHkgdG8iOiAixZ51cmF5YSBLb3B5YWxhIiwKICAgICAgICAiRGlyZWN0IGxpbmsiOiAiRXJpxZ9pbSBMaW5raSIsCiAgICAgICAgIlVwbG9hZCBGaWxlcyI6ICJEb3N5YWxhcsSxIFnDvGtsZSIsCiAgICAgICAgIkNoYW5nZSBQZXJtaXNzaW9ucyI6ICLEsHppbmxlcmkgRGXEn2nFn3RpciIsCiAgICAgICAgIkNvcHlpbmciOiAiS29weWFsYW7EsXlvciIsCiAgICAgICAgIkNyZWF0ZSBOZXcgSXRlbSI6ICJZZW5pIERvc3lhIE9sdcWfdHVyIiwKICAgICAgICAiTmFtZSI6ICJBZCIsCiAgICAgICAgIkFkdmFuY2VkIEVkaXRvciI6ICJHZWxpxZ9tacWfIETDvHplbmxleWljaSIsCiAgICAgICAgIlJlbWVtYmVyIE1lIjogIkJlbmkgSGF0xLFybGEiLAogICAgICAgICJBY3Rpb25zIjogIkhhcmVrZXRsZXIiLAogICAgICAgICJVcGxvYWQiOiAiWcO8a2xlIiwKICAgICAgICAiQ2FuY2VsIjogIsSwcHRhbCBFdCIsCiAgICAgICAgIkludmVydCBTZWxlY3Rpb24iOiAiU2XDp2ltaSBHZXJpIEFsIiwKICAgICAgICAiRGVzdGluYXRpb24gRm9sZGVyIjogIkhlZGVmIGtsYXPDtnIiLAogICAgICAgICJJdGVtIFR5cGUiOiAiRG9zeWEgVMO8csO8IiwKICAgICAgICAiSXRlbSBOYW1lIjogIkRvc3lhIEFkxLEiLAogICAgICAgICJDcmVhdGUgTm93IjogIk9sdcWfdHVyIiwKICAgICAgICAiRG93bmxvYWQiOiAixLBuZGlyIiwKICAgICAgICAiT3BlbiI6ICJBw6ciLAogICAgICAgICJVblppcCI6ICJBcsWfaXZkZW4gw6fEsWthcnQiLAogICAgICAgICJVblppcCB0byBmb2xkZXIiOiAiS2xhc8O2cmUgw4fEsWthcnQiLAogICAgICAgICJFZGl0IjogIkTDvHplbmxlIiwKICAgICAgICAiTm9ybWFsIEVkaXRvciI6ICJOb3JtYWwgRMO8emVubGV5aWNpIiwKICAgICAgICAiQmFjayBVcCI6ICJZZWRla2xlIiwKICAgICAgICAiU291cmNlIEZvbGRlciI6ICJLYXluYWsgS2xhc8O2ciIsCiAgICAgICAgIkZpbGVzIjogIkRvc3lhbGFyIiwKICAgICAgICAiQ2hhbmdlIjogIkRlxJ9pxZ9pbSIsCiAgICAgICAgIlNldHRpbmdzIjogIkF5YXJsYXIiLAogICAgICAgICJMYW5ndWFnZSI6ICJEaWwiLAogICAgICAgICJNZW1vcnkgdXNlZCI6ICJLdWxsYW7EsWxhbiBCZWxsZWsiLAogICAgICAgICJQYXJ0aXRpb24gc2l6ZSI6ICJEaXNrIEJveXV0dSIsCiAgICAgICAgIkVycm9yIFJlcG9ydGluZyI6ICJIYXRhIFJhcG9ybGFtYSIsCiAgICAgICAgIlNob3cgSGlkZGVuIEZpbGVzIjogIkdpemxpIERvc3lhbGFyxLEgR8O2c3RlciIsCiAgICAgICAgIkZ1bGwgc2l6ZSI6ICJUb3BsYW0gQm95dXQiLAogICAgICAgICJIZWxwIjogIllhcmTEsW0iLAogICAgICAgICJGcmVlIG9mIjogIkJvxZ8gT2xhbiIsCiAgICAgICAgIlByZXZpZXciOiAiR8O2csO8bnTDvGxlIiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAiRMO2a8O8bWFubGFyIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIlNvcnVuIEJpbGRpciIsCiAgICAgICAgIkdlbmVyYXRlIjogIk9sdcWfdHVyIiwKICAgICAgICAiRnVsbCBTaXplIjogIlRvcGxhbSBCb3l1dCIsCiAgICAgICAgImZyZWUgb2YiOiAiQm/FnyBvbGFuIiwKICAgICAgICAiQ2FsY3VsYXRlIGZvbGRlciBzaXplIjogIktsYXPDtnIgQm95dXRsYXLEsW7EsSBIZXNhcGxhIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAiR8O8bmNlbCBTw7xyw7xtw7wgS29udHJvbCBFdCIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIlBhcm9sYSBpw6dpbiBIYXNoIMOccmV0IiwKICAgICAgICAiSGlkZSBQZXJtcy9Pd25lciBjb2x1bW5zIjogIllldGtpIC8gU2FoaXAgU8O8dHVudW51IEdpemxlIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJTbG92ZW5za3kiLAogICAgICAiY29kZSI6ICJzayIsCiAgICAgICJ0cmFuc2xhdGlvbiI6IHsKICAgICAgICAiQXBwTmFtZSI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkFwcFRpdGxlIjogIkZpbGUgTWFuYWdlciIsCiAgICAgICAgIkxvZ2luIjogIlByaWhsw6FzacWlIHNhIiwKICAgICAgICAiVXNlcm5hbWUiOiAiUHJpaGxhc292YWNpZSBtZW5vIiwKICAgICAgICAiUGFzc3dvcmQiOiAiSGVzbG8iLAogICAgICAgICJMb2dvdXQiOiAiT2RobMOhc2nFpSIsCiAgICAgICAgIk1vdmUiOiAiUHJlc3Vuw7rFpSIsCiAgICAgICAgIkNvcHkiOiAiS29ww61yb3ZhxaUiLAogICAgICAgICJTYXZlIjogIlVsb8W+acWlIiwKICAgICAgICAiU2VsZWN0QWxsIjogIlZ5YnJhxaUgdsWhZXRrbyIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIlpydcWhacWlIHbDvWJlciIsCiAgICAgICAgIkZpbGUiOiAiU8O6Ym9yIiwKICAgICAgICAiQmFjayI6ICJTcMOkxaUiLAogICAgICAgICJTaXplIjogIlZlxL5rb3PFpSIsCiAgICAgICAgIlBlcm1zIjogIk9wcsOhdm5lbmlhIiwKICAgICAgICAiTW9kaWZpZWQiOiAiWm1lbmVuw6kiLAogICAgICAgICJPd25lciI6ICJWbGFzdG7DrWsiLAogICAgICAgICJTZWFyY2giOiAiSMS+YWRhxaUiLAogICAgICAgICJOZXdJdGVtIjogIk5vdsO9IHPDumJvciIsCiAgICAgICAgIkZvbGRlciI6ICJQcmllxI1pbm9rIiwKICAgICAgICAiRGVsZXRlIjogIlptYXphxaUiLAogICAgICAgICJSZW5hbWUiOiAiUHJlbWVub3ZhxaUiLAogICAgICAgICJDb3B5VG8iOiAiS29ww61yb3ZhxaUgZG8iLAogICAgICAgICJEaXJlY3RMaW5rIjogIlByaWFteSBvZGtheiIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIk5haHJhxaUgc8O6Ym9yeSIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIlptZW5pxaUgb3Byw6F2bmVuaWEiLAogICAgICAgICJDb3B5aW5nIjogIktvcMOtcm92YW5pZSIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiVnl0dm9yacWlIG5vdsO9IHPDumJvciIsCiAgICAgICAgIk5hbWUiOiAiTsOhem92IiwKICAgICAgICAiQWR2YW5jZWRFZGl0b3IiOiAiUG9rcm/EjWlsw70gZWRpdG9yIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJaYXBhbcOkdGHFpSIsCiAgICAgICAgIkFjdGlvbnMiOiAiQWtjaWUiLAogICAgICAgICJVcGxvYWQiOiAiTmFocmHFpSIsCiAgICAgICAgIkNhbmNlbCI6ICJacnXFoWnFpSIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICJPYnLDoXRpxaUgdsO9YmVyIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAiQ2llxL5vdsO9IHByaWXEjWlub2siLAogICAgICAgICJJdGVtVHlwZSI6ICJUeXAgc8O6Ym9ydSIsCiAgICAgICAgIkl0ZW1OYW1lIjogIk7DoXpvdiBzw7pib3J1IiwKICAgICAgICAiQ3JlYXRlTm93IjogIlZ5dHZvcmnFpSIsCiAgICAgICAgIkRvd25sb2FkIjogIlN0aWFobsO6xaUiLAogICAgICAgICJPcGVuIjogIk90dm9yacWlIiwKICAgICAgICAiVW5aaXAiOiAiUm96YmFsacWlIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICJSb3piYWxpxaUgZG8iLAogICAgICAgICJFZGl0IjogIlVwcmF2acWlIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIkVkaXRvciIsCiAgICAgICAgIkJhY2tVcCI6ICJaw6Fsb2hhIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIlpkcm9qb3bDvSBwcmllxI1pbm9rIiwKICAgICAgICAiRmlsZXMiOiAiU8O6Ym9yeSIsCiAgICAgICAgIkNoYW5nZSI6ICJabWVuacWlIiwKICAgICAgICAiU2V0dGluZ3MiOiAiTmFzdGF2ZW5pYSIsCiAgICAgICAgIkxhbmd1YWdlIjogIkphenlrIiwKICAgICAgICAiTWVtb3J5VXNlZCI6ICJWeXXFvml0w6EgcGFtw6TFpSIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAiVmXEvmtvc8WlIG9kZGllbHUiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICJIbMOhc2VuaWUgY2jDvWIiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAiWm9icmF6acWlIHNrcnl0w6kgc8O6Ym9yeSIsCiAgICAgICAgIlByZXZpZXciOiAiTsOhaMS+YWQiLAogICAgICAgICJIZWxwIjogIlBvbW9jIiwKICAgICAgICAiRnVsbFNpemUiOiAiQ2Vsa292w6EgdmXEvmtvc8WlIiwKICAgICAgICAiRnJlZU9mIjogInZvxL5uw6kgeiIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAiU2xvdmVuc2tvIiwKICAgICAgImNvZGUiOiAic2wiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICJSYXppc2tvdmFsZWMiLAogICAgICAgICJMb2dpbiI6ICJQcmlqYXZhIiwKICAgICAgICAiVXNlcm5hbWUiOiAiVXBvcmFibmnFoWtvIGltZSIsCiAgICAgICAgIlBhc3N3b3JkIjogIkdlc2xvIiwKICAgICAgICAiTG9nb3V0IjogIk9kamF2YSIsCiAgICAgICAgIk1vdmUiOiAiUHJlbWFrbmkiLAogICAgICAgICJDb3B5IjogIktvcGlyYWoiLAogICAgICAgICJTYXZlIjogIlNocmFuaSIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJJemJlcmkgdnNlIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiSXpiZXJpIG5pxI0iLAogICAgICAgICJGaWxlIjogIkRhdG90ZWthIiwKICAgICAgICAiQmFjayI6ICJOYXphaiIsCiAgICAgICAgIlNpemUiOiAiVmVsaWtvc3QiLAogICAgICAgICJQZXJtcyI6ICJQcmF2aWNlIiwKICAgICAgICAiTW9kaWZpZWQiOiAiU3ByZW1lbmplbm8iLAogICAgICAgICJPd25lciI6ICJMYXN0bmlrIiwKICAgICAgICAiU2VhcmNoIjogIklza2FuamUiLAogICAgICAgICJOZXdJdGVtIjogIk5vdiBvYmpla3QiLAogICAgICAgICJGb2xkZXIiOiAiTWFwYSIsCiAgICAgICAgIkRlbGV0ZSI6ICJJemJyacWhaSIsCiAgICAgICAgIlJlbmFtZSI6ICJQcmVpbWVudWoiLAogICAgICAgICJDb3B5VG8iOiAiS29waXJhaiB2IiwKICAgICAgICAiRGlyZWN0TGluayI6ICJEaXJla3RsaW5rIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiTmFsb8W+aSBkYXRvdGVrbyIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIlNwcmVtZW5pIHByYXZpY2UiLAogICAgICAgICJDb3B5aW5nIjogIktvcGlyYW5qZSIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiVXN0dmFyaSBub3Ygb2JqZWt0IiwKICAgICAgICAiTmFtZSI6ICJJbWUiLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJSYXrFoWlyamVuaSB1cmVqZXZhbG5payIsCiAgICAgICAgIlJlbWVtYmVyTWUiOiAiT3N0YW5pIHByaWphdmxqZW4iLAogICAgICAgICJBY3Rpb25zIjogIkFrdGl2bm9zdGkiLAogICAgICAgICJVcGxvYWQiOiAiTmFsb8W+aSIsCiAgICAgICAgIkNhbmNlbCI6ICJQcmVrbGnEjWkiLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiT2JybmkgaXpib3IiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICJDaWxqbmEgbWFwYSIsCiAgICAgICAgIkl0ZW1UeXBlIjogIlRpcCBvYmpla3RhIiwKICAgICAgICAiSXRlbU5hbWUiOiAiSW1lIG9iamVrdGEiLAogICAgICAgICJDcmVhdGVOb3ciOiAiVXN0dmFyaSBub3YiLAogICAgICAgICJEb3dubG9hZCI6ICJQcmVuZXNpIiwKICAgICAgICAiT3BlbiI6ICJPZHByaSIsCiAgICAgICAgIlVuWmlwIjogIlJhesWhaXJpIiwKICAgICAgICAiVW5aaXBUb0ZvbGRlciI6ICJSYXrFoWlyaSB2IG1hcG8iLAogICAgICAgICJFZGl0IjogIlVyZWRpIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIlN0YW5kYXJkbmkgdXJlamV2YWxuaWsiLAogICAgICAgICJCYWNrVXAiOiAiVmFybm9zdG5hIGtvcGlqYSIsCiAgICAgICAgIlNvdXJjZUZvbGRlciI6ICJJemhvZGnFocSNbmEgbWFwYSIsCiAgICAgICAgIkZpbGVzIjogIkRhdG90ZWtlIiwKICAgICAgICAiQ2hhbmdlIjogIlNwcmVtZW5pIiwKICAgICAgICAiU2V0dGluZ3MiOiAiTmFzdGF2aXR2ZSIsCiAgICAgICAgIkxhbmd1YWdlIjogIkplemlrIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiU3RlIHVzcGXFoW5vIHByaWphdmxqZW5pIiwKICAgICAgICAiTG9naW4gZmFpbGVkLiBJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIjogIlByaWphdmEgamUgc3BvZGxldGVsYS4gTmFwYcSNbm8gdXBvcmFibmnFoWtvIGltZSBhbGkgZ2VzbG8uIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogInBhc3N3b3JkX2hhc2ggbmkgcG9kcHJ0LCBuYWRncmFkaXRlIHJhemxpxI1pY28gUEhQIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJTdW9taSIsCiAgICAgICJjb2RlIjogImZpIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBcHBOYW1lIjogIlRpbnkgRmlsZSBNYW5hZ2VyIiwKICAgICAgICAiQXBwVGl0bGUiOiAiRmlsZSBNYW5hZ2VyIiwKICAgICAgICAiTG9naW4iOiAiS2lyamF1dHVtaW5lbiIsCiAgICAgICAgIlVzZXJuYW1lIjogIkvDpHl0dMOkasOkbmltaSIsCiAgICAgICAgIlBhc3N3b3JkIjogIlNhbGFzYW5hIiwKICAgICAgICAiTG9nb3V0IjogIktpcmphdWR1IHVsb3MiLAogICAgICAgICJNb3ZlIjogIlNpaXJyw6QiLAogICAgICAgICJDb3B5IjogIktvcGlvaSIsCiAgICAgICAgIlNhdmUiOiAiVGFsbGVubmEiLAogICAgICAgICJTZWxlY3RBbGwiOiAiVmFsaXRzZSBrYWlra2kiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICJQb2lzdGEgdmFsaW5uYXQiLAogICAgICAgICJGaWxlIjogIlRpZWRvc3RvIiwKICAgICAgICAiQmFjayI6ICJUYWthaXNpbiIsCiAgICAgICAgIlNpemUiOiAiS29rbyIsCiAgICAgICAgIlBlcm1zIjogIk9pa2V1ZGV0IiwKICAgICAgICAiTW9kaWZpZWQiOiAiTXVva2F0dHUiLAogICAgICAgICJPd25lciI6ICJPbWlzdGFqYSIsCiAgICAgICAgIlNlYXJjaCI6ICJIYWt1IiwKICAgICAgICAiTmV3SXRlbSI6ICJMdW8gdXVzaS4uLiIsCiAgICAgICAgIkZvbGRlciI6ICJLYW5zaW8iLAogICAgICAgICJEZWxldGUiOiAiUG9pc3RhIiwKICAgICAgICAiUmVuYW1lIjogIk5pbWXDpCB1dWRlbGxlZW4iLAogICAgICAgICJDb3B5VG8iOiAiS29waW9pIGtvaHRlZXNlZW4iLAogICAgICAgICJEaXJlY3RMaW5rIjogIlN1b3JhIGxpbmtraSIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIlNpaXJyw6QgdGllZG9zdG9qYSIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIk11dXRhIG9pa2V1a3NpYSIsCiAgICAgICAgIkNvcHlpbmciOiAiS29waW9pZGFhbiIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiTHVvIHV1c2kgdGllZG9zdG8gdGFpIGthbnNpbyIsCiAgICAgICAgIk5hbWUiOiAiTmltaSIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIkVkaXN0eW55dCBlZGl0b3JpIiwKICAgICAgICAiUmVtZW1iZXJNZSI6ICJNdWlzdGEgbWludXQiLAogICAgICAgICJBY3Rpb25zIjogIlRvaW1pbm5vdCIsCiAgICAgICAgIlVwbG9hZCI6ICJWaWUiLAogICAgICAgICJDYW5jZWwiOiAiUGVydXV0YSIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICJWYWloZGEgdmFsaW50YSIsCiAgICAgICAgIkRlc3RpbmF0aW9uRm9sZGVyIjogIktvaGRla2Fuc2lvIiwKICAgICAgICAiSXRlbVR5cGUiOiAiVGllZG9zdG9uIHR5eXBwaSIsCiAgICAgICAgIkl0ZW1OYW1lIjogIk5pbWkiLAogICAgICAgICJDcmVhdGVOb3ciOiAiTHVvIG55dCIsCiAgICAgICAgIkRvd25sb2FkIjogIkxhdGFhIiwKICAgICAgICAiT3BlbiI6ICJBdmFhIiwKICAgICAgICAiVW5aaXAiOiAiUHVyYSIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiUHVyYSBrYW5zaW9vbiIsCiAgICAgICAgIkVkaXQiOiAiTXVva2thYSIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJFZGl0b3JpIiwKICAgICAgICAiQmFja1VwIjogIlZhcm11dXNrb3Bpb2kiLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAiS29oZGVrYW5zaW8iLAogICAgICAgICJGaWxlcyI6ICJUaWVkb3N0b3QiLAogICAgICAgICJDaGFuZ2UiOiAiVmFpaGRhIiwKICAgICAgICAiU2V0dGluZ3MiOiAiQXNldHVrc2V0IiwKICAgICAgICAiTGFuZ3VhZ2UiOiAiS2llbGkiLAogICAgICAgICJNZW1vcnlVc2VkIjogIk11aXN0aWEga8OkeXRldHR5IiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICJPc2lvbiBrb2tvIiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAiVmlyaGVyYXBvcnRpdCIsCiAgICAgICAgIlNob3dIaWRkZW5GaWxlcyI6ICJOw6R5dMOkIHBpaWxvdGllZG9zdG90IiwKICAgICAgICAiUHJldmlldyI6ICJFc2lrYXRzZWxlIiwKICAgICAgICAiSGVscCI6ICJBcHVhIiwKICAgICAgICAiRnVsbFNpemUiOiAiVMOkeXNpa29rb2luZW4iLAogICAgICAgICJGcmVlT2YiOiAiVmFwYWFuYSIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAiTGFza2Uga2Fuc2lvbiBrb2tvIiwKICAgICAgICAiQ2hlY2tMYXRlc3RWZXJzaW9uIjogIlRhcmtpc3RhIHDDpGl2aXR5a3NldCIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIkx1byB1dXNpIHNhbGFzYW5hLWhhc2giLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICJQaWlsb3RhIG9pa2V1ZGV0LS9vbWlzdGFqYS1zYXJha2tlZXQiCiAgICAgIH0KICAgIH0sCiAgICB7CiAgICAgICJuYW1lIjogIu2VnOq1reyWtCIsCiAgICAgICJjb2RlIjogImtvIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJUaW55IEZpbGUgTWFuYWdlciI6ICJUaW55IEZpbGUgTWFuYWdlciIsCiAgICAgICAgIkZpbGUgTWFuYWdlciI6ICJGaWxlIE1hbmFnZXIiLAogICAgICAgICJTaWduIGluIjogIuuhnOq3uOyduCIsCiAgICAgICAgIlVzZXJuYW1lIjogIuyVhOydtOuUlCIsCiAgICAgICAgIlBhc3N3b3JkIjogIuu5hOuwgOuyiO2YuCIsCiAgICAgICAgIlNpZ24gT3V0IjogIuuhnOq3uOyVhOybgyIsCiAgICAgICAgIk1vdmUiOiAi7J2064+ZIiwKICAgICAgICAiQ29weSI6ICLrs7XsgqwiLAogICAgICAgICJTYXZlIjogIuyggOyepSIsCiAgICAgICAgIlNlbGVjdCBhbGwiOiAi7KCE7LK0IOyEoO2DnSIsCiAgICAgICAgIlVuc2VsZWN0IGFsbCI6ICLshKDtg50g7ZW07KCcIiwKICAgICAgICAiRmlsZSI6ICLtjIzsnbwiLAogICAgICAgICJCYWNrIjogIuuSpOuhnCIsCiAgICAgICAgIlNpemUiOiAi7Jqp65+JIiwKICAgICAgICAiUGVybXMiOiAi6raM7ZWcIiwKICAgICAgICAiTW9kaWZpZWQiOiAi66eI7KeA66eJIOyImOyglSIsCiAgICAgICAgIk93bmVyIjogIuyGjOycoOyekCIsCiAgICAgICAgIlNlYXJjaCI6ICLqsoDsg4kiLAogICAgICAgICJOZXcgSXRlbSI6ICLsg4jroZwg66eM65Ok6riwIiwKICAgICAgICAiRm9sZGVyIjogIu2PtOuNlCIsCiAgICAgICAgIkRlbGV0ZSI6ICLsgq3soJwiLAogICAgICAgICJSZW5hbWUiOiAi7J2066aEIOuzgOqyvSIsCiAgICAgICAgIkNvcHkgdG8iOiAi7KeA7KCV65CcIOychOy5mOuhnCDrs7XsgqwiLAogICAgICAgICJEaXJlY3QgbGluayI6ICLrp4HtgawiLAogICAgICAgICJVcGxvYWQgRmlsZXMiOiAi7YyM7J28IOyXheuhnOuTnCIsCiAgICAgICAgIkNoYW5nZSBQZXJtaXNzaW9ucyI6ICLqtoztlZwg67OA6rK9IiwKICAgICAgICAiQ29weWluZyI6ICLrs7Xsgqwg7KSRIiwKICAgICAgICAiQ3JlYXRlIE5ldyBJdGVtIjogIuyDiOuhnCDrp4zrk6TquLAiLAogICAgICAgICJOYW1lIjogIuydtOumhCIsCiAgICAgICAgIkFkdmFuY2VkIEVkaXRvciI6ICLqs6DquIkg7JeQ65SU7YSwIiwKICAgICAgICAiUmVtZW1iZXIgTWUiOiAi66Gc6re47J24IOygleuztCDsoIDsnqUiLAogICAgICAgICJBY3Rpb25zIjogIuyVoeyFmCIsCiAgICAgICAgIlVwbG9hZCI6ICLsl4XroZzrk5wiLAogICAgICAgICJDYW5jZWwiOiAi7Leo7IaMIiwKICAgICAgICAiSW52ZXJ0IFNlbGVjdGlvbiI6ICLshKDtg50g67CY7KCEIiwKICAgICAgICAiRGVzdGluYXRpb24gRm9sZGVyIjogIuuMgOyDgSDtj7TrjZQiLAogICAgICAgICJJdGVtIFR5cGUiOiAi7Jyg7ZiVIiwKICAgICAgICAiSXRlbSBOYW1lIjogIuydtOumhCIsCiAgICAgICAgIkNyZWF0ZSBOb3ciOiAi7ZmV7J24IiwKICAgICAgICAiRG93bmxvYWQiOiAi64uk7Jq066Gc65OcIiwKICAgICAgICAiT3BlbiI6ICLsl7TquLAiLAogICAgICAgICJVblppcCI6ICLslZXstpUg7ZW07KCcIiwKICAgICAgICAiVW5aaXAgdG8gZm9sZGVyIjogIuyngOygleuQnCDtj7TrjZTsl5Ag7JWV7LaVIO2VtOygnCIsCiAgICAgICAgIkVkaXQiOiAi7Y647KeRIiwKICAgICAgICAiTm9ybWFsIEVkaXRvciI6ICLsnbzrsJgg7JeQ65SU7YSwIiwKICAgICAgICAiQmFjayBVcCI6ICLrsLHsl4UiLAogICAgICAgICJTb3VyY2UgRm9sZGVyIjogIuybkOuzuCDtj7TrjZQiLAogICAgICAgICJGaWxlcyI6ICLtjIzsnbwiLAogICAgICAgICJDaGFuZ2UiOiAi67OA6rK97ZWY6riwIiwKICAgICAgICAiU2V0dGluZ3MiOiAi7ISk7KCVIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAi7Ja47Ja0IiwKICAgICAgICAiTWVtb3J5IHVzZWQiOiAi66mU66qo66asIOyCrOyaqeufiSIsCiAgICAgICAgIlBhcnRpdGlvbiBzaXplIjogIuuCqOydgCDsmqnrn4kiLAogICAgICAgICJFcnJvciBSZXBvcnRpbmciOiAi7Jik66WYIOuztOqzoCIsCiAgICAgICAgIlNob3cgSGlkZGVuIEZpbGVzIjogIuyIqOqyqOynhCDtjIzsnbwg67O06riwIiwKICAgICAgICAiRnVsbCBzaXplIjogIu2YhOyerCDtj7TrjZQg7YyM7J28IOyaqeufiSIsCiAgICAgICAgIkhlbHAiOiAi64+E7JuA66eQIiwKICAgICAgICAiRnJlZSBvZiI6ICLtjIzti7DshZgg7LSdIOyaqeufiToiLAogICAgICAgICJQcmV2aWV3IjogIuuvuOumrCDrs7TquLAiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICLssLjqs6Ag66y47IScIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIuydtOyKiCDrs7Tqs6AiLAogICAgICAgICJHZW5lcmF0ZSI6ICLsg53shLEiLAogICAgICAgICJGdWxsIFNpemUiOiAi7LSdIOyaqeufiSIsCiAgICAgICAgImZyZWUgb2YiOiAi7IKs7JqpIOqwgOuKpSDsmqnrn4kiLAogICAgICAgICJDYWxjdWxhdGUgZm9sZGVyIHNpemUiOiAi7Y+0642UIOyaqeufiSDtkZzsi5wiLAogICAgICAgICJDaGVjayBMYXRlc3QgVmVyc2lvbiI6ICLstZzsi6Ag67KE7KCEIOyytO2BrCIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIuyDiCDruYTrsIDrsojtmLgg7ZW07IucIOyDneyEsSIsCiAgICAgICAgIkhpZGUgUGVybXMvT3duZXIgY29sdW1ucyI6ICLqtoztlZwv7IaM7Jyg7J6QIOyIqOq4sOq4sCIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAi5pel5pys6KqeIiwKICAgICAgImNvZGUiOiAiamEiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICJGaWxlIE1hbmFnZXIiLAogICAgICAgICJMb2dpbiI6ICLjg63jgrDjgqTjg7MiLAogICAgICAgICJVc2VybmFtZSI6ICJVc2VybmFtZSIsCiAgICAgICAgIlBhc3N3b3JkIjogIlBhc3N3b3JkIiwKICAgICAgICAiTG9nb3V0IjogIuODreOCsOOCouOCpuODiCIsCiAgICAgICAgIk1vdmUiOiAi56e75YuVIiwKICAgICAgICAiQ29weSI6ICLjgrPjg5Tjg7wiLAogICAgICAgICJTYXZlIjogIuS/neWtmCIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICLjgZnjgbnjgabpgbjmip4iLAogICAgICAgICJVblNlbGVjdEFsbCI6ICLpgbjmip7op6PpmaQiLAogICAgICAgICJGaWxlIjogIuODleOCoeOCpOODqyIsCiAgICAgICAgIkJhY2siOiAi5oi744KLIiwKICAgICAgICAiU2l6ZSI6ICLjgrXjgqTjgroiLAogICAgICAgICJQZXJtcyI6ICLmqKnpmZAiLAogICAgICAgICJNb2RpZmllZCI6ICLmm7TmlrDml6XmmYIiLAogICAgICAgICJPd25lciI6ICLmiYDmnInogIUiLAogICAgICAgICJTZWFyY2giOiAi5qSc57SiIiwKICAgICAgICAiTmV3SXRlbSI6ICLmlrDopo/kvZzmiJAiLAogICAgICAgICJGb2xkZXIiOiAi44OV44Kp44Or44OAIiwKICAgICAgICAiRGVsZXRlIjogIuWJiumZpCIsCiAgICAgICAgIlJlbmFtZSI6ICLlkI3liY3jga7lpInmm7QiLAogICAgICAgICJDb3B5VG8iOiAi5a6b5YWI44KS5oyH5a6a44GX44Gm44Kz44OU44O8IiwKICAgICAgICAiRGlyZWN0TGluayI6ICLnm7TmjqXjg6rjg7Pjgq8iLAogICAgICAgICJVcGxvYWRpbmdGaWxlcyI6ICLjg5XjgqHjgqTjg6vjgpLjgqLjg4Pjg5fjg63jg7zjg4kiLAogICAgICAgICJDaGFuZ2VQZXJtaXNzaW9ucyI6ICLmqKnpmZDjgpLlpInmm7QiLAogICAgICAgICJDb3B5aW5nIjogIuODleOCoeOCpOODq+OCkuOCs+ODlOODvCIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAi5paw6KaP5L2c5oiQIiwKICAgICAgICAiTmFtZSI6ICLlkI3liY0iLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICLmi6HlvLXjgqjjg4fjgqPjgr/jgafnt6jpm4YiLAogICAgICAgICJSZW1lbWJlck1lIjogIlJlbWVtYmVyIE1lIiwKICAgICAgICAiQWN0aW9ucyI6ICLjgqLjgq/jgrfjg6fjg7MiLAogICAgICAgICJVcGxvYWQiOiAi44Ki44OD44OX44Ot44O844OJIiwKICAgICAgICAiQ2FuY2VsIjogIuOCreODo+ODs+OCu+ODqyIsCiAgICAgICAgIkludmVydFNlbGVjdGlvbiI6ICLpgbjmip7jga7liIfjgormm7/jgYgiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICLlrpvlhYjjg5Xjgqnjg6vjg4AiLAogICAgICAgICJJdGVtVHlwZSI6ICLnqK7poZ4iLAogICAgICAgICJJdGVtTmFtZSI6ICLlkI3liY0iLAogICAgICAgICJDcmVhdGVOb3ciOiAi5L2c5oiQ44GZ44KLIiwKICAgICAgICAiRG93bmxvYWQiOiAi44OA44Km44Oz44Ot44O844OJIiwKICAgICAgICAiT3BlbiI6ICLplovjgY8iLAogICAgICAgICJVblppcCI6ICLop6Plh40iLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIuODleOCqeODq+ODgOOBq+ino+WHjSIsCiAgICAgICAgIkVkaXQiOiAi57eo6ZuGIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIumAmuW4uOOCqOODh+OCo+OCv+OBp+e3qOmbhiIsCiAgICAgICAgIkJhY2tVcCI6ICLjg5Djg4Pjgq/jgqLjg4Pjg5ciLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAi5YWD44OV44Kp44Or44OAIiwKICAgICAgICAiRmlsZXMiOiAi44OV44Kh44Kk44OrIiwKICAgICAgICAiQ2hhbmdlIjogIuWkieabtCIsCiAgICAgICAgIlNldHRpbmdzIjogIuioreWumiIsCiAgICAgICAgIkxhbmd1YWdlIjogIuiogOiqniIsCiAgICAgICAgIk1lbW9yeVVzZWQiOiAi44Oh44Oi44Oq5L2/55So6YePIiwKICAgICAgICAiUGFydGl0aW9uU2l6ZSI6ICLjg5Hjg7zjg4bjgqPjgrfjg6fjg7PjgrXjgqTjgroiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICLjgqjjg6njg7zjgpLooajnpLoiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAi6Zqg44GX44OV44Kh44Kk44Or44KS6KGo56S6IiwKICAgICAgICAiRnVsbCBzaXplIjogIuWQiOioiOOCteOCpOOCuiIsCiAgICAgICAgIkhlbHAiOiAi44OY44Or44OXIiwKICAgICAgICAiRnJlZSBvZiI6ICJmcmVlIG9mIiwKICAgICAgICAiUHJldmlldyI6ICLjg5fjg6zjg5Pjg6Xjg7wiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICLjg5jjg6vjg5fjg4njgq3jg6Xjg6Hjg7Pjg4giLAogICAgICAgICJSZXBvcnQgSXNzdWUiOiAi5ZWP6aGM44KS5aCx5ZGKIiwKICAgICAgICAiR2VuZXJhdGUiOiAi55Sf5oiQIiwKICAgICAgICAiRnVsbFNpemUiOiAi5ZCI6KiI44K144Kk44K6IiwKICAgICAgICAiRnJlZU9mIjogImZyZWUgb2YiLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIuODleOCqeODq+ODgOOCteOCpOOCuuOCkuioiOeulyIsCiAgICAgICAgIlByb2Nlc3NJRCI6ICLjg5fjg63jgrvjgrlJRCIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogIuaoqemZkOODu+aJgOacieiAheOCkumdnuihqOekuiIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIuabtOaWsOOBrueiuuiqjSIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIuODkeOCueODr+ODvOODieODj+ODg+OCt+ODpeOCkueUn+aIkCIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICLnqbrjga7jg5Xjgqnjg6vjg4DjgafjgZkiLAogICAgICAgICJDcmVhdGVkIjogIuS9nOaIkOOBl+OBvuOBl+OBnyIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIuODreOCsOOCpOODs+OBl+OBvuOBl+OBnyIsCiAgICAgICAgIkxvZ2luIGZhaWxlZC4gSW52YWxpZCB1c2VybmFtZSBvciBwYXNzd29yZCI6ICJVc2VybmFtZSDjgoLjgZfjgY/jga8gUGFzc3dvcmQg44GM6YGV44GE44G+44GZIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogInBhc3N3b3JkX2hhc2gg44GM44K144Od44O844OI44GV44KM44Gm44GE44G+44Gb44KT44CCUEhQ44KS44Ki44OD44OX44Kw44Os44O844OJ44GX44Gm44GP44Gg44GV44GEIiwKICAgICAgICAiR3JvdXAiOiAi44Kw44Or44O844OXIiwKICAgICAgICAiT3RoZXIiOiAi44Gd44Gu5LuWIiwKICAgICAgICAiUmVhZCI6ICLoqq3jgb/ovrzjgb8iLAogICAgICAgICJXcml0ZSI6ICLmm7jjgY3ovrzjgb8iLAogICAgICAgICJFeGVjdXRlIjogIuWun+ihjCIKICAgICAgfQogICAgfSwKICAgIHsKICAgICAgIm5hbWUiOiAi0JzQvtC90LPQvtC7IiwKICAgICAgImNvZGUiOiAibW5fTU4iLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICLQpNCw0LnQuyDQt9C+0YXQuNGG0YPRg9C70LDQs9GHciIsCiAgICAgICAgIkxvZ2luIjogItCd0Y3QstGC0YDRjdGFIiwKICAgICAgICAiVXNlcm5hbWUiOiAi0KXRjdGA0Y3Qs9C70Y3Qs9GH0LjQudC9INC90Y3RgCIsCiAgICAgICAgIlBhc3N3b3JkIjogItCd0YPRg9GGINKv0LMiLAogICAgICAgICJMb2dvdXQiOiAi0JPQsNGA0LDRhSIsCiAgICAgICAgIk1vdmUiOiAi0JfTqdOp0YUiLAogICAgICAgICJDb3B5IjogItCl0YPRg9C70LDRhSIsCiAgICAgICAgIlNhdmUiOiAi0KXQsNC00LPQsNC70LDRhSIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICLQkdKv0LPQtNC40LnQsyDRgdC+0L3Qs9C+0YUiLAogICAgICAgICJVblNlbGVjdEFsbCI6ICLQkdKv0LPQtNC40LnQsyDRhtGN0LLRjdGA0LvRjdGFIiwKICAgICAgICAiRmlsZSI6ICLQpNCw0LnQuyIsCiAgICAgICAgIkJhY2siOiAi0JHRg9GG0LDRhSIsCiAgICAgICAgIlNpemUiOiAi0KXRjdC80LbRjdGNIiwKICAgICAgICAiUGVybXMiOiAi0K3RgNGFIiwKICAgICAgICAiTW9kaWZpZWQiOiAi06jTqdGA0YfQu9Op0LPQtNGB06nQvSIsCiAgICAgICAgIk93bmVyIjogItCt0LfRjdC9IiwKICAgICAgICAiU2VhcmNoIjogItCl0LDQudGFIiwKICAgICAgICAiTmV3SXRlbSI6ICLQqNC40L3RjSDQt9Kv0LnQuyIsCiAgICAgICAgIkZvbGRlciI6ICLQpdCw0LLRgtCw0YEiLAogICAgICAgICJEZWxldGUiOiAi0KPRgdGC0LPQsNGFIiwKICAgICAgICAiUmVuYW1lIjogItCd0Y3RgCDRgdC+0LvQuNGFIiwKICAgICAgICAiQ29weVRvIjogItCg0YPRgyDRhdGD0YPQu9Cw0YUiLAogICAgICAgICJEaXJlY3RMaW5rIjogItCo0YPRg9C0INGF0L7Qu9Cx0L7QvtGBIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAi0KTQsNC50LvRg9GD0LTRi9CzINGF0YPRg9C70LYg0LHQsNC50L3QsCIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogItCt0YDRhSDRgdC+0LvQuNGFIiwKICAgICAgICAiQ29weWluZyI6ICLQpdGD0YPQu9C2INCx0LDQudC90LAiLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogItCo0LjQvdGN0Y3RgCDSr9Kv0YHQs9GN0YUiLAogICAgICAgICJOYW1lIjogItCd0Y3RgCIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogItCd0LDRgNC40LnQvSDSr9C50LvQtNGN0LvRgtGN0Lkg0LfQsNGB0LLQsNGA0LvQsNCz0YciLAogICAgICAgICJSZW1lbWJlck1lIjogIlJlbWVtYmVyIE1lIiwKICAgICAgICAiQWN0aW9ucyI6ICLSrtC50LvQtNC70q/Sr9C0IiwKICAgICAgICAiVXBsb2FkIjogItCl0YPRg9C70LDRhSIsCiAgICAgICAgIkNhbmNlbCI6ICLQkdC+0LvQuNGFIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogItCh0L7QvdCz0L7Qu9GC0YvQsyDRjdGB0YDRjdCz0Y3RjdGAIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAi0J7Rh9C40YUg0YXQsNCy0YLQsNGBIiwKICAgICAgICAiSXRlbVR5cGUiOiAi0KLTqdGA06nQuyIsCiAgICAgICAgIkl0ZW1OYW1lIjogItCd0Y3RgCIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICLSrtKv0YHQs9GN0YUiLAogICAgICAgICJEb3dubG9hZCI6ICLQotCw0YLQsNGFIiwKICAgICAgICAiT3BlbiI6ICLQndGN0Y3RhSIsCiAgICAgICAgIlVuWmlwIjogItCX0LDQtNC70LDRhSIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAi0KXQsNCy0YLRgdCw0L3QtCDQt9Cw0LTQu9Cw0YUiLAogICAgICAgICJFZGl0IjogItCX0LDRgdCw0YUiLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAi0K3QvdCz0LjQudC9INC30LDRgdCy0LDRgNC70LDQs9GHIiwKICAgICAgICAiQmFja1VwIjogItCR0LDQutCw0L8iLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAi0KXQsNCw0L3QsNCw0YEg0YXQsNCy0YLQsNGBIiwKICAgICAgICAiRmlsZXMiOiAi0KTQsNC50LsiLAogICAgICAgICJDaGFuZ2UiOiAi0KHQvtC70LjRhSIsCiAgICAgICAgIlNldHRpbmdzIjogItCi0L7RhdC40YDQs9C+0L4iLAogICAgICAgICJMYW5ndWFnZSI6ICLQpdGN0LsiLAogICAgICAgICJNZW1vcnlVc2VkIjogItCl0Y3RgNGN0LPQu9GN0LPQtNGN0LYg0LHRg9C5INGB0LDQvdCw0YUg0L7QuSIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAi0J/QsNGA0YLQuNGI0L3RiyDQt9Cw0LkiLAogICAgICAgICJFcnJvclJlcG9ydGluZyI6ICLQkNC70LTQsNCwINGF0LDRgNGD0YPQu9Cw0YUiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAi0J3Rg9GD0YYg0YTQsNC50LvRg9GD0LTRi9CzINGF0LDRgNGD0YPQu9Cw0YUiLAogICAgICAgICJGdWxsIHNpemUiOiAi0J3QuNC50YIg0YXRjdC80LbRjdGNIiwKICAgICAgICAiSGVscCI6ICLQotGD0YHQu9Cw0LzQtiIsCiAgICAgICAgIkZyZWUgb2YiOiAi0KXQvtC+0YHQvtC9INC30LDQuSIsCiAgICAgICAgIlByZXZpZXciOiAi0KPRgNGM0LTRh9C40LvQsNC9INGF0LDRgNCw0YUiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICLQotGD0YHQu9Cw0LzQtiIsCiAgICAgICAgIlJlcG9ydCBJc3N1ZSI6ICLQkNC70LTQsNCwINC80Y3QtNGN0LPQtNGN0YUiLAogICAgICAgICJHZW5lcmF0ZSI6ICLSrtKv0YHQs9GN0YUiLAogICAgICAgICJGdWxsU2l6ZSI6ICLQndC40LnRgiDRhdGN0LzQttGN0Y0iLAogICAgICAgICJGcmVlT2YiOiAi0KXQvtC+0YHQvtC9INC30LDQuSIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAi0KXQsNCy0YLQsNGB0L3RiyDRhdGN0LzQttGN0Y3QsyDQsdC+0LTQvtGFIiwKICAgICAgICAiUHJvY2Vzc0lEIjogItCf0YDQvtGG0LXRgdGB0YvQvSBJRCIsCiAgICAgICAgIkhpZGVDb2x1bW5zIjogItCR0LDQs9Cw0L3Rg9GD0LTRi9CzINC90YPRg9GFIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAi0KjQuNC90YfRjdC70Y3Qu9GCINCx0LDQudCz0LDQsCDRjdGB0Y3RhdC40LnQsyDRiNCw0LvQs9Cw0YUiLAogICAgICAgICJHZW5lcmF0ZSBuZXcgcGFzc3dvcmQgaGFzaCI6ICLQqNC40L3RjSDQvdGD0YPRhiDSr9Cz0LjQudC9INGF0LDRiCDSr9Kv0YHQs9GN0YUiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAi0KXQsNCy0YLQsNGBINGF0L7QvtGB0L7QvSDQsdCw0LnQvdCwIiwKICAgICAgICAiQ3JlYXRlZCI6ICLSrtKv0YHQs9GN0YHRjdC9IiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAi0J3RjdCy0YLRjdGA0YHRjdC9INCx0LDQudC90LAiLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAi0J3RjdGAINGO0LzRg9GDINC90YPRg9GGINKv0LMg0LHRg9GA0YPRgyDQsdCw0LnQvdCwIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogInBhc3N3b3JkX2hhc2gg0YTRg9C90LrRhiDQsdCw0LnRhdCz0q/QuSDQsdCw0LnQvdCwLiBQSFAg0YXRg9Cy0LjQu9Cx0LDRgCDQsNGF0LjRg9C70L3QsCDRg9GDLiIsCiAgICAgICAgIkdyb3VwIjogItCR0q/Qu9GN0LMiLAogICAgICAgICJPdGhlciI6ICLQkdGD0YHQsNC0IiwKICAgICAgICAiUmVhZCI6ICLQo9C90YjQuNGFIiwKICAgICAgICAiV3JpdGUiOiAi0JHQuNGH0LjRhSIsCiAgICAgICAgIkV4ZWN1dGUiOiAi0JDQttC40LvQu9GD0YPQu9Cw0YUiCiAgICAgIH0KICAgIH0sCiAgICB7CiAgICAgICJuYW1lIjogIkR1dGNoIiwKICAgICAgImNvZGUiOiAibmwiLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFwcE5hbWUiOiAiVGlueSBGaWxlIE1hbmFnZXIiLAogICAgICAgICJBcHBUaXRsZSI6ICJCZXN0YW5kc2JlaGVlciAiLAogICAgICAgICJMb2dpbiI6ICJJbmxvZ2dlbiIsCiAgICAgICAgIlVzZXJuYW1lIjogIkdlYnJ1aWtlcnNuYWFtIiwKICAgICAgICAiUGFzc3dvcmQiOiAiV2FjaHR3b29yZCIsCiAgICAgICAgIkxvZ291dCI6ICJVaXRsb2dnZW4iLAogICAgICAgICJDb3B5IjogIktvcGnDq3JlbiIsCiAgICAgICAgIlNhdmUiOiAiT3BzbGFhbiIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJBbGxlcyBzZWxlY3RlcmVuIiwKICAgICAgICAiVW5TZWxlY3RBbGwiOiAiQWxsZXMgZGVzZWxlY3RlcmVuIiwKICAgICAgICAiRmlsZSI6ICJCZXN0YW5kIiwKICAgICAgICAiQmFjayI6ICJUZXJ1ZyIsCiAgICAgICAgIlNpemUiOiAiR3Jvb3R0ZSIsCiAgICAgICAgIlBlcm1zIjogIlJlY2h0ZW4iLAogICAgICAgICJNb2RpZmllZCI6ICJCZXdlcmt0IiwKICAgICAgICAiT3duZXIiOiAiRWlnZW5hYXIiLAogICAgICAgICJTZWFyY2giOiAiWm9la2VuIiwKICAgICAgICAiTmV3SXRlbSI6ICJOaWV1dyBpdGVtIiwKICAgICAgICAiRm9sZGVyIjogIk1hcCIsCiAgICAgICAgIkRlbGV0ZSI6ICJWZXJ3aWpkZXIiLAogICAgICAgICJSZW5hbWUiOiAiSGVybm9lbSIsCiAgICAgICAgIkNvcHlUbyI6ICJLb3Bpw6tyZW4gbmFhciIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiRGlyZWN0ZSBsaW5rIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAiQmVzdGFuZGVuIHVwbG9hZGVuIiwKICAgICAgICAiQ2hhbmdlUGVybWlzc2lvbnMiOiAiUmVjaHRlbiBhYW5wYXNzZW4iLAogICAgICAgICJDb3B5aW5nIjogIkJlemlnIG1ldCBrb3Bpw6tyZW4iLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIk1hYWsgbmlldXcgaXRlbSIsCiAgICAgICAgIk5hbWUiOiAiTmFhbSIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIkdlYXZhbmNlZXJkZSBlZGl0b3IiLAogICAgICAgICJSZW1lbWJlck1lIjogIk9udGhvdWQgbWlqIiwKICAgICAgICAiQWN0aW9ucyI6ICJBY3RpZXMiLAogICAgICAgICJVcGxvYWQiOiAiVXBsb2FkZW4iLAogICAgICAgICJDYW5jZWwiOiAiQW5udWxlcmVuIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogIktlZXIgc2VsZWN0aWUgb20iLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICJEb2VsbWFwIiwKICAgICAgICAiSXRlbVR5cGUiOiAiSXRlbSB0eXBlIiwKICAgICAgICAiSXRlbU5hbWUiOiAiSXRlbSBuYWFtIiwKICAgICAgICAiQ3JlYXRlTm93IjogIk51IGFhbm1ha2VuIiwKICAgICAgICAiRG93bmxvYWQiOiAiRG93bmxvYWQiLAogICAgICAgICJPcGVuIjogIk9wZW5lbiIsCiAgICAgICAgIlVuWmlwIjogIlVpdHBha2tlbiIsCiAgICAgICAgIlVuWmlwVG9Gb2xkZXIiOiAiVWl0cGFra2VuIGluIG1hcCIsCiAgICAgICAgIkVkaXQiOiAiQmV3ZXJrZW4iLAogICAgICAgICJOb3JtYWxFZGl0b3IiOiAiU3RhbmRhYXJkIGVkaXRvciIsCiAgICAgICAgIkJhY2tVcCI6ICJCYWNrLXVwIG1ha2VuIiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIkJyb25tYXAiLAogICAgICAgICJGaWxlcyI6ICJCZXN0YW5kZW4iLAogICAgICAgICJNb3ZlIjogIlZlcnBsYWF0c2VuIiwKICAgICAgICAiQ2hhbmdlIjogIkFhbnBhc3NlbiIsCiAgICAgICAgIlNldHRpbmdzIjogIkluc3RlbGxpbmdlbiIsCiAgICAgICAgIkxhbmd1YWdlIjogIlRhYWwiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAiTWFwIGlzIGxlZWciLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIlBhcnRpdGllZ3Jvb3R0ZSIsCiAgICAgICAgIkVycm9yUmVwb3J0aW5nIjogIkZvdXRtZWxkaW5nZW4iLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAiVG9vbiB2ZXJib3JnZW4gYmVzdGFuZGVuIiwKICAgICAgICAiRnVsbCBzaXplIjogIlZvbGxlZGlnZSBncm9vdHRlIiwKICAgICAgICAiSGVscCI6ICJIZWxwIiwKICAgICAgICAiRnJlZSBvZiI6ICJSdWltdGUgdnJpaiIsCiAgICAgICAgIlByZXZpZXciOiAiVm9vcmJlZWxkIiwKICAgICAgICAiSGVscCBEb2N1bWVudHMiOiAiSGVscCBkb2N1bWVudGVuIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIlByb2JsZWVtIG1lbGRlbiIsCiAgICAgICAgIkdlbmVyYXRlIjogIkdlbmVyZWVyIiwKICAgICAgICAiRnVsbFNpemUiOiAiVm9sbGVkaWdlIGdyb290dGUiLAogICAgICAgICJGcmVlT2YiOiAiUnVpbXRlIHZyaWoiLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIkJlcmVrZW4gbWFwIGdyb290dGUiLAogICAgICAgICJQcm9jZXNzSUQiOiAiUHJvY2VzLUlEIiwKICAgICAgICAiQ3JlYXRlZCI6ICJBYW5nZW1hYWt0IiwKICAgICAgICAiSGlkZUNvbHVtbnMiOiAiVmVyYmVyZyBSZWNodGVuL0VpZ2VuYWFyIGtvbG9tbWVuIiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiVSBiZW50IGluZ2Vsb2dkIiwKICAgICAgICAiQ2hlY2sgTGF0ZXN0IFZlcnNpb24iOiAiQmVraWprIGxhYXRzdGUgdmVyc2llIiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAiR2VuZXJlZXIgZWVuIG5pZXV3ZSB3YWNodHdvb3JkIGhhc2giLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAiSW5sb2dnZW4gbWlzbHVrdC4gT25qdWlzdGUgZ2VicnVpa2Vyc25hYW0vd2FjaHR3b29yZCBjb21iaW5hdGllIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogInBhc3N3b3JkX2hhc2ggaXMgbmlldCBvbmRlcnN0ZXVuZCwgVXBncmFkZSBQSFAgdmVyc2llIiwKICAgICAgICAiQWR2YW5jZWQgU2VhcmNoIjogIkdlYXZhbmNlZXJkIHpvZWtlbiIsCiAgICAgICAgIkVycm9yIHdoaWxlIGNvcHlpbmcgZnJvbSI6ICJGb3V0IGJpaiBoZXQga29wacOrcmVuIHZhbiIsCiAgICAgICAgIk5vdGhpbmcgc2VsZWN0ZWQiOiAiTmlldHMgZ2VzZWxlY3RlZXJkIiwKICAgICAgICAiUGF0aHMgbXVzdCBiZSBub3QgZXF1YWwiOiAiUGFkZW4gbW9nZW4gbmlldCBnZWxpamsgemlqbiIsCiAgICAgICAgIlJlbmFtZWQgZnJvbSI6ICJIZXJub2VtZCBuYWFyIiwKICAgICAgICAiQXJjaGl2ZSBub3QgdW5wYWNrZWQiOiAiQXJjaGllZiBuaWV0IHVpdGdlcGFrdCIsCiAgICAgICAgIkRlbGV0ZWQiOiAiVmVyd2lqZGVyZCIsCiAgICAgICAgIkFyY2hpdmUgbm90IGNyZWF0ZWQiOiAiQXJjaGllZiBuaWV0IGFhbmdlbWFha3QiLAogICAgICAgICJDb3BpZWQgZnJvbSI6ICJHZWtvcGnDq2VyZCB2YW4iLAogICAgICAgICJQZXJtaXNzaW9ucyBjaGFuZ2UiOiAiUmVjaHRlbiBhYW5wYXNzZW4iLAogICAgICAgICJ0byI6ICJuYWFyIiwKICAgICAgICAiU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIlN1Y2Nlc3ZvbCBvcGdlc2xhZ2VuIiwKICAgICAgICAibm90IGZvdW5kISI6ICJuaWV0IGdldm9uZGVuISIsCiAgICAgICAgIkZpbGUgU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIkJlc3RhbmQgc3VjY2Vzdm9sIG9wZ2VzbGFnZW4iLAogICAgICAgICJBcmNoaXZlIjogIkFyY2hpZWYiLAogICAgICAgICJQZXJtaXNzaW9ucyBub3QgY2hhbmdlZCI6ICJSZWNodGVuIG5pZXQgYWFuZ2VwYXN0IiwKICAgICAgICAiU2VsZWN0IGZvbGRlciI6ICJTZWxlY3RlZXIgbWFwIiwKICAgICAgICAiU291cmNlIHBhdGggbm90IGRlZmluZWQiOiAiQnJvbm1hcCBpcyBuaWV0IGdlZGVmaW5pw6tlcmQiLAogICAgICAgICJhbHJlYWR5IGV4aXN0cyI6ICJiZXN0YWF0IGFsIiwKICAgICAgICAiRXJyb3Igd2hpbGUgbW92aW5nIGZyb20iOiAiRm91dCBiaWogaGV0IHZlcnBsYWF0c2VuIHZhbiIsCiAgICAgICAgIkNyZWF0ZSBhcmNoaXZlPyI6ICJNYWFrIGFyY2hpZWY/IiwKICAgICAgICAiSW52YWxpZCBmaWxlIG9yIGZvbGRlciBuYW1lIjogIk9uZ2VsZGlnZSBiZXN0YW5kcy0gb2YgbWFwbmFhbSIsCiAgICAgICAgIkFyY2hpdmUgdW5wYWNrZWQiOiAiQXJjaGllZiB1aXRnZXBha3QiLAogICAgICAgICJGaWxlIGV4dGVuc2lvbiBpcyBub3QgYWxsb3dlZCI6ICJCZXN0YW5kc3R5cGUgaXMgbmlldCB0b2VnZXN0YWFuIiwKICAgICAgICAiUm9vdCBwYXRoIjogIlBhZCBzdGFydHB1bnQiLAogICAgICAgICJFcnJvciB3aGlsZSByZW5hbWluZyBmcm9tIjogIkZvdXQgYmlqIGhldCBoZXJub2VtZW4gdmFuIiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAiQmVzdGFuZCBpcyBuaWV0IGdldm9uZGVuIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZGVsZXRpbmcgaXRlbXMiOiAiRm91dCBiaWogaGV0IHZlcndpamRlcmVuIHZhbiBpdGVtcyIsCiAgICAgICAgIkludmFsaWQgY2hhcmFjdGVycyBpbiBmaWxlIG5hbWUiOiAiT25nZWxkaWdlIGthcmFrdGVycyBpbiBiZXN0YW5kc25hYW0iLAogICAgICAgICJGSUxFIEVYVEVOU0lPTiBIQVMgTk9UIFNVUFBPUlRFRCI6ICJCRVNUQU5EU1RZUEUgSVMgTklFVCBPTkRFUlNURVVORCIsCiAgICAgICAgIlNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXIgZGVsZXRlZCI6ICJHZXNlbGVjdGVlcmRlIGJlc3RhbmRlbiBlbiBtYXBwZW4gdmVyd2lqZGVyZCIsCiAgICAgICAgIkVycm9yIHdoaWxlIGZldGNoaW5nIGFyY2hpdmUgaW5mbyI6ICJGb3V0IGJpaiBoZXQgdmVya3JpamdlbiB2YW4gYXJjaGllZiBpbmZvcm1hdGllIiwKICAgICAgICAiRGVsZXRlIHNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXJzPyI6ICJWZXJ3aWpkZXIgZGUgZ2VzZWxlY3RlZXJkZSBiZXN0YW5kZW4gZW4gbWFwcGVuPyIsCiAgICAgICAgIlNlYXJjaCBmaWxlIGluIGZvbGRlciBhbmQgc3ViZm9sZGVycy4uLiI6ICJab2VrIGJlc3RhbmQgaW4gbWFwIGVuIHN1Ym1hcHBlbi4uLiIsCiAgICAgICAgIkFjY2VzcyBkZW5pZWQuIElQIHJlc3RyaWN0aW9uIGFwcGxpY2FibGUiOiAiVG9lZ2FuZyBnZXdlaWdlcmQuIElQLWJlcGVya2luZyB2YW4gdG9lcGFzc2luZyIsCiAgICAgICAgIkludmFsaWQgY2hhcmFjdGVycyBpbiBmaWxlIG9yIGZvbGRlciBuYW1lIjogIk9uZ2VsZGlnZSBrYXJha3RlcnMgaW4gYmVzdGFuZHMtIG9mIG1hcG5hYW0iLAogICAgICAgICJPcGVyYXRpb25zIHdpdGggYXJjaGl2ZXMgYXJlIG5vdCBhdmFpbGFibGUiOiAiQmV3ZXJraW5nZW4gbWV0IGFyY2hpZXZlbiB6aWpuIG5pZXQgYmVzY2hpa2JhYXIiLAogICAgICAgICJGaWxlIG9yIGZvbGRlciB3aXRoIHRoaXMgcGF0aCBhbHJlYWR5IGV4aXN0cyI6ICJCZXN0YW5kIG9mIG1hcCBtZXQgZGl0IHBhZCBiZXN0YWF0IGFsIiwKICAgICAgICAiTW92ZWQgZnJvbSI6ICJWZXJwbGFhdHN0IHZhbiIsCiAgICAgICAgImEgZmlsZXMiOiAiYmVzdGFuZGVuIiwKICAgICAgICAiT2theSI6ICJPSyIsCiAgICAgICAgIkVudGVyIGhlcmUuLi4iOiAiVm9lciBoaWVyIGluLi4uIiwKICAgICAgICAiRW50ZXIgbmV3IGZpbGUgbmFtZSI6ICJWb2VyIG5pZXV3ZSBiZXN0YW5kc25hYW0gaW46wpDCjSIsCiAgICAgICAgIkZ1bGwgcGF0aCI6ICJWb2xsZWRpZyBwYXRoIiwKICAgICAgICAiRmlsZSBzaXplIjogIkJlc3RhbmRzZ3Jvb3R0ZcKPIiwKICAgICAgICAiSW1hZ2Ugc2l6ZXMiOiAiQWZiZWVsZGluZ3Nncm9vdHRlwo8iLAogICAgICAgICJDaGFyc2V0IjogIkthcmFrdGVyc2V0IiwKICAgICAgICAiSW1hZ2UiOiAiQWZiZWVsZGluZyIsCiAgICAgICAgIkF1ZGlvIjogIkF1ZGlvIiwKICAgICAgICAiVmlkZW8iOiAiVmlkZW8iLAogICAgICAgICJVcGxvYWQgZnJvbSBVUkwiOiAiVXBsb2FkIHZhbiBVUkwgIiwKICAgICAgICAiRmlsZXMgaW4gYXJjaGl2ZSI6ICJCZXN0YW5kZW4gaW4gYXJjaGllZiIsCiAgICAgICAgIlRvdGFsIHNpemUiOiAiVG90YWxlIGdyb290dGUiLAogICAgICAgICJDb21wcmVzc2lvbiI6ICJDb21wcmVzc2llIiwKICAgICAgICAiU2l6ZSBpbiBhcmNoaXZlIjogIkdyb290dGUgaW4gYXJjaGllZsKPIiwKICAgICAgICAiSW52YWxpZCBUb2tlbi4iOiAiT25nZWxkaWcgdG9rZW4iLAogICAgICAgICJGdWxsc2NyZWVuIjogIlZvbGxlZGlnIHNjaGVybcKPIiwKICAgICAgICAiVW5kbyI6ICJPbmdlZGFhbiBtYWtlbiIsCiAgICAgICAgIlJlZG8iOiAiT3BuaWV1dyBkb2VuIiwKICAgICAgICAiVGhlbWUiOiAiVGhlbWEiLAogICAgICAgICJTZWxlY3QgVGhlbWUiOiAiS2llcyB0aGVtYSIsCiAgICAgICAgIlNlbGVjdCBGb250IFNpemUiOiAiS2llcyBmb250Z3Jvb3R0ZSIsCiAgICAgICAgIkFyZSB5b3Ugc3VyZSB3YW50IHRvIHJlbmFtZT8iOiAiV2VldCB1IHpla2VyIGRhdCB1IGRlIG5hYW0gd2lsdCB3aWp6aWdlbj8iLAogICAgICAgICJBcmUgeW91IHN1cmUgd2FudCB0byI6ICJWZXJkZXIgZ2FhbiBtZXQiLAogICAgICAgICJkYXJrIjogImRvbmtlciIsCiAgICAgICAgImxpZ2h0IjogImxpY2h0IgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJEYW5zayIsCiAgICAgICJjb2RlIjogImRhIiwKICAgICAgInRyYW5zbGF0aW9uIjogewogICAgICAgICJBY2Nlc3MgZGVuaWVkLiBJUCByZXN0cmljdGlvbiBhcHBsaWNhYmxlIjogIkFkZ2FuZyBuw6ZndGV0LiBJUC1iZWdyw6Zuc25pbmcgZ8OmbGRlciIsCiAgICAgICAgIkFjdGlvbnMiOiAiSGFuZGxpbmdlciIsCiAgICAgICAgIkFkdmFuY2VkIFNlYXJjaCI6ICJBdmFuY2VyZXQgc8O4Z25pbmciLAogICAgICAgICJBZHZhbmNlZEVkaXRvciI6ICJBZHZhbmNlcmV0IEVkaXRvciIsCiAgICAgICAgIkFwcFRpdGxlIjogIkZpbGjDpW5kdGVyaW5nIiwKICAgICAgICAiQXJjaGl2ZSBub3QgY3JlYXRlZCI6ICJBcmtpdiBlciBpa2tlIG9wcmV0dGV0IiwKICAgICAgICAiQXJjaGl2ZSBub3QgdW5wYWNrZWQiOiAiQXJraXYgZXIgaWtrZSBwYWtrZXQgdWQiLAogICAgICAgICJBcmNoaXZlIHVucGFja2VkIjogIkFya2l2IGVyIHVkcGFra2V0IiwKICAgICAgICAiQXJjaGl2ZSI6ICJBcmtpdiIsCiAgICAgICAgIkJhY2siOiAiVGlsYmFnZSIsCiAgICAgICAgIkJhY2tVcCI6ICJCYWNrdXAiLAogICAgICAgICJDYWxjdWxhdGVGb2xkZXJTaXplIjogIkJlcmVnbiBtYXBwZXN0w7hycmVsc2UiLAogICAgICAgICJDYW5jZWwiOiAiQWZicnlkIiwKICAgICAgICAiQ2hhbmdlIjogIsOGbmRyZSIsCiAgICAgICAgIkNoYW5nZVBlcm1pc3Npb25zIjogIsOGbmRyZSB0aWxsYWRlbHNlciIsCiAgICAgICAgIkNoZWNrIExhdGVzdCBWZXJzaW9uIjogIlRqZWsgc2VuZXN0ZSB2ZXJzaW9uIiwKICAgICAgICAiQ29waWVkIGZyb20iOiAiS29waWVyZXQgZnJhIiwKICAgICAgICAiQ29weSI6ICJLb3BpIiwKICAgICAgICAiQ29weVRvIjogIktvcGllciB0aWwiLAogICAgICAgICJDb3B5aW5nIjogIktvcGllcmVyIiwKICAgICAgICAiQ3JlYXRlIGFyY2hpdmU/IjogIk9wcmV0IGFya2l2PyIsCiAgICAgICAgIkNyZWF0ZU5ld0l0ZW0iOiAiT3ByZXQgbnkiLAogICAgICAgICJDcmVhdGVOb3ciOiAiT3ByZXQgbnUiLAogICAgICAgICJDcmVhdGVkIjogIk9wcmV0dGV0IiwKICAgICAgICAiRGVsZXRlIHNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXJzPyI6ICJTbGV0IHZhbGd0ZSBmaWxlciBvZyBtYXBwZXI/IiwKICAgICAgICAiRGVsZXRlIjogIlNsZXQiLAogICAgICAgICJEZWxldGVkIjogIlNsZXR0ZXQiLAogICAgICAgICJEZXN0aW5hdGlvbkZvbGRlciI6ICJEZXN0aW5hdGlvbnNtYXBwZSIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAiRGlyZWt0ZSBsaW5rIiwKICAgICAgICAiRG93bmxvYWQiOiAiSGVudCIsCiAgICAgICAgIkVkaXQiOiAiUmVkaWdlciIsCiAgICAgICAgIkVycm9yIHdoaWxlIGNvcHlpbmcgZnJvbSI6ICJGZWpsIHZlZCBrb3BpZXJpbmcgZnJhIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZGVsZXRpbmcgaXRlbXMiOiAiRmVqbCB2ZWQgc2xldG5pbmcgYWYgZWxlbWVudGVyIiwKICAgICAgICAiRXJyb3Igd2hpbGUgZmV0Y2hpbmcgYXJjaGl2ZSBpbmZvIjogIkZlamwgdmVkIGhlbnRuaW5nIGFmIGFya2l2b3BseXNuaW5nZXIiLAogICAgICAgICJFcnJvciB3aGlsZSBtb3ZpbmcgZnJvbSI6ICJGZWpsIHZlZCBmbHl0bmluZyBmcmEiLAogICAgICAgICJFcnJvciB3aGlsZSByZW5hbWluZyBmcm9tIjogIkZlamwgdmVkIG9tZMO4Ym5pbmcgZnJhIiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAiRmVqbHJhcHBvcnRlcmluZyIsCiAgICAgICAgIkV4ZWN1dGUiOiAiVWRmw7hyIiwKICAgICAgICAiRklMRSBFWFRFTlNJT04gSEFTIE5PVCBTVVBQT1JURUQiOiAiRklMRVhURU5TSU9OIEVSIElLS0UgVU5ERVJTVMOYVFRFVCIsCiAgICAgICAgIkZpbGUgU2F2ZWQgU3VjY2Vzc2Z1bGx5IjogIkZpbCBibGV2IGdlbXQiLAogICAgICAgICJGaWxlIGV4dGVuc2lvbiBpcyBub3QgYWxsb3dlZCI6ICJGaWx0eXBlbmF2biBlciBpa2tlIHRpbGxhZHQiLAogICAgICAgICJGaWxlIG5vdCBmb3VuZCI6ICJGaWwgaWtrZSBmdW5kZXQiLAogICAgICAgICJGaWxlIG9yIGZvbGRlciB3aXRoIHRoaXMgcGF0aCBhbHJlYWR5IGV4aXN0cyI6ICJGaWwgZWxsZXIgbWFwcGUgbWVkIGRlbm5lIHN0aSBmaW5kZXMgYWxsZXJlZGUiLAogICAgICAgICJGaWxlIjogIkZpbChlcikiLAogICAgICAgICJGaWxlcyI6ICJGaWxlciIsCiAgICAgICAgIkZvbGRlciBpcyBlbXB0eSI6ICJNYXBwZW4gZXIgdG9tIiwKICAgICAgICAiRm9sZGVyIjogIk1hcHBlKHIpIiwKICAgICAgICAiRnJlZU9mIjogIkxlZGlnIGFmIiwKICAgICAgICAiRnVsbFNpemUiOiAiRnVsZCBzdMO4cnJlbHNlIiwKICAgICAgICAiR2VuZXJhdGUgbmV3IHBhc3N3b3JkIGhhc2giOiAiR2VuZXJlciBueSBhZGdhbmdza29kZS1oYXNoIiwKICAgICAgICAiR2VuZXJhdGUiOiAiR2VuZXJlciIsCiAgICAgICAgIkdyb3VwIjogIkdydXBwZSIsCiAgICAgICAgIkhlbHAgRG9jdW1lbnRzIjogIkhqw6ZscGVkb2t1bWVudGVyIiwKICAgICAgICAiSGVscCI6ICJIasOmbHAiLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICJTa2p1bCBrb2xvbm5lciIsCiAgICAgICAgIkludmFsaWQgY2hhcmFjdGVycyBpbiBmaWxlIG5hbWUiOiAiVWd5bGRpZ2UgdGVnbiBpIGZpbG5hdm4iLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBvciBmb2xkZXIgbmFtZSI6ICJVZ3lsZGlnZSB0ZWduIGkgZmlsLSBlbGxlciBtYXBwZW5hdm4iLAogICAgICAgICJJbnZhbGlkIGZpbGUgb3IgZm9sZGVyIG5hbWUiOiAiVWd5bGRpZ3QgZmlsLSBlbGxlciBtYXBwZW5hdm4iLAogICAgICAgICJJbnZlcnRTZWxlY3Rpb24iOiAiSW52ZXJ0ZXIgdmFsZ2V0IiwKICAgICAgICAiSXRlbU5hbWUiOiAiRW1uZSBuYXZuIiwKICAgICAgICAiSXRlbVR5cGUiOiAiRW1uZSB0eXBlIiwKICAgICAgICAiTGFuZ3VhZ2UiOiAiU3Byb2ciLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAiTG9naW4gbWlzbHlra2VkZXMuIFVneWxkaWd0IGJydWdlcm5hdm4gZWxsZXIgYWRnYW5nc2tvZGUiLAogICAgICAgICJMb2dpbiI6ICJMb2cgcMOlIiwKICAgICAgICAiTG9nb3V0IjogIkxvZyB1ZCIsCiAgICAgICAgIk1vZGlmaWVkIjogIsOGbmRyZXQiLAogICAgICAgICJNb3ZlIjogIkZseXQiLAogICAgICAgICJNb3ZlZCBmcm9tIjogIkZseXR0ZXQgZnJhIiwKICAgICAgICAiTmFtZSI6ICJOYXZuIiwKICAgICAgICAiTmV3SXRlbSI6ICJOeXQgZW1uZSIsCiAgICAgICAgIk5vcm1hbEVkaXRvciI6ICJTdGFuZGFyZCBFZGl0b3IiLAogICAgICAgICJOb3RoaW5nIHNlbGVjdGVkIjogIkludGV0IHZhbGd0IiwKICAgICAgICAiT3BlbiI6ICLDhWJlbiIsCiAgICAgICAgIk9wZXJhdGlvbnMgd2l0aCBhcmNoaXZlcyBhcmUgbm90IGF2YWlsYWJsZSI6ICJPcGVyYXRpb25lciBtZWQgYXJraXZlciBlciBpa2tlIHRpbGfDpm5nZWxpZ2UiLAogICAgICAgICJPdGhlciI6ICJBbmRldCIsCiAgICAgICAgIk93bmVyIjogIkVqZXIiLAogICAgICAgICJQYXJ0aXRpb25TaXplIjogIlBhcnRpdGlvbnNzdMO4cnJlbHNlIiwKICAgICAgICAiUGFzc3dvcmQiOiAiQWRnYW5nc2tvZGUiLAogICAgICAgICJQYXRocyBtdXN0IGJlIG5vdCBlcXVhbCI6ICJTdGllcm5lIG3DpSBpa2tlIHbDpnJlIGVucyIsCiAgICAgICAgIlBlcm1pc3Npb25zIGNoYW5nZWQiOiAiVGlsbGFkZWxzZXIgw6ZuZHJldCIsCiAgICAgICAgIlBlcm1pc3Npb25zIG5vdCBjaGFuZ2VkIjogIlRpbGxhZGVsc2VyIGlra2Ugw6ZuZHJldCIsCiAgICAgICAgIlBlcm1zIjogIlRpbGxhZGVsc2VyIiwKICAgICAgICAiUHJldmlldyI6ICJGb3Jow6VuZHN2aXNuaW5nIiwKICAgICAgICAiUmVhZCI6ICJMw6ZzIiwKICAgICAgICAiUmVuYW1lIjogIk9tZMO4YiIsCiAgICAgICAgIlJlbmFtZWQgZnJvbSI6ICJPbWTDuGJ0IGZyYSIsCiAgICAgICAgIlJlcG9ydCBJc3N1ZSI6ICJSYXBwb3J0w6lyIHByb2JsZW0iLAogICAgICAgICJSb290IHBhdGgiOiAiUm9kIG1hcHBlIiwKICAgICAgICAiU2F2ZSI6ICJHZW0iLAogICAgICAgICJTZWFyY2ggZmlsZSBpbiBmb2xkZXIgYW5kIHN1YmZvbGRlcnMuLi4iOiAiU8O4ZyBmaWwgaSBtYXBwZSBvZyB1bmRlcm1hcHBlci4uLiIsCiAgICAgICAgIlNlYXJjaCI6ICJTw7hnIiwKICAgICAgICAiU2VsZWN0IGZvbGRlciI6ICJWw6ZsZyBtYXBwZSIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICJWw6ZsZyBhbGxlIiwKICAgICAgICAiU2VsZWN0ZWQgZmlsZXMgYW5kIGZvbGRlciBkZWxldGVkIjogIlZhbGd0ZSBmaWxlciBvZyBtYXBwZSBzbGV0dGV0IiwKICAgICAgICAiU2V0dGluZ3MiOiAiSW5kc3RpbGxpbmdlciIsCiAgICAgICAgIlNob3dIaWRkZW5GaWxlcyI6ICJWaXMgc2tqdWx0ZSBmaWxlciIsCiAgICAgICAgIlNpemUiOiAiU3TDuHJyZWxzZSIsCiAgICAgICAgIlNvdXJjZSBwYXRoIG5vdCBkZWZpbmVkIjogIktpbGRlc3RpIGVyIGlra2UgZGVmaW5lcmV0IiwKICAgICAgICAiU291cmNlRm9sZGVyIjogIktpbGRlbWFwcGUiLAogICAgICAgICJUYXIiOiAiVGFyIiwKICAgICAgICAiVGhlbWUiOiAiVGVtYSIsCiAgICAgICAgIlVuU2VsZWN0QWxsIjogIkZyYXbDpmxnIGFsbGUiLAogICAgICAgICJVblppcCI6ICJQYWsgdWQiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIlBhayB1ZCBpIG1hcHBlIiwKICAgICAgICAiVXBsb2FkIjogIlVwbG9hZCIsCiAgICAgICAgIlVwbG9hZGluZ0ZpbGVzIjogIlVwbG9hZGVyIGZpbGVyIiwKICAgICAgICAiVXNlcm5hbWUiOiAiQnJ1Z2VybmF2biIsCiAgICAgICAgIldyaXRlIjogIlNrcml2IiwKICAgICAgICAiWW91IGFyZSBsb2dnZWQgaW4iOiAiRHUgZXIgbG9nZ2V0IGluZCIsCiAgICAgICAgIlppcCI6ICJaaXAiLAogICAgICAgICJhbHJlYWR5IGV4aXN0cyI6ICJla3Npc3RlcmVyIGFsbGVyZWRlIiwKICAgICAgICAiZGFyayI6ICJtw7hya3QiLAogICAgICAgICJsaWdodCI6ICJseXN0IiwKICAgICAgICAibm90IGNyZWF0ZWQiOiAiaWtrZSBvcHJldHRldCIsCiAgICAgICAgIm5vdCBkZWxldGVkIjogImlra2Ugc2xldHRldCIsCiAgICAgICAgIm5vdCBmb3VuZCEiOiAiaWtrZSBmdW5kZXQhIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogInBhc3N3b3JkX2hhc2ggZXIgaWtrZSB1bmRlcnN0w7h0dGV0LCBvcGdyYWRlciBQSFAtdmVyc2lvbmVuIiwKICAgICAgICAidG8iOiAidGlsIgogICAgICB9CiAgICB9LAogICAgewogICAgICAibmFtZSI6ICJCZW5nYWxpIiwKICAgICAgImNvZGUiOiAiYm4iLAogICAgICAidHJhbnNsYXRpb24iOiB7CiAgICAgICAgIkFjY2VzcyBkZW5pZWQuIElQIHJlc3RyaWN0aW9uIGFwcGxpY2FibGUiOiAi4KaF4KeN4Kav4Ka+4KaV4KeN4Ka44KeH4Ka4IOCmheCmuOCnjeCmrOCngOCmleCmvuCmsCDgppXgprDgpr4g4Ka54Kav4Ka84KeH4Kab4KeH4Ke3IOCmhuCmh+CmquCmvyDgprjgp4Dgpq7gpr7gpqzgpqbgp43gpqfgpqTgpr4g4Kaq4KeN4Kaw4Kav4KeL4Kac4KeN4KavIiwKICAgICAgICAiQWN0aW9ucyI6ICLgpo/gppXgprbgpqjgp43gprgiLAogICAgICAgICJBZHZhbmNlZCBTZWFyY2giOiAi4KaJ4Kao4KeN4Kao4KakIOCmheCmqOCngeCmuOCmqOCnjeCmp+CmvuCmqCIsCiAgICAgICAgIkFkdmFuY2VkRWRpdG9yIjogIuCmieCmqOCnjeCmqOCmpCDgpo/gpqHgpr/gpp/gprAiLAogICAgICAgICJBcHBUaXRsZSI6ICLgpqvgpr7gpofgprIg4Kau4KeN4Kav4Ka+4Kao4KeH4Kac4Ka+4KawIiwKICAgICAgICAiQXJjaGl2ZSBub3QgY3JlYXRlZCI6ICLgpobgprDgp43gppXgpr7gpofgpq0g4Kak4KeI4Kaw4Ka/IOCmleCmsOCmviDgprngpq/gprzgpqjgpr8iLAogICAgICAgICJBcmNoaXZlIG5vdCB1bnBhY2tlZCI6ICLgpobgprDgp43gppXgpr7gpofgpq0g4Kaq4KeN4Kav4Ka+4KaVIOCmleCmsOCmviDgprngpq/gprzgpqjgpr8iLAogICAgICAgICJBcmNoaXZlIHVucGFja2VkIjogIuCmhuCmsOCnjeCmleCmvuCmh+CmrSDgpobgpqjgpqrgp43gpq/gpr7gppUiLAogICAgICAgICJBcmNoaXZlIjogIuCmhuCmsOCnjeCmleCmvuCmh+CmrSIsCiAgICAgICAgIkJhY2siOiAi4Kaq4KeH4Kab4Kao4KeHIiwKICAgICAgICAiQmFja1VwIjogIuCmrOCnjeCmr+CmvuCmleCmhuCmqiIsCiAgICAgICAgIkNhbGN1bGF0ZUZvbGRlclNpemUiOiAi4Kar4KeL4Kay4KeN4Kah4Ka+4KawIOCmuOCmvuCmh+CmnCDgppfgpqPgpqjgpr4g4KaV4Kaw4KeB4KaoIiwKICAgICAgICAiQ2FuY2VsIjogIuCmrOCmvuCmpOCmv+CmsiDgppXgprDgp4HgpqgiLAogICAgICAgICJDaGFuZ2UiOiAi4Kaq4Kaw4Ka/4Kas4Kaw4KeN4Kak4KaoIiwKICAgICAgICAiQ2hhbmdlUGVybWlzc2lvbnMiOiAi4KaF4Kao4KeB4Kau4Kak4Ka/IOCmquCmsOCmv+CmrOCmsOCnjeCmpOCmqCDgppXgprDgp4HgpqgiLAogICAgICAgICJDaGVjayBMYXRlc3QgVmVyc2lvbiI6ICLgprjgprDgp43gpqzgprbgp4fgprcg4Ka44KaC4Ka44KeN4KaV4Kaw4KajIOCmquCmsOCngOCmleCnjeCmt+CmviDgppXgprDgp4HgpqgiLAogICAgICAgICJDb3BpZWQgZnJvbSI6ICLgpqXgp4fgppXgp4cg4KaV4Kaq4Ka/IOCmleCmsOCmviDgprngpq/gprzgp4fgppvgp4ciLAogICAgICAgICJDb3B5IjogIuCmleCmquCmvyIsCiAgICAgICAgIkNvcHlUbyI6ICLgppXgpqrgpr8g4KaV4Kaw4KeB4KaoIiwKICAgICAgICAiQ29weWluZyI6ICLgppXgpqrgpr8g4KaV4Kaw4Ka+IOCmueCmmuCnjeCmm+CnhyIsCiAgICAgICAgIkNyZWF0ZSBhcmNoaXZlPyI6ICLgpqjgpqTgp4Hgpqgg4KaG4Kaw4KeN4KaV4Ka+4KaH4KatIOCmpOCniOCmsOCmvyDgppXgprDgp4HgpqgiLAogICAgICAgICJDcmVhdGVOZXdJdGVtIjogIuCmqOCmpOCngeCmqCDgpobgpofgpp/gp4fgpq4g4Kak4KeI4Kaw4Ka/IOCmleCmsOCngeCmqCIsCiAgICAgICAgIkNyZWF0ZU5vdyI6ICLgpo/gppbgpqgg4Kak4KeI4Kaw4Ka/IOCmleCmsOCngeCmqCIsCiAgICAgICAgIkNyZWF0ZWQiOiAi4Kak4KeI4Kaw4Ka/IOCmleCmsOCmviDgprngpq/gprzgp4fgppvgp4ciLAogICAgICAgICJEZWxldGUgc2VsZWN0ZWQgZmlsZXMgYW5kIGZvbGRlcnM/IjogIuCmqOCmv+CmsOCnjeCmrOCmvuCmmuCmv+CmpCDgpqvgpr7gpofgprIg4KaP4Kas4KaCIOCmq+Cni+CmsuCnjeCmoeCmvuCmsCDgpq7gp4Hgppvgpqzgp4fgpqg/IiwKICAgICAgICAiRGVsZXRlIjogIuCmruCngeCmm+CnhyDgpqvgp4fgprLgpr4iLAogICAgICAgICJEZWxldGVkIjogIuCmruCngeCmm+CnhyDgpqvgp4fgprLgpr4g4Ka54Kav4Ka84KeH4Kab4KeHIiwKICAgICAgICAiRGVzdGluYXRpb25Gb2xkZXIiOiAi4KaX4Kao4KeN4Kak4Kas4KeN4KavIOCmq+Cni+CmsuCnjeCmoeCmvuCmsCIsCiAgICAgICAgIkRpcmVjdExpbmsiOiAi4Ka44Kaw4Ka+4Ka44Kaw4Ka/IOCmsuCmv+CmmeCnjeCmlSIsCiAgICAgICAgIkRvd25sb2FkIjogIuCmoeCmvuCmieCmqOCmsuCni+CmoSIsCiAgICAgICAgIkVkaXQiOiAi4KaP4Kah4Ka/4KafIiwKICAgICAgICAiRXJyb3Igd2hpbGUgY29weWluZyBmcm9tIjogIuCmpeCnh+CmleCnhyDgppXgpqrgpr8g4KaV4Kaw4Ka+4KawIOCmuOCmruCmr+CmvCDgpqTgp43gprDgp4Hgpp/gpr8iLAogICAgICAgICJFcnJvciB3aGlsZSBkZWxldGluZyBpdGVtcyI6ICLgpqXgp4fgppXgp4cg4Kau4KeB4Kab4KeHIOCmq+Cnh+CmsuCmvuCmsCDgprjgpq7gpq/gprwg4Kak4KeN4Kaw4KeB4Kaf4Ka/IiwKICAgICAgICAiRXJyb3Igd2hpbGUgZmV0Y2hpbmcgYXJjaGl2ZSBpbmZvIjogIuCmhuCmsOCnjeCmleCmvuCmh+CmrSDgpqTgpqXgp43gpq8g4KaG4Kao4Ka+4KawIOCmuOCmruCmr+CmvCDgpqTgp43gprDgp4Hgpp/gpr8iLAogICAgICAgICJFcnJvciB3aGlsZSBtb3ZpbmcgZnJvbSI6ICLgpqXgp4fgppXgp4cg4Ka44Kaw4Ka+4Kao4KeL4KawIOCmuOCmruCmr+CmvCDgpqTgp43gprDgp4Hgpp/gpr8iLAogICAgICAgICJFcnJvciB3aGlsZSByZW5hbWluZyBmcm9tIjogIuCmpeCnh+CmleCnhyDgpqjgpr7gpq4g4Kaq4Kaw4Ka/4Kas4Kaw4KeN4Kak4KaoIOCmleCmsOCmvuCmsCDgprjgpq7gpq/gprwg4Kak4KeN4Kaw4KeB4Kaf4Ka/IiwKICAgICAgICAiRXJyb3JSZXBvcnRpbmciOiAi4KaP4Kaw4KawIOCmsOCmv+CmquCni+CmsOCnjeCmn+Cmv+CmgiIsCiAgICAgICAgIkV4ZWN1dGUiOiAi4KaP4KaV4KeN4Ka44Ka/4KaV4Ka/4KaJ4KafIiwKICAgICAgICAiRklMRSBFWFRFTlNJT04gSEFTIE5PVCBTVVBQT1JURUQiOiAi4Kar4Ka+4KaH4KayIOCmj+CmleCnjeCmuOCmn+Cnh+CmqOCmtuCmqCDgprjgpq7gprDgp43gpqXgpr/gpqQg4Kao4Kav4Ka8IiwKICAgICAgICAiRmlsZSBTYXZlZCBTdWNjZXNzZnVsbHkiOiAi4Kar4Ka+4KaH4KayIOCmuOCmq+CmsuCmreCmvuCmrOCnhyDgprjgpoLgprDgppXgp43gprfgpr/gpqQg4Ka54Kav4Ka84KeH4Kab4KeH4Ke3IiwKICAgICAgICAiRmlsZSBleHRlbnNpb24gaXMgbm90IGFsbG93ZWQiOiAi4Kar4Ka+4KaH4KayIOCmj+CmleCnjeCmuOCmn+Cnh+CmqOCmtuCmqCDgpoXgpqjgp4Hgpq7gp4vgpqbgpr/gpqQg4Kao4Kav4Ka8IiwKICAgICAgICAiRmlsZSBub3QgZm91bmQiOiAi4Kar4Ka+4KaH4KayIOCmquCmvuCmk+Cmr+CmvOCmviDgpq/gpr7gpq/gprzgpqjgpr8iLAogICAgICAgICJGaWxlIG9yIGZvbGRlciB3aXRoIHRoaXMgcGF0aCBhbHJlYWR5IGV4aXN0cyI6ICLgpo/gpocg4Kaq4KalIOCmuOCmuSDgpqvgpr7gpofgprIg4Kas4Ka+IOCmq+Cni+CmsuCnjeCmoeCmvuCmsCDgpofgpqTgpr/gpq7gpqfgp43gpq/gp4fgpocg4Kas4Ka/4Kam4KeN4Kav4Kau4Ka+4KaoIiwKICAgICAgICAiRmlsZSI6ICLgpqvgpr7gpofgprIiLAogICAgICAgICJGaWxlcyI6ICLgpqvgpr7gpofgprLgprgiLAogICAgICAgICJGb2xkZXIgaXMgZW1wdHkiOiAi4Kar4KeL4Kay4KeN4Kah4Ka+4KawIOCmluCmvuCmsuCmvyIsCiAgICAgICAgIkZvbGRlciI6ICLgpqvgp4vgprLgp43gpqHgpr7gprAiLAogICAgICAgICJGcmVlT2YiOiAi4Kau4KeB4KaV4KeN4KakIiwKICAgICAgICAiRnVsbFNpemUiOiAi4Kar4KeB4KayIOCmuOCmvuCmh+CmnCIsCiAgICAgICAgIkdlbmVyYXRlIG5ldyBwYXNzd29yZCBoYXNoIjogIuCmqOCmpOCngeCmqCDgpqrgpr7gprjgppPgpq/gprzgpr7gprDgp43gpqEg4Ka54KeN4Kav4Ka+4Ka2IOCmpOCniOCmsOCmvyDgppXgprDgp4HgpqgiLAogICAgICAgICJHZW5lcmF0ZSI6ICLgpongp47gpqrgpqjgp43gpqgiLAogICAgICAgICJHcm91cCI6ICLgppfgp43gprDgp4HgpqoiLAogICAgICAgICJIZWxwIERvY3VtZW50cyI6ICLgprngp4fgprLgp43gpqog4Kah4KaV4KeB4Kau4KeH4Kao4KeN4Kaf4Ka4IiwKICAgICAgICAiSGVscCI6ICLgprjgpr7gprngpr7gpq/gp43gpq8iLAogICAgICAgICJIaWRlQ29sdW1ucyI6ICLgppXgprLgpr7gpq4g4Kay4KeB4KaV4Ka+4KaoIiwKICAgICAgICAiSW52YWxpZCBjaGFyYWN0ZXJzIGluIGZpbGUgbmFtZSI6ICLgpqvgpr7gpofgprLgp4fgprAg4Kao4Ka+4Kau4KeHIOCmheCmrOCniOCmpyDgpoXgppXgp43gprfgprAiLAogICAgICAgICJJbnZhbGlkIGNoYXJhY3RlcnMgaW4gZmlsZSBvciBmb2xkZXIgbmFtZSI6ICLgpqvgpr7gpofgprIg4Kas4Ka+IOCmq+Cni+CmsuCnjeCmoeCmvuCmsCDgpqjgpr7gpq7gp4fgprAg4KaF4Kas4KeI4KanIOCmheCmleCnjeCmt+CmsCIsCiAgICAgICAgIkludmFsaWQgZmlsZSBvciBmb2xkZXIgbmFtZSI6ICLgpoXgpqzgp4jgpqcg4Kar4Ka+4KaH4KayIOCmrOCmviDgpqvgp4vgprLgp43gpqHgpr7gprDgp4fgprAg4Kao4Ka+4KauIiwKICAgICAgICAiSW52ZXJ0U2VsZWN0aW9uIjogIuCmieCmsuCnjeCmn+CnhyDgpqjgpr/gprDgp43gpqzgpr7gpprgpqgg4KaV4Kaw4KeB4KaoIiwKICAgICAgICAiSXRlbU5hbWUiOiAi4KaG4KaH4Kaf4KeH4KauIOCmqOCmvuCmriIsCiAgICAgICAgIkl0ZW1UeXBlIjogIuCmhuCmh+Cmn+Cnh+CmriDgpqfgprDgpqgiLAogICAgICAgICJMYW5ndWFnZSI6ICLgpq3gpr7gprfgpr4iLAogICAgICAgICJMb2dpbiBmYWlsZWQuIEludmFsaWQgdXNlcm5hbWUgb3IgcGFzc3dvcmQiOiAi4Kay4KaX4KaH4KaoIOCmrOCnjeCmr+CmsOCnjeCmpS4g4KaF4Kas4KeI4KanIOCmrOCnjeCmr+CmrOCmueCmvuCmsOCmleCmvuCmsOCngOCmsCDgpqjgpr7gpq4g4Kas4Ka+IOCmquCmvuCmuOCmk+Cmr+CmvOCmvuCmsOCnjeCmoSIsCiAgICAgICAgIkxvZ2luIjogIuCmsuCml+Cmh+CmqCIsCiAgICAgICAgIkxvZ291dCI6ICLgprLgppfgpobgpongpp8iLAogICAgICAgICJNb2RpZmllZCI6ICLgpqrgprDgpr/gpqzgprDgp43gpqTgpr/gpqQiLAogICAgICAgICJNb3ZlIjogIuCmuOCmsOCmvuCmqCIsCiAgICAgICAgIk1vdmVkIGZyb20iOiAi4Kal4KeH4KaV4KeHIOCmuOCmsOCmvuCmqOCniyIsCiAgICAgICAgIk5hbWUiOiAi4Kao4Ka+4KauIiwKICAgICAgICAiTmV3SXRlbSI6ICLgpqjgpqTgp4Hgpqgg4KaG4KaH4Kaf4KeH4KauIiwKICAgICAgICAiTm9ybWFsRWRpdG9yIjogIuCmuOCmvuCmp+CmvuCmsOCmoyDgpo/gpqHgpr/gpp/gprAiLAogICAgICAgICJOb3RoaW5nIHNlbGVjdGVkIjogIuCmleCmv+Cmm+CngeCmhyDgpqjgpr/gprDgp43gpqzgpr7gpprgpr/gpqQg4Kao4Kav4Ka8IiwKICAgICAgICAiT3BlbiI6ICLgppbgp4vgprLgpr4iLAogICAgICAgICJPcGVyYXRpb25zIHdpdGggYXJjaGl2ZXMgYXJlIG5vdCBhdmFpbGFibGUiOiAi4KaG4Kaw4KeN4KaV4Ka+4KaH4KatIOCmuOCmuSDgpoXgpqrgpr7gprDgp4fgprbgpqgg4Kaq4Ka+4KaT4Kav4Ka84Ka+IOCmr+CmvuCmr+CmvOCmqOCmvyIsCiAgICAgICAgIk90aGVyIjogIuCmheCmqOCnjeCmr+CmvuCmqOCnjeCmryIsCiAgICAgICAgIk93bmVyIjogIuCmruCmvuCmsuCmv+CmlSIsCiAgICAgICAgIlBhcnRpdGlvblNpemUiOiAi4Kaq4Ka+4Kaw4KeN4Kaf4Ka/4Ka24Kao4KeH4KawIOCmruCmvuCmqiIsCiAgICAgICAgIlBhc3N3b3JkIjogIuCmquCmvuCmuOCmk+Cmr+CmvOCmvuCmsOCnjeCmoSIsCiAgICAgICAgIlBhdGhzIG11c3QgYmUgbm90IGVxdWFsIjogIuCmquCmpSDgprjgpq7gpr7gpqgg4Ka54Kak4KeHIOCmueCmrOCnhyDgpqjgpr4iLAogICAgICAgICJQZXJtaXNzaW9ucyBjaGFuZ2VkIjogIuCmheCmqOCngeCmruCmpOCmvyDgpqrgprDgpr/gpqzgprDgp43gpqTgpqgiLAogICAgICAgICJQZXJtaXNzaW9ucyBub3QgY2hhbmdlZCI6ICLgpoXgpqjgp4Hgpq7gpqTgpr8g4Kaq4Kaw4Ka/4Kas4Kaw4KeN4Kak4KaoIOCmleCmsOCmviDgprngpq/gprzgpqjgpr8iLAogICAgICAgICJQZXJtcyI6ICLgpqrgpr7gprDgpq7gprgiLAogICAgICAgICJQcmV2aWV3IjogIuCmquCnguCmsOCnjeCmrOCmsOCnguCmqiIsCiAgICAgICAgIlJlYWQiOiAi4Kaq4Kah4Ka84KeB4KaoIiwKICAgICAgICAiUmVuYW1lIjogIuCmqOCmvuCmriDgpqrgprDgpr/gpqzgprDgp43gpqTgpqgg4KaV4Kaw4Ka+IOCmueCmr+CmvOCnh+Cmm+CnhyIsCiAgICAgICAgIlJlbmFtZWQgZnJvbSI6ICLgpqXgp4fgppXgp4cg4Kao4Ka+4KauIOCmquCmsOCmv+CmrOCmsOCnjeCmpOCmqCDgppXgprDgpr4g4Ka54Kav4Ka84KeH4Kab4KeHIiwKICAgICAgICAiUmVwb3J0IElzc3VlIjogIuCmh+CmuOCnjeCmr+CngeCmuCDgprDgpr/gpqrgp4vgprDgp43gpp8g4KaV4Kaw4KeB4KaoIiwKICAgICAgICAiUm9vdCBwYXRoIjogIuCmsOCngeCmnyDgpqrgpqUiLAogICAgICAgICJTYXZlIjogIuCmuOCmguCmsOCmleCnjeCmt+CmoyIsCiAgICAgICAgIlNlYXJjaCBmaWxlIGluIGZvbGRlciBhbmQgc3ViZm9sZGVycy4uLiI6ICLgpqvgp4vgprLgp43gpqHgpr7gprAg4KaP4Kas4KaCIOCmuOCmvuCmrOCmq+Cni+CmsuCnjeCmoeCmvuCmsOCnhyDgpqvgpr7gpofgprIg4KaF4Kao4KeB4Ka44Kao4KeN4Kan4Ka+4KaoIOCmleCmsOCngeCmqC4uLiIsCiAgICAgICAgIlNlYXJjaCI6ICLgpoXgpqjgp4Hgprjgpqjgp43gpqfgpr7gpqgg4KaV4Kaw4KeB4KaoIiwKICAgICAgICAiU2VsZWN0IGZvbGRlciI6ICLgpqvgp4vgprLgp43gpqHgpr7gprAg4Kao4Ka/4Kaw4KeN4Kas4Ka+4Kaa4KaoIOCmleCmsOCngeCmqCIsCiAgICAgICAgIlNlbGVjdEFsbCI6ICLgprjgpqwg4Kao4Ka/4Kaw4KeN4Kas4Ka+4Kaa4KaoIOCmleCmsOCngeCmqCIsCiAgICAgICAgIlNlbGVjdGVkIGZpbGVzIGFuZCBmb2xkZXIgZGVsZXRlZCI6ICLgpqjgpr/gprDgp43gpqzgpr7gpprgpr/gpqQg4Kar4Ka+4KaH4KayIOCmj+CmrOCmgiDgpqvgp4vgprLgp43gpqHgpr7gprAg4Kau4KeB4Kab4KeHIOCmq+Cnh+CmsuCmviDgprngpq/gprzgp4fgppvgp4ciLAogICAgICAgICJTZXR0aW5ncyI6ICLgprjgp4fgpp/gpr/gpoLgprgiLAogICAgICAgICJTaG93SGlkZGVuRmlsZXMiOiAi4KaX4KeL4Kaq4KaoIOCmq+CmvuCmh+CmsuCml+CngeCmsuCniyDgpqbgp4fgppbgp4HgpqgiLAogICAgICAgICJTaXplIjogIuCmuOCmvuCmh+CmnCIsCiAgICAgICAgIlNvdXJjZSBwYXRoIG5vdCBkZWZpbmVkIjogIuCmuOCni+CmsOCnjeCmuCDgpqrgpqUg4Ka44KaC4Kac4KeN4Kae4Ka+4Kav4Ka84Ka/4KakIOCmleCmsOCmviDgprngpq/gprzgpqjgpr8iLAogICAgICAgICJTb3VyY2VGb2xkZXIiOiAi4Ka44KeL4Kaw4KeN4Ka4IOCmq+Cni+CmsuCnjeCmoeCmvuCmsCIsCiAgICAgICAgIlRhciI6ICLgpp/gpr7gprAiLAogICAgICAgICJUaGVtZSI6ICLgpqXgpr/gpq4iLAogICAgICAgICJVblNlbGVjdEFsbCI6ICLgprjgprDgpr/gpq/gprzgp4cg4Kar4KeH4Kay4KeB4KaoIOCmuOCmrCIsCiAgICAgICAgIlVuWmlwIjogIuCmhuCmqOCmnOCmv+CmqiDgppXgprDgp4HgpqgiLAogICAgICAgICJVblppcFRvRm9sZGVyIjogIuCmq+Cni+CmsuCnjeCmoeCmvuCmsOCnhyDgpobgpqjgppzgpr/gpqoiLAogICAgICAgICJVcGxvYWQiOiAi4KaG4Kaq4Kay4KeL4KahIiwKICAgICAgICAiVXBsb2FkaW5nRmlsZXMiOiAi4Kar4Ka+4KaH4KayIOCmhuCmquCmsuCni+CmoSDgppXgprDgpr4g4Ka54Kaa4KeN4Kab4KeHIiwKICAgICAgICAiVXNlcm5hbWUiOiAi4Kas4KeN4Kav4Kas4Ka54Ka+4Kaw4KaV4Ka+4Kaw4KeA4KawIOCmqOCmvuCmriIsCiAgICAgICAgIldyaXRlIjogIuCmsuCmv+CmluCngeCmqCIsCiAgICAgICAgIllvdSBhcmUgbG9nZ2VkIGluIjogIuCmhuCmquCmqOCmvyDgprLgppcg4KaH4KaoIOCmleCmsOCmm+Cnh+CmqCIsCiAgICAgICAgIlppcCI6ICLgppzgpr/gpqoiLAogICAgICAgICJhbHJlYWR5IGV4aXN0cyI6ICLgpobgppfgp4cg4Kal4KeH4KaV4KeH4KaHIOCmhuCmm+CnhyIsCiAgICAgICAgImRhcmsiOiAi4Kah4Ka+4Kaw4KeN4KaVIiwKICAgICAgICAibGlnaHQiOiAi4Kay4Ka+4KaH4KafIiwKICAgICAgICAibm90IGNyZWF0ZWQiOiAi4Kak4KeI4Kaw4Ka/IOCmleCmsOCmviDgprngpq/gprzgpqjgpr8iLAogICAgICAgICJub3QgZGVsZXRlZCI6ICLgpq7gp4Hgppvgp4cg4Kar4KeH4Kay4Ka+IOCmueCmr+CmvOCmqOCmvyIsCiAgICAgICAgIm5vdCBmb3VuZCEiOiAi4Kaq4Ka+4KaT4Kav4Ka84Ka+IOCmr+CmvuCmr+CmvCDgpqjgpr8hIiwKICAgICAgICAicGFzc3dvcmRfaGFzaCBub3Qgc3VwcG9ydGVkLCBVcGdyYWRlIFBIUCB2ZXJzaW9uIjogIuCmquCmvuCmuOCmk+Cmr+CmvOCmvuCmsOCnjeCmoV/gprngp43gpq/gpr7gprYg4Ka44Kau4Kaw4KeN4Kal4Ka/4KakIOCmqOCmr+CmvCwg4Kaq4Ka/4KaP4KaH4Kaa4Kaq4Ka/IOCmreCmvuCmsOCnjeCmuOCmqCDgpobgpqrgppfgp43gprDgp4fgpqEg4KaV4Kaw4KeB4KaoIiwKICAgICAgICAidG8iOiAidG8iCiAgICAgIH0KICAgIH0KICBdCn0K';
return base64_decode($data);
}

/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */
function fm_get_size($file)
{
    static $iswin = null;
    static $isdarwin = null;
    static $exec_works = null;

    // Set static variables once
    if ($iswin === null) {
        $iswin = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        $isdarwin = strtoupper(PHP_OS) === 'DARWIN';
        $exec_works = function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') === 'EXEC';
    }

    // Attempt shell command if exec is available
    if ($exec_works) {
        $arg = escapeshellarg($file);
        $cmd = $iswin ? "for %F in (\"$file\") do @echo %~zF" : ($isdarwin ? "stat -f%z $arg" : "stat -c%s $arg");
        @exec($cmd, $output);

        if (!empty($output) && ctype_digit($size = trim(implode("\n", $output)))) {
            return $size;
        }
    }

    // Attempt Windows COM interface for Windows systems
    if ($iswin && class_exists('COM')) {
        try {
            $fsobj = new COM('Scripting.FileSystemObject');
            $f = $fsobj->GetFile(realpath($file));
            if (ctype_digit($size = $f->Size)) {
                return $size;
            }
        } catch (Exception $e) {
            // COM failed, fallback to filesize
        }
    }

    // Default to PHP's filesize function
    return filesize($file);
}


/**
 * Get nice filesize
 * @param int $size
 * @return string
 */
function fm_get_filesize($size)
{
    $size = (float) $size;
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $power = ($size > 0) ? floor(log($size, 1024)) : 0;
    $power = ($power > (count($units) - 1)) ? (count($units) - 1) : $power;
    return sprintf('%s %s', round($size / pow(1024, $power), 2), $units[$power]);
}

/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */
function fm_get_zif_info($path, $ext)
{
    if ($ext == 'zip' && function_exists('zip_open')) {
        $arch = @zip_open($path);
        if ($arch) {
            $filenames = array();
            while ($zip_entry = @zip_read($arch)) {
                $zip_name = @zip_entry_name($zip_entry);
                $zip_folder = substr($zip_name, -1) == '/';
                $filenames[] = array(
                    'name' => $zip_name,
                    'filesize' => @zip_entry_filesize($zip_entry),
                    'compressed_size' => @zip_entry_compressedsize($zip_entry),
                    'folder' => $zip_folder
                    //'compression_method' => zip_entry_compressionmethod($zip_entry),
                );
            }
            @zip_close($arch);
            return $filenames;
        }
    } elseif ($ext == 'tar' && class_exists('PharData')) {
        $archive = new PharData($path);
        $filenames = array();
        foreach (new RecursiveIteratorIterator($archive) as $file) {
            $parent_info = $file->getPathInfo();
            $zip_name = str_replace("phar://" . $path, '', $file->getPathName());
            $zip_name = substr($zip_name, ($pos = strpos($zip_name, '/')) !== false ? $pos + 1 : 0);
            $zip_folder = $parent_info->getFileName();
            $zip_info = new SplFileInfo($file);
            $filenames[] = array(
                'name' => $zip_name,
                'filesize' => $zip_info->getSize(),
                'compressed_size' => $file->getCompressedSize(),
                'folder' => $zip_folder
            );
        }
        return $filenames;
    }
    return false;
}

/**
 * Encode html entities
 * @param string $text
 * @return string
 */
function fm_enc($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */
function fm_isvalid_filename($text)
{
    return (strpbrk($text, '/?%*:|"<>') === FALSE) ? true : false;
}

/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */
function fm_set_msg($msg, $status = 'ok')
{
    $_SESSION[FM_SESSION_ID]['message'] = $msg;
    $_SESSION[FM_SESSION_ID]['status'] = $status;
}

/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */
function fm_is_utf8($string)
{
    return preg_match('//u', $string);
}

/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */
function fm_convert_win($filename)
{
    if (FM_IS_WIN && function_exists('iconv')) {
        $filename = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $filename);
    }
    return $filename;
}

/**
 * @param $obj
 * @return array
 */
function fm_object_to_array($obj)
{
    if (!is_object($obj) && !is_array($obj)) {
        return $obj;
    }
    if (is_object($obj)) {
        $obj = get_object_vars($obj);
    }
    return array_map('fm_object_to_array', $obj);
}

/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */
function fm_get_file_icon_class($path)
{
    // get extension
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    switch ($ext) {
        case 'ico':
        case 'gif':
        case 'jpg':
        case 'jpeg':
        case 'jpc':
        case 'jp2':
        case 'jpx':
        case 'xbm':
        case 'wbmp':
        case 'png':
        case 'bmp':
        case 'tif':
        case 'tiff':
        case 'webp':
        case 'avif':
        case 'svg':
            $img = 'fa fa-picture-o';
            break;
        case 'passwd':
        case 'ftpquota':
        case 'sql':
        case 'js':
        case 'ts':
        case 'jsx':
        case 'tsx':
        case 'hbs':
        case 'json':
        case 'sh':
        case 'config':
        case 'twig':
        case 'tpl':
        case 'md':
        case 'gitignore':
        case 'c':
        case 'cpp':
        case 'cs':
        case 'py':
        case 'rs':
        case 'map':
        case 'lock':
        case 'dtd':
        case 'ps1':
            $img = 'fa fa-file-code-o';
            break;
        case 'txt':
        case 'ini':
        case 'conf':
        case 'log':
        case 'htaccess':
        case 'yaml':
        case 'yml':
        case 'toml':
        case 'tmp':
        case 'top':
        case 'bot':
        case 'dat':
        case 'bak':
        case 'htpasswd':
        case 'pl':
            $img = 'fa fa-file-text-o';
            break;
        case 'css':
        case 'less':
        case 'sass':
        case 'scss':
            $img = 'fa fa-css3';
            break;
        case 'bz2':
        case 'tbz2':
        case 'tbz':
        case 'zip':
        case 'rar':
        case 'gz':
        case 'tgz':
        case 'tar':
        case '7z':
        case 'xz':
        case 'txz':
        case 'zst':
        case 'tzst':
            $img = 'fa fa-file-archive-o';
            break;
        case 'php':
        case 'php4':
        case 'php5':
        case 'phps':
        case 'phtml':
            $img = 'fa fa-code';
            break;
        case 'htm':
        case 'html':
        case 'shtml':
        case 'xhtml':
            $img = 'fa fa-html5';
            break;
        case 'xml':
        case 'xsl':
            $img = 'fa fa-file-excel-o';
            break;
        case 'wav':
        case 'mp3':
        case 'mp2':
        case 'm4a':
        case 'aac':
        case 'ogg':
        case 'oga':
        case 'wma':
        case 'mka':
        case 'flac':
        case 'ac3':
        case 'tds':
            $img = 'fa fa-music';
            break;
        case 'm3u':
        case 'm3u8':
        case 'pls':
        case 'cue':
        case 'xspf':
            $img = 'fa fa-headphones';
            break;
        case 'avi':
        case 'mpg':
        case 'mpeg':
        case 'mp4':
        case 'm4v':
        case 'flv':
        case 'f4v':
        case 'ogm':
        case 'ogv':
        case 'mov':
        case 'mkv':
        case '3gp':
        case 'asf':
        case 'wmv':
        case 'webm':
            $img = 'fa fa-file-video-o';
            break;
        case 'eml':
        case 'msg':
            $img = 'fa fa-envelope-o';
            break;
        case 'xls':
        case 'xlsx':
        case 'ods':
            $img = 'fa fa-file-excel-o';
            break;
        case 'csv':
            $img = 'fa fa-file-text-o';
            break;
        case 'bak':
        case 'swp':
            $img = 'fa fa-clipboard';
            break;
        case 'doc':
        case 'docx':
        case 'odt':
            $img = 'fa fa-file-word-o';
            break;
        case 'ppt':
        case 'pptx':
            $img = 'fa fa-file-powerpoint-o';
            break;
        case 'ttf':
        case 'ttc':
        case 'otf':
        case 'woff':
        case 'woff2':
        case 'eot':
        case 'fon':
            $img = 'fa fa-font';
            break;
        case 'pdf':
            $img = 'fa fa-file-pdf-o';
            break;
        case 'psd':
        case 'ai':
        case 'eps':
        case 'fla':
        case 'swf':
            $img = 'fa fa-file-image-o';
            break;
        case 'exe':
        case 'msi':
            $img = 'fa fa-file-o';
            break;
        case 'bat':
            $img = 'fa fa-terminal';
            break;
        default:
            $img = 'fa fa-info-circle';
    }

    return $img;
}

/**
 * Get image files extensions
 * @return array
 */
function fm_get_image_exts()
{
    return array('ico', 'gif', 'jpg', 'jpeg', 'jpc', 'jp2', 'jpx', 'xbm', 'wbmp', 'png', 'bmp', 'tif', 'tiff', 'psd', 'svg', 'webp', 'avif');
}

/**
 * Get video files extensions
 * @return array
 */
function fm_get_video_exts()
{
    return array('avi', 'webm', 'wmv', 'mp4', 'm4v', 'ogm', 'ogv', 'mov', 'mkv');
}

/**
 * Get audio files extensions
 * @return array
 */
function fm_get_audio_exts()
{
    return array('wav', 'mp3', 'ogg', 'm4a');
}

/**
 * Get text file extensions
 * @return array
 */
function fm_get_text_exts()
{
    return array(
        'txt',
        'css',
        'ini',
        'conf',
        'log',
        'htaccess',
        'passwd',
        'ftpquota',
        'sql',
        'js',
        'ts',
        'jsx',
        'tsx',
        'mjs',
        'json',
        'sh',
        'config',
        'php',
        'php4',
        'php5',
        'phps',
        'phtml',
        'htm',
        'html',
        'shtml',
        'xhtml',
        'xml',
        'xsl',
        'm3u',
        'm3u8',
        'pls',
        'cue',
        'bash',
        'vue',
        'eml',
        'msg',
        'csv',
        'bat',
        'twig',
        'tpl',
        'md',
        'gitignore',
        'less',
        'sass',
        'scss',
        'c',
        'cpp',
        'cs',
        'py',
        'go',
        'zsh',
        'swift',
        'map',
        'lock',
        'dtd',
        'svg',
        'asp',
        'aspx',
        'asx',
        'asmx',
        'ashx',
        'jsp',
        'jspx',
        'cgi',
        'dockerfile',
        'ruby',
        'yml',
        'yaml',
        'toml',
        'vhost',
        'scpt',
        'applescript',
        'csx',
        'cshtml',
        'c++',
        'coffee',
        'cfm',
        'rb',
        'graphql',
        'mustache',
        'jinja',
        'http',
        'handlebars',
        'java',
        'es',
        'es6',
        'markdown',
        'wiki',
        'tmp',
        'top',
        'bot',
        'dat',
        'bak',
        'htpasswd',
        'pl',
        'ps1'
    );
}

/**
 * Get mime types of text files
 * @return array
 */
function fm_get_text_mimes()
{
    return array(
        'application/xml',
        'application/javascript',
        'application/x-javascript',
        'image/svg+xml',
        'message/rfc822',
        'application/json',
    );
}

/**
 * Get file names of text files w/o extensions
 * @return array
 */
function fm_get_text_names()
{
    return array(
        'license',
        'readme',
        'authors',
        'contributors',
        'changelog',
    );
}

/**
 * Get online docs viewer supported files extensions
 * @return array
 */
function fm_get_onlineViewer_exts()
{
    return array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'ppt', 'pptx', 'ai', 'psd', 'dxf', 'xps', 'rar', 'odt', 'ods');
}

/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */
function fm_get_file_mimes($extension)
{
    $fileTypes['swf'] = 'application/x-shockwave-flash';
    $fileTypes['pdf'] = 'application/pdf';
    $fileTypes['exe'] = 'application/octet-stream';
    $fileTypes['zip'] = 'application/zip';
    $fileTypes['doc'] = 'application/msword';
    $fileTypes['xls'] = 'application/vnd.ms-excel';
    $fileTypes['ppt'] = 'application/vnd.ms-powerpoint';
    $fileTypes['gif'] = 'image/gif';
    $fileTypes['png'] = 'image/png';
    $fileTypes['jpeg'] = 'image/jpg';
    $fileTypes['jpg'] = 'image/jpg';
    $fileTypes['webp'] = 'image/webp';
    $fileTypes['avif'] = 'image/avif';
    $fileTypes['rar'] = 'application/rar';

    $fileTypes['ra'] = 'audio/x-pn-realaudio';
    $fileTypes['ram'] = 'audio/x-pn-realaudio';
    $fileTypes['ogg'] = 'audio/x-pn-realaudio';

    $fileTypes['wav'] = 'video/x-msvideo';
    $fileTypes['wmv'] = 'video/x-msvideo';
    $fileTypes['avi'] = 'video/x-msvideo';
    $fileTypes['asf'] = 'video/x-msvideo';
    $fileTypes['divx'] = 'video/x-msvideo';

    $fileTypes['mp3'] = 'audio/mpeg';
    $fileTypes['mp4'] = 'audio/mpeg';
    $fileTypes['mpeg'] = 'video/mpeg';
    $fileTypes['mpg'] = 'video/mpeg';
    $fileTypes['mpe'] = 'video/mpeg';
    $fileTypes['mov'] = 'video/quicktime';
    $fileTypes['swf'] = 'video/quicktime';
    $fileTypes['3gp'] = 'video/quicktime';
    $fileTypes['m4a'] = 'video/quicktime';
    $fileTypes['aac'] = 'video/quicktime';
    $fileTypes['m3u'] = 'video/quicktime';

    $fileTypes['php'] = ['application/x-php'];
    $fileTypes['html'] = ['text/html'];
    $fileTypes['txt'] = ['text/plain'];
    //Unknown mime-types should be 'application/octet-stream'
    if (empty($fileTypes[$extension])) {
        $fileTypes[$extension] = ['application/octet-stream'];
    }
    return $fileTypes[$extension];
}

/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */
function scan($dir = '', $filter = '')
{
    $path = FM_ROOT_PATH . '/' . $dir;
    if ($path) {
        $ite = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $rii = new RegexIterator($ite, "/(" . $filter . ")/i");

        $files = array();
        foreach ($rii as $file) {
            if (!$file->isDir()) {
                $fileName = $file->getFilename();
                $location = str_replace(FM_ROOT_PATH, '', $file->getPath());
                $files[] = array(
                    "name" => $fileName,
                    "type" => "file",
                    "path" => $location,
                );
            }
        }
        return $files;
    }
}

/**
 * Parameters: downloadFile(File Location, File Name,
 * max speed, is streaming
 * If streaming - videos will show as videos, images as images
 * instead of download prompt
 * https://stackoverflow.com/a/13821992/1164642
 */
function fm_download_file($fileLocation, $fileName, $chunkSize  = 1024)
{
    if (connection_status() != 0)
        return (false);
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);

    $contentType = fm_get_file_mimes($extension);

    if (is_array($contentType)) {
        $contentType = implode(' ', $contentType);
    }

    $size = filesize($fileLocation);

    if ($size == 0) {
        fm_set_msg(lng('Zero byte file! Aborting download'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));

        return (false);
    }

    @ini_set('magic_quotes_runtime', 0);
    $fp = fopen("$fileLocation", "rb");

    if ($fp === false) {
        fm_set_msg(lng('Cannot open file! Aborting download'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
        return (false);
    }

    // headers
    header('Content-Description: File Transfer');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header("Content-Transfer-Encoding: binary");
    header("Content-Type: $contentType");

    $contentDisposition = 'attachment';

    if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) {
        $fileName = preg_replace('/\./', '%2e', $fileName, substr_count($fileName, '.') - 1);
        header("Content-Disposition: $contentDisposition;filename=\"$fileName\"");
    } else {
        header("Content-Disposition: $contentDisposition;filename=\"$fileName\"");
    }

    header("Accept-Ranges: bytes");
    $range = 0;

    if (isset($_SERVER['HTTP_RANGE'])) {
        list($a, $range) = explode("=", $_SERVER['HTTP_RANGE']);
        str_replace($range, "-", $range);
        $size2 = $size - 1;
        $new_length = $size - $range;
        header("HTTP/1.1 206 Partial Content");
        header("Content-Length: $new_length");
        header("Content-Range: bytes $range$size2/$size");
    } else {
        $size2 = $size - 1;
        header("Content-Range: bytes 0-$size2/$size");
        header("Content-Length: " . $size);
    }
    $fileLocation = realpath($fileLocation);
    while (ob_get_level()) ob_end_clean();
    readfile($fileLocation);

    fclose($fp);

    return ((connection_status() == 0) and !connection_aborted());
}

/**
 * Class to work with zip files (using ZipArchive)
 */
class FM_Zipper
{
    private $zip;

    public function __construct()
    {
        $this->zip = new ZipArchive();
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($filename, $files)
    {
        $res = $this->zip->open($filename, ZipArchive::CREATE);
        if ($res !== true) {
            return false;
        }
        if (is_array($files)) {
            foreach ($files as $f) {
                $f = fm_clean_path($f);
                if (!$this->addFileOrDir($f)) {
                    $this->zip->close();
                    return false;
                }
            }
            $this->zip->close();
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                $this->zip->close();
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($filename, $path)
    {
        $res = $this->zip->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->zip->extractTo($path)) {
            $this->zip->close();
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            return $this->zip->addFile($filename);
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($path)
    {
        if (!$this->zip->addEmptyDir($path)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($path . '/' . $file)) {
                        if (!$this->addDir($path . '/' . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . '/' . $file)) {
                        if (!$this->zip->addFile($path . '/' . $file)) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Class to work with Tar files (using PharData)
 */
class FM_Zipper_Tar
{
    private $tar;

    public function __construct()
    {
        $this->tar = null;
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($filename, $files)
    {
        $this->tar = new PharData($filename);
        if (is_array($files)) {
            foreach ($files as $f) {
                $f = fm_clean_path($f);
                if (!$this->addFileOrDir($f)) {
                    return false;
                }
            }
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($filename, $path)
    {
        $res = $this->tar->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->tar->extractTo($path)) {
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            try {
                $this->tar->addFile($filename);
                return true;
            } catch (Exception $e) {
                return false;
            }
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($path)
    {
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($path . '/' . $file)) {
                        if (!$this->addDir($path . '/' . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . '/' . $file)) {
                        try {
                            $this->tar->addFile($path . '/' . $file);
                        } catch (Exception $e) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Save Configuration
 */
class FM_Config
{
    var $data;

    function __construct()
    {
        global $root_path, $root_url, $CONFIG;
        $fm_url = $root_url . $_SERVER["PHP_SELF"];
        $this->data = array(
            'lang' => 'en',
            'error_reporting' => true,
            'show_hidden' => true
        );
        $data = false;
        if (strlen($CONFIG)) {
            $data = fm_object_to_array(json_decode($CONFIG));
        } else {
            $msg = 'Tiny File Manager<br>Error: Cannot load configuration';
            if (substr($fm_url, -1) == '/') {
                $fm_url = rtrim($fm_url, '/');
                $msg .= '<br>';
                $msg .= '<br>Seems like you have a trailing slash on the URL.';
                $msg .= '<br>Try this link: <a href="' . $fm_url . '">' . $fm_url . '</a>';
            }
            die($msg);
        }
        if (is_array($data) && count($data)) $this->data = $data;
        else $this->save();
    }

    function save()
    {
        global $config_file;
        $fm_file = is_readable($config_file) ? $config_file : __FILE__;
        $var_name = '$CONFIG';
        $var_value = var_export(json_encode($this->data), true);
        $config_string = "<?php" . chr(13) . chr(10) . "//Default Configuration" . chr(13) . chr(10) . "$var_name = $var_value;" . chr(13) . chr(10);
        if (is_writable($fm_file)) {
            $lines = file($fm_file);
            if ($fh = @fopen($fm_file, "w")) {
                @fputs($fh, $config_string, strlen($config_string));
                for ($x = 3; $x < count($lines); $x++) {
                    @fputs($fh, $lines[$x], strlen($lines[$x]));
                }
                @fclose($fh);
            }
        }
    }
}

//--- Templates Functions ---

/**
 * Show nav block
 * @param string $path
 */
function fm_show_nav_path($path)
{
    global $lang, $sticky_navbar, $editFile;
    $isStickyNavBar = $sticky_navbar ? 'fixed-top' : '';
?>
    <nav class="navbar navbar-expand-lg mb-4 main-nav <?php echo $isStickyNavBar ?> bg-body-tertiary" data-bs-theme="<?php echo FM_THEME; ?>">
        <a class="navbar-brand"> <?php echo lng('AppTitle') ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
            $path = fm_clean_path($path);
            $root_url = "<a href='?p='><i class='fa fa-home' aria-hidden='true' title='" . FM_ROOT_PATH . "'></i></a>";
            $sep = '<i class="bread-crumb"> / </i>';
            if ($path != '') {
                $exploded = explode('/', $path);
                $count = count($exploded);
                $array = array();
                $parent = '';
                for ($i = 0; $i < $count; $i++) {
                    $parent = trim($parent . '/' . $exploded[$i], '/');
                    $parent_enc = urlencode($parent);
                    $array[] = "<a href='?p={$parent_enc}'>" . fm_enc(fm_convert_win($exploded[$i])) . "</a>";
                }
                $root_url .= $sep . implode($sep, $array);
            }
            echo '<div class="col-xs-6 col-sm-5">' . $root_url . $editFile . '</div>';
            ?>

            <div class="col-xs-6 col-sm-7">
                <ul class="navbar-nav justify-content-end" data-bs-theme="<?php echo FM_THEME; ?>">
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php echo lng('Search') ?>" aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $path2 = $path ? $path : '.'; ?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo lng('Advanced Search') ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php if (!FM_READONLY): ?>
                        <li class="nav-item">
                            <a title="<?php echo lng('Upload') ?>" class="nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php echo lng('Upload') ?></a>
                        </li>
                        <li class="nav-item">
                            <a title="<?php echo lng('NewItem') ?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php echo lng('NewItem') ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if (FM_USE_AUTH): ?>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="navbarDropdownMenuLink-5" data-bs-theme="<?php echo FM_THEME; ?>">
                                <?php if (!FM_READONLY): ?>
                                    <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                                <?php endif ?>
                                <a title="<?php echo lng('Help') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php echo lng('Help') ?></a>
                                <a title="<?php echo lng('Logout') ?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo lng('Logout') ?></a>
                            </div>
                        </li>
                    <?php else: ?>
                        <?php if (!FM_READONLY): ?>
                            <li class="nav-item">
                                <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
}

/**
 * Show alert message from session
 */
function fm_show_message()
{
    if (isset($_SESSION[FM_SESSION_ID]['message'])) {
        $class = isset($_SESSION[FM_SESSION_ID]['status']) ? $_SESSION[FM_SESSION_ID]['status'] : 'ok';
        echo '<p class="message ' . $class . '">' . $_SESSION[FM_SESSION_ID]['message'] . '</p>';
        unset($_SESSION[FM_SESSION_ID]['message']);
        unset($_SESSION[FM_SESSION_ID]['status']);
    }
}

/**
 * Show page header in Login Form
 */
function fm_show_header_login()
{
    header("Content-Type: text/html; charset=utf-8");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    global $favicon_path;
?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="<?php echo (FM_THEME == "dark") ? 'dark' : 'light' ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
        <meta name="author" content="CCP Programmers">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <?php if ($favicon_path) {
            echo '<link rel="icon" href="' . fm_enc($favicon_path) . '" type="image/png">';
        } ?>
        <title><?php echo fm_enc(APP_TITLE) ?></title>
        <?php print_external('pre-jsdelivr'); ?>
        <?php print_external('css-bootstrap'); ?>
        <style>
            body.fm-login-page {
                background-color: #f7f9fb;
                font-size: 14px;
                background-color: #f7f9fb;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
            }

            .fm-login-page .brand {
                width: 121px;
                overflow: hidden;
                margin: 0 auto;
                position: relative;
                z-index: 1
            }

            .fm-login-page .brand img {
                width: 100%
            }

            .fm-login-page .card-wrapper {
                width: 360px;
            }

            .fm-login-page .card {
                border-color: transparent;
                box-shadow: 0 4px 8px rgba(0, 0, 0, .05)
            }

            .fm-login-page .card-title {
                margin-bottom: 1.5rem;
                font-size: 24px;
                font-weight: 400;
            }

            .fm-login-page .form-control {
                border-width: 2.3px
            }

            .fm-login-page .form-group label {
                width: 100%
            }

            .fm-login-page .btn.btn-block {
                padding: 12px 10px
            }

            .fm-login-page .footer {
                margin: 20px 0;
                color: #888;
                text-align: center
            }

            @media screen and (max-width:425px) {
                .fm-login-page .card-wrapper {
                    width: 90%;
                    margin: 0 auto;
                    margin-top: 10%;
                }
            }

            @media screen and (max-width:320px) {
                .fm-login-page .card.fat {
                    padding: 0
                }

                .fm-login-page .card.fat .card-body {
                    padding: 15px
                }
            }

            .message {
                padding: 4px 7px;
                border: 1px solid #ddd;
                background-color: #fff
            }

            .message.ok {
                border-color: green;
                color: green
            }

            .message.error {
                border-color: red;
                color: red
            }

            .message.alert {
                border-color: orange;
                color: orange
            }

            body.fm-login-page.theme-dark {
                background-color: #2f2a2a;
            }

            .theme-dark svg g,
            .theme-dark svg path {
                fill: #ffffff;
            }

            .theme-dark .form-control {
                color: #fff;
                background-color: #403e3e;
            }

            .h-100vh {
                min-height: 100vh;
            }
        </style>
    </head>

    <body class="fm-login-page <?php echo (FM_THEME == "dark") ? 'theme-dark' : ''; ?>">
        <div id="wrapper" class="container-fluid">

        <?php
    }

    /**
     * Show page footer in Login Form
     */
    function fm_show_footer_login()
    {
        ?>
        </div>
        <?php print_external('js-jquery'); ?>
        <?php print_external('js-bootstrap'); ?>
    </body>

    </html>

<?php
    }

    /**
     * Show Header after login
     */
    function fm_show_header()
    {
        header("Content-Type: text/html; charset=utf-8");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");

        global $sticky_navbar, $favicon_path;
        $isStickyNavBar = $sticky_navbar ? 'navbar-fixed' : 'navbar-normal';
?>
    <!DOCTYPE html>
    <html data-bs-theme="<?php echo FM_THEME; ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
        <meta name="author" content="CCP Programmers">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <?php if ($favicon_path) {
            echo '<link rel="icon" href="' . fm_enc($favicon_path) . '" type="image/png">';
        } ?>
        <title><?php echo fm_enc(APP_TITLE) ?> | <?php echo (isset($_GET['view']) ? $_GET['view'] : ((isset($_GET['edit'])) ? $_GET['edit'] : "H3K")); ?></title>
        <?php print_external('pre-jsdelivr'); ?>
        <?php print_external('pre-cloudflare'); ?>
        <?php print_external('css-bootstrap'); ?>
        <?php print_external('css-font-awesome'); ?>
        <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
            <?php print_external('css-highlightjs'); ?>
        <?php endif; ?>
        <script type="text/javascript">
            window.csrf = '<?php echo $_SESSION['token']; ?>';
        </script>
        <style>
            html {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
                height: 100%;
                scroll-behavior: smooth;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            body {
                font-size: 15px;
                color: #222;
                background: #F7F7F7;
            }

            body.navbar-fixed {
                margin-top: 55px;
            }

            a,
            a:hover,
            a:visited,
            a:focus {
                text-decoration: none !important;
            }

            .filename,
            td,
            th {
                white-space: nowrap
            }

            .navbar-brand {
                font-weight: bold;
            }

            .nav-item.avatar a {
                cursor: pointer;
                text-transform: capitalize;
            }

            .nav-item.avatar a>i {
                font-size: 15px;
            }

            .nav-item.avatar .dropdown-menu a {
                font-size: 13px;
            }

            #search-addon {
                font-size: 12px;
                border-right-width: 0;
            }

            .brl-0 {
                background: transparent;
                border-left: 0;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .brr-0 {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .bread-crumb {
                color: #cccccc;
                font-style: normal;
            }

            #main-table {
                transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1), width 0s .25s;
            }

            #main-table .filename a {
                color: #222222;
            }

            .table td,
            .table th {
                vertical-align: middle !important;
            }

            .table .custom-checkbox-td .custom-control.custom-checkbox,
            .table .custom-checkbox-header .custom-control.custom-checkbox {
                min-width: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .table-sm td,
            .table-sm th {
                padding: .4rem;
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #f1f1f1;
            }

            .hidden {
                display: none
            }

            pre.with-hljs {
                padding: 0;
                overflow: hidden;
            }

            pre.with-hljs code {
                margin: 0;
                border: 0;
                overflow: scroll;
            }

            code.maxheight,
            pre.maxheight {
                max-height: 512px
            }

            .fa.fa-caret-right {
                font-size: 1.2em;
                margin: 0 4px;
                vertical-align: middle;
                color: #ececec
            }

            .fa.fa-home {
                font-size: 1.3em;
                vertical-align: bottom
            }

            .path {
                margin-bottom: 10px
            }

            form.dropzone {
                min-height: 200px;
                border: 2px dashed #007bff;
                line-height: 6rem;
            }

            .right {
                text-align: right
            }

            .center,
            .close,
            .login-form,
            .preview-img-container {
                text-align: center
            }

            .message {
                padding: 4px 7px;
                border: 1px solid #ddd;
                background-color: #fff
            }

            .message.ok {
                border-color: green;
                color: green
            }

            .message.error {
                border-color: red;
                color: red
            }

            .message.alert {
                border-color: orange;
                color: orange
            }

            .preview-img {
                max-width: 100%;
                max-height: 80vh;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC);
                cursor: zoom-in
            }

            input#preview-img-zoomCheck[type=checkbox] {
                display: none
            }

            input#preview-img-zoomCheck[type=checkbox]:checked~label>img {
                max-width: none;
                max-height: none;
                cursor: zoom-out
            }

            .inline-actions>a>i {
                font-size: 1em;
                margin-left: 5px;
                background: #3785c1;
                color: #fff;
                padding: 3px 4px;
                border-radius: 3px;
            }

            .preview-video {
                position: relative;
                max-width: 100%;
                height: 0;
                padding-bottom: 62.5%;
                margin-bottom: 10px
            }

            .preview-video video {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
                background: #000
            }

            .compact-table {
                border: 0;
                width: auto
            }

            .compact-table td,
            .compact-table th {
                width: 100px;
                border: 0;
                text-align: center
            }

            .compact-table tr:hover td {
                background-color: #fff
            }

            .filename {
                max-width: 420px;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .break-word {
                word-wrap: break-word;
                margin-left: 30px
            }

            .break-word.float-left a {
                color: #7d7d7d
            }

            .break-word+.float-right {
                padding-right: 30px;
                position: relative
            }

            .break-word+.float-right>a {
                color: #7d7d7d;
                font-size: 1.2em;
                margin-right: 4px
            }

            #editor {
                position: absolute;
                right: 15px;
                top: 100px;
                bottom: 15px;
                left: 15px
            }

            @media (max-width:481px) {
                #editor {
                    top: 150px;
                }
            }

            #normal-editor {
                border-radius: 3px;
                border-width: 2px;
                padding: 10px;
                outline: none;
            }

            .btn-2 {
                padding: 4px 10px;
                font-size: small;
            }

            li.file:before,
            li.folder:before {
                font: normal normal normal 14px/1 FontAwesome;
                content: "\f016";
                margin-right: 5px
            }

            li.folder:before {
                content: "\f114"
            }

            i.fa.fa-folder-o {
                color: #0157b3
            }

            i.fa.fa-picture-o {
                color: #26b99a
            }

            i.fa.fa-file-archive-o {
                color: #da7d7d
            }

            .btn-2 i.fa.fa-file-archive-o {
                color: inherit
            }

            i.fa.fa-css3 {
                color: #f36fa0
            }

            i.fa.fa-file-code-o {
                color: #007bff
            }

            i.fa.fa-code {
                color: #cc4b4c
            }

            i.fa.fa-file-text-o {
                color: #0096e6
            }

            i.fa.fa-html5 {
                color: #d75e72
            }

            i.fa.fa-file-excel-o {
                color: #09c55d
            }

            i.fa.fa-file-powerpoint-o {
                color: #f6712e
            }

            i.go-back {
                font-size: 1.2em;
                color: #007bff;
            }

            .main-nav {
                padding: 0.2rem 1rem;
                box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)
            }

            .dataTables_filter {
                display: none;
            }

            table.dataTable thead .sorting {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center right;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC');
            }

            table.dataTable thead .sorting_asc {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center right;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg==');
            }

            table.dataTable thead .sorting_desc {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center right;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII=');
            }

            table.dataTable thead tr:first-child th.custom-checkbox-header:first-child {
                background-image: none;
            }

            .footer-action li {
                margin-bottom: 10px;
            }

            .app-v-title {
                font-size: 24px;
                font-weight: 300;
                letter-spacing: -.5px;
                text-transform: uppercase;
            }

            hr.custom-hr {
                border-top: 1px dashed #8c8b8b;
                border-bottom: 1px dashed #fff;
            }

            #snackbar {
                visibility: hidden;
                min-width: 250px;
                margin-left: -125px;
                background-color: #333;
                color: #fff;
                text-align: center;
                border-radius: 2px;
                padding: 16px;
                position: fixed;
                z-index: 1;
                left: 50%;
                bottom: 30px;
                font-size: 17px;
            }

            #snackbar.show {
                visibility: visible;
                -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
                animation: fadein 0.5s, fadeout 0.5s 2.5s;
            }

            @-webkit-keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }

                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }

                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @-webkit-keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }

                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

            @keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }

                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

            #main-table span.badge {
                border-bottom: 2px solid #f8f9fa
            }

            #main-table span.badge:nth-child(1) {
                border-color: #df4227
            }

            #main-table span.badge:nth-child(2) {
                border-color: #f8b600
            }

            #main-table span.badge:nth-child(3) {
                border-color: #00bd60
            }

            #main-table span.badge:nth-child(4) {
                border-color: #4581ff
            }

            #main-table span.badge:nth-child(5) {
                border-color: #ac68fc
            }

            #main-table span.badge:nth-child(6) {
                border-color: #45c3d2
            }

            @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) {
                .navbar-collapse .col-xs-6 {
                    padding: 0;
                }
            }

            .btn.active.focus,
            .btn.active:focus,
            .btn.focus,
            .btn.focus:active,
            .btn:active:focus,
            .btn:focus {
                outline: 0 !important;
                outline-offset: 0 !important;
                background-image: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important
            }

            .lds-facebook {
                display: none;
                position: relative;
                width: 64px;
                height: 64px
            }

            .lds-facebook div,
            .lds-facebook.show-me {
                display: inline-block
            }

            .lds-facebook div {
                position: absolute;
                left: 6px;
                width: 13px;
                background: #007bff;
                animation: lds-facebook 1.2s cubic-bezier(0, .5, .5, 1) infinite
            }

            .lds-facebook div:nth-child(1) {
                left: 6px;
                animation-delay: -.24s
            }

            .lds-facebook div:nth-child(2) {
                left: 26px;
                animation-delay: -.12s
            }

            .lds-facebook div:nth-child(3) {
                left: 45px;
                animation-delay: 0s
            }

            @keyframes lds-facebook {
                0% {
                    top: 6px;
                    height: 51px
                }

                100%,
                50% {
                    top: 19px;
                    height: 26px
                }
            }

            ul#search-wrapper {
                padding-left: 0;
                border: 1px solid #ecececcc;
            }

            ul#search-wrapper li {
                list-style: none;
                padding: 5px;
                border-bottom: 1px solid #ecececcc;
            }

            ul#search-wrapper li:nth-child(odd) {
                background: #f9f9f9cc;
            }

            .c-preview-img {
                max-width: 300px;
            }

            .border-radius-0 {
                border-radius: 0;
            }

            .float-right {
                float: right;
            }

            .table-hover>tbody>tr:hover>td:first-child {
                border-left: 1px solid #1b77fd;
            }

            #main-table tr.even {
                background-color: #F8F9Fa;
            }

            .filename>a>i {
                margin-right: 3px;
            }

            .fs-7 {
                font-size: 14px;
            }
        </style>
        <?php
        if (FM_THEME == "dark"): ?>
            <style>
                :root {
                    --bs-bg-opacity: 1;
                    --bg-color: #f3daa6;
                    --bs-dark-rgb: 28, 36, 41 !important;
                    --bs-bg-opacity: 1;
                }

                body.theme-dark {
                    background-image: linear-gradient(90deg, #1c2429, #263238);
                    color: #CFD8DC;
                }

                .list-group .list-group-item {
                    background: #343a40;
                }

                .theme-dark .navbar-nav i,
                .navbar-nav .dropdown-toggle,
                .break-word {
                    color: #CFD8DC;
                }

                a,
                a:hover,
                a:visited,
                a:active,
                #main-table .filename a,
                i.fa.fa-folder-o,
                i.go-back {
                    color: var(--bg-color);
                }

                ul#search-wrapper li:nth-child(odd) {
                    background: #212a2f;
                }

                .theme-dark .btn-outline-primary {
                    color: #b8e59c;
                    border-color: #b8e59c;
                }

                .theme-dark .btn-outline-primary:hover,
                .theme-dark .btn-outline-primary:active {
                    background-color: #2d4121;
                }

                .theme-dark input.form-control {
                    background-color: #101518;
                    color: #CFD8DC;
                }

                .theme-dark .dropzone {
                    background: transparent;
                }

                .theme-dark .inline-actions>a>i {
                    background: #79755e;
                }

                .theme-dark .text-white {
                    color: #CFD8DC !important;
                }

                .theme-dark .table-bordered td,
                .table-bordered th {
                    border-color: #343434;
                }

                .theme-dark .table-bordered td .custom-control-input,
                .theme-dark .table-bordered th .custom-control-input {
                    opacity: 0.678;
                }

                .message {
                    background-color: #212529;
                }

                form.dropzone {
                    border-color: #79755e;
                }
            </style>
        <?php endif; ?>
    </head>

    <body class="<?php echo (FM_THEME == "dark") ? 'theme-dark' : ''; ?> <?php echo $isStickyNavBar; ?>">
        <div id="wrapper" class="container-fluid">
            <!-- New Item creation -->
            <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true" data-bs-theme="<?php echo FM_THEME; ?>">
                <div class="modal-dialog" role="document">
                    <form class="modal-content" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php echo lng('CreateNewItem') ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><label for="newfile"><?php echo lng('ItemType') ?> </label></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" name="newfile" value="file">
                                <label class="form-check-label" for="customRadioInline1"><?php echo lng('File') ?></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                                <label class="form-check-label" for="customRadioInline2"><?php echo lng('Folder') ?></label>
                            </div>

                            <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName') ?> </label></p>
                            <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php echo lng('Enter here...') ?>" required>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('CreateNow') ?></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Advance Search Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true" data-bs-theme="<?php echo FM_THEME; ?>">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-10" id="searchModalLabel">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="<?php echo lng('Search') ?> <?php echo lng('a files') ?>" aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                                    <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                                </div>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="lds-facebook">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <ul id="search-wrapper">
                                    <p class="m-2"><?php echo lng('Search file in folder and subfolders...') ?></p>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Rename Modal -->
            <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog" data-bs-theme="<?php echo FM_THEME; ?>">
                <div class="modal-dialog" role="document">
                    <form class="modal-content rounded-3 shadow" method="post" autocomplete="off">
                        <div class="modal-body p-4 text-center">
                            <h5 class="mb-3"><?php echo lng('Are you sure want to rename?') ?></h5>
                            <p class="mb-1">
                                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php echo lng('Enter new file name') ?>" required>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                <input type="hidden" name="rename_from" id="js-rename-from">
                            </p>
                        </div>
                        <div class="modal-footer flex-nowrap p-0">
                            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php echo lng('Okay') ?></strong></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Confirm Modal -->
            <script type="text/html" id="js-tpl-confirm">
                <div class="modal modal-alert confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>" data-bs-theme="<?php echo FM_THEME; ?>">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content rounded-3 shadow" method="post" autocomplete="off" action="<%this.action%>">
                            <div class="modal-body p-4 text-center">
                                <h5 class="mb-2"><?php echo lng('Are you sure want to') ?> <%this.title%> ?</h5>
                                <p class="mb-1"><%this.content%></p>
                            </div>
                            <div class="modal-footer flex-nowrap p-0">
                                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel') ?></button>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php echo lng('Okay') ?></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </script>
        <?php
    }

    /**
     * Show page footer after login
     */
    function fm_show_footer()
    {
        ?>
        </div>
        <?php print_external('js-jquery'); ?>
        <?php print_external('js-bootstrap'); ?>
        <?php print_external('js-jquery-datatables'); ?>
        <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
            <?php print_external('js-highlightjs'); ?>
            <script>
                hljs.highlightAll();
                var isHighlightingEnabled = true;
            </script>
        <?php endif; ?>
        <script>
            function template(html, options) {
                var re = /<\%([^\%>]+)?\%>/g,
                    reExp = /(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,
                    code = 'var r=[];\n',
                    cursor = 0,
                    match;
                var add = function(line, js) {
                    js ? (code += line.match(reExp) ? line + '\n' : 'r.push(' + line + ');\n') : (code += line != '' ? 'r.push("' + line.replace(/"/g, '\\"') + '");\n' : '');
                    return add
                }
                while (match = re.exec(html)) {
                    add(html.slice(cursor, match.index))(match[1], !0);
                    cursor = match.index + match[0].length
                }
                add(html.substr(cursor, html.length - cursor));
                code += 'return r.join("");';
                return new Function(code.replace(/[\r\t\n]/g, '')).apply(options)
            }

            function rename(e, t) {
                if (t) {
                    $("#js-rename-from").val(t);
                    $("#js-rename-to").val(t);
                    $("#renameDailog").modal('show');
                }
            }

            function change_checkboxes(e, t) {
                for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked
            }

            function get_checkboxes() {
                for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--)(e[n].type = "checkbox") && t.push(e[n]);
                return t
            }

            function select_all() {
                change_checkboxes(get_checkboxes(), !0)
            }

            function unselect_all() {
                change_checkboxes(get_checkboxes(), !1)
            }

            function invert_all() {
                change_checkboxes(get_checkboxes())
            }

            function checkbox_toggle() {
                var e = get_checkboxes();
                e.push(this), change_checkboxes(e)
            }

            // Create file backup with .bck
            function backup(e, t) {
                var n = new XMLHttpRequest,
                    a = "path=" + e + "&file=" + t + "&token=" + window.csrf + "&type=backup&ajax=true";
                return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function() {
                    4 == n.readyState && 200 == n.status && toast(n.responseText)
                }, n.send(a), !1
            }

            // Toast message
            function toast(txt) {
                var x = document.getElementById("snackbar");
                x.innerHTML = txt;
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);
            }

            // Save file
            function edit_save(e, t) {
                var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
                if (typeof n !== 'undefined' && n !== null) {
                    if (true) {
                        var data = {
                            ajax: true,
                            content: n,
                            type: 'save',
                            token: window.csrf
                        };

                        $.ajax({
                            type: "POST",
                            url: window.location,
                            data: JSON.stringify(data),
                            contentType: "application/json; charset=utf-8",
                            success: function(mes) {
                                toast("Saved Successfully");
                                window.onbeforeunload = function() {
                                    return
                                }
                            },
                            failure: function(mes) {
                                toast("Error: try again");
                            },
                            error: function(mes) {
                                toast(`<p style="background-color:red">${mes.responseText}</p>`);
                            }
                        });
                    } else {
                        var a = document.createElement("form");
                        a.setAttribute("method", "POST"), a.setAttribute("action", "");
                        var o = document.createElement("textarea");
                        o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                        let cx = document.createElement("input");
                        cx.setAttribute("type", "hidden");
                        cx.setAttribute("name", "token");
                        cx.setAttribute("value", window.csrf);
                        var c = document.createTextNode(n);
                        o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
                    }
                }
            }

            function show_new_pwd() {
                $(".js-new-pwd").toggleClass('hidden');
            }

            // Save Settings
            function save_settings($this) {
                let form = $($this);
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    success: function(data) {
                        if (data) {
                            window.location.reload();
                        }
                    }
                });
                return false;
            }

            //Create new password hash
            function new_password_hash($this) {
                let form = $($this),
                    $pwd = $("#js-pwd-result");
                $pwd.val('');
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    success: function(data) {
                        if (data) {
                            $pwd.val(data);
                        }
                    }
                });
                return false;
            }

            // Upload files using URL @param {Object}
            function upload_from_url($this) {
                let form = $($this),
                    resultWrapper = $("div#js-url-upload__list");
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    beforeSend: function() {
                        form.find("input[name=uploadurl]").attr("disabled", "disabled");
                        form.find("button").hide();
                        form.find(".lds-facebook").addClass('show-me');
                    },
                    success: function(data) {
                        if (data) {
                            data = JSON.parse(data);
                            if (data.done) {
                                resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: ' + data.done.name + '</div>');
                                form.find("input[name=uploadurl]").val('');
                            } else if (data['fail']) {
                                resultWrapper.append('<div class="alert alert-danger row">Error: ' + data.fail.message + '</div>');
                            }
                            form.find("input[name=uploadurl]").removeAttr("disabled");
                            form.find("button").show();
                            form.find(".lds-facebook").removeClass('show-me');
                        }
                    },
                    error: function(xhr) {
                        form.find("input[name=uploadurl]").removeAttr("disabled");
                        form.find("button").show();
                        form.find(".lds-facebook").removeClass('show-me');
                        console.error(xhr);
                    }
                });
                return false;
            }

            // Search template
            function search_template(data) {
                var response = "";
                $.each(data, function(key, val) {
                    response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
                });
                return response;
            }

            // Advance search
            function fm_search() {
                var searchTxt = $("input#advanced-search").val(),
                    searchWrapper = $("ul#search-wrapper"),
                    path = $("#js-search-modal").attr("href"),
                    _html = "",
                    $loader = $("div.lds-facebook");
                if (!!searchTxt && searchTxt.length > 2 && path) {
                    var data = {
                        ajax: true,
                        content: searchTxt,
                        path: path,
                        type: 'search',
                        token: window.csrf
                    };
                    $.ajax({
                        type: "POST",
                        url: window.location,
                        data: data,
                        beforeSend: function() {
                            searchWrapper.html('');
                            $loader.addClass('show-me');
                        },
                        success: function(data) {
                            $loader.removeClass('show-me');
                            data = JSON.parse(data);
                            if (data && data.length) {
                                _html = search_template(data);
                                searchWrapper.html(_html);
                            } else {
                                searchWrapper.html('<p class="m-2">No result found!<p>');
                            }
                        },
                        error: function(xhr) {
                            $loader.removeClass('show-me');
                            searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');
                        },
                        failure: function(mes) {
                            $loader.removeClass('show-me');
                            searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');
                        }
                    });
                } else {
                    searchWrapper.html("OOPS: minimum 3 characters required!");
                }
            }

            // action confirm dailog modal
            function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
                e.preventDefault();
                const tplObj = {
                    id,
                    title,
                    content: decodeURIComponent(content.replace(/\+/g, ' ')),
                    action
                };
                let tpl = $("#js-tpl-confirm").html();
                $(".modal.confirmDailog").remove();
                $('#wrapper').append(template(tpl, tplObj));
                const $confirmDailog = $("#confirmDailog-" + tplObj.id);
                $confirmDailog.modal('show');
                return false;
            }

            // on mouse hover image preview
            ! function(s) {
                s.previewImage = function(e) {
                    var o = s(document),
                        t = ".previewImage",
                        a = s.extend({
                            xOffset: 20,
                            yOffset: -20,
                            fadeIn: "fast",
                            css: {
                                padding: "5px",
                                border: "1px solid #cccccc",
                                "background-color": "#fff"
                            },
                            eventSelector: "[data-preview-image]",
                            dataKey: "previewImage",
                            overlayId: "preview-image-plugin-overlay"
                        }, e);
                    return o.off(t), o.on("mouseover" + t, a.eventSelector, function(e) {
                        s("p#" + a.overlayId).remove();
                        var o = s("<p>").attr("id", a.overlayId).css("position", "absolute").css("display", "none").append(s('<img class="c-preview-img">').attr("src", s(this).data(a.dataKey)));
                        a.css && o.css(a.css), s("body").append(o), o.css("top", e.pageY + a.yOffset + "px").css("left", e.pageX + a.xOffset + "px").fadeIn(a.fadeIn)
                    }), o.on("mouseout" + t, a.eventSelector, function() {
                        s("#" + a.overlayId).remove()
                    }), o.on("mousemove" + t, a.eventSelector, function(e) {
                        s("#" + a.overlayId).css("top", e.pageY + a.yOffset + "px").css("left", e.pageX + a.xOffset + "px")
                    }), this
                }, s.previewImage()
            }(jQuery);

            // Dom Ready Events
            $(document).ready(function() {
                // dataTable init
                var $table = $('#main-table'),
                    tableLng = $table.find('th').length,
                    _targets = (tableLng && tableLng == 7) ? [0, 4, 5, 6] : tableLng == 5 ? [0, 4] : [3];
                mainTable = $('#main-table').DataTable({
                    paging: false,
                    info: false,
                    order: [],
                    columnDefs: [{
                        targets: _targets,
                        orderable: false
                    }]
                });

                // filter table
                $('#search-addon').on('keyup', function() {
                    mainTable.search(this.value).draw();
                });

                $("input#advanced-search").on('keyup', function(e) {
                    if (e.keyCode === 13) {
                        fm_search();
                    }
                });

                $('#search-addon3').on('click', function() {
                    fm_search();
                });

                //upload nav tabs
                $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e) {
                    e.preventDefault();
                    let target = $(this).data('target');
                    $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');
                    $(this).addClass('active');
                    $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');
                    $(target).removeClass('hidden');
                });
            });
        </script>

        <?php if (isset($_GET['edit']) && isset($_GET['env']) && FM_EDIT_FILE && !FM_READONLY):
            $ext = pathinfo($_GET["edit"], PATHINFO_EXTENSION);
            $ext =  $ext == "js" ? "javascript" :  $ext;
        ?>
            <?php print_external('js-ace'); ?>
            <script>
                var editor = ace.edit("editor");
                editor.getSession().setMode({
                    path: "ace/mode/<?php echo $ext; ?>",
                    inline: true
                });
                //editor.setTheme("ace/theme/twilight"); // Dark Theme
                editor.setShowPrintMargin(false); // Hide the vertical ruler
                function ace_commend(cmd) {
                    editor.commands.exec(cmd, editor);
                }
                editor.commands.addCommands([{
                    name: 'save',
                    bindKey: {
                        win: 'Ctrl-S',
                        mac: 'Command-S'
                    },
                    exec: function(editor) {
                        edit_save(this, 'ace');
                    }
                }]);

                function renderThemeMode() {
                    var $modeEl = $("select#js-ace-mode"),
                        $themeEl = $("select#js-ace-theme"),
                        $fontSizeEl = $("select#js-ace-fontSize"),
                        optionNode = function(type, arr) {
                            var $Option = "";
                            $.each(arr, function(i, val) {
                                $Option += "<option value='" + type + i + "'>" + val + "</option>";
                            });
                            return $Option;
                        },
                        _data = {
                            "aceTheme": {
                                "bright": {
                                    "chrome": "Chrome",
                                    "clouds": "Clouds",
                                    "crimson_editor": "Crimson Editor",
                                    "dawn": "Dawn",
                                    "dreamweaver": "Dreamweaver",
                                    "eclipse": "Eclipse",
                                    "github": "GitHub",
                                    "iplastic": "IPlastic",
                                    "solarized_light": "Solarized Light",
                                    "textmate": "TextMate",
                                    "tomorrow": "Tomorrow",
                                    "xcode": "XCode",
                                    "kuroir": "Kuroir",
                                    "katzenmilch": "KatzenMilch",
                                    "sqlserver": "SQL Server"
                                },
                                "dark": {
                                    "ambiance": "Ambiance",
                                    "chaos": "Chaos",
                                    "clouds_midnight": "Clouds Midnight",
                                    "dracula": "Dracula",
                                    "cobalt": "Cobalt",
                                    "gruvbox": "Gruvbox",
                                    "gob": "Green on Black",
                                    "idle_fingers": "idle Fingers",
                                    "kr_theme": "krTheme",
                                    "merbivore": "Merbivore",
                                    "merbivore_soft": "Merbivore Soft",
                                    "mono_industrial": "Mono Industrial",
                                    "monokai": "Monokai",
                                    "pastel_on_dark": "Pastel on dark",
                                    "solarized_dark": "Solarized Dark",
                                    "terminal": "Terminal",
                                    "tomorrow_night": "Tomorrow Night",
                                    "tomorrow_night_blue": "Tomorrow Night Blue",
                                    "tomorrow_night_bright": "Tomorrow Night Bright",
                                    "tomorrow_night_eighties": "Tomorrow Night 80s",
                                    "twilight": "Twilight",
                                    "vibrant_ink": "Vibrant Ink"
                                }
                            },
                            "aceMode": {
                                "javascript": "JavaScript",
                                "abap": "ABAP",
                                "abc": "ABC",
                                "actionscript": "ActionScript",
                                "ada": "ADA",
                                "apache_conf": "Apache Conf",
                                "asciidoc": "AsciiDoc",
                                "asl": "ASL",
                                "assembly_x86": "Assembly x86",
                                "autohotkey": "AutoHotKey",
                                "apex": "Apex",
                                "batchfile": "BatchFile",
                                "bro": "Bro",
                                "c_cpp": "C and C++",
                                "c9search": "C9Search",
                                "cirru": "Cirru",
                                "clojure": "Clojure",
                                "cobol": "Cobol",
                                "coffee": "CoffeeScript",
                                "coldfusion": "ColdFusion",
                                "csharp": "C#",
                                "csound_document": "Csound Document",
                                "csound_orchestra": "Csound",
                                "csound_score": "Csound Score",
                                "css": "CSS",
                                "curly": "Curly",
                                "d": "D",
                                "dart": "Dart",
                                "diff": "Diff",
                                "dockerfile": "Dockerfile",
                                "dot": "Dot",
                                "drools": "Drools",
                                "edifact": "Edifact",
                                "eiffel": "Eiffel",
                                "ejs": "EJS",
                                "elixir": "Elixir",
                                "elm": "Elm",
                                "erlang": "Erlang",
                                "forth": "Forth",
                                "fortran": "Fortran",
                                "fsharp": "FSharp",
                                "fsl": "FSL",
                                "ftl": "FreeMarker",
                                "gcode": "Gcode",
                                "gherkin": "Gherkin",
                                "gitignore": "Gitignore",
                                "glsl": "Glsl",
                                "gobstones": "Gobstones",
                                "golang": "Go",
                                "graphqlschema": "GraphQLSchema",
                                "groovy": "Groovy",
                                "haml": "HAML",
                                "handlebars": "Handlebars",
                                "haskell": "Haskell",
                                "haskell_cabal": "Haskell Cabal",
                                "haxe": "haXe",
                                "hjson": "Hjson",
                                "html": "HTML",
                                "html_elixir": "HTML (Elixir)",
                                "html_ruby": "HTML (Ruby)",
                                "ini": "INI",
                                "io": "Io",
                                "jack": "Jack",
                                "jade": "Jade",
                                "java": "Java",
                                "json": "JSON",
                                "jsoniq": "JSONiq",
                                "jsp": "JSP",
                                "jssm": "JSSM",
                                "jsx": "JSX",
                                "julia": "Julia",
                                "kotlin": "Kotlin",
                                "latex": "LaTeX",
                                "less": "LESS",
                                "liquid": "Liquid",
                                "lisp": "Lisp",
                                "livescript": "LiveScript",
                                "logiql": "LogiQL",
                                "lsl": "LSL",
                                "lua": "Lua",
                                "luapage": "LuaPage",
                                "lucene": "Lucene",
                                "makefile": "Makefile",
                                "markdown": "Markdown",
                                "mask": "Mask",
                                "matlab": "MATLAB",
                                "maze": "Maze",
                                "mel": "MEL",
                                "mixal": "MIXAL",
                                "mushcode": "MUSHCode",
                                "mysql": "MySQL",
                                "nix": "Nix",
                                "nsis": "NSIS",
                                "objectivec": "Objective-C",
                                "ocaml": "OCaml",
                                "pascal": "Pascal",
                                "perl": "Perl",
                                "perl6": "Perl 6",
                                "pgsql": "pgSQL",
                                "php_laravel_blade": "PHP (Blade Template)",
                                "php": "PHP",
                                "puppet": "Puppet",
                                "pig": "Pig",
                                "powershell": "Powershell",
                                "praat": "Praat",
                                "prolog": "Prolog",
                                "properties": "Properties",
                                "protobuf": "Protobuf",
                                "python": "Python",
                                "r": "R",
                                "razor": "Razor",
                                "rdoc": "RDoc",
                                "red": "Red",
                                "rhtml": "RHTML",
                                "rst": "RST",
                                "ruby": "Ruby",
                                "rust": "Rust",
                                "sass": "SASS",
                                "scad": "SCAD",
                                "scala": "Scala",
                                "scheme": "Scheme",
                                "scss": "SCSS",
                                "sh": "SH",
                                "sjs": "SJS",
                                "slim": "Slim",
                                "smarty": "Smarty",
                                "snippets": "snippets",
                                "soy_template": "Soy Template",
                                "space": "Space",
                                "sql": "SQL",
                                "sqlserver": "SQLServer",
                                "stylus": "Stylus",
                                "svg": "SVG",
                                "swift": "Swift",
                                "tcl": "Tcl",
                                "terraform": "Terraform",
                                "tex": "Tex",
                                "text": "Text",
                                "textile": "Textile",
                                "toml": "Toml",
                                "tsx": "TSX",
                                "twig": "Twig",
                                "typescript": "Typescript",
                                "vala": "Vala",
                                "vbscript": "VBScript",
                                "velocity": "Velocity",
                                "verilog": "Verilog",
                                "vhdl": "VHDL",
                                "visualforce": "Visualforce",
                                "wollok": "Wollok",
                                "xml": "XML",
                                "xquery": "XQuery",
                                "yaml": "YAML",
                                "django": "Django"
                            },
                            "fontSize": {
                                8: 8,
                                10: 10,
                                11: 11,
                                12: 12,
                                13: 13,
                                14: 14,
                                15: 15,
                                16: 16,
                                17: 17,
                                18: 18,
                                20: 20,
                                22: 22,
                                24: 24,
                                26: 26,
                                30: 30
                            }
                        };
                    if (_data && _data.aceMode) {
                        $modeEl.html(optionNode("ace/mode/", _data.aceMode));
                    }
                    if (_data && _data.aceTheme) {
                        var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright),
                            darkTheme = optionNode("ace/theme/", _data.aceTheme.dark);
                        $themeEl.html("<optgroup label=\"Bright\">" + lightTheme + "</optgroup><optgroup label=\"Dark\">" + darkTheme + "</optgroup>");
                    }
                    if (_data && _data.fontSize) {
                        $fontSizeEl.html(optionNode("", _data.fontSize));
                    }
                    $modeEl.val(editor.getSession().$modeId);
                    $themeEl.val(editor.getTheme());
                    $(function() {
                        //set default font size in drop down
                        $fontSizeEl.val(12).change();
                    });
                }

                $(function() {
                    renderThemeMode();
                    $(".js-ace-toolbar").on("click", 'button', function(e) {
                        e.preventDefault();
                        let cmdValue = $(this).attr("data-cmd"),
                            editorOption = $(this).attr("data-option");
                        if (cmdValue && cmdValue != "none") {
                            ace_commend(cmdValue);
                        } else if (editorOption) {
                            if (editorOption == "fullscreen") {
                                (void 0 !== document.fullScreenElement && null === document.fullScreenElement || void 0 !== document.msFullscreenElement && null === document.msFullscreenElement || void 0 !== document.mozFullScreen && !document.mozFullScreen || void 0 !== document.webkitIsFullScreen && !document.webkitIsFullScreen) &&
                                (editor.container.requestFullScreen ? editor.container.requestFullScreen() : editor.container.mozRequestFullScreen ? editor.container.mozRequestFullScreen() : editor.container.webkitRequestFullScreen ? editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : editor.container.msRequestFullscreen && editor.container.msRequestFullscreen());
                            } else if (editorOption == "wrap") {
                                let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                                editor.getSession().setUseWrapMode(wrapStatus);
                            }
                        }
                    });

                    $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e) {
                        e.preventDefault();
                        let selectedValue = $(this).val(),
                            selectionType = $(this).attr("data-type");
                        if (selectedValue && selectionType == "mode") {
                            editor.getSession().setMode(selectedValue);
                        } else if (selectedValue && selectionType == "theme") {
                            editor.setTheme(selectedValue);
                        } else if (selectedValue && selectionType == "fontSize") {
                            editor.setFontSize(parseInt(selectedValue));
                        }
                    });
                });
            </script>
        <?php endif; ?>
        <div id="snackbar"></div>
    </body>

    </html>
<?php
    }

    /**
     * Language Translation System
     * @param string $txt
     * @return string
     */
    function lng($txt)
    {
        global $lang;

        // English Language
        $tr['en']['AppName']        = 'Tiny File Manager';
        $tr['en']['AppTitle']       = 'File Manager';
        $tr['en']['Login']          = 'Sign in';
        $tr['en']['Username']       = 'Username';
        $tr['en']['Password']       = 'Password';
        $tr['en']['Logout']         = 'Sign Out';
        $tr['en']['Move']           = 'Move';
        $tr['en']['Copy']           = 'Copy';
        $tr['en']['Save']           = 'Save';
        $tr['en']['SelectAll']      = 'Select all';
        $tr['en']['UnSelectAll']    = 'Unselect all';
        $tr['en']['File']           = 'File';
        $tr['en']['Back']           = 'Back';
        $tr['en']['Size']           = 'Size';
        $tr['en']['Perms']          = 'Perms';
        $tr['en']['Modified']       = 'Modified';
        $tr['en']['Owner']          = 'Owner';
        $tr['en']['Search']         = 'Search';
        $tr['en']['NewItem']        = 'New Item';
        $tr['en']['Folder']         = 'Folder';
        $tr['en']['Delete']         = 'Delete';
        $tr['en']['Rename']         = 'Rename';
        $tr['en']['CopyTo']         = 'Copy to';
        $tr['en']['DirectLink']     = 'Direct link';
        $tr['en']['UploadingFiles'] = 'Upload Files';
        $tr['en']['ChangePermissions']  = 'Change Permissions';
        $tr['en']['Copying']        = 'Copying';
        $tr['en']['CreateNewItem']  = 'Create New Item';
        $tr['en']['Name']           = 'Name';
        $tr['en']['AdvancedEditor'] = 'Advanced Editor';
        $tr['en']['Actions']        = 'Actions';
        $tr['en']['Folder is empty'] = 'Folder is empty';
        $tr['en']['Upload']         = 'Upload';
        $tr['en']['Cancel']         = 'Cancel';
        $tr['en']['InvertSelection'] = 'Invert Selection';
        $tr['en']['DestinationFolder']  = 'Destination Folder';
        $tr['en']['ItemType']       = 'Item Type';
        $tr['en']['ItemName']       = 'Item Name';
        $tr['en']['CreateNow']      = 'Create Now';
        $tr['en']['Download']       = 'Download';
        $tr['en']['Open']           = 'Open';
        $tr['en']['UnZip']          = 'UnZip';
        $tr['en']['UnZipToFolder']  = 'UnZip to folder';
        $tr['en']['Edit']           = 'Edit';
        $tr['en']['NormalEditor']   = 'Normal Editor';
        $tr['en']['BackUp']         = 'Back Up';
        $tr['en']['SourceFolder']   = 'Source Folder';
        $tr['en']['Files']          = 'Files';
        $tr['en']['Move']           = 'Move';
        $tr['en']['Change']         = 'Change';
        $tr['en']['Settings']       = 'Settings';
        $tr['en']['Language']       = 'Language';
        $tr['en']['ErrorReporting'] = 'Error Reporting';
        $tr['en']['ShowHiddenFiles'] = 'Show Hidden Files';
        $tr['en']['Help']           = 'Help';
        $tr['en']['Created']        = 'Created';
        $tr['en']['Help Documents'] = 'Help Documents';
        $tr['en']['Report Issue']   = 'Report Issue';
        $tr['en']['Generate']       = 'Generate';
        $tr['en']['FullSize']       = 'Full Size';
        $tr['en']['HideColumns']    = 'Hide Perms/Owner columns';
        $tr['en']['You are logged in'] = 'You are logged in';
        $tr['en']['Nothing selected']  = 'Nothing selected';
        $tr['en']['Paths must be not equal']    = 'Paths must be not equal';
        $tr['en']['Renamed from']       = 'Renamed from';
        $tr['en']['Archive not unpacked'] = 'Archive not unpacked';
        $tr['en']['Deleted']            = 'Deleted';
        $tr['en']['Archive not created'] = 'Archive not created';
        $tr['en']['Copied from']        = 'Copied from';
        $tr['en']['Permissions changed'] = 'Permissions changed';
        $tr['en']['to']                 = 'to';
        $tr['en']['Saved Successfully'] = 'Saved Successfully';
        $tr['en']['not found!']         = 'not found!';
        $tr['en']['File Saved Successfully']    = 'File Saved Successfully';
        $tr['en']['Archive']            = 'Archive';
        $tr['en']['Permissions not changed']    = 'Permissions not changed';
        $tr['en']['Select folder']      = 'Select folder';
        $tr['en']['Source path not defined']    = 'Source path not defined';
        $tr['en']['already exists']     = 'already exists';
        $tr['en']['Error while moving from']    = 'Error while moving from';
        $tr['en']['Create archive?']    = 'Create archive?';
        $tr['en']['Invalid file or folder name']    = 'Invalid file or folder name';
        $tr['en']['Archive unpacked']   = 'Archive unpacked';
        $tr['en']['File extension is not allowed']  = 'File extension is not allowed';
        $tr['en']['Root path']          = 'Root path';
        $tr['en']['Error while renaming from']  = 'Error while renaming from';
        $tr['en']['File not found']     = 'File not found';
        $tr['en']['Error while deleting items'] = 'Error while deleting items';
        $tr['en']['Moved from']         = 'Moved from';
        $tr['en']['Generate new password hash'] = 'Generate new password hash';
        $tr['en']['Login failed. Invalid username or password'] = 'Login failed. Invalid username or password';
        $tr['en']['password_hash not supported, Upgrade PHP version'] = 'password_hash not supported, Upgrade PHP version';
        $tr['en']['Advanced Search']    = 'Advanced Search';
        $tr['en']['Error while copying from']    = 'Error while copying from';
        $tr['en']['Invalid characters in file name']                = 'Invalid characters in file name';
        $tr['en']['FILE EXTENSION HAS NOT SUPPORTED']               = 'FILE EXTENSION HAS NOT SUPPORTED';
        $tr['en']['Selected files and folder deleted']              = 'Selected files and folder deleted';
        $tr['en']['Error while fetching archive info']              = 'Error while fetching archive info';
        $tr['en']['Delete selected files and folders?']             = 'Delete selected files and folders?';
        $tr['en']['Search file in folder and subfolders...']        = 'Search file in folder and subfolders...';
        $tr['en']['Access denied. IP restriction applicable']       = 'Access denied. IP restriction applicable';
        $tr['en']['Invalid characters in file or folder name']      = 'Invalid characters in file or folder name';
        $tr['en']['Operations with archives are not available']     = 'Operations with archives are not available';
        $tr['en']['File or folder with this path already exists']   = 'File or folder with this path already exists';
        $tr['en']['Are you sure want to rename?']                   = 'Are you sure want to rename?';
        $tr['en']['Are you sure want to']                           = 'Are you sure want to';
        $tr['en']['Date Modified']                                  = 'Date Modified';
        $tr['en']['File size']                                      = 'File size';
        $tr['en']['MIME-type']                                      = 'MIME-type';

        $i18n = fm_get_translations($tr);
        $tr = $i18n ? $i18n : $tr;

        if (!strlen($lang)) $lang = 'en';
        if (isset($tr[$lang][$txt])) return fm_enc($tr[$lang][$txt]);
        else if (isset($tr['en'][$txt])) return fm_enc($tr['en'][$txt]);
        else return "$txt";
    }

?>

<?php
// Database config
define('DATABASE_HOST', 'localhost');	// MySQL host. usually localhost
define('DATABASE_USER', 'root');		// MySQL username
define('DATABASE_PASS', 'meme');		// MySQL password
define('DATABASE_NAME', 'allora');		// Database name
define('DATABASE_WHAT', 'host');		// "host" or unix socket path

// Server urls, no slash
$URL['avatar'] = 'https://a.ripple.moe';
$URL['server'] = 'https://ripple.moe';

// Changelog config
$ChangelogConfig = [
	// If in the commit message any of these words appear, don't show the commit in the changelog.
	'forbidden_keywords' => ['[HIDE]', '[SECRET]'],
	// These commits will be hidden
	'forbidden_commits' => [],
	// Labels (keyword,label text,color)
	'labels' => ['[FIX],fix,danger', '[WEB],web,info', '[BANCHO],bancho,warning', '[SCORES],scores,primary', '[NEW],new,success'],
	// If you want to change names from what they appear in the git logs, you can set here a different name for you and your project contributors.
	'change_name' => ['fuck' => 'a donkey', 'suck' => 'a duck'],
];

// Mailgun config
$MailgunConfig = ['domain' => '', 'key' => ''];

// WebHook configuration. Refer to the wiki for more information.
$WebHookReport = '';
$KeyAkerino = '';

// Server status page configuration
$ServerStatusConfig = [
	'service_status' => [
		'enable' 			=> true, // Must be true if you want to enable "Service status" section
		'bancho_url'        => 'http://127.0.0.1:5001', // Bancho URL
		'avatars_url'       => 'http://127.0.0.1:5000', // Avatar server URL
		'beatmap_url'       => 'http://bcache.zxq.co', 	// Beatmap mirror URL
		'api_url'           => 'http://127.0.0.1/api', 	// Ripple API URL
		'lets_url'          => 'http://127.0.0.1:5002', // LETS URL
	],

	'netdata' => [
		'enable'            => true, 	// Must be true if you want to enable server stats (cpu, ram, ipv4 and so on)
		'server_url'        => 'http://127.0.0.1:19999', // Your netdata server
		'header_enable'     => true, 	// Show header with main server stats
		'system_enable'     => true, 	// Show cpu/load/ram graphs
		'network_enable'    => true, 	// Show IPv4 graphss
		'disk_enable'       => true, 	// Show disk graphs
		'disk_name'         => 'vda', 	// Your disk name
		'mysql_server'      => 'srv', 	// MySQL server name inside netstat's config file
		'mysql_enable'      => true, 	// Show mysql graphs. You must have configured netstat's mysql plugin.
		'nginx_enable'      => true, 	// Show nginx graphs. You must have configured netstat's nginx plugin.
	]
];

// Scores/PP config
$ScoresConfig = [
	"enablePP" => true,
	"useNewBeatmapsTable" => true		// 0: get beatmaps names from beatmaps_names (old php scores server)
										// 1: get beatmaps names from beatmaps (LETS)
];

// Team page config
$teamConfig = [
	999 => [
		"name" => "Mark Fokawo",
		"twitter" => "fokawooooo",
		"email" => "fo@ka.wo",
		"role" => "Master Bot"
		"github" => "gitfoka"
	]
];

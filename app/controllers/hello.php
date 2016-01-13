<?php

 use Fiesta\Core\MVC\Controller\Controller;

/**
* class de controller helloController
*/

class helloController extends Controller
{
	
	
	public static $id = null;
	public static $object = null;


	public static function steps($step)
	{
		switch ($step) {
			case 1: self::firstStep(); break;
			case 2: self::secondStep(); break;
			case 3: self::thirdStep(); break;
			case 4: self::fourthStep(); break;
		}
	}

	public static function hello()
	{
		return View::make('hello.hello');
	}

	protected static function appDoc($index)
	{
		$doc = array(
			'project_name' => "\n\t|  Your project name", 
			'owner_name' => "\n\t|  Your name", 
			'project_url' => "\n\t|  Your website root link, you should put your \n\t| root link , by default we using App::root \n\t| function to get the root link even if you \n\t| working on localhost", 
			'html_title' => "\n\t|  Default HTML title",
			'timezone' => "\n\t|  Here you should set your timezone after that \n\t| whenever you wanna get time, Fiesta will give\n\t| you exact time for the timezone.\n\t| To get all of timezones supported in php \n\t| visite here : http://php.net/manual/en/timezones.php",
			'routing_inexists' => "\n\t|  When HttpNotFoundException trown if unrouted \n\t| parameter was true it will be show to \n\t| exception else the framework will redirect\n\t| user to Error::r_404 route,",
			'character_set' => "\n\t|  Default encodage when you using HTML::charset"
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function appTitles($index)
	{
		$titles = array(
			'project_name' => "Project name", 
			'owner_name' => "Owner name", 
			'project_url' => "Project url", 
			'html_title' => "HTML Default title",
			'timezone' => "Timezone",
			'routing_inexists' => "Routing inexists event",
			'character_set' => "Default Character Set"
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function appRow($index,$param)
	{
		$title = self::appTitles($index);
		$doc = self::appDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function appCont($name)
	{
		$project_name = self::appRow("project_name","'project'=>'fiesta',");
		$owner_name = self::appRow("owner_name","'owner'=>'".$name."',");
		$project_url = self::appRow("project_url","'url'=>App::root(),");
		$html_title = self::appRow("html_title","'title'=> 'Fiesta PHP Framework',");
		$timezone = self::appRow("timezone","'timezone'=> 'UTC',");
		$routing_inexists = self::appRow("routing_inexists","'unrouted'=> true,");
		$character_set = self::appRow("character_set","'charset'=> 'utf-8', ");
		//
		return "<?php \nuse Fiesta\Core\Glob\App;\n\nreturn array(\n\t".$project_name.$owner_name.$project_url.$html_title.$timezone.$routing_inexists.$character_set."\n);";
	}

	protected static function langDoc($index)
	{
		$doc = array(
			'default_lang' => "\n\t|  hena kteb la langue par default dila l site \n\t| dialk o t9der tbdelo men be3d", 
			'lang_cookie' => "\n\t|  hena smyt l cookie dial langue",
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function langTitles($index)
	{
		$titles = array(
			'default_lang' => "Default lang", 
			'lang_cookie' => "Lang Cookie name",
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function langRow($index,$param)
	{
		$title = self::LangTitles($index);
		$doc = self::LangDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function langCont($langue)
	{
		$default_lang = self::langRow("default_lang","'default'=>'$langue',");
		$lang_cookie = self::langRow("lang_cookie","'cookie'=>'fiesta_lang',");
		//
		return "<?php \n\nreturn array(\n\t".$default_lang.$lang_cookie."\n);";
	}

	/**
	 * Loggin
	 */
	protected static function logginDoc($index)
	{
		$doc = array(
			'debug' => "\n\t|  hena bach tkheli l framework i debugger les \n\t|  erreur o les exception dialo ila kan false \n\t|  maghadich i affachier les erreur", 
			'error_debug_message' => "\n\t|  ila kan l parametre dial debug fih false\n\t|  l framework ghadi y affichier had l msag",
			'error_log' => "\n\t|  hana ghadi t3tih l fichier li ghadi ydir fih \n\t|  les error_log\n\t|  par defaut kayn fichier f storage",
			'background' => "\n\t|  hana ghadi t3tih l couleur dial l background\n\t|  dial la page simple dial l erreur ya3ni lpage \n\t|  li katkhroj dial l erreur ila kan debug fiha \n\t|  false"
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function logginTitles($index)
	{
		$titles = array(
			'debug' => "Allow Debug", 
			'error_debug_message' => "Error Debug Message",
			'error_log' => "Error log",
			'background' => "Error simple page background color",
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function logginRow($index,$param)
	{
		$title = self::LogginTitles($index);
		$doc = self::LogginDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function logginCont($loggin)
	{
		$debug = self::logginRow("debug","'debug'=>'$loggin',");
		$error_debug_message = self::logginRow("error_debug_message","'msg' => \"Ohlala! il semble que quelque chose s'ait mal passé\",");
		$error_log = self::logginRow("error_log","'log' => 'app/storage/logs/fiesta.log',");
		$background = self::logginRow("background","'bg' => '#a4003a',");
		//
		return "<?php \n\nreturn array(\n\t".$debug.$error_debug_message.$error_log.$background."\n);";
	}


	/**
	 * Maintenance
	 */
	protected static function MaintDoc($index)
	{
		$doc = array(
			'activate' => "\n\t|  ", 
			'Message' => "\n\t|  ",
			'background' => "\n\t|  ",
			'out' => "\n\t|  "
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function MaintTitles($index)
	{
		$titles = array(
			'activate' => "App Maintenance", 
			'Message' => "Maintenance Message",
			'background' => "Maintenance background",
			'out' => "Out Maintenance Routes",
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function MaintRow($index,$param)
	{
		$title = self::MaintTitles($index);
		$doc = self::MaintDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function MaintCont($maintenance)
	{
		$activate = self::MaintRow("activate","'activate' => $maintenance, ");
		$Message = self::MaintRow("Message","'msg'=>\"Le site web est en cours de maintenance...\",");
		$background = self::MaintRow("background","'bg' => '#d6003e',");
		$out = self::MaintRow("out","'outRoutes' => array(\n\t\tConfig::get('panel.route'),\n\t),");
		//
		return "<?php \nuse Fiesta\Core\Config\Config;\n\nreturn array(\n\t".$activate.$Message.$background.$out."\n);";
	}

	/**
	 * Security
	 */
	protected static function securityDoc($index)
	{
		$doc = array(
			'keys' => "\n\t|  Hna cle lwla dial l cryptage dial les donnes.khas tkoon string 32 bit(car)\n\t|  o cle taniya 7eta hiya dial l cryptage dial les donnes.khas tkoon au minimum string 10 bit(car)\n\t|  had les cles important pour security dial site dialk"
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function securityTitles($index)
	{
		$titles = array(
			'keys' => "Encryption Keys",
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function securityRow($index,$param)
	{
		$title = self::securityTitles($index);
		$doc = self::securityDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function securityCont($sec_1,$sec_2)
	{
		$keys = self::securityRow("keys","'key1' => '$sec_1',\n\t'key2' => '$sec_2',");
		//
		return "<?php \n\nreturn array(\n\t".$keys."\n);";
	}


	/**
	 * Panel
	 */
	protected static function panelDoc($index)
	{
		$doc = array(
			'activation' => "\n\t|  hna true ila bghiti l panel tb9a kheda\n\t|  meni tsali menha redha false...pour \n\t|  votre sécurité",
			'route' => "\n\t|  hna route dial l panel",
			'path' => "\n\t|  here the path of the panel index, you can \n\t|  search in the internet to change the panel, \n\t|  for your security you should change the panel\n\t|  folder name",
			'passwords' => "\n\t|  hna katktb les mot de passe dial panel bach \n\t|  bihom t9der tdkhol l panel dialk par default\n\t|  fihom 1234 o 5678 nta t9der tbdlhom",
			'configuration' => "\n\t|  The framework will set true if you passed \n\t|  the first configuration",
			'ajax' => "\n\t|  This is links of ajax functions",
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function panelTitles($index)
	{
		$titles = array(
			'activation' => "Panel Activation",
			'route' => "Panel Route",
			'path' => "Panel Path",
			'passwords' => "Panel Passwords",
			'configuration' => "First Configuration",
			'ajax' => "Ajax Routes",
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function panelRow($index,$param)
	{
		$title = self::panelTitles($index);
		$doc = self::panelDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function panelCont($state,$route,$pass_1,$pass_2)
	{
		$activation = self::panelRow("activation","'enable'=> $state,");
		$route = self::panelRow("route","'route'=>'$route',");
		$path = self::panelRow("path","'path'=>'vendor/fiesta/panel/index.php',");
		$passwords = self::panelRow("passwords","'password1'=>'$pass_1',\n\t'password2'=>'$pass_2',");
		$configuration = self::panelRow("configuration","'configured' => true,");
		$ajax = self::panelRow("ajax","'ajax' => array(\n\n\t\t// for new seeds\n\t\t\t'new_seed' => 'new_seed',\n\n\t\t// to exec migrations\n\t\t\t'exec_migration' => 'exec_migration',\n\n\t\t// to rollback migrations\n\t\t\t'rollback_migration' => 'rollback_migration', \n\n\t\t// for new migrations\n\t\t\t'new_migration' => 'new_migration',\n\n\t\t// for new controllers\n\t\t\t'new_controller' => 'new_controller',\n\n\t\t// for new language folder\n\t\t\t'new_dir_lang' => 'new_dir_lang',\n\n\t\t// for new language file\n\t\t\t'new_file_lang' => 'new_file_lang',\n\n\t\t// for new links file\n\t\t\t'new_link' => 'new_link',\n\n\t\t// for new models\n\t\t\t'new_model' => 'new_model',\n\n\t\t// for new views\n\t\t\t'new_view' => 'new_view',\n\n\t\t// to exec costume migrations\n\t\t\t'exec_cos_migration' => 'exec_cos_migration',\n\n\t\t// to rollback costume migrations\n\t\t\t'rollback_cos_migration' => 'rollback_cos_migration',\n\t),");
		//
		return "<?php \n\nreturn array(\n\t".$activation.$route.$path.$passwords.$configuration.$ajax."\n);";
	}

	/**
	 * Database
	 */
	protected static function dbDoc($index)
	{
		$doc = array(
			'default' => "\n\t|  Default used database driver",
			'connections' => "\n\t|  All drivers that Fiesta Work with",
			'table' => "\n\t|  Database used to store migrations info",
			'prefixing' => "\n\t|  If true, Fiesta will add prefixe for all \n\t|  Database tables created by the framework",
			'prefixe' => "\n\t|  This string will be add to all tables names\n\t|  created by Fiesta if prefixing parameter was true",
			);
		//
		return $doc[$index]."\n\t*/";
	}

	protected static function dbTitles($index)
	{
		$titles = array(
			'default' => "Default Database Connection",
			'connections' => "Database Connections",
			'table' => "Schemas Table",
			'prefixing' => "Prefixing",
			'prefixe' => "The prefixe",
			);
		//
		$sep = "\n\t|----------------------------------------------";
		return "\n\n\t/*".$sep."\n\t| ".$titles[$index].$sep;
	}

	protected static function dbRow($index,$param)
	{
		$title = self::dbTitles($index);
		$doc = self::dbDoc($index);
		//
		return $title.$doc."\n\n\t$param\n";
	}

	protected static function dbConnections($host,$name,$usr,$pass)
	{
		return "'connections' => array(\n\n\t\t'sqlite' => array(\n\t\t\t'driver'   => 'sqlite',\n\t\t\t'database' => __DIR__.'/../database/production.sqlite',\n\t\t),\n\n\t\t'mysql' => array(\n\t\t\t'driver'    => 'mysql',\n\t\t\t'host'      => '".$host."',\n\t\t\t'database'  => '".$name."',\n\t\t\t'username'  => '".$usr."',\n\t\t\t'password'  => '".$pass."',\n\t\t\t'charset'   => 'utf8',\n\t\t\t'collation' => 'utf8_unicode_ci',\n\t\t),\n\n\t\t'pgsql' => array(\n\t\t\t'driver'   => 'pgsql',\n\t\t\t'host'     => 'localhost',\n\t\t\t'database' => 'forge',\n\t\t\t'username' => 'forge',\n\t\t\t'password' => '',\n\t\t\t'charset'  => 'utf8',\n\t\t\t'schema'   => 'public',\n\t\t),\n\n\t\t'sqlsrv' => array(\n\t\t\t'driver'   => 'sqlsrv',\n\t\t\t'host'     => 'localhost',\n\t\t\t'database' => 'database',\n\t\t\t'username' => 'root',\n\t\t\t'password' => '',\n\t\t),\n\t),";
	}

	protected static function dbCont($host,$name,$usr,$pass,$prefixing,$prefix)
	{
		$default = self::dbRow("default","'default' => 'mysql', ");
		$connections = self::dbRow("connections",self::dbConnections($host,$name,$usr,$pass));
		$table = self::dbRow("table","'migration' => 'fiesta_migrations',");
		$prefixing = self::dbRow("prefixing","'prefixing' => $prefixing ,");
		$prefixe = self::dbRow("prefixe","'prefixe' => '".$prefix."_',");
		
		//
		return "<?php \n\nreturn array(\n\t".$default.$connections.$table.$prefixing.$prefixe."\n);";
	}



	public static function firstStep()
	{
		$name=$_POST['dev_name'];
		$langue=$_POST['langue'];

		if(isset($_POST['ckeck_loggin'])) $loggin="true";
		else $loggin="false";

		if(isset($_POST['ckeck_maintenance'])) $maintenance="true";
		else $maintenance="false";

		file_put_contents("../app/config/app.php", self::appCont($name) , 0);
		file_put_contents("../app/config/lang.php", self::langCont($langue), 0);
		file_put_contents("../app/config/loggin.php", self::logginCont($loggin), 0);
		file_put_contents("../app/config/maintenance.php", self::MaintCont($maintenance), 0);
		echo "ok";
	}

	public static function secondStep()
	{
		$host=empty($_POST['db_host']) ? "localhost" : $_POST['db_host'] ;
		$name=empty($_POST['db_name']) ? "test" : $_POST['db_name'];
		$usr=empty($_POST['db_usr']) ? "root" : $_POST['db_usr'];
		$pass=empty($_POST['db_pass']) ? "" : $_POST['db_pass'];
		$prefix=$_POST['db_prefix'];

		if(empty($prefix)) { $prefixing="false"; $prefix="ysf"; }
		else  { $prefixing="true";  }
		//
		file_put_contents("../app/config/database.php", self::dbCont($host,$name,$usr,$pass,$prefixing,$prefix), 0);
		//
		echo "ok";
	}

	public static function thirdStep()
	{
		$sec_1=$_POST['sec_1'];
		$sec_2=$_POST['sec_2'];
		//
		file_put_contents("../app/config/security.php", self::securityCont($sec_1,$sec_2), 0);
		//
		echo "ok";
	}

	public static function fourthStep()
	{
		if(isset($_POST['stat'])) $state="true";
		else $state="false";
		//
		$route=empty($_POST['route']) ? "fiesta" : $_POST['route'];
		$pass_1=empty($_POST['pass_1']) ? "1234" : $_POST['pass_1'];
		$pass_2=empty($_POST['pass_2']) ? "5678" : $_POST['pass_2'];
		//
		file_put_contents("../app/config/panel.php", self::panelCont($state,$route,$pass_1,$pass_2), 0);
		//
		echo "ok";
	}

}
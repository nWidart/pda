<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated with https://github.com/barryvdh/laravel-ide-helper
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
namespace {
	die('Only to be used as an helper for your IDE');
}

namespace  {
 class App extends Illuminate\Support\Facades\App{
	/**
	 * @var \Illuminate\Foundation\Application $root
	 */
	 static private $root;

	/**
	 * Create a new Illuminate application instance.
	 *
	 * @static
	 * @param	\Illuminate\Http\Request	$request
	 * @return void
	 */
	 public static function __construct($request = null){
		$root = new Illuminate\Foundation\Application();
		 $root->__construct($request);
	 }

	/**
	 * Set the application request for the console environment.
	 *
	 * @static
	 * @return void
	 */
	 public static function setRequestForConsoleEnvironment(){
		$root = new Illuminate\Foundation\Application();
		 $root->setRequestForConsoleEnvironment();
	 }

	/**
	 * Bind the installation paths to the application.
	 *
	 * @static
	 * @param	array	$paths
	 * @return void
	 */
	 public static function bindInstallPaths($paths){
		$root = new Illuminate\Foundation\Application();
		 $root->bindInstallPaths($paths);
	 }

	/**
	 * Get the application bootstrap file.
	 *
	 * @static
	 * @return string
	 */
	 public static function getBootstrapFile(){
		$root = new Illuminate\Foundation\Application();
		return $root->getBootstrapFile();
	 }

	/**
	 * Start the exception handling for the request.
	 *
	 * @static
	 * @return void
	 */
	 public static function startExceptionHandling(){
		$root = new Illuminate\Foundation\Application();
		 $root->startExceptionHandling();
	 }

	/**
	 * Get the current application environment.
	 *
	 * @static
	 * @return string
	 */
	 public static function environment(){
		$root = new Illuminate\Foundation\Application();
		return $root->environment();
	 }

	/**
	 * Detect the application's current environment.
	 *
	 * @static
	 * @param	array|string	$environments
	 * @return string
	 */
	 public static function detectEnvironment($environments){
		$root = new Illuminate\Foundation\Application();
		return $root->detectEnvironment($environments);
	 }

	/**
	 * Determine if we are running in the console.
	 *
	 * @static
	 * @return bool
	 */
	 public static function runningInConsole(){
		$root = new Illuminate\Foundation\Application();
		return $root->runningInConsole();
	 }

	/**
	 * Determine if we are running unit tests.
	 *
	 * @static
	 * @return bool
	 */
	 public static function runningUnitTests(){
		$root = new Illuminate\Foundation\Application();
		return $root->runningUnitTests();
	 }

	/**
	 * Register a service provider with the application.
	 *
	 * @static
	 * @param	\Illuminate\Support\ServiceProvider|string	$provider
	 * @param	array	$options
	 * @return void
	 */
	 public static function register($provider, $options = array()){
		$root = new Illuminate\Foundation\Application();
		 $root->register($provider, $options);
	 }

	/**
	 * Load and boot all of the remaining deferred providers.
	 *
	 * @static
	 * @return void
	 */
	 public static function loadDeferredProviders(){
		$root = new Illuminate\Foundation\Application();
		 $root->loadDeferredProviders();
	 }

	/**
	 * Resolve the given type from the container.
	 * (Overriding Container::make)
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function make($abstract, $parameters = array()){
		$root = new Illuminate\Foundation\Application();
		return $root->make($abstract, $parameters);
	 }

	/**
	 * Register a "before" application filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function before($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->before($callback);
	 }

	/**
	 * Register an "after" application filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function after($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->after($callback);
	 }

	/**
	 * Register a "close" application filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function close($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->close($callback);
	 }

	/**
	 * Register a "finish" application filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function finish($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->finish($callback);
	 }

	/**
	 * Register a "shutdown" callback.
	 *
	 * @static
	 * @param	callable	$callback
	 * @return void
	 */
	 public static function shutdown($callback = null){
		$root = new Illuminate\Foundation\Application();
		 $root->shutdown($callback);
	 }

	/**
	 * Handles the given request and delivers the response.
	 *
	 * @static
	 * @return void
	 */
	 public static function run(){
		$root = new Illuminate\Foundation\Application();
		 $root->run();
	 }

	/**
	 * Handle the given request and get the response.
	 *
	 * @static
	 * @param	\Illuminate\Http\Request	$request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function dispatch($request){
		$root = new Illuminate\Foundation\Application();
		return $root->dispatch($request);
	 }

	/**
	 * Handle the given request and get the response.
	 * Provides compatibility with BrowserKit functional testing.
	 *
	 * @static
	 * @param	\Illuminate\Http\Request	$request
	 * @param	int	$type
	 * @param	bool	$catch
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function handle($request, $type = 1, $catch = true){
		$root = new Illuminate\Foundation\Application();
		return $root->handle($request, $type, $catch);
	 }

	/**
	 * Boot the application's service providers.
	 *
	 * @static
	 * @return void
	 */
	 public static function boot(){
		$root = new Illuminate\Foundation\Application();
		 $root->boot();
	 }

	/**
	 * Register a new boot listener.
	 *
	 * @static
	 * @param	mixed	$callback
	 * @return void
	 */
	 public static function booting($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->booting($callback);
	 }

	/**
	 * Register a new "booted" listener.
	 *
	 * @static
	 * @param	mixed	$callback
	 * @return void
	 */
	 public static function booted($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->booted($callback);
	 }

	/**
	 * Prepare the request by injecting any services.
	 *
	 * @static
	 * @param	\Illuminate\Http\Request	$request
	 * @return \Illuminate\Http\Request
	 */
	 public static function prepareRequest($request){
		$root = new Illuminate\Foundation\Application();
		return $root->prepareRequest($request);
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @static
	 * @param	mixed	$value
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function prepareResponse($value){
		$root = new Illuminate\Foundation\Application();
		return $root->prepareResponse($value);
	 }

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @static
	 * @return bool
	 */
	 public static function isDownForMaintenance(){
		$root = new Illuminate\Foundation\Application();
		return $root->isDownForMaintenance();
	 }

	/**
	 * Register a maintenance mode event listener.
	 *
	 * @static
	 * @param	\Closure	$callback
	 * @return void
	 */
	 public static function down($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->down($callback);
	 }

	/**
	 * Throw an HttpException with the given data.
	 *
	 * @static
	 * @param	int	$code
	 * @param	string	$message
	 * @param	array	$headers
	 * @return void
	 */
	 public static function abort($code, $message = '', $headers = array()){
		$root = new Illuminate\Foundation\Application();
		 $root->abort($code, $message, $headers);
	 }

	/**
	 * Register a 404 error handler.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function missing($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->missing($callback);
	 }

	/**
	 * Register an application error handler.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function error($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->error($callback);
	 }

	/**
	 * Register an error handler for fatal errors.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function fatal($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->fatal($callback);
	 }

	/**
	 * Get the configuration loader instance.
	 *
	 * @static
	 * @return \Illuminate\Config\LoaderInterface
	 */
	 public static function getConfigLoader(){
		$root = new Illuminate\Foundation\Application();
		return $root->getConfigLoader();
	 }

	/**
	 * Get the service provider repository instance.
	 *
	 * @static
	 * @return \Illuminate\Foundation\ProviderRepository
	 */
	 public static function getProviderRepository(){
		$root = new Illuminate\Foundation\Application();
		return $root->getProviderRepository();
	 }

	/**
	 * Set the current application locale.
	 *
	 * @static
	 * @param	string	$locale
	 * @return void
	 */
	 public static function setLocale($locale){
		$root = new Illuminate\Foundation\Application();
		 $root->setLocale($locale);
	 }

	/**
	 * Get the service providers that have been loaded.
	 *
	 * @static
	 * @return array
	 */
	 public static function getLoadedProviders(){
		$root = new Illuminate\Foundation\Application();
		return $root->getLoadedProviders();
	 }

	/**
	 * Set the application's deferred services.
	 *
	 * @static
	 * @param	array	$services
	 * @return void
	 */
	 public static function setDeferredServices($services){
		$root = new Illuminate\Foundation\Application();
		 $root->setDeferredServices($services);
	 }

	/**
	 * Dynamically access application services.
	 *
	 * @static
	 * @param	string	$key
	 * @return mixed
	 */
	 public static function __get($key){
		$root = new Illuminate\Foundation\Application();
		return $root->__get($key);
	 }

	/**
	 * Dynamically set application services.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function __set($key, $value){
		$root = new Illuminate\Foundation\Application();
		 $root->__set($key, $value);
	 }

	/**
	 * Determine if the given abstract type has been bound.
	 *
	 * @static
	 * @param	string	$abstract
	 * @return bool
	 */
	 public static function bound($abstract){
		$root = new Illuminate\Foundation\Application();
		return $root->bound($abstract);
	 }

	/**
	 * Register a binding with the container.
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	Closure|string|null	$concrete
	 * @param	bool	$shared
	 * @return void
	 */
	 public static function bind($abstract, $concrete = null, $shared = false){
		$root = new Illuminate\Foundation\Application();
		 $root->bind($abstract, $concrete, $shared);
	 }

	/**
	 * Register a binding if it hasn't already been registered.
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	Closure|string|null	$concrete
	 * @param	bool	$shared
	 * @return bool
	 */
	 public static function bindIf($abstract, $concrete = null, $shared = false){
		$root = new Illuminate\Foundation\Application();
		return $root->bindIf($abstract, $concrete, $shared);
	 }

	/**
	 * Register a shared binding in the container.
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	Closure|string|null	$concrete
	 * @return void
	 */
	 public static function singleton($abstract, $concrete = null){
		$root = new Illuminate\Foundation\Application();
		 $root->singleton($abstract, $concrete);
	 }

	/**
	 * Wrap a Closure such that it is shared.
	 *
	 * @static
	 * @param	Closure	$closure
	 * @return Closure
	 */
	 public static function share($closure){
		$root = new Illuminate\Foundation\Application();
		return $root->share($closure);
	 }

	/**
	 * "Extend" an abstract type in the container.
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	Closure	$closure
	 * @return void
	 */
	 public static function extend($abstract, $closure){
		$root = new Illuminate\Foundation\Application();
		 $root->extend($abstract, $closure);
	 }

	/**
	 * Register an existing instance as shared in the container.
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	mixed	$instance
	 * @return void
	 */
	 public static function instance($abstract, $instance){
		$root = new Illuminate\Foundation\Application();
		 $root->instance($abstract, $instance);
	 }

	/**
	 * Alias a type to a shorter name.
	 *
	 * @static
	 * @param	string	$abstract
	 * @param	string	$alias
	 * @return void
	 */
	 public static function alias($abstract, $alias){
		$root = new Illuminate\Foundation\Application();
		 $root->alias($abstract, $alias);
	 }

	/**
	 * Instantiate a concrete instance of the given type.
	 *
	 * @static
	 * @param	string	$concrete
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function build($concrete, $parameters = array()){
		$root = new Illuminate\Foundation\Application();
		return $root->build($concrete, $parameters);
	 }

	/**
	 * Register a new resolving callback.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function resolving($callback){
		$root = new Illuminate\Foundation\Application();
		 $root->resolving($callback);
	 }

	/**
	 * Get the container's bindings.
	 *
	 * @static
	 * @return array
	 */
	 public static function getBindings(){
		$root = new Illuminate\Foundation\Application();
		return $root->getBindings();
	 }

	/**
	 * Determine if a given offset exists.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function offsetExists($key){
		$root = new Illuminate\Foundation\Application();
		return $root->offsetExists($key);
	 }

	/**
	 * Get the value at a given offset.
	 *
	 * @static
	 * @param	string	$key
	 * @return mixed
	 */
	 public static function offsetGet($key){
		$root = new Illuminate\Foundation\Application();
		return $root->offsetGet($key);
	 }

	/**
	 * Set the value at a given offset.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function offsetSet($key, $value){
		$root = new Illuminate\Foundation\Application();
		 $root->offsetSet($key, $value);
	 }

	/**
	 * Unset the value at a given offset.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function offsetUnset($key){
		$root = new Illuminate\Foundation\Application();
		 $root->offsetUnset($key);
	 }

 }
}

namespace  {
 class Artisan extends Illuminate\Support\Facades\Artisan{
	/**
	 * @var \Illuminate\Console\Application $root
	 */
	 static private $root;

	/**
	 * Start a new Console application.
	 *
	 * @static
	 * @param	\Illuminate\Foundation\Application	$app
	 * @return \Illuminate\Console\Application
	 */
	 public static function start($app){
		$root = new Illuminate\Console\Application();
		return $root->start($app);
	 }

	/**
	 * Add a command to the console.
	 *
	 * @static
	 * @param	\Symfony\Component\Console\Command\Command	$command
	 * @return \Symfony\Component\Console\Command\Command
	 */
	 public static function add($command){
		$root = new Illuminate\Console\Application();
		return $root->add($command);
	 }

	/**
	 * Add a command, resolving through the application.
	 *
	 * @static
	 * @param	string	$command
	 * @return void
	 */
	 public static function resolve($command){
		$root = new Illuminate\Console\Application();
		 $root->resolve($command);
	 }

	/**
	 * Resolve an array of commands through the application.
	 *
	 * @static
	 * @param	array|dynamic	$commands
	 * @return void
	 */
	 public static function resolveCommands($commands){
		$root = new Illuminate\Console\Application();
		 $root->resolveCommands($commands);
	 }

	/**
	 * Render the given exception.
	 *
	 * @static
	 * @param	Exception	$e
	 * @param	\Symfony\Component\Console\Output\OutputInterface	$output
	 * @return void
	 */
	 public static function renderException($e, $output){
		$root = new Illuminate\Console\Application();
		 $root->renderException($e, $output);
	 }

	/**
	 * Set the exception handler instance.
	 *
	 * @static
	 * @param	\Illuminate\Exception\Handler	$handler
	 * @return void
	 */
	 public static function setExceptionHandler($handler){
		$root = new Illuminate\Console\Application();
		 $root->setExceptionHandler($handler);
	 }

	/**
	 * Set the Laravel application instance.
	 *
	 * @static
	 * @param	\Illuminate\Foundation\Application	$laravel
	 * @return void
	 */
	 public static function setLaravel($laravel){
		$root = new Illuminate\Console\Application();
		 $root->setLaravel($laravel);
	 }

	/**
	 * Constructor.
	 *
	 * @static
	 * @param	string $name	The name of the application
	 * @param	string $version The version of the application
	 * @return void
	 */
	 public static function __construct($name = 'UNKNOWN', $version = 'UNKNOWN'){
		$root = new Illuminate\Console\Application();
		 $root->__construct($name, $version);
	 }

	/**
	 * 
	 *
	 * @static
	 * @return void
	 */
	 public static function setDispatcher($dispatcher){
		$root = new Illuminate\Console\Application();
		 $root->setDispatcher($dispatcher);
	 }

	/**
	 * Runs the current application.
	 *
	 * @static
	 * @param	InputInterface	$input	An Input instance
	 * @param	OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 */
	 public static function run($input = null, $output = null){
		$root = new Illuminate\Console\Application();
		return $root->run($input, $output);
	 }

	/**
	 * Runs the current application.
	 *
	 * @static
	 * @param	InputInterface	$input	An Input instance
	 * @param	OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 */
	 public static function doRun($input, $output){
		$root = new Illuminate\Console\Application();
		return $root->doRun($input, $output);
	 }

	/**
	 * Set a helper set to be used with the command.
	 *
	 * @static
	 * @param	HelperSet $helperSet The helper set
	 * @return void
	 */
	 public static function setHelperSet($helperSet){
		$root = new Illuminate\Console\Application();
		 $root->setHelperSet($helperSet);
	 }

	/**
	 * Get the helper set associated with the command.
	 *
	 * @static
	 * @return HelperSet The HelperSet instance associated with this command
	 */
	 public static function getHelperSet(){
		$root = new Illuminate\Console\Application();
		return $root->getHelperSet();
	 }

	/**
	 * Set an input definition set to be used with this application
	 *
	 * @static
	 * @param	InputDefinition $definition The input definition
	 * @return void
	 */
	 public static function setDefinition($definition){
		$root = new Illuminate\Console\Application();
		 $root->setDefinition($definition);
	 }

	/**
	 * Gets the InputDefinition related to this Application.
	 *
	 * @static
	 * @return InputDefinition The InputDefinition instance
	 */
	 public static function getDefinition(){
		$root = new Illuminate\Console\Application();
		return $root->getDefinition();
	 }

	/**
	 * Gets the help message.
	 *
	 * @static
	 * @return string A help message.
	 */
	 public static function getHelp(){
		$root = new Illuminate\Console\Application();
		return $root->getHelp();
	 }

	/**
	 * Sets whether to catch exceptions or not during commands execution.
	 *
	 * @static
	 * @param	Boolean $boolean Whether to catch exceptions or not during commands execution
	 * @return void
	 */
	 public static function setCatchExceptions($boolean){
		$root = new Illuminate\Console\Application();
		 $root->setCatchExceptions($boolean);
	 }

	/**
	 * Sets whether to automatically exit after a command execution or not.
	 *
	 * @static
	 * @param	Boolean $boolean Whether to automatically exit after a command execution or not
	 * @return void
	 */
	 public static function setAutoExit($boolean){
		$root = new Illuminate\Console\Application();
		 $root->setAutoExit($boolean);
	 }

	/**
	 * Gets the name of the application.
	 *
	 * @static
	 * @return string The application name
	 */
	 public static function getName(){
		$root = new Illuminate\Console\Application();
		return $root->getName();
	 }

	/**
	 * Sets the application name.
	 *
	 * @static
	 * @param	string $name The application name
	 * @return void
	 */
	 public static function setName($name){
		$root = new Illuminate\Console\Application();
		 $root->setName($name);
	 }

	/**
	 * Gets the application version.
	 *
	 * @static
	 * @return string The application version
	 */
	 public static function getVersion(){
		$root = new Illuminate\Console\Application();
		return $root->getVersion();
	 }

	/**
	 * Sets the application version.
	 *
	 * @static
	 * @param	string $version The application version
	 * @return void
	 */
	 public static function setVersion($version){
		$root = new Illuminate\Console\Application();
		 $root->setVersion($version);
	 }

	/**
	 * Returns the long version of the application.
	 *
	 * @static
	 * @return string The long application version
	 */
	 public static function getLongVersion(){
		$root = new Illuminate\Console\Application();
		return $root->getLongVersion();
	 }

	/**
	 * Registers a new command.
	 *
	 * @static
	 * @param	string $name The command name
	 * @return Command The newly created command
	 */
	 public static function register($name){
		$root = new Illuminate\Console\Application();
		return $root->register($name);
	 }

	/**
	 * Adds an array of command objects.
	 *
	 * @static
	 * @param	Command[] $commands An array of commands
	 * @return void
	 */
	 public static function addCommands($commands){
		$root = new Illuminate\Console\Application();
		 $root->addCommands($commands);
	 }

	/**
	 * Returns a registered command by name or alias.
	 *
	 * @static
	 * @param	string $name The command name or alias
	 * @return Command A Command object
	 */
	 public static function get($name){
		$root = new Illuminate\Console\Application();
		return $root->get($name);
	 }

	/**
	 * Returns true if the command exists, false otherwise.
	 *
	 * @static
	 * @param	string $name The command name or alias
	 * @return Boolean true if the command exists, false otherwise
	 */
	 public static function has($name){
		$root = new Illuminate\Console\Application();
		return $root->has($name);
	 }

	/**
	 * Returns an array of all unique namespaces used by currently registered commands.
	 * It does not returns the global namespace which always exists.
	 *
	 * @static
	 * @return array An array of namespaces
	 */
	 public static function getNamespaces(){
		$root = new Illuminate\Console\Application();
		return $root->getNamespaces();
	 }

	/**
	 * Finds a registered namespace by a name or an abbreviation.
	 *
	 * @static
	 * @param	string $namespace A namespace or abbreviation to search for
	 * @return string A registered namespace
	 */
	 public static function findNamespace($namespace){
		$root = new Illuminate\Console\Application();
		return $root->findNamespace($namespace);
	 }

	/**
	 * Finds a command by name or alias.
	 * Contrary to get, this command tries to find the best
	 * match if you give it an abbreviation of a name or alias.
	 *
	 * @static
	 * @param	string $name A command name or a command alias
	 * @return Command A Command instance
	 */
	 public static function find($name){
		$root = new Illuminate\Console\Application();
		return $root->find($name);
	 }

	/**
	 * Gets the commands (registered in the given namespace if provided).
	 * The array keys are the full names and the values the command instances.
	 *
	 * @static
	 * @param	string $namespace A namespace name
	 * @return Command[] An array of Command instances
	 */
	 public static function all($namespace = null){
		$root = new Illuminate\Console\Application();
		return $root->all($namespace);
	 }

	/**
	 * Returns an array of possible abbreviations given a set of names.
	 *
	 * @static
	 * @param	array $names An array of names
	 * @return array An array of abbreviations
	 */
	 public static function getAbbreviations($names){
		$root = new Illuminate\Console\Application();
		return $root->getAbbreviations($names);
	 }

	/**
	 * Returns a text representation of the Application.
	 *
	 * @static
	 * @param	string	$namespace An optional namespace name
	 * @param	boolean $raw	Whether to return raw command list
	 * @return string A string representing the Application
	 */
	 public static function asText($namespace = null, $raw = false){
		$root = new Illuminate\Console\Application();
		return $root->asText($namespace, $raw);
	 }

	/**
	 * Returns an XML representation of the Application.
	 *
	 * @static
	 * @param	string	$namespace An optional namespace name
	 * @param	Boolean $asDom	Whether to return a DOM or an XML string
	 * @return string|\DOMDocument An XML string representing the Application
	 */
	 public static function asXml($namespace = null, $asDom = false){
		$root = new Illuminate\Console\Application();
		return $root->asXml($namespace, $asDom);
	 }

	/**
	 * Tries to figure out the terminal dimensions based on the current environment
	 *
	 * @static
	 * @return array Array containing width and height
	 */
	 public static function getTerminalDimensions(){
		$root = new Illuminate\Console\Application();
		return $root->getTerminalDimensions();
	 }

	/**
	 * Returns the namespace part of the command name.
	 * This method is not part of public API and should not be used directly.
	 *
	 * @static
	 * @param	string $name	The full name of the command
	 * @param	string $limit The maximum number of parts of the namespace
	 * @return string The namespace of the command
	 */
	 public static function extractNamespace($name, $limit = null){
		$root = new Illuminate\Console\Application();
		return $root->extractNamespace($name, $limit);
	 }

 }
}

namespace  {
 class Auth extends Manager{
	/**
	 * @var \Illuminate\Auth\Guard $root
	 */
	 static private $root;

	/**
	 * Create a new authentication guard.
	 *
	 * @static
	 * @param	\Illuminate\Auth\UserProviderInterface	$provider
	 * @param	\Illuminate\Session\Store	$session
	 * @return void
	 */
	 public static function __construct($provider, $session){
		$root = new Illuminate\Auth\Guard();
		 $root->__construct($provider, $session);
	 }

	/**
	 * Determine if the current user is authenticated.
	 *
	 * @static
	 * @return bool
	 */
	 public static function check(){
		$root = new Illuminate\Auth\Guard();
		return $root->check();
	 }

	/**
	 * Determine if the current user is a guest.
	 *
	 * @static
	 * @return bool
	 */
	 public static function guest(){
		$root = new Illuminate\Auth\Guard();
		return $root->guest();
	 }

	/**
	 * Get the currently authenticated user.
	 *
	 * @static
	 * @return \Illuminate\Auth\UserInterface|null
	 */
	 public static function user(){
		$root = new Illuminate\Auth\Guard();
		return $root->user();
	 }

	/**
	 * Log a user into the application without sessions or cookies.
	 *
	 * @static
	 * @param	array	$credentials
	 * @return bool
	 */
	 public static function once($credentials = array()){
		$root = new Illuminate\Auth\Guard();
		return $root->once($credentials);
	 }

	/**
	 * Validate a user's credentials.
	 *
	 * @static
	 * @param	array	$credentials
	 * @return bool
	 */
	 public static function validate($credentials = array()){
		$root = new Illuminate\Auth\Guard();
		return $root->validate($credentials);
	 }

	/**
	 * Attempt to authenticate using HTTP Basic Auth.
	 *
	 * @static
	 * @param	string	$field
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 */
	 public static function basic($field = 'email', $request = null){
		$root = new Illuminate\Auth\Guard();
		return $root->basic($field, $request);
	 }

	/**
	 * Perform a stateless HTTP Basic login attempt.
	 *
	 * @static
	 * @param	string	$field
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 */
	 public static function onceBasic($field = 'email', $request = null){
		$root = new Illuminate\Auth\Guard();
		return $root->onceBasic($field, $request);
	 }

	/**
	 * Attempt to authenticate a user using the given credentials.
	 *
	 * @static
	 * @param	array	$credentials
	 * @param	bool	$remember
	 * @param	bool	$login
	 * @return bool
	 */
	 public static function attempt($credentials = array(), $remember = false, $login = true){
		$root = new Illuminate\Auth\Guard();
		return $root->attempt($credentials, $remember, $login);
	 }

	/**
	 * Register an authentication attempt event listener.
	 *
	 * @static
	 * @param	mixed	$callback
	 * @return void
	 */
	 public static function attempting($callback){
		$root = new Illuminate\Auth\Guard();
		 $root->attempting($callback);
	 }

	/**
	 * Log a user into the application.
	 *
	 * @static
	 * @param	\Illuminate\Auth\UserInterface	$user
	 * @param	bool	$remember
	 * @return void
	 */
	 public static function login($user, $remember = false){
		$root = new Illuminate\Auth\Guard();
		 $root->login($user, $remember);
	 }

	/**
	 * Log the given user ID into the application.
	 *
	 * @static
	 * @param	mixed	$id
	 * @param	bool	$remember
	 * @return \Illuminate\Auth\UserInterface
	 */
	 public static function loginUsingId($id, $remember = false){
		$root = new Illuminate\Auth\Guard();
		return $root->loginUsingId($id, $remember);
	 }

	/**
	 * Log the user out of the application.
	 *
	 * @static
	 * @return void
	 */
	 public static function logout(){
		$root = new Illuminate\Auth\Guard();
		 $root->logout();
	 }

	/**
	 * Get the cookies queued by the guard.
	 *
	 * @static
	 * @return array
	 */
	 public static function getQueuedCookies(){
		$root = new Illuminate\Auth\Guard();
		return $root->getQueuedCookies();
	 }

	/**
	 * Get the cookie creator instance used by the guard.
	 *
	 * @static
	 * @return \Illuminate\Cookie\CookieJar
	 */
	 public static function getCookieJar(){
		$root = new Illuminate\Auth\Guard();
		return $root->getCookieJar();
	 }

	/**
	 * Set the cookie creator instance used by the guard.
	 *
	 * @static
	 * @param	\Illuminate\Cookie\CookieJar	$cookie
	 * @return void
	 */
	 public static function setCookieJar($cookie){
		$root = new Illuminate\Auth\Guard();
		 $root->setCookieJar($cookie);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @static
	 * @return \Illuminate\Events\Dispatcher
	 */
	 public static function getDispatcher(){
		$root = new Illuminate\Auth\Guard();
		return $root->getDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @static
	 * @param	\Illuminate\Events\Dispatcher
	 * @return void
	 */
	 public static function setDispatcher($events){
		$root = new Illuminate\Auth\Guard();
		 $root->setDispatcher($events);
	 }

	/**
	 * Get the session store used by the guard.
	 *
	 * @static
	 * @return \Illuminate\Session\Store
	 */
	 public static function getSession(){
		$root = new Illuminate\Auth\Guard();
		return $root->getSession();
	 }

	/**
	 * Get the user provider used by the guard.
	 *
	 * @static
	 * @return \Illuminate\Auth\UserProviderInterface
	 */
	 public static function getProvider(){
		$root = new Illuminate\Auth\Guard();
		return $root->getProvider();
	 }

	/**
	 * Return the currently cached user of the application.
	 *
	 * @static
	 * @return \Illuminate\Auth\UserInterface|null
	 */
	 public static function getUser(){
		$root = new Illuminate\Auth\Guard();
		return $root->getUser();
	 }

	/**
	 * Set the current user of the application.
	 *
	 * @static
	 * @param	\Illuminate\Auth\UserInterface	$user
	 * @return void
	 */
	 public static function setUser($user){
		$root = new Illuminate\Auth\Guard();
		 $root->setUser($user);
	 }

	/**
	 * Get the current request instance.
	 *
	 * @static
	 * @return \Symfony\Component\HttpFoundation\Request
	 */
	 public static function getRequest(){
		$root = new Illuminate\Auth\Guard();
		return $root->getRequest();
	 }

	/**
	 * Set the current request instance.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request
	 * @return \Illuminate\Auth\Guard
	 */
	 public static function setRequest($request){
		$root = new Illuminate\Auth\Guard();
		return $root->setRequest($request);
	 }

	/**
	 * Get a unique identifier for the auth session value.
	 *
	 * @static
	 * @return string
	 */
	 public static function getName(){
		$root = new Illuminate\Auth\Guard();
		return $root->getName();
	 }

	/**
	 * Get the name of the cookie used to store the "recaller".
	 *
	 * @static
	 * @return string
	 */
	 public static function getRecallerName(){
		$root = new Illuminate\Auth\Guard();
		return $root->getRecallerName();
	 }

 }
}

namespace  {
 class Blade extends Illuminate\Support\Facades\Blade{
	/**
	 * @var \Illuminate\View\Compilers\BladeCompiler $root
	 */
	 static private $root;

	/**
	 * Compile the view at the given path.
	 *
	 * @static
	 * @param	string	$path
	 * @return void
	 */
	 public static function compile($path){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		 $root->compile($path);
	 }

	/**
	 * Compile the given Blade template contents.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function compileString($value){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		return $root->compileString($value);
	 }

	/**
	 * Register a custom Blade compiler.
	 *
	 * @static
	 * @param	Closure	$compiler
	 * @return void
	 */
	 public static function extend($compiler){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		 $root->extend($compiler);
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @static
	 * @param	string	$function
	 * @return string
	 */
	 public static function createMatcher($function){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		return $root->createMatcher($function);
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @static
	 * @param	string	$function
	 * @return string
	 */
	 public static function createOpenMatcher($function){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		return $root->createOpenMatcher($function);
	 }

	/**
	 * Create a plain Blade matcher.
	 *
	 * @static
	 * @param	string	$function
	 * @return string
	 */
	 public static function createPlainMatcher($function){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		return $root->createPlainMatcher($function);
	 }

	/**
	 * Sets the content tags used for the compiler.
	 *
	 * @static
	 * @param	string	$openTag
	 * @param	string	$closeTag
	 * @param	bool	$escaped
	 * @return void
	 */
	 public static function setContentTags($openTag, $closeTag, $escaped = false){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		 $root->setContentTags($openTag, $closeTag, $escaped);
	 }

	/**
	 * Sets the escaped content tags used for the compiler.
	 *
	 * @static
	 * @param	string	$openTag
	 * @param	string	$closeTag
	 * @return void
	 */
	 public static function setEscapedContentTags($openTag, $closeTag){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		 $root->setEscapedContentTags($openTag, $closeTag);
	 }

	/**
	 * Create a new compiler instance.
	 *
	 * @static
	 * @param	\Illuminate\Filesystem\Filesystem	$files
	 * @param	string	$cachePath
	 * @return void
	 */
	 public static function __construct($files, $cachePath){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		 $root->__construct($files, $cachePath);
	 }

	/**
	 * Get the path to the compiled version of a view.
	 *
	 * @static
	 * @param	string	$path
	 * @return string
	 */
	 public static function getCompiledPath($path){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		return $root->getCompiledPath($path);
	 }

	/**
	 * Determine if the view at the given path is expired.
	 *
	 * @static
	 * @param	string	$path
	 * @return bool
	 */
	 public static function isExpired($path){
		$root = new Illuminate\View\Compilers\BladeCompiler();
		return $root->isExpired($path);
	 }

 }
}

namespace  {
 class Cache extends Manager{
	/**
	 * @var \Illuminate\Cache\StoreInterface $root
	 */
	 static private $root;

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @static
	 * @param	string	$key
	 * @return mixed
	 */
	 public static function get($key){
		$root = new Illuminate\Cache\StoreInterface();
		return $root->get($key);
	 }

	/**
	 * Store an item in the cache for a given number of minutes.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @param	int	$minutes
	 * @return void
	 */
	 public static function put($key, $value, $minutes){
		$root = new Illuminate\Cache\StoreInterface();
		 $root->put($key, $value, $minutes);
	 }

	/**
	 * Increment the value of an item in the cache.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function increment($key, $value = 1){
		$root = new Illuminate\Cache\StoreInterface();
		 $root->increment($key, $value);
	 }

	/**
	 * Decrement the value of an item in the cache.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function decrement($key, $value = 1){
		$root = new Illuminate\Cache\StoreInterface();
		 $root->decrement($key, $value);
	 }

	/**
	 * Store an item in the cache indefinitely.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function forever($key, $value){
		$root = new Illuminate\Cache\StoreInterface();
		 $root->forever($key, $value);
	 }

	/**
	 * Remove an item from the cache.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function forget($key){
		$root = new Illuminate\Cache\StoreInterface();
		 $root->forget($key);
	 }

	/**
	 * Remove all items from the cache.
	 *
	 * @static
	 * @return void
	 */
	 public static function flush(){
		$root = new Illuminate\Cache\StoreInterface();
		 $root->flush();
	 }

	/**
	 * Get the cache key prefix.
	 *
	 * @static
	 * @return string
	 */
	 public static function getPrefix(){
		$root = new Illuminate\Cache\StoreInterface();
		return $root->getPrefix();
	 }

 }
}

namespace  {
 class ClassLoader{
	/**
	 * @var \Illuminate\Support\ClassLoader $root
	 */
	 static private $root;

	/**
	 * Load the given class file.
	 *
	 * @static
	 * @param	string	$class
	 * @return void
	 */
	 public static function load($class){
		$root = new Illuminate\Support\ClassLoader();
		 $root->load($class);
	 }

	/**
	 * Get the normal file name for a class.
	 *
	 * @static
	 * @param	string	$class
	 * @return string
	 */
	 public static function normalizeClass($class){
		$root = new Illuminate\Support\ClassLoader();
		return $root->normalizeClass($class);
	 }

	/**
	 * Register the given class loader on the auto-loader stack.
	 *
	 * @static
	 * @return void
	 */
	 public static function register(){
		$root = new Illuminate\Support\ClassLoader();
		 $root->register();
	 }

	/**
	 * Add directories to the class loader.
	 *
	 * @static
	 * @param	string|array	$directories
	 * @return void
	 */
	 public static function addDirectories($directories){
		$root = new Illuminate\Support\ClassLoader();
		 $root->addDirectories($directories);
	 }

	/**
	 * Remove directories from the class loader.
	 *
	 * @static
	 * @param	string|array	$directories
	 * @return void
	 */
	 public static function removeDirectories($directories = null){
		$root = new Illuminate\Support\ClassLoader();
		 $root->removeDirectories($directories);
	 }

	/**
	 * Gets all the directories registered with the loader.
	 *
	 * @static
	 * @return array
	 */
	 public static function getDirectories(){
		$root = new Illuminate\Support\ClassLoader();
		return $root->getDirectories();
	 }

 }
}

namespace  {
 class Config extends Illuminate\Support\Facades\Config{
	/**
	 * @var \Illuminate\Config\Repository $root
	 */
	 static private $root;

	/**
	 * Create a new configuration repository.
	 *
	 * @static
	 * @param	\Illuminate\Config\LoaderInterface	$loader
	 * @param	string	$environment
	 * @return void
	 */
	 public static function __construct($loader, $environment){
		$root = new Illuminate\Config\Repository();
		 $root->__construct($loader, $environment);
	 }

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function has($key){
		$root = new Illuminate\Config\Repository();
		return $root->has($key);
	 }

	/**
	 * Determine if a configuration group exists.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasGroup($key){
		$root = new Illuminate\Config\Repository();
		return $root->hasGroup($key);
	 }

	/**
	 * Get the specified configuration value.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return mixed
	 */
	 public static function get($key, $default = null){
		$root = new Illuminate\Config\Repository();
		return $root->get($key, $default);
	 }

	/**
	 * Set a given configuration value.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function set($key, $value){
		$root = new Illuminate\Config\Repository();
		 $root->set($key, $value);
	 }

	/**
	 * Register a package for cascading configuration.
	 *
	 * @static
	 * @param	string	$package
	 * @param	string	$hint
	 * @param	string	$namespace
	 * @return void
	 */
	 public static function package($package, $hint, $namespace = null){
		$root = new Illuminate\Config\Repository();
		 $root->package($package, $hint, $namespace);
	 }

	/**
	 * Register an after load callback for a given namespace.
	 *
	 * @static
	 * @param	string	$namespace
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function afterLoading($namespace, $callback){
		$root = new Illuminate\Config\Repository();
		 $root->afterLoading($namespace, $callback);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @static
	 * @param	string	$namespace
	 * @param	string	$hint
	 * @return void
	 */
	 public static function addNamespace($namespace, $hint){
		$root = new Illuminate\Config\Repository();
		 $root->addNamespace($namespace, $hint);
	 }

	/**
	 * Returns all registered namespaces with the config
	 * loader.
	 *
	 * @static
	 * @return array
	 */
	 public static function getNamespaces(){
		$root = new Illuminate\Config\Repository();
		return $root->getNamespaces();
	 }

	/**
	 * Get the loader implementation.
	 *
	 * @static
	 * @return \Illuminate\Config\LoaderInterface
	 */
	 public static function getLoader(){
		$root = new Illuminate\Config\Repository();
		return $root->getLoader();
	 }

	/**
	 * Set the loader implementation.
	 *
	 * @static
	 * @param	\Illuminate\Config\LoaderInterface	$loader
	 * @return void
	 */
	 public static function setLoader($loader){
		$root = new Illuminate\Config\Repository();
		 $root->setLoader($loader);
	 }

	/**
	 * Get the current configuration environment.
	 *
	 * @static
	 * @return string
	 */
	 public static function getEnvironment(){
		$root = new Illuminate\Config\Repository();
		return $root->getEnvironment();
	 }

	/**
	 * Get the after load callback array.
	 *
	 * @static
	 * @return array
	 */
	 public static function getAfterLoadCallbacks(){
		$root = new Illuminate\Config\Repository();
		return $root->getAfterLoadCallbacks();
	 }

	/**
	 * Get all of the configuration items.
	 *
	 * @static
	 * @return array
	 */
	 public static function getItems(){
		$root = new Illuminate\Config\Repository();
		return $root->getItems();
	 }

	/**
	 * Determine if the given configuration option exists.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function offsetExists($key){
		$root = new Illuminate\Config\Repository();
		return $root->offsetExists($key);
	 }

	/**
	 * Get a configuration option.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function offsetGet($key){
		$root = new Illuminate\Config\Repository();
		return $root->offsetGet($key);
	 }

	/**
	 * Set a configuration option.
	 *
	 * @static
	 * @param	string	$key
	 * @param	string	$value
	 * @return void
	 */
	 public static function offsetSet($key, $value){
		$root = new Illuminate\Config\Repository();
		 $root->offsetSet($key, $value);
	 }

	/**
	 * Unset a configuration option.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function offsetUnset($key){
		$root = new Illuminate\Config\Repository();
		 $root->offsetUnset($key);
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @static
	 * @param	string	$key
	 * @return array
	 */
	 public static function parseKey($key){
		$root = new Illuminate\Config\Repository();
		return $root->parseKey($key);
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @static
	 * @param	string	$key
	 * @param	array	$parsed
	 * @return void
	 */
	 public static function setParsedKey($key, $parsed){
		$root = new Illuminate\Config\Repository();
		 $root->setParsedKey($key, $parsed);
	 }

 }
}

namespace  {
 class Controller{
	/**
	 * @var \Illuminate\Routing\Controllers\Controller $root
	 */
	 static private $root;

	/**
	 * Register a new "before" filter on the controller.
	 *
	 * @static
	 * @param	string	$filter
	 * @param	array	$options
	 * @return void
	 */
	 public static function beforeFilter($filter, $options = array()){
		$root = new Illuminate\Routing\Controllers\Controller();
		 $root->beforeFilter($filter, $options);
	 }

	/**
	 * Register a new "after" filter on the controller.
	 *
	 * @static
	 * @param	string	$filter
	 * @param	array	$options
	 * @return void
	 */
	 public static function afterFilter($filter, $options = array()){
		$root = new Illuminate\Routing\Controllers\Controller();
		 $root->afterFilter($filter, $options);
	 }

	/**
	 * Execute an action on the controller.
	 *
	 * @static
	 * @param	\Illuminate\Container\Container	$container
	 * @param	\Illuminate\Routing\Router	$router
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function callAction($container, $router, $method, $parameters){
		$root = new Illuminate\Routing\Controllers\Controller();
		return $root->callAction($container, $router, $method, $parameters);
	 }

	/**
	 * Get the code registered filters.
	 *
	 * @static
	 * @return array
	 */
	 public static function getControllerFilters(){
		$root = new Illuminate\Routing\Controllers\Controller();
		return $root->getControllerFilters();
	 }

	/**
	 * Handle calls to missing methods on the controller.
	 *
	 * @static
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function missingMethod($parameters){
		$root = new Illuminate\Routing\Controllers\Controller();
		return $root->missingMethod($parameters);
	 }

	/**
	 * Handle calls to missing methods on the controller.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Routing\Controllers\Controller();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Cookie extends Illuminate\Support\Facades\Cookie{
	/**
	 * @var \Illuminate\Cookie\CookieJar $root
	 */
	 static private $root;

	/**
	 * Create a new cookie manager instance.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @param	\Illuminate\Encryption\Encrypter	$encrypter
	 * @return void
	 */
	 public static function __construct($request, $encrypter){
		$root = new Illuminate\Cookie\CookieJar();
		 $root->__construct($request, $encrypter);
	 }

	/**
	 * Determine if a cookie exists and is not null.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function has($key){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->has($key);
	 }

	/**
	 * Get the value of the given cookie.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return mixed
	 */
	 public static function get($key, $default = null){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->get($key, $default);
	 }

	/**
	 * Create a new cookie instance.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	int	$minutes
	 * @param	string	$path
	 * @param	string	$domain
	 * @param	bool	$secure
	 * @param	bool	$httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 */
	 public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * Create a cookie that lasts "forever" (five years).
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	string	$path
	 * @param	string	$domain
	 * @param	bool	$secure
	 * @param	bool	$httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 */
	 public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->forever($name, $value, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * Expire the given cookie.
	 *
	 * @static
	 * @param	string	$name
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 */
	 public static function forget($name){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->forget($name);
	 }

	/**
	 * Set the default path and domain for the jar.
	 *
	 * @static
	 * @param	string	$path
	 * @param	string	$domain
	 * @return void
	 */
	 public static function setDefaultPathAndDomain($path, $domain){
		$root = new Illuminate\Cookie\CookieJar();
		 $root->setDefaultPathAndDomain($path, $domain);
	 }

	/**
	 * Get the request instance.
	 *
	 * @static
	 * @return \Symfony\Component\HttpFoundation\Request
	 */
	 public static function getRequest(){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->getRequest();
	 }

	/**
	 * Get the encrypter instance.
	 *
	 * @static
	 * @return \Illuminate\Encryption\Encrypter
	 */
	 public static function getEncrypter(){
		$root = new Illuminate\Cookie\CookieJar();
		return $root->getEncrypter();
	 }

 }
}

namespace  {
 class Crypt extends Illuminate\Support\Facades\Crypt{
	/**
	 * @var \Illuminate\Encryption\Encrypter $root
	 */
	 static private $root;

	/**
	 * Create a new encrypter instance.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function __construct($key){
		$root = new Illuminate\Encryption\Encrypter();
		 $root->__construct($key);
	 }

	/**
	 * Encrypt the given value.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function encrypt($value){
		$root = new Illuminate\Encryption\Encrypter();
		return $root->encrypt($value);
	 }

	/**
	 * Decrypt the given value.
	 *
	 * @static
	 * @param	string	$payload
	 * @return string
	 */
	 public static function decrypt($payload){
		$root = new Illuminate\Encryption\Encrypter();
		return $root->decrypt($payload);
	 }

	/**
	 * Set the encryption key.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function setKey($key){
		$root = new Illuminate\Encryption\Encrypter();
		 $root->setKey($key);
	 }

	/**
	 * Set the encryption cipher.
	 *
	 * @static
	 * @param	string	$cipher
	 * @return void
	 */
	 public static function setCipher($cipher){
		$root = new Illuminate\Encryption\Encrypter();
		 $root->setCipher($cipher);
	 }

	/**
	 * Set the encryption mode.
	 *
	 * @static
	 * @param	string	$mode
	 * @return void
	 */
	 public static function setMode($mode){
		$root = new Illuminate\Encryption\Encrypter();
		 $root->setMode($mode);
	 }

 }
}

namespace  {
 class DB extends Illuminate\Support\Facades\DB{
	/**
	 * @var \Illuminate\Database\Connection $root
	 */
	 static private $root;

	/**
	 * Create a new database connection instance.
	 *
	 * @static
	 * @param	PDO	$pdo
	 * @param	string	$database
	 * @param	string	$tablePrefix
	 * @param	array	$config
	 * @return void
	 */
	 public static function __construct($pdo, $database = '', $tablePrefix = '', $config = array()){
		$root = new Illuminate\Database\Connection();
		 $root->__construct($pdo, $database, $tablePrefix, $config);
	 }

	/**
	 * Set the query grammar to the default implementation.
	 *
	 * @static
	 * @return void
	 */
	 public static function useDefaultQueryGrammar(){
		$root = new Illuminate\Database\Connection();
		 $root->useDefaultQueryGrammar();
	 }

	/**
	 * Set the schema grammar to the default implementation.
	 *
	 * @static
	 * @return void
	 */
	 public static function useDefaultSchemaGrammar(){
		$root = new Illuminate\Database\Connection();
		 $root->useDefaultSchemaGrammar();
	 }

	/**
	 * Set the query post processor to the default implementation.
	 *
	 * @static
	 * @return void
	 */
	 public static function useDefaultPostProcessor(){
		$root = new Illuminate\Database\Connection();
		 $root->useDefaultPostProcessor();
	 }

	/**
	 * Get a schema builder instance for the connection.
	 *
	 * @static
	 * @return \Illuminate\Database\Schema\Builder
	 */
	 public static function getSchemaBuilder(){
		$root = new Illuminate\Database\Connection();
		return $root->getSchemaBuilder();
	 }

	/**
	 * Begin a fluent query against a database table.
	 *
	 * @static
	 * @param	string	$table
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function table($table){
		$root = new Illuminate\Database\Connection();
		return $root->table($table);
	 }

	/**
	 * Get a new raw query expression.
	 *
	 * @static
	 * @param	mixed	$value
	 * @return \Illuminate\Database\Query\Expression
	 */
	 public static function raw($value){
		$root = new Illuminate\Database\Connection();
		return $root->raw($value);
	 }

	/**
	 * Run a select statement and return a single result.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return mixed
	 */
	 public static function selectOne($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->selectOne($query, $bindings);
	 }

	/**
	 * Run a select statement against the database.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return array
	 */
	 public static function select($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->select($query, $bindings);
	 }

	/**
	 * Run an insert statement against the database.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return bool
	 */
	 public static function insert($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->insert($query, $bindings);
	 }

	/**
	 * Run an update statement against the database.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return int
	 */
	 public static function update($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->update($query, $bindings);
	 }

	/**
	 * Run a delete statement against the database.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return int
	 */
	 public static function delete($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->delete($query, $bindings);
	 }

	/**
	 * Execute an SQL statement and return the boolean result.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return bool
	 */
	 public static function statement($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->statement($query, $bindings);
	 }

	/**
	 * Run an SQL statement and get the number of rows affected.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @return int
	 */
	 public static function affectingStatement($query, $bindings = array()){
		$root = new Illuminate\Database\Connection();
		return $root->affectingStatement($query, $bindings);
	 }

	/**
	 * Run a raw, unprepared query against the PDO connection.
	 *
	 * @static
	 * @param	string	$query
	 * @return bool
	 */
	 public static function unprepared($query){
		$root = new Illuminate\Database\Connection();
		return $root->unprepared($query);
	 }

	/**
	 * Prepare the query bindings for execution.
	 *
	 * @static
	 * @param	array	$bindings
	 * @return array
	 */
	 public static function prepareBindings($bindings){
		$root = new Illuminate\Database\Connection();
		return $root->prepareBindings($bindings);
	 }

	/**
	 * Execute a Closure within a transaction.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return mixed
	 */
	 public static function transaction($callback){
		$root = new Illuminate\Database\Connection();
		return $root->transaction($callback);
	 }

	/**
	 * Execute the given callback in "dry run" mode.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return array
	 */
	 public static function pretend($callback){
		$root = new Illuminate\Database\Connection();
		return $root->pretend($callback);
	 }

	/**
	 * Log a query in the connection's query log.
	 *
	 * @static
	 * @param	string	$query
	 * @param	array	$bindings
	 * @param	$time
	 * @return void
	 */
	 public static function logQuery($query, $bindings, $time = null){
		$root = new Illuminate\Database\Connection();
		 $root->logQuery($query, $bindings, $time);
	 }

	/**
	 * Register a database query listener with the connection.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function listen($callback){
		$root = new Illuminate\Database\Connection();
		 $root->listen($callback);
	 }

	/**
	 * Get a Doctrine Schema Column instance.
	 *
	 * @static
	 * @param	string	$table
	 * @param	string	$column
	 * @return \Doctrine\DBAL\Schema\Column
	 */
	 public static function getDoctrineColumn($table, $column){
		$root = new Illuminate\Database\Connection();
		return $root->getDoctrineColumn($table, $column);
	 }

	/**
	 * Get the Doctrine DBAL schema manager for the connection.
	 *
	 * @static
	 * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
	 */
	 public static function getDoctrineSchemaManager(){
		$root = new Illuminate\Database\Connection();
		return $root->getDoctrineSchemaManager();
	 }

	/**
	 * Get the Doctrine DBAL database connection instance.
	 *
	 * @static
	 * @return \Doctrine\DBAL\Connection
	 */
	 public static function getDoctrineConnection(){
		$root = new Illuminate\Database\Connection();
		return $root->getDoctrineConnection();
	 }

	/**
	 * Get the currently used PDO connection.
	 *
	 * @static
	 * @return PDO
	 */
	 public static function getPdo(){
		$root = new Illuminate\Database\Connection();
		return $root->getPdo();
	 }

	/**
	 * Get the database connection name.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function getName(){
		$root = new Illuminate\Database\Connection();
		return $root->getName();
	 }

	/**
	 * Get an option from the configuration options.
	 *
	 * @static
	 * @param	string	$option
	 * @return mixed
	 */
	 public static function getConfig($option){
		$root = new Illuminate\Database\Connection();
		return $root->getConfig($option);
	 }

	/**
	 * Get the PDO driver name.
	 *
	 * @static
	 * @return string
	 */
	 public static function getDriverName(){
		$root = new Illuminate\Database\Connection();
		return $root->getDriverName();
	 }

	/**
	 * Get the query grammar used by the connection.
	 *
	 * @static
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 */
	 public static function getQueryGrammar(){
		$root = new Illuminate\Database\Connection();
		return $root->getQueryGrammar();
	 }

	/**
	 * Set the query grammar used by the connection.
	 *
	 * @static
	 * @param	\Illuminate\Database\Query\Grammars\Grammar
	 * @return void
	 */
	 public static function setQueryGrammar($grammar){
		$root = new Illuminate\Database\Connection();
		 $root->setQueryGrammar($grammar);
	 }

	/**
	 * Get the schema grammar used by the connection.
	 *
	 * @static
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 */
	 public static function getSchemaGrammar(){
		$root = new Illuminate\Database\Connection();
		return $root->getSchemaGrammar();
	 }

	/**
	 * Set the schema grammar used by the connection.
	 *
	 * @static
	 * @param	\Illuminate\Database\Schema\Grammars\Grammar
	 * @return void
	 */
	 public static function setSchemaGrammar($grammar){
		$root = new Illuminate\Database\Connection();
		 $root->setSchemaGrammar($grammar);
	 }

	/**
	 * Get the query post processor used by the connection.
	 *
	 * @static
	 * @return \Illuminate\Database\Query\Processors\Processor
	 */
	 public static function getPostProcessor(){
		$root = new Illuminate\Database\Connection();
		return $root->getPostProcessor();
	 }

	/**
	 * Set the query post processor used by the connection.
	 *
	 * @static
	 * @param	\Illuminate\Database\Query\Processors\Processor
	 * @return void
	 */
	 public static function setPostProcessor($processor){
		$root = new Illuminate\Database\Connection();
		 $root->setPostProcessor($processor);
	 }

	/**
	 * Get the event dispatcher used by the connection.
	 *
	 * @static
	 * @return \Illuminate\Events\Dispatcher
	 */
	 public static function getEventDispatcher(){
		$root = new Illuminate\Database\Connection();
		return $root->getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance on the connection.
	 *
	 * @static
	 * @param	\Illuminate\Events\Dispatcher
	 * @return void
	 */
	 public static function setEventDispatcher($events){
		$root = new Illuminate\Database\Connection();
		 $root->setEventDispatcher($events);
	 }

	/**
	 * Get the paginator environment instance.
	 *
	 * @static
	 * @return \Illuminate\Pagination\Environment
	 */
	 public static function getPaginator(){
		$root = new Illuminate\Database\Connection();
		return $root->getPaginator();
	 }

	/**
	 * Set the pagination environment instance.
	 *
	 * @static
	 * @param	\Illuminate\Pagination\Environment|Closure	$paginator
	 * @return void
	 */
	 public static function setPaginator($paginator){
		$root = new Illuminate\Database\Connection();
		 $root->setPaginator($paginator);
	 }

	/**
	 * Determine if the connection in a "dry run".
	 *
	 * @static
	 * @return bool
	 */
	 public static function pretending(){
		$root = new Illuminate\Database\Connection();
		return $root->pretending();
	 }

	/**
	 * Get the default fetch mode for the connection.
	 *
	 * @static
	 * @return int
	 */
	 public static function getFetchMode(){
		$root = new Illuminate\Database\Connection();
		return $root->getFetchMode();
	 }

	/**
	 * Set the default fetch mode for the connection.
	 *
	 * @static
	 * @param	int	$fetchMode
	 * @return int
	 */
	 public static function setFetchMode($fetchMode){
		$root = new Illuminate\Database\Connection();
		return $root->setFetchMode($fetchMode);
	 }

	/**
	 * Get the connection query log.
	 *
	 * @static
	 * @return array
	 */
	 public static function getQueryLog(){
		$root = new Illuminate\Database\Connection();
		return $root->getQueryLog();
	 }

	/**
	 * Clear the query log.
	 *
	 * @static
	 * @return void
	 */
	 public static function flushQueryLog(){
		$root = new Illuminate\Database\Connection();
		 $root->flushQueryLog();
	 }

	/**
	 * Enable the query log on the connection.
	 *
	 * @static
	 * @return void
	 */
	 public static function enableQueryLog(){
		$root = new Illuminate\Database\Connection();
		 $root->enableQueryLog();
	 }

	/**
	 * Disable the query log on the connection.
	 *
	 * @static
	 * @return void
	 */
	 public static function disableQueryLog(){
		$root = new Illuminate\Database\Connection();
		 $root->disableQueryLog();
	 }

	/**
	 * Get the name of the connected database.
	 *
	 * @static
	 * @return string
	 */
	 public static function getDatabaseName(){
		$root = new Illuminate\Database\Connection();
		return $root->getDatabaseName();
	 }

	/**
	 * Set the name of the connected database.
	 *
	 * @static
	 * @param	string	$database
	 * @return string
	 */
	 public static function setDatabaseName($database){
		$root = new Illuminate\Database\Connection();
		return $root->setDatabaseName($database);
	 }

	/**
	 * Get the table prefix for the connection.
	 *
	 * @static
	 * @return string
	 */
	 public static function getTablePrefix(){
		$root = new Illuminate\Database\Connection();
		return $root->getTablePrefix();
	 }

	/**
	 * Set the table prefix in use by the connection.
	 *
	 * @static
	 * @param	string	$prefix
	 * @return void
	 */
	 public static function setTablePrefix($prefix){
		$root = new Illuminate\Database\Connection();
		 $root->setTablePrefix($prefix);
	 }

	/**
	 * Set the table prefix and return the grammar.
	 *
	 * @static
	 * @param	\Illuminate\Database\Grammar	$grammar
	 * @return \Illuminate\Database\Grammar
	 */
	 public static function withTablePrefix($grammar){
		$root = new Illuminate\Database\Connection();
		return $root->withTablePrefix($grammar);
	 }

 }
}

namespace  {
 class Eloquent extends QueryBuilder{
	/**
	 * @var \Illuminate\Database\Eloquent\Model $root
	 */
	 static private $root;

	/**
	 * Create a new Eloquent model instance.
	 *
	 * @static
	 * @param	array	$attributes
	 * @return void
	 */
	 public static function __construct($attributes = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->__construct($attributes);
	 }

	/**
	 * Fill the model with an array of attributes.
	 *
	 * @static
	 * @param	array	$attributes
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function fill($attributes){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->fill($attributes);
	 }

	/**
	 * Create a new instance of the given model.
	 *
	 * @static
	 * @param	array	$attributes
	 * @param	bool	$exists
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function newInstance($attributes = array(), $exists = false){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->newInstance($attributes, $exists);
	 }

	/**
	 * Create a new model instance that is existing.
	 *
	 * @static
	 * @param	array	$attributes
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function newFromBuilder($attributes = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->newFromBuilder($attributes);
	 }

	/**
	 * Save a new model and return the instance.
	 *
	 * @static
	 * @param	array	$attributes
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function create($attributes){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->create($attributes);
	 }

	/**
	 * Begin querying the model on a given connection.
	 *
	 * @static
	 * @param	string	$connection
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 public static function on($connection){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->on($connection);
	 }

	/**
	 * Get all of the models from the database.
	 *
	 * @static
	 * @param	array	$columns
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	 public static function all($columns = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->all($columns);
	 }

	/**
	 * Find a model by its primary key.
	 *
	 * @static
	 * @param	mixed	$id
	 * @param	array	$columns
	 * @return \Illuminate\Database\Eloquent\Model|Collection
	 */
	 public static function find($id, $columns = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->find($id, $columns);
	 }

	/**
	 * Find a model by its primary key or throw an exception.
	 *
	 * @static
	 * @param	mixed	$id
	 * @param	array	$columns
	 * @return \Illuminate\Database\Eloquent\Model|Collection
	 */
	 public static function findOrFail($id, $columns = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->findOrFail($id, $columns);
	 }

	/**
	 * Eager load relations on the model.
	 *
	 * @static
	 * @param	dynamic	string
	 * @return void
	 */
	 public static function load(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->load();
	 }

	/**
	 * Being querying a model with eager loading.
	 *
	 * @static
	 * @param	array	$relations
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 public static function with($relations){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->with($relations);
	 }

	/**
	 * Define a one-to-one relationship.
	 *
	 * @static
	 * @param	string	$related
	 * @param	string	$foreignKey
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	 public static function hasOne($related, $foreignKey = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->hasOne($related, $foreignKey);
	 }

	/**
	 * Define a polymorphic one-to-one relationship.
	 *
	 * @static
	 * @param	string	$related
	 * @param	string	$name
	 * @param	string	$type
	 * @param	string	$id
	 * @return \Illuminate\Database\Eloquent\Relations\MorphOne
	 */
	 public static function morphOne($related, $name, $type = null, $id = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->morphOne($related, $name, $type, $id);
	 }

	/**
	 * Define an inverse one-to-one or many relationship.
	 *
	 * @static
	 * @param	string	$related
	 * @param	string	$foreignKey
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	 public static function belongsTo($related, $foreignKey = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->belongsTo($related, $foreignKey);
	 }

	/**
	 * Define an polymorphic, inverse one-to-one or many relationship.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$type
	 * @param	string	$id
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	 public static function morphTo($name = null, $type = null, $id = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->morphTo($name, $type, $id);
	 }

	/**
	 * Define a one-to-many relationship.
	 *
	 * @static
	 * @param	string	$related
	 * @param	string	$foreignKey
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 public static function hasMany($related, $foreignKey = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->hasMany($related, $foreignKey);
	 }

	/**
	 * Define a polymorphic one-to-many relationship.
	 *
	 * @static
	 * @param	string	$related
	 * @param	string	$name
	 * @param	string	$type
	 * @param	string	$id
	 * @return \Illuminate\Database\Eloquent\Relations\MorphMany
	 */
	 public static function morphMany($related, $name, $type = null, $id = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->morphMany($related, $name, $type, $id);
	 }

	/**
	 * Define a many-to-many relationship.
	 *
	 * @static
	 * @param	string	$related
	 * @param	string	$table
	 * @param	string	$foreignKey
	 * @param	string	$otherKey
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	 public static function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->belongsToMany($related, $table, $foreignKey, $otherKey);
	 }

	/**
	 * Get the joining table name for a many-to-many relation.
	 *
	 * @static
	 * @param	string	$related
	 * @return string
	 */
	 public static function joiningTable($related){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->joiningTable($related);
	 }

	/**
	 * Destroy the models for the given IDs.
	 *
	 * @static
	 * @param	array|int	$ids
	 * @return void
	 */
	 public static function destroy($ids){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->destroy($ids);
	 }

	/**
	 * Delete the model from the database.
	 *
	 * @static
	 * @return void
	 */
	 public static function delete(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->delete();
	 }

	/**
	 * Force a hard delete on a soft deleted model.
	 *
	 * @static
	 * @return void
	 */
	 public static function forceDelete(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->forceDelete();
	 }

	/**
	 * Restore a soft-deleted model instance.
	 *
	 * @static
	 * @return void
	 */
	 public static function restore(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->restore();
	 }

	/**
	 * Register a saving model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function saving($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->saving($callback);
	 }

	/**
	 * Register a saved model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function saved($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->saved($callback);
	 }

	/**
	 * Register an updating model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function updating($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->updating($callback);
	 }

	/**
	 * Register an updated model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function updated($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->updated($callback);
	 }

	/**
	 * Register a creating model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function creating($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->creating($callback);
	 }

	/**
	 * Register a created model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function created($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->created($callback);
	 }

	/**
	 * Register a deleting model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function deleting($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->deleting($callback);
	 }

	/**
	 * Register a deleted model event with the dispatcher.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function deleted($callback){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->deleted($callback);
	 }

	/**
	 * Update the model in the database.
	 *
	 * @static
	 * @param	array	$attributes
	 * @return mixed
	 */
	 public static function update($attributes = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->update($attributes);
	 }

	/**
	 * Save the model to the database.
	 *
	 * @static
	 * @param	array	$options
	 * @return bool
	 */
	 public static function save($options = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->save($options);
	 }

	/**
	 * Touch the owning relations of the model.
	 *
	 * @static
	 * @return void
	 */
	 public static function touchOwners(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->touchOwners();
	 }

	/**
	 * Determine if the model touches a given relation.
	 *
	 * @static
	 * @param	string	$relation
	 * @return bool
	 */
	 public static function touches($relation){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->touches($relation);
	 }

	/**
	 * Update the model's update timestamp.
	 *
	 * @static
	 * @return bool
	 */
	 public static function touch(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->touch();
	 }

	/**
	 * Set the value of the "created at" attribute.
	 *
	 * @static
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function setCreatedAt($value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setCreatedAt($value);
	 }

	/**
	 * Set the value of the "updated at" attribute.
	 *
	 * @static
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function setUpdatedAt($value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setUpdatedAt($value);
	 }

	/**
	 * Get the name of the "created at" column.
	 *
	 * @static
	 * @return string
	 */
	 public static function getCreatedAtColumn(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getCreatedAtColumn();
	 }

	/**
	 * Get the name of the "updated at" column.
	 *
	 * @static
	 * @return string
	 */
	 public static function getUpdatedAtColumn(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getUpdatedAtColumn();
	 }

	/**
	 * Get the name of the "deleted at" column.
	 *
	 * @static
	 * @return string
	 */
	 public static function getDeletedAtColumn(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getDeletedAtColumn();
	 }

	/**
	 * Get the fully qualified "deleted at" column.
	 *
	 * @static
	 * @return string
	 */
	 public static function getQualifiedDeletedAtColumn(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getQualifiedDeletedAtColumn();
	 }

	/**
	 * Get a fresh timestamp for the model.
	 *
	 * @static
	 * @return mixed
	 */
	 public static function freshTimestamp(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->freshTimestamp();
	 }

	/**
	 * Get a new query builder for the model's table.
	 *
	 * @static
	 * @param	bool	$excludeDeleted
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 public static function newQuery($excludeDeleted = true){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->newQuery($excludeDeleted);
	 }

	/**
	 * Get a new query builder that includes soft deletes.
	 *
	 * @static
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 public static function newQueryWithDeleted(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->newQueryWithDeleted();
	 }

	/**
	 * Get a new query builder that includes soft deletes.
	 *
	 * @static
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 public static function withTrashed(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->withTrashed();
	 }

	/**
	 * Get a new query builder that only includes soft deletes.
	 *
	 * @static
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 public static function trashed(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->trashed();
	 }

	/**
	 * Create a new Eloquent Collection instance.
	 *
	 * @static
	 * @param	array	$models
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	 public static function newCollection($models = array()){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->newCollection($models);
	 }

	/**
	 * Get the table associated with the model.
	 *
	 * @static
	 * @return string
	 */
	 public static function getTable(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getTable();
	 }

	/**
	 * Set the table associated with the model.
	 *
	 * @static
	 * @param	string	$table
	 * @return void
	 */
	 public static function setTable($table){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setTable($table);
	 }

	/**
	 * Get the value of the model's primary key.
	 *
	 * @static
	 * @return mixed
	 */
	 public static function getKey(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getKey();
	 }

	/**
	 * Get the primary key for the model.
	 *
	 * @static
	 * @return string
	 */
	 public static function getKeyName(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getKeyName();
	 }

	/**
	 * Get the table qualified key name.
	 *
	 * @static
	 * @return string
	 */
	 public static function getQualifiedKeyName(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getQualifiedKeyName();
	 }

	/**
	 * Determine if the model uses timestamps.
	 *
	 * @static
	 * @return bool
	 */
	 public static function usesTimestamps(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->usesTimestamps();
	 }

	/**
	 * Determine if the model instance uses soft deletes.
	 *
	 * @static
	 * @return bool
	 */
	 public static function isSoftDeleting(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->isSoftDeleting();
	 }

	/**
	 * Set the soft deleting property on the model.
	 *
	 * @static
	 * @param	bool	$enabled
	 * @return void
	 */
	 public static function setSoftDeleting($enabled){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setSoftDeleting($enabled);
	 }

	/**
	 * Get the number of models to return per page.
	 *
	 * @static
	 * @return int
	 */
	 public static function getPerPage(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getPerPage();
	 }

	/**
	 * Set the number of models ot return per page.
	 *
	 * @static
	 * @param	int	$perPage
	 * @return void
	 */
	 public static function setPerPage($perPage){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setPerPage($perPage);
	 }

	/**
	 * Get the default foreign key name for the model.
	 *
	 * @static
	 * @return string
	 */
	 public static function getForeignKey(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getForeignKey();
	 }

	/**
	 * Get the hidden attributes for the model.
	 *
	 * @static
	 * @return array
	 */
	 public static function getHidden(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getHidden();
	 }

	/**
	 * Set the hidden attributes for the model.
	 *
	 * @static
	 * @param	array	$hidden
	 * @return void
	 */
	 public static function setHidden($hidden){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setHidden($hidden);
	 }

	/**
	 * Set the visible attributes for the model.
	 *
	 * @static
	 * @param	array	$visible
	 * @return void
	 */
	 public static function setVisible($visible){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setVisible($visible);
	 }

	/**
	 * Get the fillable attributes for the model.
	 *
	 * @static
	 * @return array
	 */
	 public static function getFillable(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getFillable();
	 }

	/**
	 * Set the fillable attributes for the model.
	 *
	 * @static
	 * @param	array	$fillable
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function fillable($fillable){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->fillable($fillable);
	 }

	/**
	 * Set the guarded attributes for the model.
	 *
	 * @static
	 * @param	array	$guarded
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function guard($guarded){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->guard($guarded);
	 }

	/**
	 * Disable all mass assignable restrictions.
	 *
	 * @static
	 * @return void
	 */
	 public static function unguard(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->unguard();
	 }

	/**
	 * Enable the mass assignment restrictions.
	 *
	 * @static
	 * @return void
	 */
	 public static function reguard(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->reguard();
	 }

	/**
	 * Set "unguard" to a given state.
	 *
	 * @static
	 * @param	bool	$state
	 * @return void
	 */
	 public static function setUnguardState($state){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setUnguardState($state);
	 }

	/**
	 * Determine if the given attribute may be mass assigned.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function isFillable($key){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->isFillable($key);
	 }

	/**
	 * Determine if the given key is guarded.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function isGuarded($key){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->isGuarded($key);
	 }

	/**
	 * Determine if the model is totally guarded.
	 *
	 * @static
	 * @return bool
	 */
	 public static function totallyGuarded(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->totallyGuarded();
	 }

	/**
	 * Get the relationships that are touched on save.
	 *
	 * @static
	 * @return array
	 */
	 public static function getTouchedRelations(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getTouchedRelations();
	 }

	/**
	 * Set the relationships that are touched on save.
	 *
	 * @static
	 * @param	array	$touches
	 * @return void
	 */
	 public static function setTouchedRelations($touches){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setTouchedRelations($touches);
	 }

	/**
	 * Get the value indicating whether the IDs are incrementing.
	 *
	 * @static
	 * @return bool
	 */
	 public static function getIncrementing(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getIncrementing();
	 }

	/**
	 * Set whether IDs are incrementing.
	 *
	 * @static
	 * @param	bool	$value
	 * @return void
	 */
	 public static function setIncrementing($value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setIncrementing($value);
	 }

	/**
	 * Convert the model instance to JSON.
	 *
	 * @static
	 * @param	int	$options
	 * @return string
	 */
	 public static function toJson($options = 0){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->toJson($options);
	 }

	/**
	 * Convert the model instance to an array.
	 *
	 * @static
	 * @return array
	 */
	 public static function toArray(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->toArray();
	 }

	/**
	 * Convert the model's attributes to an array.
	 *
	 * @static
	 * @return array
	 */
	 public static function attributesToArray(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->attributesToArray();
	 }

	/**
	 * Get the model's relationships in array form.
	 *
	 * @static
	 * @return array
	 */
	 public static function relationsToArray(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->relationsToArray();
	 }

	/**
	 * Get an attribute from the model.
	 *
	 * @static
	 * @param	string	$key
	 * @return mixed
	 */
	 public static function getAttribute($key){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getAttribute($key);
	 }

	/**
	 * Determine if a get mutator exists for an attribute.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasGetMutator($key){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->hasGetMutator($key);
	 }

	/**
	 * Set a given attribute on the model.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function setAttribute($key, $value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setAttribute($key, $value);
	 }

	/**
	 * Determine if a set mutator exists for an attribute.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasSetMutator($key){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->hasSetMutator($key);
	 }

	/**
	 * Clone the model into a new, non-existing instance.
	 *
	 * @static
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function replicate(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->replicate();
	 }

	/**
	 * Get all of the current attributes on the model.
	 *
	 * @static
	 * @return array
	 */
	 public static function getAttributes(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getAttributes();
	 }

	/**
	 * Set the array of model attributes. No checking is done.
	 *
	 * @static
	 * @param	array	$attributes
	 * @param	bool	$sync
	 * @return void
	 */
	 public static function setRawAttributes($attributes, $sync = false){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setRawAttributes($attributes, $sync);
	 }

	/**
	 * Get the model's original attribute values.
	 *
	 * @static
	 * @param	string|null	$key
	 * @param	mixed	$default
	 * @return array
	 */
	 public static function getOriginal($key = null, $default = null){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getOriginal($key, $default);
	 }

	/**
	 * Sync the original attributes with the current.
	 *
	 * @static
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function syncOriginal(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->syncOriginal();
	 }

	/**
	 * Get the attributes that have been changed since last sync.
	 *
	 * @static
	 * @return array
	 */
	 public static function getDirty(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getDirty();
	 }

	/**
	 * Get a specified relationship.
	 *
	 * @static
	 * @param	string	$relation
	 * @return mixed
	 */
	 public static function getRelation($relation){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getRelation($relation);
	 }

	/**
	 * Set the specific relationship in the model.
	 *
	 * @static
	 * @param	string	$relation
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function setRelation($relation, $value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setRelation($relation, $value);
	 }

	/**
	 * Set the entire relations array on the model.
	 *
	 * @static
	 * @param	array	$relations
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	 public static function setRelations($relations){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->setRelations($relations);
	 }

	/**
	 * Get the database connection for the model.
	 *
	 * @static
	 * @return \Illuminate\Database\Connection
	 */
	 public static function getConnection(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getConnection();
	 }

	/**
	 * Get the current connection name for the model.
	 *
	 * @static
	 * @return string
	 */
	 public static function getConnectionName(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getConnectionName();
	 }

	/**
	 * Set the connection associated with the model.
	 *
	 * @static
	 * @param	string	$name
	 * @return void
	 */
	 public static function setConnection($name){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setConnection($name);
	 }

	/**
	 * Resolve a connection instance by name.
	 *
	 * @static
	 * @param	string	$connection
	 * @return \Illuminate\Database\Connection
	 */
	 public static function resolveConnection($connection){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->resolveConnection($connection);
	 }

	/**
	 * Get the connection resolver instance.
	 *
	 * @static
	 * @return \Illuminate\Database\ConnectionResolverInterface
	 */
	 public static function getConnectionResolver(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getConnectionResolver();
	 }

	/**
	 * Set the connection resolver instance.
	 *
	 * @static
	 * @param	\Illuminate\Database\ConnectionResolverInterface	$resolver
	 * @return void
	 */
	 public static function setConnectionResolver($resolver){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setConnectionResolver($resolver);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @static
	 * @return \Illuminate\Events\Dispatcher
	 */
	 public static function getEventDispatcher(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @static
	 * @param	\Illuminate\Events\Dispatcher
	 * @return void
	 */
	 public static function setEventDispatcher($dispatcher){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->setEventDispatcher($dispatcher);
	 }

	/**
	 * Unset the event dispatcher for models.
	 *
	 * @static
	 * @return void
	 */
	 public static function unsetEventDispatcher(){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->unsetEventDispatcher();
	 }

	/**
	 * Get the mutated attributes for a given instance.
	 *
	 * @static
	 * @return array
	 */
	 public static function getMutatedAttributes(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->getMutatedAttributes();
	 }

	/**
	 * Dynamically retrieve attributes on the model.
	 *
	 * @static
	 * @param	string	$key
	 * @return mixed
	 */
	 public static function __get($key){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->__get($key);
	 }

	/**
	 * Dynamically set attributes on the model.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function __set($key, $value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->__set($key, $value);
	 }

	/**
	 * Determine if the given attribute exists.
	 *
	 * @static
	 * @param	mixed	$offset
	 * @return bool
	 */
	 public static function offsetExists($offset){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->offsetExists($offset);
	 }

	/**
	 * Get the value for a given offset.
	 *
	 * @static
	 * @param	mixed	$offset
	 * @return mixed
	 */
	 public static function offsetGet($offset){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->offsetGet($offset);
	 }

	/**
	 * Set the value for a given offset.
	 *
	 * @static
	 * @param	mixed	$offset
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function offsetSet($offset, $value){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->offsetSet($offset, $value);
	 }

	/**
	 * Unset the value for a given offset.
	 *
	 * @static
	 * @param	mixed	$offset
	 * @return void
	 */
	 public static function offsetUnset($offset){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->offsetUnset($offset);
	 }

	/**
	 * Determine if an attribute exists on the model.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function __isset($key){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->__isset($key);
	 }

	/**
	 * Unset an attribute on the model.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function __unset($key){
		$root = new Illuminate\Database\Eloquent\Model();
		 $root->__unset($key);
	 }

	/**
	 * Handle dynamic method calls into the method.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->__call($method, $parameters);
	 }

	/**
	 * Handle dynamic static method calls into the method.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __callStatic($method, $parameters){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->__callStatic($method, $parameters);
	 }

	/**
	 * Convert the model to its string representation.
	 *
	 * @static
	 * @return string
	 */
	 public static function __toString(){
		$root = new Illuminate\Database\Eloquent\Model();
		return $root->__toString();
	 }

 }
}

namespace  {
 class Event extends Illuminate\Support\Facades\Event{
	/**
	 * @var \Illuminate\Events\Dispatcher $root
	 */
	 static private $root;

	/**
	 * Create a new event dispatcher instance.
	 *
	 * @static
	 * @param	\Illuminate\Container\Container	$container
	 * @return void
	 */
	 public static function __construct($container = null){
		$root = new Illuminate\Events\Dispatcher();
		 $root->__construct($container);
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @static
	 * @param	string	$event
	 * @param	mixed	$listener
	 * @param	int	$priority
	 * @return void
	 */
	 public static function listen($event, $listener, $priority = 0){
		$root = new Illuminate\Events\Dispatcher();
		 $root->listen($event, $listener, $priority);
	 }

	/**
	 * Determine if a given event has listeners.
	 *
	 * @static
	 * @param	string	$eventName
	 * @return bool
	 */
	 public static function hasListeners($eventName){
		$root = new Illuminate\Events\Dispatcher();
		return $root->hasListeners($eventName);
	 }

	/**
	 * Register a queued event and payload.
	 *
	 * @static
	 * @param	string	$event
	 * @param	array	$payload
	 * @return void
	 */
	 public static function queue($event, $payload = array()){
		$root = new Illuminate\Events\Dispatcher();
		 $root->queue($event, $payload);
	 }

	/**
	 * Register an event subscriber with the dispatcher.
	 *
	 * @static
	 * @param	string	$subscriber
	 * @return void
	 */
	 public static function subscribe($subscriber){
		$root = new Illuminate\Events\Dispatcher();
		 $root->subscribe($subscriber);
	 }

	/**
	 * Fire an event until the first non-null response is returned.
	 *
	 * @static
	 * @param	string	$event
	 * @param	array	$payload
	 * @return mixed
	 */
	 public static function until($event, $payload = array()){
		$root = new Illuminate\Events\Dispatcher();
		return $root->until($event, $payload);
	 }

	/**
	 * Flush a set of queued events.
	 *
	 * @static
	 * @param	string	$event
	 * @return void
	 */
	 public static function flush($event){
		$root = new Illuminate\Events\Dispatcher();
		 $root->flush($event);
	 }

	/**
	 * Fire an event and call the listeners.
	 *
	 * @static
	 * @param	string	$event
	 * @param	mixed	$payload
	 * @param	boolean $halt
	 * @return void
	 */
	 public static function fire($event, $payload = array(), $halt = false){
		$root = new Illuminate\Events\Dispatcher();
		 $root->fire($event, $payload, $halt);
	 }

	/**
	 * Get all of the listeners for a given event name.
	 *
	 * @static
	 * @param	string	$eventName
	 * @return array
	 */
	 public static function getListeners($eventName){
		$root = new Illuminate\Events\Dispatcher();
		return $root->getListeners($eventName);
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @static
	 * @param	mixed	$listener
	 * @return void
	 */
	 public static function makeListener($listener){
		$root = new Illuminate\Events\Dispatcher();
		 $root->makeListener($listener);
	 }

	/**
	 * Create a class based listener using the IoC container.
	 *
	 * @static
	 * @param	mixed	$listener
	 * @return Closure
	 */
	 public static function createClassListener($listener){
		$root = new Illuminate\Events\Dispatcher();
		return $root->createClassListener($listener);
	 }

 }
}

namespace  {
 class File extends Illuminate\Support\Facades\File{
	/**
	 * @var \Illuminate\Filesystem\Filesystem $root
	 */
	 static private $root;

	/**
	 * Determine if a file exists.
	 *
	 * @static
	 * @param	string	$path
	 * @return bool
	 */
	 public static function exists($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->exists($path);
	 }

	/**
	 * Get the contents of a file.
	 *
	 * @static
	 * @param	string	$path
	 * @return string
	 */
	 public static function get($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->get($path);
	 }

	/**
	 * Get the contents of a remote file.
	 *
	 * @static
	 * @param	string	$path
	 * @return string
	 */
	 public static function getRemote($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->getRemote($path);
	 }

	/**
	 * Get the returned value of a file.
	 *
	 * @static
	 * @param	string	$path
	 * @return mixed
	 */
	 public static function getRequire($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->getRequire($path);
	 }

	/**
	 * Require the given file once.
	 *
	 * @static
	 * @param	string	$file
	 * @return void
	 */
	 public static function requireOnce($file){
		$root = new Illuminate\Filesystem\Filesystem();
		 $root->requireOnce($file);
	 }

	/**
	 * Write the contents of a file.
	 *
	 * @static
	 * @param	string	$path
	 * @param	string	$contents
	 * @return int
	 */
	 public static function put($path, $contents){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->put($path, $contents);
	 }

	/**
	 * Append to a file.
	 *
	 * @static
	 * @param	string	$path
	 * @param	string	$data
	 * @return int
	 */
	 public static function append($path, $data){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->append($path, $data);
	 }

	/**
	 * Delete the file at a given path.
	 *
	 * @static
	 * @param	string	$path
	 * @return bool
	 */
	 public static function delete($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->delete($path);
	 }

	/**
	 * Move a file to a new location.
	 *
	 * @static
	 * @param	string	$path
	 * @param	string	$target
	 * @return void
	 */
	 public static function move($path, $target){
		$root = new Illuminate\Filesystem\Filesystem();
		 $root->move($path, $target);
	 }

	/**
	 * Copy a file to a new location.
	 *
	 * @static
	 * @param	string	$path
	 * @param	string	$target
	 * @return void
	 */
	 public static function copy($path, $target){
		$root = new Illuminate\Filesystem\Filesystem();
		 $root->copy($path, $target);
	 }

	/**
	 * Extract the file extension from a file path.
	 *
	 * @static
	 * @param	string	$path
	 * @return string
	 */
	 public static function extension($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->extension($path);
	 }

	/**
	 * Get the file type of a given file.
	 *
	 * @static
	 * @param	string	$path
	 * @return string
	 */
	 public static function type($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->type($path);
	 }

	/**
	 * Get the file size of a given file.
	 *
	 * @static
	 * @param	string	$path
	 * @return int
	 */
	 public static function size($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->size($path);
	 }

	/**
	 * Get the file's last modification time.
	 *
	 * @static
	 * @param	string	$path
	 * @return int
	 */
	 public static function lastModified($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->lastModified($path);
	 }

	/**
	 * Determine if the given path is a directory.
	 *
	 * @static
	 * @param	string	$directory
	 * @return bool
	 */
	 public static function isDirectory($directory){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->isDirectory($directory);
	 }

	/**
	 * Determine if the given path is writable.
	 *
	 * @static
	 * @param	string	$path
	 * @return bool
	 */
	 public static function isWritable($path){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->isWritable($path);
	 }

	/**
	 * Determine if the given path is a file.
	 *
	 * @static
	 * @param	string	$file
	 * @return bool
	 */
	 public static function isFile($file){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->isFile($file);
	 }

	/**
	 * Find path names matching a given pattern.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	int	$flags
	 * @return array
	 */
	 public static function glob($pattern, $flags = 0){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->glob($pattern, $flags);
	 }

	/**
	 * Get an array of all files in a directory.
	 *
	 * @static
	 * @param	string	$directory
	 * @return array
	 */
	 public static function files($directory){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->files($directory);
	 }

	/**
	 * Get all of the files from the given directory (recursive).
	 *
	 * @static
	 * @param	string	$directory
	 * @return array
	 */
	 public static function allFiles($directory){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->allFiles($directory);
	 }

	/**
	 * Get all of the directories within a given directory.
	 *
	 * @static
	 * @param	string	$directory
	 * @return array
	 */
	 public static function directories($directory){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->directories($directory);
	 }

	/**
	 * Create a directory.
	 *
	 * @static
	 * @param	string	$path
	 * @param	int	$mode
	 * @param	bool	$recursive
	 * @return bool
	 */
	 public static function makeDirectory($path, $mode = 511, $recursive = false){
		$root = new Illuminate\Filesystem\Filesystem();
		return $root->makeDirectory($path, $mode, $recursive);
	 }

	/**
	 * Copy a directory from one location to another.
	 *
	 * @static
	 * @param	string	$directory
	 * @param	string	$destination
	 * @param	int	$options
	 * @return void
	 */
	 public static function copyDirectory($directory, $destination, $options = null){
		$root = new Illuminate\Filesystem\Filesystem();
		 $root->copyDirectory($directory, $destination, $options);
	 }

	/**
	 * Recursively delete a directory.
	 * The directory itself may be optionally preserved.
	 *
	 * @static
	 * @param	string	$directory
	 * @param	bool	$preserve
	 * @return void
	 */
	 public static function deleteDirectory($directory, $preserve = false){
		$root = new Illuminate\Filesystem\Filesystem();
		 $root->deleteDirectory($directory, $preserve);
	 }

	/**
	 * Empty the specified directory of all files and folders.
	 *
	 * @static
	 * @param	string	$directory
	 * @return void
	 */
	 public static function cleanDirectory($directory){
		$root = new Illuminate\Filesystem\Filesystem();
		 $root->cleanDirectory($directory);
	 }

 }
}

namespace  {
 class Form extends Illuminate\Support\Facades\Form{
	/**
	 * @var \Illuminate\Html\FormBuilder $root
	 */
	 static private $root;

	/**
	 * Create a new form builder instance.
	 *
	 * @static
	 * @param	\Illuminate\Routing\UrlGenerator	$url
	 * @param	\Illuminate\Html\HtmlBuilder	$html
	 * @param	string	$csrfToken
	 * @return void
	 */
	 public static function __construct($html, $url, $csrfToken){
		$root = new Illuminate\Html\FormBuilder();
		 $root->__construct($html, $url, $csrfToken);
	 }

	/**
	 * Open up a new HTML form.
	 *
	 * @static
	 * @param	array	$options
	 * @return string
	 */
	 public static function open($options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->open($options);
	 }

	/**
	 * Create a new model based form builder.
	 *
	 * @static
	 * @param	mixed	$model
	 * @param	array	$options
	 * @return string
	 */
	 public static function model($model, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->model($model, $options);
	 }

	/**
	 * Close the current form.
	 *
	 * @static
	 * @return string
	 */
	 public static function close(){
		$root = new Illuminate\Html\FormBuilder();
		return $root->close();
	 }

	/**
	 * Generate a hidden field with the current CSRF token.
	 *
	 * @static
	 * @return string
	 */
	 public static function token(){
		$root = new Illuminate\Html\FormBuilder();
		return $root->token();
	 }

	/**
	 * Create a form label element.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function label($name, $value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->label($name, $value, $options);
	 }

	/**
	 * Create a form input field.
	 *
	 * @static
	 * @param	string	$type
	 * @param	string	$name
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function input($type, $name, $value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->input($type, $name, $value, $options);
	 }

	/**
	 * Create a text input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function text($name, $value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->text($name, $value, $options);
	 }

	/**
	 * Create a password input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	array	$options
	 * @return string
	 */
	 public static function password($name, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->password($name, $options);
	 }

	/**
	 * Create a hidden input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function hidden($name, $value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->hidden($name, $value, $options);
	 }

	/**
	 * Create an e-mail input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function email($name, $value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->email($name, $value, $options);
	 }

	/**
	 * Create a file input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	array	$options
	 * @return string
	 */
	 public static function file($name, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->file($name, $options);
	 }

	/**
	 * Create a textarea input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function textarea($name, $value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->textarea($name, $value, $options);
	 }

	/**
	 * Create a select box field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	array	$list
	 * @param	string	$selected
	 * @param	array	$options
	 * @return string
	 */
	 public static function select($name, $list = array(), $selected = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->select($name, $list, $selected, $options);
	 }

	/**
	 * Create a checkbox input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	mixed	$value
	 * @param	bool	$checked
	 * @param	array	$options
	 * @return string
	 */
	 public static function checkbox($name, $value = 1, $checked = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->checkbox($name, $value, $checked, $options);
	 }

	/**
	 * Create a radio button input field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	mixed	$value
	 * @param	bool	$checked
	 * @param	array	$options
	 * @return string
	 */
	 public static function radio($name, $value = null, $checked = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->radio($name, $value, $checked, $options);
	 }

	/**
	 * Create a HTML reset input element.
	 *
	 * @static
	 * @param	string	$value
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function reset($value, $attributes = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->reset($value, $attributes);
	 }

	/**
	 * Create a HTML image input element.
	 *
	 * @static
	 * @param	string	$url
	 * @param	string	$name
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function image($url, $name = null, $attributes = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->image($url, $name, $attributes);
	 }

	/**
	 * Create a submit button element.
	 *
	 * @static
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function submit($value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->submit($value, $options);
	 }

	/**
	 * Create a button element.
	 *
	 * @static
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function button($value = null, $options = array()){
		$root = new Illuminate\Html\FormBuilder();
		return $root->button($value, $options);
	 }

	/**
	 * Register a custom form macro.
	 *
	 * @static
	 * @param	string	$name
	 * @param	callable	$macro
	 * @return void
	 */
	 public static function macro($name, $macro){
		$root = new Illuminate\Html\FormBuilder();
		 $root->macro($name, $macro);
	 }

	/**
	 * Get the value that should be assigned to the field.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$value
	 * @return string
	 */
	 public static function getValueAttribute($name, $value = null){
		$root = new Illuminate\Html\FormBuilder();
		return $root->getValueAttribute($name, $value);
	 }

	/**
	 * Get the session store implementation.
	 *
	 * @static
	 * @return \Illuminate\Session\Store
	 */
	 public static function getSessionStore(){
		$root = new Illuminate\Html\FormBuilder();
		return $root->getSessionStore();
	 }

	/**
	 * Set the session store implementation.
	 *
	 * @static
	 * @param	\Illuminate\Session\Store	$session
	 * @return \Illuminate\Html\FormBuilder
	 */
	 public static function setSessionStore($session){
		$root = new Illuminate\Html\FormBuilder();
		return $root->setSessionStore($session);
	 }

	/**
	 * Dynamically handle calls to the form builder.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Html\FormBuilder();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Hash extends Illuminate\Support\Facades\Hash{
	/**
	 * @var \Illuminate\Hashing\BcryptHasher $root
	 */
	 static private $root;

	/**
	 * Create a new Bcrypt hasher instance.
	 *
	 * @static
	 * @return void
	 */
	 public static function __construct(){
		$root = new Illuminate\Hashing\BcryptHasher();
		 $root->__construct();
	 }

	/**
	 * Hash the given value.
	 *
	 * @static
	 * @param	string	$value
	 * @param	array	$options
	 * @return string
	 */
	 public static function make($value, $options = array()){
		$root = new Illuminate\Hashing\BcryptHasher();
		return $root->make($value, $options);
	 }

	/**
	 * Check the given plain value against a hash.
	 *
	 * @static
	 * @param	string	$value
	 * @param	string	$hashedValue
	 * @param	array	$options
	 * @return bool
	 */
	 public static function check($value, $hashedValue, $options = array()){
		$root = new Illuminate\Hashing\BcryptHasher();
		return $root->check($value, $hashedValue, $options);
	 }

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @static
	 * @param	string	$hashedValue
	 * @param	array	$options
	 * @return bool
	 */
	 public static function needsRehash($hashedValue, $options = array()){
		$root = new Illuminate\Hashing\BcryptHasher();
		return $root->needsRehash($hashedValue, $options);
	 }

 }
}

namespace  {
 class HTML extends Illuminate\Support\Facades\Html{
	/**
	 * @var \Illuminate\Html\HtmlBuilder $root
	 */
	 static private $root;

	/**
	 * Create a new HTML builder instance.
	 *
	 * @static
	 * @param	\Illuminate\Routing\UrlGenerator	$url
	 * @return void
	 */
	 public static function __construct($url = null){
		$root = new Illuminate\Html\HtmlBuilder();
		 $root->__construct($url);
	 }

	/**
	 * Register a custom HTML macro.
	 *
	 * @static
	 * @param	string	$name
	 * @param	callable	$macro
	 * @return void
	 */
	 public static function macro($name, $macro){
		$root = new Illuminate\Html\HtmlBuilder();
		 $root->macro($name, $macro);
	 }

	/**
	 * Convert an HTML string to entities.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function entities($value){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->entities($value);
	 }

	/**
	 * Convert entities to HTML characters.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function decode($value){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->decode($value);
	 }

	/**
	 * Generate a link to a JavaScript file.
	 *
	 * @static
	 * @param	string	$url
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function script($url, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->script($url, $attributes);
	 }

	/**
	 * Generate a link to a CSS file.
	 *
	 * @static
	 * @param	string	$url
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function style($url, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->style($url, $attributes);
	 }

	/**
	 * Generate an HTML image element.
	 *
	 * @static
	 * @param	string	$url
	 * @param	string	$alt
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function image($url, $alt = null, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->image($url, $alt, $attributes);
	 }

	/**
	 * Generate a HTML link.
	 *
	 * @static
	 * @param	string	$url
	 * @param	string	$title
	 * @param	array	$attributes
	 * @param	bool	$secure
	 * @return string
	 */
	 public static function link($url, $title = null, $attributes = array(), $secure = null){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->link($url, $title, $attributes, $secure);
	 }

	/**
	 * Generate a HTTPS HTML link.
	 *
	 * @static
	 * @param	string	$url
	 * @param	string	$title
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function secureLink($url, $title = null, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->secureLink($url, $title, $attributes);
	 }

	/**
	 * Generate a HTML link to an asset.
	 *
	 * @static
	 * @param	string	$url
	 * @param	string	$title
	 * @param	array	$attributes
	 * @param	bool	$secure
	 * @return string
	 */
	 public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->linkAsset($url, $title, $attributes, $secure);
	 }

	/**
	 * Generate a HTTPS HTML link to an asset.
	 *
	 * @static
	 * @param	string	$url
	 * @param	string	$title
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function linkSecureAsset($url, $title = null, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->linkSecureAsset($url, $title, $attributes);
	 }

	/**
	 * Generate a HTML link to a named route.
	 *
	 * @static
	 * @param	string	$name
	 * @param	string	$title
	 * @param	array	$parameters
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->linkRoute($name, $title, $parameters, $attributes);
	 }

	/**
	 * Generate a HTML link to a controller action.
	 *
	 * @static
	 * @param	string	$action
	 * @param	string	$title
	 * @param	array	$parameters
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->linkAction($action, $title, $parameters, $attributes);
	 }

	/**
	 * Generate a HTML link to an email address.
	 *
	 * @static
	 * @param	string	$email
	 * @param	string	$title
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function mailto($email, $title = null, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->mailto($email, $title, $attributes);
	 }

	/**
	 * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
	 *
	 * @static
	 * @param	string	$email
	 * @return string
	 */
	 public static function email($email){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->email($email);
	 }

	/**
	 * Generate an ordered list of items.
	 *
	 * @static
	 * @param	array	$list
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function ol($list, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->ol($list, $attributes);
	 }

	/**
	 * Generate an un-ordered list of items.
	 *
	 * @static
	 * @param	array	$list
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function ul($list, $attributes = array()){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->ul($list, $attributes);
	 }

	/**
	 * Build an HTML attribute string from an array.
	 *
	 * @static
	 * @param	array	$attributes
	 * @return string
	 */
	 public static function attributes($attributes){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->attributes($attributes);
	 }

	/**
	 * Obfuscate a string to prevent spam-bots from sniffing it.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function obfuscate($value){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->obfuscate($value);
	 }

	/**
	 * Dynamically handle calls to the html class.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Html\HtmlBuilder();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Input extends Illuminate\Support\Facades\Input{
	/**
	 * @var \Illuminate\Http\Request $root
	 */
	 static private $root;

	/**
	 * Return the Request instance.
	 *
	 * @static
	 * @return \Illuminate\Http\Request
	 */
	 public static function instance(){
		$root = new Illuminate\Http\Request();
		return $root->instance();
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @static
	 * @return string
	 */
	 public static function root(){
		$root = new Illuminate\Http\Request();
		return $root->root();
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function url(){
		$root = new Illuminate\Http\Request();
		return $root->url();
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function fullUrl(){
		$root = new Illuminate\Http\Request();
		return $root->fullUrl();
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function path(){
		$root = new Illuminate\Http\Request();
		return $root->path();
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @static
	 * @param	string	$index
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function segment($index, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->segment($index, $default);
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @static
	 * @return array
	 */
	 public static function segments(){
		$root = new Illuminate\Http\Request();
		return $root->segments();
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @static
	 * @param	string	$pattern
	 * @return bool
	 */
	 public static function is($pattern){
		$root = new Illuminate\Http\Request();
		return $root->is($pattern);
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @static
	 * @return bool
	 */
	 public static function ajax(){
		$root = new Illuminate\Http\Request();
		return $root->ajax();
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @static
	 * @return bool
	 */
	 public static function secure(){
		$root = new Illuminate\Http\Request();
		return $root->secure();
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @static
	 * @param	string|array	$key
	 * @return bool
	 */
	 public static function has($key){
		$root = new Illuminate\Http\Request();
		return $root->has($key);
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @static
	 * @return array
	 */
	 public static function all(){
		$root = new Illuminate\Http\Request();
		return $root->all();
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function input($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->input($key, $default);
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @static
	 * @param	array	$keys
	 * @return array
	 */
	 public static function only($keys){
		$root = new Illuminate\Http\Request();
		return $root->only($keys);
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @static
	 * @param	array	$keys
	 * @return array
	 */
	 public static function except($keys){
		$root = new Illuminate\Http\Request();
		return $root->except($keys);
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function query($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->query($key, $default);
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function cookie($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->cookie($key, $default);
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile
	 */
	 public static function file($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->file($key, $default);
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasFile($key){
		$root = new Illuminate\Http\Request();
		return $root->hasFile($key);
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function header($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->header($key, $default);
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function server($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->server($key, $default);
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function old($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->old($key, $default);
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @static
	 * @param	string $filter
	 * @param	array	$keys
	 * @return void
	 */
	 public static function flash($filter = null, $keys = array()){
		$root = new Illuminate\Http\Request();
		 $root->flash($filter, $keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @static
	 * @param	dynamic	string
	 * @return void
	 */
	 public static function flashOnly($keys){
		$root = new Illuminate\Http\Request();
		 $root->flashOnly($keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @static
	 * @param	dynamic	string
	 * @return void
	 */
	 public static function flashExcept($keys){
		$root = new Illuminate\Http\Request();
		 $root->flashExcept($keys);
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @static
	 * @return void
	 */
	 public static function flush(){
		$root = new Illuminate\Http\Request();
		 $root->flush();
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @static
	 * @param	array	$input
	 * @return void
	 */
	 public static function merge($input){
		$root = new Illuminate\Http\Request();
		 $root->merge($input);
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @static
	 * @param	array	$input
	 * @return void
	 */
	 public static function replace($input){
		$root = new Illuminate\Http\Request();
		 $root->replace($input);
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return mixed
	 */
	 public static function json($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->json($key, $default);
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @static
	 * @return bool
	 */
	 public static function isJson(){
		$root = new Illuminate\Http\Request();
		return $root->isJson();
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @static
	 * @return \Illuminate\Session\Store
	 */
	 public static function getSessionStore(){
		$root = new Illuminate\Http\Request();
		return $root->getSessionStore();
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @static
	 * @param	\Illuminate\Session\Store	$session
	 * @return void
	 */
	 public static function setSessionStore($session){
		$root = new Illuminate\Http\Request();
		 $root->setSessionStore($session);
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @static
	 * @return bool
	 */
	 public static function hasSessionStore(){
		$root = new Illuminate\Http\Request();
		return $root->hasSessionStore();
	 }

	/**
	 * Constructor.
	 *
	 * @static
	 * @param	array	$query	The GET parameters
	 * @param	array	$request	The POST parameters
	 * @param	array	$attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param	array	$cookies	The COOKIE parameters
	 * @param	array	$files	The FILES parameters
	 * @param	array	$server	The SERVER parameters
	 * @param	string $content	The raw body data
	 * @return void
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new Illuminate\Http\Request();
		 $root->__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Sets the parameters for this request.
	 * This method also re-initializes all properties.
	 *
	 * @static
	 * @param	array	$query	The GET parameters
	 * @param	array	$request	The POST parameters
	 * @param	array	$attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param	array	$cookies	The COOKIE parameters
	 * @param	array	$files	The FILES parameters
	 * @param	array	$server	The SERVER parameters
	 * @param	string $content	The raw body data
	 * @return void
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new Illuminate\Http\Request();
		 $root->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @static
	 * @return Request A new request
	 */
	 public static function createFromGlobals(){
		$root = new Illuminate\Http\Request();
		return $root->createFromGlobals();
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @static
	 * @param	string $uri	The URI
	 * @param	string $method	The HTTP method
	 * @param	array	$parameters The query (GET) or request (POST) parameters
	 * @param	array	$cookies	The request cookies ($_COOKIE)
	 * @param	array	$files	The request files ($_FILES)
	 * @param	array	$server	The server parameters ($_SERVER)
	 * @param	string $content	The raw body data
	 * @return Request A Request instance
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new Illuminate\Http\Request();
		return $root->create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @static
	 * @param	array $query	The GET parameters
	 * @param	array $request	The POST parameters
	 * @param	array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param	array $cookies	The COOKIE parameters
	 * @param	array $files	The FILES parameters
	 * @param	array $server	The SERVER parameters
	 * @return Request The duplicated request
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		$root = new Illuminate\Http\Request();
		return $root->duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @static
	 * @return string The request
	 */
	 public static function __toString(){
		$root = new Illuminate\Http\Request();
		return $root->__toString();
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @static
	 * @return void
	 */
	 public static function overrideGlobals(){
		$root = new Illuminate\Http\Request();
		 $root->overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @static
	 * @param	array $proxies A list of trusted proxies
	 * @return void
	 */
	 public static function setTrustedProxies($proxies){
		$root = new Illuminate\Http\Request();
		 $root->setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @static
	 * @return array An array of trusted proxies.
	 */
	 public static function getTrustedProxies(){
		$root = new Illuminate\Http\Request();
		return $root->getTrustedProxies();
	 }

	/**
	 * Sets the name for trusted headers.
	 * The following header keys are supported:
	 * * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 * * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 * * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 * * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @static
	 * @param	string $key	The header key
	 * @param	string $value The header name
	 * @return void
	 */
	 public static function setTrustedHeaderName($key, $value){
		$root = new Illuminate\Http\Request();
		 $root->setTrustedHeaderName($key, $value);
	 }

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @static
	 * @param	string $key The header key
	 * @return string The header name
	 */
	 public static function getTrustedHeaderName($key){
		$root = new Illuminate\Http\Request();
		return $root->getTrustedHeaderName($key);
	 }

	/**
	 * Normalizes a query string.
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @static
	 * @param	string $qs Query string
	 * @return string A normalized query string for the Request
	 */
	 public static function normalizeQueryString($qs){
		$root = new Illuminate\Http\Request();
		return $root->normalizeQueryString($qs);
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static
	 * @return void
	 */
	 public static function enableHttpMethodParameterOverride(){
		$root = new Illuminate\Http\Request();
		 $root->enableHttpMethodParameterOverride();
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @static
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 */
	 public static function getHttpMethodParameterOverride(){
		$root = new Illuminate\Http\Request();
		return $root->getHttpMethodParameterOverride();
	 }

	/**
	 * Gets a "parameter" value.
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * Order of precedence: GET, PATH, POST
	 * Avoid using this method in controllers:
	 * * slow
	 * * prefer to get from a "named" source
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @static
	 * @param	string	$key	the key
	 * @param	mixed	$default the default value
	 * @param	Boolean $deep	is parameter deep in multidimensional array
	 * @return mixed
	 */
	 public static function get($key, $default = null, $deep = false){
		$root = new Illuminate\Http\Request();
		return $root->get($key, $default, $deep);
	 }

	/**
	 * Gets the Session.
	 *
	 * @static
	 * @return SessionInterface|null The session
	 */
	 public static function getSession(){
		$root = new Illuminate\Http\Request();
		return $root->getSession();
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function hasPreviousSession(){
		$root = new Illuminate\Http\Request();
		return $root->hasPreviousSession();
	 }

	/**
	 * Whether the request contains a Session object.
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @static
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 */
	 public static function hasSession(){
		$root = new Illuminate\Http\Request();
		return $root->hasSession();
	 }

	/**
	 * Sets the Session.
	 *
	 * @static
	 * @param	SessionInterface $session The Session
	 * @return void
	 */
	 public static function setSession($session){
		$root = new Illuminate\Http\Request();
		 $root->setSession($session);
	 }

	/**
	 * Returns the client IP addresses.
	 * The most trusted IP address is first, and the less trusted one last.
	 * The "real" client IP address is the last one, but this is also the
	 * less trusted one.
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @static
	 * @return array The client IP addresses
	 */
	 public static function getClientIps(){
		$root = new Illuminate\Http\Request();
		return $root->getClientIps();
	 }

	/**
	 * Returns the client IP address.
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @static
	 * @return string The client IP address
	 */
	 public static function getClientIp(){
		$root = new Illuminate\Http\Request();
		return $root->getClientIp();
	 }

	/**
	 * Returns current script name.
	 *
	 * @static
	 * @return string
	 */
	 public static function getScriptName(){
		$root = new Illuminate\Http\Request();
		return $root->getScriptName();
	 }

	/**
	 * Returns the path being requested relative to the executed script.
	 * The path info always starts with a /.
	 * Suppose this request is instantiated from /mysite on localhost:
	 * * http://localhost/mysite              returns an empty string
	 * * http://localhost/mysite/about        returns '/about'
	 * * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 * * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @static
	 * @return string The raw path (i.e. not urldecoded)
	 */
	 public static function getPathInfo(){
		$root = new Illuminate\Http\Request();
		return $root->getPathInfo();
	 }

	/**
	 * Returns the root path from which this request is executed.
	 * Suppose that an index.php file instantiates this request object:
	 * * http://localhost/index.php         returns an empty string
	 * * http://localhost/index.php/page    returns an empty string
	 * * http://localhost/web/index.php     returns '/web'
	 * * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @static
	 * @return string The raw path (i.e. not urldecoded)
	 */
	 public static function getBasePath(){
		$root = new Illuminate\Http\Request();
		return $root->getBasePath();
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * The base URL never ends with a /.
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @static
	 * @return string The raw url (i.e. not urldecoded)
	 */
	 public static function getBaseUrl(){
		$root = new Illuminate\Http\Request();
		return $root->getBaseUrl();
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @static
	 * @return string
	 */
	 public static function getScheme(){
		$root = new Illuminate\Http\Request();
		return $root->getScheme();
	 }

	/**
	 * Returns the port on which the request is made.
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * The "X-Forwarded-Port" header must contain the client port.
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @static
	 * @return string
	 */
	 public static function getPort(){
		$root = new Illuminate\Http\Request();
		return $root->getPort();
	 }

	/**
	 * Returns the user.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function getUser(){
		$root = new Illuminate\Http\Request();
		return $root->getUser();
	 }

	/**
	 * Returns the password.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function getPassword(){
		$root = new Illuminate\Http\Request();
		return $root->getPassword();
	 }

	/**
	 * Gets the user info.
	 *
	 * @static
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 */
	 public static function getUserInfo(){
		$root = new Illuminate\Http\Request();
		return $root->getUserInfo();
	 }

	/**
	 * Returns the HTTP host being requested.
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @static
	 * @return string
	 */
	 public static function getHttpHost(){
		$root = new Illuminate\Http\Request();
		return $root->getHttpHost();
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @static
	 * @return string The raw URI (i.e. not urldecoded)
	 */
	 public static function getRequestUri(){
		$root = new Illuminate\Http\Request();
		return $root->getRequestUri();
	 }

	/**
	 * Gets the scheme and HTTP host.
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @static
	 * @return string The scheme and HTTP host
	 */
	 public static function getSchemeAndHttpHost(){
		$root = new Illuminate\Http\Request();
		return $root->getSchemeAndHttpHost();
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @static
	 * @return string A normalized URI for the Request
	 */
	 public static function getUri(){
		$root = new Illuminate\Http\Request();
		return $root->getUri();
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @static
	 * @param	string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 */
	 public static function getUriForPath($path){
		$root = new Illuminate\Http\Request();
		return $root->getUriForPath($path);
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @static
	 * @return string|null A normalized query string for the Request
	 */
	 public static function getQueryString(){
		$root = new Illuminate\Http\Request();
		return $root->getQueryString();
	 }

	/**
	 * Checks whether the request is secure or not.
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function isSecure(){
		$root = new Illuminate\Http\Request();
		return $root->isSecure();
	 }

	/**
	 * Returns the host name.
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @static
	 * @return string
	 */
	 public static function getHost(){
		$root = new Illuminate\Http\Request();
		return $root->getHost();
	 }

	/**
	 * Sets the request method.
	 *
	 * @static
	 * @param	string $method
	 * @return void
	 */
	 public static function setMethod($method){
		$root = new Illuminate\Http\Request();
		 $root->setMethod($method);
	 }

	/**
	 * Gets the request "intended" method.
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 * The method is always an uppercased string.
	 *
	 * @static
	 * @return string The request method
	 */
	 public static function getMethod(){
		$root = new Illuminate\Http\Request();
		return $root->getMethod();
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @static
	 * @return string The request method
	 */
	 public static function getRealMethod(){
		$root = new Illuminate\Http\Request();
		return $root->getRealMethod();
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @static
	 * @param	string $format The format
	 * @return string The associated mime type (null if not found)
	 */
	 public static function getMimeType($format){
		$root = new Illuminate\Http\Request();
		return $root->getMimeType($format);
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @static
	 * @param	string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 */
	 public static function getFormat($mimeType){
		$root = new Illuminate\Http\Request();
		return $root->getFormat($mimeType);
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @static
	 * @param	string	$format	The format
	 * @param	string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @return void
	 */
	 public static function setFormat($format, $mimeTypes){
		$root = new Illuminate\Http\Request();
		 $root->setFormat($format, $mimeTypes);
	 }

	/**
	 * Gets the request format.
	 * Here is the process to determine the format:
	 * * format defined by the user (with setRequestFormat())
	 * * _format request parameter
	 * * $default
	 *
	 * @static
	 * @param	string $default The default format
	 * @return string The request format
	 */
	 public static function getRequestFormat($default = 'html'){
		$root = new Illuminate\Http\Request();
		return $root->getRequestFormat($default);
	 }

	/**
	 * Sets the request format.
	 *
	 * @static
	 * @param	string $format The request format.
	 * @return void
	 */
	 public static function setRequestFormat($format){
		$root = new Illuminate\Http\Request();
		 $root->setRequestFormat($format);
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @static
	 * @return string|null The format (null if no content type is present)
	 */
	 public static function getContentType(){
		$root = new Illuminate\Http\Request();
		return $root->getContentType();
	 }

	/**
	 * Sets the default locale.
	 *
	 * @static
	 * @param	string $locale
	 * @return void
	 */
	 public static function setDefaultLocale($locale){
		$root = new Illuminate\Http\Request();
		 $root->setDefaultLocale($locale);
	 }

	/**
	 * Sets the locale.
	 *
	 * @static
	 * @param	string $locale
	 * @return void
	 */
	 public static function setLocale($locale){
		$root = new Illuminate\Http\Request();
		 $root->setLocale($locale);
	 }

	/**
	 * Get the locale.
	 *
	 * @static
	 * @return string
	 */
	 public static function getLocale(){
		$root = new Illuminate\Http\Request();
		return $root->getLocale();
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @static
	 * @param	string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 */
	 public static function isMethod($method){
		$root = new Illuminate\Http\Request();
		return $root->isMethod($method);
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function isMethodSafe(){
		$root = new Illuminate\Http\Request();
		return $root->isMethodSafe();
	 }

	/**
	 * Returns the request body content.
	 *
	 * @static
	 * @param	Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 */
	 public static function getContent($asResource = false){
		$root = new Illuminate\Http\Request();
		return $root->getContent($asResource);
	 }

	/**
	 * Gets the Etags.
	 *
	 * @static
	 * @return array The entity tags
	 */
	 public static function getETags(){
		$root = new Illuminate\Http\Request();
		return $root->getETags();
	 }

	/**
	 * 
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function isNoCache(){
		$root = new Illuminate\Http\Request();
		return $root->isNoCache();
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @static
	 * @param	array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 */
	 public static function getPreferredLanguage($locales = null){
		$root = new Illuminate\Http\Request();
		return $root->getPreferredLanguage($locales);
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @static
	 * @return array Languages ordered in the user browser preferences
	 */
	 public static function getLanguages(){
		$root = new Illuminate\Http\Request();
		return $root->getLanguages();
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @static
	 * @return array List of charsets in preferable order
	 */
	 public static function getCharsets(){
		$root = new Illuminate\Http\Request();
		return $root->getCharsets();
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @static
	 * @return array List of content types in preferable order
	 */
	 public static function getAcceptableContentTypes(){
		$root = new Illuminate\Http\Request();
		return $root->getAcceptableContentTypes();
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @static
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 */
	 public static function isXmlHttpRequest(){
		$root = new Illuminate\Http\Request();
		return $root->isXmlHttpRequest();
	 }

 }
}

namespace  {
 class Lang extends Illuminate\Support\Facades\Lang{
	/**
	 * @var \Illuminate\Translation\Translator $root
	 */
	 static private $root;

	/**
	 * Create a new translator instance.
	 *
	 * @static
	 * @param	\Illuminate\Translation\LoaderInterface	$loader
	 * @param	string	$locale
	 * @return void
	 */
	 public static function __construct($loader, $locale){
		$root = new Illuminate\Translation\Translator();
		 $root->__construct($loader, $locale);
	 }

	/**
	 * Determine if a translation exists.
	 *
	 * @static
	 * @param	string	$key
	 * @param	string	$locale
	 * @return bool
	 */
	 public static function has($key, $locale = null){
		$root = new Illuminate\Translation\Translator();
		return $root->has($key, $locale);
	 }

	/**
	 * Get the translation for the given key.
	 *
	 * @static
	 * @param	string	$key
	 * @param	array	$replace
	 * @param	string	$locale
	 * @return string
	 */
	 public static function get($key, $replace = array(), $locale = null){
		$root = new Illuminate\Translation\Translator();
		return $root->get($key, $replace, $locale);
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @static
	 * @param	string	$key
	 * @param	int	$number
	 * @param	array	$replace
	 * @param	string	$locale
	 * @return string
	 */
	 public static function choice($key, $number, $replace = array(), $locale = null){
		$root = new Illuminate\Translation\Translator();
		return $root->choice($key, $number, $replace, $locale);
	 }

	/**
	 * Get the translation for a given key.
	 *
	 * @static
	 * @param	string	$id
	 * @param	array	$parameters
	 * @param	string	$domain
	 * @param	string	$locale
	 * @return string
	 */
	 public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
		$root = new Illuminate\Translation\Translator();
		return $root->trans($id, $parameters, $domain, $locale);
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @static
	 * @param	string	$id
	 * @param	int	$number
	 * @param	array	$parameters
	 * @param	string	$domain
	 * @param	string	$locale
	 * @return string
	 */
	 public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
		$root = new Illuminate\Translation\Translator();
		return $root->transChoice($id, $number, $parameters, $domain, $locale);
	 }

	/**
	 * Load the specified language group.
	 *
	 * @static
	 * @param	string	$namespace
	 * @param	string	$group
	 * @param	string	$locale
	 * @return string
	 */
	 public static function load($namespace, $group, $locale){
		$root = new Illuminate\Translation\Translator();
		return $root->load($namespace, $group, $locale);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @static
	 * @param	string	$namespace
	 * @param	string	$hint
	 * @return void
	 */
	 public static function addNamespace($namespace, $hint){
		$root = new Illuminate\Translation\Translator();
		 $root->addNamespace($namespace, $hint);
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @static
	 * @param	string	$key
	 * @return array
	 */
	 public static function parseKey($key){
		$root = new Illuminate\Translation\Translator();
		return $root->parseKey($key);
	 }

	/**
	 * Get the message selector instance.
	 *
	 * @static
	 * @return \Symfony\Component\Translation\MessageSelector
	 */
	 public static function getSelector(){
		$root = new Illuminate\Translation\Translator();
		return $root->getSelector();
	 }

	/**
	 * Set the message selector instance.
	 *
	 * @static
	 * @param	\Symfony\Component\Translation\MessageSelector	$selector
	 * @return void
	 */
	 public static function setSelector($selector){
		$root = new Illuminate\Translation\Translator();
		 $root->setSelector($selector);
	 }

	/**
	 * Get the language line loader implementation.
	 *
	 * @static
	 * @return \Illuminate\Translation\LoaderInterface
	 */
	 public static function getLoader(){
		$root = new Illuminate\Translation\Translator();
		return $root->getLoader();
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @static
	 * @return string
	 */
	 public static function locale(){
		$root = new Illuminate\Translation\Translator();
		return $root->locale();
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @static
	 * @return string
	 */
	 public static function getLocale(){
		$root = new Illuminate\Translation\Translator();
		return $root->getLocale();
	 }

	/**
	 * Set the default locale.
	 *
	 * @static
	 * @param	string	$locale
	 * @return void
	 */
	 public static function setLocale($locale){
		$root = new Illuminate\Translation\Translator();
		 $root->setLocale($locale);
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @static
	 * @param	string	$key
	 * @param	array	$parsed
	 * @return void
	 */
	 public static function setParsedKey($key, $parsed){
		$root = new Illuminate\Translation\Translator();
		 $root->setParsedKey($key, $parsed);
	 }

 }
}

namespace  {
 class Log extends Illuminate\Support\Facades\Log{
	/**
	 * @var \Illuminate\Log\Writer $root
	 */
	 static private $root;

	/**
	 * Create a new log writer instance.
	 *
	 * @static
	 * @param	\Monolog\Logger	$monolog
	 * @param	\Illuminate\Events\Dispatcher	$dispatcher
	 * @return void
	 */
	 public static function __construct($monolog, $dispatcher = null){
		$root = new Illuminate\Log\Writer();
		 $root->__construct($monolog, $dispatcher);
	 }

	/**
	 * Register a file log handler.
	 *
	 * @static
	 * @param	string	$path
	 * @param	string	$level
	 * @return void
	 */
	 public static function useFiles($path, $level = 'debug'){
		$root = new Illuminate\Log\Writer();
		 $root->useFiles($path, $level);
	 }

	/**
	 * Register a daily file log handler.
	 *
	 * @static
	 * @param	string	$path
	 * @param	int	$days
	 * @param	string	$level
	 * @return void
	 */
	 public static function useDailyFiles($path, $days = 0, $level = 'debug'){
		$root = new Illuminate\Log\Writer();
		 $root->useDailyFiles($path, $days, $level);
	 }

	/**
	 * Get the underlying Monolog instance.
	 *
	 * @static
	 * @return \Monolog\Logger
	 */
	 public static function getMonolog(){
		$root = new Illuminate\Log\Writer();
		return $root->getMonolog();
	 }

	/**
	 * Register a new callback handler for when
	 * a log event is triggered.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function listen($callback){
		$root = new Illuminate\Log\Writer();
		 $root->listen($callback);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @static
	 * @return \Illuminate\Events\Dispatcher
	 */
	 public static function getEventDispatcher(){
		$root = new Illuminate\Log\Writer();
		return $root->getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @static
	 * @param	\Illuminate\Events\Dispatcher
	 * @return void
	 */
	 public static function setEventDispatcher($dispatcher){
		$root = new Illuminate\Log\Writer();
		 $root->setEventDispatcher($dispatcher);
	 }

	/**
	 * Dynamically handle error additions.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Log\Writer();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Mail extends Illuminate\Support\Facades\Mail{
	/**
	 * @var \Illuminate\Mail\Mailer $root
	 */
	 static private $root;

	/**
	 * Create a new Mailer instance.
	 *
	 * @static
	 * @param	\Illuminate\View\Environment	$views
	 * @param	Swift_Mailer	$swift
	 * @return void
	 */
	 public static function __construct($views, $swift){
		$root = new Illuminate\Mail\Mailer();
		 $root->__construct($views, $swift);
	 }

	/**
	 * Set the global from address and name.
	 *
	 * @static
	 * @param	string	$address
	 * @param	string	$name
	 * @return void
	 */
	 public static function alwaysFrom($address, $name = null){
		$root = new Illuminate\Mail\Mailer();
		 $root->alwaysFrom($address, $name);
	 }

	/**
	 * Send a new message when only a plain part.
	 *
	 * @static
	 * @param	string	$view
	 * @param	array	$data
	 * @param	mixed	$callback
	 * @return void
	 */
	 public static function plain($view, $data, $callback){
		$root = new Illuminate\Mail\Mailer();
		 $root->plain($view, $data, $callback);
	 }

	/**
	 * Send a new message using a view.
	 *
	 * @static
	 * @param	string|array	$view
	 * @param	array	$data
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function send($view, $data, $callback){
		$root = new Illuminate\Mail\Mailer();
		 $root->send($view, $data, $callback);
	 }

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @static
	 * @param	string|array	$view
	 * @param	array	$data
	 * @param	Closure|string	$callback
	 * @param	string	$queue
	 * @return void
	 */
	 public static function queue($view, $data, $callback, $queue = null){
		$root = new Illuminate\Mail\Mailer();
		 $root->queue($view, $data, $callback, $queue);
	 }

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 *
	 * @static
	 * @param	string|array	$view
	 * @param	array	$data
	 * @param	Closure|string	$callback
	 * @param	string	$queue
	 * @return void
	 */
	 public static function queueOn($queue, $view, $data, $callback){
		$root = new Illuminate\Mail\Mailer();
		 $root->queueOn($queue, $view, $data, $callback);
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds.
	 *
	 * @static
	 * @param	int	$delay
	 * @param	string|array	$view
	 * @param	array	$data
	 * @param	Closure|string	$callback
	 * @param	string	$queue
	 * @return void
	 */
	 public static function later($delay, $view, $data, $callback, $queue = null){
		$root = new Illuminate\Mail\Mailer();
		 $root->later($delay, $view, $data, $callback, $queue);
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds on the given queue.
	 *
	 * @static
	 * @param	string	$queue
	 * @param	int	$delay
	 * @param	string|array	$view
	 * @param	array	$data
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function laterOn($queue, $delay, $view, $data, $callback){
		$root = new Illuminate\Mail\Mailer();
		 $root->laterOn($queue, $delay, $view, $data, $callback);
	 }

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @static
	 * @param	\Illuminate\Queue\Jobs\Job	$job
	 * @param	array	$data
	 * @return void
	 */
	 public static function handleQueuedMessage($job, $data){
		$root = new Illuminate\Mail\Mailer();
		 $root->handleQueuedMessage($job, $data);
	 }

	/**
	 * Tell the mailer to not really send messages.
	 *
	 * @static
	 * @param	bool	$value
	 * @return void
	 */
	 public static function pretend($value = true){
		$root = new Illuminate\Mail\Mailer();
		 $root->pretend($value);
	 }

	/**
	 * Get the view environment instance.
	 *
	 * @static
	 * @return \Illuminate\View\Environment
	 */
	 public static function getViewEnvironment(){
		$root = new Illuminate\Mail\Mailer();
		return $root->getViewEnvironment();
	 }

	/**
	 * Get the Swift Mailer instance.
	 *
	 * @static
	 * @return Swift_Mailer
	 */
	 public static function getSwiftMailer(){
		$root = new Illuminate\Mail\Mailer();
		return $root->getSwiftMailer();
	 }

	/**
	 * Set the Swift Mailer instance.
	 *
	 * @static
	 * @param	Swift_Mailer	$swift
	 * @return void
	 */
	 public static function setSwiftMailer($swift){
		$root = new Illuminate\Mail\Mailer();
		 $root->setSwiftMailer($swift);
	 }

	/**
	 * Set the log writer instance.
	 *
	 * @static
	 * @param	\Illuminate\Log\Writer	$logger
	 * @return \Illuminate\Mail\Mailer
	 */
	 public static function setLogger($logger){
		$root = new Illuminate\Mail\Mailer();
		return $root->setLogger($logger);
	 }

	/**
	 * Set the queue manager instance.
	 *
	 * @static
	 * @param	\Illuminate\Queue\QueueManager	$queue
	 * @return \Illuminate\Mail\Mailer
	 */
	 public static function setQueue($queue){
		$root = new Illuminate\Mail\Mailer();
		return $root->setQueue($queue);
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @static
	 * @param	\Illuminate\Container\Container	$container
	 * @return void
	 */
	 public static function setContainer($container){
		$root = new Illuminate\Mail\Mailer();
		 $root->setContainer($container);
	 }

 }
}

namespace  {
 class Paginator extends Illuminate\Support\Facades\Paginator{
	/**
	 * @var \Illuminate\Pagination\Environment $root
	 */
	 static private $root;

	/**
	 * Create a new pagination environment.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @param	\Illuminate\View\Environment	$view
	 * @param	\Symfony\Component\Translation\TranslatorInterface	$trans
	 * @param	string	$pageName
	 * @return void
	 */
	 public static function __construct($request, $view, $trans, $pageName = 'page'){
		$root = new Illuminate\Pagination\Environment();
		 $root->__construct($request, $view, $trans, $pageName);
	 }

	/**
	 * Get a new paginator instance.
	 *
	 * @static
	 * @param	array	$items
	 * @param	int	$perPage
	 * @param	int	$total
	 * @return \Illuminate\Pagination\Paginator
	 */
	 public static function make($items, $total, $perPage){
		$root = new Illuminate\Pagination\Environment();
		return $root->make($items, $total, $perPage);
	 }

	/**
	 * Get the pagination view.
	 *
	 * @static
	 * @param	\Illuminate\Pagination\Paginator	$paginator
	 * @return \Illuminate\View\View
	 */
	 public static function getPaginationView($paginator){
		$root = new Illuminate\Pagination\Environment();
		return $root->getPaginationView($paginator);
	 }

	/**
	 * Get the number of the current page.
	 *
	 * @static
	 * @return int
	 */
	 public static function getCurrentPage(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getCurrentPage();
	 }

	/**
	 * Set the number of the current page.
	 *
	 * @static
	 * @param	int	$number
	 * @return void
	 */
	 public static function setCurrentPage($number){
		$root = new Illuminate\Pagination\Environment();
		 $root->setCurrentPage($number);
	 }

	/**
	 * Get the root URL for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function getCurrentUrl(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getCurrentUrl();
	 }

	/**
	 * Set the base URL in use by the paginator.
	 *
	 * @static
	 * @param	string	$baseUrl
	 * @return void
	 */
	 public static function setBaseUrl($baseUrl){
		$root = new Illuminate\Pagination\Environment();
		 $root->setBaseUrl($baseUrl);
	 }

	/**
	 * Set the input page parameter name used by the paginator.
	 *
	 * @static
	 * @param	string	$pageName
	 * @return void
	 */
	 public static function setPageName($pageName){
		$root = new Illuminate\Pagination\Environment();
		 $root->setPageName($pageName);
	 }

	/**
	 * Get the input page parameter name used by the paginator.
	 *
	 * @static
	 * @return string
	 */
	 public static function getPageName(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getPageName();
	 }

	/**
	 * Get the name of the pagination view.
	 *
	 * @static
	 * @return string
	 */
	 public static function getViewName(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getViewName();
	 }

	/**
	 * Set the name of the pagination view.
	 *
	 * @static
	 * @param	string	$viewName
	 * @return void
	 */
	 public static function setViewName($viewName){
		$root = new Illuminate\Pagination\Environment();
		 $root->setViewName($viewName);
	 }

	/**
	 * Get the locale of the paginator.
	 *
	 * @static
	 * @return string
	 */
	 public static function getLocale(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getLocale();
	 }

	/**
	 * Set the locale of the paginator.
	 *
	 * @static
	 * @param	string	$locale
	 * @return void
	 */
	 public static function setLocale($locale){
		$root = new Illuminate\Pagination\Environment();
		 $root->setLocale($locale);
	 }

	/**
	 * Get the active request instance.
	 *
	 * @static
	 * @return \Symfony\Component\HttpFoundation\Request
	 */
	 public static function getRequest(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getRequest();
	 }

	/**
	 * Set the active request instance.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @return void
	 */
	 public static function setRequest($request){
		$root = new Illuminate\Pagination\Environment();
		 $root->setRequest($request);
	 }

	/**
	 * Get the current view driver.
	 *
	 * @static
	 * @return \Illuminate\View\Environment
	 */
	 public static function getViewDriver(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getViewDriver();
	 }

	/**
	 * Set the current view driver.
	 *
	 * @static
	 * @param	\Illuminate\View\Environment	$view
	 * @return void
	 */
	 public static function setViewDriver($view){
		$root = new Illuminate\Pagination\Environment();
		 $root->setViewDriver($view);
	 }

	/**
	 * Get the translator instance.
	 *
	 * @static
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 */
	 public static function getTranslator(){
		$root = new Illuminate\Pagination\Environment();
		return $root->getTranslator();
	 }

 }
}

namespace  {
 class Queue extends Illuminate\Support\Facades\Queue{
	/**
	 * @var \Illuminate\Queue\QueueInterface $root
	 */
	 static private $root;

	/**
	 * Push a new job onto the queue.
	 *
	 * @static
	 * @param	string	$job
	 * @param	mixed	$data
	 * @param	string	$queue
	 * @return void
	 */
	 public static function push($job, $data = '', $queue = null){
		$root = new Illuminate\Queue\QueueInterface();
		 $root->push($job, $data, $queue);
	 }

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @static
	 * @param	int	$delay
	 * @param	string	$job
	 * @param	mixed	$data
	 * @param	string	$queue
	 * @return void
	 */
	 public static function later($delay, $job, $data = '', $queue = null){
		$root = new Illuminate\Queue\QueueInterface();
		 $root->later($delay, $job, $data, $queue);
	 }

	/**
	 * Pop the next job off of the queue.
	 *
	 * @static
	 * @param	string	$queue
	 * @return \Illuminate\Queue\Jobs\Job|nul
	 */
	 public static function pop($queue = null){
		$root = new Illuminate\Queue\QueueInterface();
		return $root->pop($queue);
	 }

 }
}

namespace  {
 class Redirect extends Illuminate\Support\Facades\Redirect{
	/**
	 * @var \Illuminate\Routing\Redirector $root
	 */
	 static private $root;

	/**
	 * Create a new Redirector instance.
	 *
	 * @static
	 * @param	\Illuminate\Routing\UrlGenerator	$generator
	 * @return void
	 */
	 public static function __construct($generator){
		$root = new Illuminate\Routing\Redirector();
		 $root->__construct($generator);
	 }

	/**
	 * Create a new redirect response to the "home" route.
	 *
	 * @static
	 * @param	int	$status
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function home($status = 302){
		$root = new Illuminate\Routing\Redirector();
		return $root->home($status);
	 }

	/**
	 * Create a new redirect response to the previous location.
	 *
	 * @static
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function back($status = 302, $headers = array()){
		$root = new Illuminate\Routing\Redirector();
		return $root->back($status, $headers);
	 }

	/**
	 * Create a new redirect response to the current URI.
	 *
	 * @static
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function refresh($status = 302, $headers = array()){
		$root = new Illuminate\Routing\Redirector();
		return $root->refresh($status, $headers);
	 }

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 *
	 * @static
	 * @param	string	$path
	 * @param	int	$status
	 * @param	array	$headers
	 * @param	bool	$secure
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function guest($path, $status = 302, $headers = array(), $secure = null){
		$root = new Illuminate\Routing\Redirector();
		return $root->guest($path, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the previously intended location.
	 *
	 * @static
	 * @param	string	$default
	 * @param	int	$status
	 * @param	array	$headers
	 * @param	bool	$secure
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function intended($default, $status = 302, $headers = array(), $secure = null){
		$root = new Illuminate\Routing\Redirector();
		return $root->intended($default, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the given path.
	 *
	 * @static
	 * @param	string	$path
	 * @param	int	$status
	 * @param	array	$headers
	 * @param	bool	$secure
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function to($path, $status = 302, $headers = array(), $secure = null){
		$root = new Illuminate\Routing\Redirector();
		return $root->to($path, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the given HTTPS path.
	 *
	 * @static
	 * @param	string	$path
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function secure($path, $status = 302, $headers = array()){
		$root = new Illuminate\Routing\Redirector();
		return $root->secure($path, $status, $headers);
	 }

	/**
	 * Create a new redirect response to a named route.
	 *
	 * @static
	 * @param	string	$route
	 * @param	array	$parameters
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function route($route, $parameters = array(), $status = 302, $headers = array()){
		$root = new Illuminate\Routing\Redirector();
		return $root->route($route, $parameters, $status, $headers);
	 }

	/**
	 * Create a new redirect response to a controller action.
	 *
	 * @static
	 * @param	string	$action
	 * @param	array	$parameters
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Illuminate\Http\RedirectResponse
	 */
	 public static function action($action, $parameters = array(), $status = 302, $headers = array()){
		$root = new Illuminate\Routing\Redirector();
		return $root->action($action, $parameters, $status, $headers);
	 }

	/**
	 * Get the URL generator instance.
	 *
	 * @static
	 * @return \Illuminate\Routing\UrlGenerator
	 */
	 public static function getUrlGenerator(){
		$root = new Illuminate\Routing\Redirector();
		return $root->getUrlGenerator();
	 }

	/**
	 * Set the active session store.
	 *
	 * @static
	 * @param	\Illuminate\Session\Store	$session
	 * @return void
	 */
	 public static function setSession($session){
		$root = new Illuminate\Routing\Redirector();
		 $root->setSession($session);
	 }

 }
}

namespace  {
 class Redis extends Illuminate\Support\Facades\Redis{
	/**
	 * @var \Illuminate\Redis\Database $root
	 */
	 static private $root;

	/**
	 * Create a new Redis connection instance.
	 *
	 * @static
	 * @param	array	$servers
	 * @return void
	 */
	 public static function __construct($servers = array()){
		$root = new Illuminate\Redis\Database();
		 $root->__construct($servers);
	 }

	/**
	 * Get a specific Redis connection instance.
	 *
	 * @static
	 * @param	string	$name
	 * @return \Predis\Connection\SingleConnectionInterface
	 */
	 public static function connection($name = 'default'){
		$root = new Illuminate\Redis\Database();
		return $root->connection($name);
	 }

	/**
	 * Run a command against the Redis database.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function command($method, $parameters = array()){
		$root = new Illuminate\Redis\Database();
		return $root->command($method, $parameters);
	 }

	/**
	 * Dynamically make a Redis command.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Redis\Database();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Request extends Illuminate\Support\Facades\Request{
	/**
	 * @var \Illuminate\Http\Request $root
	 */
	 static private $root;

	/**
	 * Return the Request instance.
	 *
	 * @static
	 * @return \Illuminate\Http\Request
	 */
	 public static function instance(){
		$root = new Illuminate\Http\Request();
		return $root->instance();
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @static
	 * @return string
	 */
	 public static function root(){
		$root = new Illuminate\Http\Request();
		return $root->root();
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function url(){
		$root = new Illuminate\Http\Request();
		return $root->url();
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function fullUrl(){
		$root = new Illuminate\Http\Request();
		return $root->fullUrl();
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function path(){
		$root = new Illuminate\Http\Request();
		return $root->path();
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @static
	 * @param	string	$index
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function segment($index, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->segment($index, $default);
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @static
	 * @return array
	 */
	 public static function segments(){
		$root = new Illuminate\Http\Request();
		return $root->segments();
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @static
	 * @param	string	$pattern
	 * @return bool
	 */
	 public static function is($pattern){
		$root = new Illuminate\Http\Request();
		return $root->is($pattern);
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @static
	 * @return bool
	 */
	 public static function ajax(){
		$root = new Illuminate\Http\Request();
		return $root->ajax();
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @static
	 * @return bool
	 */
	 public static function secure(){
		$root = new Illuminate\Http\Request();
		return $root->secure();
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @static
	 * @param	string|array	$key
	 * @return bool
	 */
	 public static function has($key){
		$root = new Illuminate\Http\Request();
		return $root->has($key);
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @static
	 * @return array
	 */
	 public static function all(){
		$root = new Illuminate\Http\Request();
		return $root->all();
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function input($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->input($key, $default);
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @static
	 * @param	array	$keys
	 * @return array
	 */
	 public static function only($keys){
		$root = new Illuminate\Http\Request();
		return $root->only($keys);
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @static
	 * @param	array	$keys
	 * @return array
	 */
	 public static function except($keys){
		$root = new Illuminate\Http\Request();
		return $root->except($keys);
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function query($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->query($key, $default);
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function cookie($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->cookie($key, $default);
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile
	 */
	 public static function file($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->file($key, $default);
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasFile($key){
		$root = new Illuminate\Http\Request();
		return $root->hasFile($key);
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function header($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->header($key, $default);
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function server($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->server($key, $default);
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return string
	 */
	 public static function old($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->old($key, $default);
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @static
	 * @param	string $filter
	 * @param	array	$keys
	 * @return void
	 */
	 public static function flash($filter = null, $keys = array()){
		$root = new Illuminate\Http\Request();
		 $root->flash($filter, $keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @static
	 * @param	dynamic	string
	 * @return void
	 */
	 public static function flashOnly($keys){
		$root = new Illuminate\Http\Request();
		 $root->flashOnly($keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @static
	 * @param	dynamic	string
	 * @return void
	 */
	 public static function flashExcept($keys){
		$root = new Illuminate\Http\Request();
		 $root->flashExcept($keys);
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @static
	 * @return void
	 */
	 public static function flush(){
		$root = new Illuminate\Http\Request();
		 $root->flush();
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @static
	 * @param	array	$input
	 * @return void
	 */
	 public static function merge($input){
		$root = new Illuminate\Http\Request();
		 $root->merge($input);
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @static
	 * @param	array	$input
	 * @return void
	 */
	 public static function replace($input){
		$root = new Illuminate\Http\Request();
		 $root->replace($input);
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return mixed
	 */
	 public static function json($key = null, $default = null){
		$root = new Illuminate\Http\Request();
		return $root->json($key, $default);
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @static
	 * @return bool
	 */
	 public static function isJson(){
		$root = new Illuminate\Http\Request();
		return $root->isJson();
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @static
	 * @return \Illuminate\Session\Store
	 */
	 public static function getSessionStore(){
		$root = new Illuminate\Http\Request();
		return $root->getSessionStore();
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @static
	 * @param	\Illuminate\Session\Store	$session
	 * @return void
	 */
	 public static function setSessionStore($session){
		$root = new Illuminate\Http\Request();
		 $root->setSessionStore($session);
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @static
	 * @return bool
	 */
	 public static function hasSessionStore(){
		$root = new Illuminate\Http\Request();
		return $root->hasSessionStore();
	 }

	/**
	 * Constructor.
	 *
	 * @static
	 * @param	array	$query	The GET parameters
	 * @param	array	$request	The POST parameters
	 * @param	array	$attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param	array	$cookies	The COOKIE parameters
	 * @param	array	$files	The FILES parameters
	 * @param	array	$server	The SERVER parameters
	 * @param	string $content	The raw body data
	 * @return void
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new Illuminate\Http\Request();
		 $root->__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Sets the parameters for this request.
	 * This method also re-initializes all properties.
	 *
	 * @static
	 * @param	array	$query	The GET parameters
	 * @param	array	$request	The POST parameters
	 * @param	array	$attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param	array	$cookies	The COOKIE parameters
	 * @param	array	$files	The FILES parameters
	 * @param	array	$server	The SERVER parameters
	 * @param	string $content	The raw body data
	 * @return void
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new Illuminate\Http\Request();
		 $root->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @static
	 * @return Request A new request
	 */
	 public static function createFromGlobals(){
		$root = new Illuminate\Http\Request();
		return $root->createFromGlobals();
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @static
	 * @param	string $uri	The URI
	 * @param	string $method	The HTTP method
	 * @param	array	$parameters The query (GET) or request (POST) parameters
	 * @param	array	$cookies	The request cookies ($_COOKIE)
	 * @param	array	$files	The request files ($_FILES)
	 * @param	array	$server	The server parameters ($_SERVER)
	 * @param	string $content	The raw body data
	 * @return Request A Request instance
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		$root = new Illuminate\Http\Request();
		return $root->create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @static
	 * @param	array $query	The GET parameters
	 * @param	array $request	The POST parameters
	 * @param	array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param	array $cookies	The COOKIE parameters
	 * @param	array $files	The FILES parameters
	 * @param	array $server	The SERVER parameters
	 * @return Request The duplicated request
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		$root = new Illuminate\Http\Request();
		return $root->duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @static
	 * @return string The request
	 */
	 public static function __toString(){
		$root = new Illuminate\Http\Request();
		return $root->__toString();
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @static
	 * @return void
	 */
	 public static function overrideGlobals(){
		$root = new Illuminate\Http\Request();
		 $root->overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @static
	 * @param	array $proxies A list of trusted proxies
	 * @return void
	 */
	 public static function setTrustedProxies($proxies){
		$root = new Illuminate\Http\Request();
		 $root->setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @static
	 * @return array An array of trusted proxies.
	 */
	 public static function getTrustedProxies(){
		$root = new Illuminate\Http\Request();
		return $root->getTrustedProxies();
	 }

	/**
	 * Sets the name for trusted headers.
	 * The following header keys are supported:
	 * * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 * * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 * * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 * * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @static
	 * @param	string $key	The header key
	 * @param	string $value The header name
	 * @return void
	 */
	 public static function setTrustedHeaderName($key, $value){
		$root = new Illuminate\Http\Request();
		 $root->setTrustedHeaderName($key, $value);
	 }

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @static
	 * @param	string $key The header key
	 * @return string The header name
	 */
	 public static function getTrustedHeaderName($key){
		$root = new Illuminate\Http\Request();
		return $root->getTrustedHeaderName($key);
	 }

	/**
	 * Normalizes a query string.
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @static
	 * @param	string $qs Query string
	 * @return string A normalized query string for the Request
	 */
	 public static function normalizeQueryString($qs){
		$root = new Illuminate\Http\Request();
		return $root->normalizeQueryString($qs);
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static
	 * @return void
	 */
	 public static function enableHttpMethodParameterOverride(){
		$root = new Illuminate\Http\Request();
		 $root->enableHttpMethodParameterOverride();
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @static
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 */
	 public static function getHttpMethodParameterOverride(){
		$root = new Illuminate\Http\Request();
		return $root->getHttpMethodParameterOverride();
	 }

	/**
	 * Gets a "parameter" value.
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * Order of precedence: GET, PATH, POST
	 * Avoid using this method in controllers:
	 * * slow
	 * * prefer to get from a "named" source
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @static
	 * @param	string	$key	the key
	 * @param	mixed	$default the default value
	 * @param	Boolean $deep	is parameter deep in multidimensional array
	 * @return mixed
	 */
	 public static function get($key, $default = null, $deep = false){
		$root = new Illuminate\Http\Request();
		return $root->get($key, $default, $deep);
	 }

	/**
	 * Gets the Session.
	 *
	 * @static
	 * @return SessionInterface|null The session
	 */
	 public static function getSession(){
		$root = new Illuminate\Http\Request();
		return $root->getSession();
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function hasPreviousSession(){
		$root = new Illuminate\Http\Request();
		return $root->hasPreviousSession();
	 }

	/**
	 * Whether the request contains a Session object.
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @static
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 */
	 public static function hasSession(){
		$root = new Illuminate\Http\Request();
		return $root->hasSession();
	 }

	/**
	 * Sets the Session.
	 *
	 * @static
	 * @param	SessionInterface $session The Session
	 * @return void
	 */
	 public static function setSession($session){
		$root = new Illuminate\Http\Request();
		 $root->setSession($session);
	 }

	/**
	 * Returns the client IP addresses.
	 * The most trusted IP address is first, and the less trusted one last.
	 * The "real" client IP address is the last one, but this is also the
	 * less trusted one.
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @static
	 * @return array The client IP addresses
	 */
	 public static function getClientIps(){
		$root = new Illuminate\Http\Request();
		return $root->getClientIps();
	 }

	/**
	 * Returns the client IP address.
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @static
	 * @return string The client IP address
	 */
	 public static function getClientIp(){
		$root = new Illuminate\Http\Request();
		return $root->getClientIp();
	 }

	/**
	 * Returns current script name.
	 *
	 * @static
	 * @return string
	 */
	 public static function getScriptName(){
		$root = new Illuminate\Http\Request();
		return $root->getScriptName();
	 }

	/**
	 * Returns the path being requested relative to the executed script.
	 * The path info always starts with a /.
	 * Suppose this request is instantiated from /mysite on localhost:
	 * * http://localhost/mysite              returns an empty string
	 * * http://localhost/mysite/about        returns '/about'
	 * * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 * * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @static
	 * @return string The raw path (i.e. not urldecoded)
	 */
	 public static function getPathInfo(){
		$root = new Illuminate\Http\Request();
		return $root->getPathInfo();
	 }

	/**
	 * Returns the root path from which this request is executed.
	 * Suppose that an index.php file instantiates this request object:
	 * * http://localhost/index.php         returns an empty string
	 * * http://localhost/index.php/page    returns an empty string
	 * * http://localhost/web/index.php     returns '/web'
	 * * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @static
	 * @return string The raw path (i.e. not urldecoded)
	 */
	 public static function getBasePath(){
		$root = new Illuminate\Http\Request();
		return $root->getBasePath();
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * The base URL never ends with a /.
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @static
	 * @return string The raw url (i.e. not urldecoded)
	 */
	 public static function getBaseUrl(){
		$root = new Illuminate\Http\Request();
		return $root->getBaseUrl();
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @static
	 * @return string
	 */
	 public static function getScheme(){
		$root = new Illuminate\Http\Request();
		return $root->getScheme();
	 }

	/**
	 * Returns the port on which the request is made.
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * The "X-Forwarded-Port" header must contain the client port.
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @static
	 * @return string
	 */
	 public static function getPort(){
		$root = new Illuminate\Http\Request();
		return $root->getPort();
	 }

	/**
	 * Returns the user.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function getUser(){
		$root = new Illuminate\Http\Request();
		return $root->getUser();
	 }

	/**
	 * Returns the password.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function getPassword(){
		$root = new Illuminate\Http\Request();
		return $root->getPassword();
	 }

	/**
	 * Gets the user info.
	 *
	 * @static
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 */
	 public static function getUserInfo(){
		$root = new Illuminate\Http\Request();
		return $root->getUserInfo();
	 }

	/**
	 * Returns the HTTP host being requested.
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @static
	 * @return string
	 */
	 public static function getHttpHost(){
		$root = new Illuminate\Http\Request();
		return $root->getHttpHost();
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @static
	 * @return string The raw URI (i.e. not urldecoded)
	 */
	 public static function getRequestUri(){
		$root = new Illuminate\Http\Request();
		return $root->getRequestUri();
	 }

	/**
	 * Gets the scheme and HTTP host.
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @static
	 * @return string The scheme and HTTP host
	 */
	 public static function getSchemeAndHttpHost(){
		$root = new Illuminate\Http\Request();
		return $root->getSchemeAndHttpHost();
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @static
	 * @return string A normalized URI for the Request
	 */
	 public static function getUri(){
		$root = new Illuminate\Http\Request();
		return $root->getUri();
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @static
	 * @param	string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 */
	 public static function getUriForPath($path){
		$root = new Illuminate\Http\Request();
		return $root->getUriForPath($path);
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @static
	 * @return string|null A normalized query string for the Request
	 */
	 public static function getQueryString(){
		$root = new Illuminate\Http\Request();
		return $root->getQueryString();
	 }

	/**
	 * Checks whether the request is secure or not.
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function isSecure(){
		$root = new Illuminate\Http\Request();
		return $root->isSecure();
	 }

	/**
	 * Returns the host name.
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @static
	 * @return string
	 */
	 public static function getHost(){
		$root = new Illuminate\Http\Request();
		return $root->getHost();
	 }

	/**
	 * Sets the request method.
	 *
	 * @static
	 * @param	string $method
	 * @return void
	 */
	 public static function setMethod($method){
		$root = new Illuminate\Http\Request();
		 $root->setMethod($method);
	 }

	/**
	 * Gets the request "intended" method.
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 * The method is always an uppercased string.
	 *
	 * @static
	 * @return string The request method
	 */
	 public static function getMethod(){
		$root = new Illuminate\Http\Request();
		return $root->getMethod();
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @static
	 * @return string The request method
	 */
	 public static function getRealMethod(){
		$root = new Illuminate\Http\Request();
		return $root->getRealMethod();
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @static
	 * @param	string $format The format
	 * @return string The associated mime type (null if not found)
	 */
	 public static function getMimeType($format){
		$root = new Illuminate\Http\Request();
		return $root->getMimeType($format);
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @static
	 * @param	string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 */
	 public static function getFormat($mimeType){
		$root = new Illuminate\Http\Request();
		return $root->getFormat($mimeType);
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @static
	 * @param	string	$format	The format
	 * @param	string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @return void
	 */
	 public static function setFormat($format, $mimeTypes){
		$root = new Illuminate\Http\Request();
		 $root->setFormat($format, $mimeTypes);
	 }

	/**
	 * Gets the request format.
	 * Here is the process to determine the format:
	 * * format defined by the user (with setRequestFormat())
	 * * _format request parameter
	 * * $default
	 *
	 * @static
	 * @param	string $default The default format
	 * @return string The request format
	 */
	 public static function getRequestFormat($default = 'html'){
		$root = new Illuminate\Http\Request();
		return $root->getRequestFormat($default);
	 }

	/**
	 * Sets the request format.
	 *
	 * @static
	 * @param	string $format The request format.
	 * @return void
	 */
	 public static function setRequestFormat($format){
		$root = new Illuminate\Http\Request();
		 $root->setRequestFormat($format);
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @static
	 * @return string|null The format (null if no content type is present)
	 */
	 public static function getContentType(){
		$root = new Illuminate\Http\Request();
		return $root->getContentType();
	 }

	/**
	 * Sets the default locale.
	 *
	 * @static
	 * @param	string $locale
	 * @return void
	 */
	 public static function setDefaultLocale($locale){
		$root = new Illuminate\Http\Request();
		 $root->setDefaultLocale($locale);
	 }

	/**
	 * Sets the locale.
	 *
	 * @static
	 * @param	string $locale
	 * @return void
	 */
	 public static function setLocale($locale){
		$root = new Illuminate\Http\Request();
		 $root->setLocale($locale);
	 }

	/**
	 * Get the locale.
	 *
	 * @static
	 * @return string
	 */
	 public static function getLocale(){
		$root = new Illuminate\Http\Request();
		return $root->getLocale();
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @static
	 * @param	string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 */
	 public static function isMethod($method){
		$root = new Illuminate\Http\Request();
		return $root->isMethod($method);
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function isMethodSafe(){
		$root = new Illuminate\Http\Request();
		return $root->isMethodSafe();
	 }

	/**
	 * Returns the request body content.
	 *
	 * @static
	 * @param	Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 */
	 public static function getContent($asResource = false){
		$root = new Illuminate\Http\Request();
		return $root->getContent($asResource);
	 }

	/**
	 * Gets the Etags.
	 *
	 * @static
	 * @return array The entity tags
	 */
	 public static function getETags(){
		$root = new Illuminate\Http\Request();
		return $root->getETags();
	 }

	/**
	 * 
	 *
	 * @static
	 * @return Boolean
	 */
	 public static function isNoCache(){
		$root = new Illuminate\Http\Request();
		return $root->isNoCache();
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @static
	 * @param	array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 */
	 public static function getPreferredLanguage($locales = null){
		$root = new Illuminate\Http\Request();
		return $root->getPreferredLanguage($locales);
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @static
	 * @return array Languages ordered in the user browser preferences
	 */
	 public static function getLanguages(){
		$root = new Illuminate\Http\Request();
		return $root->getLanguages();
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @static
	 * @return array List of charsets in preferable order
	 */
	 public static function getCharsets(){
		$root = new Illuminate\Http\Request();
		return $root->getCharsets();
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @static
	 * @return array List of content types in preferable order
	 */
	 public static function getAcceptableContentTypes(){
		$root = new Illuminate\Http\Request();
		return $root->getAcceptableContentTypes();
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @static
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 */
	 public static function isXmlHttpRequest(){
		$root = new Illuminate\Http\Request();
		return $root->isXmlHttpRequest();
	 }

 }
}

namespace  {
 class Response{
	/**
	 * @var \Illuminate\Support\Facades\Response $root
	 */
	 static private $root;

	/**
	 * Return a new response from the application.
	 *
	 * @static
	 * @param	string	$content
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function make($content = '', $status = 200, $headers = array()){
		$root = new Illuminate\Support\Facades\Response();
		return $root->make($content, $status, $headers);
	 }

	/**
	 * Return a new view response from the application.
	 *
	 * @static
	 * @param	string	$view
	 * @param	array	$data
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function view($view, $data = array(), $status = 200, $headers = array()){
		$root = new Illuminate\Support\Facades\Response();
		return $root->view($view, $data, $status, $headers);
	 }

	/**
	 * Return a new JSON response from the application.
	 *
	 * @static
	 * @param	string|array	$data
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Illuminate\Http\JsonResponse
	 */
	 public static function json($data = array(), $status = 200, $headers = array()){
		$root = new Illuminate\Support\Facades\Response();
		return $root->json($data, $status, $headers);
	 }

	/**
	 * Return a new streamed response from the application.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Symfony\Component\HttpFoundation\StreamedResponse
	 */
	 public static function stream($callback, $status = 200, $headers = array()){
		$root = new Illuminate\Support\Facades\Response();
		return $root->stream($callback, $status, $headers);
	 }

	/**
	 * Create a new file download response.
	 *
	 * @static
	 * @param	SplFileInfo|string	$file
	 * @param	int	$status
	 * @param	array	$headers
	 * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
	 */
	 public static function download($file, $name = null, $headers = array()){
		$root = new Illuminate\Support\Facades\Response();
		return $root->download($file, $name, $headers);
	 }

 }
}

namespace  {
 class Route extends Illuminate\Support\Facades\Route{
	/**
	 * @var \Illuminate\Routing\Router $root
	 */
	 static private $root;

	/**
	 * Create a new router instance.
	 *
	 * @static
	 * @param	\Illuminate\Container\Container	$container
	 * @return void
	 */
	 public static function __construct($container = null){
		$root = new Illuminate\Routing\Router();
		 $root->__construct($container);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function get($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->get($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function post($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->post($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function put($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->put($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function patch($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->patch($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function delete($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->delete($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function options($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->options($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$method
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function match($method, $pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->match($method, $pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	mixed	$action
	 * @return \Illuminate\Routing\Route
	 */
	 public static function any($pattern, $action){
		$root = new Illuminate\Routing\Router();
		return $root->any($pattern, $action);
	 }

	/**
	 * Register an array of controllers with wildcard routing.
	 *
	 * @static
	 * @param	array	$controllers
	 * @return void
	 */
	 public static function controllers($controllers){
		$root = new Illuminate\Routing\Router();
		 $root->controllers($controllers);
	 }

	/**
	 * Route a controller to a URI with wildcard routing.
	 *
	 * @static
	 * @param	string	$uri
	 * @param	string	$controller
	 * @param	array	$names
	 * @return \Illuminate\Routing\Route
	 */
	 public static function controller($uri, $controller, $names = array()){
		$root = new Illuminate\Routing\Router();
		return $root->controller($uri, $controller, $names);
	 }

	/**
	 * Route a resource to a controller.
	 *
	 * @static
	 * @param	string	$resource
	 * @param	string	$controller
	 * @param	array	$options
	 * @return void
	 */
	 public static function resource($resource, $controller, $options = array()){
		$root = new Illuminate\Routing\Router();
		 $root->resource($resource, $controller, $options);
	 }

	/**
	 * Get the base resource URI for a given resource.
	 *
	 * @static
	 * @param	string	$resource
	 * @return string
	 */
	 public static function getResourceUri($resource){
		$root = new Illuminate\Routing\Router();
		return $root->getResourceUri($resource);
	 }

	/**
	 * Create a route group with shared attributes.
	 *
	 * @static
	 * @param	array	$attributes
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function group($attributes, $callback){
		$root = new Illuminate\Routing\Router();
		 $root->group($attributes, $callback);
	 }

	/**
	 * Get the response for a given request.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function dispatch($request){
		$root = new Illuminate\Routing\Router();
		return $root->dispatch($request);
	 }

	/**
	 * Register a "before" routing filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function before($callback){
		$root = new Illuminate\Routing\Router();
		 $root->before($callback);
	 }

	/**
	 * Register an "after" routing filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function after($callback){
		$root = new Illuminate\Routing\Router();
		 $root->after($callback);
	 }

	/**
	 * Register a "close" routing filter.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function close($callback){
		$root = new Illuminate\Routing\Router();
		 $root->close($callback);
	 }

	/**
	 * Register a "finish" routing filters.
	 *
	 * @static
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function finish($callback){
		$root = new Illuminate\Routing\Router();
		 $root->finish($callback);
	 }

	/**
	 * Register a new filter with the application.
	 *
	 * @static
	 * @param	string	$name
	 * @param	Closure|string	$callback
	 * @return void
	 */
	 public static function addFilter($name, $callback){
		$root = new Illuminate\Routing\Router();
		 $root->addFilter($name, $callback);
	 }

	/**
	 * Get a registered filter callback.
	 *
	 * @static
	 * @param	string	$name
	 * @return Closure
	 */
	 public static function getFilter($name){
		$root = new Illuminate\Routing\Router();
		return $root->getFilter($name);
	 }

	/**
	 * Tie a registered filter to a URI pattern.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	string|array	$names
	 * @return void
	 */
	 public static function matchFilter($pattern, $names){
		$root = new Illuminate\Routing\Router();
		 $root->matchFilter($pattern, $names);
	 }

	/**
	 * Find the patterned filters matching a request.
	 *
	 * @static
	 * @param	\Illuminate\Http\Request	$request
	 * @return array
	 */
	 public static function findPatternFilters($request){
		$root = new Illuminate\Routing\Router();
		return $root->findPatternFilters($request);
	 }

	/**
	 * Call the finish" global filter.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @param	\Symfony\Component\HttpFoundation\Response	$response
	 * @return mixed
	 */
	 public static function callFinishFilter($request, $response){
		$root = new Illuminate\Routing\Router();
		return $root->callFinishFilter($request, $response);
	 }

	/**
	 * Call the "close" global filter.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @param	\Symfony\Component\HttpFoundation\Response	$response
	 * @return mixed
	 */
	 public static function callCloseFilter($request, $response){
		$root = new Illuminate\Routing\Router();
		return $root->callCloseFilter($request, $response);
	 }

	/**
	 * Set a global where pattern on all routes
	 *
	 * @static
	 * @param	string	$key
	 * @param	string	$pattern
	 * @return void
	 */
	 public static function pattern($key, $pattern){
		$root = new Illuminate\Routing\Router();
		 $root->pattern($key, $pattern);
	 }

	/**
	 * Register a model binder for a wildcard.
	 *
	 * @static
	 * @param	string	$key
	 * @param	string	$class
	 * @return void
	 */
	 public static function model($key, $class, $callback = null){
		$root = new Illuminate\Routing\Router();
		 $root->model($key, $class, $callback);
	 }

	/**
	 * Register a custom parameter binder.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$binder
	 * @return void
	 */
	 public static function bind($key, $binder){
		$root = new Illuminate\Routing\Router();
		 $root->bind($key, $binder);
	 }

	/**
	 * Determine if a given key has a registered binder.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasBinder($key){
		$root = new Illuminate\Routing\Router();
		return $root->hasBinder($key);
	 }

	/**
	 * Call a binder for a given wildcard.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @param	\Illuminate\Routing\Route	$route
	 * @return mixed
	 */
	 public static function performBinding($key, $value, $route){
		$root = new Illuminate\Routing\Router();
		return $root->performBinding($key, $value, $route);
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @static
	 * @param	mixed	$value
	 * @param	\Illuminate\Http\Request	$request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	 public static function prepare($value, $request){
		$root = new Illuminate\Routing\Router();
		return $root->prepare($value, $request);
	 }

	/**
	 * Get the current route name.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function currentRouteName(){
		$root = new Illuminate\Routing\Router();
		return $root->currentRouteName();
	 }

	/**
	 * Determine if the current route has a given name.
	 *
	 * @static
	 * @param	string	$name
	 * @return bool
	 */
	 public static function currentRouteNamed($name){
		$root = new Illuminate\Routing\Router();
		return $root->currentRouteNamed($name);
	 }

	/**
	 * Get the current route action.
	 *
	 * @static
	 * @return string|null
	 */
	 public static function currentRouteAction(){
		$root = new Illuminate\Routing\Router();
		return $root->currentRouteAction();
	 }

	/**
	 * Determine if the current route uses a given controller action.
	 *
	 * @static
	 * @param	string	$action
	 * @return bool
	 */
	 public static function currentRouteUses($action){
		$root = new Illuminate\Routing\Router();
		return $root->currentRouteUses($action);
	 }

	/**
	 * Determine if route filters are enabled.
	 *
	 * @static
	 * @return bool
	 */
	 public static function filtersEnabled(){
		$root = new Illuminate\Routing\Router();
		return $root->filtersEnabled();
	 }

	/**
	 * Enable the running of filters.
	 *
	 * @static
	 * @return void
	 */
	 public static function enableFilters(){
		$root = new Illuminate\Routing\Router();
		 $root->enableFilters();
	 }

	/**
	 * Disable the running of all filters.
	 *
	 * @static
	 * @return void
	 */
	 public static function disableFilters(){
		$root = new Illuminate\Routing\Router();
		 $root->disableFilters();
	 }

	/**
	 * Retrieve the entire route collection.
	 *
	 * @static
	 * @return \Symfony\Component\Routing\RouteCollection
	 */
	 public static function getRoutes(){
		$root = new Illuminate\Routing\Router();
		return $root->getRoutes();
	 }

	/**
	 * Get the current request being dispatched.
	 *
	 * @static
	 * @return \Symfony\Component\HttpFoundation\Request
	 */
	 public static function getRequest(){
		$root = new Illuminate\Routing\Router();
		return $root->getRequest();
	 }

	/**
	 * Get the current route being executed.
	 *
	 * @static
	 * @return \Illuminate\Routing\Route
	 */
	 public static function getCurrentRoute(){
		$root = new Illuminate\Routing\Router();
		return $root->getCurrentRoute();
	 }

	/**
	 * Set the current route on the router.
	 *
	 * @static
	 * @param	\Illuminate\Routing\Route	$route
	 * @return void
	 */
	 public static function setCurrentRoute($route){
		$root = new Illuminate\Routing\Router();
		 $root->setCurrentRoute($route);
	 }

	/**
	 * Get the filters defined on the router.
	 *
	 * @static
	 * @return array
	 */
	 public static function getFilters(){
		$root = new Illuminate\Routing\Router();
		return $root->getFilters();
	 }

	/**
	 * Get the global filters defined on the router.
	 *
	 * @static
	 * @return array
	 */
	 public static function getGlobalFilters(){
		$root = new Illuminate\Routing\Router();
		return $root->getGlobalFilters();
	 }

	/**
	 * Get the controller inspector instance.
	 *
	 * @static
	 * @return \Illuminate\Routing\Controllers\Inspector
	 */
	 public static function getInspector(){
		$root = new Illuminate\Routing\Router();
		return $root->getInspector();
	 }

	/**
	 * Set the controller inspector instance.
	 *
	 * @static
	 * @param	\Illuminate\Routing\Controllers\Inspector	$inspector
	 * @return void
	 */
	 public static function setInspector($inspector){
		$root = new Illuminate\Routing\Router();
		 $root->setInspector($inspector);
	 }

	/**
	 * Get the container used by the router.
	 *
	 * @static
	 * @return \Illuminate\Container\Container
	 */
	 public static function getContainer(){
		$root = new Illuminate\Routing\Router();
		return $root->getContainer();
	 }

	/**
	 * Set the container instance on the router.
	 *
	 * @static
	 * @param	\Illuminate\Container\Container	$container
	 * @return void
	 */
	 public static function setContainer($container){
		$root = new Illuminate\Routing\Router();
		 $root->setContainer($container);
	 }

 }
}

namespace  {
 class Seeder extends Illuminate\Database\Seeder{
	/**
	 * @var \Illuminate\Database\Seeder $root
	 */
	 static private $root;

 }
}

namespace  {
 class Session extends Illuminate\Support\Facades\Session{
	/**
	 * @var \Illuminate\Session\Store $root
	 */
	 static private $root;

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function start(){
		$root = new Illuminate\Session\Store();
		 $root->start();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function save(){
		$root = new Illuminate\Session\Store();
		 $root->save();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function has($name){
		$root = new Illuminate\Session\Store();
		 $root->has($name);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function get($name, $default = null){
		$root = new Illuminate\Session\Store();
		 $root->get($name, $default);
	 }

	/**
	 * Determine if the session contains old input.
	 *
	 * @static
	 * @param	string	$key
	 * @return bool
	 */
	 public static function hasOldInput($key){
		$root = new Illuminate\Session\Store();
		return $root->hasOldInput($key);
	 }

	/**
	 * Get the requested item from the flashed input array.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$default
	 * @return mixed
	 */
	 public static function getOldInput($key = null, $default = null){
		$root = new Illuminate\Session\Store();
		return $root->getOldInput($key, $default);
	 }

	/**
	 * Get the CSRF token value.
	 *
	 * @static
	 * @return string
	 */
	 public static function getToken(){
		$root = new Illuminate\Session\Store();
		return $root->getToken();
	 }

	/**
	 * Get the CSRF token value.
	 *
	 * @static
	 * @return string
	 */
	 public static function token(){
		$root = new Illuminate\Session\Store();
		return $root->token();
	 }

	/**
	 * Put a key / value pair in the session.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function put($key, $value){
		$root = new Illuminate\Session\Store();
		 $root->put($key, $value);
	 }

	/**
	 * Push a value onto a session array.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function push($key, $value){
		$root = new Illuminate\Session\Store();
		 $root->push($key, $value);
	 }

	/**
	 * Flash a key / value pair to the session.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function flash($key, $value){
		$root = new Illuminate\Session\Store();
		 $root->flash($key, $value);
	 }

	/**
	 * Flash an input array to the session.
	 *
	 * @static
	 * @param	array	$value
	 * @return void
	 */
	 public static function flashInput($value){
		$root = new Illuminate\Session\Store();
		 $root->flashInput($value);
	 }

	/**
	 * Reflash all of the session flash data.
	 *
	 * @static
	 * @return void
	 */
	 public static function reflash(){
		$root = new Illuminate\Session\Store();
		 $root->reflash();
	 }

	/**
	 * Reflash a subset of the current flash data.
	 *
	 * @static
	 * @param	array|dynamic	$keys
	 * @return void
	 */
	 public static function keep($keys = null){
		$root = new Illuminate\Session\Store();
		 $root->keep($keys);
	 }

	/**
	 * Remove an item from the session.
	 *
	 * @static
	 * @param	string	$key
	 * @return void
	 */
	 public static function forget($key){
		$root = new Illuminate\Session\Store();
		 $root->forget($key);
	 }

	/**
	 * Remove all of the items from the session.
	 *
	 * @static
	 * @return void
	 */
	 public static function flush(){
		$root = new Illuminate\Session\Store();
		 $root->flush();
	 }

	/**
	 * Generate a new session identifier.
	 *
	 * @static
	 * @return string
	 */
	 public static function regenerate(){
		$root = new Illuminate\Session\Store();
		return $root->regenerate();
	 }

	/**
	 * Constructor.
	 *
	 * @static
	 * @param	SessionStorageInterface $storage	A SessionStorageInterface instance.
	 * @param	AttributeBagInterface	$attributes An AttributeBagInterface instance, (defaults null for default AttributeBag)
	 * @param	FlashBagInterface	$flashes	A FlashBagInterface instance (defaults null for default FlashBag)
	 * @return void
	 */
	 public static function __construct($storage = null, $attributes = null, $flashes = null){
		$root = new Illuminate\Session\Store();
		 $root->__construct($storage, $attributes, $flashes);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function set($name, $value){
		$root = new Illuminate\Session\Store();
		 $root->set($name, $value);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function all(){
		$root = new Illuminate\Session\Store();
		 $root->all();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function replace($attributes){
		$root = new Illuminate\Session\Store();
		 $root->replace($attributes);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function remove($name){
		$root = new Illuminate\Session\Store();
		 $root->remove($name);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function clear(){
		$root = new Illuminate\Session\Store();
		 $root->clear();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function isStarted(){
		$root = new Illuminate\Session\Store();
		 $root->isStarted();
	 }

	/**
	 * Returns an iterator for attributes.
	 *
	 * @static
	 * @return \ArrayIterator An \ArrayIterator instance
	 */
	 public static function getIterator(){
		$root = new Illuminate\Session\Store();
		return $root->getIterator();
	 }

	/**
	 * Returns the number of attributes.
	 *
	 * @static
	 * @return int The number of attributes
	 */
	 public static function count(){
		$root = new Illuminate\Session\Store();
		return $root->count();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function invalidate($lifetime = null){
		$root = new Illuminate\Session\Store();
		 $root->invalidate($lifetime);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function migrate($destroy = false, $lifetime = null){
		$root = new Illuminate\Session\Store();
		 $root->migrate($destroy, $lifetime);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function getId(){
		$root = new Illuminate\Session\Store();
		 $root->getId();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function setId($id){
		$root = new Illuminate\Session\Store();
		 $root->setId($id);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function getName(){
		$root = new Illuminate\Session\Store();
		 $root->getName();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function setName($name){
		$root = new Illuminate\Session\Store();
		 $root->setName($name);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function getMetadataBag(){
		$root = new Illuminate\Session\Store();
		 $root->getMetadataBag();
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function registerBag($bag){
		$root = new Illuminate\Session\Store();
		 $root->registerBag($bag);
	 }

	/**
	 * {@inheritdoc}
	 *
	 * @static
	 * @return void
	 */
	 public static function getBag($name){
		$root = new Illuminate\Session\Store();
		 $root->getBag($name);
	 }

	/**
	 * Gets the flashbag interface.
	 *
	 * @static
	 * @return FlashBagInterface
	 */
	 public static function getFlashBag(){
		$root = new Illuminate\Session\Store();
		return $root->getFlashBag();
	 }

 }
}

namespace  {
 class Str{
	/**
	 * @var \Illuminate\Support\Str $root
	 */
	 static private $root;

	/**
	 * Transliterate a UTF-8 value to ASCII.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function ascii($value){
		$root = new Illuminate\Support\Str();
		return $root->ascii($value);
	 }

	/**
	 * Convert a value to camel case.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function camel($value){
		$root = new Illuminate\Support\Str();
		return $root->camel($value);
	 }

	/**
	 * Determine if a given string contains a given sub-string.
	 *
	 * @static
	 * @param	string	$haystack
	 * @param	string|array	$needle
	 * @return bool
	 */
	 public static function contains($haystack, $needle){
		$root = new Illuminate\Support\Str();
		return $root->contains($haystack, $needle);
	 }

	/**
	 * Determine if a given string ends with a given needle.
	 *
	 * @static
	 * @param	string $haystack
	 * @param	string $needle
	 * @return bool
	 */
	 public static function endsWith($haystack, $needle){
		$root = new Illuminate\Support\Str();
		return $root->endsWith($haystack, $needle);
	 }

	/**
	 * Cap a string with a single instance of a given value.
	 *
	 * @static
	 * @param	string	$value
	 * @param	string	$cap
	 * @return string
	 */
	 public static function finish($value, $cap){
		$root = new Illuminate\Support\Str();
		return $root->finish($value, $cap);
	 }

	/**
	 * Determine if a given string matches a given pattern.
	 *
	 * @static
	 * @param	string	$pattern
	 * @param	string	$value
	 * @return bool
	 */
	 public static function is($pattern, $value){
		$root = new Illuminate\Support\Str();
		return $root->is($pattern, $value);
	 }

	/**
	 * Limit the number of characters in a string.
	 *
	 * @static
	 * @param	string	$value
	 * @param	int	$limit
	 * @param	string	$end
	 * @return string
	 */
	 public static function limit($value, $limit = 100, $end = '...'){
		$root = new Illuminate\Support\Str();
		return $root->limit($value, $limit, $end);
	 }

	/**
	 * Convert the given string to lower-case.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function lower($value){
		$root = new Illuminate\Support\Str();
		return $root->lower($value);
	 }

	/**
	 * Limit the number of words in a string.
	 *
	 * @static
	 * @param	string	$value
	 * @param	int	$words
	 * @param	string	$end
	 * @return string
	 */
	 public static function words($value, $words = 100, $end = '...'){
		$root = new Illuminate\Support\Str();
		return $root->words($value, $words, $end);
	 }

	/**
	 * Get the plural form of an English word.
	 *
	 * @static
	 * @param	string	$value
	 * @param	int	$count
	 * @return string
	 */
	 public static function plural($value, $count = 2){
		$root = new Illuminate\Support\Str();
		return $root->plural($value, $count);
	 }

	/**
	 * Generate a more truly "random" alpha-numeric string.
	 *
	 * @static
	 * @param	int	$length
	 * @return string
	 */
	 public static function random($length = 16){
		$root = new Illuminate\Support\Str();
		return $root->random($length);
	 }

	/**
	 * Generate a "random" alpha-numeric string.
	 * Should not be considered sufficient for cryptography, etc.
	 *
	 * @static
	 * @param	int	$length
	 * @return string
	 */
	 public static function quickRandom($length = 16){
		$root = new Illuminate\Support\Str();
		return $root->quickRandom($length);
	 }

	/**
	 * Convert the given string to upper-case.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function upper($value){
		$root = new Illuminate\Support\Str();
		return $root->upper($value);
	 }

	/**
	 * Get the singular form of an English word.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function singular($value){
		$root = new Illuminate\Support\Str();
		return $root->singular($value);
	 }

	/**
	 * Generate a URL friendly "slug" from a given string.
	 *
	 * @static
	 * @param	string	$title
	 * @param	string	$separator
	 * @return string
	 */
	 public static function slug($title, $separator = '-'){
		$root = new Illuminate\Support\Str();
		return $root->slug($title, $separator);
	 }

	/**
	 * Convert a string to snake case.
	 *
	 * @static
	 * @param	string	$value
	 * @param	string	$delimiter
	 * @return string
	 */
	 public static function snake($value, $delimiter = '_'){
		$root = new Illuminate\Support\Str();
		return $root->snake($value, $delimiter);
	 }

	/**
	 * Determine if a string starts with a given needle.
	 *
	 * @static
	 * @param	string	$haystack
	 * @param	string|array	$needles
	 * @return bool
	 */
	 public static function startsWith($haystack, $needles){
		$root = new Illuminate\Support\Str();
		return $root->startsWith($haystack, $needles);
	 }

	/**
	 * Convert a value to studly caps case.
	 *
	 * @static
	 * @param	string	$value
	 * @return string
	 */
	 public static function studly($value){
		$root = new Illuminate\Support\Str();
		return $root->studly($value);
	 }

	/**
	 * Register a custom string macro.
	 *
	 * @static
	 * @param	string	$name
	 * @param	callable	$macro
	 * @return void
	 */
	 public static function macro($name, $macro){
		$root = new Illuminate\Support\Str();
		 $root->macro($name, $macro);
	 }

	/**
	 * Dynamically handle calls to the string class.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __callStatic($method, $parameters){
		$root = new Illuminate\Support\Str();
		return $root->__callStatic($method, $parameters);
	 }

 }
}

namespace  {
 class URL extends Illuminate\Support\Facades\URL{
	/**
	 * @var \Illuminate\Routing\UrlGenerator $root
	 */
	 static private $root;

	/**
	 * Create a new URL Generator instance.
	 *
	 * @static
	 * @param	\Symfony\Component\Routing\RouteCollection	$routes
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @return void
	 */
	 public static function __construct($routes, $request){
		$root = new Illuminate\Routing\UrlGenerator();
		 $root->__construct($routes, $request);
	 }

	/**
	 * Get the full URL for the current request.
	 *
	 * @static
	 * @return string
	 */
	 public static function full(){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->full();
	 }

	/**
	 * Get the current URL for the request.
	 *
	 * @static
	 * @return string
	 */
	 public static function current(){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->current();
	 }

	/**
	 * Get the URL for the previous request.
	 *
	 * @static
	 * @return string
	 */
	 public static function previous(){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->previous();
	 }

	/**
	 * Generate a absolute URL to the given path.
	 *
	 * @static
	 * @param	string	$path
	 * @param	mixed	$parameters
	 * @param	bool	$secure
	 * @return string
	 */
	 public static function to($path, $parameters = array(), $secure = null){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->to($path, $parameters, $secure);
	 }

	/**
	 * Generate a secure, absolute URL to the given path.
	 *
	 * @static
	 * @param	string	$path
	 * @param	array	$parameters
	 * @return string
	 */
	 public static function secure($path, $parameters = array()){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->secure($path, $parameters);
	 }

	/**
	 * Generate a URL to an application asset.
	 *
	 * @static
	 * @param	string	$path
	 * @param	bool	$secure
	 * @return string
	 */
	 public static function asset($path, $secure = null){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->asset($path, $secure);
	 }

	/**
	 * Generate a URL to a secure asset.
	 *
	 * @static
	 * @param	string	$path
	 * @return string
	 */
	 public static function secureAsset($path){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->secureAsset($path);
	 }

	/**
	 * Get the URL to a named route.
	 *
	 * @static
	 * @param	string	$name
	 * @param	mixed	$parameters
	 * @param	bool	$absolute
	 * @return string
	 */
	 public static function route($name, $parameters = array(), $absolute = true){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->route($name, $parameters, $absolute);
	 }

	/**
	 * Get the URL to a controller action.
	 *
	 * @static
	 * @param	string	$action
	 * @param	mixed	$parameters
	 * @param	bool	$absolute
	 * @return string
	 */
	 public static function action($action, $parameters = array(), $absolute = true){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->action($action, $parameters, $absolute);
	 }

	/**
	 * Determine if the given path is a valid URL.
	 *
	 * @static
	 * @param	string	$path
	 * @return bool
	 */
	 public static function isValidUrl($path){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->isValidUrl($path);
	 }

	/**
	 * Get the request instance.
	 *
	 * @static
	 * @return \Symfony\Component\HttpFoundation\Request
	 */
	 public static function getRequest(){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->getRequest();
	 }

	/**
	 * Set the current request instance.
	 *
	 * @static
	 * @param	\Symfony\Component\HttpFoundation\Request	$request
	 * @return void
	 */
	 public static function setRequest($request){
		$root = new Illuminate\Routing\UrlGenerator();
		 $root->setRequest($request);
	 }

	/**
	 * Get the Symfony URL generator instance.
	 *
	 * @static
	 * @return \Symfony\Component\Routing\Generator\UrlGenerator
	 */
	 public static function getGenerator(){
		$root = new Illuminate\Routing\UrlGenerator();
		return $root->getGenerator();
	 }

	/**
	 * Get the Symfony URL generator instance.
	 *
	 * @static
	 * @param	\Symfony\Component\Routing\Generator\UrlGenerator	$generator
	 * @return void
	 */
	 public static function setGenerator($generator){
		$root = new Illuminate\Routing\UrlGenerator();
		 $root->setGenerator($generator);
	 }

 }
}

namespace  {
 class Validator extends Illuminate\Support\Facades\Validator{
	/**
	 * @var \Illuminate\Validation\Factory $root
	 */
	 static private $root;

	/**
	 * Create a new Validator factory instance.
	 *
	 * @static
	 * @param	\Symfony\Component\Translation\TranslatorInterface	$translator
	 * @param	\Illuminate\Container\Container	$container
	 * @return void
	 */
	 public static function __construct($translator, $container = null){
		$root = new Illuminate\Validation\Factory();
		 $root->__construct($translator, $container);
	 }

	/**
	 * Create a new Validator instance.
	 *
	 * @static
	 * @param	array	$data
	 * @param	array	$rules
	 * @param	array	$messages
	 * @return \Illuminate\Validation\Validator
	 */
	 public static function make($data, $rules, $messages = array()){
		$root = new Illuminate\Validation\Factory();
		return $root->make($data, $rules, $messages);
	 }

	/**
	 * Register a custom validator extension.
	 *
	 * @static
	 * @param	string	$rule
	 * @param	Closure|string	$extension
	 * @return void
	 */
	 public static function extend($rule, $extension){
		$root = new Illuminate\Validation\Factory();
		 $root->extend($rule, $extension);
	 }

	/**
	 * Register a custom implicit validator extension.
	 *
	 * @static
	 * @param	string	$rule
	 * @param	Closure $extension
	 * @return void
	 */
	 public static function extendImplicit($rule, $extension){
		$root = new Illuminate\Validation\Factory();
		 $root->extendImplicit($rule, $extension);
	 }

	/**
	 * Set the Validator instance resolver.
	 *
	 * @static
	 * @param	Closure	$resolver
	 * @return void
	 */
	 public static function resolver($resolver){
		$root = new Illuminate\Validation\Factory();
		 $root->resolver($resolver);
	 }

	/**
	 * Get the Translator implementation.
	 *
	 * @static
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 */
	 public static function getTranslator(){
		$root = new Illuminate\Validation\Factory();
		return $root->getTranslator();
	 }

	/**
	 * Get the Presence Verifier implementation.
	 *
	 * @static
	 * @return \Illuminate\Validation\PresenceVerifierInterface
	 */
	 public static function getPresenceVerifier(){
		$root = new Illuminate\Validation\Factory();
		return $root->getPresenceVerifier();
	 }

	/**
	 * Set the Presence Verifier implementation.
	 *
	 * @static
	 * @param	\Illuminate\Validation\PresenceVerifierInterface	$presenceVerifier
	 * @return void
	 */
	 public static function setPresenceVerifier($presenceVerifier){
		$root = new Illuminate\Validation\Factory();
		 $root->setPresenceVerifier($presenceVerifier);
	 }

 }
}

namespace  {
 class View extends Illuminate\Support\Facades\View{
	/**
	 * @var \Illuminate\View\Environment $root
	 */
	 static private $root;

	/**
	 * Create a new view environment instance.
	 *
	 * @static
	 * @param	\Illuminate\View\Engines\EngineResolver	$engines
	 * @param	\Illuminate\View\ViewFinderInterface	$finder
	 * @param	\Illuminate\Events\Dispatcher	$events
	 * @return void
	 */
	 public static function __construct($engines, $finder, $events){
		$root = new Illuminate\View\Environment();
		 $root->__construct($engines, $finder, $events);
	 }

	/**
	 * Get a evaluated view contents for the given view.
	 *
	 * @static
	 * @param	string	$view
	 * @param	array	$data
	 * @param	array	$mergeData
	 * @return \Illuminate\View\View
	 */
	 public static function make($view, $data = array(), $mergeData = array()){
		$root = new Illuminate\View\Environment();
		return $root->make($view, $data, $mergeData);
	 }

	/**
	 * Get a evaluated view contents for a named view.
	 *
	 * @static
	 * @param	string $view
	 * @param	mixed $data
	 * @return \Illuminate\View\View
	 */
	 public static function of($view, $data = array()){
		$root = new Illuminate\View\Environment();
		return $root->of($view, $data);
	 }

	/**
	 * Register a named view.
	 *
	 * @static
	 * @param	string $view
	 * @param	string $name
	 * @return void
	 */
	 public static function name($view, $name){
		$root = new Illuminate\View\Environment();
		 $root->name($view, $name);
	 }

	/**
	 * Determine if a given view exists.
	 *
	 * @static
	 * @param	string	$view
	 * @return bool
	 */
	 public static function exists($view){
		$root = new Illuminate\View\Environment();
		return $root->exists($view);
	 }

	/**
	 * Get the rendered contents of a partial from a loop.
	 *
	 * @static
	 * @param	string	$view
	 * @param	array	$data
	 * @param	string	$iterator
	 * @param	string	$empty
	 * @return string
	 */
	 public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
		$root = new Illuminate\View\Environment();
		return $root->renderEach($view, $data, $iterator, $empty);
	 }

	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @static
	 * @param	string	$key
	 * @param	mixed	$value
	 * @return void
	 */
	 public static function share($key, $value = null){
		$root = new Illuminate\View\Environment();
		 $root->share($key, $value);
	 }

	/**
	 * Register a view composer event.
	 *
	 * @static
	 * @param	array|string	$views
	 * @param	Closure|string	$callback
	 * @return Closure
	 */
	 public static function composer($views, $callback){
		$root = new Illuminate\View\Environment();
		return $root->composer($views, $callback);
	 }

	/**
	 * Call the composer for a given view.
	 *
	 * @static
	 * @param	\Illuminate\View\View	$view
	 * @return void
	 */
	 public static function callComposer($view){
		$root = new Illuminate\View\Environment();
		 $root->callComposer($view);
	 }

	/**
	 * Start injecting content into a section.
	 *
	 * @static
	 * @param	string	$section
	 * @param	string	$content
	 * @return void
	 */
	 public static function startSection($section, $content = ''){
		$root = new Illuminate\View\Environment();
		 $root->startSection($section, $content);
	 }

	/**
	 * Inject inline content into a section.
	 *
	 * @static
	 * @param	string	$section
	 * @param	string	$content
	 * @return void
	 */
	 public static function inject($section, $content){
		$root = new Illuminate\View\Environment();
		 $root->inject($section, $content);
	 }

	/**
	 * Stop injecting content into a section and return its contents.
	 *
	 * @static
	 * @return string
	 */
	 public static function yieldSection(){
		$root = new Illuminate\View\Environment();
		return $root->yieldSection();
	 }

	/**
	 * Stop injecting content into a section.
	 *
	 * @static
	 * @param	bool	$overwrite
	 * @return string
	 */
	 public static function stopSection($overwrite = false){
		$root = new Illuminate\View\Environment();
		return $root->stopSection($overwrite);
	 }

	/**
	 * Get the string contents of a section.
	 *
	 * @static
	 * @param	string	$section
	 * @return string
	 */
	 public static function yieldContent($section){
		$root = new Illuminate\View\Environment();
		return $root->yieldContent($section);
	 }

	/**
	 * Flush all of the section contents.
	 *
	 * @static
	 * @return void
	 */
	 public static function flushSections(){
		$root = new Illuminate\View\Environment();
		 $root->flushSections();
	 }

	/**
	 * Increment the rendering counter.
	 *
	 * @static
	 * @return void
	 */
	 public static function incrementRender(){
		$root = new Illuminate\View\Environment();
		 $root->incrementRender();
	 }

	/**
	 * Decrement the rendering counter.
	 *
	 * @static
	 * @return void
	 */
	 public static function decrementRender(){
		$root = new Illuminate\View\Environment();
		 $root->decrementRender();
	 }

	/**
	 * Check if there are no active render operations.
	 *
	 * @static
	 * @return bool
	 */
	 public static function doneRendering(){
		$root = new Illuminate\View\Environment();
		return $root->doneRendering();
	 }

	/**
	 * Add a location to the array of view locations.
	 *
	 * @static
	 * @param	string	$location
	 * @return void
	 */
	 public static function addLocation($location){
		$root = new Illuminate\View\Environment();
		 $root->addLocation($location);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @static
	 * @param	string	$namespace
	 * @param	string|array	$hints
	 * @return void
	 */
	 public static function addNamespace($namespace, $hints){
		$root = new Illuminate\View\Environment();
		 $root->addNamespace($namespace, $hints);
	 }

	/**
	 * Register a valid view extension and its engine.
	 *
	 * @static
	 * @param	string	$extension
	 * @param	string	$engine
	 * @param	Closure	$resolver
	 * @return void
	 */
	 public static function addExtension($extension, $engine, $resolver = null){
		$root = new Illuminate\View\Environment();
		 $root->addExtension($extension, $engine, $resolver);
	 }

	/**
	 * Get the extension to engine bindings.
	 *
	 * @static
	 * @return array
	 */
	 public static function getExtensions(){
		$root = new Illuminate\View\Environment();
		return $root->getExtensions();
	 }

	/**
	 * Get the engine resolver instance.
	 *
	 * @static
	 * @return \Illuminate\View\Engines\EngineResolver
	 */
	 public static function getEngineResolver(){
		$root = new Illuminate\View\Environment();
		return $root->getEngineResolver();
	 }

	/**
	 * Get the view finder instance.
	 *
	 * @static
	 * @return \Illuminate\View\ViewFinderInterface
	 */
	 public static function getFinder(){
		$root = new Illuminate\View\Environment();
		return $root->getFinder();
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @static
	 * @return \Illuminate\Events\Dispatcher
	 */
	 public static function getDispatcher(){
		$root = new Illuminate\View\Environment();
		return $root->getDispatcher();
	 }

	/**
	 * Get the IoC container instance.
	 *
	 * @static
	 * @return \Illuminate\Container\Container
	 */
	 public static function getContainer(){
		$root = new Illuminate\View\Environment();
		return $root->getContainer();
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @static
	 * @param	\Illuminate\Container\Container	$container
	 * @return void
	 */
	 public static function setContainer($container){
		$root = new Illuminate\View\Environment();
		 $root->setContainer($container);
	 }

	/**
	 * Get all of the shared data for the environment.
	 *
	 * @static
	 * @return array
	 */
	 public static function getShared(){
		$root = new Illuminate\View\Environment();
		return $root->getShared();
	 }

	/**
	 * Get the entire array of sections.
	 *
	 * @static
	 * @return array
	 */
	 public static function getSections(){
		$root = new Illuminate\View\Environment();
		return $root->getSections();
	 }

	/**
	 * Get all of the registered named views in environment.
	 *
	 * @static
	 * @return array
	 */
	 public static function getNames(){
		$root = new Illuminate\View\Environment();
		return $root->getNames();
	 }

 }
}

namespace  {
 class Sentry extends Cartalyst\Sentry\Facades\Laravel\Sentry{
	/**
	 * @var \Cartalyst\Sentry\Sentry $root
	 */
	 static private $root;

	/**
	 * Create a new Sentry object.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Sessions\SessionInterface	$session
	 * @param	Cartalyst\Sentry\Cookies\CookieInterface	$cookie
	 * @param	Cartalyst\Sentry\Users\UserProviderInterface	$userProvider
	 * @param	Cartalyst\Sentry\Groups\GroupProviderInterface	$groupProvider
	 * @param	Cartalyst\Sentry\Throttling\ThrottleProviderInterface	$throttleProvider
	 * @param	string	$ipAddress
	 * @return void
	 */
	 public static function __construct($userProvider = null, $groupProvider = null, $throttleProvider = null, $session = null, $cookie = null, $ipAddress = null){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->__construct($userProvider, $groupProvider, $throttleProvider, $session, $cookie, $ipAddress);
	 }

	/**
	 * Registers a user by giving the required credentials
	 * and an optional flag for whether to activate the user.
	 *
	 * @static
	 * @param	array	$credentials
	 * @param	bool	$activate
	 * @return Cartalyst\Sentry\Users\UserInterface
	 */
	 public static function register($credentials, $activate = false){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->register($credentials, $activate);
	 }

	/**
	 * Attempts to authenticate the given user
	 * according to the passed credentials.
	 *
	 * @static
	 * @param	array	$credentials
	 * @param	bool	$remember
	 * @return Cartalyst\Sentry\Users\UserInterface
	 */
	 public static function authenticate($credentials, $remember = false){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->authenticate($credentials, $remember);
	 }

	/**
	 * Alias for authenticating with the remember flag checked.
	 *
	 * @static
	 * @param	array	$credentials
	 * @return Cartalyst\Sentry\Users\UserInterface
	 */
	 public static function authenticateAndRemember($credentials){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->authenticateAndRemember($credentials);
	 }

	/**
	 * Check to see if the user is logged in and activated.
	 *
	 * @static
	 * @return bool
	 */
	 public static function check(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->check();
	 }

	/**
	 * Logs in the given user and sets properties
	 * in the session.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Users\UserInterface	$user
	 * @param	bool	$remember
	 * @return void
	 */
	 public static function login($user, $remember = false){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->login($user, $remember);
	 }

	/**
	 * Alias for logging in and remembering.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Users\UserInterface	$user
	 * @return void
	 */
	 public static function loginAndRemember($user){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->loginAndRemember($user);
	 }

	/**
	 * Logs the current user out.
	 *
	 * @static
	 * @return void
	 */
	 public static function logout(){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->logout();
	 }

	/**
	 * Sets the user to be used by Sentry.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Users\UserInterface
	 * @return void
	 */
	 public static function setUser($user){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setUser($user);
	 }

	/**
	 * Returns the current user being used by Sentry, if any.
	 *
	 * @static
	 * @return Cartalyst\Sentry\Users\UserInterface
	 */
	 public static function getUser(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getUser();
	 }

	/**
	 * Sets the session driver for Sentry.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Sessions\SessionInterface	$session
	 * @return void
	 */
	 public static function setSession($session){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setSession($session);
	 }

	/**
	 * Gets the session driver for Sentry.
	 *
	 * @static
	 * @return Cartalyst\Sentry\Sessions\SessionInterface
	 */
	 public static function getSession(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getSession();
	 }

	/**
	 * Sets the cookie driver for Sentry.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Cookies\CookieInterface	$cookie
	 * @return void
	 */
	 public static function setCookie($cookie){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setCookie($cookie);
	 }

	/**
	 * Gets the cookie driver for Sentry.
	 *
	 * @static
	 * @return Cartalyst\Sentry\Cookies\CookieInterface
	 */
	 public static function getCookie(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getCookie();
	 }

	/**
	 * Sets the group provider for Sentry.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Groups\ProviderInterface
	 * @return void
	 */
	 public static function setGroupProvider($groupProvider){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setGroupProvider($groupProvider);
	 }

	/**
	 * Gets the group provider for Sentry.
	 *
	 * @static
	 * @return Cartalyst\Sentry\Groups\ProviderInterface
	 */
	 public static function getGroupProvider(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getGroupProvider();
	 }

	/**
	 * Sets the user provider for Sentry.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Users\ProviderInterface
	 * @return void
	 */
	 public static function setUserProvider($userProvider){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setUserProvider($userProvider);
	 }

	/**
	 * Gets the user provider for Sentry.
	 *
	 * @static
	 * @return Cartalyst\Sentry\Users\ProviderInterface
	 */
	 public static function getUserProvider(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getUserProvider();
	 }

	/**
	 * Sets the throttle provider for Sentry.
	 *
	 * @static
	 * @param	Cartalyst\Sentry\Throttling\ProviderInterface
	 * @return void
	 */
	 public static function setThrottleProvider($throttleProvider){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setThrottleProvider($throttleProvider);
	 }

	/**
	 * Gets the throttle provider for Sentry.
	 *
	 * @static
	 * @return Cartalyst\Sentry\Throttling\ProviderInterface
	 */
	 public static function getThrottleProvider(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getThrottleProvider();
	 }

	/**
	 * Sets the IP address Sentry is bound to.
	 *
	 * @static
	 * @param	string	$ipAddress
	 * @return void
	 */
	 public static function setIpAddress($ipAddress){
		$root = new Cartalyst\Sentry\Sentry();
		 $root->setIpAddress($ipAddress);
	 }

	/**
	 * Gets the IP address Sentry is bound to.
	 *
	 * @static
	 * @return string
	 */
	 public static function getIpAddress(){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->getIpAddress();
	 }

	/**
	 * Handle dynamic method calls into the method.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Cartalyst\Sentry\Sentry();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Profiler extends Profiler\Facades\Profiler{
	/**
	 * @var \Profiler\Profiler $root
	 */
	 static private $root;

	/**
	 * Register the logger and application start time.
	 *
	 * @static
	 * @param	Psr\Logger\LoggerInterface $logger
	 * @return void
	 */
	 public static function __construct($logger, $startTime = null, $on = true){
		$root = new Profiler\Profiler();
		 $root->__construct($logger, $startTime, $on);
	 }

	/**
	 * Set the logger.
	 *
	 * @static
	 * @param	Psr\Logger\LoggerInterface $logger
	 * @return void
	 */
	 public static function setLogger($logger){
		$root = new Profiler\Profiler();
		 $root->setLogger($logger);
	 }

	/**
	 * Enable the profiler.
	 *
	 * @static
	 * @param	bool	$on
	 * @return void
	 */
	 public static function enable($on = true){
		$root = new Profiler\Profiler();
		 $root->enable($on);
	 }

	/**
	 * Disable the profiler.
	 *
	 * @static
	 * @return void
	 */
	 public static function disable(){
		$root = new Profiler\Profiler();
		 $root->disable();
	 }

	/**
	 * Check if profiler is enabled
	 *
	 * @static
	 * @return boolean
	 */
	 public static function isEnabled(){
		$root = new Profiler\Profiler();
		return $root->isEnabled();
	 }

	/**
	 * Start a timer.
	 *
	 * @static
	 * @return Profiler\Profiler
	 */
	 public static function startTimer($timer, $startTime = null){
		$root = new Profiler\Profiler();
		return $root->startTimer($timer, $startTime);
	 }

	/**
	 * End a timer.
	 *
	 * @static
	 * @return Profiler\Profiler
	 */
	 public static function endTimer($timer, $endTime = null){
		$root = new Profiler\Profiler();
		return $root->endTimer($timer, $endTime);
	 }

	/**
	 * Get a timer.
	 *
	 * @static
	 * @param	string	$timer
	 * @return double
	 */
	 public static function getTimer($timer){
		$root = new Profiler\Profiler();
		return $root->getTimer($timer);
	 }

	/**
	 * Get all of the executed timers.
	 *
	 * @static
	 * @return array
	 */
	 public static function getTimers(){
		$root = new Profiler\Profiler();
		return $root->getTimers();
	 }

	/**
	 * Get the current application execution time in milliseconds.
	 *
	 * @static
	 * @return int
	 */
	 public static function getLoadTime(){
		$root = new Profiler\Profiler();
		return $root->getLoadTime();
	 }

	/**
	 * Get the current memory usage in a readable format.
	 *
	 * @static
	 * @return string
	 */
	 public static function getMemoryUsage(){
		$root = new Profiler\Profiler();
		return $root->getMemoryUsage();
	 }

	/**
	 * Get the peak memory usage in a readable format.
	 *
	 * @static
	 * @return string
	 */
	 public static function getMemoryPeak(){
		$root = new Profiler\Profiler();
		return $root->getMemoryPeak();
	 }

	/**
	 * Get all of the files that have been included.
	 *
	 * @static
	 * @return array
	 */
	 public static function getIncludedFiles(){
		$root = new Profiler\Profiler();
		return $root->getIncludedFiles();
	 }

	/**
	 * Render the profiler.
	 *
	 * @static
	 * @return string
	 */
	 public static function render(){
		$root = new Profiler\Profiler();
		return $root->render();
	 }

	/**
	 * Render the profiler.
	 *
	 * @static
	 * @return string
	 */
	 public static function __toString(){
		$root = new Profiler\Profiler();
		return $root->__toString();
	 }

 }
}

namespace  {
 class Diablo3Util extends Diablo3\Facades\Diablo3Util{
	/**
	 * @var \Diablo3\Diablo3Util $root
	 */
	 static private $root;

	/**
	 * Saves all the skill images for a given character ID
	 *
	 * @static
	 * @param	int $charId
	 * @return string
	 */
	 public static function getSkillImages($charId){
		$root = new Diablo3\Diablo3Util();
		return $root->getSkillImages($charId);
	 }

	/**
	 * Saves all the item images for a given character ID
	 *
	 * @static
	 * @param	int $charId
	 * @return string
	 */
	 public static function getItemImages($charId){
		$root = new Diablo3\Diablo3Util();
		return $root->getItemImages($charId);
	 }

	/**
	 * Gets all the active skills form a heroId
	 *
	 * @static
	 * @param	int $heroId
	 * @return array
	 */
	 public static function getSkillSet($heroId){
		$root = new Diablo3\Diablo3Util();
		return $root->getSkillSet($heroId);
	 }

	/**
	 * Syncs the character items with Battle.Net (saves items)
	 *
	 * @static
	 * @param	[type] $heroId [description]
	 * @param	[type] $charId [description]
	 * @return [type]
	 */
	 public static function saveCharacterItems($heroId, $charId){
		$root = new Diablo3\Diablo3Util();
		return $root->saveCharacterItems($heroId, $charId);
	 }

	/**
	 * Creates a itemSet for given Items
	 * Adds the item type and uniquenes of the item with the item info
	 *
	 * @static
	 * @param	array $items
	 * @return array
	 */
	 public static function getItemSet($items){
		$root = new Diablo3\Diablo3Util();
		return $root->getItemSet($items);
	 }

 }
}

namespace  {
 class QueryBuilder{
	/**
	 * @var \Illuminate\Database\Query\Builder $root
	 */
	 static private $root;

	/**
	 * Create a new query builder instance.
	 *
	 * @static
	 * @param	\Illuminate\Database\ConnectionInterface	$connection
	 * @param	\Illuminate\Database\Query\Grammars\Grammar	$grammar
	 * @param	\Illuminate\Database\Query\Processors\Processor	$processor
	 * @return void
	 */
	 public static function __construct($connection, $grammar, $processor){
		$root = new Illuminate\Database\Query\Builder();
		 $root->__construct($connection, $grammar, $processor);
	 }

	/**
	 * Set the columns to be selected.
	 *
	 * @static
	 * @param	array	$columns
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function select($columns = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->select($columns);
	 }

	/**
	 * Add a new select column to the query.
	 *
	 * @static
	 * @param	mixed	$column
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function addSelect($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->addSelect($column);
	 }

	/**
	 * Force the query to only return distinct results.
	 *
	 * @static
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function distinct(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->distinct();
	 }

	/**
	 * Set the table which the query is targeting.
	 *
	 * @static
	 * @param	string	$table
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function from($table){
		$root = new Illuminate\Database\Query\Builder();
		return $root->from($table);
	 }

	/**
	 * Add a join clause to the query.
	 *
	 * @static
	 * @param	string	$table
	 * @param	string	$first
	 * @param	string	$operator
	 * @param	string	$second
	 * @param	string	$type
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function join($table, $first, $operator = null, $second = null, $type = 'inner'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->join($table, $first, $operator, $second, $type);
	 }

	/**
	 * Add a left join to the query.
	 *
	 * @static
	 * @param	string	$table
	 * @param	string	$first
	 * @param	string	$operator
	 * @param	string	$second
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function leftJoin($table, $first, $operator = null, $second = null){
		$root = new Illuminate\Database\Query\Builder();
		return $root->leftJoin($table, $first, $operator, $second);
	 }

	/**
	 * Add a basic where clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$operator
	 * @param	mixed	$value
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function where($column, $operator = null, $value = null, $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->where($column, $operator, $value, $boolean);
	 }

	/**
	 * Add an "or where" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$operator
	 * @param	mixed	$value
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhere($column, $operator = null, $value = null){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhere($column, $operator, $value);
	 }

	/**
	 * Add a raw where clause to the query.
	 *
	 * @static
	 * @param	string	$sql
	 * @param	array	$bindings
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or where clause to the query.
	 *
	 * @static
	 * @param	string	$sql
	 * @param	array	$bindings
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereRaw($sql, $bindings = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereRaw($sql, $bindings);
	 }

	/**
	 * Add a where between statement to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	array	$values
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereBetween($column, $values, $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereBetween($column, $values, $boolean);
	 }

	/**
	 * Add an or where between statement to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	array	$values
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereBetween($column, $values){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereBetween($column, $values);
	 }

	/**
	 * Add a nested where statement to the query.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereNested($callback, $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereNested($callback, $boolean);
	 }

	/**
	 * Add an exists clause to the query.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @param	string	$boolean
	 * @param	bool	$not
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereExists($callback, $boolean = 'and', $not = false){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereExists($callback, $boolean, $not);
	 }

	/**
	 * Add an or exists clause to the query.
	 *
	 * @static
	 * @param	Closure	$callback
	 * @param	bool	$not
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereExists($callback, $not = false){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereExists($callback, $not);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @static
	 * @param	Closure	$calback
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereNotExists($callback, $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereNotExists($callback, $boolean);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @static
	 * @param	Closure	$calback
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereNotExists($callback){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereNotExists($callback);
	 }

	/**
	 * Add a "where in" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	mixed	$values
	 * @param	string	$boolean
	 * @param	bool	$not
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereIn($column, $values, $boolean = 'and', $not = false){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereIn($column, $values, $boolean, $not);
	 }

	/**
	 * Add an "or where in" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	mixed	$values
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereIn($column, $values){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereIn($column, $values);
	 }

	/**
	 * Add a "where not in" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	mixed	$values
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereNotIn($column, $values, $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereNotIn($column, $values, $boolean);
	 }

	/**
	 * Add an "or where not in" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	mixed	$values
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereNotIn($column, $values){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereNotIn($column, $values);
	 }

	/**
	 * Add a "where null" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$boolean
	 * @param	bool	$not
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereNull($column, $boolean = 'and', $not = false){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereNull($column, $boolean, $not);
	 }

	/**
	 * Add an "or where null" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereNull($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereNull($column);
	 }

	/**
	 * Add a "where not null" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function whereNotNull($column, $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->whereNotNull($column, $boolean);
	 }

	/**
	 * Add an "or where not null" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orWhereNotNull($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orWhereNotNull($column);
	 }

	/**
	 * Handles dynamic "where" clauses to the query.
	 *
	 * @static
	 * @param	string	$method
	 * @param	string	$parameters
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function dynamicWhere($method, $parameters){
		$root = new Illuminate\Database\Query\Builder();
		return $root->dynamicWhere($method, $parameters);
	 }

	/**
	 * Add a "group by" clause to the query.
	 *
	 * @static
	 * @param	dynamic	$columns
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function groupBy(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->groupBy();
	 }

	/**
	 * Add a "having" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$operator
	 * @param	string	$value
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function having($column, $operator = null, $value = null){
		$root = new Illuminate\Database\Query\Builder();
		return $root->having($column, $operator, $value);
	 }

	/**
	 * Add a raw having clause to the query.
	 *
	 * @static
	 * @param	string	$sql
	 * @param	array	$bindings
	 * @param	string	$boolean
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->havingRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or having clause to the query.
	 *
	 * @static
	 * @param	string	$sql
	 * @param	array	$bindings
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orHavingRaw($sql, $bindings = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orHavingRaw($sql, $bindings);
	 }

	/**
	 * Add an "order by" clause to the query.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$direction
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function orderBy($column, $direction = 'asc'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->orderBy($column, $direction);
	 }

	/**
	 * Set the "offset" value of the query.
	 *
	 * @static
	 * @param	int	$value
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function skip($value){
		$root = new Illuminate\Database\Query\Builder();
		return $root->skip($value);
	 }

	/**
	 * Set the "limit" value of the query.
	 *
	 * @static
	 * @param	int	$value
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function take($value){
		$root = new Illuminate\Database\Query\Builder();
		return $root->take($value);
	 }

	/**
	 * Set the limit and offset for a given page.
	 *
	 * @static
	 * @param	int	$page
	 * @param	int	$perPage
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function forPage($page, $perPage = 15){
		$root = new Illuminate\Database\Query\Builder();
		return $root->forPage($page, $perPage);
	 }

	/**
	 * Add a union statement to the query.
	 *
	 * @static
	 * @param	\Illuminate\Database\Query\Builder	$query
	 * @param	bool $all
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function union($query, $all = false){
		$root = new Illuminate\Database\Query\Builder();
		return $root->union($query, $all);
	 }

	/**
	 * Add a union all statement to the query.
	 *
	 * @static
	 * @param	\Illuminate\Database\Query\Builder	$query
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function unionAll($query){
		$root = new Illuminate\Database\Query\Builder();
		return $root->unionAll($query);
	 }

	/**
	 * Get the SQL representation of the query.
	 *
	 * @static
	 * @return string
	 */
	 public static function toSql(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->toSql();
	 }

	/**
	 * Execute a query for a single record by ID.
	 *
	 * @static
	 * @param	int	$id
	 * @param	array	$columns
	 * @return mixed
	 */
	 public static function find($id, $columns = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->find($id, $columns);
	 }

	/**
	 * Pluck a single column from the database.
	 *
	 * @static
	 * @param	string	$column
	 * @return mixed
	 */
	 public static function pluck($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->pluck($column);
	 }

	/**
	 * Execute the query and get the first result.
	 *
	 * @static
	 * @param	array	$columns
	 * @return mixed
	 */
	 public static function first($columns = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->first($columns);
	 }

	/**
	 * Execute the query as a "select" statement.
	 *
	 * @static
	 * @param	array	$columns
	 * @return array
	 */
	 public static function get($columns = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->get($columns);
	 }

	/**
	 * Get an array with the values of a given column.
	 *
	 * @static
	 * @param	string	$column
	 * @param	string	$key
	 * @return array
	 */
	 public static function lists($column, $key = null){
		$root = new Illuminate\Database\Query\Builder();
		return $root->lists($column, $key);
	 }

	/**
	 * Get a paginator for the "select" statement.
	 *
	 * @static
	 * @param	int	$perPage
	 * @param	array	$columns
	 * @return \Illuminate\Pagination\Paginator
	 */
	 public static function paginate($perPage = 15, $columns = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->paginate($perPage, $columns);
	 }

	/**
	 * Build a paginator instance from a raw result array.
	 *
	 * @static
	 * @param	\Illuminate\Pagination\Environment	$paginator
	 * @param	array	$results
	 * @param	int	$perPage
	 * @return \Illuminate\Pagination\Paginator
	 */
	 public static function buildRawPaginator($paginator, $results, $perPage){
		$root = new Illuminate\Database\Query\Builder();
		return $root->buildRawPaginator($paginator, $results, $perPage);
	 }

	/**
	 * Get the count of the total records for pagination.
	 *
	 * @static
	 * @return int
	 */
	 public static function getPaginationCount(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->getPaginationCount();
	 }

	/**
	 * Determine if any rows exist for the current query.
	 *
	 * @static
	 * @return bool
	 */
	 public static function exists(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->exists();
	 }

	/**
	 * Retrieve the "count" result of the query.
	 *
	 * @static
	 * @param	string	$column
	 * @return int
	 */
	 public static function count($column = '*'){
		$root = new Illuminate\Database\Query\Builder();
		return $root->count($column);
	 }

	/**
	 * Retrieve the minimum value of a given column.
	 *
	 * @static
	 * @param	string	$column
	 * @return mixed
	 */
	 public static function min($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->min($column);
	 }

	/**
	 * Retrieve the maximum value of a given column.
	 *
	 * @static
	 * @param	string	$column
	 * @return mixed
	 */
	 public static function max($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->max($column);
	 }

	/**
	 * Retrieve the sum of the values of a given column.
	 *
	 * @static
	 * @param	string	$column
	 * @return mixed
	 */
	 public static function sum($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->sum($column);
	 }

	/**
	 * Retrieve the average of the values of a given column.
	 *
	 * @static
	 * @param	string	$column
	 * @return mixed
	 */
	 public static function avg($column){
		$root = new Illuminate\Database\Query\Builder();
		return $root->avg($column);
	 }

	/**
	 * Execute an aggregate function on the database.
	 *
	 * @static
	 * @param	string	$function
	 * @param	array	$columns
	 * @return mixed
	 */
	 public static function aggregate($function, $columns = array()){
		$root = new Illuminate\Database\Query\Builder();
		return $root->aggregate($function, $columns);
	 }

	/**
	 * Insert a new record into the database.
	 *
	 * @static
	 * @param	array	$values
	 * @return bool
	 */
	 public static function insert($values){
		$root = new Illuminate\Database\Query\Builder();
		return $root->insert($values);
	 }

	/**
	 * Insert a new record and get the value of the primary key.
	 *
	 * @static
	 * @param	array	$values
	 * @param	string	$sequence
	 * @return int
	 */
	 public static function insertGetId($values, $sequence = null){
		$root = new Illuminate\Database\Query\Builder();
		return $root->insertGetId($values, $sequence);
	 }

	/**
	 * Update a record in the database.
	 *
	 * @static
	 * @param	array	$values
	 * @return int
	 */
	 public static function update($values){
		$root = new Illuminate\Database\Query\Builder();
		return $root->update($values);
	 }

	/**
	 * Increment a column's value by a given amount.
	 *
	 * @static
	 * @param	string	$column
	 * @param	int	$amount
	 * @return int
	 */
	 public static function increment($column, $amount = 1){
		$root = new Illuminate\Database\Query\Builder();
		return $root->increment($column, $amount);
	 }

	/**
	 * Decrement a column's value by a given amount.
	 *
	 * @static
	 * @param	string	$column
	 * @param	int	$amount
	 * @return int
	 */
	 public static function decrement($column, $amount = 1){
		$root = new Illuminate\Database\Query\Builder();
		return $root->decrement($column, $amount);
	 }

	/**
	 * Delete a record from the database.
	 *
	 * @static
	 * @param	mixed	$id
	 * @return int
	 */
	 public static function delete($id = null){
		$root = new Illuminate\Database\Query\Builder();
		return $root->delete($id);
	 }

	/**
	 * Run a truncate statement on the table.
	 *
	 * @static
	 * @return void
	 */
	 public static function truncate(){
		$root = new Illuminate\Database\Query\Builder();
		 $root->truncate();
	 }

	/**
	 * Get a new instance of the query builder.
	 *
	 * @static
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function newQuery(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->newQuery();
	 }

	/**
	 * Merge an array of where clauses and bindings.
	 *
	 * @static
	 * @param	array	$wheres
	 * @param	array	$bindings
	 * @return void
	 */
	 public static function mergeWheres($wheres, $bindings){
		$root = new Illuminate\Database\Query\Builder();
		 $root->mergeWheres($wheres, $bindings);
	 }

	/**
	 * Get a copy of the where clauses and bindings in an array.
	 *
	 * @static
	 * @return array
	 */
	 public static function getAndResetWheres(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->getAndResetWheres();
	 }

	/**
	 * Create a raw database expression.
	 *
	 * @static
	 * @param	mixed	$value
	 * @return \Illuminate\Database\Query\Expression
	 */
	 public static function raw($value){
		$root = new Illuminate\Database\Query\Builder();
		return $root->raw($value);
	 }

	/**
	 * Get the current query value bindings.
	 *
	 * @static
	 * @return array
	 */
	 public static function getBindings(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->getBindings();
	 }

	/**
	 * Set the bindings on the query builder.
	 *
	 * @static
	 * @param	array	$bindings
	 * @return void
	 */
	 public static function setBindings($bindings){
		$root = new Illuminate\Database\Query\Builder();
		 $root->setBindings($bindings);
	 }

	/**
	 * Merge an array of bindings into our bindings.
	 *
	 * @static
	 * @param	\Illuminate\Database\Query\Builder	$query
	 * @return \Illuminate\Database\Query\Builder
	 */
	 public static function mergeBindings($query){
		$root = new Illuminate\Database\Query\Builder();
		return $root->mergeBindings($query);
	 }

	/**
	 * Get the database connection instance.
	 *
	 * @static
	 * @return \Illuminate\Database\ConnectionInterface
	 */
	 public static function getConnection(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->getConnection();
	 }

	/**
	 * Get the database query processor instance.
	 *
	 * @static
	 * @return \Illuminate\Database\Query\Processors\Processor
	 */
	 public static function getProcessor(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->getProcessor();
	 }

	/**
	 * Get the query grammar instance.
	 *
	 * @static
	 * @return \Illuminate\Database\Grammar
	 */
	 public static function getGrammar(){
		$root = new Illuminate\Database\Query\Builder();
		return $root->getGrammar();
	 }

	/**
	 * Handle dynamic method calls into the method.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Database\Query\Builder();
		return $root->__call($method, $parameters);
	 }

 }
}

namespace  {
 class Manager{
	/**
	 * @var \Illuminate\Support\Manager $root
	 */
	 static private $root;

	/**
	 * Create a new manager instance.
	 *
	 * @static
	 * @param	\Illuminate\Foundation\Application	$app
	 * @return void
	 */
	 public static function __construct($app){
		$root = new Illuminate\Support\Manager();
		 $root->__construct($app);
	 }

	/**
	 * Get a driver instance.
	 *
	 * @static
	 * @param	string	$driver
	 * @return mixed
	 */
	 public static function driver($driver = null){
		$root = new Illuminate\Support\Manager();
		return $root->driver($driver);
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @static
	 * @param	string	$driver
	 * @param	Closure	$callback
	 * @return void
	 */
	 public static function extend($driver, $callback){
		$root = new Illuminate\Support\Manager();
		 $root->extend($driver, $callback);
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @static
	 * @return array
	 */
	 public static function getDrivers(){
		$root = new Illuminate\Support\Manager();
		return $root->getDrivers();
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @static
	 * @param	string	$method
	 * @param	array	$parameters
	 * @return mixed
	 */
	 public static function __call($method, $parameters){
		$root = new Illuminate\Support\Manager();
		return $root->__call($method, $parameters);
	 }

 }
}


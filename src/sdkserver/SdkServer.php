<?php

namespace VirusSR\sdkserver;

use React\Http\HttpServer;
use React\Http\Message\Response;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;
use Exception;
use VirusSR\common\Logger;
use Laminas\Diactoros\Response\HtmlResponse;
use Throwable;

// Proto
use Gateserver;
use GlobalDispatchData;
use ServerData;

class SdkServer {

    private static array $routes = [];
    private static Config $config;

    public static function init(): void
    {
        try {
            self::$config = Config::init_config();
        } catch (Exception $e) {
            echo "Failed to initialize configuration: " . $e->getMessage();
            exit(1);
        }        
        self::registerRoutes();

        $httpServer = new HttpServer(
            function (ServerRequestInterface $request) {
                $response = new Response(
                    200,
                    ["Content-Type" => "text/html"],
                    json_encode(['code' => 0, 'message' => 'OK'])
                );
                try {
                    $url = $request->getUri()->getPath();
                    if($url === '/' || $url === '/favicon.ico') {
                        $response = new Response(
                            200,
                            ['Content-Type'=> 'image/x-icon']
                        );
                    } else {
                        $route = self::$routes[$url] ?? null;
                        $response = $route !== null ? ($route)($request) : $response;                        
                    }
                } catch (Throwable $throwable) {
                    Logger::log_dispatch($throwable->getMessage());
                }

                return $response;
            }
        );

        $http_port = self::$config->http_port;
        Logger::log_dispatch("Dispatch Server running at 0.0.0.0:$http_port\n");
        $httpServer->listen(new SocketServer("0.0.0.0:$http_port"));
    }

    public static function registerRoutes(): void
    {
        self::$routes['/query_dispatch'] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received /query_dispatch request.");
            $queryParams = $request->getQueryParams();
            Logger::log_dispatch("Query params: " . json_encode($queryParams));            
            
            // Create the response object
            $rsp = new GlobalDispatchData();
            $rsp->setRetcode(0);
        
            // Iterate over game servers from the config
            $serverList = [];
            foreach (self::$config->game_servers as $serverConfig) {
                $server = new ServerData();
                $server->setName($serverConfig->name);
                $server->setTitle($serverConfig->title);
                $server->setEnvType($serverConfig->env_type);
                $server->setDispatchUrl($serverConfig->dispatch_url);
                $serverList[] = $server;
            }
            $rsp->setServerList($serverList);
            
            // Serialize and base64 encode the response
            $serializedResponse = $rsp->serializeToString();
            $encodedResponse = base64_encode($serializedResponse);
        
            Logger::log_dispatch("Response prepared: " . $encodedResponse);
        
            // Return the response, only base64 encoded once
            return new Response(
                200,
                ["Content-Type" => "application/json"],
                $encodedResponse
            );
        };

        // query_gateway
        foreach (self::$config->game_servers as $regionName => $serverConfig) {
            self::$routes["/query_gateway/{$regionName}"] = function (ServerRequestInterface $request) use ($regionName, $serverConfig) {
                Logger::log_dispatch('Received /query_gateway request.');
                $queryParams = $request->getQueryParams();
                Logger::log_dispatch("Query params: " . json_encode($queryParams));
                
                $version = $queryParams['version'] ?? null;
                Logger::log_dispatch("Version: $version");
                Logger::log_dispatch("Region: $regionName");
                
                if (!$version) {
                    return new Response(400, ["Content-Type" => "application/json"], json_encode(['error' => 'Missing version']));
                }
                
                // Check for the version configuration
                $versionConfig = self::$config->versions[$version] ?? null;
                Logger::log_dispatch("Version config: " . json_encode($versionConfig));
                
                if ($serverConfig) {
                    if ($versionConfig) {
                        // Prepare the Gateserver response
                        $rsp = new Gateserver();
                        $rsp->setIp($serverConfig->gateserver_ip);
                        $rsp->setPort($serverConfig->gateserver_port);
                        $rsp->setAssetBundleUrl($versionConfig->asset_bundle_url);
                        $rsp->setExResourceUrl($versionConfig->ex_resource_url);
                        $rsp->setLuaUrl($versionConfig->lua_url);
                        $rsp->setLuaVersion($versionConfig->lua_version);
                        $rsp->setIfixUrl($versionConfig->ifixUrl);
                        $rsp->setUseTcp(true);
                        $rsp->setUnk1(true);
                        $rsp->setUnk2(true);
                        $rsp->setUnk3(true);
                        $rsp->setUnk4(true);
                        $rsp->setUnk5(true);
                        $rsp->setUnk6(true);
                        $rsp->setUnk9(true);
                        $rsp->setUnk10(true);
                        $rsp->setUnk11(true);
                        $rsp->setUnk12(true);
                        $rsp->setUnk13(true);
                        $rsp->setUnk14(true);
                        $rsp->setUnk15(true);
                    } else {
                        $rsp = new Gateserver();
                        $rsp->setRetcode(9);
                        $rsp->setMsg("Forbidden version: $version");
                        Logger::log_dispatch("Forbidden version: $version");
                    }
                } else {
                    return new Response(404, ["Content-Type" => "application/json"], json_encode(['error' => 'Region not found']));
                }

                // Return the response, serialized and base64 encoded
                return new Response(
                    200,
                    ["Content-Type" => "application/json"],
                    base64_encode($rsp->serializeToString())
                );
            };
        }

        
        // risky_api_check
        self::$routes["/account/risky/api/check"] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received /account/risky/api/check request.");      

            $response = [
                "retcode" => 0,
                "message" => "OK",
                "data" => [
                    "id" => "none",
                    "action" => "ACTION_NONE",
                    "geetest" => null,
                ]          
            ];
            $json = json_encode($response);

            return new Response(
                200,
                ["Content-Type" => "application/json"],
                json_encode($response)
            );
        };

        // Sdk login
        self::$routes["/sdk/login"] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received /sdk/login request.");
            $queryParams = $request->getQueryParams();
            Logger::log_dispatch("Query params: " . json_encode($queryParams));            
            return new Response(
                200,
                ["Content-Type" => "application/json"],
                json_encode([
                    "retcode" => 0,
                    "data" => [
                        "uid" => "69",
                        "token" => "securetokenfr",
                        "email" => "PHP-SR@wheelchair.com",
                    ],
                ])
            );            
        };

        // mdk_shield login
        self::$routes["/hkrpg_global/mdk/shield/api/login"] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received /shield/api/login");

            return new Response(
                200,
                ["Content-Type" => "application/json"],
                json_encode(self::ACCOUNT_INFO)
            );         
        };

        // mdk_shield verify
        self::$routes["/hkrpg_global/mdk/shield/api/verify"] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received api verify log request.");
            $queryParams = $request->getQueryParams();
            Logger::log_dispatch("Query params: " . json_encode($queryParams));                  
            return new Response(
                200,
                ["Content-Type" => "application/json"],
                json_encode(self::ACCOUNT_INFO)
            );         
        };      
        
        // login stuffs
        self::$routes["/mdk/shield/api/loginCaptcha"] = function (
            ServerRequestInterface $request
        ) {
            return new Response(
                200,
                ["Content-Type" => "application/json"],
                json_encode([
                    "retcode"=> 0,
                    "message"=> "OK",
                    "data"=> ["protocol"=> True, "qr_enabled"=> True, "log_level"=> "INFO"],                    
                ])
            );         
        };        

        self::$routes["/hkrpg_global/combo/granter/login/v2/login"] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received combo granter login request.");    
            return new Response(
                200,
                ["Content-Type" => "application/json"],
                json_encode([
                    "retcode"=> 0,
                    "message"=> "OK",
                    "data"=> [
                        "account_type"=> 1,
                        "combo_id"=> "69",
                        "combo_token"=> "9065ad8507d5a1991cb6fddacac5999b780bbd92",
                        "data"=> "{\"guest\":false}",
                        "heartbeat"=> False,
                        "open_id"=> "69"
                    ],            
                ])
            );         
        };

        // Account Register
        self::$routes["/account/register"] = function(
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Received 'Register Now' request.");

            $html = file_get_contents(__DIR__ . '/html/register_page.html');
            return new HtmlResponse($html);
        };

        // Account Register info
        self::$routes["/account/register/process"] = function(
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch("Register in Process");
            $data = $request->getParsedBody();

            $username = $data['username'] ?? '';
            $password = $data['password'] ?? '';
            $password_v2 = $data['password_v2'] ?? '';

            if (!preg_match('/^[a-zA-Z0-9._@-]{6,25}$/', $username)) {
                return html_result("error", "Invalid username format; should consist of characters [A-Za-z0-9_] and be at least 6 characters long.");
            }

            if($password !== $password_v2) {
                return html_result("error", "Passwords do not match.");
            }

            $pw_hash = password_hash($password, PASSWORD_BCRYPT);
            if($pw_hash === false) {
                return html_result("error", "invalid password input.");
            }

            // Simulate database account creation (replace this with actual database code)
            $status = create_account($username, $pw_hash);

            // Handle different statuses
            if ($status === 'success') {
                return html_result("success", "Successfully registered. Now you can use in-game login.");
            } elseif ($status === 'already_exists') {
                return html_result("error", "Account with specified username already exists.");
            } else {
                return html_result("error", "Internal server error.");
            }
        };   
        
        function html_result($result, $message) {
            $html_template = file_get_contents(__DIR__ . '/html/register_info.html');
            $html = str_replace(['%RESULT%', '%MESSAGE%'], [$result, $message], $html_template);
            return new HtmlResponse($html);
        }

        function create_account($username, $password_hash) {
            return 'success';
        }        

    }
    public const ACCOUNT_INFO = [
        "retcode"=> 0,
        "message"=> "OK",
        "data"=> [
            "account"=> [
                "area_code"=> "**",
                "email"=> "PHP-SR",
                "country"=> "virus",
                "is_email_verify"=> "1",
                "token"=> "securetokenfr",
                "uid"=> "69"
            ],
            "device_grant_required"=> false,
            "reactivate_required"=> false,
            "realperson_required"=> false,
            "safe_mobile_required"=> false,
        ],           
    ];
}

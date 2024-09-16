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

        Logger::log_dispatch("Dispatch Server running at http://127.0.0.1:21000\n");
        $httpServer->listen(new SocketServer('127.0.0.1:21000'));
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
            $rsp = new GlobalDispatchData;
            $rsp->setRetcode(0);
            $rsp->setServerList(
                [
                    (new ServerData)
                        ->setName('PHP-SR')
                        ->setTitle('PHP-SR')
                        ->setEnvType('2')
                        ->setDispatchUrl('http://localhost:21000/query_gateway')
                ]
            );
            
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
        self::$routes['/query_gateway'] = function (
            ServerRequestInterface $request
        ) {
            Logger::log_dispatch('Received /query_gateway request.');
            $queryParams = $request->getQueryParams();
            $version = $queryParams['version'] ?? null;
            Logger::log_dispatch("Version: $version");
        
            if (!$version) {
                return new Response(400, ["Content-Type" => "application/json"], json_encode(['error' => 'Missing version']));
            }
        
                       
            $version_config = self::$config->versions[$version] ?? null;

            Logger::log_dispatch("Version config: " . json_encode($version_config));       

            if ($version_config) {
                // Prepare Gateserver response
                $rsp = new Gateserver();
                $rsp->setIp("127.0.0.1");
                $rsp->setPort(23301);
                $rsp->setAssetBundleUrl($version_config->asset_bundle_url);
                $rsp->setExResourceUrl($version_config->ex_resource_url);
                $rsp->setLuaUrl($version_config->lua_url);
                $rsp->setLuaVersion($version_config->lua_version);
                $rsp->setNnglebkcmla(true);
                $rsp->setApjecjmgakc(true);
                $rsp->setNphdimjokni(true);
                $rsp->setCnaklgmdlpe(true);
                $rsp->setLaablmnklld(true);
                $rsp->setOfjaknedmdm(true);
                $rsp->setEbkbnekcohi(true);
                $rsp->setUnk1(true);
                $rsp->setUnk2(true);
                $rsp->setUnk3(true);
                $rsp->setUnk4(true);
                $rsp->setUnk5(true);
                $rsp->setUnk6(true);
                $rsp->setUnk7(true);
                $rsp->setUseTcp(true);
                // $rsp->setUseTcp($server_config->gateserver_protocol == GatewayProtocolType::TCP);

            } else {
                $rsp = new Gateserver();
                $rsp->setRetcode(9);
                $rsp->setMsg("forbidden version: $version");
                Logger::log_dispatch("forbidden version: $version");
            }
        
            return new Response(
                200,
                ["Content-Type" => "application/json"],
                base64_encode($rsp->serializeToString())
            );
        };   
        
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

SabrePhpBrigde
================
This is a sample php Sabre REST API bridge that shows how to authenticate and consume Sabre Dev Studio REST APIs.

Using the App Module
====================
This Sample Code is provided 'as is' for the purposes of demonstrating how to consume Sabre Dev Studio REST API from a php Web application. This requires to have an existing Sabre Dev Studio Key.

The bridge provides service to any software application for example (Escape App) which is connected to Sabre API. It provides communication between application running on the user end point and Sabre API. The major responsibility of the bridge is authorization to which is stored in db/main.db file. That file includes also token which is responsible for keeping authorized session. The token is only updated when is invalid. The middleware is also a cache layer. It stores airports code in db/airpots.db
Several functions in the bridge:
function get($uri) - it is responsible for validating URL and update main.db if token expired or is invalid.
* function updateToken($secret, $db) - this is for updating the token.
* function getToken($secret) - core of getting appropriate token to further purposes and requests 
* function translate($airportCode) - return airport based on given longitude and latitude
* function airports($code) - it reads airport code from db file
* function formDestinationFinderResponse($input) - it decodes give json and create appropriate objects including id, coordination, city, currency code, destination rank and theme, than returns data in JSON format.

For more information on registering to get a Test Key account please visit Sabre Dev Studio@http://developer.sabre.com and how to authenticate and build your key visit https://developer.sabre.com/docs/read/rest_basics/authentication

Additional Resources
====================
Sabre API documentation and resources can be found http://developer.sabre.com

This module was developed by Cometari(http://www.cometari.com), a Sabre Technology partner.

Disclaimer of Warranty and Limitation of Liability
============
This software and any compiled programs created using this software are furnished “as is” without warranty of any kind, including but not limited to the implied warranties of merchantability and fitness for a particular purpose. No oral or written information or advice given by Sabre, its agents or employees shall create a warranty or in any way increase the scope of this warranty, and you may not rely on any such information or advice.
Sabre does not warrant, guarantee, or make any representations regarding the use, or the results of the use, of this software, compiled programs created using this software, or written materials in terms of correctness, accuracy, reliability, currentness, or otherwise. The entire risk as to the results and performance of this software and any compiled applications created using this software is assumed by you. Neither Sabre nor anyone else who has been involved in the creation, production or delivery of this software shall be liable for any direct, indirect, consequential, or incidental damages (including damages for loss of business profits, business interruption, loss of business information, and the like) arising out of the use of or inability to use such product even if Sabre has been advised of the possibility of such damages.

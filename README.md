This is a demisified HMVC in codeigniter

--For Hmvc to work here, I used wiredesignz-codeigniter-modular-extensions


--Which have a 'core' and 'third_party' folder containing: 'core\MY_Loader.php', 'core\MY_Router.php'and a 'third_party\MX' folder.
{{I have copied this already in this project to Application\core and Application\third_party respectively}}


--I created a MY_Controller.php Class, which extends wiredesignz-codeigniter-modular-extensions MX_Controller Class
{{all other custom controller classes: Home.php and Template.php extends MY_Controller }}


--This is optional as you could decide to extend MX_Controller from any custom class.
 
 
--No database Required 


--There is a unique template found in \modules\template where all other content files sharing same templates are loaded.


--There is a \modules\home folder containing all contents to be loaded


--Edit your config file as mine is set to : $config['base_url'] = 'http://localhost/bread/';


--Access this folder using localhost/bread due to the above custom base_url. I did a REWRITE on \.htaccess already so no need 
for you do this: localhost/index.php/bread just do this localhost/bread


PS- I made this as Basic and Simple as Possible for Codeigniter beginners to Understand quickly


ENJOY!!!

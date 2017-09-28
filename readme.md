# \<turft-API\>

The api for the turft.nl website

#### Instructions
 
 - Clone .git directory
 - Run `composer install`
 
 - Initialize laravel project:
   - Copy `.env.example` to `.env`: `cp .env.example .env`
   - Run `php artisan key:generate`
   - Run `php artisan app:name App`
 - Run ide helper
   - Run `php artisan ide-helper:generate`
   - Run `php artisan ide-helper:meta` (for phpstorm)
 - Start the API
   - Run `php artisan serve --host 0.0.0.0 --port 8000`
   
 You can now go to the API through localhost:8000
 
 #### Commands
 
 ### Groups '/group/'
 - GET  '/'
   - The index retrieving all groups
 - POST '/'
   - Save a group with fields:
     - Name: String(50), UNIQUE
 - GET '/group/{groupId}'
   - Get a specific group
 - PUT '/group/{groupId}'
   - Update a specific group with fields:    
     - Name: String(50), UNIQUE  
 - DELETE '/group/{groupId}'
   - Delete a specific group
 - POST '/group/{group}/addUser'
   - Add a user to a group with specified role  
     - user: Integer(11), Unsigned
     - role: Enum("owner", "admin", "member")
     
### User 
 - GET '/login'
   - Show the login form
 - POST '/'
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
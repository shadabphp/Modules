function register_session_new(){
    if( ! session_id() ) {
       session_start();
     }
 }

add_action('init', 'register_session_new');


// now you can use below code.

$_SESSION['user_name'] = $name;
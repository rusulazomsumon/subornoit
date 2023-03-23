<?php
/**
 * Template Name: Custom Login
 */

get_header(); ?>

<div class="login-container">
  <h1><?php bloginfo('name'); ?></h1>

  <?php wp_login_form(array('redirect' => home_url('/dashboard/'))); ?>

  <a href="<?php echo wp_lostpassword_url(); ?>">Forgot your password?</a>
</div>

<style>
  .login-container {
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
  }

  h1 {
    margin-top: 0;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  a {
    display: block;
    margin-top: 20px;
  }
</style>

<?php 
// Redirect to dashboard page after successful login
function redirect_to_dashboard() {
  wp_redirect(home_url('/dashboard/'));
  exit;
}
add_action('wp_login', 'redirect_to_dashboard');
get_footer(); ?>

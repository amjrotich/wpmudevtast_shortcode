<?php
// Add Shortcode
function subform() {

    // Get the current user's display name
    $current_user = wp_get_current_user();
    $user_display_name = $current_user->display_name;

    // Get the blog name
    $blog_name = get_bloginfo('name');

    // Display the welcome message and subscription form
    echo '<p>Hey ' . esc_html($user_display_name) . ', welcome to ' . esc_html($blog_name) . '! You can subscribe to our newsletter here:</p>';
    ?>
    <form action="/thank-you">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Submit">
    </form>
    <?php
}
add_shortcode('subscriptionform', 'subform');
?>

// Add Shortcode
function subform() {

    // Get the current user's display name
    $current_user = wp_get_current_user();
    $user_display_name = $current_user->user_firstname;

    // Get the blog name
    $blog_name = get_bloginfo( 'name' );

    // Build the output
    $output = '<p>Hey ' . $user_display_name . ', welcome to ' . $blog_name . '! You can subscribe to our newsletter here:</p>';
    $output .= '<form action="/thank-you">';
    $output .= '<label for="email">Enter your email:</label>';
    $output .= '<input type="email" id="email" name="email">';
    $output .= '<input type="submit" value="Submit">';
    $output .= '</form>';

    // Return the output
    return $output;
}
add_shortcode( 'subscriptionform', 'subform' );

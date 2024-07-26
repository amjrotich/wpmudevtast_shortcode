# wpmudevtast_issue5
It looks like your shortcode snippet is almost set up correctly, but there’s a minor issue with retrieving and displaying the current logged-in user's name. The wp_get_current_user() function returns a WP_User object, and it seems you are using user_firstname, which may be empty if the user has not set their first name.

Here’s a revised version of your shortcode code to ensure that the display name is shown correctly. Replace user_firstname with display_name to get the user's full name:
## Changes Made:
Used display_name: This property will return the user's full display name, which should always be populated if the user has set it.
Escaped Output: Added esc_html() to ensure that any special characters in the user's name or blog name are safely outputted.

## To apply this code:

Go to your WordPress dashboard.
Navigate to Appearance > Theme Editor.
Open the functions.php file of your active theme.
Paste the updated code into the file and save your changes.
This should ensure that the logged-in user's name is displayed correctly with the subscription form. If you still encounter issues, please let me know!

# wpmudevtast_shortcode
The issue with your shortcode not displaying the user's name could be due to the use of echo within the shortcode function. In WordPress, shortcode functions should return the content instead of echoing it directly.

## Explanation
Retrieve the User Information: Ensure that the current user's information is correctly retrieved.
Build the Output: Construct the HTML content as a string.
Return the Output: Return the constructed string rather than using echo.

This should ensure that the shortcode works correctly, displaying the user's name if they are logged in. If the user is not logged in, user_firstname will be empty, and it will display "Hey , welcome to [blog name]!".

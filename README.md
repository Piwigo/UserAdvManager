# UserAdvManager
Piwigo plugin - Adds options for advanced users management

Options added:

- Send an email confirmation of registration to new registered users
- Advanced management of the registration confirmation (sending reminder emails, setting a time limit to confirm registration, ... )
- Advanced management of "Ghost" users (users who haven't visited the gallery since x days) with reminder emails
- Automated management of users waiting for registration validation and for ghost users
- Requires a nickname for guest comments
- Allows application of an email provider exclusion list (ie : @hotmail.com, @msn.com,...) to new registrations

... And many more features to discover ;-)

The following capabilities are only necessary and activated for versions of Piwigo less than 2.x:
- Email address mandatory for new users
- Not allow the same email address to be used for separate accounts
- Make user accounts case insensitive to prevent multiple account creation using only case differences

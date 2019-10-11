# pictureworks
migrating from old legacy codebase to laravel framework

The migration of a non-oo legacy application has now been migrated into the Laravel/Eloquent framework.
Stacks that were used are:
•	Laravel Framework
•	Postgres DB
•	Eloquent ORM

Others:
•	Guzzle for HTTP Client
•	Composer as Package Manager
•	PHP Unit for Unit Testing
•	Tortoise GIT (as GUI for Github commits)

There appears to be an API definition inside the home page function from the legacy code. Upon migration, I figured it would be cleaner to have it contained in its own function.

Additionally, it would be nice if I could also test it out so I created a test_post function for it. The test_post function basically updates the users table by appending a new comment pulled via a GET variable. The user is set to #1 with the default password embedded.

Here’s how the structure of the url on my local looks like:
http://www.pictureworks.local/test_post?comments=guzzle

the comments which is “guzzle” is simply posted via a POST Request through guzzle client.
The new comment is eventually appended to the existing comments of user #1. Here’s a snap on my local: https://www.screencast.com/t/MZ34Wd9gscv9

The ideal implementation for this would be to actually use the API via the RouteServiceProvider and are defined in routes > api.php

I’ve used TopTracker to automatically monitor my work progress by the minute. I’ve logged a total of 4.33 hours. Here’s a snap: https://www.screencast.com/t/oInUDn3QdTXl

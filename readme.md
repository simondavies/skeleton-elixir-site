skeleton elixir site
==

Public facing files can be found within the public folder.

Set up a host file to go to this public folder. I been using Laravel's Valet Server to build.

More to follow.


SASS & JS Files
--

These are processed via Laravel Elixir, run the following, first make sure to use your terminal and then cd into the sites root folder, then run:

`gulp`

This will run and process your styles and js

`gulp watch`

This will watch the specific files for changes and run the gulp process automatically. If you have uncommented the `browserSync` settings with in the gulp file then this should also refresh the browser for you etc

More to follow.

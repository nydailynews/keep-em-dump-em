# Keep 'Em Dump 'Em
Where the NY Daily News' Keep 'Em Dump 'Em online poll app lives.

## Usage

### Producing a new keep 'em dump 'em

1. Copy the `www/_blank` directory, name it after the team and the year (i.e. "rangers-2017").
2. If this is a project you plan on collaborating on, create a repo on Bitbucket with your new directory.
3. Open up the index.php file in your new project in your favorite text editor.
4. Search and replace these strings, in order, with the appropriate values. If you don't know what the appropriate values are, ask. Be sure to replace all.
    1. `TITLE` should be replaced with something such as "2017 Knicks Keep 'Em Dump 'Em"
    2. `DESCRIPTION`, something like "Vote which New York Knicks players and front-office personnel to keep and which to get rid of on the 2017 Knicks Keep 'Em Dump 'Em"
    3. `TEAMLOWER` with the team name, all lower-case.
    4. `TEAM` with the team name in Title Case.
    5. `KEYWORDS` with a comma-separated list of keywords used to describe this, such as "Knicks,New York,news app,online polls,sports,New York Knicks 2017,Knicks lineup,NBA"
    6. Replace `DATE` with a `YYYY-MM-DD` of the date this is going live. If it were going live April 4 2044 you'd use `2044-04-04`.
    7. Eventually you will replace `CANONICALURL` with the URL of where the interactive will live, which will be something like http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2017/ .
5. Create a new sharing image for the new Keep 'Em Dump 'Em. The PSD is in [`www/psd`](/nydailynews/keep-em-dump-em/tree/master/www/psd). Export that PSD as a PNG and stick that in the img directory of your new project.
6. Delete and / or edit the sections of the team your keep/dump'ing (NBA's "Players" and "Brass," NFL's "Offense" "Defense" etc.). [Those start around here in the document](/nydailynews/keep-em-dump-em/blob/master/www/_blank/index.php#L267).
7. Edit the js/players.json file in your project and add the players names and ID's. ID's start off wherever the previous team's ID's left off -- zero if we're starting a table from scratch. If we're not starting from scratch you'll have to get into the database and see what's already in there (sigh). [Here's what the Knicks 2017 players.json looks like](http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2017/js/players.json).
8. If a table in the database for the keep/dump'ed team already exists, you won't have to [take the SQL in www/sql/table.sql and modify it tto your needs before running it on QA and PROD](/nydailynews/keep-em-dump-em/blob/master/www/sql/table.sql).
9. No matter what, you'll still have to insert the player records into the database. You won't believe the hack that was built to make this as painless as was reasonable, it's kind of up there in the list of the best worst hacks. Once you've done all of the above you should have a working page on your local server. Load that URL on localhost and load it with `#dev` appended to the URL. Then open your console. Then see what the value of the variable `query` is. That's what you want to put into the database. Yup.
10. Produce the images. Filenames should be firstname_lastname.jpg, no special characters, 300px wide by 380px tall.
11. Edit the data.csv with the new keep 'em dump 'em.
12. YOU'RE (probably) DONE.


### The config object and how to use it.

Whatever's in the config object on the page will overwrite [what's in the config object in the app](/nydailynews/keep-em-dump-em/blob/master/www/js/app-keepem.js#L2) when the app's init'ed. You can also see a full list of what's configurable at that URL.

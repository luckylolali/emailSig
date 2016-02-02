# emailSig
Email signature generator
School level email signature generator include name, title, email address, office number, social media etc.

1. Copy the files to where you want the form located.

2. Make sure the 'sigfiles' folder is writable by the web server. This is where
   the temporary files are created that get zipped & sent to the user. Once the
   file has been downloaded, the temporary files are deleted.

3. To enable / disable the ‘View HTML’ and ‘Download’ links. Change the
   ‘$show_view_download_buttons’ variable at the top of ‘sigform_include.php’ between
   true ( to show the buttons ) and false ( to hide them ).

4. To change the social links. Just add the additional entries to the dropdowns for
   the social platforms ( starting around line 800 ) in the ‘sigform_include.php’ file.

5. To make any changes to the base signature ( ex: the logo ). Just make the changes
   using regular HTML to the file ‘sigform_base.html’.

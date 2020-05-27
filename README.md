This is simple laravel website, where each profile can create image galleries.

# PDF sharing website

This project is PDF document sharing platform. 
Each registered user can upload and delete his own PDF document.
Users can edit their profile, add descrition, url and upload their
profile image.

 Please follow instructions below.
    
    First go to https://github.com/JanisDavidsons/pdf_upload_website and
    copy project adress like this:

![git demo](gif/git.gif)

    Then open terminal within a folder, were you want to download this project.
    Enter command "git clone" and paste adress in terminal.

![git demo](gif/terminal.gif)

    Then you must enter your database credentials, like so:
    
![git demo](gif/settings.gif)

    Start web server with command "php -S localhost:8888":
    
![git demo](gif/terminal_2.gif)

    Open web browser and register yourself by entering your credentials:
    
![git demo](gif/web_1.gif)

    You will receive confirmation email:
    
![Image](gif/mailReceived.png)

    Now you can log in:
    
![git demo](gif/web_2.gif)



This exercise shows:
 
          * How to build simple login/ register form.
          * How to build email service and send conmfirmation message to new users.
          * How to code simple save data and retrieve it from mysql database.
          * How to build sesions, so once user logs in, he can change browser tabs and stay logged in.
          
          
If I had more time, I would finish up password reset function. I had bug in that code, so I removed it.

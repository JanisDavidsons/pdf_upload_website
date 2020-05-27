
# PDF sharing website

This project is PDF document sharing platform. 
Each registered user can upload and delete his own PDF document. Users can see all
uploaded pdf files, but delete only owned ones.
Users can edit their profile, add description, url and upload their
profile image.

 Please follow instructions below to run it on your local machine.
    
    First go to https://github.com/JanisDavidsons/pdf_upload_website and
    copy project adress. 
    
   ![git demo](gif/9.gif)

    Then open terminal within a folder, were you want to download this project.
    Enter command "git clone https://github.com/JanisDavidsons/pdf_upload_website ."
    Dont forget to add dot at the end of address. 
    This will extract all project content in that folder.

   ![git demo](gif/git.gif)

    Install Composer Dependencies.
    "composer install"

   ![git demo](gif/1.gif)

    Install NPM Dependencies.
    "npm install"
    
   ![git demo](gif/2.gif)

    Create a copy of your .env file.
    "cp .env.example .env"
    
   ![git demo](gif/3.gif)

    Generate an app encryption key.
    "php artisan key:generate"
    
   ![git demo](gif/4.gif)

    I will use sqlite as database. 
    Create new file in databse folder with command "touch database.sqlite"
    
   ![Image](gif/5.gif)

     In the .env file, add database information to allow Laravel to connect to the database.    

   ![git demo](gif/.env.png)
   ![Image](gif/6.gif)


    Migrate the database
   ![git demo](gif/7.gif)

    Link public folder, where images will be stored.
    "php artisan storage:link"
   ![git demo](gif/link_folder.gif)
   
    Run local server with command "php artisan serve"
    Open adress displayed in browser
   ![git demo](gif/8.gif)
       
    

This exercise shows:
 
          * How buld software to upload files.
          * How to restrict user permissons.
          * Display PDF file thumbnails.
          * Display document, when click on it.
          * Delete file and its records from database.
          
Some example screenshots of project:

   ![git demo](gif/sample1.png)
   
   
   ![git demo](gif/sample2.png)

          

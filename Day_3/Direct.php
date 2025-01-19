<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileHandlingOerations</title>
</head>
<body>
    <?php
        //Directory handling Operations
    
        //Create a Directory
        if(!is_dir("php3_directory")){
            mkdir("php3_directory");
            echo "Directory Created";
        }
        else {
            echo "Directory already Exists !";
        }

        echo "<br>";

            //Check if the directory exists
               //Create a Directory
        if(is_dir("php3_directory")){
           
            echo "Directory Exists ";
        }
        else {
            echo "Directory Created  !";
        }
        

            //List the Files inside the Folder
            $files = scandir("php3_directory");
            foreach($files as $file){ 
                echo $file . "<br>";
            }
            echo "<br>";
            //Change the Directory
            echo "Current Directory : ". getcwd();
            chdir("php3_directory");
            echo "<br> New Current Directory :" . getcwd();

            echo "<br>";

            //Delete the Files inside the Directory
            $delete_files = scandir(".");
            foreach($delete_files as $file ){
                if($file !=="."&& $file !==".."){
                    unlink($file);
                }
                echo "File Deleted Successfully...!";
            }
                echo "<br>";

                //Delete Directory
                chdir("..");
                echo "<br> Current Directory : " .getcwd();
                if(is_dir("php3_directory")){
                    rmdir("php3_directory");
                    echo "Directory Removed";
                }
                else{
                    echo "Directory Does not exists";
                }






        ?>
    
        </body>
        </html>

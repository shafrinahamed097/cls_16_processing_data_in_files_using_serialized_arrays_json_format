<?php

// delete a file
if(file_exists('data1.txt')){
    unlink('data.txt');
    echo "File Deleted";
}

<?php
function ghostBook(){
    return file(__DIR__.'/ghost.txt',FILE_IGNORE_NEW_LINES);
}
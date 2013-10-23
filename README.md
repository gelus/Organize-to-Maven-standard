Organize-to-Maven-standard
==========================

Create a copy of a directory and all sub directories with all the files split out into their respective language directories, as per the Maven standard


## Basic use
  - download (easiest if loaded as a sybling or into a parent directory)
  - cusomize config.js
  - run passing in the directory you wish to organize
  - - node organize myDir

### config.js
config.js exports a simple pojo (plain old javascript object) with each key representing a languge you wish
your files to be organized into. The value of these propertys will be objects that may or may not hold an 
exclude array filled with regExp values
eg

    config={"js": {exclude: [/min.js$/]}}
    
Currently it holds a Less/Js example that matches the exampleDir

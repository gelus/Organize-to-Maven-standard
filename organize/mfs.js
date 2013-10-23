var fs = require('fs')
	,	path = require('path');
	
exports.mkpath = function (path, cb){
	var pathAr = path.split('/')	
		,	toMake = __dirname
		,	cb = cb? cb:function(){}
	while(pathAr.length){
		toMake += "/"+pathAr.shift();
		fs.mkdir(toMake, cb);
	}
}
exports.existsSync = fs.existsSync;
exports.mkpathSync = function (path){
  var pathAr = path.split('/')  
    , toMake = __dirname
  while(pathAr.length){
    toMake += "/"+pathAr.shift();
    if(fs.existsSync(toMake)) continue
    fs.mkdirSync(toMake);
  }
}

exports.copyFile = function (fileLocation, newFileLocation){
	fs.createReadStream(fileLocation).pipe(fs.createWriteStream(newFileLocation));
}


// Taken from node-file-utils
// https://github.com/aconbere/node-file-utils
// file.walk
//
// Given a path to a directory, walk the fs below that directory
// 
// @start: the path to startat
// @callback: called for each new directory we enter
//    ex: file.walk("/tmp", function(error, path, dirs, name) {})
//
//    path is the current directory we're in
//    dirs is the list of directories below it
//    names is the list of files in it
//
exports.walk = function (start, callback) {
  fs.lstat(start, function (err, stat) {
    if (err) { return callback(err) }
    if (stat.isDirectory()) {

      fs.readdir(start, function (err, files) {
        var coll = files.reduce(function (acc, i) {
          var abspath = path.join(start, i);

          if (fs.statSync(abspath).isDirectory()) {
            exports.walk(abspath, callback);
            acc.dirs.push(abspath);
          } else {
            acc.names.push(abspath);
          }

          return acc;
        }, {"names": [], "dirs": []});

        return callback(null, start, coll.dirs, coll.names);
      });
    } else {
      return callback(new Error("path: " + start + " is not a directory"));
    }
  });
};

// Taken from node-file-utils
// https://github.com/aconbere/node-file-utils
// file.walkSync
//
// Synchronus version of file.walk
//
// Given a path to a directory, walk the fs below that directory
// 
// @start: the path to startat // @callback: called for each new directory we enter
//    ex: file.walk("/tmp", function(error, path, dirs, name) {})
//
//    path is the current directory we're in
//    dirs is the list of directories below it
//    names is the list of files in it
//
exports.walkSync = function (start, callback) {
  var stat = fs.statSync(start);

  if (stat.isDirectory()) {
    var filenames = fs.readdirSync(start);

    var coll = filenames.reduce(function (acc, name) {
      var abspath = path.join(start, name);

      if (fs.statSync(abspath).isDirectory()) {
        acc.dirs.push(name);
      } else {
        acc.names.push(name);
      }

      return acc;
    }, {"names": [], "dirs": []});

    callback(start, coll.dirs, coll.names);

    coll.dirs.forEach(function (d) {
      var abspath = path.join(start, d);
      exports.walkSync(abspath, callback);
    });

  } else {
    throw new Error("path: " + start + " is not a directory");
  }
}
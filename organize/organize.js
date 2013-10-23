
var mfs = require('./mfs.js');
if(!process.argv[2]){
	console.log("\n\033[31m-error- \033[0m Must specify directory for organization");
	process.exit(1);
}
if(!mfs.existsSync(process.argv[2])){
	console.log("\n\033[31m-error- \033[0m Must specify an existing directory for organization");
	process.exit(1);
}

var config = require('./config.js')
	,	langs = ['resource']
	, cwd = process.cwd()
	, dir = process.argv[2];

for(key in config){
	langs.push(key);
}

mfs.walkSync(dir, function(dirPath, dirs, files){
	var newPath, file, originalFile, fileExtension, langDir, newFile;
	for(lang in langs){
		newPath = "../"+dirPath.replace(/\\/g, "/").replace(dir, 'target/'+langs[lang]);
		mfs.mkpathSync(newPath);
	}
	for(file in files){
		file = files[file];
		originalFile = dirPath+"\\"+file;
		fileExtension = file.split('.')[file.split('.').length -1].toLowerCase();
		langDir = (langs.indexOf(fileExtension) != -1)? fileExtension:'resource';

		if(config.hasOwnProperty(fileExtension)){
			if(config[fileExtension].hasOwnProperty('exclude')){
				config[fileExtension].exclude.forEach(function(el){
					if(el.test(file)) langDir = 'resource';
				})
			}
		}
		newFile = originalFile.replace(/\\/g, "/").replace(dir, "target/"+langDir)

		mfs.copyFile(originalFile, newFile);
	}
})
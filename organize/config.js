	// the config is where all the customization happens
	// It is an object with each language directory defined as a key.
	// the value of these propertys will be objects 
	// that may or may not hold an exclude array or regExp values
	// eg config={"js": {exclude: [/min.js$/]}}
module.exports = {
	"js": {exclude: [/min.js$/]},
	"less": {}
}
var fs = require('fs');
var packagejson = require('../package.json');

fs.readFile('./dp_framework.php', 'utf8', function (err,data) {
    if (err) {
        return console.log(err);
    }
    let result = data;
    const matches = result.match(/\* Version: (.*)/gmu);
    if (matches?.length) {
        result = result.replace(matches[0], `* Version: ${packagejson.version}`);
    }

    fs.writeFile('./dp_framework.php', result, 'utf8', function (err) {
        if (err) return console.log(err);
    });
});

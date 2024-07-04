const fs = require('fs');
const chokidar = require('chokidar');
const path = require('path');
const os = require('os');

// Function to get the name of the user
const getUserName = () => {
    return os.userInfo().username || 'Local User';
};

// Directory to watch for changes
const directoryToWatch = 'C:\\Users\\Nadeesha\\Desktop\\Shoppe';

// File where change notifications will be logged (in the same directory)
const outputFilePath = path.join(directoryToWatch, 'file_changes.log');

// Initialize watcher to monitor file changes
const watcher = chokidar.watch(directoryToWatch, {
    ignored: /(^|[\/\\])\../, // ignore dotfiles
    persistent: true
});

// Add event listeners
watcher
    .on('add', path => logChange(`File ${path} has been added`))
    .on('change', path => logChange(`File ${path} has been changed`))
    .on('unlink', path => logChange(`File ${path} has been removed`))
    .on('error', error => console.error(`Watcher error: ${error}`)); // Add error handler

// Function to log change notifications to the output file
function logChange(message) {
    const changerName = getUserName();
    const formattedMessage = `${new Date().toISOString()} - ${message} by ${changerName}\n`;

    fs.appendFile(outputFilePath, formattedMessage, (err) => {
        if (err) {
            console.error(`Error writing to output file ${outputFilePath}: ${err}`);
        }
    });
}

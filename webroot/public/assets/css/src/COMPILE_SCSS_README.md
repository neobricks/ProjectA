# First install noda-sass `npm install -g node-sass less`

# Run Task to stach Watch the files

node-sass --watch webroot/public/assets/css/src/ --output=webroot/public/assets/css/dist/ --output-style=compressed

On VS Code Create a new Task inside tasks.json
// Sass configuration
{
    // See https://go.microsoft.com/fwlink/?LinkId=733558
    // for the documentation about the tasks.json format
    "version": "2.0.0",
    "tasks": [
        {
            "label": "Sass Compile",
            "type": "shell",
            "command": "node-sass --watch webroot/public/assets/css/src/ --output=webroot/public/assets/css/dist/ --output-style=compressed",
            "group": "build"
        }
    ]
}

SOURCE: https://code.visualstudio.com/docs/languages/css
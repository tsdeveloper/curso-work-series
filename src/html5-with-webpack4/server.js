const express = require('express');
const path = require('path');
const port = process.env.PORT || 4001;
const app = express();


app.use(express.static(__dirname));

app.get('*', (req, res) => {
    res.sendFile(path.resolve(__dirname, './dist/index'))
});

app.listen(port);
console.log('Server Started');
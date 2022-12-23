<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIANOKEY</title>
    <link rel="icon" type="image/png" href="icon/pianokey.svg">
    <link rel="stylesheet" href="css/homePage.css">
</head>
<body>
    <div class="piano">
        <div class="piano__body">
            <div class="piano__speaker"></div>
            <div class="piano__interface">
                <div class="piano__controls">
                    <h4 class="piano__heading">PIANOKEY</h4>
                    <label> <input type="radio" class="piano__control__option" name="control" value="letterNotes" checked> Letter Notes</label>
                    <label> <input type="radio" class="piano__control__option" name="control" value="keyboard"> Keyboard</label>
                    <label> <input type="radio" class="piano__control__option" name="control" value="none"> None</label>
                </div>
                <div class="piano__autoplay">
                    <h4 class="piano__heading">Autoplay</h4>
                    <select class="piano__song-list">
                        <option value="1"> Jingle Bells</option>
                        <option value="2"> Happy Birthday </option>
                    </select>
                    <label>Tempo:
                        <select class="piano__tempo">
                            <option value="1">Slow</option>
                            <option value="2" selected>Normal</option>
                            <option value="3">Fast</option>
                        </select>
                    </label>
                    <button class="piano__play-btn">Play</button>
                </div>
            </div>
            <div class="piano__speaker"></div>
        </div>
        <div class="piano__keyboard"></div>
    </div>
    <script src="js/jsku.js"></script>
</body>
</html>
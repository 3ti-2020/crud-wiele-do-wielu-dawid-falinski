<html lang="pl"><head>
    <meta charset="utf-8">
    <title>stronka</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
    <div class="cnt">
        <form class="form" id="todoForm">
            <div class="form-row">
                <label class="form-label" for="todoMessage">napisz cos</label>
                <textarea class="form-message" name="todoMessage" id="todoMessage"></textarea>
            </div>
            <div class="form-row">
                <button type="submit" class="button form-button">Dodaj</button>
            </div>
        </form>
        <section class="list-cnt">   
            <div class="list" id="todoList">
            <div class="element">
        <div class="element-bar">
            
        </div>
        </div></div>
        </section>
    </div>
    <template id="elementTemplate">
        <div class="element-text">
            
        </div>
    </template>
</body>
<script src="main.js"></script>
</html>

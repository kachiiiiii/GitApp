 <!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body>
 <div class="text-center m-5">
        <p id="number" class="text-4xl color">0</p>
        <button onclick="decrease()" class="p-3 bg-fuchsia-600 text-white font-semibold w-28 border-4">Decrease</button>
        <button onclick=" document.getElementById('number').innerHTML = number = 0;"
            class="p-3 bg-red-500 text-white font-semibold w-20 border-2">Reset</button>
        <button onclick="increase()" class="p-3 bg-green-600 text-white font-semibold w-28 border-4">Increase</button>
    </div>
    <script>
           var number = 0;

        function increase() {
            document.getElementById('number').innerHTML = number++;
        }

        function decrease() {
            if (number >= 0) {
                number = number;
                document.getElementById('number').innerHTML = number--;
            }
        }
    </script>
</body>
</html>

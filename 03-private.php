<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white">
    <main class="w-[380px] h-[600px] bg-white/30 rounded-[20px] ">
        <header class="flex gap-5 justify-between p-3 items-center border-b pb-3 s">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:scale-90 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
            </a>
            <h1 class="text-2xl hover:scale-95 transition-all">oop</h1>
        </header>
        <section class="max-h-[380px] overflow-y-auto m-4 ">
            <h2 class="text-center">Hacedor de tablas</h2>
            <br>
            <form action="" method="post" class="justify-center p-2 flex-col grid mb-4 grid-cols-2 gap-4 ring-1 bg-white/50 ring-white/50 rounded-md">
                <div class="flex flex-col gap-4 items-center text-center">
                    <label>filas: </label>
                    <input type="range" name="nr" min="1" max="30" step="1" oninput="onr.value=this.value">
                    <output id="onr" class="">?</output>
                </div>
                <div class="flex flex-col gap-4 items-center text-center">
                    <label>columnas: </label>
                    <input type="range" min="1" name="nc" max="30" step="1" oninput="onc.value=this.value">
                    <output id="onc" class="">?</output>
                </div>
                <button class="bg-orange-300 w-[333px] p-2 mb-1 rounded-md hover::scale-100 transition-all">Hacer tabla</button>
            </form>

            <?php
            
            class Table{
                private $nr;
                private $nc;

                public function __construct($nr,$nc){
                    $this->nr = $nr;
                    $this->nc = $nc;
                    $this->makeTable();

                }
                private function makeTable(){
                    echo "<table class='mb-4 mx-auto border-collapse'>";
                    for($r = 1; $r <= $this->nr; $r++){
                        echo"<tr>";
                        for($c = 1; $c <= $this->nc; $c++){
                            echo"<td class='p-3 rounded-md ring-1 ring-yellow-50'> </td>";
                        }
                        echo"</tr>";
                    }
                    echo "</table>";
                }
            }

            if($_POST){
                $table = new Table($_POST['nr'],$_POST['nc']);
            }

            ?>

        </section>
    </main>
    <script src="js/tailwind 3.2.4.js"></script>
</body>

</html>
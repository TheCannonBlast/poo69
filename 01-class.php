<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-class</title>
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
        <section class="max-h-[500px] overflow-y-auto m-4 ">
            
            <?php
           
                class Vehicle {

                //atributos

                    public $marca;
                    public $refer;
                    public $modelo;
                    public $color;

                //metodos

                    public function setAttributes($marca, $refer, $modelo, $color) {
                        $this->marca = $marca;
                        $this->refer = $refer;
                        $this->modelo = $modelo;
                        $this->color = $color;
                    }
                    public function getAttributes() {
                        return "<div class='p-4 ring-1 bg-orange-400/50 ring-white/50 rounded-md mb-2'>
                                <p><strong>Marca:</strong>$this->marca</p>
                                <p><strong>Referencia:</strong>$this->refer</p>
                                <p><strong>Modelo:</strong>$this->modelo</p>
                                <p><strong>Color:</strong>$this->color</p>
                                </div>";
                    }

                }
            
                //crear un objeto

                $vehicle1 = new Vehicle;
                $vehicle2 = new Vehicle;
                $vehicle3 = new Vehicle;
                $vehicle4 = new Vehicle;
                $vehicle1->setAttributes(' Mercdes',' class G-wagon', ' 2023', ' Mate Black'); 
                $vehicle2->setAttributes(' lamborghini',' Veneno', ' 2020', ' Lima green'); 
                $vehicle3->setAttributes(' McLaren',' 720s', ' 2023', ' 0range pure'); 
                $vehicle4->setAttributes(' ChildPerv.',' 12yr', ' 2011', ' pink'); 
                echo $vehicle1->getAttributes();
                echo $vehicle2->getAttributes();
                echo $vehicle3->getAttributes();
                echo $vehicle4->getAttributes();


            

            ?>
        </section>
    </main>
    <script src="js/tailwind 3.2.4.js"></script>
</body>

</html>
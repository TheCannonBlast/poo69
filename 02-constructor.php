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
        <section class="max-h-[500px] overflow-y-auto m-4 ">
            <?php
            
            class Playlist{
                //atributos
                private $name; 
                private $artist = array();
                private $album = array();
                private $cover = array();
                private $year = array();

                //metodos

                public function __construct($name) {

                    $this ->name = $name;

                }

                public function setPlaylist($artist, $album, $cover, $year) {

                    $this ->artist[] = $artist;
                    $this ->album[] = $album;
                    $this ->cover[] = $cover;
                    $this ->year[] = $year;

                }

                public function getPlaylist(){

                    echo "<div class='p-2 ring-1 ring-white/40 items-center flex flex-col gap-2'>
                                <h2 class='text center'>
                                    Play list: ".$this -> name."
                                </h2>";
                            for($i = 0; $i < count($this->artist);$i++){
                                echo "<div class='bg-white/20 p-4 text-center flex flex-col gap-2 rounded-md mb-4 w-[250px]'> 
                                <img class='rounded-md' src='".$this->cover[$i]."' alt='Album Cover'>
                                <p><strong>Artista: <strong>".$this->artist[$i]."</p>
                                <p><strong>Album: <strong>".$this->album[$i]."</p>
                                <p><strong>Año: <strong>".$this->year[$i]."</p> <br>
                                </div>";
                            }
                            echo"</div>";

                }

            }

            $playlist = new Playlist('TRAP DURO y Reggaeton');
            $playlist -> setPlaylist('Anuel','LLNM2','https://tinyurl.com/av82tjy9',2022);
            $playlist -> setPlaylist('Anuel','LLNM','https://tinyurl.com/5fc434jc',2021);
            $playlist -> setPlaylist('BadBunny','Un Verano Sin Ti','https://tinyurl.com/j8ft6v64',2022);
            $playlist -> setPlaylist('Don Omar','Meet The Orphans','https://tinyurl.com/2p8463uu',2010);
            $playlist -> setPlaylist('Mora','microdosis','https://tinyurl.com/yc3t2dkd',2022);
            $playlist -> setPlaylist('Jhayco','Timelezz','https://tinyurl.com/357auucv',2021);
            $playlist -> getPlaylist();
            
            ?>
        </section>
    </main>
    <script src="js/tailwind 3.2.4.js"></script>
</body>

</html>
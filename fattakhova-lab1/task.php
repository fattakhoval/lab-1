
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="timer-content" >
Осталось времени:<span id="seconds">60</span> секунд
</div>

    <?php


    function random($min, $max) {
        return mt_rand($min, $max);
    }

   

    function get2SS($len) {
        $str="";
        for($i=0;$i<$len;$i++) {
            if($i==0) $str.=1;
            else $str.=random(0,1);
        }
        return $str;
    }

    function imgSize($len1) {
        for ($i=1;$i<=2;$i++) {
            if($i==1) return $len1;
            else return $len1;
        }
    }

        $var1 = 0;
        $var2 = 0;
        $var3 = 0;
        $var4 = 0;
        $var5 = 0;
        $var6 = 0;


        $tasks = [
            "Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать число.",
            "Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое
             изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?",
            "Напишите колличество вхождений символа $var5 в следующем тексте <pre>
            Я вас любил: любовь еще, быть может,
            В душе моей угасла не совсем;
            Но пусть она вас больше не тревожит;
            Я не хочу печалить вас ничем.
            Я вас любил безмолвно, безнадежно,
            То робостью, то ревностью томим;
            Я вас любил так искренно, так нежно,
            Как дай вам Бог любимой быть другим.
            </pre>. Записать число вхождений $var6"
        ];

        // $colors = ['16', '128', '256'];
        // $key = array_rand($colors);

        // $randomElement= $colors[$key]

//         $myArray = ['16', '128', '256'];

// $randomElementKey = array_rand($myArray);
// $randomElement = $myArray[$randomElementKey];

// echo "элемент: " . $randomElement;

        $randomElementsArray = array('16', '128', '256');

        function randColor($randomElementsArray){
            return $randomElementsArray[array_rand($randomElementsArray)];
        };

        

        $letters = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 
            'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'];


        function randLetter($letters) {
            return $letters[array_rand($letters)];
        }

        $poems = [ 
            '<pre>
            Я вас любил: любовь еще, быть может, 
            В душе моей угасла не совсем; 
            Но пусть она вас больше не тревожит; 
            Я не хочу печалить вас ничем. 
            Я вас любил безмолвно, безнадежно, 
            То робостью, то ревностью томим; 
            Я вас любил так искренно, так нежно, 
            Как дай вам Бог любимой быть другим.</pre>',  
             
            '<pre>
            Сижу за решеткой в темнице сырой. 
            Вскормленный в неволе орел молодой, 
            Мой грустный товарищ, махая крылом, 
            Кровавую пищу клюет под окном, 
            Клюет, и бросает, и смотрит в окно, 
            Как будто со мною задумал одно. 
            Зовет меня взглядом и криком своим 
            И вымолвить хочет: «Давай улетим! 
            Мы вольные птицы; пора, брат, пора! 
            Туда, где за тучей белеет гора, 
            Туда, где синеют морские края, 
            Туда, где гуляем лишь ветер… да я!..»</pre>', 
             
            '<pre>
            Уж небо осенью дышало, 
            Уж реже солнышко блистало, 
            Короче становился день, 
            Лесов таинственная сень 
            С печальным шумом обнажалась, 
            Ложился на поля туман, 
            Гусей крикливых караван 
            Тянулся к югу: приближалась 
            Довольно скучная пора; 
            Стоял ноябрь уж у двора.</pre>', 
             
            '<pre>
            В тот год осенняя погода 
            Стояла долго на дворе, 
            Зимы ждала, ждала природа. 
            Снег выпал только в январе 
            На третье в ночь. Проснувшись рано, 
            В окно увидела Татьяна 
            Поутру побелевший двор, 
            Куртины, кровли и забор, 
            На стеклах легкие узоры, 
            Деревья в зимнем серебре, 
            Сорок веселых на дворе 
            И мягко устланные горы 
            Зимы блистательным ковром. 
            Все ярко, все бело кругом.</pre>']; 

    function randPoem($poems) {
        return $poems[array_rand($poems)];
    }


    // function get_answer($var1) {
    //     return base_convert(strval($var1),2,10);
    // }

    // function get_answer($var) {
    //     // Используем parseInt с основанием 2 для перевода из двоичной системы
    //     return parseInt($var, 2);
    // }

        // function randomColor($len4){
        //      
        //         if($len4==$key){
        //             return $colors[$key];

        //         };
        // }

        // echo "<p>" . $tasks[$_GET['task']] . "</p><br>";
        // echo "<p>" . $tasks[$_GET['task']] . "</p><br>";
        // echo "<p>" . $tasks[$_GET['task']] . "</p><br>";
        // echo "<p>" . $tasks[$_GET['task']] . "</p><br>";
        //  $TO =0;

        //  $IS=mt_rand(1000,1000000)+(time()%1000);
        //     mt_srand($IS);
        //     $T=time();

        // echo " ("; echo (int)($TO/60); echo " мин";
        // if (($tmp=$TO%60)!=0) echo " ".$tmp." сек";
        // echo ")";

        function logNum($var2, $var3, $var4){

            $logI = log($var4, 2);
            $bit = $var2*$var3*$logI;
             return $kbite = floor($bit/(8*1024));
            
        };

        // foreach (count_chars($var5, 1) as $var6 => $val) {
        //     echo "\"" , chr($var6) , "\" встречается в строке $val раз(а).\n";
        //  };

        // function letterInpoem($var5, $var6){
        //     echo strlen($var6);
        //     echo substr_count($var6, $var5);
        // }

        // function letterInPoem($var5,$var6){
        //     $poemAsLetter = str_split($var6);
            
        //     $randomLetter = $var5;
        //     $count = 0;

        //     foreach ($poemAsLetter as $letter) {
        //         if(strtolower($letter) == $randomLetter) {
        //             $count++;
        //         }
        //     }

        //     echo "Буква '$randomLetter' встречается $count раз в стихе.";
        // };

        function letterInPoem($var5, $var6) {
            $randomLetter = mb_strtolower(strval($var5));
            $lettersArray = mb_str_split(mb_strtolower($var6));
            $count = 0;
        
            foreach ($lettersArray as $letter) {
                if ($letter === $randomLetter) {
                    $count++;
                }
            }
        
            // echo "Буква '$randomLetter' встречается $count раз в стихе.";
            return $count;
        }
        
        ?>
        <form method="get">
            <?php


            
                for($i=0;$i<4;$i++) {
                    switch($_GET['task']) {
                        
                        case 0:
                            $var1 = get2SS(random(2,5));
                            echo "<p>Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать число.</p>";
                            $result = base_convert(strval($var1),2,10);
                            // echo $result;
                            echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'> <br>";
                            echo "<input type='hidden' id='ans$i' value='$result'>";
                            echo "<p id='val$i'></p>";
                            break;

                        case 1:
                            $var2 = imgSize(random(128,256));
                            $var3 = imgSize(random(128,256));
                            $var4 = randColor($randomElementsArray);
                            
                            echo "<p>Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?</p>";
                            echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'> <br>";
                            echo "<input type='hidden' id='ans$i' value= '".logNum($var2, $var3, $var4)."'>";
                            
                            echo "<p id='val$i'></p>";
                                
                            break;

                        
                        case 2: 
                            $var5 = randletter ($letters); 
                            $var6 = randPoem($poems); 
                            echo "<p>Напишите колличество вхождений символа $var5 в следующем тексте <pre> 
                            $var6 
                            </pre> Записать число вхождений $var5</p>"; 
                            echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'>   <br>"; 
                            echo "<input type='hidden' id='ans$i' value= '".letterInPoem($var5,$var6)."'>";
                            echo "<p id='val$i'></p>";
                            break;
                    }
                }
                
                // echo "<button>Отправить</button>"; 
                 echo "<input type='button' value='Отправить' id='btn'> ";
            ?>
                
                <!-- <button>Отправить</button>
                <input type="text" value="<?=$ans_user0?> <?=$ans_user1?> <?=$ans_user2?> <?=$ans_user3?>" readonly> -->
        </form>


        

    <script>
        
        var seconds = 60;
        var intervalId = setInterval(function () {
            document.getElementById("seconds").innerHTML = seconds;
            if (seconds == 0) {
                clearInterval(intervalId);
                alert("время вышло");
            } else {
                seconds--;
            }
        }, 1000);


        let btn = document.getElementById("btn");
     
        btn.addEventListener("click",()=>{
                clearInterval(intervalId);

                for (let i=0; i<4;i++){
                    let ans = document.getElementById(`ans${i}`).value;
                    let ans_user = document.getElementById(`ans_user${i}`).value;
                     console.log(ans);
                    console.log(ans_user);
                    document.getElementById(`val${i}`).innerText = `Правильный ответ: ${ans}`;

                    if(ans==ans_user){
                        document.getElementById(`ans_user${i}`).style.color = 'green'; 
                    }
                    else {
                        document.getElementById(`ans_user${i}`).style.color = 'red'; 
                    }
            }
        })
       

    </script>  


    

    <!-- <?php print(date( "l dS of F Y h:i:s A" )); ?> -->




    <!-- //    <?php for ($i=0; $i<4;$i++):?>
    //         btn.addEventListener("click",()=>{
    //             let ans = document.getElementById("ans<?=$i?>").value;
    //             let ans_user = document.getElementById("ans_user<?=$i?>").value;
    //             console.log(ans);
    //             console.log(ans_user);
    //             document.getElementById("val<?=$i?>").innerText = `Правильный ответ: ${ans}`;

    //             if(ans==ans_user){
    //                 return document.getElementById("ans_user<?=$i?>").style.color = 'green'; 
                    
                    
    //             }
    //             else {
    //                 return document.getElementById("ans_user<?=$i?>").style.color = 'red'; 
    //             }
    //         })
    //    <?endfor;?>; -->
    
</body>
</html>





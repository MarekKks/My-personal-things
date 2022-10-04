<?php include_once 'header/header.php'?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' href='css/style.css'/>
<link rel='stylesheet' type='text/css' href='css/reset.css' />
<link rel='stylesheet' type='text/css' href='css/demo.css' />
<link rel='stylesheet' type='text/css' href='css/nejak.css' />

  </head>
  <body>
 <header class="intro">
 <h1>3 Základné kroky ako hrať na gitare</h1>
 <p>3 základné kroky, ktoré ti určite pomôžu naučiť sa hrať na gitare</p>

 <div class="action">
 <a href="https://www.bing.com/videos/search?q=how+to+play+on+guitar&&view=detail&mid=EC6DE913DB67DB550B81EC6DE913DB67DB550B81&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dhow%2520to%2520play%2520on%2520guitar%26qs%3Dn%26form%3DQBVR%26%3D%2525eManage%2520Your%2520Search%2520History%2525E%26sp%3D-1%26pq%3Dhow%2520to%2520play%2520on%2520guita%26sc%3D8-20%26sk%3D%26cvid%3DEF3070CEB6A24327A932B1A9ADCE64B7" title="How to play on guitar" class="btn back">Tutorial</a>
 </div>
 
 </header>
  
 <main>
    <!-- Start Stepper HTML -->
<div class="container">
<div class="accordion" id="accordionExample">
<div class="steps">
    <progress id="progress" value=0 max=100 ></progress>
    <div class="step-item">
        <button class="step-button text-center" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1
        </button>
        <div class="step-title">
            Prvý Krok
        </div>
    </div>
    <div class="step-item">
        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2
        </button>
        <div class="step-title">
            Druhý Krok
        </div>
    </div>
    <div class="step-item">
        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3
        </button>
        <div class="step-title">
            Tretí Krok
        </div>
    </div>
</div>

<div class="card">
    <div  id="headingOne">
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="card-body">
        Túto vetu si zapíš, zapamätaj, alebo skrátka vry do pamäte. Prvým krokom je skamarátenie sa s nástrojom, v tomto prípade gitarou. Nezáleží na tom, či akustickou, elektrickou alebo basovou. Pod pojmom ‘spriateliť sa’ nemám na mysli objímanie, aj keď proti gustu žiaden dišputát, samozrejme. Ide o to, stláčať struny bruškami prstov ľavej ruky. Kdekoľvek na pražci, skrátka len stláčať. No a keďže budem spomínať veľa podobných termínov, poďme si v skratke predstaviť stavbu tohto čarovného nástroja.
        </div>
    </div>
</div>
<div class="card">
    <div  id="headingTwo">

    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="card-body">
            Naučil si sa abecedu, možno aj Mor Ho na strednej škole, toto určite dokážeš. Musíš si do hlavy zafixovať, že tento akord je E, tento Am, atď. Ukážeme si to na niekoľkých obrázkoch akordov.<br>
            <p class="text-muted">Akordov je neuveriteľne veľa a odvodzujú sa od základných, akord Em (E mol) chytíš tak, že odstrániš tvoj ukazovák a ostanú ti len dva prsty. Zahráš teda úplne všetky struny, pričom chytáš len druhú a tretiu zvrchu na druhom pražci.</p>
        </div>
    </div>
</div>
<div class="card">
    <div  id="headingThree">

    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="card-body">
        Nenávidená a zároveň milovaná pieseň Wonderwall. Radím ti, aby táto bola tvojou vstupnou a naučil si sa hrať jej začiatok. Prehadzuješ akordy Em, G, D a A. Túto klasiku od Oasis si pusti nahlas a skús prísť na rytmus sám. V týchto momentoch si začneš vytvárať vlastný štýl hrania. Prehadzovanie akordov je inými slovami ich striedanie. Obe ruky niečo robia, ľavá mení akordy a pravá hrá rytmus. Musíš na ne myslieť ako celok a nezameriavať sa viac na jednu či druhú. Pokiaľ všetko skĺbiš, naučíš sa meniť akordy a hrať akúkoľvek pieseň.
        </div>
    </div>
</div>
</div>
</div>
         <!-- End Start Stepper HTML -->
 </main>
 
  <footer class="credit">Odkaz na stránku <a title="Awesome web design code & scripts" href="https://plotpoint.sk/chces-sa-naucit-hrat-na-gitare/" target="_blank">Plotpoint.sk</a></footer>
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script>
const stepButtons = document.querySelectorAll('.step-button');
const progress = document.querySelector('#progress');

Array.from(stepButtons).forEach((button,index) => {
    button.addEventListener('click', () => {
        progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

        stepButtons.forEach((item, secindex)=>{
            if(index > secindex){
                item.classList.add('done');
            }
            if(index < secindex){
                item.classList.remove('done');
            }
        })
    })
})
</script>
  </body>
</html>
<?php include_once 'footer/fot.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
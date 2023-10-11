<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  <?php
  $bio = [
    'name' => 'Matt',
    'surname' => 'McDonald',
    'profession'=>'Designer Developper',
  ];


  $skillset['vis'] = "Visual Design";
  $skillset['illustr'] = "Illustration";
  $skillset['ux'] = "UX / Prototyping";
  $skillset['vid'] = "Video / Motion Graphics";
  $skillset['mark'] = "Marketing Front-End Development";

  $awards = [
    'number1'=>'Award 1','date1'=> ' - Mar.2019',
    'number2'=>'Award 2', 'date2'=> ' - Sept.2015',
    'number3'=>'Award 3', 'date3'=> ' - Feb.2013',
    'number4'=>'Award 4', 'date4'=> ' - Dec.2011',
    'number5'=>'Award 5', 'date5'=> ' - Jan.2005',
  ]
?>
  </head>
  <body>
    <header>
        <div>
      <img class="photo1" src="img/hff.png" alt="" />
    </div>
    <div class="jdjd">
      <h3 class="first-text"><?php echo $bio['profession']?></h3>
      <h1><?php echo $bio['name']?><br /><?php echo $bio['surname']?></h1>
      <button>CONTACT ME</button>
    </div>
    </header>
    <main>
      <section class="container">
        <h2>About me</h2>
        <p>
          Use this area to say something about yourself or describe your goals.
          Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat,
          ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos,
          qui blanditiis praesentium voluptatum deleniti atque insitam in ea
          quid est eligendi optio, cumque nihil ut ipsi auctori huius
          disciplinae placet: constituam, quid.
        </p>
        <div><img src="img/Rectangle (1).png" alt="" srcset=""></div>
        <h2>Exprience</h2>
        <?php
        $Experience =[ 
                ['position'=>'Front-End Developer'],
                ['workplace'=>'Dropbox',],
                ['start'=>'Mar. 2020'],
                ['end'=> 'Present'],
                ['description'=> 'Describe your responsibilities.  Tum dicere exorsus est cur verear, ne ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia consequuntur magni dolores eos, qui blanditiis praesentium voluptatum deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut ipsi auctori huius disciplinae placet: constituam, quid',]]
        ?>
        <div class="date">
        <h3><?=
                 $Experience[0] ['position'] . ' — ' . $Experience[1]['workplace']
                ?></h3>
        <p><?=
            $Experience[2] ['start'] . ' - ' . $Experience[3]['end']
            ?></p>
    </div>
        <p>
        <?=
            $Experience[4] ['description']
        ?>
        </p>
        <div class="date">
        <h3>Visual Designer — OutboundEngine</h3>
        <p>Sept. 2017 - Mar. 2020</p>
    </div>
        <p>
          Describe your responsibilities. Tum dicere exorsus est cur verear, ne
          ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia
          consequuntur magni dolores eos, qui blanditiis praesentium voluptatum
          deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut
          ipsi auctori huius disciplinae placet: constituam, quid.
        </p>
        <div class="date">
        <h3>Lead Designer — Scrypt, Inc.</h3>
        <p>Jun. 2014 - Sept. 2017</p>
    </div>
        <p>
          Describe your responsibilities. Tum dicere exorsus est cur verear, ne
          ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia
          consequuntur magni dolores eos, qui blanditiis praesentium voluptatum
          deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut
          ipsi auctori huius disciplinae placet: constituam, quid.
        </p>
        <div class="date">
        <h3>UI Designer — Pinger Inc.</h3>
        <p>Jun. 2014 - Sept. 2017</p>
    </div>
        <p>
          Describe your responsibilities. Tum dicere exorsus est cur verear, ne
          ad id omnia referri oporteat, ipsum per se ipsam voluptatem, quia
          consequuntur magni dolores eos, qui blanditiis praesentium voluptatum
          deleniti atque insitam in ea quid est eligendi optio, cumque nihil ut
          ipsi auctori huius disciplinae placet: constituam, quid.
        </p>
        <div><img src="img/Rectangle (1).png" alt="" srcset=""></div>
        <h2>Education</h2>
        <div class="date">
        <h3>BFA in Graphic Design — James Madison University</h3>
        <p>Graduated 2014</p>
    </div>
       </section>
    <section class="part1">
        <div><img class="pupsik" src="img/Rectangle (1).png" alt="" srcset=""></div>
        <h3>Skillset</h3>
        <p>
            <br><?php echo $skillset['vis']?> <br> <?php echo $skillset['illustr']?>  <br><?php echo $skillset['ux']?> <br><?php echo $skillset['vid']?> <br>
            <?php echo $skillset['mark']?>
        </p>
        <h3>Awards</h3>
        <p class="otstup">
        <br><?php echo $awards['number1']; echo $awards['date1']?><br><?php echo $awards['number2']; echo $awards['date2']?> <br><?php echo $awards['number3']; echo $awards['date3']?> <br><?php echo $awards['number4']; echo $awards['date4']?><br><?php echo $awards['number5']; echo $awards['date5']?>
        </p>
        <h3>Career Traits</h3>
        <p class="otstup">
          <b> Holistic Designer </b> - Design should be treated as a living
          organism, guided by the environment it lives in as a whole.
        </p>
        <p class="otstup">
          <b>User-Focused</b> - I pay close attention to the user’s needs and
          pain points. I design with empathy. Launch, learn & iterate.
        </p>
        <p class="otstup">
          <b>Proactive Evolution</b>- Curiosity and a desire to learn constantly
          broadens my skill set, enabling me to wear many hats at once.
        </p>
        <p class="otstup">
          <b>Bold, yet practical</b> - I know when to push the boundaries vs.
          when to embrace simplicity to meet multiple deadlines.
        </p>
        <h3>Recent Works</h3>
        <div class="pupa2">
          <a href="">thedonut.co → </a>
          <a href="">outboundengine.com → </a>
          <a href=""> rswalsh.com → </a>
          <a href="">frondaustin.com → </a>
          <a href=""> tipyo.net → </a>
          <a href="">codefresh.io → </a>
          <a href=""> carsoncreekranch.com →</a>
        </div>
    </section>  
    </main>
    <footer>
      <div class="pupa">
        <h2>Get in touch!</h2>
        <a href=""><?php echo 'pupsik@mail.ru'?></a>
      </div>
      <section class="pupa3">
        <img src="img/facebook.png" alt="" /><img
          src="img/instagram.png"
          alt=""
        /><img src="img/linkedin.png" alt="" /><img
          src="img/twitter.png"
          alt=""
        />
      </section>
    </footer>
  </body>
</html>




<?php
$NameError="";
$PrezimeError="";
$EmailError="";

if(isset($_POST['potvrdi'])){
  if(empty($_POST["ime"])){          /*ako je prazno "NameError"*/ 
    $NameError="Unesite Vaše ime";
  }
  else{
    $Name=Test_User_Input($_POST["ime"]);
    if(!preg_match("/^[A-Ža-ž. ]*$/", $Name)){      
      $NameError="Unjeli ste pogrešno Vaše ime";  /* ako je sintaksa kriva */
    }
  }
    if(empty($_POST["prezime"])){
       $PrezimeError="Unesite Vaše prezime";  /*ako je prazno "PrezimeError"*/
}
    else{
      $Prezime=Test_User_Input($_POST["prezime"]);
      if(!preg_match("/^[A-Ža-ž. ]*$/", $Prezime)){   
        $PrezimeError="Unjeli ste pogrešno Vaše prezime"; /* ako je sintaksa kriva */
      }
    } 
      if(empty($_POST["email"])){
        $EmailError="Unesite Vašu E-mail adresu";   /*ako je prazno "EmailError"*/
      }
      else{
        $Email=Test_User_Input($_POST["email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._]{2,}/", $Email)){
          $EmailError="Unesite validnu E-mail adresu";
        }
      }
$Connection = mysqli_connect("localhost","id7101628_ivandelac","123456","id7101628_baza");
// provjeri spajanje na bazu
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$Query = "INSERT INTO korisnici_record(Ime,Prezime,Email)
          VALUES('".$_POST["ime"]."','".$_POST["prezime"]."','".$_POST["email"]."')";
         $Execute=mysqli_query($Connection,$Query);


}

function Test_User_Input($Data) {
  return $Data;
}

?>



<!DOCTYPE html>


<html lang="hr">
 

 <head>

 	<title>Paleo</title>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OWS projekt">
    <meta name="keywords" content="php, html, css, jquery">
    <meta name="author"  content="Ivan Delač">

    <!-- CSS ZA BOOTSTRAP FRAMEWORK -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- STAJL CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--GUGL FONTOVI-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,500i,700,700i" rel="stylesheet" type="text/css">
     
    <!--prekrasanFONT-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>

   <body>
     <!-- Header dio -->
	<header class="header">
     

       <div class="header-overlay">
           
           <div class="container header-container">
               
               <div class="row">
                   
                   <div class="col-md-12">
                      
                      <div class="logo text-center">
                          
                          <img src="images/logo.jpg" alt="logo">

                      </div> 


                   </div>

               </div>

                  <div class="row">
                      
                      <div class="col-md-8">
                          
                          <div class="header-text">
                              
                                <h1> Paleo dijeta - povratak korijenima</h1>
                                <p> Paleo dijeta svodi se na prehranu kakvu je čovjek imao u vrijeme paleolitika, prije razvoja poljoprivrede. Zagovornici paleo prehrane svoju teoriju baziraju na pretpostavci da naš organizam nije mogao dovoljno brzo pratiti prehrambenu i prerađivačku industriju. </p>

                          </div>

                             <div class="header-btns">
                                 <!--js skrola na kraj stranice -->
                                 <a class="btn btn-download" href="javascript: document.body.scrollIntoView(false);">Naruči</a>
                                 <a class="btn btn-tour"     href="#">Prijavi se
                                 
                             </a>


                             </div>


                      </div>
                   
                       <div class="col-md-3">
                           
                            <div class="header-mobitel">
                                
                                <img src="images/mobitel-header.png" alt="mobitel iphone">

                            </div>  

                       </div>


                  </div>

           </div>


       </div>


    </header>

   
<!-- O nama -->
    <section>

        <div class="container">
            
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
                    
                   <div class="section-title">
                       
                       <h2> Nešto o paleo prehrani </h2>
                       <p>Razvojem poljoprivrede neke su nam namirnice sada postale mnogo dostupnije nego nekada i čine glavninu prehrane. Isto se odnosi i na prerađenu hranu koja se u zadnjih nekoliko 10-aka godina nudi na svakom kutku. Smatraju da je naš probavni sustav ostao tamo negdje u paleolitiku, a naš jelovnik je prebrzo preskočio neke faze razvoja te se danas bazira na prehrambenim preporukama koje promoviraju da 60 % jelovnika čine žitarice kojih nekada nije bilo u izobilju.

                       Posljedice su neadekvatna apsorpcija hranjivih tvari, nadutost i općenito loša probava, kao i razvoj modernih bolesti. Općenito, sva hrana koja nam stvara bilo koji vid probavnih smetnji pridonosi razvoju upalnih procesa. Upalni procesi pogoduju razvoju raznih bolesti kao posljedice opadanja imuniteta.</p>

                   </div> 
                </div>
            </div>


        </div>
         
         <div class="osnova-wraper">
             
             <div class="container">
                 
                 <div class="col-md-6">
                     
                     <!--Paleo circle -->
                     <div class="about-paleo">
                         
                         <img src="images/about-paleo.png" alt="paleo circle">

                     </div>
                 </div>
                 <div class="col-md-6">

                    <!-- Osnova paleo -->
                    <div class="osnova-title">
                        
                        <h2> Osnova Paleo prehrane</h2>
                        <p>Strogo reducira unos ugljikohidrata pa tako zabranjuje paleo brašna, sve voće osim bobičastog i zaslađivače, dopušta mliječne proizvode, a u umjerenim količinama sugerira određene orašaste plodove i sjemenke.</p>
                    </div>
                     
                     <!--osnove  -->
                     <div class="osnova-des">
                         
                         <!-- osnova 1 -->
                         <div class="osnova-item">
                             
                             <!--ikona osnova 1-->
                             <div><i class="fa fa-bolt"></i></div>

                             <!-- opis osnova 1  -->
                             <h3>Iskoristite moć vizualizacije.</h3>
                             <p> Razmišljajte intenzivno o tome kako se osjećate dobro u svome tijelu i proživljavajte taj osjećaj kao da je već postao vaša stvarnost. Zamišljajte da ste poletni, lagani, bistri, koža vam je sjajna i blistava, a probava redovita i uredna.</p>
                         </div>
                         
                         <!--osnova 2-->
                         <div class="osnova-item">
                             
                             <!--osnova ikona 2 -->
                             <div><i class="fa fa-bullhorn"></i></div>

                             <!-- opis osnove 2 -->
                             <h3>Identificirajte namirnice za koje se brinete da će vam najviše nedostajati i nađite si ukusne alternative. </h3>
                             <p>Najčešće se tu radi o pecivima i kruhu. Isprobavajte recepte za paleo kruhove, peciva, krekere, tortilje. Nađite si 2-3 recepta, nabavite namirnice i problem riješen.</p>
                         </div>
                          
                          <!--osnova 3-->
                         <div class="osnova-item">
                             
                             <!--osnova ikona 2 -->
                             <div><i class="fa fa-flag-o"></i></div>

                             <!-- opis osnove 3 -->
                             <h3>Fokus prebacite sa razmišljanja o namirnicama koje više nećete jesti, na osjećaj da radite nešto što je dobro za vaše tijelo.</h3>
                             <p>Čitajte o namirnicama koje su nutritivne, koje će donijeti toliko potrebne tvari vašem tijelu i vratiti vaš metabolizam u ravnotežu.</p>
                         </div>

                     </div>
                        

                 </div>

             </div>
         </div>

    </section>
	 <!--Bootstrap i Javascript-->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <!--korisnici -->
    <section class="korisnici">
        
        <div class="korisnici-overlay">
           
          <div class="container">

            <div class="row">
                
                <div class="col-md-12">

                    <div id="carousel-korisnici" class="carousel slide" data-ride="carousel">
                        

                        <!--indikatori za slajdanje-->
                        <ol class="carousel-indicators">
                            
                            <li data-target="#carousel-korisnici" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-korisnici" data-slide-to="1"></li>
                            <li data-target="carousel-korisnici" data-slide-to="2"></li>
                        </ol>

                    <!-- wrapper za slajdanje -->
                    <div class="carousel-inner">
                        
                        <!--korisnik 1-->
                        <div class="item active text-center">

                            <img src="images/korisnik-01.jpg" alt="korisnici" class="center-block">

                            <div class="korisnici-caption">

                                <h2>Ivan</h2>
                                <h4><span>Zadovoljni korisnik<br></span>Paleo prehrane</br></h4>
                                <p>Paleo ishrana je jako dobra, i ne znam nikoga kome ne odgovara - mislim za organizam. E, sad, glavno pitanje je koji je tvoj motiv? Zdrav način života? Rješavanje tegoba/oboljenja?</p>

                        </div>

                    </div>

                    
                       <!--korisnik 2-->
                        <div class="item text-center">

                            <img src="images/korisnik-02.jpg" alt="korisnici" class="center-block">

                            <div class="korisnici-caption">

                                <h2>Marko</h2>
                                <h4><span> Zadovoljni korisnik<br></span>Paleo prehrane</br></h4>
                                <p>Zdravo, ukusno i odlično za organizam, prirodna hrana a ne plastika i kemija koju inače jedemo.E sad šta je skuplje, gomila lijekova ili prirodna hrana?</p>

                        </div>

                    </div>
                       
                       <!--korisnik 3-->
                        <div class="item text-center">

                            <img src="images/korisnik-03.jpg" alt="korisnici" class="center-block">

                            <div class="korisnici-caption">

                                <h2>Hrvoje</h2>
                                <h4><span> Zadovoljni korisnik<br></span>Paleo prehrane</br></h4>
                                <p>Svi ti linkovi i recepti su dobri, a i prilagodljivi, ako neki sastojak ne možeš naći ili si priuštiti. Uopće ne mora biti skupa, ne moraju se korisiti nikakve egzotične namirnice, samo se vratiti ishrani svojih predaka.</p>

                        </div>

                    </div>

                    </div>
                    

                </div>
          
            </div>
       
         </div>

        </div>
     
      </div>
    
    </section>

    <!--Prednosti-->
    <section class="mobilna">
    	
    	<div class="container">
    		
    		<div class="row">
    			
    			<div class="col-md-10 col-md-offset-1">
    				
    				<div class="section-title">
    					
    					<h2> Mobilna aplikacija </h2>
    					<p>Od sada možete pregledavati svoje namirnice i naručivati svoju Paleo prehranu preko svog mobilnog uređaja!</p>
    				</div>
    			</div>
    		</div>
    	</div>
    
         <div class="mobilna-inner-wrapper">
         	
         	<div class="container">
         		
         		<div class="row">
         			
         			<div class="col-md-4">
         				
         				<!--lijevi dio ficra 1-->
         				<div class="lijevi-feature-item">
         					
         					<div class="lijevi-feature-item-icon">
         						
         						<i class="fa fa-desktop"></i>
         					</div>	
         				      <!--mobilna aplikacija-->
         				      <h3> web dostupnost </h3>
         				      <p>Naručite svoje namirnice jednim klikom miša na našim web stranicama!</p>
         				</div>
         			       
         			       <!--lijevi dio ficra 2-->
                           <div class="lijevi-feature-item">
         					
         					<div class="lijevi-feature-item-icon">
         						
         						<i class="fa fa-mobile"></i>
         					</div>	
         				      <!--opis dostupnosti-->
         				      <h3> mobilna aplikacija </h3>
         				      <p>Od sada imate mogučnost na svojim mobilnim uređajima pretraživati, naručivati Paleo prehranu i puno više!</p>
         				</div>
                           
                           <!--lijevi dio ficra 3-->
                           <div class="lijevi-feature-item">
         					
         					<div class="lijevi-feature-item-icon">
         						
         						<i class="fa fa-eye"></i>
         					</div>	
         				      <!--preglednost-->
         				      <h3> Preglednost aplikacije </h3>
         				      <p>Aplikacija je dizajnirana i napravljena kako bih vama bilo što jednostavnije i što manje koraka koristiti našu Paleo aplikaciju!</p>
         				</div>

         			</div>
         		  
         		   <div class="col-md-4">
         		   	
         		   	<div class="feature-iphone">
         		   		
         		   		<img src="images/iphone.png" alt="mobilna iphone">
         		   	</div>
         		   </div>

                  <div class="col-md-4">
                  	<!--desna strana mob apl 1-->
                  	<div class="desni-feature-item">
                  		<!--mala zelena ikonica 1-->
                  		<div class="desni-feature-item-icon">
                  			<i class="fa fa-certificate"></i>
                  		</div>
                  
                        <!--cert prehrana-->
                        <h3> certificirana prehrana </h3>
                        <p>Zagarantirano zdrava prehrana od brojnih svjetskih cerfikata kao jedna od najkvalitetnijih na tržištu.</p>   
                  	</div>
                      
                      <!--desna strana mob apl 2-->
                  	<div class="desni-feature-item">
                  		<!--mala zelena ikonica 2-->
                  		<div class="desni-feature-item-icon">
                  			<i class="fa fa-rss"></i>
                  		</div>
                  
                        <!--konst rjesenja-->
                        <h3> Konstantna rješenja </h3>
                        <p>Obratite nam se da vam složimo mjesečni plan prehrane i dostavimo pred vaša ulazna vrata!</p>   
                  	</div>

                      <!--desna strana mob apl 3-->
                  	<div class="desni-feature-item">
                  		<!--ikona 3-->
                  		<div class="desni-feature-item-icon">
                  			<i class="fa fa-database"></i>
                  		</div>
                  
                        <!--sigr podaci -->
                        <h3> sigurnost vaših podataka</h3>
                        <p>Vaši osobni podaci nikada neće doći u opasnost.</p>   
                  	</div>

                  </div>

         		</div>
         	</div>
         </div>
    </section>
<!--kupi sad -->
     <section class="kupi-odmah">
     	
     	<div class="container">
     		
     		<div class="row">
     			
     			<div class="col-md-9">
     				
     				<p>Ne oklijevajte probati jednu od najboljih i najkvalitetnijih prehrana koje nudimo!</p>
     			</div>
     		   <div class="col-md-3">

     		   	<a class="btn btn-primary btn-kupi-odmah" href="javascript: document.body.scrollIntoView(false);">Kupite odmah</a>
     		   </div>
     		</div>
     	</div>
     </section>

   <!--kontakt-->
   <section class="kontaktirajte-nas">
       
       <div class="container">
           
           <div class="row">
               
               <div class="col-md-10 col-md-offset-1">
                   
                   <div class="section-title">
                       
                       <h2>Kontaktirajte nas</h2>
                       <p>Moderan način prehrane koja se temelji na procesiranoj nutritivno siromašnoj hrani prepunoj aditiva i štetnih sastojaka, te zbog pogrešnih informacija o prehrani i zdravlju, većina ljudi ima neke zdravstvene probleme kao što su npr alergije, intolerancija namirnica, dermatitis, anemija, iritabilni kolon, metabolički sindrom ili psihičke smetnje... Ili možda čak i nešto teže kao što su autoimune bolesti, upalne crijevne bolesti, dijabetes, pretilost ili neurodegenerativne bolesti. Ili ste sretnici koji još uvijek imaju samo neke dosadne tegobe koje ste prihvatili kao normalne: npr napuhani trbuh, neurednu stolicu, redovite migrene, nesanicu, neugodne promjene raspoloženja, višak kilograma, loš ten, akne, kronični umor i nedostatak enegije. Međutim, ništa od ovoga nije normalno. Nije normalno uzimati tablete za bolove, za spavanje, za smirenje, za žgaravicu, za ovo ili za ovo. Nije naša genetika pogrešna, prehrana je pogrešna</p>
                   </div>
               </div>
           </div>
       </div>
   
        <div class="kontaktirajte-nas-form">
            
            <div class="container">
                
                <div class="form">
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                            
                            <form action="index.php" method="post">
                            <input type="text" Name="ime" class="form-control" id="ime" placeholder="Ime">
                            <span class="Error">*<?php echo $NameError; ?></span><br> <!--fixat span-->
                            <input type="text" class="form-control" id="prezime" placeholder="Prezime" Name="prezime">
                            <span class="Error">*<?php echo $PrezimeError; ?></span><br>
                            <input type="email" class="form-control" id="email"
                            placeholder="Email" Name="email"><span class="Error">*<?php echo $EmailError; ?></span><br>

                        </div>
                    
                        <div class="col-md-8">
                            
                            <textarea class="form-control" Name="poruka" id="poruka" rows="15" cols="10" placeholder="Tekst poruke..."></textarea>

                            <input type="submit" Name="potvrdi" class="btn btn-default potvrdi-btn form_sumbit" id="potvrdi" value="Potvrdi">

                        </div>   
                    </div>
                </div>
            </div>
        </div>
   
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="social-icons">
                        
                        <ul>
                            <!--fensi social ikone-->
                            <li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   </section>
  
   <footer class="footer">
       

       <div class="container">
           
           <div class="row">
               
               <div class="col-md-6">
                   
                   <div id="copyright">
                       <p>Copyright &copy; 2018 Delač Ivan</p>
                   </div>
               </div>
               
               <div class="col-md-6">
                    <div class="scroll-top">
                  <!-- dost dobra fora i easy vracanja na top stranice-->
                   <a href="#"><i class="fa fa-angle-up"></i></a>
                    </div>
               </div>
           </div>
       </div>
   </footer>

   </body>

</html>


<?php include 'process.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/hi5_logo.png" type="image/x-icon">
    <script 
        src="https://code.jquery.com/jquery-3.5.0.min.js" 
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" 
        crossorigin="anonymous" defer>
    </script>
    <script 
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" 
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" 
    crossorigin="anonymous" defer>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <title>Hi5 - Africa</title>
</head>
<body>
    <ul>
        <li ><img class='logo' class="scroll" src='img/hi5_logo.png' alt='logo'></li>
        <span class="fas fa-bars fa-2x menuIcon"></span>
        <span class="nav">
            <li class="btm lis hide"><a class="scroll" href="#start" ></a></li>
            <li class="btm lis"><a class="scroll" href="#about" >About Us</a></li>
            <li class="lis"><a class="scroll" href="#service" >What we do</a></li>
            <li class="lis"><a class="scroll" href="#event" >Our Events</a></li>
            <li class="lis"><a class="scroll" href="#meet" >Meet the team</a></li>
            <li class="lis"><a class="scroll" href="#contact" >Contact Us/Register</a></li>
        </span>
        <h2 class="topLink"><a class="scroll1" href="#ibmc">#<span class="diffy">IBMC</span><b class="diffy21"> 2021</b></a>
        <!-- <img src="img/round.png" width="40px" alt=""> -->
        </h2>
    </ul>
    <div id='start' class="main">
        <img src="img/hi5Ban.jpg" class="ban" alt="">
        <div class="page1 page" id="about">
            <div class='text'>
                <h1>About Us</h1><br ><br >
                <p>Hi5_Africa is an NGO that's keen to promoting and empowering 
                    african excellence, hereby showcasing, promoting, developing 
                    African ideas, skills and creativity across the globe.</p>
                <!-- <img class='smlogo' src='img/logo.png' alt=''><br > -->
                <a class="scroll1" href="#service"><button class="bgbt">Discover more</button></a>
            </div>
            <img class="abt" src="img/Africa.png" alt="ladies" >
        </div>
        <!-- <div class="tint"></div> -->
        <div class="page2 page" id="service">
            <div class='text1'>
                <h1>What We Do</h1><br ><br >
                <span><hr ></span>
                <p>Hi5 Africa is on the verge of creating a strong platform 
                    for the unseen and unheard creators and successful entrepreneurs 
                    in Africa at any level to connect, empowered and be connected across the world.</p>
            </div>
            <div class="svcont">
                <div class="tab tab1">
                    <div class="doband">
                        <img class="do" src="img/48.jpg" alt="">
                    </div>
                    <h3><span class="diff">Empower</span></h3>
                </div>
                <div class="tab tab2">
                    <div class="doband">
                        <img class="do" src="img/10.jpg" alt="">
                    </div>
                    <h3><span class="diff">Support</span></h3>
                </div>
                <div class="tab tab3">
                    <div class="doband">
                        <img class="do" src="img/14.jpg" alt="">
                    </div>
                    <h3><span class="diff">Connect</span></h3>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="page3 page" id="event">
            <div class="text2">
                <h1>Our Events</h1><br >
                <span class="otherS"><hr ></span>
            </div>
            <div class="events">
                <div class="htd">
                    <img class="htdp" src="img/htd.jpg" alt="">
                </div>
                <div class="gallery">
                    <div class="picdis">
                    <img src="img/gallery_img/89.jpg"  width="95.4%" ><h3>click on tabs to preview images from Hand to do</h3>
                        <script>
                            // $(document).ready(function(){
                                function display(a){
                                    // let a = '1.jpg';
                                    // alert("seen");
                                    // var filepath = $('/img/gallery_img/').val();
                                    // alert (filepath);
                                    $.ajax({
                                        // alert("ajax");
                                        type: "POST",
                                        data:'id='+a,
                                        url:"img.php",
                                        // type: 'GET',
                                        // data: {'ext':ab },
                                        // contentType: false,
                                        // processData: false,
                                        success:function(result)
                                        {
                                            // alert(result);
                                            $(".picdis").html(result);
                                            // $().innerHTML = result;
                                                // $("#img").attr("src",result); 
                                                // $(".picdis img").show(); // Display image element
                                            // $('.picdis').text(result);
                                            // if(response != 0){
                                                
                                            // }else{
                                            //     alert('file not uploaded');
                                            // }
                                        }
                                    })
                                }
                            // }
                            
                        
                        </script>

                    </div>
                    <div class="grid">
                        <img class = "1.jpg" src="uploads/1.jpg" alt="" onclick="display('1.jpg')">
                        <img class="twocol 8.jpg" src="uploads/8.jpg" alt="" onclick="display('8.jpg')">
                        <img class = "10.jpg" src="uploads/10.jpg" alt="" onclick="display('10.jpg')">
                        <img class="tworow 12.jpg" src="uploads/12.jpg" alt="" onclick="display('12.jpg')">
                        <img class="twocol 13-1.jpg" src="uploads/13-1.jpg" alt="" onclick="display('13-1.jpg')">
                        <img class="14.jpg" src="uploads/14.jpg" alt="" onclick="display('14.jpg')">
                        <img class="16-1.jpg" src="uploads/16-1.jpg" alt="" onclick="display('16-1.jpg')">
                        <img class="19.jpg" src="uploads/19.jpg" alt="" onclick="display('19.jpg')">
                        <img class="2.jpg" src="uploads/2.jpg" alt="" onclick="display('2.jpg')">
                        <img class="21-2.jpg" src="uploads/21-2.jpg" alt="" onclick="display('21-2.jpg')">
                        <img class="22.jpg" src="uploads/22.jpg" alt="" onclick="display('22.jpg')">
                        <img class="twocol 23-1.jpg" src="uploads/23-1.jpg" alt="" onclick="display('23-1.jpg')">
                        <img class="28.jpg" src="uploads/28.jpg" alt="" onclick="display('28.jpg')">
                        <img class="31.jpg" src="uploads/31.jpg" alt="" onclick="display('31.jpg')">
                        <img class="35.jpg" src="uploads/35.jpg" alt="" onclick="display('35.jpg')">
                        <img class="38.jpg" src="uploads/38.jpg" alt="" onclick="display('38.jpg')">
                        <img class="twocol 39.jpg" src="uploads/39.jpg" alt="" onclick="display('39.jpg')">
                        <img class="45.jpg" src="uploads/45.jpg" alt="" onclick="display('45.jpg')">
                        <img class="46.jpg" src="uploads/46.jpg" alt="" onclick="display('46.jpg')">
                        <img class="48.jpg" src="uploads/48.jpg" alt="" onclick="display('48.jpg')">
                        <img class="tworow 49.jpg" src="uploads/49.jpg" alt="" onclick="display('49.jpg')">
                        <img class="5.jpg" src="uploads/5.jpg" alt="" onclick="display('5.jpg')">
                        <img class="50.jpg" src="uploads/50.jpg" alt="" onclick="display('50.jpg')">
                        <img class="54.jpg" src="uploads/54.jpg" alt="" onclick="display('54.jpg')">
                        <img class="55.jpg" src="uploads/55.jpg" alt="" onclick="display('55.jpg')">
                        <img class="57.jpg" src="uploads/57.jpg" alt="" onclick="display('57.jpg')">
                        <img class="twocol 58.jpg" src="uploads/58.jpg" alt="" onclick="display('58.jpg')">
                        <img class="tworow 60.jpg" src="uploads/60.jpg" alt="" onclick="display('60.jpg')">
                        <img class="61.jpg" src="uploads/61.jpg" alt="" onclick="display('61.jpg')">
                        <img class="tworow 65.jpg" src="uploads/65.jpg" alt="" onclick="display('65.jpg')">
                        <img class="tworow 66.jpg" src="uploads/66.jpg" alt="" onclick="display('66.jpg')">
                        <img class="twocol 86.jpg" src="uploads/86.jpg" alt="" onclick="display('86.jpg')">
                        <img class="tworow 89.jpg" src="uploads/89.jpg" alt="" onclick="display('89.jpg')">
                        <img class="87.jpg" src="uploads/87.jpg" alt="" onclick="display('87.jpg')">
                        <img class="77.jpg" src="uploads/77.jpg" alt="" onclick="display('77.jpg')">
                        <img class="8.jpg" src="uploads/8.jpg" alt="" onclick="display('8.jpg')">
                        <img class="73.jpg" src="uploads/73.jpg" alt="" onclick="display('73.jpg')">
                    </div>
                </div>
            </div>
        </div>
        <style>
            
            
        </style>
        <div id="ibmc" class="pagesub page" id="event">
            <div class="block1">
                <h2 >#<span class="diffy">IBMC</span><span class="diffy21"> 2021</span></h2>
                <p>

                B.B king says "The beautiful thing about learning is that nobody can take it away from you."

                Learning never stops and whatever you learn is yours.

                It is True what Henry Ford says about learning that... "Anyone who stops learning is Old, whether at twenty or eighty.

                The business world is rapidly evolving, so as the tech and media industries, but the smart ones are those that are always ready to evolve with it and take opportunities.

                That's why Hi5_africa Nigeria has come up with an initiative to improve and develop the media business across states. Introducing to you <b>"MEDIA CONNECT"</b></p>



                <div class= "argtext">
                    <p><b>MEDIA CONNECT</b> is an Hi5_Africa initiative that is aimed at improving media skills and experience of media practitioners within and outside the states.

                    But this year's edition will be targeted at Oyo States and her environment. 

                    So are you ready Ibadan?

                    Here is another opportunity to learn, unlearn, and Re-learn from the professionals.

                    As we bring to you

                    <b>"IBADAN MEDIA CONNECT 2021"</b>
                    first edition. 
                    
                    Tagged <b>"THE MODERN MEDIA"</b></p>





                    <p><b>What is IBADAN MEDIA CONNECT (IBMC)?</b>

                    <b>"IBADAN MEDIA CONNECT"</b> is a day conference that would be bringing together hundreds of media personnels on a platform where young media enthusiast, or practicing media personnels meet and connect with professionals in the media field. To learn more about meeting up with the modern media, and monetizing your media skill.</p>
                </div>
                

                <p><b>What should I expect at the IBMC?</b><br >

                - Lots of benefit has been associated in attending IBMC 2021, as you'd be chanced to meet, connect and interact directly with professionals in the media field, which also comes along with understanding the recent developments in the media industry and how you can monetizing your media skill. 

                What else is sweeter than getting the right mindset for one's business...<br >

                - You also get to be registered with any of the academies at the end of the training! </p>

                

                <p><b>Who are those that are qualified to attend?</b>

                IBMC 2021, is aimed at students, media practitioners and professionals or simply curious media enthusiast where they all connect and learn from professionals in the media field and also to highlight the business and commercial aspect of media.</p>
            </div>
            <div class="block2">
                <ul>
                    <img src="img/ibmc.jpg" class= "ibmc"/>
                    <h2>Registration Steps to follow!.</h2>
                   <li> Fill and submit the form via the link below.
                    <a href="https://bit.ly/3rERp6Z">Click here</a> </li>


                    <li> kindly pay the sum of #1000 into this account 2003175743 (KUDA BANK) (KOLADE EMMANUEL)</li>


                    <li> Send a screenshot or payment details to this WhatsApp number +234 902 806 8445</li>

                    <li> Ensure you receive your payment Confirmation Note and your Registration Number from the number above.</li>


                    <li> it is important to join the WhatsApp group for update. click the link below to join.
                    <a href="https://chat.whatsapp.com/D7usscwI2FJ2IKhX2EyKvw">Click here</a> </li>
                </ul>
            </div>
        </div>
        <div class="ibmcsub">
            <p>So Ibadan people are you ready?

            Come! Let's connect, meet, and interact directly with media experts at the <b>IBADAN MEDIA CONNECT 2021</b>, <br >coming up on the <b>27th of February 2021.</b><br >

            <b>Time: 9:00am prompt.</b><br >

            <b>Venue:</b> RCCG, Potter's House, Area HQ, No 38, Vono Complex, Beside Adolak filling station, Ui-Sango Road, Samonda, Ibadan. Oyo State.<br >

            <b>Registration fee: #1000</b><br >

            come and experience from the experienced...

            <br >This event is brought to you by Hi5_africa and proudly supported by Cute Orange Media...

            Don't miss it!</p>
        </div>
        <div class="page4 page" id="meet">
            <div class="text3">
                <h1>Our <span class="diffy">Team</span></h1><br >
                <span class="otherS"><hr ></span>
            </div>
            <div class="teamblock">
                <img class="teamImg" src="img/Africaback.png" alt="">
                <img class="teamImg2" src="img/Africaback2.png" alt="">
                <div class="tint1"> </div>
                <div class="teamcont">
                    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Ea voluptate harum obcaecati quisquam nostrum nihil adipisci 
                        aspernatur nesciunt repellat quis.
                         <span class="otherS"><hr ></span>
                    </p> -->
                    <div class="directors">
                        <div>
                            <img src="img/bod/KDE.png" alt="">
                            <h3 class="name">Kolade Damilare E.<br ><span class="office">President</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/Oreh.png" alt="">
                            <h3 class="name">Adeyinka Oreoluwa<br ><span class="office">Managing Director</span></h3>
                        </div>
                        <div>
                            <img src="img/bod/Moyo.png" alt="">
                            <h3 class="name">Awodola Moyosore<br ><span class="office">Asst. Managing Director</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/tobiloba.png" alt="">
                            <h3 class="name">Oladele Tobiloba<br ><span class="office">Project Director</span></h3>
                        </div>
                        <div>
                            <img src="img/bod/Tayo.png" alt="">
                            <h3 class="name">Omojola Tolu<br ><span class="office">Asst. Project Director</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/Matthew.png" alt="">
                            <h3 class="name">Bolaji Matthew<br ><span class="office">Content / Web Analyst</span></h3>
                        </div>
                        <div>
                            <img src="img/bod/DAMI.png" alt="">
                            <h3 class="name">Okewole Damilola<br ><span class="office">Graphics Designer</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/SEUN.png" alt="">
                            <h3 class="name">Oluwaseun Habeeb<br ><span class="office">Asst. Graphics Designer</span></h3>
                        </div>
                        <div>
                            <img src="img/bod/gabriel.png" alt="">
                            <h3 class="name">Ita Gabriel<br ><span class="office">Photographer</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/BOD_temp.png" alt="">
                            <h3 class="name">Abiola O. Oludayo<br ><span class="office">Videographer</span></h3>
                        </div>
                        <div>
                            <img src="img/bod/Bigi.png" alt="">
                            <h3 class="name">Idris Tolulope<br ><span class="office">Social Media Strategist</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/Holi.png" alt="">
                            <h3 class="name">Nosa Daniel<br ><span class="office">Asst. Social Media Strategist</span></h3>
                        </div>
                        <div>
                            <img src="img/bod/Titi.png" alt="">
                            <h3 class="name">Titilayo Akintola<br ><span class="office">Welfare / Financial Secretary</span></h3>
                        </div>
                        <div class="sec">
                            <img src="img/bod/Bllessing.png" alt="">
                            <h3 class="name">Fasola Blessing<br ><span class="office">Welfare / Treasurer</span></h3>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="page5 page" id="contact">
            <div class="text4">
                <h1>Contact Us</h1><br >
                <span class="otherS"><hr ></span>
            </div>
            <div class="form">
                <script>
                    // function display(a){
                    //                 $.ajax({
                    //                     type: "POST",
                    //                     data:'id='+a,
                    //                     url:"process.php",
                    //                     success:function(result)
                    //                     {
                    //                         $(".showAlert").html(result);
                    //                     }
                    //                 })
                    //             }
                    
                </script>
                <div class="showAlert"></div>
                <form method="POST" action="index.php">
                    <div>
                        <input type="text" autocomplete="off"  name="name" size="30" id="" required>
                        <label for="name" >Name</label>
                    </div>
                    <div>
                        <input type="email" name="email" autocomplete="off" size="30" id="" required>
                        <label for="email" >Email</label>
                    </div>
                    <div>
                        <input type="text"  name="subject" autocomplete="off" size="30" id="" required>
                        <label for="subject" >Subject</label>
                    </div>
                    <div style="margin-bottom: 0px">
                        <textarea class="message-box" name="message" rows="5" required></textarea>
                        <label  for="message" >Message</label>
                    </div>
                    <button id="contact-submit" type="submit" name="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <div>
                <a href="https://m.facebook.com/Hi5africa/" class="info-set">
                    <i class="fab fa-facebook-f ">
                    </i>
                    
                </a>
                <a href="https://www.instagram.com/hi5_africa.ng/" class="info-set1">
                    <i class="fab fa-instagram">
                    </i>
                    
                </a>
                <a href="https://twitter.com/Hi5_Africa?s=09" class="info-set2">
                    <i class="fab fa-twitter">
                    </i>
                    
                </a>
            </div>
            <text>ENQUIRIES? call: +234 7018071779</text>
        </div>
    </footer>
</body>
</html>
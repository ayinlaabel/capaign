<?php
session_start();
?>


<?php

$errmsg = "";

if (strrchr($_SERVER['SCRIPT_NAME'],'/')==''){
    $script_name = $_SERVER['SCRIPT_NAME'];
} else {
    $script_name = substr(strrchr($_SERVER['SCRIPT_NAME'],'/'),1);
}		
$IsPostBack = ($_SERVER['REQUEST_METHOD'] == 'POST' && strpos(basename($_SERVER['HTTP_REFERER']),$script_name)!==false);
        
if ($IsPostBack){
/*
fullname
email
address
productOrder
dateOfDelivery
telephone
paymentType
*/
    if (empty($_POST['fullname'])||empty($_POST['phoneNumber'])||empty($_POST['address'])||empty($_POST['dateOfDelivery'])
        /* ||empty($_POST['telephone'])||empty($_POST['paymentType']) */){
        $errmsg = "Please complete the form!";
        echo "<script>location.href='http://testing.jemieslifestyleplus.com/Ulcer_home_remedies.php#orderForm';</script>";
        echo "<script src='err.js'></script>";
    } else {
        $email_subject = "ORDER FROM JEMIESLIFESTYLEPLUS.COM";
        $email_body = "Dear Merchant," . "<br />" .
                    "A new order has just been submitted on your website. See details below:" . "<br />" .
                    "Full Name: " . $_POST['fullname'] . "<br />" .
                    /*"Email: " . $_POST['email'] . "<br />" .*/
                    "Address: " . $_POST['address'] . "<br />" .
                    /*"Product Order: " . $_POST['productOrder'] . "<br />" .*/
                    "Date of Delivery: " . $_POST['dateOfDelivery'] . "<br />" .
                    /*"Telephone: " . $_POST['email'] . "<br />" .
                    "Payment Type: " . $_POST['paymentType'] . "<br /><br />" .*/
                    "Kindly respond promptly to the order." . "<br /><br />" .
                    "Yours sincerely," . "<br />" .
                    "JemiesLifeStyplus Webmaster";
                    
        // Email Information
    
        $email_to = /* "grace.abiodun@gmail.com, segunabiodun@yahoo.com" ;*/ /*"segunabiodun@yahoo.com"; */ "kraneabel@gmail.com"; /*You can add more emails and separate by comma */
        $email_from = "noreply@jemieslifestyleplus.com";
        $email_headers = "MIME-Version: 1.0\r\n";
        $email_headers.= "From: JemiesLifeStylePlus Webmaster <noreply@jemieslifestyleplus.com>" . "\r\n";
        $email_headers.= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $email_headers.= "Reply-To: noreply@jemieslifestyleplus.com" . "\r\n";

        
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {


        // $recaptcha_secret = "6Le5Vf0UAAAAAPJKmKKVylLZiRYnGxZvb-1EKa6e";
        // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        // $response = json_decode($response, true);

        // echo "Form Submit Successfully.";
            // Send Email
            $mailerResult = @mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $email_from);
        
            // Check For Errors
            if($mailerResult) {
                // Check if form was submitted:
                    // echo "<script src='test.js'></script>";
                    echo `<script> alert("Order as Been Placed!")</script>`;
            } else {
                echo "Error Sending Email!" . "<br><br>";
                print_r(error_get_last());
            }

        // if($response["success"] === true){
        //     // echo "Form Submit Successfully.";
        //     // Send Email
        //     $mailerResult = @mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $email_from);
        
        //     // Check For Errors
        //     if($mailerResult) {
        //         // Check if form was submitted:
        //             // echo "<script src='test.js'></script>";
        //             echo `<script> alert("Order as Been Placed!")</script>`;
        //     } else {
        //         echo "Error Sending Email!" . "<br><br>";
        //         print_r(error_get_last());
        //     }
        // }else{
        //     echo "<script>location.href='http://testing.jemieslifestyleplus.com/Ulcer_home_remedies.php#orderForm';</script>";
        //     echo "<script> alertify.error('You are a robot')</script>";
        // }


    }

        
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ged Rid of Bad Breath and Mouth Odour</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Proven Ways To Get Rid Of Bad Breath And Mouth Odour (HALITOSIS) Naturally</h1>
        <p class="lead">HERE IS THE 100% GUARANTEED SOLUTION TO GET RID OF BAD BREATH AND ANY MOUTH/TEETH PROBLEMS
            PERMANENTLY.</p>
        <hr class="my-4">
        <p>You must have been told that there is no solution to your bad breath or mouth odour, you must have
            experienced
            situation where people give you space or cover their nose, or even offer you menthos sweet when you are
            talking
            to them, or worse still, people quickly end their conversation with you and run for their sanity just
            because of
            your mouth odour</p>
        <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
    </div>
    <div class="container">
        <div class="media">
            <img src="images/bad-breath.jpg" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Dear Friend,</h5>
                <ul>
                    <li>Are you sick and tired of feeling Embarrassed and Humiliated by your bad breath? </li>
                    <li>Is your condition making you anxious about social situations, and affecting your Confidence and
                        Self-Esteem? </li>
                    <li>Do you worry that your breath might be ruining your Relationships with friends, spouse or
                        partner? 
                    </li>
                    <li>Are you constantly thinking about ways to cover up your bad breath? </li>
                    <li>Do you stay a certain distance away from people in fear that they will “find out” about your bad
                        breath? 
                    </li>
                    <li>Do you chew mints, use sprays and gargle mouthwash in an attempt to MASK your breath? </li>
                    <li>Are you concerned that your bad breath could be affecting your work relationships, and even your
                        career? 
                    </li>
                </ul>
            </div>
        </div>
        <div class="media">
            <div class="media-body">
                <p><i>And finally… </i></p>
                <ul>
                    <li>Do you just wish that there was a quick, cheap and 100% NATURAL remedy for bad breath?</li>
                </ul>
                <p>Mouth odour/Bad breath is beyond treatment of the mouth alone. You need to cleanse your inside too.
                </p>
                <p>I’m going to show you a proven and all-natural remedy for HALITOSIS, more commonly known as “bad
                    breath”,
                    which
                    will allow you to…</p>
                <ul>
                    <li>Say goodbye to that horrible dragon breath for good.</li>
                    <li>Boost your confidence and self-esteem. Throw away those mints, mouth sprays and chewing gum
                        packets
                        FOREVER,
                        and save heaps of money.</li>
                    <li>Get rid of your bad breath 100% NATURALLY!</li>
                    <li>Instantly improve your personal and work relationships (you’ll be amazed at the difference in
                        how
                        people
                        treat you when you don’t have stinking breath!)</li>
                    <li>Enjoy socializing again, without having to worry about your breath, or whether you’re likely to
                        offend the
                        nostrils of every “victim” you speak to.</li>
                    <li>Be so happy and confident in the freshness of your breath that you could literally grab and kiss
                        the
                        next
                        person you see!</li>
                    <li>Fix the ROOT CAUSE of your bad breath, rather than simply mask the SYMPTOMS, and say goodbye to
                        the
                        embarrassment and humiliation of bad breath FOREVER!</li>
                </ul>

            </div>
            <img src="images/HiRes.jpg" class="ml-3" alt="..." height="500">
        </div>
    </div>

    <div class="container">
        <p>Does that sound like something you want?</p>
        <p>If so, then I can help! </p>
        <p>I know EXACTLY what it’s like to suffer from HALITOSIS, otherwise known as bad breath.</p>
        <p>I know what it’s like to suffer the humiliation and embarrassment of people turning their heads away in
            disgust
            when you speak to them.</p>
        <p>I know how it can destroy your confidence, make you anxious about any social situation, and generally ruin
            your
            life…</p>
        <p>I know what it’s like to wake up in the morning with your breath being the first thing on your mind
            (especially
            if you have somebody lying next to you!)… to be constantly thinking about ways to cover it up at work, and
            to
            experience the panic that sets in when you realize you’ve forgotten your mints or mouth spray…</p>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p>Permit me to allow James share his personal experience and testimonies. James suffered bad breath for so
                long and
                was full of the frustration of not being able to find a solution – until now. He had no idea how to
                solve his
                bad breath problem either, until he stumbled on an incredibly effective and all-natural solution.</p>
            <p>My name is James, “Let me tell you how my bad breath nightmare started…”</p>
            <p>I worked as an Intern at a multi-national as a support staff, I am very good at my job, but as time went
                by, I
                noticed that I was always getting a sharp and quick response from those I worked with and those I
                provide
                support to, some of them give me some distance whenever they wanted to talk to me.</p>
            <p>I couldn’t make friends because everyone was just too official with me and they were very brief at
                talking to me.
                Nobody could tell me what the issue was that they noticed in me, but one faithful day, my boss walked up
                to me
                and asked me to see him in her office, allas she told me, she said, my dear, I don’t mean to embarrass
                you, but
                I must just tell you the truth, your mouth stinks, I think you have bad breadth.
            </p>
            <p>I felt like the ground should open up and swallow me, I felt so ashamed of myself, I just summoned
                courage and
                told her thank you ma and left her office.</p>
            <p>After that conversation with my boss when I got home I bought mouth wash, I washed my mouth with it
                several times
                daily, I brushed and wash my tongue three times daily yet I did not get the needed result.</p>
            <p>I went to the dentists for help, I only got reprimands, they said I should wash my mouth several times
                daily, I
                did not get much help there.</p>
            <p>I was almost thinking my stepmother had bewitched me until I found a leaflet on the seating desk of a
                shopping
                mall, apparently, it must have been given to someone who left it there before I got there. And guess
                what I
                found when I opened it….</p>
            <h3>REMEDY TO YOUR BAD BREATH…</h3>
            <p>My eyes popped open, I looked left and right to be sure that someone who knew me did not put it there, I
                moved to
                a corner and read every single information I found on the paper, I took my phone and called the number
                given and
                that was the beginning of the solution to my bad breath</p>
            <p>I discovered an incredibly effective remedy for my bad breath, and it was 100% safe and natural!</p>
            <p>Within just minutes, my breath was noticeably fresher and cleaner – and more importantly, my “Dragon
                Breath”
                hasn’t returned since.</p>
            <p>As soon as I was confident enough that this remedy worked all the time, I started sharing it with other
                bad
                breath sufferers.</p>
            <p>And every single one of them has experienced incredible results.</p>
            <h5>AND NOW YOU CAN TOO!</h5>
            <p>This natural remedy is also known to work for the following;</p>
            <ul>
                <li>Toothache</li>
                <li>Tooth Decay</li>
                <li>Bad Breath</li>
                <li>Gum (Periodontal) Disease</li>
                <li>Oral ulcer</li>
                <li>Mouth Sores</li>
                <li>Tooth Erosion</li>
                <li>Tooth Sensitivity</li>
                <li>Toothaches and Dental Emergencies</li>
                <li>Unattractive Smile</li>
                <li>Whiten teeth, etc</li>
            </ul>
            <p>If you are suffering from any of the above tooth conditions, then you would benefit from what I have to
                show you
            </p>
            <p>Whether you are having tooth decay or bad breaths already or your teeth is not white and you think you
                may need
                to see the dentist in the future…</p>
        </div>
    </div>
    <div class="container">
        <img src="" alt="">
        <!-- <h3>Introducing…</h3> -->
        <h1 class="text-center display-4 font-weight-bold">BRIGHTER TOOTHGEL</h1>
        <p class="lead">Bad breath is a common problem that can affect anyone at any age. It affects most people at some
            point, and
            it’s
            estimated about 1 in 4 people has bad breath on a regular basis.
        </p>
        <p class="lead">Forever Bright is created for the entire family – as well as your pets – this gentle,
            non-fluoride formula
            contains only the highest quality ingredients including aloe vera and bee propolis. Enjoy its natural mint
            flavour for a taste that will leave your mouth refreshed and your teeth clean. This toothgel is also
            suitable
            for vegetarians since it contains no animal by-products.</p>
        <p class="lead">It contains, aloe barbadensis gel (stabilized aloe vera gel), sorbitol, hydrated silica,
            glycerin, sodium
            laurylsulphate, carrageenan, flavour, bee propolis, sodium saccharin, sodium benzoate, chlorophyllin-copper
            complex. </p>
        <div class="alert alert-secondary">
            <h6>Usage:</h6>
            <p>Brush teeth after meals, have regular dental check-ups and avoid snacking between meals.</p>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center display-4 font-weight-bold">ALOE VERA GEL</h1>
        <p class="lead">Imagine slicing open an Aloe leaf and consuming the gel directly from the plant. Our Aloe Vera
            Gel is as close to
            the real thing as you can get.</p>
        <p class="lead">The miraculous aloe leaf contains 200 compounds, including 20 minerals, 18 amino acids and 12
            vitamins. A product
            of our patented aloe stabilization process, our gel is favored by those looking to maintain a healthy
            digestive
            system and a natural energy level.</p>
        <div class="alert alert-secondary">
            <h6>Benefits of Aloe Vera Gel:</h6>
            <ul>
                <li>Gives fresh breath.</li>
                <li>Helps with the lining of the of the month and refreshes the bacterial load in the guts.</li>
                <li>Natural Antioxidant, also, aid digestion due to the presence of cayenne pepper</li>
            </ul>
        </div>

    </div>
    <div class="container">
        <h1 class="text-center display-4 font-weight-bold">GARLIC THYME</h1>
        <p class="lead">The dietary uses of garlic and thyme have been traced back thousands of years. An Egyptian
            papyrus dating from
            1,500BC listed 22 healthy uses for garlic. Today, we are starting to understand how they work.</p>
        <p class="lead">Garlic and thyme, the two powerful antioxidants found in Forever Garlic-Thyme, combine to create
            a great tool inmaintaining good health. When garlic is cut or crushed, enzymes react to produce a powerful
            agent. Studies have shown that garlic’s other ingredients help the metabolism convert fats to energy and
            protect the body against free radicals.</p>
        <ul class="lead">
            <li>Reduce the Bacteria loads in Gum.</li>
            <li>Disinfect and purifies the entire digestive system,</li>
        </ul>
        <p class="lead"><i>I have never felt so free before in my life.</i></p>
        <ul class="lead">
            <li>NO MORE foul-smelling “halitosis” ever again</li>
            <li>NO MORE embarrassment or humiliation in social situations</li>
            <li>NO MORE having to keep your distance from people when you talk to them</li>
            <li>NO MORE having to spend heaps of money on products that only “mask” the problem</li>
            <li>NO MORE living like a recluse, afraid to go out because of your rotten breath</li>
            <li>NO MORE losing friends or ruining relationships PLEASE</li>
        </ul>
        <div class="alert alert-warning">
            <p><b>NOTE:</b> This product is not sold in any Store and this product is far different from any other one
                you might see elsewhere on the internet.</p>
        </div>

    </div>
    <div class="container">
        <h4 class="text-center display-4">What People Said After Using Bad Breath Remedy...</h4>
        <div class="card mb-3">
            <div class="card-header">
                “I now have so much more confidence”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“I’ve been following your advert on various online platform and my bad breath has completely
                        disappeared.
                        I now
                        have so much more confidence because I can speak to people face to face without worrying about
                        what kind
                        of odour is coming out of my mouth!
                        I have asked my brother for a breath test and he says the change has been massive. Thanks for
                        putting
                        such a wonderful product.</p>
                    <footer class="blockquote-footer text-right"><b>Steven</b>, <cite title="Source Title">Lagos
                            State</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “My wife is happy to kiss me again!!”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p> I’m so relieved that I have finally found something that works! And not just for me. For all the
                        people who
                        suffer from this, because it really can ruin a person’s life. After using forever freedom, my
                        breath became
                        noticeably better within just a few hours. My wife is happy to kiss me again!!”</p>
                    <footer class="blockquote-footer text-right"><b>Tony</b>, <cite title="Source Title">Abuja</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “An absolute godsend”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“James, your product (forever bright) was an absolute godsend. I used it as instructed and it is
                        really
                        wonderful… WORKS GREAT and POWERFUL. I’ve been using it as you said and my breath is NO MORE!.
                        I’m so grateful.”</p>
                    <footer class="blockquote-footer text-right"><b>Stella</b>, <cite
                            title="Source Title">Port-Harcourt</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “You are a Lifesaver!”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“I started using your product just 2 days ago but the difference has been astounding. There’s a
                        girl I’ve wanted
                        to ask out on a date for months but I was so paranoid about my breath. I couldn’t risk the
                        rejection. I finally
                        feel confident enough to go for it. Watch this space!!”.</p>
                    <footer class="blockquote-footer text-right"><b>Deji Yusuf</b>, <cite title="Source Title">Ilorin
                        </cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “I can’t thank you enough”  
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“I used to be ashamed of my breath. I literally didn’t want to leave my home because it was so
                        bad. I tried
                        everything my dentist told me to do but nothing worked for more than a few hours. Now my breath
                        is fresher,
                        cleaner and 100% better. Your product has literally finally given me my life back. I can’t thank
                        you
                        enough.” </p>
                    <footer class="blockquote-footer text-right"><b>Patrick</b>, <cite title="Source Title">Lagos
                            State</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “Why don’t more people know about this?!”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“Just 3 month ago I was so miserable. I don’t think I have ever been so low. It was all because
                        of my bad
                        breath. I discovered it was a problem when I noticed people at work shying away from talking to
                        me and since
                        then it has taken over my life. I can’t believe how well forever bright worked. Why don’t more
                        people know about
                        this?!”</p>
                    <footer class="blockquote-footer text-right"><b>Clara</b>, <cite title="Source Title">Uyo</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “So simple yet so effective”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“Thank you thank you thank you!! I thought this nightmare was never going to end. My mum found
                        your website and
                        told me to take a look. I had very low expectations but I am absolutely delighted with the
                        results! Your product
                        is so simple yet so effective. I just started the product and my breath is already much, much
                        better. I feel
                        like a massive weight has been lifted from my shoulders!”.</p>
                    <footer class="blockquote-footer text-right"><b>Angela</b>, <cite title="Source Title">Benin</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                “Thank you from me, my wife and everyone who knows me!!”
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>“You are an absolute legend James. I was starting to get a serious complex about my breath and
                        was really
                        struggling to talk to people because I was so worried about what they might be “smelling”, and
                        how they would
                        react. Your program is fantastic and it really works. Thank you from me, my wife and everyone
                        who knows
                        me!!”.</p>
                    <footer class="blockquote-footer text-right"><b>Okon</b>,<cite title="Source Title">Akwa Ibom</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="text-center mb-3">
        <kbd class="h4">
            Now, I know you can’t wait to lay your hands on this GUARANTEED solutions…
        </kbd>
    </div>
    <div class="container">
        <div class="alert alert-success">
            <h3>FREQUENTLY ASKED QUESTION</h3>
            <h6>1. What is the side effect of this Solution?
                Ans. This solution has no side effect, and it has been approved by NAFDAC
            </h6>
            <h6>
                2. What age range is this solution effective for?
                Ans. This Solution is effective with no side effect for any Age even 70+</h6>
            <h6>3. Do I have to make payment before delivery?
                Ans. No, You only have to make the payment to the delivery man
            </h6>
            <h6>4. Do I still have to call you before placing my order?
                Ans. No, Just follow the steps below to place your order but if you wish, feel free to call.
            </h6>
        </div>
    </div>
    <div class="container">
        <div class="alert alert-danger">
            <p>
                <i>
                    <b>NOTE:</b> This Mouth Odour Pack From Forever Living products is a Corrective Solution, You
                    won'tNeed to Keep Buying After this One. Thanks.
                </i>
            </p>
        </div>
    </div>

    <div class="display-3 text-center font-weight-normal">
        <p>HOW TO ORDER IF YOU ARE IN NIGERIA</p>
    </div>
    <marquee class="text-danger"><b>PAY ON DELIVERY:</b> You will only pay when this product has been physically brought
        down to you face-to-face by our courier company.</marquee>
    <div class="h2 font-weight-bold text-center text-uppercase text-danger">
        <p>If You May Want To Ask,
            How Much Will It Cost To Get The 
            Natural “Bad-Breath (Halitosis) Pack”  Delivered To me?
        </p>
        <p>WHAT IS THE PRICE AND HOW DO I ORDER?</p>
        <p>You Can’t Afford To Miss This!!!</p>
        <p>If You Place Order Within the Next 5 Days You Will Get “Bad-Breath (Halitosis)” Delivered To Your Door
            Step At
            Discount Price Of #32,500 Each Instead Of #42,500</p>
        <p>“Bad-Breath (Halitosis)”</p>
        <!-- <p>PRICES:</p> -->
        <p>Nigeria Price is N27,500</p>
    </div>

    <marquee behavior="" direction="">
        <h3 class="text-danger">DON’T WAIT A MOMENT, ORDER YOUR WITHIN THE NEXT 5 DAYS</h3>
    </marquee>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="text-uppercase text-center mb-3">To place immediate order for this product</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Please enter your fullname</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="tel" class="form-control" name="phoneNumber" id="exampleInputPassword1">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your Phone number with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputAddress">Contact Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputAddress">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone
                        else.e</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputDelivery">Date of Delivery</label>
                    <input type="date" class="form-control" name="dateOfDelivery" id="exampleInputDelivery">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- <h5>KINDLY FILL IN THE FORM BELOW TO PLACE ORDER
        Your Name

        Phone Number

        Contact Address

        Choice Date Of Delivery
    </h5>
    <h1>OR</h1> -->
    <div class="alert alert-info">
        <div class="container">
            <h4 class="text-uppercase">Pay Cash On Delivery</h4>
            <h5 class="text-monospace">We Deliver Our Products All Over Nigeria
                To take advantage of this special offer through our Pay on delivery service, if you reside in any part
                of
                Nigeria. The product will be delivered to your choice address and you will pay our courier servicemen
                upon
                delivery to the address given.
            </h5>
            <h5 class="text-monospace">To do this, send the following information:
                <ol>
                    <li>Your Full Name</li>
                    <li>Your Full House or Office Address</li>
                    <li>Mouth Odour Pack</li>
                    <li>Expected Delivery Date</li>
                    <li>Phone Number of the Recipient</li>
                </ol>
            </h5>
            <h1 class="text-center text-monospace">Send as SMS To: 09010696702</h5>
        </div>
    </div>
    <marquee behavior="" direction="" class="text-danger h3 text-uppercase">
         <p> ACT NOW…and start loving the rest of your life!

            Wishing you the best of glowing good health...
        </p>
    </marquee>
    <div class="alert alert-secondary">
        <div class="container">
            <div class="mb-5">
                <p>
                    Sincerely,
                </p>
                <p class="text-capitalize font-weight-bold">
                    jemies lifestyle plus
                </p>
            </div>
            <div>
                <p class="display-4 text-center text-success">
                    <b> CALL / WHATSAPP / SMS:</b> 090 169 6702
                </p>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>